<?php
 die();
?>
20170401 10:02:11: 
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170401 10:02:13: user-login-Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170401 10:02:22: user-login-Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'admin'
  SELECT * FROM `zt_user` WHERE account  = 'admin' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '127.0.0.1', `last` = '1491012141' WHERE account  = 'admin'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'admin'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'admin'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'admin' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '1',`actor` = 'admin',`action` = 'login',`date` = '2017-04-01 10:02:21',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170401 10:02:22: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170401 10:02:22: my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 

20170401 10:02:23: block-printBlock-1-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '1'

20170401 10:02:23: block-printBlock-2-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-04-01' AND  date  < '2017-04-02' AND  (1)  ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1')
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170401 10:02:24: block-printBlock-3-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('14','13','12','11','10','9','3','2') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('14','13','12','11','10','9','3','2') ORDER BY `date` desc 

20170401 10:02:24: block-printBlock-4-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170401 10:02:24: block-printBlock-5-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('8','7','6','2','1') 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') AND  end  > '2017-04-01 10:02:24' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product

20170401 10:02:25: block-printBlock-6-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170401 10:02:25: block-printBlock-7-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170401 10:02:25: block-printBlock-8-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '8'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('1') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170401 10:02:25: block-printBlock-9-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170401 10:02:32: company
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170401 10:02:33: company-browse
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_dept` WHERE `id` = '0' 
  SELECT * FROM `zt_dept` ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_user` WHERE deleted  = '0' ORDER BY `id` 
  SELECT COUNT(*) AS recTotal FROM `zt_user` WHERE deleted  = '0' 
  SELECT * FROM `zt_user` WHERE deleted  = '0' ORDER BY `id` 
  SELECT id, title FROM `zt_userquery` WHERE account  = 'admin' AND  module  = 'user' ORDER BY `id` asc 
  SELECT * FROM `zt_dept` WHERE `id` = '0' 
  SELECT * FROM `zt_dept` ORDER BY `grade` desc,`order` 

20170401 10:02:35: report
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170401 10:02:35: report-productSummary
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id, code, name, PO FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed'
  SELECT * FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('1','2','6','7','8') AND  end  > '2017-04-01'
  SELECT id,plan,product,status FROM `zt_story` WHERE deleted  = '0'
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170401 10:02:36: doc
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.* FROM `zt_doclib` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product=t2.id  WHERE t1.deleted  = '0' AND  t1.product  != '0' ORDER BY t2.`order` desc,`id` desc 
  SELECT id,name,`order` FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc,`id` desc 
  SELECT t1.* FROM `zt_doclib` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project=t2.id  WHERE t1.deleted  = '0' AND  t1.project  != '0' ORDER BY t2.`order` desc,`id` desc 
  SELECT id,name,`order` FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2','1') ORDER BY `order` desc,`id` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' AND  project  = '0' AND  product  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') ORDER BY `id` 
  SELECT DISTINCT product FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project=t2.id  WHERE t1.product IN ('8','7','6','2','1') AND  t2.deleted  = '0'
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' AND  project IN ('14','13','12','11','10','9','3','2','1') ORDER BY `id` 

20170401 10:02:37: qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 

20170401 10:02:38: bug-browse
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_bug` WHERE project IN ('3','14','13','12','11','10','9','8','7','6','5','4','2','1','0') AND  product  = '8' AND  status  != 'closed' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_bug` WHERE project IN ('3','14','13','12','11','10','9','8','7','6','5','4','2','1','0') AND  product  = '8' AND  status  != 'closed' AND  deleted  = '0' 
  SELECT * FROM `zt_bug` WHERE project IN ('3','14','13','12','11','10','9','8','7','6','5','4','2','1','0') AND  product  = '8' AND  status  != 'closed' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_bug` WHERE project IN ('3','14','13','12','11','10','9','8','7','6','5','4','2','1','0') AND  product  = '8' AND  status  != 'closed' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('') AND  status  = 'active'
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT id,CONCAT(title, " [", begin, " ~ ", end, "]") as title FROM `zt_productplan` WHERE product IN ('8') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','bug') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT t2.id, t2.name, t2.deleted FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.product  = '8' AND  t2.id IN ('3','14','13','12','11','10','9','2','1') ORDER BY t1.`project` desc 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('8') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT build, name FROM `zt_release` WHERE build IN ('11') AND  product IN ('8') AND  deleted  = '0'
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('8') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT build, name FROM `zt_release` WHERE build IN ('11') AND  product IN ('8') AND  deleted  = '0'
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','bug') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','bug') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '8' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '8' 

20170401 10:02:39: project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 

20170401 10:02:40: project-task
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT id, name FROM `zt_project` WHERE parent  = '3'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '3' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('354','400','1229') ORDER BY `id` 
  SELECT name FROM `zt_testtask` WHERE id  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '3' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task' and parent != 0) OR (root = 1 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')

20170401 10:02:41: product
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 

20170401 10:02:41: product-browse
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_story` WHERE product IN ('8') AND  status IN ('','draft','active','changed') AND  deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` WHERE product IN ('8') AND  status IN ('','draft','active','changed') AND  deleted  = '0' 
  SELECT * FROM `zt_story` WHERE product IN ('8') AND  status IN ('','draft','active','changed') AND  deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_story` WHERE product IN ('8') AND  status IN ('','draft','active','changed') AND  deleted  = '0' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('8') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')
  SELECT * FROM `zt_story` WHERE product IN ('8') AND  status IN ('','draft','active','changed') AND  deleted  = '0' ORDER BY `id` desc 
  SELECT story, COUNT(*) AS tasks FROM `zt_task` WHERE story IN ('46','43') AND  deleted  = '0' GROUP BY story
  SELECT story, COUNT(*) AS bugs FROM `zt_bug` WHERE story IN ('46','43') AND  deleted  = '0' GROUP BY story
  SELECT story, COUNT(*) AS cases FROM `zt_case` WHERE story IN ('46','43') AND  deleted  = '0' GROUP BY story
  SELECT id,CONCAT(title, " [", begin, " ~ ", end, "]") as title FROM `zt_productplan` WHERE product IN ('8') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type  = 'story' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT id,CONCAT(title, " [", begin, " ~ ", end, "]") as title FROM `zt_productplan` WHERE product IN ('8') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT DISTINCT story FROM `zt_case` WHERE story IN ('46','43')
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type  = 'story' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT account, realname, deleted, INSTR(',pd,po,', role) AS roleOrder FROM `zt_user` WHERE deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type  = 'story' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '8' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_storystage` WHERE story IN ('46','43')

20170401 10:02:43: admin
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170401 10:02:44: company
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170401 10:02:44: company-browse
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_dept` WHERE `id` = '0' 
  SELECT * FROM `zt_dept` ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_user` WHERE deleted  = '0' ORDER BY `id` 
  SELECT COUNT(*) AS recTotal FROM `zt_user` WHERE deleted  = '0' 
  SELECT * FROM `zt_user` WHERE deleted  = '0' ORDER BY `id` 
  SELECT id, title FROM `zt_userquery` WHERE account  = 'admin' AND  module  = 'user' ORDER BY `id` asc 
  SELECT * FROM `zt_dept` WHERE `id` = '0' 
  SELECT * FROM `zt_dept` ORDER BY `grade` desc,`order` 

20170401 10:02:45: report
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170401 10:02:45: report-productSummary
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id, code, name, PO FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed'
  SELECT * FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('1','2','6','7','8') AND  end  > '2017-04-01'
  SELECT id,plan,product,status FROM `zt_story` WHERE deleted  = '0'
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170401 10:02:46: project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 

20170401 10:02:47: project-task
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT id, name FROM `zt_project` WHERE parent  = '3'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '3' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('354','400','1229') ORDER BY `id` 
  SELECT name FROM `zt_testtask` WHERE id  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '3' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task' and parent != 0) OR (root = 1 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')

20170401 10:02:47: product
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 

20170401 10:02:48: product-browse
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_story` WHERE product IN ('8') AND  status IN ('','draft','active','changed') AND  deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` WHERE product IN ('8') AND  status IN ('','draft','active','changed') AND  deleted  = '0' 
  SELECT * FROM `zt_story` WHERE product IN ('8') AND  status IN ('','draft','active','changed') AND  deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_story` WHERE product IN ('8') AND  status IN ('','draft','active','changed') AND  deleted  = '0' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('8') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')
  SELECT * FROM `zt_story` WHERE product IN ('8') AND  status IN ('','draft','active','changed') AND  deleted  = '0' ORDER BY `id` desc 
  SELECT story, COUNT(*) AS tasks FROM `zt_task` WHERE story IN ('46','43') AND  deleted  = '0' GROUP BY story
  SELECT story, COUNT(*) AS bugs FROM `zt_bug` WHERE story IN ('46','43') AND  deleted  = '0' GROUP BY story
  SELECT story, COUNT(*) AS cases FROM `zt_case` WHERE story IN ('46','43') AND  deleted  = '0' GROUP BY story
  SELECT id,CONCAT(title, " [", begin, " ~ ", end, "]") as title FROM `zt_productplan` WHERE product IN ('8') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type  = 'story' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT id,CONCAT(title, " [", begin, " ~ ", end, "]") as title FROM `zt_productplan` WHERE product IN ('8') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT DISTINCT story FROM `zt_case` WHERE story IN ('46','43')
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type  = 'story' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT account, realname, deleted, INSTR(',pd,po,', role) AS roleOrder FROM `zt_user` WHERE deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type  = 'story' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '8' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_storystage` WHERE story IN ('46','43')

20170401 10:02:50: qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 

20170401 10:02:50: bug-browse
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_bug` WHERE project IN ('3','14','13','12','11','10','9','8','7','6','5','4','2','1','0') AND  product  = '8' AND  status  != 'closed' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_bug` WHERE project IN ('3','14','13','12','11','10','9','8','7','6','5','4','2','1','0') AND  product  = '8' AND  status  != 'closed' AND  deleted  = '0' 
  SELECT * FROM `zt_bug` WHERE project IN ('3','14','13','12','11','10','9','8','7','6','5','4','2','1','0') AND  product  = '8' AND  status  != 'closed' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_bug` WHERE project IN ('3','14','13','12','11','10','9','8','7','6','5','4','2','1','0') AND  product  = '8' AND  status  != 'closed' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('') AND  status  = 'active'
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT id,CONCAT(title, " [", begin, " ~ ", end, "]") as title FROM `zt_productplan` WHERE product IN ('8') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','bug') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT t2.id, t2.name, t2.deleted FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.product  = '8' AND  t2.id IN ('3','14','13','12','11','10','9','2','1') ORDER BY t1.`project` desc 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('8') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT build, name FROM `zt_release` WHERE build IN ('11') AND  product IN ('8') AND  deleted  = '0'
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('8') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT build, name FROM `zt_release` WHERE build IN ('11') AND  product IN ('8') AND  deleted  = '0'
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','bug') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','bug') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '8' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '8' 

20170401 10:02:52: doc
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.* FROM `zt_doclib` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product=t2.id  WHERE t1.deleted  = '0' AND  t1.product  != '0' ORDER BY t2.`order` desc,`id` desc 
  SELECT id,name,`order` FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc,`id` desc 
  SELECT t1.* FROM `zt_doclib` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project=t2.id  WHERE t1.deleted  = '0' AND  t1.project  != '0' ORDER BY t2.`order` desc,`id` desc 
  SELECT id,name,`order` FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2','1') ORDER BY `order` desc,`id` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' AND  project  = '0' AND  product  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') ORDER BY `id` 
  SELECT DISTINCT product FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project=t2.id  WHERE t1.product IN ('8','7','6','2','1') AND  t2.deleted  = '0'
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' AND  project IN ('14','13','12','11','10','9','3','2','1') ORDER BY `id` 

20170401 10:02:52: qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 

20170401 10:02:53: bug-browse
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_bug` WHERE project IN ('3','14','13','12','11','10','9','8','7','6','5','4','2','1','0') AND  product  = '8' AND  status  != 'closed' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_bug` WHERE project IN ('3','14','13','12','11','10','9','8','7','6','5','4','2','1','0') AND  product  = '8' AND  status  != 'closed' AND  deleted  = '0' 
  SELECT * FROM `zt_bug` WHERE project IN ('3','14','13','12','11','10','9','8','7','6','5','4','2','1','0') AND  product  = '8' AND  status  != 'closed' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_bug` WHERE project IN ('3','14','13','12','11','10','9','8','7','6','5','4','2','1','0') AND  product  = '8' AND  status  != 'closed' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('') AND  status  = 'active'
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT id,CONCAT(title, " [", begin, " ~ ", end, "]") as title FROM `zt_productplan` WHERE product IN ('8') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','bug') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT t2.id, t2.name, t2.deleted FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.product  = '8' AND  t2.id IN ('3','14','13','12','11','10','9','2','1') ORDER BY t1.`project` desc 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('8') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT build, name FROM `zt_release` WHERE build IN ('11') AND  product IN ('8') AND  deleted  = '0'
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('8') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT build, name FROM `zt_release` WHERE build IN ('11') AND  product IN ('8') AND  deleted  = '0'
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','bug') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','bug') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '8' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '8' 

20170401 10:02:54: bug-browse-8
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_bug` WHERE project IN ('3','14','13','12','11','10','9','8','7','6','5','4','2','1','0') AND  product  = '8' AND  status  != 'closed' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_bug` WHERE project IN ('3','14','13','12','11','10','9','8','7','6','5','4','2','1','0') AND  product  = '8' AND  status  != 'closed' AND  deleted  = '0' 
  SELECT * FROM `zt_bug` WHERE project IN ('3','14','13','12','11','10','9','8','7','6','5','4','2','1','0') AND  product  = '8' AND  status  != 'closed' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_bug` WHERE project IN ('3','14','13','12','11','10','9','8','7','6','5','4','2','1','0') AND  product  = '8' AND  status  != 'closed' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('') AND  status  = 'active'
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT id,CONCAT(title, " [", begin, " ~ ", end, "]") as title FROM `zt_productplan` WHERE product IN ('8') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','bug') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT t2.id, t2.name, t2.deleted FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.product  = '8' AND  t2.id IN ('3','14','13','12','11','10','9','2','1') ORDER BY t1.`project` desc 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('8') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT build, name FROM `zt_release` WHERE build IN ('11') AND  product IN ('8') AND  deleted  = '0'
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('8') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT build, name FROM `zt_release` WHERE build IN ('11') AND  product IN ('8') AND  deleted  = '0'
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','bug') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','bug') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '8' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '8' 

20170401 10:02:59: bug-create-8-0-moduleID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted, INSTR(',td,pm,qd,qa,dev,', role) AS roleOrder FROM `zt_user` WHERE deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('8') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT build, name FROM `zt_release` WHERE build IN ('11') AND  product IN ('8') AND  deleted  = '0'
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('8') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t2.id, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.product  = '8' AND  t2.status  != 'done' ORDER BY t2.`begin` desc  LIMIT 1 
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '14' AND  t2.deleted  = '0'
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','bug') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT t2.id, t2.name, t2.deleted FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.product  = '8' AND  t2.id IN ('3','14','13','12','11','10','9','2','1') ORDER BY t1.`project` desc 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT id,account,title,content,public FROM `zt_usertpl` WHERE type  = 'bug' AND ( account  = 'admin' OR public  = '1') ORDER BY `id` 
  SELECT id, listName FROM `zt_usercontact` WHERE account  = 'admin'

20170401 10:02:59: bug-ajaxGetModuleOwner-0-8
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT QD FROM `zt_product` WHERE `id` = '8' 

20170401 10:12:37: bug-create-8-0-moduleID=0
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170401 10:12:37: user-login-L2J1Zy1jcmVhdGUtOC0wLW1vZHVsZUlEPTAuaHRtbA==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170401 10:12:51: user-login-L2J1Zy1jcmVhdGUtOC0wLW1vZHVsZUlEPTAuaHRtbA==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'admin'
  SELECT * FROM `zt_user` WHERE account  = 'admin' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '127.0.0.1', `last` = '1491012771' WHERE account  = 'admin'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'admin'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'admin'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'admin' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '1',`actor` = 'admin',`action` = 'login',`date` = '2017-04-01 10:12:51',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170401 10:12:52: bug-create-8-0-moduleID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted, INSTR(',td,pm,qd,qa,dev,', role) AS roleOrder FROM `zt_user` WHERE deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT * FROM `zt_branch` WHERE product  = '8' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('8') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT build, name FROM `zt_release` WHERE build IN ('11') AND  product IN ('8') AND  deleted  = '0'
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('8') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t2.id, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.product  = '8' AND  t2.status  != 'done' ORDER BY t2.`begin` desc  LIMIT 1 
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '14' AND  t2.deleted  = '0'
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','bug') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT t2.id, t2.name, t2.deleted FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.product  = '8' AND  t2.id IN ('3','14','13','12','11','10','9','2','1') ORDER BY t1.`project` desc 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT id,account,title,content,public FROM `zt_usertpl` WHERE type  = 'bug' AND ( account  = 'admin' OR public  = '1') ORDER BY `id` 
  SELECT id, listName FROM `zt_usercontact` WHERE account  = 'admin'

20170401 10:12:53: bug-ajaxGetModuleOwner-0-8
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT QD FROM `zt_product` WHERE `id` = '8' 

20170401 10:13:00: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170401 10:13:09: bug-create-8-0-moduleID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted, INSTR(',td,pm,qd,qa,dev,', role) AS roleOrder FROM `zt_user` WHERE deleted  = '0' ORDER BY `roleOrder` DESC,`account` 

20170401 10:13:59: file-ajaxPasteImage-58df0ca3d71a4
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  INSERT INTO `zt_file` SET `extension` = 'png',`pathname` = '201704/0110135902099b6n.png',`size` = '1257',`addedBy` = 'admin',`addedDate` = '2017-04-01',`title` = '0110135902099b6n.png'

20170401 10:14:01: file-ajaxPasteImage-58df0ca3d71a4
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  INSERT INTO `zt_file` SET `extension` = 'png',`pathname` = '201704/0110140104226bgt.png',`size` = '1257',`addedBy` = 'admin',`addedDate` = '2017-04-01',`title` = '0110140104226bgt.png'

20170401 10:14:13: bug-create-8-0-moduleID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted, INSTR(',td,pm,qd,qa,dev,', role) AS roleOrder FROM `zt_user` WHERE deleted  = '0' ORDER BY `roleOrder` DESC,`account` 

20170401 10:23:00: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170401 10:28:49: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170401 10:28:51: project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 

20170401 10:28:51: project-task
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT id, name FROM `zt_project` WHERE parent  = '3'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '3' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('354','400','1229') ORDER BY `id` 
  SELECT name FROM `zt_testtask` WHERE id  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '3' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task' and parent != 0) OR (root = 1 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')

20170401 10:28:56: task-start-297
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '297'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '297' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '297' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('973') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170401 10:29:00: task-start-297
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '297'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '297' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '297' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('973') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'

20170401 10:29:57: task-start-297
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '297'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '297' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '297' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('973') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170401 10:30:02: task-start-297
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '297'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '297' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '297' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('973') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'

20170401 10:30:10: project-task
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT id, name FROM `zt_project` WHERE parent  = '3'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '3' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('354','400','1229') ORDER BY `id` 
  SELECT name FROM `zt_testtask` WHERE id  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '3' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task' and parent != 0) OR (root = 1 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')

20170401 10:30:13: task-view-297
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '297'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '297' AND  extra  != 'editor'
  SELECT * FROM `zt_story` WHERE `id` = '0' 
  SELECT * FROM `zt_file` WHERE objectType  = 'story' AND  objectID  = '0' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '297' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('973') ORDER BY `id` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT * FROM `zt_task` WHERE id  = '297' OR project  = '3' AND  deleted  = '0' AND  status IN ('','wait','doing','done','pause','cancel')  ORDER BY `status`,`id` desc 

20170401 10:30:18: task-start-297
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '297'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '297' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '297' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('973') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170401 10:30:31: task-start-297
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '297'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '297' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '297' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('973') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'

20170401 10:30:34: task-edit-297
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '297'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '297' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '297' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('973') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT t2.id, t2.title, t2.module, t2.pri, t2.estimate, t3.name AS product FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_product` AS t3  ON t1.product = t3.id  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, realname, deleted FROM `zt_user` WHERE account IN ('admin','','')
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 

20170401 10:30:53: task-edit-297
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '297'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '297' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '297' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('973') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '297'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '297' AND  extra  != 'editor'
  SELECT version FROM `zt_story` WHERE id  = '0'

20170401 10:31:03: project-task-3
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT id, name FROM `zt_project` WHERE parent  = '3'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '3' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('354','400','1229') ORDER BY `id` 
  SELECT name FROM `zt_testtask` WHERE id  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '3' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task' and parent != 0) OR (root = 1 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')

20170401 10:31:46: task-edit-297
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '297'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '297' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '297' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('973') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT t2.id, t2.title, t2.module, t2.pri, t2.estimate, t3.name AS product FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_product` AS t3  ON t1.product = t3.id  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, realname, deleted FROM `zt_user` WHERE account IN ('admin','','')
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 

20170401 10:31:52: task-edit-297
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '297'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '297' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '297' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('973') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '297'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '297' AND  extra  != 'editor'
  SELECT version FROM `zt_story` WHERE id  = '0'

20170401 10:32:15: task-edit-297
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '297'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '297' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '297' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('973') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '297'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '297' AND  extra  != 'editor'
  SELECT version FROM `zt_story` WHERE id  = '0'

20170401 10:32:24: task-edit-297
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '297'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '297' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '297' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('973') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '297'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '297' AND  extra  != 'editor'
  SELECT version FROM `zt_story` WHERE id  = '0'
  INSERT INTO `zt_taskestimate` SET `consumed` = '0',`left` = '8',`task` = '297',`account` = 'admin',`date` = '2017-04-01 10:32:24'

20170401 10:33:00: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170401 10:39:03: bug-create-8-0-moduleID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted, INSTR(',td,pm,qd,qa,dev,', role) AS roleOrder FROM `zt_user` WHERE deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('8') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT build, name FROM `zt_release` WHERE build IN ('11') AND  product IN ('8') AND  deleted  = '0'
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('8') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t2.id, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.product  = '8' AND  t2.status  != 'done' ORDER BY t2.`begin` desc  LIMIT 1 
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '14' AND  t2.deleted  = '0'
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','bug') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT t2.id, t2.name, t2.deleted FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.product  = '8' AND  t2.id IN ('3','14','13','12','11','10','9','2','1') ORDER BY t1.`project` desc 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT id,account,title,content,public FROM `zt_usertpl` WHERE type  = 'bug' AND ( account  = 'admin' OR public  = '1') ORDER BY `id` 
  SELECT id, listName FROM `zt_usercontact` WHERE account  = 'admin'

20170401 10:39:03: bug-ajaxGetModuleOwner-0-8
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT QD FROM `zt_product` WHERE `id` = '8' 

20170401 10:39:16: bug-create-8-0-moduleID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted, INSTR(',td,pm,qd,qa,dev,', role) AS roleOrder FROM `zt_user` WHERE deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT version FROM `zt_story` WHERE id  = '0'
  SELECT id,title FROM `zt_bug` WHERE deleted  = '0' AND  title IN ('2222') AND  openedDate  >= '2017-04-01 10:38:16' AND  product=8 

20170401 10:39:28: bug-create-8-0-moduleID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted, INSTR(',td,pm,qd,qa,dev,', role) AS roleOrder FROM `zt_user` WHERE deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT version FROM `zt_story` WHERE id  = '0'
  SELECT id,title FROM `zt_bug` WHERE deleted  = '0' AND  title IN ('2222') AND  openedDate  >= '2017-04-01 10:38:28' AND  product=8 
  INSERT INTO `zt_bug` SET `product` = '8',`module` = '0',`project` = '0',`openedBuild` = 'trunk',`assignedTo` = '',`deadline` = '0000-00-00',`type` = 'codeerror',`os` = '',`browser` = '',`color` = '',`title` = '2222',`severity` = '3',`pri` = '0',`steps` = '<p>[步骤]</p>\r\n<p>[结果]</p>\r\n<p>[期望]</p>',`story` = '0',`task` = '0',`mailto` = '',`keywords` = '',`case` = '0',`caseVersion` = '0',`result` = '0',`testtask` = '0',`openedBy` = 'admin',`openedDate` = '2017-04-01 10:39:28'
  SELECT product, project FROM `zt_bug` WHERE id  = '17'
  INSERT INTO `zt_action` SET `objectType` = 'bug',`objectID` = '17',`actor` = 'admin',`action` = 'opened',`date` = '2017-04-01 10:39:28',`comment` = '',`extra` = '',`product` = ',8,',`project` = '0'
  SELECT t1.*, t2.name AS projectName, t3.title AS storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion, t4.name AS taskName, t5.title AS planName FROM `zt_bug` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  LEFT JOIN `zt_task` AS t4  ON t1.task = t4.id  LEFT JOIN `zt_productplan` AS t5  ON t1.plan = t5.id  WHERE t1.id  = '17'
  SELECT id, title FROM `zt_case` WHERE `fromBug`  = '17'
  SELECT * FROM `zt_file` WHERE objectType  = 'bug' AND  objectID  = '17' AND  extra  != 'editor'
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT * FROM `zt_action` WHERE `id` = '2064' 
  SELECT * FROM `zt_history` WHERE action IN ('2064') ORDER BY `id` 

20170401 10:39:28: bug-browse-8
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_bug` WHERE project IN ('3','14','13','12','11','10','9','8','7','6','5','4','2','1','0') AND  product  = '8' AND  status  != 'closed' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_bug` WHERE project IN ('3','14','13','12','11','10','9','8','7','6','5','4','2','1','0') AND  product  = '8' AND  status  != 'closed' AND  deleted  = '0' 
  SELECT * FROM `zt_bug` WHERE project IN ('3','14','13','12','11','10','9','8','7','6','5','4','2','1','0') AND  product  = '8' AND  status  != 'closed' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_bug` WHERE project IN ('3','14','13','12','11','10','9','8','7','6','5','4','2','1','0') AND  product  = '8' AND  status  != 'closed' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('') AND  status  = 'active'
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('8') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT build, name FROM `zt_release` WHERE build IN ('11') AND  product IN ('8') AND  deleted  = '0'
  SELECT id,CONCAT(title, " [", begin, " ~ ", end, "]") as title FROM `zt_productplan` WHERE product IN ('8') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','bug') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT t2.id, t2.name, t2.deleted FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.product  = '8' AND  t2.id IN ('3','14','13','12','11','10','9','2','1') ORDER BY t1.`project` desc 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('8') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT build, name FROM `zt_release` WHERE build IN ('11') AND  product IN ('8') AND  deleted  = '0'
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('8') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT build, name FROM `zt_release` WHERE build IN ('11') AND  product IN ('8') AND  deleted  = '0'
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','bug') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','bug') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '8' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '8' 

20170401 10:39:34: bug-assignTo-17
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*, t2.name AS projectName, t3.title AS storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion, t4.name AS taskName, t5.title AS planName FROM `zt_bug` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  LEFT JOIN `zt_task` AS t4  ON t1.task = t4.id  LEFT JOIN `zt_productplan` AS t5  ON t1.plan = t5.id  WHERE t1.id  = '17'
  SELECT id, title FROM `zt_case` WHERE `fromBug`  = '17'
  SELECT * FROM `zt_file` WHERE objectType  = 'bug' AND  objectID  = '17' AND  extra  != 'editor'
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'bug' AND  objectID  = '17' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('2064') ORDER BY `id` 

20170401 10:39:40: bug-assignTo-17
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*, t2.name AS projectName, t3.title AS storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion, t4.name AS taskName, t5.title AS planName FROM `zt_bug` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  LEFT JOIN `zt_task` AS t4  ON t1.task = t4.id  LEFT JOIN `zt_productplan` AS t5  ON t1.plan = t5.id  WHERE t1.id  = '17'
  SELECT id, title FROM `zt_case` WHERE `fromBug`  = '17'
  SELECT * FROM `zt_file` WHERE objectType  = 'bug' AND  objectID  = '17' AND  extra  != 'editor'
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT t1.*, t2.name AS projectName, t3.title AS storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion, t4.name AS taskName, t5.title AS planName FROM `zt_bug` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  LEFT JOIN `zt_task` AS t4  ON t1.task = t4.id  LEFT JOIN `zt_productplan` AS t5  ON t1.plan = t5.id  WHERE t1.id  = '17'
  SELECT id, title FROM `zt_case` WHERE `fromBug`  = '17'
  SELECT * FROM `zt_file` WHERE objectType  = 'bug' AND  objectID  = '17' AND  extra  != 'editor'
  UPDATE `zt_bug` SET `assignedTo` = 'dev1',`mailto` = '',`lastEditedBy` = 'admin',`lastEditedDate` = '2017-04-01 10:39:38',`assignedDate` = '2017-04-01 10:39:38' WHERE id  = '17'
  SELECT product, project FROM `zt_bug` WHERE id  = '17'
  INSERT INTO `zt_action` SET `objectType` = 'bug',`objectID` = '17',`actor` = 'admin',`action` = 'assigned',`date` = '2017-04-01 10:39:38',`comment` = '',`extra` = 'dev1',`product` = ',8,',`project` = '0'
  INSERT INTO `zt_history` SET `field` = 'assignedTo',`old` = '',`new` = 'dev1',`diff` = '',`action` = '2065'
  SELECT t1.*, t2.name AS projectName, t3.title AS storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion, t4.name AS taskName, t5.title AS planName FROM `zt_bug` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  LEFT JOIN `zt_task` AS t4  ON t1.task = t4.id  LEFT JOIN `zt_productplan` AS t5  ON t1.plan = t5.id  WHERE t1.id  = '17'
  SELECT id, title FROM `zt_case` WHERE `fromBug`  = '17'
  SELECT * FROM `zt_file` WHERE objectType  = 'bug' AND  objectID  = '17' AND  extra  != 'editor'
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT * FROM `zt_action` WHERE `id` = '2065' 
  SELECT * FROM `zt_history` WHERE action IN ('2065') ORDER BY `id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('dev1','')

20170401 10:39:40: bug-browse-8
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_bug` WHERE project IN ('3','14','13','12','11','10','9','8','7','6','5','4','2','1','0') AND  product  = '8' AND  status  != 'closed' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_bug` WHERE project IN ('3','14','13','12','11','10','9','8','7','6','5','4','2','1','0') AND  product  = '8' AND  status  != 'closed' AND  deleted  = '0' 
  SELECT * FROM `zt_bug` WHERE project IN ('3','14','13','12','11','10','9','8','7','6','5','4','2','1','0') AND  product  = '8' AND  status  != 'closed' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_bug` WHERE project IN ('3','14','13','12','11','10','9','8','7','6','5','4','2','1','0') AND  product  = '8' AND  status  != 'closed' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('') AND  status  = 'active'
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('8') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT build, name FROM `zt_release` WHERE build IN ('11') AND  product IN ('8') AND  deleted  = '0'
  SELECT id,CONCAT(title, " [", begin, " ~ ", end, "]") as title FROM `zt_productplan` WHERE product IN ('8') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','bug') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT t2.id, t2.name, t2.deleted FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.product  = '8' AND  t2.id IN ('3','14','13','12','11','10','9','2','1') ORDER BY t1.`project` desc 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('8') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT build, name FROM `zt_release` WHERE build IN ('11') AND  product IN ('8') AND  deleted  = '0'
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('8') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT build, name FROM `zt_release` WHERE build IN ('11') AND  product IN ('8') AND  deleted  = '0'
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','bug') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','bug') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '8' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '8' 

20170401 10:39:49: project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 

20170401 10:39:49: project-task
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT id, name FROM `zt_project` WHERE parent  = '3'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '3' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('354','400','1229') ORDER BY `id` 
  SELECT name FROM `zt_testtask` WHERE id  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '3' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task' and parent != 0) OR (root = 1 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')

20170401 10:39:51: task-create-3--0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t2.id, t2.title, t2.module, t2.pri, t2.estimate, t3.name AS product FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_product` AS t3  ON t1.product = t3.id  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT id, listName FROM `zt_usercontact` WHERE account  = 'admin'

20170401 10:40:02: task-create-3--0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT version FROM `zt_story` WHERE id  = '0'
  SELECT id,name FROM `zt_task` WHERE deleted  = '0' AND  name IN ('22222') AND  openedDate  >= '2017-04-01 10:39:00' AND  project=3 
  INSERT INTO `zt_task` SET `module` = '0',`type` = 'devel',`story` = '0',`color` = '',`name` = '22222',`pri` = '0',`estimate` = '0',`desc` = '',`estStarted` = '0000-00-00',`deadline` = '0000-00-00',`mailto` = '',`project` = '3',`left` = '0',`status` = 'wait',`storyVersion` = '',`openedBy` = 'admin',`openedDate` = '2017-04-01 10:40:00',`assignedTo` = 'dev1',`assignedDate` = '2017-04-01 10:40:00'
  SELECT * FROM `zt_file` WHERE id IN ('')
  SELECT project, story FROM `zt_task` WHERE id  = '514'
  SELECT product FROM `zt_projectproduct` WHERE project  = '3'
  INSERT INTO `zt_action` SET `objectType` = 'task',`objectID` = '514',`actor` = 'admin',`action` = 'opened',`date` = '2017-04-01 10:40:01',`comment` = '',`extra` = '',`product` = ',1,',`project` = '3'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '514'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '514' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT * FROM `zt_action` WHERE `id` = '2066' 
  SELECT * FROM `zt_history` WHERE action IN ('2066') ORDER BY `id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('dev1','')

20170401 10:40:02: project-browse-3-task
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 

20170401 10:40:03: project-task-3
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT id, name FROM `zt_project` WHERE parent  = '3'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '3' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('354','400','1229') ORDER BY `id` 
  SELECT name FROM `zt_testtask` WHERE id  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '3' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task' and parent != 0) OR (root = 1 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')

20170401 10:40:06: task-start-514
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '514'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '514' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '514' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('2066') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170401 10:40:08: task-start-514
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '514'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '514' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '514' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('2066') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'

20170401 10:41:04: task-edit-297
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '297'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '297' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '297' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('973') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '297'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '297' AND  extra  != 'editor'
  SELECT version FROM `zt_story` WHERE id  = '0'
  INSERT INTO `zt_taskestimate` SET `consumed` = '0',`left` = '8',`task` = '297',`account` = 'admin',`date` = '2017-04-01 10:41:04'

20170401 10:41:10: project-task-3
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT id, name FROM `zt_project` WHERE parent  = '3'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '3' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('354','400','1229') ORDER BY `id` 
  SELECT name FROM `zt_testtask` WHERE id  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '3' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task' and parent != 0) OR (root = 1 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')

20170401 10:41:16: task-start-514
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '514'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '514' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '514' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('2066') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170401 10:41:21: task-start-514
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '514'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '514' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '514' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('2066') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'

20170401 10:42:18: task-start-514
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '514'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '514' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '514' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('2066') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'

20170401 10:43:10: task-start-514
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '514'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '514' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '514' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('2066') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170401 10:43:16: task-start-514
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '514'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '514' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '514' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('2066') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'

20170401 10:44:29: admin
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170401 10:44:33: extension-browse
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_extension` WHERE status  = 'installed'

20170401 10:45:04: extension-structure-gantt
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_extension` WHERE code  = 'gantt'

20170401 10:45:32: extension-structure-gantt
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_extension` WHERE code  = 'gantt'

20170401 10:45:50: extension-uninstall-gantt
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170401 10:45:53: extension-uninstall-gantt-yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_extension` WHERE code  = 'gantt'
  SELECT * FROM `zt_extension` WHERE depends  LIKE '%gantt%' AND  status  != 'available'
  UPDATE `zt_extension` SET `status` = 'available' WHERE code  = 'gantt'
  SELECT * FROM `zt_extension` WHERE code  = 'gantt'

20170401 10:50:04: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170401 10:50:07: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170401 10:54:33: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170401 10:57:05: product
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 

20170401 10:57:05: product-browse
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_story` WHERE product IN ('8') AND  status IN ('','draft','active','changed') AND  deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` WHERE product IN ('8') AND  status IN ('','draft','active','changed') AND  deleted  = '0' 
  SELECT * FROM `zt_story` WHERE product IN ('8') AND  status IN ('','draft','active','changed') AND  deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_story` WHERE product IN ('8') AND  status IN ('','draft','active','changed') AND  deleted  = '0' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('8') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')
  SELECT * FROM `zt_story` WHERE product IN ('8') AND  status IN ('','draft','active','changed') AND  deleted  = '0' ORDER BY `id` desc 
  SELECT story, COUNT(*) AS tasks FROM `zt_task` WHERE story IN ('46','43') AND  deleted  = '0' GROUP BY story
  SELECT story, COUNT(*) AS bugs FROM `zt_bug` WHERE story IN ('46','43') AND  deleted  = '0' GROUP BY story
  SELECT story, COUNT(*) AS cases FROM `zt_case` WHERE story IN ('46','43') AND  deleted  = '0' GROUP BY story
  SELECT id,CONCAT(title, " [", begin, " ~ ", end, "]") as title FROM `zt_productplan` WHERE product IN ('8') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type  = 'story' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT id,CONCAT(title, " [", begin, " ~ ", end, "]") as title FROM `zt_productplan` WHERE product IN ('8') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT DISTINCT story FROM `zt_case` WHERE story IN ('46','43')
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type  = 'story' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT account, realname, deleted, INSTR(',pd,po,', role) AS roleOrder FROM `zt_user` WHERE deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type  = 'story' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '8' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_storystage` WHERE story IN ('46','43')

20170401 10:57:08: project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 

20170401 10:57:09: project-task
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT id, name FROM `zt_project` WHERE parent  = '3'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '3' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('354','400','1229') ORDER BY `id` 
  SELECT name FROM `zt_testtask` WHERE id  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '3' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task' and parent != 0) OR (root = 1 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')

20170401 10:57:11: task-start-514
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '514'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '514' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '514' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('2066') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170401 10:57:16: task-start-514
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '514'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '514' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '514' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('2066') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'

20170401 11:00:04: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170401 11:00:07: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170401 11:00:33: project-task
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT id, name FROM `zt_project` WHERE parent  = '3'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '3' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('354','400','1229') ORDER BY `id` 
  SELECT name FROM `zt_testtask` WHERE id  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '3' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task' and parent != 0) OR (root = 1 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')

20170401 11:00:35: task-start-514
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '514'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '514' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '514' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('2066') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170401 11:00:39: task-start-514
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '514'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '514' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '514' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('2066') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '514'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '514' AND  extra  != 'editor'
  INSERT INTO `zt_taskestimate` SET `consumed` = '0',`left` = '8',`account` = 'admin',`task` = '514',`date` = '2017-04-01'
  UPDATE `zt_task` SET `realStarted` = '2017-04-01',`consumed` = '0',`left` = '8',`assignedTo` = 'admin',`lastEditedBy` = 'admin',`lastEditedDate` = '2017-04-01 11:00:39',`assignedDate` = '2017-04-01 11:00:39',`status` = 'doing' WHERE id  = '514'
  SELECT project, story FROM `zt_task` WHERE id  = '514'
  SELECT product FROM `zt_projectproduct` WHERE project  = '3'
  INSERT INTO `zt_action` SET `objectType` = 'task',`objectID` = '514',`actor` = 'admin',`action` = 'started',`date` = '2017-04-01 11:00:39',`comment` = '',`extra` = '',`product` = ',1,',`project` = '3'
  INSERT INTO `zt_history` SET `field` = 'realStarted',`old` = '0000-00-00',`new` = '2017-04-01',`diff` = '',`action` = '2067'
  INSERT INTO `zt_history` SET `field` = 'left',`old` = '0',`new` = '8',`diff` = '',`action` = '2067'
  INSERT INTO `zt_history` SET `field` = 'assignedTo',`old` = 'dev1',`new` = 'admin',`diff` = '',`action` = '2067'
  INSERT INTO `zt_history` SET `field` = 'status',`old` = 'wait',`new` = 'doing',`diff` = '',`action` = '2067'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '514'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '514' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT * FROM `zt_action` WHERE `id` = '2067' 
  SELECT * FROM `zt_history` WHERE action IN ('2067') ORDER BY `id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '514'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '514' AND  extra  != 'editor'

20170401 11:00:40: project-task
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT id, name FROM `zt_project` WHERE parent  = '3'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '3' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('354','400','1229') ORDER BY `id` 
  SELECT name FROM `zt_testtask` WHERE id  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '3' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task' and parent != 0) OR (root = 1 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')

20170401 11:00:45: task-start-297
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '297'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '297' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '297' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('973') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170401 11:00:49: task-start-297
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '297'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '297' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '297' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('973') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '297'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '297' AND  extra  != 'editor'
  INSERT INTO `zt_taskestimate` SET `consumed` = '0',`left` = '8',`account` = 'admin',`task` = '297',`date` = '2017-04-01'
  UPDATE `zt_task` SET `realStarted` = '2017-04-01',`consumed` = '0',`left` = '8',`assignedTo` = 'admin',`lastEditedBy` = 'admin',`lastEditedDate` = '2017-04-01 11:00:49',`assignedDate` = '2017-04-01 11:00:49',`status` = 'doing' WHERE id  = '297'
  SELECT project, story FROM `zt_task` WHERE id  = '297'
  SELECT product FROM `zt_projectproduct` WHERE project  = '3'
  INSERT INTO `zt_action` SET `objectType` = 'task',`objectID` = '297',`actor` = 'admin',`action` = 'started',`date` = '2017-04-01 11:00:49',`comment` = '',`extra` = '',`product` = ',1,',`project` = '3'
  INSERT INTO `zt_history` SET `field` = 'realStarted',`old` = '0000-00-00',`new` = '2017-04-01',`diff` = '',`action` = '2068'
  INSERT INTO `zt_history` SET `field` = 'left',`old` = '0',`new` = '8',`diff` = '',`action` = '2068'
  INSERT INTO `zt_history` SET `field` = 'assignedTo',`old` = '',`new` = 'admin',`diff` = '',`action` = '2068'
  INSERT INTO `zt_history` SET `field` = 'status',`old` = 'wait',`new` = 'doing',`diff` = '',`action` = '2068'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '297'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '297' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT * FROM `zt_action` WHERE `id` = '2068' 
  SELECT * FROM `zt_history` WHERE action IN ('2068') ORDER BY `id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '297'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '297' AND  extra  != 'editor'

20170401 11:00:49: project-task
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT id, name FROM `zt_project` WHERE parent  = '3'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '3' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('354','400','1229') ORDER BY `id` 
  SELECT name FROM `zt_testtask` WHERE id  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '3' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task' and parent != 0) OR (root = 1 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')

20170401 11:10:04: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170401 11:10:07: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170401 11:10:33: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170401 11:10:46: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170401 11:14:06: task-start-273
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '273'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '273' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '273' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('906') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170401 11:14:10: task-start-273
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '273'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '273' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '273' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('906') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '273'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '273' AND  extra  != 'editor'
  INSERT INTO `zt_taskestimate` SET `consumed` = '0',`left` = '8',`account` = 'admin',`task` = '273',`date` = '2017-04-01'
  UPDATE `zt_task` SET `realStarted` = '2017-04-01',`consumed` = '0',`left` = '8',`assignedTo` = 'admin',`lastEditedBy` = 'admin',`lastEditedDate` = '2017-04-01 11:14:10',`assignedDate` = '2017-04-01 11:14:10',`status` = 'doing' WHERE id  = '273'
  SELECT project, story FROM `zt_task` WHERE id  = '273'
  SELECT product FROM `zt_projectproduct` WHERE project  = '3'
  INSERT INTO `zt_action` SET `objectType` = 'task',`objectID` = '273',`actor` = 'admin',`action` = 'started',`date` = '2017-04-01 11:14:10',`comment` = '',`extra` = '',`product` = ',1,',`project` = '3'
  INSERT INTO `zt_history` SET `field` = 'realStarted',`old` = '0000-00-00',`new` = '2017-04-01',`diff` = '',`action` = '2069'
  INSERT INTO `zt_history` SET `field` = 'left',`old` = '0',`new` = '8',`diff` = '',`action` = '2069'
  INSERT INTO `zt_history` SET `field` = 'assignedTo',`old` = '',`new` = 'admin',`diff` = '',`action` = '2069'
  INSERT INTO `zt_history` SET `field` = 'status',`old` = 'wait',`new` = 'doing',`diff` = '',`action` = '2069'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '273'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '273' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT * FROM `zt_action` WHERE `id` = '2069' 
  SELECT * FROM `zt_history` WHERE action IN ('2069') ORDER BY `id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '273'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '273' AND  extra  != 'editor'

20170401 11:14:10: project-task
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT id, name FROM `zt_project` WHERE parent  = '3'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '3' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('354','400','1229') ORDER BY `id` 
  SELECT name FROM `zt_testtask` WHERE id  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '3' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task' and parent != 0) OR (root = 1 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')

20170401 11:20:04: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170401 11:20:07: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170401 11:20:33: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170401 11:21:44: admin
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170401 11:25:20: custom-set
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_lang` WHERE 1 = 1  AND  lang IN ('zh-cn') AND  module IN ('story') AND  section IN ('priList') ORDER BY `lang`,`id` 

20170401 11:25:23: project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 

20170401 11:25:23: project-task
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT id, name FROM `zt_project` WHERE parent  = '3'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '3' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('354','400','1229') ORDER BY `id` 
  SELECT name FROM `zt_testtask` WHERE id  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '3' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task' and parent != 0) OR (root = 1 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')

20170401 11:25:27: task-create-3--0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t2.id, t2.title, t2.module, t2.pri, t2.estimate, t3.name AS product FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_product` AS t3  ON t1.product = t3.id  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT id, listName FROM `zt_usercontact` WHERE account  = 'admin'

20170401 11:30:04: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170401 11:30:07: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170401 13:32:12: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170401 13:32:12: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170401 13:32:14: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170401 13:42:10: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170401 13:42:10: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170401 13:42:12: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170401 13:56:42: 
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170401 13:56:43: user-login-Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170401 13:56:48: user-login-Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'admin'
  SELECT * FROM `zt_user` WHERE account  = 'admin' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '127.0.0.1', `last` = '1491026208' WHERE account  = 'admin'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'admin'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'admin'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'admin' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '1',`actor` = 'admin',`action` = 'login',`date` = '2017-04-01 13:56:48',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170401 13:56:48: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170401 13:56:48: my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 

20170401 13:56:48: block-printBlock-3-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('14','13','12','11','10','9','3','2') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('14','13','12','11','10','9','3','2') ORDER BY `date` desc 

20170401 13:56:48: block-printBlock-1-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '1'

20170401 13:56:48: block-printBlock-4-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170401 13:56:48: block-printBlock-2-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-04-01' AND  date  < '2017-04-02' AND  (1)  ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1')
  SELECT id, name AS name FROM `zt_task` WHERE id IN ('273','297','514')
  SELECT id, title AS name FROM `zt_bug` WHERE id IN ('17')
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170401 13:56:48: block-printBlock-5-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('8','7','6','2','1') 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') AND  end  > '2017-04-01 13:56:48' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product

20170401 13:56:48: block-printBlock-6-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170401 13:56:49: block-printBlock-7-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170401 13:56:49: block-printBlock-8-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '8'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('1') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170401 13:56:49: block-printBlock-9-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170401 13:56:53: project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 

20170401 13:56:53: project-task
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT id, name FROM `zt_project` WHERE parent  = '3'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '3' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('354','400','1229') ORDER BY `id` 
  SELECT name FROM `zt_testtask` WHERE id  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '3' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task' and parent != 0) OR (root = 1 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')

20170401 13:56:56: task-create-3--0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t2.id, t2.title, t2.module, t2.pri, t2.estimate, t3.name AS product FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_product` AS t3  ON t1.product = t3.id  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT id, listName FROM `zt_usercontact` WHERE account  = 'admin'

20170401 13:57:07: task-create-3--0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t2.id, t2.title, t2.module, t2.pri, t2.estimate, t3.name AS product FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_product` AS t3  ON t1.product = t3.id  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT id, listName FROM `zt_usercontact` WHERE account  = 'admin'

20170401 13:57:14: task-create-3--0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t2.id, t2.title, t2.module, t2.pri, t2.estimate, t3.name AS product FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_product` AS t3  ON t1.product = t3.id  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT id, listName FROM `zt_usercontact` WHERE account  = 'admin'

20170401 13:59:26: 
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170401 13:59:27: user-login-Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170401 13:59:33: user-login-Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'admin'
  SELECT * FROM `zt_user` WHERE account  = 'admin' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '127.0.0.1', `last` = '1491026372' WHERE account  = 'admin'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'admin'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'admin'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'admin' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '1',`actor` = 'admin',`action` = 'login',`date` = '2017-04-01 13:59:33',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170401 13:59:33: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170401 13:59:34: my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 

20170401 13:59:34: block-printBlock-1-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '1'

20170401 13:59:36: block-printBlock-2-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-04-01' AND  date  < '2017-04-02' AND  (1)  ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1')
  SELECT id, name AS name FROM `zt_task` WHERE id IN ('273','297','514')
  SELECT id, title AS name FROM `zt_bug` WHERE id IN ('17')
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170401 13:59:37: block-printBlock-3-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('14','13','12','11','10','9','3','2') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('14','13','12','11','10','9','3','2') ORDER BY `date` desc 

20170401 13:59:37: block-printBlock-4-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170401 13:59:38: block-printBlock-5-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('8','7','6','2','1') 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') AND  end  > '2017-04-01 13:59:38' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product

20170401 13:59:38: block-printBlock-6-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170401 13:59:38: block-printBlock-7-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170401 13:59:39: block-printBlock-8-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '8'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('1') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170401 13:59:39: product
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 

20170401 13:59:39: block-printBlock-9-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170401 13:59:41: product-browse
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_story` WHERE product IN ('8') AND  status IN ('','draft','active','changed') AND  deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` WHERE product IN ('8') AND  status IN ('','draft','active','changed') AND  deleted  = '0' 
  SELECT * FROM `zt_story` WHERE product IN ('8') AND  status IN ('','draft','active','changed') AND  deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_story` WHERE product IN ('8') AND  status IN ('','draft','active','changed') AND  deleted  = '0' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('8') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')
  SELECT * FROM `zt_story` WHERE product IN ('8') AND  status IN ('','draft','active','changed') AND  deleted  = '0' ORDER BY `id` desc 
  SELECT story, COUNT(*) AS tasks FROM `zt_task` WHERE story IN ('46','43') AND  deleted  = '0' GROUP BY story
  SELECT story, COUNT(*) AS bugs FROM `zt_bug` WHERE story IN ('46','43') AND  deleted  = '0' GROUP BY story
  SELECT story, COUNT(*) AS cases FROM `zt_case` WHERE story IN ('46','43') AND  deleted  = '0' GROUP BY story
  SELECT id,CONCAT(title, " [", begin, " ~ ", end, "]") as title FROM `zt_productplan` WHERE product IN ('8') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type  = 'story' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT id,CONCAT(title, " [", begin, " ~ ", end, "]") as title FROM `zt_productplan` WHERE product IN ('8') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT DISTINCT story FROM `zt_case` WHERE story IN ('46','43')
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type  = 'story' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT account, realname, deleted, INSTR(',pd,po,', role) AS roleOrder FROM `zt_user` WHERE deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type  = 'story' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '8' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_storystage` WHERE story IN ('46','43')

20170401 13:59:41: project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 

20170401 13:59:42: project-task
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT id, name FROM `zt_project` WHERE parent  = '3'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '3' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('354','400','1229') ORDER BY `id` 
  SELECT name FROM `zt_testtask` WHERE id  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '3' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task' and parent != 0) OR (root = 1 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')

20170401 13:59:43: project-task-3
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT id, name FROM `zt_project` WHERE parent  = '3'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '3' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('354','400','1229') ORDER BY `id` 
  SELECT name FROM `zt_testtask` WHERE id  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '3' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task' and parent != 0) OR (root = 1 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')

20170401 13:59:46: task-create-3--0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t2.id, t2.title, t2.module, t2.pri, t2.estimate, t3.name AS product FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_product` AS t3  ON t1.product = t3.id  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT id, listName FROM `zt_usercontact` WHERE account  = 'admin'

20170401 14:00:06: 
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170401 14:00:07: user-login-Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170401 14:00:13: user-login-Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'admin'
  SELECT * FROM `zt_user` WHERE account  = 'admin' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '127.0.0.1', `last` = '1491026413' WHERE account  = 'admin'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'admin'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'admin'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'admin' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '1',`actor` = 'admin',`action` = 'login',`date` = '2017-04-01 14:00:13',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170401 14:00:13: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170401 14:00:13: my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 

20170401 14:00:14: block-printBlock-1-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '1'

20170401 14:00:15: block-printBlock-3-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('14','13','12','11','10','9','3','2') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('14','13','12','11','10','9','3','2') ORDER BY `date` desc 

20170401 14:00:15: block-printBlock-4-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170401 14:00:15: block-printBlock-5-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('8','7','6','2','1') 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') AND  end  > '2017-04-01 14:00:15' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product

20170401 14:00:15: block-printBlock-6-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170401 14:00:15: block-printBlock-2-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-04-01' AND  date  < '2017-04-02' AND  (1)  ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1')
  SELECT id, name AS name FROM `zt_task` WHERE id IN ('273','297','514')
  SELECT id, title AS name FROM `zt_bug` WHERE id IN ('17')
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170401 14:00:15: block-printBlock-7-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170401 14:00:15: block-printBlock-8-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '8'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('1') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170401 14:00:15: block-printBlock-9-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170401 14:00:17: project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 

20170401 14:00:18: project-task
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT id, name FROM `zt_project` WHERE parent  = '3'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '3' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('354','400','1229') ORDER BY `id` 
  SELECT name FROM `zt_testtask` WHERE id  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '3' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task' and parent != 0) OR (root = 1 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')

20170401 14:00:22: search-buildForm
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT id, title FROM `zt_userquery` WHERE account  = 'admin' AND  module  = 'task' ORDER BY `id` asc 

20170401 14:00:24: task-create-3--0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t2.id, t2.title, t2.module, t2.pri, t2.estimate, t3.name AS product FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_product` AS t3  ON t1.product = t3.id  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT id, listName FROM `zt_usercontact` WHERE account  = 'admin'

20170401 14:09:47: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170401 14:19:47: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170401 14:20:19: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170401 14:20:19: my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 

20170401 14:20:20: block-printBlock-2-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-04-01' AND  date  < '2017-04-02' AND  (1)  ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1')
  SELECT id, name AS name FROM `zt_task` WHERE id IN ('273','297','514')
  SELECT id, title AS name FROM `zt_bug` WHERE id IN ('17')
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170401 14:20:20: block-printBlock-1-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '1'

20170401 14:20:20: block-printBlock-4-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170401 14:20:21: block-printBlock-5-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('8','7','6','2','1') 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') AND  end  > '2017-04-01 14:20:21' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product

20170401 14:20:21: block-printBlock-6-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170401 14:20:21: block-printBlock-3-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('14','13','12','11','10','9','3','2') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('14','13','12','11','10','9','3','2') ORDER BY `date` desc 

20170401 14:20:21: block-printBlock-7-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170401 14:20:21: block-printBlock-8-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '8'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('1') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170401 14:20:21: block-printBlock-9-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170401 14:20:22: project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 

20170401 14:20:23: project-task
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT id, name FROM `zt_project` WHERE parent  = '3'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '3' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('354','400','1229') ORDER BY `id` 
  SELECT name FROM `zt_testtask` WHERE id  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '3' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task' and parent != 0) OR (root = 1 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')

20170401 14:20:27: task-create-3--0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t2.id, t2.title, t2.module, t2.pri, t2.estimate, t3.name AS product FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_product` AS t3  ON t1.product = t3.id  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('1') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 1 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT id, listName FROM `zt_usercontact` WHERE account  = 'admin'

20170401 14:30:27: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170401 14:40:27: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170401 14:50:27: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170401 15:00:28: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170401 15:10:28: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

