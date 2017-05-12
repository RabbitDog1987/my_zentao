<?php

class github extends control
{
	 public function __construct($moduleName = '', $methodName = '')
    {
        parent::__construct($moduleName, $methodName);
        /* Load need modules. */
        /*$this->loadModel('github');
		//检查是否已登录
		if($this->session->user->token==='')
		{
			//生成登录链接
			$login_url=$this->github->login_url($this->config->github->callback_url,'user,repo,public_repo,repo_deployment,repo:status,delete_repo,admin:repo_hook');
			die(js::locate($login_url));
			//echo '<a href="'.$login_url.'">点击进入授权页面</a>';
			//https://github.com/login/oauth/
		}*/
    }

	public function callback()
	{
		//授权回调页面，即配置文件中的$callback_url
		if(isset($_GET['code']) && $_GET['code']!=''){
			$result=$this->github->access_token($this->config->github->callback_url, $_GET['code']);
		}
		
		if(isset($result['access_token']) && $result['access_token']!=''){
			//echo '授权完成，请记录<br/>access token：<input size="50" value="',$result['access_token'],'">';
			//保存登录信息，此示例中使用session保存
			$this->session->user->token = $result['access_token'];
			$this->github->saveToken($result['access_token']);
			//die(js::closeWindow());
			//$url = $this->github->login_url($this->config->github->callback_url,'user,repo,public_repo,repo_deployment,repo:status,delete_repo,admin:repo_hook');
			die(js::locate(''));
		}else{
			echo '授权失败';
		}
		//$url = $this->createLink('bug', 'browse');
		//echo '<br/><a href="' . $url . '">返回</a>';
		//var_dump($_ENV['github_t']);die;
		//echo '<a href="#" onClick="javascript :history.back(-1);">返回</a>';		
	}

	public function commit()
	{
		//var_dump($_POST);die;
		$issue = json_decode($_POST['payload']);
var_dump($issue);die;
		if ($issue['payload']) 
		{
			//echo $issue;die;
			//file_put_contents('./aaa.text', $issue);
			var_dump($issue['payload']->issue->labels);die; 
			if ($issue['payload']->issue->labels == 'bug') {
				$this->github->linkbug($issue['payload']);
			}
		}
		else
		{
			$data = array(
				'errorCode' => '1',
				'time' 		=> time(),
				);
			echo json_encode($data);
		}	
	} 

	public function sync($bugID)
    {
		$bug = $this->dao->select('*')->from(TABLE_BUG)->where('id')->eq($bugID)->fetch();

		if ($bug->github == 0)
		{
			$ip = 'http://' . $_SERVER['HTTP_HOST'];//或https
			$upliadPath = 'data/upload/1/';
			$bug->steps = str_replace($upliadPath, $ip . '/' . $upliadPath, $bug->steps);
			//var_dump($this->session->user->account);die;
			$data = array(
				'title'=>$bug->title,
				'body'=>$bug->steps,
				'assignee'=>"zhaogang999",
				'labels'=>["bug"],
			);
			//$data = array();
			$result=$this->github->api('repos/zhaogang999/shop/issues', $data, 'POST');
			$this->dao->update(TABLE_BUG)->set('github')->eq($result->number)->where('id')->eq($bugID)->limit(1)->exec();
			echo '同步成功';
		}
		else
		{
			echo '已同步到GitHub，不需重复';
			//die(js::alert('已同步到GitHub'));
		}
    }


	//获取文件列表
	function list_dir($dir)
	{
    	$result = array();
    	if (is_dir($dir))
    	{
    		$file_dir = scandir($dir);
    		foreach($file_dir as $file)
    		{
    			if ($file == '.' || $file == '..')
    			{
    				continue;
    			}
    			elseif (is_dir($dir.$file))
    			{
    				$result = array_merge($result, list_dir($dir.$file.'/'));
    			}
    			else
    			{
    				array_push($result, $dir.$file);
    			}
    		}
    	}
    	return $result;
    }


	public function issues()
	{
		$issue = json_decode($_POST["payload"]);
		$fileName = 'https://github.com/zhaogang999/shop/archive/5.3.zip';

		//$fileName = '第八次发版.rar';
		$opts = array( 
    		'http'=>array( 
	        'method'=>"GET", 
	        'timeout'=>30, 
   			) 
		); 
		//$html = file_get_contents('http://www.example.com', false, stream_context_create($opts)); 
		$content = file_get_contents($fileName, false, stream_context_create($opts));

		/* Clean the ob content to make sure no space or utf-8 bom output. */
        $obLevel = ob_get_level();
        for($i = 0; $i < $obLevel; $i++) ob_end_clean();
       	file_put_contents('5.3.zip', $content);
        /* Set the downloading cookie, thus the export form page can use it to judge whether to close the window or not. */
        setcookie('downloading', 1);

        header("Content-type: 'application/octet-stream'");
        header("Content-Disposition: attachment; filename=\"$fileName\"");
        header("Pragma: no-cache");
        header('Content-Length: '. filesize($filename)); //告诉浏览器，文件大小 
        header("Expires: 0");
        die($content);

		/*$issue = json_decode($_POST["payload"]);
		$zipball_url = $issue->zipball_url;
		//$contents = file_get_contents($zipball_url);
		//var_dump($contents);die;
		//获取列表 
		$datalist=$this->list_dir($zipball_url);
		$filename = "./bak.zip"; //最终生成的文件名（含路径）   
		if(!file_exists($filename)){   
		//重新生成文件   
		    $zip = new ZipArchive();//使用本类，linux需开启zlib，windows需取消php_zip.dll前的注释   
		    if ($zip->open($filename, ZIPARCHIVE::CREATE)!==TRUE) {   
		        exit('无法打开文件，或者文件创建失败');
		    }   
		    foreach( $datalist as $val){   
		        if(file_exists($val)){   
		            $zip->addFile( $val, basename($val));//第二个参数是放在压缩包中的文件名称，如果文件可能会有重复，就需要注意一下   
		        }   
		    }   
		    $zip->close();//关闭   
		}   
		if(!file_exists($filename)){   
		    exit("无法找到文件"); //即使创建，仍有可能失败。。。。   
		}   
		header("Cache-Control: public"); 
		header("Content-Description: File Transfer"); 
		header('Content-disposition: attachment; filename='.basename($filename)); //文件名   
		header("Content-Type: application/zip"); //zip格式的   
		header("Content-Transfer-Encoding: binary"); //告诉浏览器，这是二进制文件    
		header('Content-Length: '. filesize($filename)); //告诉浏览器，文件大小   
		@readfile($filename);*/



		/*$zip = zip_open($zipball_url);
		if ($zip) 
		{
			while ($zip_entry = zip_read($zip)) 
			{
				echo "Name: " . zip_entry_name($zip_entry) . "n";
				echo "Actual Filesize: " . zip_entry_filesize($zip_entry) . "n";
				echo "Compressed Size: " . zip_entry_compressedsize($zip_entry) . "n";
				echo "Compression Method: " . zip_entry_compressionmethod($zip_entry) . "n";
				if (zip_entry_open($zip, $zip_entry, "r")) {
				echo "File Contents:n";
				$buf = zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));
				//var_dump($buf);die;
				echo "$buf\n";
				zip_entry_close($zip_entry);

			}
			echo "n";
			}
			zip_close($zip);
		}
		var_dump($buf);die;*/

		/*if ($issue['payload']) 
		{
			//echo $issue;die;
			//file_put_contents('./aaa.text', $issue);
			var_dump($issue['payload']->issue->labels);die; 
			if ($issue['payload']->issue->labels == 'bug') {
				$this->github->linkbug($issue['payload']);
			}
		}
		else
		{
			$data = array(
				'errorCode' => '1',
				'time' 		=> time(),
				);
			echo json_encode($data);
		}	*/
	}

    public function pic()
    {
    	var_dump($_SERVER);die;
    	$content = file_get_contents("https://cloud.githubusercontent.com/assets/23447598/24836202/39317b12-1d48-11e7-8022-bf384b9e1ccd.png");
    	file_put_contents('ffff.png', $content);
    	//echo $content;
    }

    


	public function userInfo()
	{
		$github_t=isset($_SESSION['github_t'])?$this->session->github_t:'';
		//var_dump($github_t);die;
		//var_dump($this->session->github_t);
		//检查是否已登录
		if($github_t!='')
		{
			//$github=new githubPHP($github_k, $github_s, $github_t);

			//获取登录用户信息
			/*$result=$this->github->me();
			var_dump($result);
*/
			
			//获取登录用户代码仓库
			/*$result=$this->github->repos();
			var_dump($result);*/
			

			
			//获取登录用户代码片段
			/*$result=$this->github->gists();
			var_dump($result);*/
			

			//其他功能请根据官方文档自行添加
			//示例：获取登录用户的issues
			//$result=$this->github->api('repos/zhaogang999/shop/issues/11', array(), 'GET');
			//var_dump($result);
			//die;
			/*$result=$this->github->api('rate_limit', array(), 'GET');
			var_dump($result);*/

			//获取issues列表
			/*$result = $this->github->api('repos/zhaogang999/shop/issues');
			var_dump($result);die;*/

			$data = array(
				'title'=>'# asssaa',
				'body'=>'![Uploading /data/upload/1/201704/0917302801486tq7.png…]()'
				);
			//$data = array();
			$result=$this->github->api('repos/zhaogang999/shop/issues', $data, 'POST');
			var_dump($result);die;


		}else{
			//生成登录链接
			//$github=new githubPHP($github_k, $github_s);
			$login_url=$this->github->login_url($this->config->github->callback_url,'user,repo,public_repo,repo_deployment,repo:status,delete_repo,admin:repo_hook');
			//var_dump($login_url);die;
			echo '<a href="'.$login_url.'">点击进入授权页面</a>';
			//https://github.com/login/oauth/
		}
	}

	

	public function String () 
	{
		echo "sldfsflsfdddd";
	}
}

