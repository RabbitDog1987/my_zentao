<?php
 die();
?>
20170331 14:39:37: 
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170331 14:39:38: user-login-Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170331 14:39:44: user-login-Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'admin'
  SELECT * FROM `zt_user` WHERE account  = 'admin' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '127.0.0.1', `last` = '1490942383' WHERE account  = 'admin'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'admin'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'admin'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'admin' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '1',`actor` = 'admin',`action` = 'login',`date` = '2017-03-31 14:39:43',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170331 14:39:44: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170331 14:39:44: my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 

20170331 14:39:45: block-printBlock-2-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-03-31' AND  date  < '2017-04-01' AND  (1)  ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1')
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170331 14:39:46: block-printBlock-3-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('14','13','12','11','10','9','3','2') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('14','13','12','11','10','9','3','2') ORDER BY `date` desc 

20170331 14:39:46: block-printBlock-4-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170331 14:39:46: block-printBlock-5-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('8','7','6','2','1') 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') AND  end  > '2017-03-31 14:39:46' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product

20170331 14:39:46: block-printBlock-1-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '1'

20170331 14:39:47: block-printBlock-6-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170331 14:39:47: block-printBlock-7-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170331 14:39:47: block-printBlock-8-my
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

20170331 14:39:47: block-printBlock-9-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170331 14:40:03: admin
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170331 14:40:05: action-trash
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_action` WHERE action  = 'deleted' AND  extra  = '1' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_action` WHERE action  = 'deleted' AND  extra  = '1' 
  SELECT * FROM `zt_action` WHERE action  = 'deleted' AND  extra  = '1' ORDER BY `id` desc  LIMIT 0, 20 
  SELECT id, name AS name FROM `zt_build` WHERE id IN ('7','8','9','5','6')
  SELECT id, name AS name FROM `zt_testtask` WHERE id IN ('6','2')
  SELECT id, name AS name FROM `zt_task` WHERE id IN ('388','443','166')
  SELECT id, name AS name FROM `zt_project` WHERE id IN ('5','4','6','8','7')
  SELECT id, name AS name FROM `zt_product` WHERE id IN ('3','5','4')
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('14','13')
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170331 14:40:05: admin-sso
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170331 14:40:06: company
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170331 14:40:07: company-browse
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

20170331 14:45:46: project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 

20170331 14:45:47: project-task
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

20170331 14:45:48: product
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 

20170331 14:45:49: product-browse
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

20170331 14:45:53: project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 

20170331 14:45:53: project-task
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

20170331 14:45:57: qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 

20170331 14:45:57: bug-browse
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

20170331 14:45:59: testcase-browse-8
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '8' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '8' AND  t1.deleted  = '0' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '8' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '8' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('46') AND  status  = 'active'
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('19','18') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('19','18') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('19','18') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('19','18') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','case') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','case') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','case') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '8' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_testsuite` WHERE product  = '8' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'admin'))  ORDER BY `id` desc 

20170331 14:46:03: testcase-create-8-0-0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('8') AND  t1.status IN ('','draft','active','closed','changed') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','case') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170331 14:46:15: testcase-edit-18
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_case` WHERE `id` = '18' 
  SELECT title, status, version FROM `zt_story` WHERE `id` = '46' 
  SELECT id, title FROM `zt_bug` WHERE `case`  = '18'
  SELECT * FROM `zt_casestep` WHERE `case`  = '18' AND  version  = '3' ORDER BY `id` 
  SELECT * FROM `zt_file` WHERE objectType  = 'testcase' AND  objectID  = '18' AND  extra  != 'editor'
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','case') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('8') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'case' AND  objectID  = '18' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('2035','2037','2038') ORDER BY `id` 

20170331 14:46:16: data/upload/1/201703/2914290404945bh8
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170331 14:46:32: testcase-edit-18
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_case` WHERE `id` = '18' 
  SELECT title, status, version FROM `zt_story` WHERE `id` = '46' 
  SELECT id, title FROM `zt_bug` WHERE `case`  = '18'
  SELECT * FROM `zt_casestep` WHERE `case`  = '18' AND  version  = '3' ORDER BY `id` 
  SELECT * FROM `zt_file` WHERE objectType  = 'testcase' AND  objectID  = '18' AND  extra  != 'editor'
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','case') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('8') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'case' AND  objectID  = '18' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('2035','2037','2038') ORDER BY `id` 

20170331 14:46:32: data/upload/1/201703/2914290404945bh8
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170331 14:46:36: testcase-edit-19
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_case` WHERE `id` = '19' 
  SELECT id, title FROM `zt_bug` WHERE `case`  = '19'
  SELECT * FROM `zt_casestep` WHERE `case`  = '19' AND  version  = '1' ORDER BY `id` 
  SELECT * FROM `zt_file` WHERE objectType  = 'testcase' AND  objectID  = '19' AND  extra  != 'editor'
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','case') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('8') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'case' AND  objectID  = '19' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('2039') ORDER BY `id` 

20170331 15:01:11: 
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170331 15:01:11: user-login-Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170331 15:01:18: user-login-Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'admin'
  SELECT * FROM `zt_user` WHERE account  = 'admin' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '127.0.0.1', `last` = '1490943678' WHERE account  = 'admin'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'admin'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'admin'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'admin' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '1',`actor` = 'admin',`action` = 'login',`date` = '2017-03-31 15:01:18',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170331 15:01:18: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170331 15:01:18: my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 

20170331 15:01:18: block-printBlock-2-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-03-31' AND  date  < '2017-04-01' AND  (1)  ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1')
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170331 15:01:19: block-printBlock-3-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('14','13','12','11','10','9','3','2') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('14','13','12','11','10','9','3','2') ORDER BY `date` desc 

20170331 15:01:19: block-printBlock-4-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170331 15:01:19: block-printBlock-1-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '1'

20170331 15:01:19: block-printBlock-5-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('8','7','6','2','1') 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') AND  end  > '2017-03-31 15:01:19' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product

20170331 15:01:19: block-printBlock-6-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170331 15:01:19: block-printBlock-7-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170331 15:01:19: block-printBlock-8-my
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

20170331 15:01:19: block-printBlock-9-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170331 15:01:26: project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 

20170331 15:01:27: project-task
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

20170331 15:01:32: project-story-3
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
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '3' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT COUNT(distinct t2.id) AS recTotal FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '3' AND  t2.deleted  = '0' 
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '3' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '3' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '3' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '3' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_module` WHERE root  = '1' AND  type  = 'story' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT id,title FROM `zt_productplan` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT story, COUNT(*) AS tasks FROM `zt_task` WHERE story IN ('') AND  deleted  = '0' AND  project  = '3' GROUP BY story
  SELECT story, COUNT(*) AS bugs FROM `zt_bug` WHERE story IN ('') AND  deleted  = '0' AND  project  = '3' GROUP BY story
  SELECT story, COUNT(*) AS cases FROM `zt_case` WHERE story IN ('') AND  deleted  = '0' GROUP BY story
  SELECT product FROM `zt_projectproduct` WHERE project  = '3'
  SELECT t1.project, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t2.deleted  = '0' AND  t1.product  = '1' AND  t1.project  != '3'
  SELECT DISTINCT story FROM `zt_case` WHERE story IN ('')
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '3' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT * FROM `zt_module` WHERE (root = 1 and type = 'story')  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 

20170331 15:01:32: search-buildForm
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT id, title FROM `zt_userquery` WHERE account  = 'admin' AND  module  = 'projectStory' ORDER BY `id` asc 

20170331 15:01:34: project-bug-3
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
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  project  = '3' ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_bug` WHERE deleted  = '0' AND  project  = '3' 
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  project  = '3' ORDER BY `status`,`id` desc 
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  project  = '3' ORDER BY `status`,`id` desc 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_module` WHERE root  = '1' AND  type  = 'story' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('1') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT build, name FROM `zt_release` WHERE build IN ('3','1') AND  product IN ('1') AND  deleted  = '0'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT id,title FROM `zt_productplan` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT t1.*, t2.name as projectName, t3.name as productName, t3.type as productType FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_product` AS t3  ON t1.product = t3.id  WHERE t1.id  = '0'

20170331 15:01:34: search-buildForm
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT id, title FROM `zt_userquery` WHERE account  = 'admin' AND  module  = 'projectBug' ORDER BY `id` asc 

20170331 15:01:35: project-build-3
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
  SELECT t1.*, t2.name as projectName, t3.name as productName, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_product` AS t3  ON t1.product = t3.id  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.project  = '3' AND  t1.deleted  = '0' ORDER BY t1.`date` DESC,t1.`id` desc 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170331 15:01:36: project-testtask-3
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
  SELECT t1.*, t2.name AS buildName FROM `zt_testtask` AS t1  LEFT JOIN `zt_build` AS t2  ON t1.build = t2.id  WHERE t1.project  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170331 15:01:37: project-team-3
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

20170331 15:01:38: project-dynamic-3
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
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
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-03-31' AND  date  < '2017-04-01' AND  project  = '3' AND  (1)  ORDER BY `date` desc,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_action` WHERE 1  AND  date  > '2017-03-31' AND  date  < '2017-04-01' AND  project  = '3' AND  (1)  
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-03-31' AND  date  < '2017-04-01' AND  project  = '3' AND  (1)  ORDER BY `date` desc,`id` desc 

20170331 15:01:38: doc-objectLibs-project-3-project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id,name FROM `zt_project` WHERE id  = '3'
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
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' AND  project  = '3' ORDER BY `id` 

20170331 15:01:39: project-manageproducts-3
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
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
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `isClosed`,`order` desc 
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('8','7','6','2','1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1')

20170331 15:01:40: project-view-3
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
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT id, name FROM `zt_group`
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '3' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('354','400','1229') ORDER BY `id` 
  SELECT name FROM `zt_testtask` WHERE id  = '4'
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170331 15:01:43: qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 

20170331 15:01:44: bug-browse
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

20170331 15:01:45: project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 

20170331 15:01:45: project-task
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

20170331 15:01:47: project-story-3
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
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '3' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT COUNT(distinct t2.id) AS recTotal FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '3' AND  t2.deleted  = '0' 
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '3' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '3' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '3' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '3' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_module` WHERE root  = '1' AND  type  = 'story' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT id,title FROM `zt_productplan` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT story, COUNT(*) AS tasks FROM `zt_task` WHERE story IN ('') AND  deleted  = '0' AND  project  = '3' GROUP BY story
  SELECT story, COUNT(*) AS bugs FROM `zt_bug` WHERE story IN ('') AND  deleted  = '0' AND  project  = '3' GROUP BY story
  SELECT story, COUNT(*) AS cases FROM `zt_case` WHERE story IN ('') AND  deleted  = '0' GROUP BY story
  SELECT product FROM `zt_projectproduct` WHERE project  = '3'
  SELECT t1.project, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t2.deleted  = '0' AND  t1.product  = '1' AND  t1.project  != '3'
  SELECT DISTINCT story FROM `zt_case` WHERE story IN ('')
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '3' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT * FROM `zt_module` WHERE (root = 1 and type = 'story')  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 

20170331 15:01:47: search-buildForm
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT id, title FROM `zt_userquery` WHERE account  = 'admin' AND  module  = 'projectStory' ORDER BY `id` asc 

20170331 15:01:48: project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 

20170331 15:01:49: project-task
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

20170331 15:01:52: qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 

20170331 15:01:52: bug-browse
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

20170331 15:01:55: project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 

20170331 15:01:55: project-task
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

20170331 15:01:58: product
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 

20170331 15:01:58: product-browse
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

20170331 15:01:59: project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 

20170331 15:01:59: project-task
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

20170331 15:02:00: qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 

20170331 15:02:01: bug-browse
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

20170331 15:02:02: doc
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

20170331 15:02:03: report
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170331 15:02:03: report-productSummary
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id, code, name, PO FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed'
  SELECT * FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('1','2','6','7','8') AND  end  > '2017-03-31'
  SELECT id,plan,product,status FROM `zt_story` WHERE deleted  = '0'
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170331 15:02:04: project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 

20170331 15:02:05: project-task
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

20170331 15:02:06: qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 

20170331 15:02:06: bug-browse
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

20170331 15:02:09: testcase-browse-8
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '8' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '8' AND  t1.deleted  = '0' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '8' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '8' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('46') AND  status  = 'active'
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('19','18') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('19','18') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('19','18') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('19','18') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','case') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','case') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','case') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '8' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_testsuite` WHERE product  = '8' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'admin'))  ORDER BY `id` desc 

20170331 15:02:13: testcase-create-8-0-0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('8') AND  t1.status IN ('','draft','active','closed','changed') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','case') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170331 15:03:08: testcase-create-8-0-0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('8') AND  t1.status IN ('','draft','active','closed','changed') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','case') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170331 15:03:44: testcase-create-8-0-0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('8') AND  t1.status IN ('','draft','active','closed','changed') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','case') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170331 15:04:19: testcase-create-8-0-0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('8') AND  t1.status IN ('','draft','active','closed','changed') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','case') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170331 15:09:19: testcase-create-8-0-0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('8') AND  t1.status IN ('','draft','active','closed','changed') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '8' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '8'
  SELECT * FROM `zt_module` WHERE root  = '8' AND  type IN ('story','case') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170331 15:19:20: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170331 15:29:20: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170331 15:39:20: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170331 15:48:34: bug-browse-8
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

20170331 15:58:35: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170331 16:06:06: bug-create-8-0-moduleID=0
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

20170331 16:06:06: bug-ajaxGetModuleOwner-0-8
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT QD FROM `zt_product` WHERE `id` = '8' 

20170331 16:16:07: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170331 16:26:07: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170331 16:27:53: bug-browse-8
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

20170331 16:27:55: bug-create-8-0-moduleID=0
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

20170331 16:27:55: bug-ajaxGetModuleOwner-0-8
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT QD FROM `zt_product` WHERE `id` = '8' 

20170331 16:37:56: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170331 16:46:28: bug-create-8-0-moduleID=0
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

20170331 16:46:29: bug-ajaxGetModuleOwner-0-8
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT QD FROM `zt_product` WHERE `id` = '8' 

20170331 17:14:30: 
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170331 17:14:30: user-login-Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170331 17:14:35: user-login-Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'admin'
  SELECT * FROM `zt_user` WHERE account  = 'admin' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '127.0.0.1', `last` = '1490951675' WHERE account  = 'admin'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'admin'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'admin'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'admin' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '1',`actor` = 'admin',`action` = 'login',`date` = '2017-03-31 17:14:35',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170331 17:14:35: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170331 17:14:35: my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 

20170331 17:14:36: block-printBlock-1-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '1'

20170331 17:14:36: block-printBlock-2-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-03-31' AND  date  < '2017-04-01' AND  (1)  ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1')
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170331 17:14:36: block-printBlock-3-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('14','13','12','11','10','9','3','2') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('14','13','12','11','10','9','3','2') ORDER BY `date` desc 

20170331 17:14:36: block-printBlock-4-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170331 17:14:36: block-printBlock-5-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('8','7','6','2','1') 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') AND  end  > '2017-03-31 17:14:36' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product

20170331 17:14:36: block-printBlock-6-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170331 17:14:36: block-printBlock-7-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170331 17:14:36: block-printBlock-8-my
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

20170331 17:14:36: block-printBlock-9-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170331 17:14:37: doc
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

20170331 17:14:39: qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 

20170331 17:14:39: bug-browse
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

20170331 17:14:40: project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 

20170331 17:14:40: project-task
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

20170331 17:14:41: project-bug-3
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
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  project  = '3' ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_bug` WHERE deleted  = '0' AND  project  = '3' 
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  project  = '3' ORDER BY `status`,`id` desc 
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  project  = '3' ORDER BY `status`,`id` desc 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_module` WHERE root  = '1' AND  type  = 'story' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('1') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT build, name FROM `zt_release` WHERE build IN ('3','1') AND  product IN ('1') AND  deleted  = '0'
  SELECT * FROM `zt_branch` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('1')
  SELECT id,title FROM `zt_productplan` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT t1.*, t2.name as projectName, t3.name as productName, t3.type as productType FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_product` AS t3  ON t1.product = t3.id  WHERE t1.id  = '0'

20170331 17:14:42: search-buildForm
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT id, title FROM `zt_userquery` WHERE account  = 'admin' AND  module  = 'projectBug' ORDER BY `id` asc 

20170331 17:14:45: qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 

20170331 17:14:45: bug-browse
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

20170331 17:14:47: bug-create-8-0-moduleID=0
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

20170331 17:14:47: bug-ajaxGetModuleOwner-0-8
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT QD FROM `zt_product` WHERE `id` = '8' 

20170331 17:16:09: bug-create-8-0-moduleID=0
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

20170331 17:16:09: bug-ajaxGetModuleOwner-0-8
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT QD FROM `zt_product` WHERE `id` = '8' 

20170331 17:16:29: bug-create-8-0-moduleID=0
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

20170331 17:16:30: bug-ajaxGetModuleOwner-0-8
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT QD FROM `zt_product` WHERE `id` = '8' 

20170331 17:16:34: bug-create-8-0-moduleID=0
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

20170331 17:16:35: bug-ajaxGetModuleOwner-0-8
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT QD FROM `zt_product` WHERE `id` = '8' 

20170331 17:18:25: bug-create-8-0-moduleID=0
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

20170331 17:18:25: bug-ajaxGetModuleOwner-0-8
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT QD FROM `zt_product` WHERE `id` = '8' 

20170331 17:18:50: bug-create-8-0-moduleID=0
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

20170331 17:18:51: bug-ajaxGetModuleOwner-0-8
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT QD FROM `zt_product` WHERE `id` = '8' 

20170331 17:21:39: 
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170331 17:21:39: user-login-Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170331 17:21:45: user-login-Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'admin'
  SELECT * FROM `zt_user` WHERE account  = 'admin' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '127.0.0.1', `last` = '1490952105' WHERE account  = 'admin'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'admin'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'admin'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'admin' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '1',`actor` = 'admin',`action` = 'login',`date` = '2017-03-31 17:21:45',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170331 17:21:45: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170331 17:21:45: my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 

20170331 17:21:46: block-printBlock-1-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '1'

20170331 17:21:46: block-printBlock-2-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-03-31' AND  date  < '2017-04-01' AND  (1)  ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1')
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170331 17:21:46: block-printBlock-3-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('14','13','12','11','10','9','3','2') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('14','13','12','11','10','9','3','2') ORDER BY `date` desc 

20170331 17:21:46: block-printBlock-4-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170331 17:21:46: block-printBlock-5-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('8','7','6','2','1') 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') AND  end  > '2017-03-31 17:21:46' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product

20170331 17:21:46: block-printBlock-6-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170331 17:21:46: block-printBlock-8-my
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

20170331 17:21:46: block-printBlock-7-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170331 17:21:46: block-printBlock-9-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170331 17:21:48: project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 

20170331 17:21:49: project-task
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

20170331 17:21:52: qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 

20170331 17:21:53: bug-browse
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_bug` WHERE project IN ('3','14','13','12','11','10','9','8','7','6','5','4','2','1','0') AND  product  = '1' AND  status  != 'closed' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_bug` WHERE project IN ('3','14','13','12','11','10','9','8','7','6','5','4','2','1','0') AND  product  = '1' AND  status  != 'closed' AND  deleted  = '0' 
  SELECT * FROM `zt_bug` WHERE project IN ('3','14','13','12','11','10','9','8','7','6','5','4','2','1','0') AND  product  = '1' AND  status  != 'closed' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_bug` WHERE project IN ('3','14','13','12','11','10','9','8','7','6','5','4','2','1','0') AND  product  = '1' AND  status  != 'closed' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('1','4','3','2','1') AND  status  = 'active'
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('1') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT build, name FROM `zt_release` WHERE build IN ('3','1') AND  product IN ('1') AND  deleted  = '0'
  SELECT id,CONCAT(title, " [", begin, " ~ ", end, "]") as title FROM `zt_productplan` WHERE product IN ('1') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '1'
  SELECT * FROM `zt_module` WHERE root  = '1' AND  type  = 'bug' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT t2.id, t2.name, t2.deleted FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.product  = '1' AND  t2.id IN ('3','14','13','12','11','10','9','2','1') ORDER BY t1.`project` desc 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('1') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT build, name FROM `zt_release` WHERE build IN ('3','1') AND  product IN ('1') AND  deleted  = '0'
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('1') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT build, name FROM `zt_release` WHERE build IN ('3') AND  product IN ('1') AND  deleted  = '0'
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '1'
  SELECT * FROM `zt_module` WHERE root  = '1' AND  type  = 'bug' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '1'
  SELECT * FROM `zt_module` WHERE root  = '1' AND  type  = 'bug' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '1' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '1' 

20170331 17:21:56: bug-create-1-0-moduleID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted, INSTR(',td,pm,qd,qa,dev,', role) AS roleOrder FROM `zt_user` WHERE deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('1') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT build, name FROM `zt_release` WHERE build IN ('3') AND  product IN ('1') AND  deleted  = '0'
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('1') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t2.id, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.product  = '1' AND  t2.status  != 'done' ORDER BY t2.`begin` desc  LIMIT 1 
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '12' AND  t2.deleted  = '0'
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '1'
  SELECT * FROM `zt_module` WHERE root  = '1' AND  type  = 'bug' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT t2.id, t2.name, t2.deleted FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.product  = '1' AND  t2.id IN ('3','14','13','12','11','10','9','2','1') ORDER BY t1.`project` desc 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT id,account,title,content,public FROM `zt_usertpl` WHERE type  = 'bug' AND ( account  = 'admin' OR public  = '1') ORDER BY `id` 
  SELECT id, listName FROM `zt_usercontact` WHERE account  = 'admin'

20170331 17:21:57: bug-ajaxGetModuleOwner-0-1
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT QD FROM `zt_product` WHERE `id` = '1' 

20170331 17:22:07: bug-create-8-0-moduleID=0
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

20170331 17:22:08: bug-ajaxGetModuleOwner-0-8
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT QD FROM `zt_product` WHERE `id` = '8' 

20170331 17:24:40: bug-create-8-0-moduleID=0
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

20170331 17:24:41: bug-ajaxGetModuleOwner-0-8
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT QD FROM `zt_product` WHERE `id` = '8' 

20170331 17:24:53: bug-create-1-0-moduleID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted, INSTR(',td,pm,qd,qa,dev,', role) AS roleOrder FROM `zt_user` WHERE deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('1') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT build, name FROM `zt_release` WHERE build IN ('3') AND  product IN ('1') AND  deleted  = '0'
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('1') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t2.id, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.product  = '1' AND  t2.status  != 'done' ORDER BY t2.`begin` desc  LIMIT 1 
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '12' AND  t2.deleted  = '0'
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '1'
  SELECT * FROM `zt_module` WHERE root  = '1' AND  type  = 'bug' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT t2.id, t2.name, t2.deleted FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.product  = '1' AND  t2.id IN ('3','14','13','12','11','10','9','2','1') ORDER BY t1.`project` desc 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT id,account,title,content,public FROM `zt_usertpl` WHERE type  = 'bug' AND ( account  = 'admin' OR public  = '1') ORDER BY `id` 
  SELECT id, listName FROM `zt_usercontact` WHERE account  = 'admin'

20170331 17:24:54: bug-ajaxGetModuleOwner-0-1
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT QD FROM `zt_product` WHERE `id` = '1' 

20170331 17:25:38: bug-create-8-0-moduleID=0
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

20170331 17:25:38: bug-ajaxGetModuleOwner-0-8
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT QD FROM `zt_product` WHERE `id` = '8' 

20170331 17:30:46: project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 

20170331 17:30:46: project-task
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

20170331 17:31:39: task-view-297
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

20170331 17:31:51: task-view-273
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '273'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '273' AND  extra  != 'editor'
  SELECT * FROM `zt_qaaudit` WHERE task  = '273' AND  deleted  = '0'
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
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '273' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('906') ORDER BY `id` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT * FROM `zt_task` WHERE id  = '273' OR project  = '3' AND  deleted  = '0' AND  status IN ('','wait','doing','done','pause','cancel')  ORDER BY `status`,`id` desc 

20170331 17:34:54: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

