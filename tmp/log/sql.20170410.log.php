<?php
 die();
?>
20170410 10:18:42: 
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 10:18:43: user-login-Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170410 10:18:50: user-login-Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'admin'
  SELECT * FROM `zt_user` WHERE account  = 'admin' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '127.0.0.1', `last` = '1491790729' WHERE account  = 'admin'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'admin'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'admin'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'admin' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '1',`actor` = 'admin',`action` = 'login',`date` = '2017-04-10 10:18:50',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170410 10:18:50: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 10:18:51: my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 

20170410 10:18:52: block-printBlock-2-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-04-10' AND  date  < '2017-04-11' AND  (1)  ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1')
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170410 10:18:52: block-printBlock-1-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '1'

20170410 10:18:53: block-printBlock-3-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('14','13','12','11','10','9','3','2') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('14','13','12','11','10','9','3','2') ORDER BY `date` desc 

20170410 10:18:53: block-printBlock-5-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('8','7','6','2','1') 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') AND  end  > '2017-04-10 10:18:53' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product

20170410 10:18:53: block-printBlock-4-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170410 10:18:54: block-printBlock-6-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170410 10:18:54: block-printBlock-7-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170410 10:18:54: block-printBlock-8-my
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

20170410 10:18:54: block-printBlock-9-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170410 10:18:56: my-bug
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' 
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170410 10:19:01: qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 

20170410 10:19:03: bug-browse
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

20170410 10:19:07: product-ajaxGetDropMenu-8-bug-browse-
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 

20170410 10:19:09: bug-browse-6
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_bug` WHERE project IN ('3','14','13','12','11','10','9','8','7','6','5','4','2','1','0') AND  product  = '6' AND  status  != 'closed' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_bug` WHERE project IN ('3','14','13','12','11','10','9','8','7','6','5','4','2','1','0') AND  product  = '6' AND  status  != 'closed' AND  deleted  = '0' 
  SELECT * FROM `zt_bug` WHERE project IN ('3','14','13','12','11','10','9','8','7','6','5','4','2','1','0') AND  product  = '6' AND  status  != 'closed' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_bug` WHERE project IN ('3','14','13','12','11','10','9','8','7','6','5','4','2','1','0') AND  product  = '6' AND  status  != 'closed' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('41','37','37','37','37','36','36','36') AND  status  = 'active'
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('6') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT build, name FROM `zt_release` WHERE build IN ('10','4') AND  product IN ('6') AND  deleted  = '0'
  SELECT id,CONCAT(title, " [", begin, " ~ ", end, "]") as title FROM `zt_productplan` WHERE product IN ('6') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '6'
  SELECT * FROM `zt_module` WHERE root  = '6' AND  type IN ('story','bug') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT t2.id, t2.name, t2.deleted FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.product  = '6' AND  t2.id IN ('3','14','13','12','11','10','9','2','1') ORDER BY t1.`project` desc 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('6') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT build, name FROM `zt_release` WHERE build IN ('10','4') AND  product IN ('6') AND  deleted  = '0'
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('6') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT build, name FROM `zt_release` WHERE build IN ('10','4') AND  product IN ('6') AND  deleted  = '0'
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '6'
  SELECT * FROM `zt_module` WHERE root  = '6' AND  type IN ('story','bug') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '6'
  SELECT * FROM `zt_module` WHERE root  = '6' AND  type IN ('story','bug') AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '6' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '6' 

20170410 10:24:52: admin
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 10:24:54: mail
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 10:24:54: mail-edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''

20170410 10:25:15: mail-reset
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  DELETE FROM `zt_config` WHERE module  = 'mail'

20170410 10:25:15: mail
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 10:25:18: mail-detect
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 10:25:36: mail-detect
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 10:25:36: mail-edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''

20170410 10:26:21: mail
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 10:26:22: mail-ztCloud
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 10:26:23: admin-register-mail
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 10:26:37: mail-detect
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 10:26:39: mail-detect
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 10:26:39: mail-edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''

20170410 10:26:42: mail-reset
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  DELETE FROM `zt_config` WHERE module  = 'mail'

20170410 10:26:42: mail
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 10:26:44: mail-detect
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 10:26:47: mail-detect
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 10:26:47: mail-edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''

20170410 10:27:20: mail-save
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'host',`value` = 'smtp.qq.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'port',`value` = '465'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'auth',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'username',`value` = '1479384346'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'password',`value` = 'zg0801074113.'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'secure',`value` = 'ssl'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'debug',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'charset',`value` = 'utf-8'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'turnon',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'mta',`value` = 'smtp'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'async',`value` = ''
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromAddress',`value` = '1479384346@qq.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromName',`value` = 'zentao'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'domain',`value` = 'http://127.0.0.1'
  SELECT email FROM `zt_user` WHERE email  != ''

20170410 10:27:21: mail-test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 

20170410 10:27:23: mail-test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('dev1','')

20170410 10:27:31: mail-edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''

20170410 10:27:40: mail-save
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'host',`value` = 'smtp.qq.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'port',`value` = '465'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'auth',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'username',`value` = '1479384346'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'password',`value` = '0801074113.'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'secure',`value` = 'ssl'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'debug',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'charset',`value` = 'utf-8'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'turnon',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'mta',`value` = 'smtp'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'async',`value` = ''
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromAddress',`value` = '1479384346@qq.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromName',`value` = 'zentao'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'domain',`value` = 'http://127.0.0.1'
  SELECT email FROM `zt_user` WHERE email  != ''

20170410 10:27:41: mail-test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 

20170410 10:27:44: mail-test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('dev1','')

20170410 10:27:49: mail-edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''

20170410 10:28:04: mail-save
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'host',`value` = 'smtp.qq.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'port',`value` = '465'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'auth',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'username',`value` = '1479384346'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'password',`value` = '08010741zhaogang'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'secure',`value` = 'ssl'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'debug',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'charset',`value` = 'utf-8'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'turnon',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'mta',`value` = 'smtp'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'async',`value` = ''
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromAddress',`value` = '1479384346@qq.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromName',`value` = 'zentao'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'domain',`value` = 'http://127.0.0.1'
  SELECT email FROM `zt_user` WHERE email  != ''

20170410 10:28:07: mail-test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 

20170410 10:28:08: mail-test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('dev1','')

20170410 10:28:09: mail-edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''

20170410 10:30:01: mail-save
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'host',`value` = 'smtp.qq.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'port',`value` = '465'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'auth',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'username',`value` = '1479384346'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'password',`value` = 'akuzahrzrsanjbaj'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'secure',`value` = 'ssl'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'debug',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'charset',`value` = 'utf-8'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'turnon',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'mta',`value` = 'smtp'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'async',`value` = ''
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromAddress',`value` = '1479384346@qq.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromName',`value` = 'zentao'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'domain',`value` = 'http://127.0.0.1'
  SELECT email FROM `zt_user` WHERE email  != ''

20170410 10:30:02: mail-test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 

20170410 10:30:05: mail-test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('dev1','')

20170410 10:30:07: mail-test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 

20170410 10:30:09: mail-edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''

20170410 10:30:17: mail-save
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'host',`value` = 'smtp.qq.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'port',`value` = '465'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'auth',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'username',`value` = '1479384346'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'password',`value` = 'akuzahrzrsanjbajf'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'secure',`value` = 'ssl'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'debug',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'charset',`value` = 'utf-8'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'turnon',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'mta',`value` = 'smtp'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'async',`value` = ''
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromAddress',`value` = '1479384346@qq.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromName',`value` = 'zentao'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'domain',`value` = 'http://127.0.0.1'
  SELECT email FROM `zt_user` WHERE email  != ''

20170410 10:30:18: mail-test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 

20170410 10:30:19: mail-edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''

20170410 10:30:21: mail-test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 

20170410 10:30:22: mail-test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('dev1','')

20170410 10:35:11: mail-edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''

20170410 10:35:14: mail-save
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'host',`value` = 'smtp.qq.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'port',`value` = '465'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'auth',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'username',`value` = '1479384346'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'password',`value` = 'akuzahrzrsanjbaj'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'secure',`value` = 'ssl'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'debug',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'charset',`value` = 'utf-8'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'turnon',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'mta',`value` = 'smtp'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'async',`value` = ''
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromAddress',`value` = '1479384346@qq.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromName',`value` = 'zentao'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'domain',`value` = 'http://127.0.0.1'
  SELECT email FROM `zt_user` WHERE email  != ''

20170410 10:35:16: mail-test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 

20170410 10:35:18: mail-test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('dev1','')

20170410 10:35:20: mail-test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 

20170410 11:09:49: 
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:09:50: user-login-Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170410 11:09:50: user-login-Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170410 11:09:55: user-login-Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'admin'
  SELECT * FROM `zt_user` WHERE account  = 'admin' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '127.0.0.1', `last` = '1491793795' WHERE account  = 'admin'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'admin'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'admin'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'admin' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '1',`actor` = 'admin',`action` = 'login',`date` = '2017-04-10 11:09:55',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170410 11:09:55: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:09:55: my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 

20170410 11:09:55: block-printBlock-1-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '1'

20170410 11:09:56: block-printBlock-3-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('14','13','12','11','10','9','3','2') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('14','13','12','11','10','9','3','2') ORDER BY `date` desc 

20170410 11:09:56: block-printBlock-2-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-04-10' AND  date  < '2017-04-11' AND  (1)  ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1')
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170410 11:09:56: block-printBlock-4-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170410 11:09:56: block-printBlock-6-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170410 11:09:56: block-printBlock-5-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('8','7','6','2','1') 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') AND  end  > '2017-04-10 11:09:56' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product

20170410 11:09:56: block-printBlock-7-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170410 11:09:56: block-printBlock-8-my
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

20170410 11:09:56: block-printBlock-9-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170410 11:09:57: admin
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:09:58: mail
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:09:58: mail-edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''

20170410 11:41:29: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:29: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:29: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:29: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:29: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:30: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:30: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:30: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:30: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:30: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:30: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:30: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:30: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:30: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:30: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:30: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:30: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:30: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:30: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:30: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:31: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:31: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:31: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:31: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:31: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:31: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:31: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:31: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:31: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:31: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:31: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:31: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:31: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:31: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:31: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:31: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:32: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:32: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:32: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:32: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:32: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:32: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:32: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:32: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:32: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:32: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:41:32: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:45:44: 
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:45:44: user-login-Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170410 11:45:52: user-login-Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'admin'
  SELECT * FROM `zt_user` WHERE account  = 'admin' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '223.71.139.97', `last` = '1491795952' WHERE account  = 'admin'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'admin'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'admin'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'admin' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '1',`actor` = 'admin',`action` = 'login',`date` = '2017-04-10 11:45:52',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170410 11:45:52: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:45:53: my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 

20170410 11:45:53: block-printBlock-1-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '1'

20170410 11:45:54: block-printBlock-3-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('14','13','12','11','10','9','3','2') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('14','13','12','11','10','9','3','2') ORDER BY `date` desc 

20170410 11:45:54: block-printBlock-2-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-04-10' AND  date  < '2017-04-11' AND  (1)  ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1')
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170410 11:45:54: block-printBlock-6-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170410 11:45:54: block-printBlock-4-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170410 11:45:54: block-printBlock-5-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('8','7','6','2','1') 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') AND  end  > '2017-04-10 11:45:54' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product

20170410 11:45:54: block-printBlock-7-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170410 11:45:54: block-printBlock-8-my
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

20170410 11:45:54: block-printBlock-9-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170410 11:45:55: admin
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:46:00: mail
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:46:00: mail-edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''

20170410 11:46:05: mail-test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 

20170410 11:46:06: mail-test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('dev1','')

20170410 11:46:21: mail-edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''

20170410 11:46:30: mail-save
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'host',`value` = 'smtp.qq.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'port',`value` = '465'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'auth',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'username',`value` = '1479384346'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'password',`value` = 'akuzahrzrsanjbaj'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'secure',`value` = ''
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'debug',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'charset',`value` = 'utf-8'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'turnon',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'mta',`value` = 'smtp'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'async',`value` = ''
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromAddress',`value` = '1479384346@qq.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromName',`value` = 'zentao'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'domain',`value` = 'http://123.206.62.117'
  SELECT email FROM `zt_user` WHERE email  != ''

20170410 11:46:31: mail-test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 

20170410 11:47:26: 
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_user` WHERE account  = 'admin' AND  deleted  = '0'

20170410 11:47:26: user-login-Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170410 11:47:32: 

20170410 11:47:32: 

20170410 11:47:32: 

20170410 11:47:45: user-login-Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'admin'
  SELECT * FROM `zt_user` WHERE account  = 'admin' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '123.206.62.117', `last` = '1491796065' WHERE account  = 'admin'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'admin'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'admin'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'admin' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '1',`actor` = 'admin',`action` = 'login',`date` = '2017-04-10 11:47:45',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170410 11:47:45: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:47:45: my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 

20170410 11:47:45: block-printBlock-1-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '1'

20170410 11:47:46: block-printBlock-9-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170410 11:47:46: block-printBlock-8-my
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

20170410 11:47:47: block-printBlock-7-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170410 11:47:48: block-printBlock-6-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170410 11:47:48: block-printBlock-5-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('8','7','6','2','1') 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') AND  end  > '2017-04-10 11:47:48' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product

20170410 11:47:49: block-printBlock-4-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170410 11:47:49: block-printBlock-3-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('14','13','12','11','10','9','3','2') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('14','13','12','11','10','9','3','2') ORDER BY `date` desc 

20170410 11:47:50: block-printBlock-2-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-04-10' AND  date  < '2017-04-11' AND  (1)  ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1')
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170410 11:47:51: custom-ajaxMenu-my-index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:47:52: custom-ajaxGetMenu-my-index-all
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:47:59: admin
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:48:01: mail
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:48:01: mail-edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''

20170410 11:48:05: mail-reset
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  DELETE FROM `zt_config` WHERE module  = 'mail'

20170410 11:48:05: mail
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:48:07: mail-detect
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:48:20: mail-detect
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:48:31: mail-detect
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:48:31: mail-edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''

20170410 11:49:25: mail-save
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'host',`value` = 'smtp.qq.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'port',`value` = '465'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'auth',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'username',`value` = '1479384346'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'password',`value` = 'akuzahrzrsanjbaj'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'secure',`value` = ''
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'debug',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'charset',`value` = 'utf-8'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'turnon',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'mta',`value` = 'smtp'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'async',`value` = ''
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromAddress',`value` = '1479384346@qq.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromName',`value` = 'zentao'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'domain',`value` = 'http://123.206.62.117'
  SELECT email FROM `zt_user` WHERE email  != ''

20170410 11:49:27: mail-test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 

20170410 11:54:20: 
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_user` WHERE account  = 'admin' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '123.206.62.117', `last` = '1491796460' WHERE account  = 'admin'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'admin'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'admin' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '1',`actor` = 'admin',`action` = 'login',`date` = '2017-04-10 11:54:20',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 

20170410 11:54:20: my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 

20170410 11:54:21: block-printBlock-1-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '1'

20170410 11:54:22: block-printBlock-2-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-04-10' AND  date  < '2017-04-11' AND  (1)  ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1')
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170410 11:54:22: block-printBlock-3-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('14','13','12','11','10','9','3','2') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('14','13','12','11','10','9','3','2') ORDER BY `date` desc 

20170410 11:54:22: block-printBlock-9-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170410 11:54:22: block-printBlock-4-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170410 11:54:22: block-printBlock-5-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('8','7','6','2','1') 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') AND  end  > '2017-04-10 11:54:22' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product

20170410 11:54:22: block-printBlock-6-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170410 11:54:22: block-printBlock-7-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170410 11:54:22: block-printBlock-8-my
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

20170410 11:54:24: admin
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:54:25: admin
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:54:25: admin
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:54:27: browserconfig
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:54:28: admin
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_user` WHERE account  = 'admin' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '123.206.62.117', `last` = '1491796468' WHERE account  = 'admin'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'admin'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'admin' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '1',`actor` = 'admin',`action` = 'login',`date` = '2017-04-10 11:54:28',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 

20170410 11:54:30: mail
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:54:30: mail-edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''

20170410 11:54:45: cron
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` WHERE 1=1 

20170410 11:54:47: cron-turnon
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'common',`section` = 'global',`key` = 'cron',`value` = '1'

20170410 11:54:47: cron
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` WHERE 1=1 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 11:55:00: cron-openProcess
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:55:00: cron
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` WHERE 1=1 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 11:55:04: mail
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 11:55:05: mail-edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 12:05:04: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 12:07:15: proxyip/check
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 12:15:03: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170410 12:25:01: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 12:35:00: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170410 12:44:59: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170410 12:54:58: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 13:00:47: mainAction
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 13:04:57: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 13:14:56: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170410 13:24:54: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170410 13:34:53: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170410 13:42:46: 
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 13:44:52: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170410 13:49:56: mail-save
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'host',`value` = 'smtp.qq.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'port',`value` = '465'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'auth',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'username',`value` = '1479384346'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'password',`value` = 'akuzahrzrsanjbaj'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'secure',`value` = ''
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'debug',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'charset',`value` = 'utf-8'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'turnon',`value` = '0'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'mta',`value` = 'smtp'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'async',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromAddress',`value` = '1479384346@qq.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromName',`value` = 'zentao'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'domain',`value` = 'http://123.206.62.117'
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 13:49:59: mail
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 13:50:14: custom-set
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_lang` WHERE 1 = 1  AND  lang IN ('zh-cn') AND  module IN ('story') AND  section IN ('priList') ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 13:50:16: cron
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` WHERE 1=1 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 13:50:22: mail
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 13:50:25: mail-detect
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 13:50:37: mail-detect
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 13:50:37: mail-edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 13:51:47: mail-save
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'host',`value` = 'smtp.qq.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'port',`value` = '465'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'auth',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'username',`value` = '734787413'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'password',`value` = 'fuaugrdyaccxbbfc'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'secure',`value` = 'ssl'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'debug',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'charset',`value` = 'utf-8'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'turnon',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'mta',`value` = 'smtp'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'async',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromAddress',`value` = '734787413@qq.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromName',`value` = 'zentao1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'domain',`value` = 'http://123.206.62.117'
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 13:51:49: mail-test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 13:51:52: mail-test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('dev1','')
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 13:52:05: mail-test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('testManager','')
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 13:52:52: mail-edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 13:53:04: mail-save
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'host',`value` = 'smtp.qq.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'port',`value` = '465'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'auth',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'username',`value` = '734787413@qq.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'password',`value` = 'fuaugrdyaccxbbfc'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'secure',`value` = 'ssl'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'debug',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'charset',`value` = 'utf-8'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'turnon',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'mta',`value` = 'smtp'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'async',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromAddress',`value` = '734787413@qq.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromName',`value` = 'zentao1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'domain',`value` = 'http://123.206.62.117'
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 13:53:05: browserconfig
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 13:53:06: mail-test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 13:53:07: browserconfig
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 13:53:11: mail-test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('testManager','')
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 13:53:25: mail-edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 13:58:18: mail-save
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'host',`value` = 'smtp.qq.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'port',`value` = '465'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'auth',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'username',`value` = '734787413@qq.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'password',`value` = 'zrzbmfjxjkaibeii'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'secure',`value` = 'ssl'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'debug',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'charset',`value` = 'utf-8'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'turnon',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'mta',`value` = 'smtp'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'async',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromAddress',`value` = '734787413@qq.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromName',`value` = 'zentao1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'domain',`value` = 'http://123.206.62.117'
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 13:58:20: mail-test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 13:58:28: mail-test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('testManager','')

20170410 13:58:30: mail-test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 13:59:08: company
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 13:59:08: company-browse
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
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 13:59:15: admin
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 13:59:17: company
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 13:59:17: company-browse
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
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 13:59:19: report
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 13:59:19: report-productSummary
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id, code, name, PO FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed'
  SELECT * FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('1','2','6','7','8') AND  end  > '2017-04-10'
  SELECT id,plan,product,status FROM `zt_story` WHERE deleted  = '0'
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 13:59:22: doc
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
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 13:59:23: qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 

20170410 13:59:23: bug-browse
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
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 13:59:26: project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 

20170410 13:59:27: project-task
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
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 13:59:29: product
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 

20170410 13:59:29: product-browse
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
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 14:00:21: admin
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 14:00:23: product
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 

20170410 14:00:23: product-browse
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
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 14:00:38: admin
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 14:00:40: company
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 14:00:40: company-browse
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
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 14:01:32: 
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 14:01:32: user-login-Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 14:01:43: user-login-Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'admin'
  SELECT * FROM `zt_user` WHERE account  = 'admin' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '223.71.139.97', `last` = '1491804102' WHERE account  = 'admin'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'admin'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'admin'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'admin' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '1',`actor` = 'admin',`action` = 'login',`date` = '2017-04-10 14:01:42',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170410 14:01:43: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 14:01:43: my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 14:01:44: block-printBlock-2-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-04-10' AND  date  < '2017-04-11' AND  (1)  ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1')
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170410 14:01:44: block-printBlock-1-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '1'

20170410 14:01:44: block-printBlock-7-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170410 14:01:44: block-printBlock-3-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('14','13','12','11','10','9','3','2') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('14','13','12','11','10','9','3','2') ORDER BY `date` desc 

20170410 14:01:44: block-printBlock-8-my
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

20170410 14:01:44: block-printBlock-9-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170410 14:01:44: block-printBlock-4-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170410 14:01:44: block-printBlock-5-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('8','7','6','2','1') 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') AND  end  > '2017-04-10 14:01:44' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product

20170410 14:01:44: block-printBlock-6-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170410 14:01:46: product
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 

20170410 14:01:46: product-browse
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
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 14:01:49: admin
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 14:01:52: mail
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 14:01:52: mail-edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 14:01:55: mail-test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 14:02:01: mail-test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('testManager','')

20170410 14:02:04: mail-test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 14:02:35: company
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 14:02:35: company-browse
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
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 14:05:59: admin
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 14:10:01: github-userinfo
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 14:10:37: github-callback
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 14:10:40: github-userInfo
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 14:10:41: github-issues
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 16:15:03: 
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 16:15:03: user-login-Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 16:15:04: cron-ajaxExec
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 16:15:08: user-login-Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'admin'
  SELECT * FROM `zt_user` WHERE account  = 'admin' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '223.71.139.97', `last` = '1491812108' WHERE account  = 'admin'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'admin'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'admin'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'admin' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '1',`actor` = 'admin',`action` = 'login',`date` = '2017-04-10 16:15:08',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170410 16:15:09: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 16:15:09: my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 16:15:09: block-printBlock-2-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-04-10' AND  date  < '2017-04-11' AND  (1)  ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1')
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170410 16:15:09: block-printBlock-1-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '1'

20170410 16:15:10: block-printBlock-3-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('14','13','12','11','10','9','3','2') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('14','13','12','11','10','9','3','2') ORDER BY `date` desc 

20170410 16:15:10: block-printBlock-4-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170410 16:15:10: block-printBlock-5-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('8','7','6','2','1') 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') AND  end  > '2017-04-10 16:15:10' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product

20170410 16:15:10: block-printBlock-6-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170410 16:15:10: block-printBlock-7-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170410 16:15:10: block-printBlock-8-my
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

20170410 16:15:10: block-printBlock-9-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170410 16:15:11: project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 

20170410 16:15:11: project-task
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
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 16:15:14: task-start-297
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
  SELECT * FROM `zt_history` WHERE action IN ('973','2068') ORDER BY `id` 
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
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 16:15:17: task-start-297
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
  SELECT * FROM `zt_history` WHERE action IN ('973','2068') ORDER BY `id` 
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
  INSERT INTO `zt_taskestimate` SET `consumed` = '0',`left` = '9',`account` = 'admin',`task` = '297',`date` = '2017-04-10'
  UPDATE `zt_task` SET `realStarted` = '2017-04-10',`consumed` = '0',`left` = '9',`assignedTo` = 'admin',`lastEditedBy` = 'admin',`lastEditedDate` = '2017-04-10 16:15:17',`assignedDate` = '2017-04-10 16:15:17',`status` = 'doing' WHERE id  = '297'
  SELECT project, story FROM `zt_task` WHERE id  = '297'
  SELECT product FROM `zt_projectproduct` WHERE project  = '3'
  INSERT INTO `zt_action` SET `objectType` = 'task',`objectID` = '297',`actor` = 'admin',`action` = 'started',`date` = '2017-04-10 16:15:17',`comment` = '',`extra` = '',`product` = ',1,',`project` = '3'
  INSERT INTO `zt_history` SET `field` = 'realStarted',`old` = '0000-00-00',`new` = '2017-04-10',`diff` = '',`action` = '2085'
  INSERT INTO `zt_history` SET `field` = 'left',`old` = '0',`new` = '9',`diff` = '',`action` = '2085'
  INSERT INTO `zt_history` SET `field` = 'assignedTo',`old` = '',`new` = 'admin',`diff` = '',`action` = '2085'
  INSERT INTO `zt_history` SET `field` = 'status',`old` = 'wait',`new` = 'doing',`diff` = '',`action` = '2085'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '297'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '297' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT * FROM `zt_action` WHERE `id` = '2085' 
  SELECT * FROM `zt_history` WHERE action IN ('2085') ORDER BY `id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '297'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '297' AND  extra  != 'editor'

20170410 16:15:17: project-task
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
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 16:15:20: task-edit-237
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '237'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '237' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '237' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('905') ORDER BY `id` 
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
  SELECT * FROM `zt_qaaudit` WHERE task  = '237' AND  deleted  = '0'
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
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 16:15:25: task-edit-237
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '237'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '237' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '237' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('905') ORDER BY `id` 
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
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '237'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '237' AND  extra  != 'editor'
  SELECT version FROM `zt_story` WHERE id  = '0'
  UPDATE `zt_task` SET `module` = '0',`type` = 'devel',`story` = '0',`color` = '',`name` = 'sdfs9',`pri` = '0',`estimate` = '0',`desc` = '',`estStarted` = '0000-00-00',`deadline` = '0000-00-00',`mailto` = '',`project` = '3',`left` = '0',`status` = 'wait',`assignedTo` = '',`assignedDate` = '',`consumed` = '0',`realStarted` = '0000-00-00',`finishedBy` = '',`finishedDate` = '',`canceledBy` = '',`canceledDate` = '',`closedBy` = '',`closedReason` = '',`closedDate` = '',`lastEditedBy` = 'admin',`lastEditedDate` = '2017-04-10 16:15:24' WHERE id  = '237'
  SELECT * FROM `zt_qaaudit` WHERE id  = '2' AND  deleted  = '0'

20170410 16:15:32: task-edit-237
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '237'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '237' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '237' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('905') ORDER BY `id` 
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
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '237'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '237' AND  extra  != 'editor'
  SELECT version FROM `zt_story` WHERE id  = '0'
  UPDATE `zt_task` SET `module` = '0',`type` = 'devel',`story` = '0',`color` = '',`name` = 'sdfs9',`pri` = '0',`estimate` = '0',`desc` = '',`estStarted` = '0000-00-00',`deadline` = '0000-00-00',`mailto` = '',`project` = '3',`left` = '0',`status` = 'wait',`assignedTo` = '',`assignedDate` = '',`consumed` = '0',`realStarted` = '0000-00-00',`finishedBy` = '',`finishedDate` = '',`canceledBy` = '',`canceledDate` = '',`closedBy` = '',`closedReason` = '',`closedDate` = '',`lastEditedBy` = 'admin',`lastEditedDate` = '2017-04-10 16:15:32' WHERE id  = '237'
  SELECT * FROM `zt_qaaudit` WHERE id  = '2' AND  deleted  = '0'
  UPDATE `zt_qaaudit` SET `auditID` = '9',`noDec` = 'sdfs',`noType` = 'define',`serious` = 'improve',`cause` = 'sdfds',`measures` = 'sdf' WHERE id  = '2'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '237'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '237' AND  extra  != 'editor'
  SELECT project, story FROM `zt_task` WHERE id  = '237'
  SELECT product FROM `zt_projectproduct` WHERE project  = '3'
  INSERT INTO `zt_action` SET `objectType` = 'task',`objectID` = '237',`actor` = 'admin',`action` = 'edited',`date` = '2017-04-10 16:15:32',`comment` = '',`extra` = '',`product` = ',1,',`project` = '3'
  INSERT INTO `zt_history` SET `field` = 'name',`old` = 'sdfs',`new` = 'sdfs9',`diff` = '001- <del>sdfs</del>\n001+ <ins>sdfs9</ins>',`action` = '2086'
  INSERT INTO `zt_history` SET `field` = 'auditID',`old` = '0',`new` = '9',`diff` = '',`action` = '2086'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '237'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '237' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT * FROM `zt_action` WHERE `id` = '2086' 
  SELECT * FROM `zt_history` WHERE action IN ('2086') ORDER BY `id` 

20170410 16:15:32: task-view-237
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '237'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '237' AND  extra  != 'editor'
  SELECT * FROM `zt_qaaudit` WHERE task  = '237' AND  deleted  = '0'
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
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '237' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('905','2086') ORDER BY `id` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT * FROM `zt_task` WHERE id  = '237' OR project  = '3' AND  deleted  = '0' AND  status IN ('','wait','doing','done','pause','cancel')  ORDER BY `status`,`id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 16:15:37: task-edit-237
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '237'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '237' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '237' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('905','2086') ORDER BY `id` 
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
  SELECT * FROM `zt_qaaudit` WHERE task  = '237' AND  deleted  = '0'
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
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 16:15:42: task-edit-237
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '237'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '237' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '237' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('905','2086') ORDER BY `id` 
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
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '237'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '237' AND  extra  != 'editor'
  SELECT version FROM `zt_story` WHERE id  = '0'
  UPDATE `zt_task` SET `module` = '0',`type` = 'devel',`story` = '0',`color` = '',`name` = 'sdfs9',`pri` = '0',`estimate` = '0',`desc` = '',`estStarted` = '0000-00-00',`deadline` = '0000-00-00',`mailto` = '',`project` = '3',`left` = '0',`status` = 'wait',`assignedTo` = '',`assignedDate` = '',`consumed` = '0',`realStarted` = '0000-00-00',`finishedBy` = '',`finishedDate` = '',`canceledBy` = '',`canceledDate` = '',`closedBy` = '',`closedReason` = '',`closedDate` = '',`lastEditedBy` = 'admin',`lastEditedDate` = '2017-04-10 16:15:42' WHERE id  = '237'
  SELECT * FROM `zt_qaaudit` WHERE id  = '2' AND  deleted  = '0'
  UPDATE `zt_qaaudit` SET `auditID` = '8',`noDec` = 'sdfs',`noType` = 'define',`serious` = 'improve',`cause` = 'sdfds',`measures` = 'sdf' WHERE id  = '2'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '237'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '237' AND  extra  != 'editor'
  SELECT project, story FROM `zt_task` WHERE id  = '237'
  SELECT product FROM `zt_projectproduct` WHERE project  = '3'
  INSERT INTO `zt_action` SET `objectType` = 'task',`objectID` = '237',`actor` = 'admin',`action` = 'edited',`date` = '2017-04-10 16:15:42',`comment` = '',`extra` = '',`product` = ',1,',`project` = '3'
  INSERT INTO `zt_history` SET `field` = 'auditID',`old` = '9',`new` = '8',`diff` = '',`action` = '2087'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '237'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '237' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT * FROM `zt_action` WHERE `id` = '2087' 
  SELECT * FROM `zt_history` WHERE action IN ('2087') ORDER BY `id` 

20170410 16:15:43: task-view-237
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '237'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '237' AND  extra  != 'editor'
  SELECT * FROM `zt_qaaudit` WHERE task  = '237' AND  deleted  = '0'
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
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '237' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('905','2086','2087') ORDER BY `id` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 16:15:47: task-edit-237
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '237'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '237' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '237' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('905','2086','2087') ORDER BY `id` 
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
  SELECT * FROM `zt_qaaudit` WHERE task  = '237' AND  deleted  = '0'
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
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 16:15:55: task-edit-237
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '237'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '237' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '237' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('905','2086','2087') ORDER BY `id` 
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
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '237'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '237' AND  extra  != 'editor'
  SELECT version FROM `zt_story` WHERE id  = '0'
  UPDATE `zt_task` SET `module` = '0',`type` = 'devel',`story` = '0',`color` = '',`name` = 'sdfs9',`pri` = '0',`estimate` = '0',`desc` = '9',`estStarted` = '0000-00-00',`deadline` = '0000-00-00',`mailto` = '',`project` = '3',`left` = '0',`status` = 'wait',`assignedTo` = '',`assignedDate` = '',`consumed` = '0',`realStarted` = '0000-00-00',`finishedBy` = '',`finishedDate` = '',`canceledBy` = '',`canceledDate` = '',`closedBy` = '',`closedReason` = '',`closedDate` = '',`lastEditedBy` = 'admin',`lastEditedDate` = '2017-04-10 16:15:55' WHERE id  = '237'
  SELECT * FROM `zt_qaaudit` WHERE id  = '2' AND  deleted  = '0'
  UPDATE `zt_qaaudit` SET `auditID` = '8',`noDec` = 'sdfs',`noType` = 'define',`serious` = 'improve',`cause` = 'sdfds',`measures` = 'sdf' WHERE id  = '2'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '237'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '237' AND  extra  != 'editor'
  SELECT project, story FROM `zt_task` WHERE id  = '237'
  SELECT product FROM `zt_projectproduct` WHERE project  = '3'
  INSERT INTO `zt_action` SET `objectType` = 'task',`objectID` = '237',`actor` = 'admin',`action` = 'edited',`date` = '2017-04-10 16:15:55',`comment` = '9',`extra` = '',`product` = ',1,',`project` = '3'
  INSERT INTO `zt_history` SET `field` = 'desc',`old` = '',`new` = '9',`diff` = '001- <del></del>\n001+ <ins>9</ins>',`action` = '2088'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '237'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '237' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT * FROM `zt_action` WHERE `id` = '2088' 
  SELECT * FROM `zt_history` WHERE action IN ('2088') ORDER BY `id` 

20170410 16:15:55: task-view-237
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '237'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '237' AND  extra  != 'editor'
  SELECT * FROM `zt_qaaudit` WHERE task  = '237' AND  deleted  = '0'
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
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '237' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('905','2086','2087','2088') ORDER BY `id` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 16:15:57: project-task-3
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
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 16:16:01: task-finish-320
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '320'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '320' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '320' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('975','1956') ORDER BY `id` 
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
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 16:16:05: task-finish-320
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '320'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '320' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '320' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('975','1956') ORDER BY `id` 
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
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '320'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '320' AND  extra  != 'editor'
  INSERT INTO `zt_taskestimate` SET `account` = 'admin',`task` = '320',`date` = '2017-04-10',`left` = '0',`consumed` = '9'
  SELECT * FROM `zt_task` WHERE id  = '320'
  UPDATE `zt_task` SET `consumed` = '9',`assignedTo` = 'admin',`finishedDate` = '2017-04-10 16:16:05',`left` = '0',`assignedDate` = '2017-04-10 16:16:05',`status` = 'done',`finishedBy` = 'admin',`lastEditedBy` = 'admin',`lastEditedDate` = '2017-04-10 16:16:05' WHERE id  = '320'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '320'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '320' AND  extra  != 'editor'
  SELECT project, story FROM `zt_task` WHERE id  = '320'
  SELECT product FROM `zt_projectproduct` WHERE project  = '3'
  INSERT INTO `zt_action` SET `objectType` = 'task',`objectID` = '320',`actor` = 'admin',`action` = 'finished',`date` = '2017-04-10 16:16:05',`comment` = '',`extra` = '',`product` = ',1,',`project` = '3'
  INSERT INTO `zt_history` SET `field` = 'consumed',`old` = '0',`new` = '9',`diff` = '',`action` = '2089'
  INSERT INTO `zt_history` SET `field` = 'finishedDate',`old` = '',`new` = '2017-04-10 16:16:05',`diff` = '',`action` = '2089'
  INSERT INTO `zt_history` SET `field` = 'left',`old` = '4',`new` = '0',`diff` = '',`action` = '2089'
  INSERT INTO `zt_history` SET `field` = 'status',`old` = 'doing',`new` = 'done',`diff` = '',`action` = '2089'
  INSERT INTO `zt_history` SET `field` = 'finishedBy',`old` = '',`new` = 'admin',`diff` = '',`action` = '2089'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '320'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '320' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT * FROM `zt_action` WHERE `id` = '2089' 
  SELECT * FROM `zt_history` WHERE action IN ('2089') ORDER BY `id` 

20170410 16:16:05: project-task-3
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
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 16:16:10: project-burn-3
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
  SELECT date AS name, `left` AS value, estimate FROM `zt_burn` WHERE project  = '3' ORDER BY `date` DESC 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 16:16:23: project-ajaxGetDropMenu-3-project-burn-
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3','14','13','12','11','10','9','2','1') ORDER BY `order` desc 

20170410 16:16:25: project-burn-2
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '2' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '2' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '2'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '2'
  SELECT id, name FROM `zt_project` WHERE parent  = '2'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '2'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '2' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('107') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '2' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '2' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '2'
  SELECT * FROM `zt_project` WHERE `id` = '2' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '2' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '2'
  SELECT * FROM `zt_project` WHERE `id` = '2' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '2' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '2'
  SELECT * FROM `zt_project` WHERE `id` = '2' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '2' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '2'
  SELECT date AS name, `left` AS value, estimate FROM `zt_burn` WHERE project  = '2' ORDER BY `date` DESC 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 16:16:27: project-ajaxGetDropMenu-2-project-burn-
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3','14','13','12','11','10','9','2','1') ORDER BY `order` desc 

20170410 16:16:29: project-burn-13
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '13' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '13' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '13'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '13'
  SELECT id, name FROM `zt_project` WHERE parent  = '13'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '13'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '13' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('1605') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '13' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '13' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '13'
  SELECT * FROM `zt_project` WHERE `id` = '13' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '13' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '13'
  SELECT * FROM `zt_project` WHERE `id` = '13' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '13' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '13'
  SELECT * FROM `zt_project` WHERE `id` = '13' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '13' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '13'
  SELECT date AS name, `left` AS value, estimate FROM `zt_burn` WHERE project  = '13' ORDER BY `date` DESC 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 16:16:38: project-ajaxGetDropMenu-13-project-burn-
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3','14','13','12','11','10','9','2','1') ORDER BY `order` desc 

20170410 16:16:42: project-burn-3
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
  SELECT date AS name, `left` AS value, estimate FROM `zt_burn` WHERE project  = '3' ORDER BY `date` DESC 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 16:16:44: project-ajaxGetDropMenu-3-project-burn-
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3','14','13','12','11','10','9','2','1') ORDER BY `order` desc 

20170410 16:16:46: project-burn-3
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
  SELECT date AS name, `left` AS value, estimate FROM `zt_burn` WHERE project  = '3' ORDER BY `date` DESC 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 16:16:48: project-ajaxGetDropMenu-3-project-burn-
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3','14','13','12','11','10','9','2','1') ORDER BY `order` desc 

20170410 16:16:50: project-burn-10
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '10' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '10' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '10'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '10'
  SELECT id, name FROM `zt_project` WHERE parent  = '10'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '10'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '10' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('1240','1250','1252','1257','1260','1379','1510','1534','1535','1536','1537','1538','1882','1887','1888','1889','1890','1891','1893','1895') ORDER BY `id` 
  SELECT name FROM `zt_build` WHERE id  = '4'
  SELECT name FROM `zt_testtask` WHERE id  = '6'
  SELECT name FROM `zt_testtask` WHERE id  = '8'
  SELECT name FROM `zt_testtask` WHERE id  = '9'
  SELECT name FROM `zt_testtask` WHERE id  = '14'
  SELECT name FROM `zt_testtask` WHERE id  = '18'
  SELECT name FROM `zt_testtask` WHERE id  = '19'
  SELECT name FROM `zt_testtask` WHERE id  = '20'
  SELECT name FROM `zt_testtask` WHERE id  = '21'
  SELECT name FROM `zt_testtask` WHERE id  = '22'
  SELECT name FROM `zt_testtask` WHERE id  = '24'
  SELECT name FROM `zt_testtask` WHERE id  = '26'
  SELECT * FROM `zt_project` WHERE `id` = '10' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '10' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '10'
  SELECT * FROM `zt_project` WHERE `id` = '10' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '10' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '10'
  SELECT * FROM `zt_project` WHERE `id` = '10' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '10' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '10'
  SELECT * FROM `zt_project` WHERE `id` = '10' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '10' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '10'
  SELECT date AS name, `left` AS value, estimate FROM `zt_burn` WHERE project  = '10' ORDER BY `date` DESC 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 16:16:55: project-burn-10
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '10' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '10' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '10'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '10'
  SELECT id, name FROM `zt_project` WHERE parent  = '10'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '10'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '10' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('1240','1250','1252','1257','1260','1379','1510','1534','1535','1536','1537','1538','1882','1887','1888','1889','1890','1891','1893','1895') ORDER BY `id` 
  SELECT name FROM `zt_build` WHERE id  = '4'
  SELECT name FROM `zt_testtask` WHERE id  = '6'
  SELECT name FROM `zt_testtask` WHERE id  = '8'
  SELECT name FROM `zt_testtask` WHERE id  = '9'
  SELECT name FROM `zt_testtask` WHERE id  = '14'
  SELECT name FROM `zt_testtask` WHERE id  = '18'
  SELECT name FROM `zt_testtask` WHERE id  = '19'
  SELECT name FROM `zt_testtask` WHERE id  = '20'
  SELECT name FROM `zt_testtask` WHERE id  = '21'
  SELECT name FROM `zt_testtask` WHERE id  = '22'
  SELECT name FROM `zt_testtask` WHERE id  = '24'
  SELECT name FROM `zt_testtask` WHERE id  = '26'
  SELECT * FROM `zt_project` WHERE `id` = '10' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '10' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '10'
  SELECT * FROM `zt_project` WHERE `id` = '10' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '10' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '10'
  SELECT * FROM `zt_project` WHERE `id` = '10' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '10' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '10'
  SELECT * FROM `zt_project` WHERE `id` = '10' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '10' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '10'
  SELECT date AS name, `left` AS value, estimate FROM `zt_burn` WHERE project  = '10' ORDER BY `date` DESC 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 16:16:57: project-task-10
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '10' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '10' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '10'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '10'
  SELECT id, name FROM `zt_project` WHERE parent  = '10'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '10'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '10' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('1240','1250','1252','1257','1260','1379','1510','1534','1535','1536','1537','1538','1882','1887','1888','1889','1890','1891','1893','1895') ORDER BY `id` 
  SELECT name FROM `zt_build` WHERE id  = '4'
  SELECT name FROM `zt_testtask` WHERE id  = '6'
  SELECT name FROM `zt_testtask` WHERE id  = '8'
  SELECT name FROM `zt_testtask` WHERE id  = '9'
  SELECT name FROM `zt_testtask` WHERE id  = '14'
  SELECT name FROM `zt_testtask` WHERE id  = '18'
  SELECT name FROM `zt_testtask` WHERE id  = '19'
  SELECT name FROM `zt_testtask` WHERE id  = '20'
  SELECT name FROM `zt_testtask` WHERE id  = '21'
  SELECT name FROM `zt_testtask` WHERE id  = '22'
  SELECT name FROM `zt_testtask` WHERE id  = '24'
  SELECT name FROM `zt_testtask` WHERE id  = '26'
  SELECT * FROM `zt_project` WHERE `id` = '10' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '10' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '10'
  SELECT * FROM `zt_project` WHERE `id` = '10' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '10' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '10'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '10'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '10' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '10' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '10' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '10' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '10'
  SELECT * FROM `zt_branch` WHERE product IN ('6') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('6')
  SELECT openedVersion FROM `zt_project` WHERE id  = '10'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '10'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('6') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '10' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '10' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '10' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '10' and type = 'task') OR (root = 6 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '10'
  SELECT * FROM `zt_branch` WHERE product IN ('6') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('6')
  SELECT openedVersion FROM `zt_project` WHERE id  = '10'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '10'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('6') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '10' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '10' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '10' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '10' and type = 'task') OR (root = 6 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '10'
  SELECT * FROM `zt_branch` WHERE product IN ('6') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('6')
  SELECT openedVersion FROM `zt_project` WHERE id  = '10'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '10' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '10' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '10' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '10' and type = 'task' and parent != 0) OR (root = 6 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '10' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('6') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('6')
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 16:16:59: project-ajaxGetDropMenu-10-project-task-unclosed
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3','14','13','12','11','10','9','2','1') ORDER BY `order` desc 

20170410 16:17:01: project-task-11-unclosed
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '11' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '11' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '11'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '11'
  SELECT id, name FROM `zt_project` WHERE parent  = '11'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '11'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '11' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('1255','1376','1391','1511','1512','1883','1884','1885','1892','1894','1995','1996') ORDER BY `id` 
  SELECT name FROM `zt_testtask` WHERE id  = '15'
  SELECT name FROM `zt_testtask` WHERE id  = '16'
  SELECT name FROM `zt_testtask` WHERE id  = '17'
  SELECT name FROM `zt_testtask` WHERE id  = '23'
  SELECT name FROM `zt_testtask` WHERE id  = '25'
  SELECT * FROM `zt_project` WHERE `id` = '11' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '11' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '11'
  SELECT * FROM `zt_project` WHERE `id` = '11' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '11' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '11'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '11'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '11' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '11' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '11' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '11' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '11'
  SELECT * FROM `zt_branch` WHERE product IN ('6') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('6')
  SELECT openedVersion FROM `zt_project` WHERE id  = '11'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '11'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('6') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '11' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '11' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '11' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '11' and type = 'task') OR (root = 6 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '11'
  SELECT * FROM `zt_branch` WHERE product IN ('6') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('6')
  SELECT openedVersion FROM `zt_project` WHERE id  = '11'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '11'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('6') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '11' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '11' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '11' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '11' and type = 'task') OR (root = 6 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '11'
  SELECT * FROM `zt_branch` WHERE product IN ('6') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('6')
  SELECT openedVersion FROM `zt_project` WHERE id  = '11'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '11' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '11' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '11' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '11' and type = 'task' and parent != 0) OR (root = 6 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '11' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('6') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('6')
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 16:17:04: project-burn-11
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '11' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '11' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '11'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '11'
  SELECT id, name FROM `zt_project` WHERE parent  = '11'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '11'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '11' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('1255','1376','1391','1511','1512','1883','1884','1885','1892','1894','1995','1996') ORDER BY `id` 
  SELECT name FROM `zt_testtask` WHERE id  = '15'
  SELECT name FROM `zt_testtask` WHERE id  = '16'
  SELECT name FROM `zt_testtask` WHERE id  = '17'
  SELECT name FROM `zt_testtask` WHERE id  = '23'
  SELECT name FROM `zt_testtask` WHERE id  = '25'
  SELECT * FROM `zt_project` WHERE `id` = '11' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '11' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '11'
  SELECT * FROM `zt_project` WHERE `id` = '11' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '11' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '11'
  SELECT * FROM `zt_project` WHERE `id` = '11' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '11' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '11'
  SELECT * FROM `zt_project` WHERE `id` = '11' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '11' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '11'
  SELECT date AS name, `left` AS value, estimate FROM `zt_burn` WHERE project  = '11' ORDER BY `date` DESC 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 16:17:16: project-tree-11
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '11' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '11' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '11'
  SELECT * FROM `zt_project` WHERE `id` = '11' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '11' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '11'
  SELECT * FROM `zt_project` WHERE `id` = '11' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '11' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '11'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '11'
  SELECT * FROM `zt_branch` WHERE product IN ('6') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('6')
  SELECT openedVersion FROM `zt_project` WHERE id  = '11'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '11' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '11' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '11' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_module` WHERE ((root = '11' and type = 'task' and parent != 0) OR (root = 6 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE id IN ('0') AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '11' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE id IN ('') AND  deleted  = '0'
  SELECT t2.*, t1.version as taskVersion FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  WHERE t1.project  = '11' AND  t2.deleted  = '0'
  SELECT * FROM `zt_task` WHERE project  = '11' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 16:17:19: company
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 16:17:19: company-browse
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
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 16:17:20: report
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 16:17:20: report-productSummary
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id, code, name, PO FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed'
  SELECT * FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('1','2','6','7','8') AND  end  > '2017-04-10'
  SELECT id,plan,product,status FROM `zt_story` WHERE deleted  = '0'
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 16:17:21: doc
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
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 16:17:22: qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 

20170410 16:17:22: bug-browse
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
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 16:17:24: project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 

20170410 16:17:24: project-task
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '11' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '11' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '11'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '11'
  SELECT id, name FROM `zt_project` WHERE parent  = '11'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '11'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '11' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('1255','1376','1391','1511','1512','1883','1884','1885','1892','1894','1995','1996') ORDER BY `id` 
  SELECT name FROM `zt_testtask` WHERE id  = '15'
  SELECT name FROM `zt_testtask` WHERE id  = '16'
  SELECT name FROM `zt_testtask` WHERE id  = '17'
  SELECT name FROM `zt_testtask` WHERE id  = '23'
  SELECT name FROM `zt_testtask` WHERE id  = '25'
  SELECT * FROM `zt_project` WHERE `id` = '11' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '11' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '11'
  SELECT * FROM `zt_project` WHERE `id` = '11' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '11' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '11'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '11'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '11' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '11' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '11' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '11' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '11'
  SELECT * FROM `zt_branch` WHERE product IN ('6') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('6')
  SELECT openedVersion FROM `zt_project` WHERE id  = '11'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '11'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('6') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '11' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '11' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '11' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '11' and type = 'task') OR (root = 6 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '11'
  SELECT * FROM `zt_branch` WHERE product IN ('6') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('6')
  SELECT openedVersion FROM `zt_project` WHERE id  = '11'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '11'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('6') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '11' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '11' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '11' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '11' and type = 'task') OR (root = 6 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '11'
  SELECT * FROM `zt_branch` WHERE product IN ('6') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('6')
  SELECT openedVersion FROM `zt_project` WHERE id  = '11'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '11' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '11' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '11' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '11' and type = 'task' and parent != 0) OR (root = 6 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '11' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('6') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('6')
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 16:18:35: 
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 16:18:35: user-login-Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170410 16:19:14: phpmyadmin
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 16:22:04: azenv
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 16:22:05: 
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 18:36:17: azenv
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 18:36:18: 
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 18:36:41: azenv
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 18:36:42: 
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 19:54:49: 
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 20:06:22: 
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 20:07:49: azenv
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 20:07:49: 
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 20:15:37: 
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 21:41:31: manager/html
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 23:01:29: manager/html
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 23:30:38: 
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170410 23:30:47: 
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

