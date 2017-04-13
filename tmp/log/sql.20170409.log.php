<?php
 die();
?>
20170409 10:21:56: 
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170409 10:21:57: user-login-Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170409 10:23:29: user-login-Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'admin'
  SELECT * FROM `zt_user` WHERE account  = 'admin' AND  password  = 'e10adc3949ba59abbe56e057f20f883e' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '127.0.0.1', `last` = '1491704608' WHERE account  = 'admin'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'admin'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'admin'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'admin' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '1',`actor` = 'admin',`action` = 'login',`date` = '2017-04-09 10:23:28',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170409 10:23:29: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170409 10:23:29: my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 

20170409 10:25:12: my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 

20170409 10:25:12: block-printBlock-1-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '1'

20170409 10:25:13: block-printBlock-3-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('14','13','12','11','10','9','3','2') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('14','13','12','11','10','9','3','2') ORDER BY `date` desc 

20170409 10:25:14: block-printBlock-2-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-04-09' AND  date  < '2017-04-10' AND  (1)  ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1')
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170409 10:25:14: block-printBlock-5-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('8','7','6','2','1') 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') AND  end  > '2017-04-09 10:25:14' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product

20170409 10:25:14: block-printBlock-6-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170409 10:25:15: block-printBlock-4-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170409 10:25:15: block-printBlock-7-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170409 10:25:15: my-todo
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '20170409' AND  date  <= '20170409' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '20170409' AND  date  <= '20170409' 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '20170409' AND  date  <= '20170409' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '20170409' AND  date  <= '20170409' ORDER BY `date` desc,`status`,`begin`,`id` desc 

20170409 10:25:15: block-printBlock-8-my
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

20170409 10:25:15: block-printBlock-9-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170409 10:25:15: my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 

20170409 10:25:16: block-printBlock-1-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '1'

20170409 10:25:16: block-printBlock-2-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-04-09' AND  date  < '2017-04-10' AND  (1)  ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1')
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170409 10:25:16: block-printBlock-4-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170409 10:25:16: block-printBlock-5-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('8','7','6','2','1') 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') AND  end  > '2017-04-09 10:25:16' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product

20170409 10:25:16: block-printBlock-6-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170409 10:25:16: block-printBlock-3-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('14','13','12','11','10','9','3','2') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('14','13','12','11','10','9','3','2') ORDER BY `date` desc 

20170409 10:25:16: block-printBlock-7-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170409 10:25:16: block-printBlock-8-my
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

20170409 10:25:16: block-printBlock-9-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170409 10:25:16: my-todo
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '20170409' AND  date  <= '20170409' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '20170409' AND  date  <= '20170409' 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '20170409' AND  date  <= '20170409' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '20170409' AND  date  <= '20170409' ORDER BY `date` desc,`status`,`begin`,`id` desc 

20170409 10:25:18: my-task
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 0, 20 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 0, 20 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170409 10:25:19: my-bug
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' 
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc 
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170409 10:25:21: my-testtask
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.name AS projectName, t3.name AS buildName FROM `zt_testtask` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_build` AS t3  ON t1.build = t3.id  WHERE t1.deleted  = '0' AND  t1.owner  = 'admin' AND  t1.status  != 'done' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_testtask` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_build` AS t3  ON t1.build = t3.id  WHERE t1.deleted  = '0' AND  t1.owner  = 'admin' AND  t1.status  != 'done' 
  SELECT t1.*, t2.name AS projectName, t3.name AS buildName FROM `zt_testtask` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_build` AS t3  ON t1.build = t3.id  WHERE t1.deleted  = '0' AND  t1.owner  = 'admin' AND  t1.status  != 'done' ORDER BY `id` desc 

20170409 10:25:22: my-story
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('1') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170409 10:25:23: my-project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*,t2.* FROM `zt_team` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.account  = 'admin' AND  t2.deleted  = '0'

20170409 10:25:24: my-dynamic
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-04-09' AND  date  < '2017-04-10' AND  actor  = 'admin' AND  (1)  ORDER BY `date` desc,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_action` WHERE 1  AND  date  > '2017-04-09' AND  date  < '2017-04-10' AND  actor  = 'admin' AND  (1)  
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-04-09' AND  date  < '2017-04-10' AND  actor  = 'admin' AND  (1)  ORDER BY `date` desc,`id` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1')

20170409 10:25:25: my-profile
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_user` WHERE `account`  = 'admin'
  SELECT t2.* FROM `zt_usergroup` AS t1  LEFT JOIN `zt_group` AS t2  ON t1.group = t2.id  WHERE t1.account  = 'admin'

20170409 10:25:28: my-profile
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_user` WHERE `account`  = 'admin'
  SELECT t2.* FROM `zt_usergroup` AS t1  LEFT JOIN `zt_group` AS t2  ON t1.group = t2.id  WHERE t1.account  = 'admin'

20170409 10:25:32: my-changepassword
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_user` WHERE `account`  = 'admin'

20170409 10:25:34: my-managecontacts
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id, listName FROM `zt_usercontact` WHERE account  = 'admin'
  SELECT * FROM `zt_usercontact` WHERE id  = '1'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170409 10:35:35: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170409 10:39:35: admin
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170409 10:39:37: mail
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170409 10:39:37: mail-edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''

20170409 10:39:38: extension-browse
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_extension` WHERE status  = 'installed'

20170409 10:41:43: extension-browse
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_extension` WHERE status  = 'installed'

20170409 10:41:45: company
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170409 10:41:45: company-browse
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

20170409 10:41:46: report
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170409 10:41:46: report-productSummary
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id, code, name, PO FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed'
  SELECT * FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('1','2','6','7','8') AND  end  > '2017-04-09'
  SELECT id,plan,product,status FROM `zt_story` WHERE deleted  = '0'
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170409 10:41:48: doc
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

20170409 10:41:50: qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 

20170409 10:41:51: bug-browse
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

20170409 10:41:52: project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 

20170409 10:41:53: project-task
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

20170409 10:41:54: product
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 

20170409 10:41:54: product-browse
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

20170409 10:41:55: my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 

20170409 10:41:55: block-printBlock-1-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '1'

20170409 10:41:55: block-printBlock-2-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-04-09' AND  date  < '2017-04-10' AND  (1)  ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1')
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170409 10:41:55: block-printBlock-3-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('14','13','12','11','10','9','3','2') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('14','13','12','11','10','9','3','2') ORDER BY `date` desc 

20170409 10:41:55: block-printBlock-4-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170409 10:41:55: block-printBlock-6-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170409 10:41:56: block-printBlock-5-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('8','7','6','2','1') 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') AND  end  > '2017-04-09 10:41:56' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product

20170409 10:41:56: block-printBlock-7-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170409 10:41:56: block-printBlock-8-my
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

20170409 10:41:56: block-printBlock-9-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170409 10:51:55: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170409 11:01:56: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170409 11:11:56: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170409 11:14:39: admin
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170409 11:14:41: mail
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170409 11:14:41: mail-edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''

20170409 11:24:41: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170409 11:34:42: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170409 11:44:42: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170409 11:54:42: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170409 12:04:42: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170409 14:51:03: 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170409 14:51:04: my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 

20170409 14:51:04: block-printBlock-1-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '1'

20170409 14:51:05: block-printBlock-2-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-04-09' AND  date  < '2017-04-10' AND  (1)  ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1')
  SELECT account, realname, deleted FROM `zt_user` ORDER BY `account` 

20170409 14:51:06: block-printBlock-6-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170409 14:51:06: block-printBlock-4-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170409 14:51:06: block-printBlock-5-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('8','7','6','2','1') 
  SELECT * FROM `zt_product` WHERE id IN ('8','7','6','2','1') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') AND  end  > '2017-04-09 14:51:06' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('8','7','6','2','1') GROUP BY product

20170409 14:51:06: block-printBlock-3-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') 
  SELECT * FROM `zt_project` WHERE id IN ('14','13','12','11','10','9','3','2') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('14','13','12','11','10','9','3','2') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('14','13','12','11','10','9','3','2') ORDER BY `date` desc 

20170409 14:51:06: block-printBlock-7-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170409 14:51:07: admin
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170409 14:51:07: block-printBlock-8-my
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

20170409 14:51:07: block-printBlock-9-my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170409 14:51:07: backup
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170409 14:51:10: mail
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170409 14:51:10: mail-edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''

20170409 14:51:12: mail-test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 

20170409 14:51:16: mail-test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('dev1','')

20170409 14:51:18: mail-test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 

20170409 14:51:28: mail-edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''

20170409 15:01:28: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170409 15:11:29: misc-ping
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170409 17:28:40: 
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170409 17:28:41: user-login-Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

