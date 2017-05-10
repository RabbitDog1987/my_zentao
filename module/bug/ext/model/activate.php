<?php
/**
 * Activate a bug.
 *
 * @param  int    $bugID
 * @access public
 * @return void
 */
public function activate($bugID)
{

    
    $oldBug = $this->getById($bugID);
    $now = helper::now();
    $bug = fixer::input('post')
        ->setDefault('assignedTo', $oldBug->resolvedBy)
        ->add('assignedDate', $now)
        ->add('resolution', '')
        ->add('status', 'active')
        ->add('resolvedDate', '0000-00-00')
        ->add('resolvedBy', '')
        ->add('resolvedBuild', '')
        ->add('closedBy', '')
        ->add('closedDate', '0000-00-00')
        ->add('duplicateBug', 0)
        ->add('lastEditedBy',   $this->app->user->account)
        ->add('lastEditedDate', $now)
        ->join('openedBuild', ',')
        ->remove('comment,files,labels')
        ->get();

    $this->dao->update(TABLE_BUG)->data($bug)->autoCheck()->where('id')->eq((int)$bugID)->exec();
    $this->dao->update(TABLE_BUG)->set('activatedCount = activatedCount + 1')->where('id')->eq((int)$bugID)->exec();
    if (!dao::isError())
    {
        if ($oldBug->github != 0)
        {
            /*if($this->session->user->token==='')
            {
                //生成登录链接
                $login_url=$this->github->login_url($this->config->github->callback_url,'user,repo,public_repo,repo_deployment,repo:status,delete_repo,admin:repo_hook');
                die('<a href="'.$login_url.'">点击进入授权页面</a>');
                //https://github.com/login/oauth/
            }*/
            $this->loadModel('github');
            $this->github->resolve($oldBug, $bug, 'bug');
        } 
    }
}
