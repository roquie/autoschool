<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-04 15:11:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\classes\Controller\Admin\Mail.php [ 59 ] in file:line
2013-09-04 15:11:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-04 15:11:55 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method DirectoryIterator::FileName() ~ APPPATH\classes\Controller\Admin\Mail.php [ 54 ] in file:line
2013-09-04 15:11:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-04 15:12:05 --- CRITICAL: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php:137
2013-09-04 15:12:05 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('')
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('', NULL)
#2 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(57): Kohana_View::factory('')
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php:137
2013-09-04 15:12:39 --- CRITICAL: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php:137
2013-09-04 15:12:39 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('')
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('', NULL)
#2 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(57): Kohana_View::factory('')
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php:137
2013-09-04 15:16:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''\'.$item?>"> ~ APPPATH\views\admin\mail\files.php [ 9 ] in file:line
2013-09-04 15:16:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-04 15:27:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: files ~ APPPATH\views\admin\mail\getFiles.php [ 3 ] in D:\OpenServer\domains\autoschool.ru\www\application\views\admin\mail\getFiles.php:3
2013-09-04 15:27:08 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\views\admin\mail\getFiles.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 3, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\OpenServer\domains\autoschool.ru\www\application\views\admin\mail\files.php(13): Kohana_View->__toString()
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(60): Kohana_View->__toString()
#9 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#12 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in D:\OpenServer\domains\autoschool.ru\www\application\views\admin\mail\getFiles.php:3
2013-09-04 15:30:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: path ~ APPPATH\views\admin\mail\files.php [ 19 ] in D:\OpenServer\domains\autoschool.ru\www\application\views\admin\mail\files.php:19
2013-09-04 15:30:30 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\views\admin\mail\files.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 19, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(42): Kohana_View->__toString()
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_lol()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#8 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\autoschool.ru\www\application\views\admin\mail\files.php:19
2013-09-04 15:30:49 --- CRITICAL: View_Exception [ 0 ]: The requested view admin/mail/ could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php:137
2013-09-04 15:30:49 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('admin/mail/')
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin/mail/', Array)
#2 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(64): Kohana_View::factory('admin/mail/', Array)
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php:137
2013-09-04 15:31:50 --- CRITICAL: View_Exception [ 0 ]: The requested view admin/mail/ could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php:137
2013-09-04 15:31:50 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('admin/mail/')
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin/mail/', Array)
#2 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(64): Kohana_View::factory('admin/mail/', Array)
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php:137
2013-09-04 15:32:21 --- CRITICAL: View_Exception [ 0 ]: The requested view admin/mail/ could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php:137
2013-09-04 15:32:21 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('admin/mail/')
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin/mail/', Array)
#2 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(64): Kohana_View::factory('admin/mail/', Array)
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php:137
2013-09-04 15:33:26 --- CRITICAL: UnexpectedValueException [ 0 ]: DirectoryIterator::__construct(D:\OpenServer\domains\autoschool.ru\www\application\D:\OpenServer\domains\autoschool.ru\www\application\output_blanks/zayavleniya,D:\OpenServer\domains\autoschool.ru\www\application\D:\OpenServer\domains\autoschool.ru\www\application\output_blanks/zayavleniya):  ~ APPPATH\classes\Controller\Admin\Mail.php [ 55 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:55
2013-09-04 15:33:26 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(55): DirectoryIterator->__construct('D:\OpenServer\d...')
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:55
2013-09-04 15:33:27 --- CRITICAL: UnexpectedValueException [ 0 ]: DirectoryIterator::__construct(D:\OpenServer\domains\autoschool.ru\www\application\D:\OpenServer\domains\autoschool.ru\www\application\output_blanks/contract,D:\OpenServer\domains\autoschool.ru\www\application\D:\OpenServer\domains\autoschool.ru\www\application\output_blanks/contract):  ~ APPPATH\classes\Controller\Admin\Mail.php [ 55 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:55
2013-09-04 15:33:27 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(55): DirectoryIterator->__construct('D:\OpenServer\d...')
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:55
2013-09-04 15:33:27 --- CRITICAL: UnexpectedValueException [ 0 ]: DirectoryIterator::__construct(D:\OpenServer\domains\autoschool.ru\www\application\D:\OpenServer\domains\autoschool.ru\www\application\output_blanks/contract,D:\OpenServer\domains\autoschool.ru\www\application\D:\OpenServer\domains\autoschool.ru\www\application\output_blanks/contract):  ~ APPPATH\classes\Controller\Admin\Mail.php [ 55 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:55
2013-09-04 15:33:27 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(55): DirectoryIterator->__construct('D:\OpenServer\d...')
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:55
2013-09-04 15:33:27 --- CRITICAL: UnexpectedValueException [ 0 ]: DirectoryIterator::__construct(D:\OpenServer\domains\autoschool.ru\www\application\D:\OpenServer\domains\autoschool.ru\www\application\output_blanks/contract,D:\OpenServer\domains\autoschool.ru\www\application\D:\OpenServer\domains\autoschool.ru\www\application\output_blanks/contract):  ~ APPPATH\classes\Controller\Admin\Mail.php [ 55 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:55
2013-09-04 15:33:27 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(55): DirectoryIterator->__construct('D:\OpenServer\d...')
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:55
2013-09-04 15:33:28 --- CRITICAL: UnexpectedValueException [ 0 ]: DirectoryIterator::__construct(D:\OpenServer\domains\autoschool.ru\www\application\D:\OpenServer\domains\autoschool.ru\www\application\output_blanks/zayavleniya,D:\OpenServer\domains\autoschool.ru\www\application\D:\OpenServer\domains\autoschool.ru\www\application\output_blanks/zayavleniya):  ~ APPPATH\classes\Controller\Admin\Mail.php [ 55 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:55
2013-09-04 15:33:28 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(55): DirectoryIterator->__construct('D:\OpenServer\d...')
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:55
2013-09-04 15:33:28 --- CRITICAL: UnexpectedValueException [ 0 ]: DirectoryIterator::__construct(D:\OpenServer\domains\autoschool.ru\www\application\D:\OpenServer\domains\autoschool.ru\www\application\output_blanks/zayavleniya,D:\OpenServer\domains\autoschool.ru\www\application\D:\OpenServer\domains\autoschool.ru\www\application\output_blanks/zayavleniya):  ~ APPPATH\classes\Controller\Admin\Mail.php [ 55 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:55
2013-09-04 15:33:28 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(55): DirectoryIterator->__construct('D:\OpenServer\d...')
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:55
2013-09-04 15:33:28 --- CRITICAL: UnexpectedValueException [ 0 ]: DirectoryIterator::__construct(D:\OpenServer\domains\autoschool.ru\www\application\D:\OpenServer\domains\autoschool.ru\www\application\output_blanks/zayavleniya,D:\OpenServer\domains\autoschool.ru\www\application\D:\OpenServer\domains\autoschool.ru\www\application\output_blanks/zayavleniya):  ~ APPPATH\classes\Controller\Admin\Mail.php [ 55 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:55
2013-09-04 15:33:28 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(55): DirectoryIterator->__construct('D:\OpenServer\d...')
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:55
2013-09-04 15:35:09 --- CRITICAL: UnexpectedValueException [ 0 ]: DirectoryIterator::__construct(D:\OpenServer\domains\autoschool.ru\www\application\output_blanksoutput_blanks,D:\OpenServer\domains\autoschool.ru\www\application\output_blanksoutput_blanks):  ~ APPPATH\classes\Controller\Admin\Mail.php [ 56 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:56
2013-09-04 15:35:09 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(56): DirectoryIterator->__construct('D:\OpenServer\d...')
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:56
2013-09-04 15:35:10 --- CRITICAL: UnexpectedValueException [ 0 ]: DirectoryIterator::__construct(D:\OpenServer\domains\autoschool.ru\www\application\output_blanksoutput_blanks,D:\OpenServer\domains\autoschool.ru\www\application\output_blanksoutput_blanks):  ~ APPPATH\classes\Controller\Admin\Mail.php [ 56 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:56
2013-09-04 15:35:10 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(56): DirectoryIterator->__construct('D:\OpenServer\d...')
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:56
2013-09-04 15:35:16 --- CRITICAL: UnexpectedValueException [ 0 ]: DirectoryIterator::__construct(D:\OpenServer\domains\autoschool.ru\www\application\output_blanksoutput_blanks/contract,D:\OpenServer\domains\autoschool.ru\www\application\output_blanksoutput_blanks/contract):  ~ APPPATH\classes\Controller\Admin\Mail.php [ 56 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:56
2013-09-04 15:35:16 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(56): DirectoryIterator->__construct('D:\OpenServer\d...')
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:56
2013-09-04 15:35:19 --- CRITICAL: UnexpectedValueException [ 0 ]: DirectoryIterator::__construct(D:\OpenServer\domains\autoschool.ru\www\application\output_blanksoutput_blanks/zayavleniya,D:\OpenServer\domains\autoschool.ru\www\application\output_blanksoutput_blanks/zayavleniya):  ~ APPPATH\classes\Controller\Admin\Mail.php [ 56 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:56
2013-09-04 15:35:19 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(56): DirectoryIterator->__construct('D:\OpenServer\d...')
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:56
2013-09-04 15:35:22 --- CRITICAL: UnexpectedValueException [ 0 ]: DirectoryIterator::__construct(D:\OpenServer\domains\autoschool.ru\www\application\output_blanksoutput_blanks/zayavleniya,D:\OpenServer\domains\autoschool.ru\www\application\output_blanksoutput_blanks/zayavleniya):  ~ APPPATH\classes\Controller\Admin\Mail.php [ 56 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:56
2013-09-04 15:35:22 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(56): DirectoryIterator->__construct('D:\OpenServer\d...')
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:56
2013-09-04 15:35:22 --- CRITICAL: UnexpectedValueException [ 0 ]: DirectoryIterator::__construct(D:\OpenServer\domains\autoschool.ru\www\application\output_blanksoutput_blanks/zayavleniya,D:\OpenServer\domains\autoschool.ru\www\application\output_blanksoutput_blanks/zayavleniya):  ~ APPPATH\classes\Controller\Admin\Mail.php [ 56 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:56
2013-09-04 15:35:22 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(56): DirectoryIterator->__construct('D:\OpenServer\d...')
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:56
2013-09-04 15:35:22 --- CRITICAL: UnexpectedValueException [ 0 ]: DirectoryIterator::__construct(D:\OpenServer\domains\autoschool.ru\www\application\output_blanksoutput_blanks/zayavleniya,D:\OpenServer\domains\autoschool.ru\www\application\output_blanksoutput_blanks/zayavleniya):  ~ APPPATH\classes\Controller\Admin\Mail.php [ 56 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:56
2013-09-04 15:35:22 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(56): DirectoryIterator->__construct('D:\OpenServer\d...')
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:56
2013-09-04 15:35:22 --- CRITICAL: UnexpectedValueException [ 0 ]: DirectoryIterator::__construct(D:\OpenServer\domains\autoschool.ru\www\application\output_blanksoutput_blanks/zayavleniya,D:\OpenServer\domains\autoschool.ru\www\application\output_blanksoutput_blanks/zayavleniya):  ~ APPPATH\classes\Controller\Admin\Mail.php [ 56 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:56
2013-09-04 15:35:22 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(56): DirectoryIterator->__construct('D:\OpenServer\d...')
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:56
2013-09-04 15:37:57 --- CRITICAL: UnexpectedValueException [ 0 ]: DirectoryIterator::__construct(D:\OpenServer\domains\autoschool.ru\www\application\output_blanks/zayavleniya/zayavlenie_01_09_2013_22_32_05.docx,D:\OpenServer\domains\autoschool.ru\www\application\output_blanks/zayavleniya/zayavlenie_01_09_2013_22_32_05.docx):  ~ APPPATH\classes\Controller\Admin\Mail.php [ 54 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:54
2013-09-04 15:37:57 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(54): DirectoryIterator->__construct('D:\OpenServer\d...')
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:54
2013-09-04 15:40:22 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\admin\mail\getFiles.php [ 5 ] in D:\OpenServer\domains\autoschool.ru\www\application\views\admin\mail\getFiles.php:5
2013-09-04 15:40:22 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\views\admin\mail\getFiles.php(5): Kohana_Core::error_handler(8, 'Array to string...', 'D:\OpenServer\d...', 5, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(66): Kohana_View->render()
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\autoschool.ru\www\application\views\admin\mail\getFiles.php:5
2013-09-04 15:44:12 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\admin\mail\getFiles.php [ 5 ] in D:\OpenServer\domains\autoschool.ru\www\application\views\admin\mail\getFiles.php:5
2013-09-04 15:44:12 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\views\admin\mail\getFiles.php(5): Kohana_Core::error_handler(8, 'Array to string...', 'D:\OpenServer\d...', 5, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(69): Kohana_View->render()
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\autoschool.ru\www\application\views\admin\mail\getFiles.php:5
2013-09-04 15:44:37 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\admin\mail\getFiles.php [ 5 ] in D:\OpenServer\domains\autoschool.ru\www\application\views\admin\mail\getFiles.php:5
2013-09-04 15:44:37 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\views\admin\mail\getFiles.php(5): Kohana_Core::error_handler(8, 'Array to string...', 'D:\OpenServer\d...', 5, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(69): Kohana_View->render()
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\autoschool.ru\www\application\views\admin\mail\getFiles.php:5
2013-09-04 15:44:41 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\admin\mail\getFiles.php [ 5 ] in D:\OpenServer\domains\autoschool.ru\www\application\views\admin\mail\getFiles.php:5
2013-09-04 15:44:41 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\views\admin\mail\getFiles.php(5): Kohana_Core::error_handler(8, 'Array to string...', 'D:\OpenServer\d...', 5, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(69): Kohana_View->render()
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\autoschool.ru\www\application\views\admin\mail\getFiles.php:5
2013-09-04 15:44:55 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\admin\mail\getFiles.php [ 5 ] in D:\OpenServer\domains\autoschool.ru\www\application\views\admin\mail\getFiles.php:5
2013-09-04 15:44:55 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\views\admin\mail\getFiles.php(5): Kohana_Core::error_handler(8, 'Array to string...', 'D:\OpenServer\d...', 5, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(69): Kohana_View->render()
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\autoschool.ru\www\application\views\admin\mail\getFiles.php:5
2013-09-04 15:46:26 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\admin\mail\getFiles.php [ 5 ] in D:\OpenServer\domains\autoschool.ru\www\application\views\admin\mail\getFiles.php:5
2013-09-04 15:46:26 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\views\admin\mail\getFiles.php(5): Kohana_Core::error_handler(8, 'Array to string...', 'D:\OpenServer\d...', 5, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(69): Kohana_View->render()
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\autoschool.ru\www\application\views\admin\mail\getFiles.php:5
2013-09-04 16:54:49 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\Admin\Mail.php [ 74 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:74
2013-09-04 16:54:49 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(74): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\OpenServer\d...', 74, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_attache()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:74
2013-09-04 16:54:50 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\Admin\Mail.php [ 74 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:74
2013-09-04 16:54:50 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(74): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\OpenServer\d...', 74, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_attache()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:74
2013-09-04 16:54:50 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\Admin\Mail.php [ 74 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:74
2013-09-04 16:54:50 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(74): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\OpenServer\d...', 74, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_attache()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:74
2013-09-04 16:54:50 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\Admin\Mail.php [ 74 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:74
2013-09-04 16:54:50 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(74): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\OpenServer\d...', 74, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_attache()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:74
2013-09-04 16:55:10 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\Admin\Mail.php [ 74 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:74
2013-09-04 16:55:10 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(74): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\OpenServer\d...', 74, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_attache()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:74
2013-09-04 17:47:44 --- CRITICAL: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [] does not comply with RFC 2822, 3.6.2. ~ MODPATH\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php [ 352 ] in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php:264
2013-09-04 17:47:44 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php(264): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('')
#1 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php(108): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php(65): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleMimeEntity.php(604): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleMessage.php(215): Swift_Mime_SimpleMimeEntity->_setHeaderFieldModel('From', Array)
#5 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleMessage.php(193): Swift_Mime_SimpleMessage->setFrom(Array)
#6 [internal function]: Swift_Mime_SimpleMessage->addFrom(NULL, ' ')
#7 D:\OpenServer\domains\autoschool.ru\www\modules\email\classes\Kohana\Email.php(293): call_user_func(Array, NULL, ' ')
#8 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(32): Kohana_Email->from(NULL, ' ')
#9 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_send_mail()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#12 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php:264
2013-09-04 18:09:31 --- CRITICAL: RuntimeException [ 0 ]: SplFileInfo::getType():  ~ APPPATH\classes\Controller\Admin\Mail.php [ 56 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:56
2013-09-04 18:09:31 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(56): SplFileInfo->getType()
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:56
2013-09-04 18:09:32 --- CRITICAL: RuntimeException [ 0 ]: SplFileInfo::getType():  ~ APPPATH\classes\Controller\Admin\Mail.php [ 56 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:56
2013-09-04 18:09:32 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(56): SplFileInfo->getType()
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:56
2013-09-04 18:10:01 --- CRITICAL: RuntimeException [ 0 ]: SplFileInfo::getType():  ~ APPPATH\classes\Controller\Admin\Mail.php [ 56 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:56
2013-09-04 18:10:01 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(56): SplFileInfo->getType()
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:56
2013-09-04 18:10:01 --- CRITICAL: RuntimeException [ 0 ]: SplFileInfo::getType():  ~ APPPATH\classes\Controller\Admin\Mail.php [ 56 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:56
2013-09-04 18:10:01 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(56): SplFileInfo->getType()
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:56
2013-09-04 18:10:02 --- CRITICAL: RuntimeException [ 0 ]: SplFileInfo::getType():  ~ APPPATH\classes\Controller\Admin\Mail.php [ 56 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:56
2013-09-04 18:10:02 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(56): SplFileInfo->getType()
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:56
2013-09-04 18:10:02 --- CRITICAL: RuntimeException [ 0 ]: SplFileInfo::getType():  ~ APPPATH\classes\Controller\Admin\Mail.php [ 56 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:56
2013-09-04 18:10:02 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(56): SplFileInfo->getType()
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:56
2013-09-04 18:56:40 --- CRITICAL: Swift_TransportException [ 0 ]: Cannot send message without a recipient ~ MODPATH\email\vendor\swiftmailer\classes\Swift\Transport\MailTransport.php [ 131 ] in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mailer.php:86
2013-09-04 18:56:40 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mailer.php(86): Swift_Transport_MailTransport->send(Object(Swift_Message), Array)
#1 D:\OpenServer\domains\autoschool.ru\www\modules\email\classes\Kohana\Email.php(405): Swift_Mailer->send(Object(Swift_Message), Array)
#2 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(33): Kohana_Email->send()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_send_mail()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mailer.php:86
2013-09-04 18:59:44 --- CRITICAL: UnexpectedValueException [ 0 ]: DirectoryIterator::__construct(D:\OpenServer\domains\autoschool.ru\www\application\http://autoschool.ru/,D:\OpenServer\domains\autoschool.ru\www\application\http://autoschool.ru/):  ~ APPPATH\classes\Controller\Admin\Mail.php [ 59 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:59
2013-09-04 18:59:44 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(59): DirectoryIterator->__construct('D:\OpenServer\d...')
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:59
2013-09-04 18:59:46 --- CRITICAL: UnexpectedValueException [ 0 ]: DirectoryIterator::__construct(D:\OpenServer\domains\autoschool.ru\www\application\http://autoschool.ru/,D:\OpenServer\domains\autoschool.ru\www\application\http://autoschool.ru/):  ~ APPPATH\classes\Controller\Admin\Mail.php [ 59 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:59
2013-09-04 18:59:46 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(59): DirectoryIterator->__construct('D:\OpenServer\d...')
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:59
2013-09-04 18:59:46 --- CRITICAL: UnexpectedValueException [ 0 ]: DirectoryIterator::__construct(D:\OpenServer\domains\autoschool.ru\www\application\http://autoschool.ru/,D:\OpenServer\domains\autoschool.ru\www\application\http://autoschool.ru/):  ~ APPPATH\classes\Controller\Admin\Mail.php [ 59 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:59
2013-09-04 18:59:46 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(59): DirectoryIterator->__construct('D:\OpenServer\d...')
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:59
2013-09-04 18:59:47 --- CRITICAL: UnexpectedValueException [ 0 ]: DirectoryIterator::__construct(D:\OpenServer\domains\autoschool.ru\www\application\http://autoschool.ru/,D:\OpenServer\domains\autoschool.ru\www\application\http://autoschool.ru/):  ~ APPPATH\classes\Controller\Admin\Mail.php [ 59 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:59
2013-09-04 18:59:47 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(59): DirectoryIterator->__construct('D:\OpenServer\d...')
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:59
2013-09-04 18:59:47 --- CRITICAL: UnexpectedValueException [ 0 ]: DirectoryIterator::__construct(D:\OpenServer\domains\autoschool.ru\www\application\http://autoschool.ru/,D:\OpenServer\domains\autoschool.ru\www\application\http://autoschool.ru/):  ~ APPPATH\classes\Controller\Admin\Mail.php [ 59 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:59
2013-09-04 18:59:47 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(59): DirectoryIterator->__construct('D:\OpenServer\d...')
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:59
2013-09-04 18:59:47 --- CRITICAL: UnexpectedValueException [ 0 ]: DirectoryIterator::__construct(D:\OpenServer\domains\autoschool.ru\www\application\http://autoschool.ru/,D:\OpenServer\domains\autoschool.ru\www\application\http://autoschool.ru/):  ~ APPPATH\classes\Controller\Admin\Mail.php [ 59 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:59
2013-09-04 18:59:47 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(59): DirectoryIterator->__construct('D:\OpenServer\d...')
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_getFiles()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:59
2013-09-04 19:15:11 --- CRITICAL: Swift_IoException [ 0 ]: The path cannot be empty ~ MODPATH\email\vendor\swiftmailer\classes\Swift\ByteStream\FileByteStream.php [ 50 ] in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php:69
2013-09-04 19:15:11 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php(69): Swift_ByteStream_FileByteStream->__construct('')
#1 D:\OpenServer\domains\autoschool.ru\www\modules\email\classes\Kohana\Email.php(358): Swift_Attachment::fromPath('')
#2 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(35): Kohana_Email->attach_file('')
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_send_mail()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php:69
2013-09-04 19:15:59 --- CRITICAL: Swift_IoException [ 0 ]: The path cannot be empty ~ MODPATH\email\vendor\swiftmailer\classes\Swift\ByteStream\FileByteStream.php [ 50 ] in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php:69
2013-09-04 19:15:59 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php(69): Swift_ByteStream_FileByteStream->__construct('')
#1 D:\OpenServer\domains\autoschool.ru\www\modules\email\classes\Kohana\Email.php(358): Swift_Attachment::fromPath('')
#2 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(35): Kohana_Email->attach_file('')
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_send_mail()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php:69
2013-09-04 19:17:04 --- CRITICAL: Swift_IoException [ 0 ]: The path cannot be empty ~ MODPATH\email\vendor\swiftmailer\classes\Swift\ByteStream\FileByteStream.php [ 50 ] in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php:69
2013-09-04 19:17:04 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php(69): Swift_ByteStream_FileByteStream->__construct('')
#1 D:\OpenServer\domains\autoschool.ru\www\modules\email\classes\Kohana\Email.php(358): Swift_Attachment::fromPath('')
#2 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(35): Kohana_Email->attach_file('')
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_send_mail()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php:69
2013-09-04 19:17:19 --- CRITICAL: Swift_IoException [ 0 ]: The path cannot be empty ~ MODPATH\email\vendor\swiftmailer\classes\Swift\ByteStream\FileByteStream.php [ 50 ] in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php:69
2013-09-04 19:17:19 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php(69): Swift_ByteStream_FileByteStream->__construct('')
#1 D:\OpenServer\domains\autoschool.ru\www\modules\email\classes\Kohana\Email.php(358): Swift_Attachment::fromPath('')
#2 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(35): Kohana_Email->attach_file('')
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_send_mail()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php:69
2013-09-04 19:17:59 --- CRITICAL: Swift_IoException [ 0 ]: The path cannot be empty ~ MODPATH\email\vendor\swiftmailer\classes\Swift\ByteStream\FileByteStream.php [ 50 ] in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php:69
2013-09-04 19:17:59 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php(69): Swift_ByteStream_FileByteStream->__construct('')
#1 D:\OpenServer\domains\autoschool.ru\www\modules\email\classes\Kohana\Email.php(358): Swift_Attachment::fromPath('')
#2 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(35): Kohana_Email->attach_file('')
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_send_mail()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php:69
2013-09-04 19:18:27 --- CRITICAL: Swift_IoException [ 0 ]: The path cannot be empty ~ MODPATH\email\vendor\swiftmailer\classes\Swift\ByteStream\FileByteStream.php [ 50 ] in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php:69
2013-09-04 19:18:27 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php(69): Swift_ByteStream_FileByteStream->__construct('')
#1 D:\OpenServer\domains\autoschool.ru\www\modules\email\classes\Kohana\Email.php(358): Swift_Attachment::fromPath('')
#2 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(35): Kohana_Email->attach_file('')
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_send_mail()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php:69
2013-09-04 19:18:47 --- CRITICAL: Swift_IoException [ 0 ]: The path cannot be empty ~ MODPATH\email\vendor\swiftmailer\classes\Swift\ByteStream\FileByteStream.php [ 50 ] in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php:69
2013-09-04 19:18:47 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php(69): Swift_ByteStream_FileByteStream->__construct('')
#1 D:\OpenServer\domains\autoschool.ru\www\modules\email\classes\Kohana\Email.php(358): Swift_Attachment::fromPath('')
#2 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(35): Kohana_Email->attach_file('')
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_send_mail()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php:69
2013-09-04 19:28:23 --- CRITICAL: Swift_IoException [ 0 ]: The path cannot be empty ~ MODPATH\email\vendor\swiftmailer\classes\Swift\ByteStream\FileByteStream.php [ 50 ] in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php:69
2013-09-04 19:28:23 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php(69): Swift_ByteStream_FileByteStream->__construct('')
#1 D:\OpenServer\domains\autoschool.ru\www\modules\email\classes\Kohana\Email.php(358): Swift_Attachment::fromPath('')
#2 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(35): Kohana_Email->attach_file('')
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_send_mail()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php:69
2013-09-04 19:28:34 --- CRITICAL: Swift_IoException [ 0 ]: The path cannot be empty ~ MODPATH\email\vendor\swiftmailer\classes\Swift\ByteStream\FileByteStream.php [ 50 ] in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php:69
2013-09-04 19:28:34 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php(69): Swift_ByteStream_FileByteStream->__construct('')
#1 D:\OpenServer\domains\autoschool.ru\www\modules\email\classes\Kohana\Email.php(358): Swift_Attachment::fromPath('')
#2 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(35): Kohana_Email->attach_file('')
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_send_mail()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php:69
2013-09-04 19:28:44 --- CRITICAL: Swift_IoException [ 0 ]: The path cannot be empty ~ MODPATH\email\vendor\swiftmailer\classes\Swift\ByteStream\FileByteStream.php [ 50 ] in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php:69
2013-09-04 19:28:44 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php(69): Swift_ByteStream_FileByteStream->__construct('')
#1 D:\OpenServer\domains\autoschool.ru\www\modules\email\classes\Kohana\Email.php(358): Swift_Attachment::fromPath('')
#2 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(35): Kohana_Email->attach_file('')
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_send_mail()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php:69
2013-09-04 19:30:13 --- CRITICAL: Swift_IoException [ 0 ]: The path cannot be empty ~ MODPATH\email\vendor\swiftmailer\classes\Swift\ByteStream\FileByteStream.php [ 50 ] in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php:69
2013-09-04 19:30:13 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php(69): Swift_ByteStream_FileByteStream->__construct('')
#1 D:\OpenServer\domains\autoschool.ru\www\modules\email\classes\Kohana\Email.php(358): Swift_Attachment::fromPath('')
#2 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(35): Kohana_Email->attach_file('')
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_send_mail()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php:69
2013-09-04 19:30:28 --- CRITICAL: Swift_IoException [ 0 ]: The path cannot be empty ~ MODPATH\email\vendor\swiftmailer\classes\Swift\ByteStream\FileByteStream.php [ 50 ] in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php:69
2013-09-04 19:30:28 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php(69): Swift_ByteStream_FileByteStream->__construct('')
#1 D:\OpenServer\domains\autoschool.ru\www\modules\email\classes\Kohana\Email.php(358): Swift_Attachment::fromPath('')
#2 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(35): Kohana_Email->attach_file('')
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_send_mail()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php:69
2013-09-04 19:31:18 --- CRITICAL: Swift_IoException [ 0 ]: The path cannot be empty ~ MODPATH\email\vendor\swiftmailer\classes\Swift\ByteStream\FileByteStream.php [ 50 ] in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php:69
2013-09-04 19:31:18 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php(69): Swift_ByteStream_FileByteStream->__construct('')
#1 D:\OpenServer\domains\autoschool.ru\www\modules\email\classes\Kohana\Email.php(358): Swift_Attachment::fromPath('')
#2 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(35): Kohana_Email->attach_file('')
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_send_mail()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php:69
2013-09-04 19:31:33 --- CRITICAL: Swift_IoException [ 0 ]: The path cannot be empty ~ MODPATH\email\vendor\swiftmailer\classes\Swift\ByteStream\FileByteStream.php [ 50 ] in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php:69
2013-09-04 19:31:33 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php(69): Swift_ByteStream_FileByteStream->__construct('')
#1 D:\OpenServer\domains\autoschool.ru\www\modules\email\classes\Kohana\Email.php(358): Swift_Attachment::fromPath('')
#2 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(35): Kohana_Email->attach_file('')
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_send_mail()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php:69
2013-09-04 19:31:59 --- CRITICAL: Swift_IoException [ 0 ]: The path cannot be empty ~ MODPATH\email\vendor\swiftmailer\classes\Swift\ByteStream\FileByteStream.php [ 50 ] in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php:69
2013-09-04 19:31:59 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php(69): Swift_ByteStream_FileByteStream->__construct('')
#1 D:\OpenServer\domains\autoschool.ru\www\modules\email\classes\Kohana\Email.php(358): Swift_Attachment::fromPath('')
#2 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(35): Kohana_Email->attach_file('')
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_send_mail()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php:69
2013-09-04 19:32:16 --- CRITICAL: Swift_IoException [ 0 ]: The path cannot be empty ~ MODPATH\email\vendor\swiftmailer\classes\Swift\ByteStream\FileByteStream.php [ 50 ] in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php:69
2013-09-04 19:32:16 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php(69): Swift_ByteStream_FileByteStream->__construct('')
#1 D:\OpenServer\domains\autoschool.ru\www\modules\email\classes\Kohana\Email.php(358): Swift_Attachment::fromPath('')
#2 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(35): Kohana_Email->attach_file('')
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_send_mail()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Attachment.php:69
2013-09-04 20:58:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Admin\Mail.php [ 42 ] in file:line
2013-09-04 20:58:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-04 20:58:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Admin\Mail.php [ 42 ] in file:line
2013-09-04 20:58:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-04 20:58:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Admin\Mail.php [ 42 ] in file:line
2013-09-04 20:58:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-04 20:58:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Admin\Mail.php [ 42 ] in file:line
2013-09-04 20:58:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-04 20:58:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Admin\Mail.php [ 42 ] in file:line
2013-09-04 20:58:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-04 20:59:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Admin\Mail.php [ 39 ] in file:line
2013-09-04 20:59:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-04 20:59:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Admin\Mail.php [ 39 ] in file:line
2013-09-04 20:59:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-04 21:00:35 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\Admin\Mail.php [ 19 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:19
2013-09-04 21:00:35 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(19): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\OpenServer\d...', 19, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_send_mail()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:19
2013-09-04 21:00:37 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\Admin\Mail.php [ 19 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:19
2013-09-04 21:00:37 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(19): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\OpenServer\d...', 19, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_send_mail()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:19
2013-09-04 21:00:38 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\Admin\Mail.php [ 19 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:19
2013-09-04 21:00:38 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(19): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\OpenServer\d...', 19, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_send_mail()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:19
2013-09-04 21:00:38 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\Admin\Mail.php [ 19 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:19
2013-09-04 21:00:38 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(19): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\OpenServer\d...', 19, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_send_mail()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:19
2013-09-04 21:00:38 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\Admin\Mail.php [ 19 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:19
2013-09-04 21:00:38 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(19): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\OpenServer\d...', 19, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_send_mail()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php:19
2013-09-04 21:08:59 --- CRITICAL: ErrorException [ 2 ]: fopen(D:\OpenServer\domains\autoschool.ru\www\application\output_blanks/zayavleniya/zayavlenie_01_09_2013_13_01_22.docx,D:\OpenServer\domains\autoschool.ru\www\application\output_blanks/zayavleniya/zayavlenie_01_09_2013_13_39_07.docx): failed to open stream: Invalid argument ~ MODPATH\email\vendor\swiftmailer\classes\Swift\ByteStream\FileByteStream.php [ 138 ] in file:line
2013-09-04 21:08:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(D:\OpenSe...', 'D:\OpenServer\d...', 138, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\ByteStream\FileByteStream.php(138): fopen('D:\OpenServer\d...', 'rb')
#2 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\ByteStream\FileByteStream.php(86): Swift_ByteStream_FileByteStream->_getReadHandle()
#3 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleMimeEntity.php(705): Swift_ByteStream_FileByteStream->read(8192)
#4 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleMimeEntity.php(353): Swift_Mime_SimpleMimeEntity->_readStream(Object(Swift_ByteStream_FileByteStream))
#5 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleMimeEntity.php(489): Swift_Mime_SimpleMimeEntity->getBody()
#6 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleMimeEntity.php(471): Swift_Mime_SimpleMimeEntity->_bodyToString()
#7 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleMimeEntity.php(502): Swift_Mime_SimpleMimeEntity->toString()
#8 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleMimeEntity.php(471): Swift_Mime_SimpleMimeEntity->_bodyToString()
#9 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleMessage.php(580): Swift_Mime_SimpleMimeEntity->toString()
#10 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Transport\MailTransport.php(144): Swift_Mime_SimpleMessage->toString()
#11 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mailer.php(86): Swift_Transport_MailTransport->send(Object(Swift_Message), Array)
#12 D:\OpenServer\domains\autoschool.ru\www\modules\email\classes\Kohana\Email.php(405): Swift_Mailer->send(Object(Swift_Message), Array)
#13 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(42): Kohana_Email->send()
#14 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_send_mail()
#15 [internal function]: Kohana_Controller->execute()
#16 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#17 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#19 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#20 {main} in file:line
2013-09-04 21:09:28 --- CRITICAL: ErrorException [ 2 ]: fopen(D:\OpenServer\domains\autoschool.ru\www\application\output_blanks/zayavleniya/zayavlenie_01_09_2013_13_01_22.docx,D:\OpenServer\domains\autoschool.ru\www\application\output_blanks/zayavleniya/zayavlenie_01_09_2013_13_39_07.docx): failed to open stream: Invalid argument ~ MODPATH\email\vendor\swiftmailer\classes\Swift\ByteStream\FileByteStream.php [ 138 ] in file:line
2013-09-04 21:09:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(D:\OpenSe...', 'D:\OpenServer\d...', 138, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\ByteStream\FileByteStream.php(138): fopen('D:\OpenServer\d...', 'rb')
#2 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\ByteStream\FileByteStream.php(86): Swift_ByteStream_FileByteStream->_getReadHandle()
#3 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleMimeEntity.php(705): Swift_ByteStream_FileByteStream->read(8192)
#4 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleMimeEntity.php(353): Swift_Mime_SimpleMimeEntity->_readStream(Object(Swift_ByteStream_FileByteStream))
#5 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleMimeEntity.php(489): Swift_Mime_SimpleMimeEntity->getBody()
#6 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleMimeEntity.php(471): Swift_Mime_SimpleMimeEntity->_bodyToString()
#7 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleMimeEntity.php(502): Swift_Mime_SimpleMimeEntity->toString()
#8 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleMimeEntity.php(471): Swift_Mime_SimpleMimeEntity->_bodyToString()
#9 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleMessage.php(580): Swift_Mime_SimpleMimeEntity->toString()
#10 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Transport\MailTransport.php(144): Swift_Mime_SimpleMessage->toString()
#11 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mailer.php(86): Swift_Transport_MailTransport->send(Object(Swift_Message), Array)
#12 D:\OpenServer\domains\autoschool.ru\www\modules\email\classes\Kohana\Email.php(405): Swift_Mailer->send(Object(Swift_Message), Array)
#13 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Admin\Mail.php(42): Kohana_Email->send()
#14 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_send_mail()
#15 [internal function]: Kohana_Controller->execute()
#16 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#17 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#19 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#20 {main} in file:line