<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-27 00:12:41 --- CRITICAL: ErrorException [ 2 ]: preg_replace(): Compilation failed: PCRE does not support \L, \l, \N{name}, \U, or \u at offset 5 ~ APPPATH\vendor\PHPWord\PHPWord\Template.php [ 111 ] in file:line
2013-08-27 00:12:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', 'L:\domains\loca...', 111, Array)
#1 L:\domains\localhost\www\application\vendor\PHPWord\PHPWord\Template.php(111): preg_replace('/LFam\u/is', 'qweqwe1', '<?xml version="...')
#2 L:\domains\localhost\www\application\classes\Controller\WordTemplate.php(55): PHPWord_Template->setValue('LFam', 'qweqwe1')
#3 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#6 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-08-27 00:35:26 --- CRITICAL: ErrorException [ 8 ]: Undefined index: familiya ~ APPPATH\classes\Controller\WordTemplate.php [ 56 ] in L:\domains\localhost\www\application\classes\Controller\WordTemplate.php:56
2013-08-27 00:35:26 --- DEBUG: #0 L:\domains\localhost\www\application\classes\Controller\WordTemplate.php(56): Kohana_Core::error_handler(8, 'Undefined index...', 'L:\domains\loca...', 56, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\localhost\www\application\classes\Controller\WordTemplate.php:56
2013-08-27 00:37:13 --- CRITICAL: ErrorException [ 8 ]: Undefined index: familiya ~ APPPATH\classes\Controller\WordTemplate.php [ 56 ] in L:\domains\localhost\www\application\classes\Controller\WordTemplate.php:56
2013-08-27 00:37:13 --- DEBUG: #0 L:\domains\localhost\www\application\classes\Controller\WordTemplate.php(56): Kohana_Core::error_handler(8, 'Undefined index...', 'L:\domains\loca...', 56, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\localhost\www\application\classes\Controller\WordTemplate.php:56
2013-08-27 00:42:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: familiya ~ APPPATH\classes\Controller\WordTemplate.php [ 56 ] in L:\domains\localhost\www\application\classes\Controller\WordTemplate.php:56
2013-08-27 00:42:47 --- DEBUG: #0 L:\domains\localhost\www\application\classes\Controller\WordTemplate.php(56): Kohana_Core::error_handler(8, 'Undefined index...', 'L:\domains\loca...', 56, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\localhost\www\application\classes\Controller\WordTemplate.php:56
2013-08-27 23:26:14 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Admin_Index::scanDownloadedFolder() ~ APPPATH\classes\Controller\Admin\Index.php [ 42 ] in file:line
2013-08-27 23:26:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line