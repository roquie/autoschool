<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-14 00:54:26 --- CRITICAL: Database_Exception [ 1146 ]: Table 'mpt_auto.config' doesn't exist [ SELECT * FROM `config` WHERE `name` = 'admin_avatar' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\OpenServer\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2013-11-14 00:54:26 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\application\classes\Model\Settings.php(60): Kohana_Database_Query->execute()
#2 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php(312): Model_Settings->get('admin_avatar')
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(85): Controller_Lk_Ajax->action_help()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2013-11-14 01:07:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\Controller\Lk\Ajax.php [ 354 ] in file:line
2013-11-14 01:07:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-14 02:42:19 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\lk\pages\html\loadmsg.php [ 2 ] in D:\OpenServer\domains\autoschool.ru\www\application\views\lk\pages\html\loadmsg.php:2
2013-11-14 02:42:19 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\views\lk\pages\html\loadmsg.php(2): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\OpenServer\d...', 2, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php(379): Kohana_View->render()
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(85): Controller_Lk_Ajax->action_load_message()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\autoschool.ru\www\application\views\lk\pages\html\loadmsg.php:2
2013-11-14 02:46:05 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 64 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2013-11-14 02:46:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', 'D:\OpenServer\d...', 423, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Route.php(423): preg_match('#^lk/ajax(?:/(?...', 'lk/ajax/load_me...', NULL)
#2 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#5 {main} in file:line