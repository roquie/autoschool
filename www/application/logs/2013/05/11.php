<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-11 10:16:44 --- CRITICAL: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 10:16:44 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('role')
#1 C:\OpenServer\domains\localhost\www\application\classes\Model\Right.php(19): Kohana_ORM->__get('role')
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(11): Model_Right->get_all()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_settings()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 10:16:45 --- CRITICAL: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 10:16:45 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('role')
#1 C:\OpenServer\domains\localhost\www\application\classes\Model\Right.php(19): Kohana_ORM->__get('role')
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(11): Model_Right->get_all()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_settings()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 10:17:06 --- CRITICAL: Kohana_Exception [ 0 ]: The id_user property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 10:17:06 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('id_user')
#1 C:\OpenServer\domains\localhost\www\application\classes\Model\Right.php(19): Kohana_ORM->__get('id_user')
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(11): Model_Right->get_all()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_settings()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 10:18:44 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\Model\Right.php [ 17 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Right.php:17
2013-05-11 10:18:44 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Right.php(17): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 17, Array)
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(11): Model_Right->get_all()
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_settings()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Right.php:17
2013-05-11 10:18:59 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Model\Right.php [ 22 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Right.php:22
2013-05-11 10:18:59 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Right.php(22): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\OpenServer\d...', 22, Array)
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(11): Model_Right->get_all()
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_settings()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Right.php:22
2013-05-11 10:29:45 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 988 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Right.php:21
2013-05-11 10:29:45 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Right.php(21): Kohana_ORM->find_all()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(11): Model_Right->get_all()
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_settings()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Right.php:21
2013-05-11 10:30:50 --- CRITICAL: Kohana_Exception [ 0 ]: The right property does not exist in the Model_Right class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 10:30:50 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('right')
#1 C:\OpenServer\domains\localhost\www\application\classes\Model\Right.php(21): Kohana_ORM->__get('right')
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(11): Model_Right->get_all()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_settings()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 10:31:19 --- CRITICAL: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 10:31:19 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('role')
#1 C:\OpenServer\domains\localhost\www\application\classes\Model\Right.php(20): Kohana_ORM->__get('role')
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(11): Model_Right->get_all()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_settings()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 10:39:29 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\Model\Right.php [ 17 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Right.php:17
2013-05-11 10:39:29 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Right.php(17): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 17, Array)
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(11): Model_Right->get_all()
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_settings()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Right.php:17
2013-05-11 11:34:30 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\Model\Right.php [ 17 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Right.php:17
2013-05-11 11:34:30 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Right.php(17): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 17, Array)
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(11): Model_Right->get_all()
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_settings()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Right.php:17
2013-05-11 11:43:04 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\Model\Right.php [ 17 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Right.php:17
2013-05-11 11:43:04 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Right.php(17): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 17, Array)
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(11): Model_Right->get_all()
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_settings()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Right.php:17
2013-05-11 11:45:05 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$role ~ APPPATH\classes\Model\Right.php [ 19 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Right.php:19
2013-05-11 11:45:05 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Right.php(19): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 19, Array)
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(11): Model_Right->get_all()
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_settings()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Right.php:19
2013-05-11 11:45:40 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\Model\Right.php [ 17 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Right.php:17
2013-05-11 11:45:40 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Right.php(17): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 17, Array)
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(11): Model_Right->get_all()
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_settings()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Right.php:17
2013-05-11 11:57:48 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\Model\Right.php [ 17 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Right.php:17
2013-05-11 11:57:48 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Right.php(17): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 17, Array)
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(11): Model_Right->get_all()
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_settings()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Right.php:17
2013-05-11 12:02:45 --- CRITICAL: Kohana_Exception [ 0 ]: The first_name property does not exist in the Model_Right class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 12:02:45 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('first_name')
#1 C:\OpenServer\domains\localhost\www\application\classes\Model\Right.php(19): Kohana_ORM->__get('first_name')
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(11): Model_Right->get_all()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_settings()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 12:08:51 --- CRITICAL: Kohana_Exception [ 0 ]: The right property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 12:08:51 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('right')
#1 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(25): Kohana_ORM->__get('right')
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(11): Model_User->test()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_settings()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 12:13:21 --- CRITICAL: Kohana_Exception [ 0 ]: The id_user property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 12:13:21 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('id_user')
#1 C:\OpenServer\domains\localhost\www\application\views\settings.php(230): Kohana_ORM->__get('id_user')
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\localhost\www\application\views\layout.php(32): Kohana_View->__toString()
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#12 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#15 {main} in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 12:17:19 --- CRITICAL: Kohana_Exception [ 0 ]: The id_user property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 12:17:19 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('id_user')
#1 C:\OpenServer\domains\localhost\www\application\views\settings.php(135): Kohana_ORM->__get('id_user')
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\localhost\www\application\views\layout.php(49): Kohana_View->__toString()
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#12 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#15 {main} in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 12:17:42 --- CRITICAL: Kohana_Exception [ 0 ]: The id_user property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 12:17:42 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('id_user')
#1 C:\OpenServer\domains\localhost\www\application\views\settings.php(135): Kohana_ORM->__get('id_user')
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\localhost\www\application\views\layout.php(49): Kohana_View->__toString()
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#12 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#15 {main} in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 12:23:08 --- CRITICAL: Kohana_Exception [ 0 ]: The id_user property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 12:23:08 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('id_user')
#1 C:\OpenServer\domains\localhost\www\application\views\settings.php(152): Kohana_ORM->__get('id_user')
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\localhost\www\application\views\layout.php(49): Kohana_View->__toString()
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#12 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#15 {main} in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 13:00:32 --- CRITICAL: Database_Exception [ 1146 ]: Table 'mpt.group' doesn't exist [ SHOW FULL COLUMNS FROM `Group` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:358
2013-05-11 13:00:32 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('Group')
#2 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\OpenServer\domains\localhost\www\application\classes\Model.php(10): Kohana_ORM->__construct()
#6 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(11): Model::factory('Group')
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_settings()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#10 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:358
2013-05-11 13:01:32 --- CRITICAL: Database_Exception [ 1146 ]: Table 'mpt.department' doesn't exist [ SHOW FULL COLUMNS FROM `Department` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:358
2013-05-11 13:01:32 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('Department')
#2 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(1686): Kohana_ORM::factory('department')
#7 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(626): Kohana_ORM->_related('department')
#8 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('department')
#9 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(19): Kohana_ORM->__get('department')
#10 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(11): Model_Group->getGroupsWithDept()
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_settings()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#14 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#17 {main} in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:358
2013-05-11 13:01:40 --- CRITICAL: Kohana_Exception [ 0 ]: The departments property does not exist in the Model_Group class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 13:01:40 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('departments')
#1 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(19): Kohana_ORM->__get('departments')
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(11): Model_Group->getGroupsWithDept()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_settings()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 13:01:50 --- CRITICAL: Kohana_Exception [ 0 ]: The department property does not exist in the Model_Group class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 13:01:50 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('department')
#1 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(19): Kohana_ORM->__get('department')
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(11): Model_Group->getGroupsWithDept()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_settings()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 13:01:55 --- CRITICAL: Database_Exception [ 1146 ]: Table 'mpt.department' doesn't exist [ SHOW FULL COLUMNS FROM `Department` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:358
2013-05-11 13:01:55 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('Department')
#2 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(1686): Kohana_ORM::factory('department')
#7 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(626): Kohana_ORM->_related('departments')
#8 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('departments')
#9 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(19): Kohana_ORM->__get('departments')
#10 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(11): Model_Group->getGroupsWithDept()
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_settings()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#14 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#17 {main} in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:358
2013-05-11 13:20:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index: right ~ APPPATH\classes\Controller\Settings.php [ 83 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php:83
2013-05-11 13:20:22 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(83): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 83, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_editUser()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php:83
2013-05-11 13:48:49 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\classes\Model\User.php [ 32 ] in file:line
2013-05-11 13:48:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 14:00:46 --- CRITICAL: Kohana_Exception [ 0 ]: The id_stud property does not exist in the Model_Student class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 14:00:46 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('id_stud')
#1 C:\OpenServer\domains\localhost\www\application\views\students\view.php(37): Kohana_ORM->__get('id_stud')
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\localhost\www\application\views\layout.php(49): Kohana_View->__toString()
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Students))
#12 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#15 {main} in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 14:08:54 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Right class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 14:08:54 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(71): Kohana_ORM->__get('name')
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 14:13:58 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Right::getCurrentRights() ~ APPPATH\classes\Controller\Main.php [ 75 ] in file:line
2013-05-11 14:13:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 14:22:53 --- CRITICAL: Kohana_Exception [ 0 ]: The department property does not exist in the Model_Group class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 14:22:53 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('department')
#1 C:\OpenServer\domains\localhost\www\application\views\navbar.php(43): Kohana_ORM->__get('department')
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\localhost\www\application\views\layout.php(48): Kohana_View->__toString()
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#12 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#15 {main} in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 14:23:08 --- CRITICAL: Kohana_Exception [ 0 ]: The department property does not exist in the Model_Group class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 14:23:08 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('department')
#1 C:\OpenServer\domains\localhost\www\application\views\navbar.php(43): Kohana_ORM->__get('department')
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\localhost\www\application\views\layout.php(48): Kohana_View->__toString()
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#12 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#15 {main} in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-11 15:31:16 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Settings.php [ 46 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php:46
2013-05-11 15:31:16 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(46): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 46, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_selectUser()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php:46
2013-05-11 15:31:38 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Settings.php [ 47 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php:47
2013-05-11 15:31:38 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(47): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 47, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_selectUser()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php:47
2013-05-11 16:38:18 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Users' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 16:38:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 16:38:41 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Users' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 16:38:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 16:45:28 --- CRITICAL: View_Exception [ 0 ]: The requested view mail/send/tpl could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php:137
2013-05-11 16:45:28 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('mail/send/tpl')
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('mail/send/tpl', NULL)
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Mail.php(17): Kohana_View::factory('mail/send/tpl')
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Mail->action_tpl()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mail))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php:137
2013-05-11 16:51:06 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Users' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 16:51:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 16:51:41 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Users' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 16:51:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 16:53:49 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Users' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 16:53:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 16:57:03 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Users' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 16:57:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 16:57:21 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Main.php [ 74 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php:74
2013-05-11 16:57:21 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(74): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 74, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php:74
2013-05-11 17:05:36 --- CRITICAL: Database_Exception [ 1066 ]: Not unique table/alias: 'user' [ SELECT `email`, `user`.`id` AS `id`, `user`.`first_name` AS `first_name`, `user`.`last_name` AS `last_name`, `user`.`email` AS `email`, `user`.`photo` AS `photo`, `user`.`group_id` AS `group_id`, `user`.`right_id` AS `right_id` FROM `User`, `Users` AS `user` WHERE `email` = 'roquie0@gmail.com' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-11 17:05:36 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `email`,...', false, Array)
#1 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(49): Kohana_ORM->find()
#4 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(73): Model_User->getOneEmail('roquie0@gmail.c...')
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#11 {main} in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-11 17:06:06 --- CRITICAL: Database_Exception [ 1066 ]: Not unique table/alias: 'user' [ SELECT `email`, `user`.`id` AS `id`, `user`.`first_name` AS `first_name`, `user`.`last_name` AS `last_name`, `user`.`email` AS `email`, `user`.`photo` AS `photo`, `user`.`group_id` AS `group_id`, `user`.`right_id` AS `right_id` FROM `User`, `Users` AS `user` WHERE `email` = 'roquie0@gmail.com' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-11 17:06:06 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `email`,...', false, Array)
#1 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(48): Kohana_ORM->find()
#4 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(73): Model_User->getOneEmail('roquie0@gmail.c...')
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#11 {main} in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-11 17:06:14 --- CRITICAL: Database_Exception [ 1052 ]: Column 'email' in field list is ambiguous [ SELECT `email`, `user`.`id` AS `id`, `user`.`first_name` AS `first_name`, `user`.`last_name` AS `last_name`, `user`.`email` AS `email`, `user`.`photo` AS `photo`, `user`.`group_id` AS `group_id`, `user`.`right_id` AS `right_id` FROM `Users`, `Users` AS `user` WHERE `email` = 'roquie0@gmail.com' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-11 17:06:14 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `email`,...', false, Array)
#1 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(48): Kohana_ORM->find()
#4 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(73): Model_User->getOneEmail('roquie0@gmail.c...')
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#11 {main} in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-11 17:14:25 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Settings.php [ 106 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php:106
2013-05-11 17:14:25 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(106): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 106, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_newUser()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php:106
2013-05-11 17:34:09 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pre_reg' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 17:34:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 17:36:37 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pre_reg' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 17:36:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 17:37:26 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pre_regs' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 17:37:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 17:37:34 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pre_reg' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 17:37:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 17:37:40 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pre_reg' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 17:37:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 17:38:02 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pre_reg' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 17:38:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 17:39:08 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pre_reg' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 17:39:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 17:39:09 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pre_reg' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 17:39:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 17:39:09 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pre_reg' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 17:39:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 17:39:09 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pre_reg' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 17:39:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 17:39:09 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pre_reg' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 17:39:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 17:39:09 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pre_reg' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 17:39:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 17:39:09 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pre_reg' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 17:39:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 17:39:09 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pre_reg' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 17:39:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 17:39:09 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pre_reg' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 17:39:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 17:39:09 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pre_reg' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 17:39:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 17:39:09 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pre_reg' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 17:39:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 17:39:09 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pre_reg' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 17:39:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 17:39:09 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pre_reg' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 17:39:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 17:39:10 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pre_reg' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 17:39:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 17:39:10 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pre_reg' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 17:39:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 17:39:10 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pre_reg' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 17:39:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 17:39:10 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pre_reg' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 17:39:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 17:39:10 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pre_reg' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 17:39:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 17:39:10 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pre_reg' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 17:39:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 17:39:10 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pre_reg' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 17:39:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 17:39:10 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pre_reg' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 17:39:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 17:39:10 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pre_reg' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 17:39:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 17:39:10 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pre_reg' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 17:39:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 17:39:10 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pre_reg' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 17:39:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 17:39:13 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pre_reg' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 17:39:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 17:39:15 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pre_reg' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 17:39:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 17:39:24 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pre_reg' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-11 17:39:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 19:00:29 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\GoogleLogin.php [ 43 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\GoogleLogin.php:43
2013-05-11 19:00:29 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\GoogleLogin.php(43): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\OpenServer\d...', 43, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_GoogleLogin->action_goauth()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleLogin))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\GoogleLogin.php:43
2013-05-11 19:00:53 --- CRITICAL: GOAuthException [ 0 ]: Ошибка авторизации: invalid_grant ~ MODPATH\goauth\classes\GOAuth.php [ 73 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\GoogleLogin.php:18
2013-05-11 19:00:53 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\GoogleLogin.php(18): GOAuth::getUserData('4/Yx5H8G4K_C-Us...')
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_GoogleLogin->action_goauth()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleLogin))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\GoogleLogin.php:18
2013-05-11 19:01:03 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\GoogleLogin.php [ 43 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\GoogleLogin.php:43
2013-05-11 19:01:03 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\GoogleLogin.php(43): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\OpenServer\d...', 43, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_GoogleLogin->action_goauth()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleLogin))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\GoogleLogin.php:43
2013-05-11 19:21:48 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete prereg model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\PreReg.php:29
2013-05-11 19:21:48 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\PreReg.php(29): Kohana_ORM->delete()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\GoogleLogin.php(35): Model_PreReg->delPreRegUser('roquie0@gmail.c...')
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_GoogleLogin->action_goauth()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleLogin))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\PreReg.php:29
2013-05-11 19:22:39 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete prereg model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\PreReg.php:28
2013-05-11 19:22:39 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\PreReg.php(28): Kohana_ORM->delete()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\GoogleLogin.php(35): Model_PreReg->delPreRegUser('roquie0@gmail.c...')
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_GoogleLogin->action_goauth()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleLogin))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\PreReg.php:28
2013-05-11 19:23:15 --- CRITICAL: GOAuthException [ 0 ]: Ошибка авторизации: invalid_grant ~ MODPATH\goauth\classes\GOAuth.php [ 73 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\GoogleLogin.php:18
2013-05-11 19:23:15 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\GoogleLogin.php(18): GOAuth::getUserData('4/tZr89CA_zwTxV...')
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_GoogleLogin->action_goauth()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleLogin))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\GoogleLogin.php:18
2013-05-11 19:23:18 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete prereg model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\PreReg.php:28
2013-05-11 19:23:18 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\PreReg.php(28): Kohana_ORM->delete()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\GoogleLogin.php(35): Model_PreReg->delPreRegUser('roquie0@gmail.c...')
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_GoogleLogin->action_goauth()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleLogin))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\PreReg.php:28
2013-05-11 19:25:58 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_ORM::remove(), called in C:\OpenServer\domains\localhost\www\application\classes\Model\PreReg.php on line 29 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 1595 ] in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:1595
2013-05-11 19:25:58 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(1595): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\OpenServer\d...', 1595, Array)
#1 C:\OpenServer\domains\localhost\www\application\classes\Model\PreReg.php(29): Kohana_ORM->remove()
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\GoogleLogin.php(35): Model_PreReg->delPreRegUser('roquie0@gmail.c...')
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_GoogleLogin->action_goauth()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleLogin))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:1595
2013-05-11 19:35:33 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete prereg model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\PreReg.php:25
2013-05-11 19:35:33 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\PreReg.php(25): Kohana_ORM->delete()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\GoogleLogin.php(35): Model_PreReg->delPreRegUser('roquie0@gmail.c...')
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_GoogleLogin->action_goauth()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleLogin))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\PreReg.php:25
2013-05-11 19:49:20 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:68
2013-05-11 19:49:20 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(68): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(62): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_selectUser()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:68
2013-05-11 19:49:33 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:68
2013-05-11 19:49:33 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(68): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(62): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_selectUser()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:68
2013-05-11 20:14:56 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:68
2013-05-11 20:14:56 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(68): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(89): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_editUser()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:68
2013-05-11 20:16:33 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:68
2013-05-11 20:16:33 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(68): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:68
2013-05-11 20:17:09 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:67
2013-05-11 20:17:09 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(67): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:67
2013-05-11 20:17:15 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:68
2013-05-11 20:17:15 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(68): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:68
2013-05-11 20:20:15 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:20:15 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:23:59 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_MySQL1' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2013-05-11 20:23:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 20:24:07 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect():  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:171
2013-05-11 20:24:07 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('Rights')
#3 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\OpenServer\domains\localhost\www\application\classes\Model.php(10): Kohana_ORM->__construct()
#7 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(70): Model::factory('Right')
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:171
2013-05-11 20:24:12 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'ro1ot'@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:171
2013-05-11 20:24:12 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('Rights')
#3 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\OpenServer\domains\localhost\www\application\classes\Model.php(10): Kohana_ORM->__construct()
#7 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(70): Model::factory('Right')
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:171
2013-05-11 20:24:19 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:171
2013-05-11 20:24:19 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('Rights')
#3 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\OpenServer\domains\localhost\www\application\classes\Model.php(10): Kohana_ORM->__construct()
#7 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(70): Model::factory('Right')
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:171
2013-05-11 20:24:24 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:24 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:38 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:38 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:38 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:38 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:38 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:38 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:38 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:38 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:39 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:39 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:39 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:39 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:39 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:39 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:41 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:41 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:41 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:41 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:41 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:41 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:41 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:41 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:44 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:44 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:44 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:44 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:47 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:47 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:47 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:47 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:47 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:47 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:48 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:48 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:48 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:48 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:48 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:48 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:49 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Too many connections ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:171
2013-05-11 20:24:49 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('Rights')
#3 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\OpenServer\domains\localhost\www\application\classes\Model.php(10): Kohana_ORM->__construct()
#7 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(70): Model::factory('Right')
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:171
2013-05-11 20:24:49 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:49 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:49 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:49 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:49 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:49 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:49 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Too many connections ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:171
2013-05-11 20:24:49 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('Rights')
#3 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\OpenServer\domains\localhost\www\application\classes\Model.php(10): Kohana_ORM->__construct()
#7 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(70): Model::factory('Right')
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:171
2013-05-11 20:24:49 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:49 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:49 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:49 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:49 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:49 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:49 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:49 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:50 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:50 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:50 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:50 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:50 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:50 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:50 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:50 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:50 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:50 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:50 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:50 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:50 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:50 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:50 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:50 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:50 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:50 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:50 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:50 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:50 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:50 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:50 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:50 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:50 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:50 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:50 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:50 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:50 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:50 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:50 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:50 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:51 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:51 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:51 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:51 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:51 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:51 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:51 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:51 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:51 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:51 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:51 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:51 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:51 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:51 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:51 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:51 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:51 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:51 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:51 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:51 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:51 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:24:51 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:25:01 --- CRITICAL: ErrorException [ 1 ]: Class 'Kohana_ORM' not found ~ APPPATH\classes\ORM.php [ 4 ] in file:line
2013-05-11 20:25:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 20:25:05 --- CRITICAL: ErrorException [ 1 ]: Class 'Kohana_ORM' not found ~ APPPATH\classes\ORM.php [ 4 ] in file:line
2013-05-11 20:25:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 20:25:11 --- CRITICAL: ErrorException [ 1 ]: Class 'Database' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 317 ] in file:line
2013-05-11 20:25:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 20:25:13 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:25:13 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:25:37 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:25:37 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:48:42 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 20:48:42 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(70): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(79): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:70
2013-05-11 21:47:55 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::delUser() ~ APPPATH\classes\Controller\Settings.php [ 157 ] in file:line
2013-05-11 21:47:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 21:47:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::delUser() ~ APPPATH\classes\Controller\Settings.php [ 157 ] in file:line
2013-05-11 21:47:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 21:50:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::delUser() ~ APPPATH\classes\Controller\Main.php [ 71 ] in file:line
2013-05-11 21:50:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-11 22:40:51 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:68
2013-05-11 22:40:51 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\User.php(68): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(89): Model_User->updateUsers(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_editUser()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\User.php:68