<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-18 17:38:37 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'melnik5g_mpt'@'127.0.0.1' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in L:\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:171
2013-07-18 17:38:37 --- DEBUG: #0 L:\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 L:\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 L:\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('Rights')
#3 L:\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 L:\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 L:\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 L:\domains\localhost\www\system\classes\Kohana\Model.php(26): Kohana_ORM->__construct()
#7 L:\domains\localhost\www\application\classes\Controller\Main.php(194): Kohana_Model::factory('Right')
#8 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#9 [internal function]: Kohana_Controller->execute()
#10 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#14 {main} in L:\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:171
2013-07-18 17:41:17 --- CRITICAL: Database_Exception [ 1049 ]: Unknown database 'melnik5g_mpt' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in L:\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:75
2013-07-18 17:41:17 --- DEBUG: #0 L:\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('melnik5g_mpt')
#1 L:\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 L:\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 L:\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('Rights')
#4 L:\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#5 L:\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#6 L:\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 L:\domains\localhost\www\system\classes\Kohana\Model.php(26): Kohana_ORM->__construct()
#8 L:\domains\localhost\www\application\classes\Controller\Main.php(194): Kohana_Model::factory('Right')
#9 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#10 [internal function]: Kohana_Controller->execute()
#11 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#12 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#15 {main} in L:\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:75
2013-07-18 17:56:02 --- CRITICAL: View_Exception [ 0 ]: The requested view preview/navbar could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in L:\domains\localhost\www\system\classes\Kohana\View.php:137
2013-07-18 17:56:02 --- DEBUG: #0 L:\domains\localhost\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('preview/navbar')
#1 L:\domains\localhost\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('preview/navbar', NULL)
#2 L:\domains\localhost\www\application\classes\Controller\Main.php(15): Kohana_View::factory('preview/navbar')
#3 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in L:\domains\localhost\www\system\classes\Kohana\View.php:137
2013-07-18 17:57:39 --- CRITICAL: View_Exception [ 0 ]: The requested view preview/navbar could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in L:\domains\localhost\www\system\classes\Kohana\View.php:137
2013-07-18 17:57:39 --- DEBUG: #0 L:\domains\localhost\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('preview/navbar')
#1 L:\domains\localhost\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('preview/navbar', NULL)
#2 L:\domains\localhost\www\application\classes\Controller\Main.php(15): Kohana_View::factory('preview/navbar')
#3 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in L:\domains\localhost\www\system\classes\Kohana\View.php:137
2013-07-18 17:59:32 --- CRITICAL: View_Exception [ 0 ]: The requested view papers/view could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in L:\domains\localhost\www\system\classes\Kohana\View.php:137
2013-07-18 17:59:32 --- DEBUG: #0 L:\domains\localhost\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('papers/view')
#1 L:\domains\localhost\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('papers/view', Array)
#2 L:\domains\localhost\www\application\classes\Controller\Papers.php(151): Kohana_View::factory('papers/view', Array)
#3 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_view()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#6 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in L:\domains\localhost\www\system\classes\Kohana\View.php:137
2013-07-18 18:01:09 --- CRITICAL: View_Exception [ 0 ]: The requested view settings could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in L:\domains\localhost\www\system\classes\Kohana\View.php:137
2013-07-18 18:01:09 --- DEBUG: #0 L:\domains\localhost\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('settings')
#1 L:\domains\localhost\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('settings', Array)
#2 L:\domains\localhost\www\application\classes\Controller\Settings.php(30): Kohana_View::factory('settings', Array)
#3 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_settings()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#6 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in L:\domains\localhost\www\system\classes\Kohana\View.php:137
2013-07-18 18:07:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH\classes\Controller\Index.php [ 10 ] in file:line
2013-07-18 18:07:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-07-18 18:15:52 --- CRITICAL: View_Exception [ 0 ]: The requested view navbar could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in L:\domains\localhost\www\system\classes\Kohana\View.php:137
2013-07-18 18:15:52 --- DEBUG: #0 L:\domains\localhost\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('navbar')
#1 L:\domains\localhost\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('navbar', Array)
#2 L:\domains\localhost\www\application\classes\Controller\Admin.php(23): Kohana_View::factory('navbar', Array)
#3 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Admin->before()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in L:\domains\localhost\www\system\classes\Kohana\View.php:137
2013-07-18 21:04:02 --- CRITICAL: ErrorException [ 2 ]: Division by zero ~ APPPATH\views\admin\mail\send.php [ 98 ] in L:\domains\localhost\www\application\views\admin\mail\send.php:98
2013-07-18 21:04:02 --- DEBUG: #0 L:\domains\localhost\www\application\views\admin\mail\send.php(98): Kohana_Core::error_handler(2, 'Division by zer...', 'L:\domains\loca...', 98, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\View.php(61): include('L:\domains\loca...')
#2 L:\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('L:\domains\loca...', Array)
#3 L:\domains\localhost\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 L:\domains\localhost\www\application\views\admin\layout.php(50): Kohana_View->__toString()
#5 L:\domains\localhost\www\system\classes\Kohana\View.php(61): include('L:\domains\loca...')
#6 L:\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('L:\domains\loca...', Array)
#7 L:\domains\localhost\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 L:\domains\localhost\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#11 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#14 {main} in L:\domains\localhost\www\application\views\admin\mail\send.php:98
2013-07-18 22:01:19 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_PreReg' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2013-07-18 22:01:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-07-18 22:02:30 --- CRITICAL: GOAuthException [ 0 ]: Ошибка авторизации: invalid_grant ~ MODPATH\goauth\classes\GOAuth.php [ 78 ] in L:\domains\localhost\www\application\classes\Controller\Admin\GoogleLogin.php:17
2013-07-18 22:02:30 --- DEBUG: #0 L:\domains\localhost\www\application\classes\Controller\Admin\GoogleLogin.php(17): GOAuth::getUserData('4/BqIVMqA9CEtne...')
#1 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Admin_GoogleLogin->action_goauth()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_GoogleLogin))
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\localhost\www\application\classes\Controller\Admin\GoogleLogin.php:17
2013-07-18 22:02:37 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_PreReg' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2013-07-18 22:02:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-07-18 22:02:57 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Admin/PreReg' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2013-07-18 22:02:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-07-18 22:03:08 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_PreReg' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-07-18 22:03:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-07-18 22:03:39 --- CRITICAL: GOAuthException [ 0 ]: Ошибка авторизации: invalid_grant ~ MODPATH\goauth\classes\GOAuth.php [ 78 ] in L:\domains\localhost\www\application\classes\Controller\Admin\GoogleLogin.php:17
2013-07-18 22:03:39 --- DEBUG: #0 L:\domains\localhost\www\application\classes\Controller\Admin\GoogleLogin.php(17): GOAuth::getUserData('4/S6xshC_lmz7Rb...')
#1 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Admin_GoogleLogin->action_goauth()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_GoogleLogin))
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\localhost\www\application\classes\Controller\Admin\GoogleLogin.php:17
2013-07-18 22:03:43 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_PreReg' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-07-18 22:03:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-07-18 22:11:06 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::get_email() ~ APPPATH\classes\Controller\Admin\GoogleLogin.php [ 36 ] in file:line
2013-07-18 22:11:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-07-18 22:11:25 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Right' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2013-07-18 22:11:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-07-18 22:11:50 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Right' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2013-07-18 22:11:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-07-18 22:11:52 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Right' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2013-07-18 22:11:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-07-18 22:12:02 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Right' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-07-18 22:12:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-07-18 22:14:16 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_MsgTemplate' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2013-07-18 22:14:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-07-18 23:29:06 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Admin\Mail.php [ 15 ] in L:\domains\localhost\www\application\classes\Controller\Admin\Mail.php:15
2013-07-18 23:29:06 --- DEBUG: #0 L:\domains\localhost\www\application\classes\Controller\Admin\Mail.php(15): Kohana_Core::error_handler(2, 'Attempt to assi...', 'L:\domains\loca...', 15, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_send()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\localhost\www\application\classes\Controller\Admin\Mail.php:15
2013-07-18 23:29:20 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Admin\Mail.php [ 15 ] in L:\domains\localhost\www\application\classes\Controller\Admin\Mail.php:15
2013-07-18 23:29:20 --- DEBUG: #0 L:\domains\localhost\www\application\classes\Controller\Admin\Mail.php(15): Kohana_Core::error_handler(2, 'Attempt to assi...', 'L:\domains\loca...', 15, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_send()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\localhost\www\application\classes\Controller\Admin\Mail.php:15
2013-07-18 23:29:32 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Admin\Mail.php [ 15 ] in L:\domains\localhost\www\application\classes\Controller\Admin\Mail.php:15
2013-07-18 23:29:32 --- DEBUG: #0 L:\domains\localhost\www\application\classes\Controller\Admin\Mail.php(15): Kohana_Core::error_handler(2, 'Attempt to assi...', 'L:\domains\loca...', 15, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_send()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\localhost\www\application\classes\Controller\Admin\Mail.php:15
2013-07-18 23:29:44 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Admin\Mail.php [ 15 ] in L:\domains\localhost\www\application\classes\Controller\Admin\Mail.php:15
2013-07-18 23:29:44 --- DEBUG: #0 L:\domains\localhost\www\application\classes\Controller\Admin\Mail.php(15): Kohana_Core::error_handler(2, 'Attempt to assi...', 'L:\domains\loca...', 15, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_send()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\localhost\www\application\classes\Controller\Admin\Mail.php:15
2013-07-18 23:29:46 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Admin\Mail.php [ 15 ] in L:\domains\localhost\www\application\classes\Controller\Admin\Mail.php:15
2013-07-18 23:29:46 --- DEBUG: #0 L:\domains\localhost\www\application\classes\Controller\Admin\Mail.php(15): Kohana_Core::error_handler(2, 'Attempt to assi...', 'L:\domains\loca...', 15, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_send()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\localhost\www\application\classes\Controller\Admin\Mail.php:15
2013-07-18 23:31:11 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Admin\Mail.php [ 15 ] in L:\domains\localhost\www\application\classes\Controller\Admin\Mail.php:15
2013-07-18 23:31:11 --- DEBUG: #0 L:\domains\localhost\www\application\classes\Controller\Admin\Mail.php(15): Kohana_Core::error_handler(2, 'Attempt to assi...', 'L:\domains\loca...', 15, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_send()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\localhost\www\application\classes\Controller\Admin\Mail.php:15
2013-07-18 23:31:13 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Admin\Mail.php [ 15 ] in L:\domains\localhost\www\application\classes\Controller\Admin\Mail.php:15
2013-07-18 23:31:13 --- DEBUG: #0 L:\domains\localhost\www\application\classes\Controller\Admin\Mail.php(15): Kohana_Core::error_handler(2, 'Attempt to assi...', 'L:\domains\loca...', 15, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_send()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\localhost\www\application\classes\Controller\Admin\Mail.php:15