<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-13 00:31:56 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Message' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-13 00:31:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-13 00:32:05 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Message' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-13 00:32:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-13 00:32:28 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Message' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-13 00:32:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-13 00:34:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Message' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-13 00:34:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-13 00:34:30 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Message' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-13 00:34:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-13 00:34:33 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Message' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-13 00:34:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-13 00:34:35 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Message' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-13 00:34:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-13 00:47:05 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$message ~ APPPATH\classes\Controller\Lk\Ajax.php [ 307 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php:307
2013-11-13 00:47:05 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php(307): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\OpenServer\d...', 307, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(85): Controller_Lk_Ajax->action_help()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php:307
2013-11-13 00:52:02 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1' at line 1 [ SELECT `titles`.`id` AS `id`, `titles`.`title` AS `title` FROM `Titles` AS `titles` WHERE `title_id` = '=' ORDER BY `id` 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\OpenServer\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2013-11-13 00:52:02 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `titles`...', 'Model_Titles', Array)
#1 D:\OpenServer\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\OpenServer\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 D:\OpenServer\domains\autoschool.ru\www\application\classes\Model.php(52): Kohana_ORM->find_all()
#4 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php(305): Model->allWhere('title_id', '=', '1')
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(85): Controller_Lk_Ajax->action_help()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#8 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2013-11-13 00:52:20 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1' at line 1 [ SELECT `titles`.`id` AS `id`, `titles`.`title` AS `title` FROM `Titles` AS `titles` WHERE `title_id` = '=' ORDER BY `id` 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\OpenServer\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2013-11-13 00:52:20 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `titles`...', 'Model_Titles', Array)
#1 D:\OpenServer\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\OpenServer\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 D:\OpenServer\domains\autoschool.ru\www\application\classes\Model.php(52): Kohana_ORM->find_all()
#4 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php(306): Model->allWhere('title_id', '=', '1')
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(85): Controller_Lk_Ajax->action_help()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#8 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2013-11-13 00:52:42 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'title_id' in 'where clause' [ SELECT `titles`.`id` AS `id`, `titles`.`title` AS `title` FROM `Titles` AS `titles` WHERE `title_id` = '1' ORDER BY `id` ASC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\OpenServer\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2013-11-13 00:52:42 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `titles`...', 'Model_Titles', Array)
#1 D:\OpenServer\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\OpenServer\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 D:\OpenServer\domains\autoschool.ru\www\application\classes\Model.php(52): Kohana_ORM->find_all()
#4 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php(305): Model->allWhere('title_id', '1')
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(85): Controller_Lk_Ajax->action_help()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#8 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2013-11-13 00:54:57 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$message ~ APPPATH\classes\Controller\Lk\Ajax.php [ 306 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php:306
2013-11-13 00:54:57 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php(306): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\OpenServer\d...', 306, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(85): Controller_Lk_Ajax->action_help()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php:306
2013-11-13 00:58:15 --- CRITICAL: Kohana_Exception [ 0 ]: The message property does not exist in the Model_Titles class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in D:\OpenServer\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php:699
2013-11-13 00:58:15 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('message', Array)
#1 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php(306): Kohana_ORM->__set('message', Array)
#2 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(85): Controller_Lk_Ajax->action_help()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php:699
2013-11-13 00:58:38 --- CRITICAL: Kohana_Exception [ 0 ]: The msg property does not exist in the Model_Titles class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in D:\OpenServer\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php:699
2013-11-13 00:58:38 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('msg', Array)
#1 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php(306): Kohana_ORM->__set('msg', Array)
#2 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(85): Controller_Lk_Ajax->action_help()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php:699
2013-11-13 00:58:48 --- CRITICAL: Kohana_Exception [ 0 ]: The msg property does not exist in the Model_Titles class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in D:\OpenServer\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php:699
2013-11-13 00:58:48 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('msg', Array)
#1 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php(306): Kohana_ORM->__set('msg', Array)
#2 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(85): Controller_Lk_Ajax->action_help()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php:699
2013-11-13 00:59:21 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Lk\Ajax.php [ 309 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php:309
2013-11-13 00:59:21 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php(309): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\OpenServer\d...', 309, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(85): Controller_Lk_Ajax->action_help()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php:309
2013-11-13 01:09:20 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Lk\Ajax.php [ 306 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php:306
2013-11-13 01:09:20 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php(306): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\OpenServer\d...', 306, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(85): Controller_Lk_Ajax->action_help()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php:306
2013-11-13 01:11:34 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\classes\Controller\Lk\Ajax.php [ 306 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php:306
2013-11-13 01:11:34 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php(306): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 306, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(85): Controller_Lk_Ajax->action_help()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php:306
2013-11-13 01:12:19 --- CRITICAL: ErrorException [ 8 ]: Undefined index: user_id ~ MODPATH\orm\classes\Kohana\ORM.php [ 630 ] in D:\OpenServer\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php:630
2013-11-13 01:12:19 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(630): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 630, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('user')
#2 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php(306): Kohana_ORM->__get('user')
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(85): Controller_Lk_Ajax->action_help()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php:630
2013-11-13 01:14:51 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Titles::getTitles(), called in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php on line 303 and defined ~ APPPATH\classes\Model\Titles.php [ 29 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Model\Titles.php:29
2013-11-13 01:14:51 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Model\Titles.php(29): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\OpenServer\d...', 29, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php(303): Model_Titles->getTitles()
#2 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(85): Controller_Lk_Ajax->action_help()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Model\Titles.php:29
2013-11-13 01:15:49 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Titles::getTitles(), called in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php on line 303 and defined ~ APPPATH\classes\Model\Titles.php [ 29 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Model\Titles.php:29
2013-11-13 01:15:49 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Model\Titles.php(29): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\OpenServer\d...', 29, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php(303): Model_Titles->getTitles()
#2 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(85): Controller_Lk_Ajax->action_help()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Model\Titles.php:29
2013-11-13 01:18:35 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\lk\pages\help.php [ 29 ] in D:\OpenServer\domains\autoschool.ru\www\application\views\lk\pages\help.php:29
2013-11-13 01:18:35 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\views\lk\pages\help.php(29): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\OpenServer\d...', 29, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php(312): Kohana_View->render()
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(85): Controller_Lk_Ajax->action_help()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\autoschool.ru\www\application\views\lk\pages\help.php:29
2013-11-13 01:18:42 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\lk\pages\help.php [ 29 ] in D:\OpenServer\domains\autoschool.ru\www\application\views\lk\pages\help.php:29
2013-11-13 01:18:42 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\views\lk\pages\help.php(29): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\OpenServer\d...', 29, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php(312): Kohana_View->render()
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(85): Controller_Lk_Ajax->action_help()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\autoschool.ru\www\application\views\lk\pages\help.php:29
2013-11-13 23:46:26 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Lk\Ajax.php [ 334 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php:334
2013-11-13 23:46:26 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php(334): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\OpenServer\d...', 334, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(85): Controller_Lk_Ajax->action_addMessage()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php:334
2013-11-13 23:54:32 --- CRITICAL: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\classes\Controller\Lk\Ajax.php [ 321 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php:321
2013-11-13 23:54:32 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php(321): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 321, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(85): Controller_Lk_Ajax->action_addMessage()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php:321
2013-11-13 23:54:32 --- CRITICAL: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\classes\Controller\Lk\Ajax.php [ 321 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php:321
2013-11-13 23:54:32 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php(321): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 321, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(85): Controller_Lk_Ajax->action_addMessage()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php:321
2013-11-13 23:54:33 --- CRITICAL: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\classes\Controller\Lk\Ajax.php [ 321 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php:321
2013-11-13 23:54:33 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php(321): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 321, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(85): Controller_Lk_Ajax->action_addMessage()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php:321
2013-11-13 23:54:33 --- CRITICAL: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\classes\Controller\Lk\Ajax.php [ 321 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php:321
2013-11-13 23:54:33 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php(321): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 321, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(85): Controller_Lk_Ajax->action_addMessage()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php:321
2013-11-13 23:55:48 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Ajax\Ajax.php [ 74 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Ajax\Ajax.php:74
2013-11-13 23:55:48 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Ajax\Ajax.php(74): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\OpenServer\d...', 74, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php(321): Controller_Ajax_Ajax->ajax_msg(Array)
#2 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(85): Controller_Lk_Ajax->action_addMessage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Ajax\Ajax.php:74
2013-11-13 23:55:53 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Ajax\Ajax.php [ 74 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Ajax\Ajax.php:74
2013-11-13 23:55:53 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Ajax\Ajax.php(74): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\OpenServer\d...', 74, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php(321): Controller_Ajax_Ajax->ajax_msg(Array)
#2 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(85): Controller_Lk_Ajax->action_addMessage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Ajax\Ajax.php:74