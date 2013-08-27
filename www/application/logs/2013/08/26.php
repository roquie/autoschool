<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-26 19:00:38 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function json_dencode() ~ APPPATH\classes\Controller\Main.php [ 13 ] in file:line
2013-08-26 19:00:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-08-26 20:13:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: footer ~ APPPATH\views\admin\layout.php [ 40 ] in L:\domains\localhost\www\application\views\admin\layout.php:40
2013-08-26 20:13:53 --- DEBUG: #0 L:\domains\localhost\www\application\views\admin\layout.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'L:\domains\loca...', 40, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\View.php(61): include('L:\domains\loca...')
#2 L:\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('L:\domains\loca...', Array)
#3 L:\domains\localhost\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 L:\domains\localhost\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#7 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#10 {main} in L:\domains\localhost\www\application\views\admin\layout.php:40
2013-08-26 20:49:14 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in L:\domains\localhost\www\application\classes\Controller.php on line 8 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in L:\domains\localhost\www\system\classes\Kohana\Controller.php:43
2013-08-26 20:49:14 --- DEBUG: #0 L:\domains\localhost\www\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'L:\domains\loca...', 43, Array)
#1 L:\domains\localhost\www\application\classes\Controller.php(8): Kohana_Controller->__construct()
#2 [internal function]: Controller->__construct(Object(Request), Object(Response))
#3 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\localhost\www\system\classes\Kohana\Controller.php:43
2013-08-26 20:50:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$request' (T_VARIABLE) ~ APPPATH\classes\Controller.php [ 8 ] in file:line
2013-08-26 20:50:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-08-26 20:50:18 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant Request - assumed 'Request' ~ APPPATH\classes\Controller.php [ 8 ] in L:\domains\localhost\www\application\classes\Controller.php:8
2013-08-26 20:50:18 --- DEBUG: #0 L:\domains\localhost\www\application\classes\Controller.php(8): Kohana_Core::error_handler(8, 'Use of undefine...', 'L:\domains\loca...', 8, Array)
#1 [internal function]: Controller->__construct(Object(Request), Object(Response))
#2 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#3 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#6 {main} in L:\domains\localhost\www\application\classes\Controller.php:8
2013-08-26 20:52:18 --- CRITICAL: ErrorException [ 1 ]: Cannot instantiate abstract class Controller ~ APPPATH\classes\Controller.php [ 11 ] in file:line
2013-08-26 20:52:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-08-26 20:52:41 --- CRITICAL: ErrorException [ 1 ]: Cannot instantiate abstract class Kohana_Controller ~ APPPATH\classes\Controller.php [ 11 ] in file:line
2013-08-26 20:52:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-08-26 20:53:23 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Controller::__construct() must be an instance of Request, none given, called in L:\domains\localhost\www\application\classes\Controller.php on line 11 and defined ~ APPPATH\classes\Controller.php [ 8 ] in L:\domains\localhost\www\application\classes\Controller.php:8
2013-08-26 20:53:23 --- DEBUG: #0 L:\domains\localhost\www\application\classes\Controller.php(8): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'L:\domains\loca...', 8, Array)
#1 L:\domains\localhost\www\application\classes\Controller.php(11): Controller->__construct()
#2 [internal function]: Controller->__construct(Object(Request), Object(Response))
#3 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\localhost\www\application\classes\Controller.php:8
2013-08-26 20:53:41 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Controller.php [ 10 ] in file:line
2013-08-26 20:53:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-08-26 20:54:04 --- CRITICAL: ErrorException [ 1 ]: Cannot instantiate abstract class Kohana_Controller ~ APPPATH\classes\Controller.php [ 11 ] in file:line
2013-08-26 20:54:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-08-26 20:54:11 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Controller.php [ 10 ] in file:line
2013-08-26 20:54:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-08-26 21:25:32 --- CRITICAL: ErrorException [ 2 ]: preg_replace(): Delimiter must not be alphanumeric or backslash ~ APPPATH\vendor\PHPWord\PHPWord\Template.php [ 112 ] in file:line
2013-08-26 21:25:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', 'L:\domains\loca...', 112, Array)
#1 L:\domains\localhost\www\application\vendor\PHPWord\PHPWord\Template.php(112): preg_replace('xxx_LFam_xxx', 'asd', '<?xml version="...', 1)
#2 L:\domains\localhost\www\application\classes\Controller\WordTemplate.php(55): PHPWord_Template->setValue('LFam', 'asd')
#3 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#6 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-08-26 21:29:45 --- CRITICAL: ErrorException [ 8 ]: Undefined index: familiya ~ APPPATH\classes\Controller\WordTemplate.php [ 55 ] in L:\domains\localhost\www\application\classes\Controller\WordTemplate.php:55
2013-08-26 21:29:45 --- DEBUG: #0 L:\domains\localhost\www\application\classes\Controller\WordTemplate.php(55): Kohana_Core::error_handler(8, 'Undefined index...', 'L:\domains\loca...', 55, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\localhost\www\application\classes\Controller\WordTemplate.php:55
2013-08-26 21:29:52 --- CRITICAL: ErrorException [ 2 ]: rename(L:\domains\localhost\www\application\templates/zayavlenie\1377538192.docx,L:\domains\localhost\www\application\output_blanks/zayavleniya/zayavlenie_asd_asd_sd_26-08-2013_21:29:52.docx):  ~ APPPATH\vendor\PHPWord\PHPWord\Template.php [ 132 ] in file:line
2013-08-26 21:29:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'rename(L:\domai...', 'L:\domains\loca...', 132, Array)
#1 L:\domains\localhost\www\application\vendor\PHPWord\PHPWord\Template.php(132): rename('L:\domains\loca...', 'L:\domains\loca...')
#2 L:\domains\localhost\www\application\classes\Controller\WordTemplate.php(60): PHPWord_Template->save('L:\domains\loca...')
#3 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#6 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-08-26 21:34:26 --- CRITICAL: View_Exception [ 0 ]: The requested view main/blank/result could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in L:\domains\localhost\www\system\classes\Kohana\View.php:137
2013-08-26 21:34:26 --- DEBUG: #0 L:\domains\localhost\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('main/blank/resu...')
#1 L:\domains\localhost\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('main/blank/resu...', Array)
#2 L:\domains\localhost\www\application\classes\Controller\WordTemplate.php(73): Kohana_View::factory('main/blank/resu...', Array)
#3 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#6 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in L:\domains\localhost\www\system\classes\Kohana\View.php:137
2013-08-26 21:59:38 --- CRITICAL: ErrorException [ 2 ]: preg_replace(): Delimiter must not be alphanumeric or backslash ~ APPPATH\vendor\PHPWord\PHPWord\Template.php [ 112 ] in file:line
2013-08-26 21:59:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', 'L:\domains\loca...', 112, Array)
#1 L:\domains\localhost\www\application\vendor\PHPWord\PHPWord\Template.php(112): preg_replace('LFam', 'qweqwe', '<?xml version="...', 1)
#2 L:\domains\localhost\www\application\classes\Controller\WordTemplate.php(55): PHPWord_Template->setValue('LFam', 'qweqwe')
#3 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#6 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in file:line