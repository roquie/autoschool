<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-15 00:06:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '::' (T_PAAMAYIM_NEKUDOTAYIM) ~ MODPATH\lk\classes\Controller\Lk\Lk.php [ 198 ] in file:line
2013-10-15 00:06:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 00:06:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ']' ~ MODPATH\lk\classes\Controller\Lk\Lk.php [ 199 ] in file:line
2013-10-15 00:06:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 00:07:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH\lk\classes\Controller\Lk\Lk.php [ 200 ] in file:line
2013-10-15 00:07:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 00:08:52 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Lk_Statement as array ~ MODPATH\lk\classes\Controller\Lk\Lk.php [ 175 ] in file:line
2013-10-15 00:08:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 00:09:23 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Lk_Statement as array ~ MODPATH\lk\classes\Controller\Lk\Lk.php [ 176 ] in file:line
2013-10-15 00:09:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 00:10:50 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Lk_Statement as array ~ MODPATH\lk\classes\Controller\Lk\Lk.php [ 197 ] in file:line
2013-10-15 00:10:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 00:48:49 --- CRITICAL: Database_Exception [ 1146 ]: Table 'mpt_auto.messages' doesn't exist [ SHOW FULL COLUMNS FROM `Messages` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php:358
2013-10-15 00:48:49 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('Messages')
#2 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 L:\domains\autoschool.ru\www\application\classes\Model.php(20): Kohana_ORM->__construct()
#6 L:\domains\autoschool.ru\www\modules\chat\classes\Controller\Chat.php(23): Model::factory('Message')
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Chat->action_help()
#8 [internal function]: Kohana_Controller->execute()
#9 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Chat))
#10 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php:358
2013-10-15 00:58:46 --- CRITICAL: Database_Exception [ 1146 ]: Table 'mpt_auto.messages' doesn't exist [ SHOW FULL COLUMNS FROM `Messages` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php:358
2013-10-15 00:58:46 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('Messages')
#2 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 L:\domains\autoschool.ru\www\application\classes\Model.php(20): Kohana_ORM->__construct()
#6 L:\domains\autoschool.ru\www\modules\chat\classes\Controller\Chat.php(23): Model::factory('Message')
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Chat->action_help()
#8 [internal function]: Kohana_Controller->execute()
#9 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Chat))
#10 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php:358
2013-10-15 01:03:57 --- CRITICAL: Database_Exception [ 1146 ]: Table 'mpt_auto.messages' doesn't exist [ SHOW FULL COLUMNS FROM `Messages` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php:358
2013-10-15 01:03:57 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('Messages')
#2 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 L:\domains\autoschool.ru\www\application\classes\Model.php(20): Kohana_ORM->__construct()
#6 L:\domains\autoschool.ru\www\modules\chat\classes\Controller\Chat.php(23): Model::factory('Message')
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Chat->action_help()
#8 [internal function]: Kohana_Controller->execute()
#9 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Chat))
#10 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php:358
2013-10-15 01:04:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Admin_GoogleAccount::getLastRecord() ~ APPPATH\classes\Controller\Admin.php [ 65 ] in file:line
2013-10-15 01:04:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 01:05:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: googleAccount ~ APPPATH\views\admin\settings.php [ 96 ] in L:\domains\autoschool.ru\www\application\views\admin\settings.php:96
2013-10-15 01:05:31 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\views\admin\settings.php(96): Kohana_Core::error_handler(8, 'Undefined varia...', 'L:\domains\auto...', 96, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(61): include('L:\domains\auto...')
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('L:\domains\auto...', Array)
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 L:\domains\autoschool.ru\www\application\views\admin\layout.php(81): Kohana_View->__toString()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(61): include('L:\domains\auto...')
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('L:\domains\auto...', Array)
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in L:\domains\autoschool.ru\www\application\views\admin\settings.php:96
2013-10-15 01:21:59 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Admin_MsgTemplate::getAll() ~ APPPATH\classes\Controller\Admin.php [ 42 ] in file:line
2013-10-15 01:21:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 01:22:29 --- CRITICAL: View_Exception [ 0 ]: The requested view admin/gr_obr could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in L:\domains\autoschool.ru\www\system\classes\Kohana\View.php:137
2013-10-15 01:22:29 --- DEBUG: #0 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('admin/gr_obr')
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin/gr_obr', NULL)
#2 L:\domains\autoschool.ru\www\application\classes\Controller\Admin.php(31): Kohana_View::factory('admin/gr_obr')
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_gr_obr()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in L:\domains\autoschool.ru\www\system\classes\Kohana\View.php:137
2013-10-15 01:25:50 --- CRITICAL: Database_Exception [ 1146 ]: Table 'mpt_auto.messages' doesn't exist [ SHOW FULL COLUMNS FROM `Messages` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php:358
2013-10-15 01:25:50 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('Messages')
#2 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 L:\domains\autoschool.ru\www\application\classes\Model.php(20): Kohana_ORM->__construct()
#6 L:\domains\autoschool.ru\www\modules\chat\classes\Controller\Chat.php(23): Model::factory('Message')
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Chat->action_help()
#8 [internal function]: Kohana_Controller->execute()
#9 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Chat))
#10 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php:358
2013-10-15 03:44:13 --- CRITICAL: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'kinopoisk' at 'MODPATH\kinopoisk' ~ SYSPATH\classes\Kohana\Core.php [ 579 ] in L:\domains\autoschool.ru\www\application\bootstrap.php:142
2013-10-15 03:44:13 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\bootstrap.php(142): Kohana_Core::modules(Array)
#1 L:\domains\autoschool.ru\www\index.php(102): require('L:\domains\auto...')
#2 {main} in L:\domains\autoschool.ru\www\application\bootstrap.php:142
2013-10-15 03:48:32 --- CRITICAL: ErrorException [ 2 ]: The magic method __callStatic() must have public visibility and be static ~ APPPATH\classes\Controller\Ajax\Admin.php [ 24 ] in L:\domains\autoschool.ru\www\system\classes\Kohana\Core.php:511
2013-10-15 03:48:32 --- DEBUG: #0 L:\domains\autoschool.ru\www\system\classes\Kohana\Core.php(511): Kohana_Core::error_handler(2, 'The magic metho...', 'L:\domains\auto...', 24, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Core.php(511): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('Controller_Ajax...')
#3 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Settings.php(12): spl_autoload_call('Controller_Ajax...')
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Core.php(511): require('L:\domains\auto...')
#5 [internal function]: Kohana_Core::auto_load('Controller_Admi...')
#6 [internal function]: spl_autoload_call('Controller_Admi...')
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(74): class_exists('Controller_Admi...')
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in L:\domains\autoschool.ru\www\system\classes\Kohana\Core.php:511
2013-10-15 04:14:07 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Ajax_Admin::lol() ~ APPPATH\classes\Controller\Admin.php [ 49 ] in file:line
2013-10-15 04:14:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 04:18:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Admin_Settings::action_autocomplete() ~ SYSPATH\classes\Kohana\Controller.php [ 78 ] in file:line
2013-10-15 04:18:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 04:18:58 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Admin_Settings::action_newAdmin() ~ SYSPATH\classes\Kohana\Controller.php [ 78 ] in file:line
2013-10-15 04:18:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 04:19:55 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Admin_Settings::action_newAdmin() ~ SYSPATH\classes\Kohana\Controller.php [ 78 ] in file:line
2013-10-15 04:19:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 04:22:48 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ APPPATH\classes\Controller\Ajax\Admin.php [ 27 ] in L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php:27
2013-10-15 04:22:48 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'L:\domains\auto...', 27, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Ajax_Admin->__call('action_newAdmin', Array)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Settings->action_newAdmin()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Settings))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php:27
2013-10-15 04:23:02 --- CRITICAL: ErrorException [ 8 ]: Undefined index: post ~ APPPATH\classes\Controller\Ajax\Admin.php [ 27 ] in L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php:27
2013-10-15 04:23:02 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'L:\domains\auto...', 27, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Ajax_Admin->__call('action_newAdmin', Array)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Settings->action_newAdmin()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Settings))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php:27
2013-10-15 23:06:46 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Ajax_Admin::action_update(), called in L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\Ajax\Admin.php [ 33 ] in L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php:33
2013-10-15 23:06:46 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php(33): Kohana_Core::error_handler(2, 'Missing argumen...', 'L:\domains\auto...', 33, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Ajax_Admin->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Admin))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php:33
2013-10-15 23:06:51 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Ajax_Admin::action_update(), called in L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\Ajax\Admin.php [ 33 ] in L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php:33
2013-10-15 23:06:51 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php(33): Kohana_Core::error_handler(2, 'Missing argumen...', 'L:\domains\auto...', 33, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Ajax_Admin->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Admin))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php:33
2013-10-15 23:07:47 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Ajax_Admin::action_delete(), called in L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\Ajax\Admin.php [ 40 ] in L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php:40
2013-10-15 23:07:47 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php(40): Kohana_Core::error_handler(2, 'Missing argumen...', 'L:\domains\auto...', 40, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Ajax_Admin->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Admin))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php:40
2013-10-15 23:21:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: table_name ~ APPPATH\classes\Controller\Ajax\Admin.php [ 41 ] in L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php:41
2013-10-15 23:21:35 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', 'L:\domains\auto...', 41, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Ajax_Admin->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Admin))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php:41
2013-10-15 23:25:04 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_educations' not found ~ APPPATH\classes\Model.php [ 20 ] in file:line
2013-10-15 23:25:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 23:35:33 --- CRITICAL: Kohana_Exception [ 0 ]: Database results are read-only ~ MODPATH\database\classes\Kohana\Database\Result.php [ 258 ] in L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php:64
2013-10-15 23:35:33 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php(64): Kohana_Database_Result->offsetSet(NULL, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Ajax_Admin->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Admin))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php:64