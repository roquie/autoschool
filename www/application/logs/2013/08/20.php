<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-20 11:15:36 --- CRITICAL: ErrorException [ 2 ]: touch(): Unable to create file media/css/d6060986d987655b080f6e68d68b65b3-1376936503.css because No such file or directory ~ MODPATH\less\classes\Less\Core.php [ 163 ] in file:line
2013-08-20 11:15:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'touch(): Unable...', 'L:\domains\loca...', 163, Array)
#1 L:\domains\localhost\www\modules\less\classes\Less\Core.php(163): touch('media/css/d6060...')
#2 L:\domains\localhost\www\modules\less\classes\Less\Core.php(146): Less_Core::_generate_assets('media/css/d6060...', Array)
#3 L:\domains\localhost\www\modules\less\classes\Less\Core.php(60): Less_Core::_combine(Array)
#4 L:\domains\localhost\www\application\classes\Controller\Main.php(17): Less_Core::compile(Array)
#5 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#6 [internal function]: Kohana_Controller->execute()
#7 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#8 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2013-08-20 11:17:46 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(L:\domains\localhost\www\application\media/less): failed to open stream: Permission denied ~ MODPATH\less\classes\Less\Core.php [ 169 ] in file:line
2013-08-20 11:17:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'L:\domains\loca...', 169, Array)
#1 L:\domains\localhost\www\modules\less\classes\Less\Core.php(169): file_get_contents('L:\domains\loca...')
#2 L:\domains\localhost\www\modules\less\classes\Less\Core.php(146): Less_Core::_generate_assets('L:\domains\loca...', Array)
#3 L:\domains\localhost\www\modules\less\classes\Less\Core.php(60): Less_Core::_combine(Array)
#4 L:\domains\localhost\www\application\classes\Controller\Main.php(17): Less_Core::compile(Array)
#5 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#6 [internal function]: Kohana_Controller->execute()
#7 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#8 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2013-08-20 11:18:58 --- CRITICAL: ErrorException [ 2 ]: touch(http://localhost/media/css891b835559a6f25bd415c6c822ee57dc-1376936427.css): failed to open stream: HTTP request failed! HTTP/1.1 404 Not Found
 ~ MODPATH\less\classes\Less\Core.php [ 163 ] in file:line
2013-08-20 11:18:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'touch(http://lo...', 'L:\domains\loca...', 163, Array)
#1 L:\domains\localhost\www\modules\less\classes\Less\Core.php(163): touch('http://localhos...')
#2 L:\domains\localhost\www\modules\less\classes\Less\Core.php(146): Less_Core::_generate_assets('http://localhos...', Array)
#3 L:\domains\localhost\www\modules\less\classes\Less\Core.php(60): Less_Core::_combine(Array)
#4 L:\domains\localhost\www\application\classes\Controller\Main.php(17): Less_Core::compile(Array)
#5 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#6 [internal function]: Kohana_Controller->execute()
#7 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#8 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2013-08-20 11:48:00 --- CRITICAL: ErrorException [ 2 ]: touch(): Unable to create file css/3a2ff11336bd7897e08ef03d180ffb9a-1376983287.css because No such file or directory ~ MODPATH\less\classes\Less\Core.php [ 163 ] in file:line
2013-08-20 11:48:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'touch(): Unable...', 'L:\domains\loca...', 163, Array)
#1 L:\domains\localhost\www\modules\less\classes\Less\Core.php(163): touch('css/3a2ff11336b...')
#2 L:\domains\localhost\www\modules\less\classes\Less\Core.php(146): Less_Core::_generate_assets('css/3a2ff11336b...', Array)
#3 L:\domains\localhost\www\modules\less\classes\Less\Core.php(60): Less_Core::_combine(Array)
#4 L:\domains\localhost\www\application\classes\Controller\Main.php(17): Less_Core::compile(Array)
#5 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#6 [internal function]: Kohana_Controller->execute()
#7 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#8 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2013-08-20 11:48:03 --- CRITICAL: ErrorException [ 2 ]: touch(): Unable to create file css/3a2ff11336bd7897e08ef03d180ffb9a-1376983287.css because No such file or directory ~ MODPATH\less\classes\Less\Core.php [ 163 ] in file:line
2013-08-20 11:48:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'touch(): Unable...', 'L:\domains\loca...', 163, Array)
#1 L:\domains\localhost\www\modules\less\classes\Less\Core.php(163): touch('css/3a2ff11336b...')
#2 L:\domains\localhost\www\modules\less\classes\Less\Core.php(146): Less_Core::_generate_assets('css/3a2ff11336b...', Array)
#3 L:\domains\localhost\www\modules\less\classes\Less\Core.php(60): Less_Core::_combine(Array)
#4 L:\domains\localhost\www\application\classes\Controller\Main.php(17): Less_Core::compile(Array)
#5 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#6 [internal function]: Kohana_Controller->execute()
#7 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#8 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2013-08-20 12:37:56 --- CRITICAL: LessException [ 0 ]: Не указана директория для *.less файлов ~ MODPATH\less\classes\Less\Core.php [ 21 ] in L:\domains\localhost\www\modules\less\classes\Less\Core.php:13
2013-08-20 12:37:56 --- DEBUG: #0 L:\domains\localhost\www\modules\less\classes\Less\Core.php(13): Less_Core->__construct()
#1 L:\domains\localhost\www\application\classes\Controller\Main.php(12): Less_Core::factory()
#2 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#5 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\localhost\www\modules\less\classes\Less\Core.php:13
2013-08-20 12:38:21 --- CRITICAL: LessException [ 0 ]: Не указана директория для *.less файлов ~ MODPATH\less\classes\Less\Core.php [ 22 ] in L:\domains\localhost\www\modules\less\classes\Less\Core.php:13
2013-08-20 12:38:21 --- DEBUG: #0 L:\domains\localhost\www\modules\less\classes\Less\Core.php(13): Less_Core->__construct()
#1 L:\domains\localhost\www\application\classes\Controller\Main.php(12): Less_Core::factory()
#2 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#5 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\localhost\www\modules\less\classes\Less\Core.php:13
2013-08-20 12:38:47 --- CRITICAL: LessException [ 0 ]: Не указана директория для *.less файлов ~ MODPATH\less\classes\Less\Core.php [ 22 ] in L:\domains\localhost\www\modules\less\classes\Less\Core.php:13
2013-08-20 12:38:47 --- DEBUG: #0 L:\domains\localhost\www\modules\less\classes\Less\Core.php(13): Less_Core->__construct()
#1 L:\domains\localhost\www\application\classes\Controller\Main.php(12): Less_Core::factory()
#2 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#5 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\localhost\www\modules\less\classes\Less\Core.php:13
2013-08-20 12:38:48 --- CRITICAL: LessException [ 0 ]: Не указана директория для *.less файлов ~ MODPATH\less\classes\Less\Core.php [ 22 ] in L:\domains\localhost\www\modules\less\classes\Less\Core.php:13
2013-08-20 12:38:48 --- DEBUG: #0 L:\domains\localhost\www\modules\less\classes\Less\Core.php(13): Less_Core->__construct()
#1 L:\domains\localhost\www\application\classes\Controller\Main.php(12): Less_Core::factory()
#2 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#5 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\localhost\www\modules\less\classes\Less\Core.php:13
2013-08-20 12:38:59 --- CRITICAL: LessException [ 0 ]: Не указана директория для *.less файлов ~ MODPATH\less\classes\Less\Core.php [ 22 ] in L:\domains\localhost\www\modules\less\classes\Less\Core.php:13
2013-08-20 12:38:59 --- DEBUG: #0 L:\domains\localhost\www\modules\less\classes\Less\Core.php(13): Less_Core->__construct()
#1 L:\domains\localhost\www\application\classes\Controller\Main.php(12): Less_Core::factory()
#2 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#5 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\localhost\www\modules\less\classes\Less\Core.php:13
2013-08-20 12:39:04 --- CRITICAL: LessException [ 0 ]: Не указана директория для *.less файлов ~ MODPATH\less\classes\Less\Core.php [ 22 ] in L:\domains\localhost\www\modules\less\classes\Less\Core.php:13
2013-08-20 12:39:04 --- DEBUG: #0 L:\domains\localhost\www\modules\less\classes\Less\Core.php(13): Less_Core->__construct()
#1 L:\domains\localhost\www\application\classes\Controller\Main.php(12): Less_Core::factory()
#2 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#5 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\localhost\www\modules\less\classes\Less\Core.php:13
2013-08-20 12:40:11 --- CRITICAL: LessException [ 0 ]: Не указана директория для *.less файлов ~ MODPATH\less\classes\Less\Core.php [ 24 ] in L:\domains\localhost\www\modules\less\classes\Less\Core.php:15
2013-08-20 12:40:11 --- DEBUG: #0 L:\domains\localhost\www\modules\less\classes\Less\Core.php(15): Less_Core->__construct()
#1 L:\domains\localhost\www\application\classes\Controller\Main.php(12): Less_Core::factory()
#2 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#5 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\localhost\www\modules\less\classes\Less\Core.php:15
2013-08-20 12:40:13 --- CRITICAL: LessException [ 0 ]: Не указана директория для *.less файлов ~ MODPATH\less\classes\Less\Core.php [ 24 ] in L:\domains\localhost\www\modules\less\classes\Less\Core.php:15
2013-08-20 12:40:13 --- DEBUG: #0 L:\domains\localhost\www\modules\less\classes\Less\Core.php(15): Less_Core->__construct()
#1 L:\domains\localhost\www\application\classes\Controller\Main.php(12): Less_Core::factory()
#2 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#5 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\localhost\www\modules\less\classes\Less\Core.php:15
2013-08-20 12:40:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: stylesheet ~ APPPATH\views\main\layout.php [ 7 ] in L:\domains\localhost\www\application\views\main\layout.php:7
2013-08-20 12:40:22 --- DEBUG: #0 L:\domains\localhost\www\application\views\main\layout.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'L:\domains\loca...', 7, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\View.php(61): include('L:\domains\loca...')
#2 L:\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('L:\domains\loca...', Array)
#3 L:\domains\localhost\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 L:\domains\localhost\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#7 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#10 {main} in L:\domains\localhost\www\application\views\main\layout.php:7
2013-08-20 12:46:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Main.php [ 25 ] in file:line
2013-08-20 12:46:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-08-20 12:52:00 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ MODPATH\less\classes\Less\Core.php [ 35 ] in file:line
2013-08-20 12:52:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-08-20 12:58:08 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ MODPATH\less\classes\Less\Core.php [ 34 ] in file:line
2013-08-20 12:58:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-08-20 13:23:44 --- CRITICAL: ErrorException [ 2 ]: SplFileInfo::getPathname() expects exactly 0 parameters, 1 given ~ MODPATH\less\classes\Less\Core.php [ 49 ] in file:line
2013-08-20 13:23:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'SplFileInfo::ge...', 'L:\domains\loca...', 49, Array)
#1 L:\domains\localhost\www\modules\less\classes\Less\Core.php(49): SplFileInfo->getPathname('*.less')
#2 L:\domains\localhost\www\modules\less\classes\Less\Core.php(51): Less_Core->getLessFilesFullPath('L:\domains\loca...')
#3 L:\domains\localhost\www\modules\less\classes\Less\Core.php(29): Less_Core->getLessFilesFullPath('L:\domains\loca...')
#4 L:\domains\localhost\www\application\classes\Controller\Main.php(15): Less_Core->compileByRq()
#5 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#6 [internal function]: Kohana_Controller->execute()
#7 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#8 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2013-08-20 13:39:37 --- CRITICAL: ErrorException [ 8 ]: Undefined property: DirectoryIterator::$getPathname ~ MODPATH\less\classes\Less\Core.php [ 49 ] in L:\domains\localhost\www\modules\less\classes\Less\Core.php:49
2013-08-20 13:39:37 --- DEBUG: #0 L:\domains\localhost\www\modules\less\classes\Less\Core.php(49): Kohana_Core::error_handler(8, 'Undefined prope...', 'L:\domains\loca...', 49, Array)
#1 L:\domains\localhost\www\modules\less\classes\Less\Core.php(53): Less_Core->getLessFilesFullPath('L:\domains\loca...')
#2 L:\domains\localhost\www\modules\less\classes\Less\Core.php(29): Less_Core->getLessFilesFullPath('L:\domains\loca...')
#3 L:\domains\localhost\www\application\classes\Controller\Main.php(15): Less_Core->compileByRq()
#4 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#7 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#10 {main} in L:\domains\localhost\www\modules\less\classes\Less\Core.php:49
2013-08-20 13:41:26 --- CRITICAL: ErrorException [ 2 ]: array_filter() expects parameter 1 to be array, boolean given ~ MODPATH\less\classes\Less\Core.php [ 55 ] in file:line
2013-08-20 13:41:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_filter() ...', 'L:\domains\loca...', 55, Array)
#1 L:\domains\localhost\www\modules\less\classes\Less\Core.php(55): array_filter(true)
#2 L:\domains\localhost\www\modules\less\classes\Less\Core.php(53): Less_Core->getLessFilesFullPath('L:\domains\loca...')
#3 L:\domains\localhost\www\modules\less\classes\Less\Core.php(29): Less_Core->getLessFilesFullPath('L:\domains\loca...')
#4 L:\domains\localhost\www\application\classes\Controller\Main.php(15): Less_Core->compileByRq()
#5 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#6 [internal function]: Kohana_Controller->execute()
#7 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#8 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2013-08-20 13:42:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: basename ~ MODPATH\less\classes\Less\Core.php [ 52 ] in L:\domains\localhost\www\modules\less\classes\Less\Core.php:52
2013-08-20 13:42:31 --- DEBUG: #0 L:\domains\localhost\www\modules\less\classes\Less\Core.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', 'L:\domains\loca...', 52, Array)
#1 L:\domains\localhost\www\modules\less\classes\Less\Core.php(29): Less_Core->getLessFilesFullPath('L:\domains\loca...')
#2 L:\domains\localhost\www\application\classes\Controller\Main.php(15): Less_Core->compileByRq()
#3 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#6 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in L:\domains\localhost\www\modules\less\classes\Less\Core.php:52
2013-08-20 13:46:37 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\less\classes\Less\Core.php [ 56 ] in file:line
2013-08-20 13:46:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'L:\domains\loca...', 56, Array)
#1 L:\domains\localhost\www\modules\less\classes\Less\Core.php(56): array_diff(Array, Array)
#2 L:\domains\localhost\www\modules\less\classes\Less\Core.php(29): Less_Core->getLessFilesFullPath('L:\domains\loca...')
#3 L:\domains\localhost\www\application\classes\Controller\Main.php(15): Less_Core->compileByRq()
#4 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#7 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-08-20 13:47:07 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function array_fileter() ~ MODPATH\less\classes\Less\Core.php [ 56 ] in file:line
2013-08-20 13:47:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-08-20 13:49:34 --- CRITICAL: ErrorException [ 2 ]: array_filter() expects parameter 1 to be array, string given ~ MODPATH\less\classes\Less\Core.php [ 56 ] in file:line
2013-08-20 13:49:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_filter() ...', 'L:\domains\loca...', 56, Array)
#1 [internal function]: array_filter('L:\domains\loca...')
#2 L:\domains\localhost\www\modules\less\classes\Less\Core.php(56): array_map('array_filter', Array)
#3 L:\domains\localhost\www\modules\less\classes\Less\Core.php(53): Less_Core->getLessFilesFullPath('L:\domains\loca...')
#4 L:\domains\localhost\www\modules\less\classes\Less\Core.php(29): Less_Core->getLessFilesFullPath('L:\domains\loca...')
#5 L:\domains\localhost\www\application\classes\Controller\Main.php(15): Less_Core->compileByRq()
#6 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#7 [internal function]: Kohana_Controller->execute()
#8 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#9 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2013-08-20 13:58:56 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ MODPATH\less\classes\Less\Core.php [ 55 ] in L:\domains\localhost\www\modules\less\classes\Less\Core.php:55
2013-08-20 13:58:56 --- DEBUG: #0 L:\domains\localhost\www\modules\less\classes\Less\Core.php(55): Kohana_Core::error_handler(2048, 'Only variables ...', 'L:\domains\loca...', 55, Array)
#1 L:\domains\localhost\www\modules\less\classes\Less\Core.php(53): Less_Core->getLessFilesFullPath('L:\domains\loca...')
#2 L:\domains\localhost\www\modules\less\classes\Less\Core.php(29): Less_Core->getLessFilesFullPath('L:\domains\loca...')
#3 L:\domains\localhost\www\application\classes\Controller\Main.php(15): Less_Core->compileByRq()
#4 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#7 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#10 {main} in L:\domains\localhost\www\modules\less\classes\Less\Core.php:55
2013-08-20 14:31:23 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\less\classes\Less\Core.php [ 35 ] in L:\domains\localhost\www\modules\less\classes\Less\Core.php:35
2013-08-20 14:31:23 --- DEBUG: #0 L:\domains\localhost\www\modules\less\classes\Less\Core.php(35): Kohana_Core::error_handler(8, 'Array to string...', 'L:\domains\loca...', 35, Array)
#1 L:\domains\localhost\www\application\classes\Controller\Main.php(15): Less_Core->compileByRq()
#2 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#5 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\localhost\www\modules\less\classes\Less\Core.php:35
2013-08-20 14:38:46 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ MODPATH\less\classes\Less\Core.php [ 72 ] in L:\domains\localhost\www\modules\less\classes\Less\Core.php:72
2013-08-20 14:38:46 --- DEBUG: #0 L:\domains\localhost\www\modules\less\classes\Less\Core.php(72): Kohana_Core::error_handler(2048, 'Only variables ...', 'L:\domains\loca...', 72, Array)
#1 L:\domains\localhost\www\modules\less\classes\Less\Core.php(29): Less_Core->getLessFilesFullPath('L:\domains\loca...')
#2 L:\domains\localhost\www\application\classes\Controller\Main.php(15): Less_Core->compileByRq()
#3 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#6 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in L:\domains\localhost\www\modules\less\classes\Less\Core.php:72
2013-08-20 15:03:03 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\less\classes\Less\Core.php [ 72 ] in L:\domains\localhost\www\modules\less\classes\Less\Core.php:72
2013-08-20 15:03:03 --- DEBUG: #0 L:\domains\localhost\www\modules\less\classes\Less\Core.php(72): Kohana_Core::error_handler(8, 'Array to string...', 'L:\domains\loca...', 72, Array)
#1 L:\domains\localhost\www\modules\less\classes\Less\Core.php(29): Less_Core->getLessFilesFullPath('L:\domains\loca...')
#2 L:\domains\localhost\www\application\classes\Controller\Main.php(15): Less_Core->compileByRq()
#3 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#6 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in L:\domains\localhost\www\modules\less\classes\Less\Core.php:72
2013-08-20 15:05:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '&' ~ MODPATH\less\classes\Less\Core.php [ 70 ] in file:line
2013-08-20 15:05:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-08-20 15:05:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '&' ~ MODPATH\less\classes\Less\Core.php [ 72 ] in file:line
2013-08-20 15:05:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-08-20 15:26:02 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\less\classes\Less\Core.php [ 67 ] in file:line
2013-08-20 15:26:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-08-20 15:27:07 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\less\classes\Less\Core.php [ 67 ] in file:line
2013-08-20 15:27:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-08-20 15:27:11 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\less\classes\Less\Core.php [ 67 ] in file:line
2013-08-20 15:27:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-08-20 15:32:08 --- CRITICAL: ErrorException [ 2 ]: file_put_contents(0L:\domains\localhost\www\application\media/test/output.css): failed to open stream: Invalid argument ~ MODPATH\less\vendor\lessphp\lessc.inc.php [ 1835 ] in file:line
2013-08-20 15:32:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', 'L:\domains\loca...', 1835, Array)
#1 L:\domains\localhost\www\modules\less\vendor\lessphp\lessc.inc.php(1835): file_put_contents('0L:\domains\loc...', 'div {?  backgro...')
#2 L:\domains\localhost\www\modules\less\vendor\lessphp\lessc.inc.php(1844): lessc->compileFile('L:\domains\loca...', '0L:\domains\loc...')
#3 L:\domains\localhost\www\modules\less\vendor\lessphp\lessc.inc.php(2016): lessc->checkedCompile('L:\domains\loca...', '0L:\domains\loc...')
#4 L:\domains\localhost\www\modules\less\classes\Less\Core.php(36): lessc::ccompile('L:\domains\loca...', '0L:\domains\loc...')
#5 L:\domains\localhost\www\application\classes\Controller\Main.php(15): Less_Core->compileByRq()
#6 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#7 [internal function]: Kohana_Controller->execute()
#8 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#9 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2013-08-20 15:32:30 --- CRITICAL: ErrorException [ 2 ]: file_put_contents(x0xL:\domains\localhost\www\application\media/test/output.css): failed to open stream: Invalid argument ~ MODPATH\less\vendor\lessphp\lessc.inc.php [ 1835 ] in file:line
2013-08-20 15:32:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', 'L:\domains\loca...', 1835, Array)
#1 L:\domains\localhost\www\modules\less\vendor\lessphp\lessc.inc.php(1835): file_put_contents('x0xL:\domains\l...', 'div {?  backgro...')
#2 L:\domains\localhost\www\modules\less\vendor\lessphp\lessc.inc.php(1844): lessc->compileFile('L:\domains\loca...', 'x0xL:\domains\l...')
#3 L:\domains\localhost\www\modules\less\vendor\lessphp\lessc.inc.php(2016): lessc->checkedCompile('L:\domains\loca...', 'x0xL:\domains\l...')
#4 L:\domains\localhost\www\modules\less\classes\Less\Core.php(36): lessc::ccompile('L:\domains\loca...', 'x0xL:\domains\l...')
#5 L:\domains\localhost\www\application\classes\Controller\Main.php(15): Less_Core->compileByRq()
#6 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#7 [internal function]: Kohana_Controller->execute()
#8 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#9 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2013-08-20 15:35:38 --- CRITICAL: ErrorException [ 2 ]: filemtime(): stat failed for @lol3: green;

div {
  background-color: @lol3;
}@lol3: green;

div {
  background-color: @lol3;
}@lol3: green;

div {
  background-color: @lol3;
}@lol: red;

body {
  background-color: @lol;
  box-shadow: 0px 120px 120px rgba(0,0,0,0.9) inherit;
}@lol2: red;

header {
  background-color: @lol2;
  box-shadow: 0px 120px 120px rgba(0,0,0,0.9) inherit;
} ~ MODPATH\less\vendor\lessphp\lessc.inc.php [ 1843 ] in file:line
2013-08-20 15:35:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'filemtime(): st...', 'L:\domains\loca...', 1843, Array)
#1 L:\domains\localhost\www\modules\less\vendor\lessphp\lessc.inc.php(1843): filemtime('@lol3: green;??...')
#2 L:\domains\localhost\www\modules\less\vendor\lessphp\lessc.inc.php(2016): lessc->checkedCompile('@lol3: green;??...', 'L:\domains\loca...')
#3 L:\domains\localhost\www\modules\less\classes\Less\Core.php(40): lessc::ccompile('@lol3: green;??...', 'L:\domains\loca...')
#4 L:\domains\localhost\www\application\classes\Controller\Main.php(15): Less_Core->compileByRq()
#5 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#6 [internal function]: Kohana_Controller->execute()
#7 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#8 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2013-08-20 15:36:43 --- CRITICAL: ErrorException [ 2 ]: filemtime(): stat failed for @lol3: green;

div {
  background-color: @lol3;
}@lol3: green;

div {
  background-color: @lol3;
}@lol3: green;

div {
  background-color: @lol3;
}@lol: red;

body {
  background-color: @lol;
  box-shadow: 0px 120px 120px rgba(0,0,0,0.9) inherit;
}@lol2: red;

header {
  background-color: @lol2;
  box-shadow: 0px 120px 120px rgba(0,0,0,0.9) inherit;
} ~ MODPATH\less\vendor\lessphp\lessc.inc.php [ 1843 ] in file:line
2013-08-20 15:36:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'filemtime(): st...', 'L:\domains\loca...', 1843, Array)
#1 L:\domains\localhost\www\modules\less\vendor\lessphp\lessc.inc.php(1843): filemtime('@lol3: green;??...')
#2 L:\domains\localhost\www\modules\less\vendor\lessphp\lessc.inc.php(2016): lessc->checkedCompile('@lol3: green;??...', 'L:\domains\loca...')
#3 L:\domains\localhost\www\modules\less\classes\Less\Core.php(40): lessc::ccompile('@lol3: green;??...', 'L:\domains\loca...')
#4 L:\domains\localhost\www\application\classes\Controller\Main.php(15): Less_Core->compileByRq()
#5 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#6 [internal function]: Kohana_Controller->execute()
#7 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#8 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2013-08-20 15:46:44 --- CRITICAL: ErrorException [ 2 ]: filemtime(): stat failed for &lt;pre&gt; ~ MODPATH\less\vendor\lessphp\lessc.inc.php [ 1843 ] in file:line
2013-08-20 15:46:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'filemtime(): st...', 'L:\domains\loca...', 1843, Array)
#1 L:\domains\localhost\www\modules\less\vendor\lessphp\lessc.inc.php(1843): filemtime('<pre>')
#2 L:\domains\localhost\www\modules\less\vendor\lessphp\lessc.inc.php(2016): lessc->checkedCompile('<pre>', 'L:\domains\loca...')
#3 L:\domains\localhost\www\modules\less\classes\Less\Core.php(40): lessc::ccompile('<pre>', 'L:\domains\loca...')
#4 L:\domains\localhost\www\application\classes\Controller\Main.php(15): Less_Core->compileByRq()
#5 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#6 [internal function]: Kohana_Controller->execute()
#7 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#8 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2013-08-20 15:46:53 --- CRITICAL: ErrorException [ 2 ]: filemtime(): stat failed for @lol3: green;

div {
  background-color: @lol3;
}@lol3: green;

div {
  background-color: @lol3;
}@lol3: green;

div {
  background-color: @lol3;
}@lol: red;

body {
  background-color: @lol;
  box-shadow: 0px 120px 120px rgba(0,0,0,0.9) inherit;
}@lol2: red;

header {
  background-color: @lol2;
  box-shadow: 0px 120px 120px rgba(0,0,0,0.9) inherit;
} ~ MODPATH\less\vendor\lessphp\lessc.inc.php [ 1843 ] in file:line
2013-08-20 15:46:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'filemtime(): st...', 'L:\domains\loca...', 1843, Array)
#1 L:\domains\localhost\www\modules\less\vendor\lessphp\lessc.inc.php(1843): filemtime('@lol3: green;??...')
#2 L:\domains\localhost\www\modules\less\vendor\lessphp\lessc.inc.php(2016): lessc->checkedCompile('@lol3: green;??...', 'L:\domains\loca...')
#3 L:\domains\localhost\www\modules\less\classes\Less\Core.php(40): lessc::ccompile('@lol3: green;??...', 'L:\domains\loca...')
#4 L:\domains\localhost\www\application\classes\Controller\Main.php(15): Less_Core->compileByRq()
#5 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#6 [internal function]: Kohana_Controller->execute()
#7 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#8 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2013-08-20 15:47:49 --- CRITICAL: ErrorException [ 2 ]: filemtime(): stat failed for @laasol3: green;

div {
  background-color: @laasol3;
}@lol3wewew: green;

div {
  background-color: @lol3wewew;
}@lol3222222: green;

div {
  background-color: @lol3222222;
}@lol: red;

body {
  background-color: @lol;
  box-shadow: 0px 120px 120px rgba(0,0,0,0.9) inherit;
}@lol2: red;

header {
  background-color: @lol2;
  box-shadow: 0px 120px 120px rgba(0,0,0,0.9) inherit;
} ~ MODPATH\less\vendor\lessphp\lessc.inc.php [ 1843 ] in file:line
2013-08-20 15:47:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'filemtime(): st...', 'L:\domains\loca...', 1843, Array)
#1 L:\domains\localhost\www\modules\less\vendor\lessphp\lessc.inc.php(1843): filemtime('@laasol3: green...')
#2 L:\domains\localhost\www\modules\less\vendor\lessphp\lessc.inc.php(2016): lessc->checkedCompile('@laasol3: green...', 'L:\domains\loca...')
#3 L:\domains\localhost\www\modules\less\classes\Less\Core.php(40): lessc::ccompile('@laasol3: green...', 'L:\domains\loca...')
#4 L:\domains\localhost\www\application\classes\Controller\Main.php(15): Less_Core->compileByRq()
#5 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#6 [internal function]: Kohana_Controller->execute()
#7 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#8 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2013-08-20 15:48:14 --- CRITICAL: ErrorException [ 2 ]: filemtime(): stat failed for @lol: red;

body {
  background-color: @lol;
  box-shadow: 0px 120px 120px rgba(0,0,0,0.9) inherit;
}@lol2: red;

header {
  background-color: @lol2;
  box-shadow: 0px 120px 120px rgba(0,0,0,0.9) inherit;
} ~ MODPATH\less\vendor\lessphp\lessc.inc.php [ 1843 ] in file:line
2013-08-20 15:48:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'filemtime(): st...', 'L:\domains\loca...', 1843, Array)
#1 L:\domains\localhost\www\modules\less\vendor\lessphp\lessc.inc.php(1843): filemtime('@lol: red;????b...')
#2 L:\domains\localhost\www\modules\less\vendor\lessphp\lessc.inc.php(2016): lessc->checkedCompile('@lol: red;????b...', 'L:\domains\loca...')
#3 L:\domains\localhost\www\modules\less\classes\Less\Core.php(40): lessc::ccompile('@lol: red;????b...', 'L:\domains\loca...')
#4 L:\domains\localhost\www\application\classes\Controller\Main.php(15): Less_Core->compileByRq()
#5 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#6 [internal function]: Kohana_Controller->execute()
#7 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#8 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2013-08-20 15:51:19 --- CRITICAL: Exception [ 0 ]: load error: failed to find @lol: red;

body {
  background-color: @lol;
  box-shadow: 0px 120px 120px rgba(0,0,0,0.9) inherit;
}@lol2: red;

header {
  background-color: @lol2;
  box-shadow: 0px 120px 120px rgba(0,0,0,0.9) inherit;
} ~ MODPATH\less\vendor\lessphp\lessc.inc.php [ 1818 ] in L:\domains\localhost\www\modules\less\classes\Less\Core.php:41
2013-08-20 15:51:19 --- DEBUG: #0 L:\domains\localhost\www\modules\less\classes\Less\Core.php(41): lessc->compileFile('@lol: red;????b...', 'L:\domains\loca...')
#1 L:\domains\localhost\www\application\classes\Controller\Main.php(15): Less_Core->compileByRq()
#2 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#5 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\localhost\www\modules\less\classes\Less\Core.php:41
2013-08-20 15:51:56 --- CRITICAL: Exception [ 0 ]: load error: failed to find 
@lol: red;

body {
  background-color: @lol;
  box-shadow: 0px 120px 120px rgba(0,0,0,0.9) inherit;
}
@lol2: red;

header {
  background-color: @lol2;
  box-shadow: 0px 120px 120px rgba(0,0,0,0.9) inherit;
} ~ MODPATH\less\vendor\lessphp\lessc.inc.php [ 1818 ] in L:\domains\localhost\www\modules\less\classes\Less\Core.php:41
2013-08-20 15:51:56 --- DEBUG: #0 L:\domains\localhost\www\modules\less\classes\Less\Core.php(41): lessc->compileFile('?@lol: red;????...', 'L:\domains\loca...')
#1 L:\domains\localhost\www\application\classes\Controller\Main.php(15): Less_Core->compileByRq()
#2 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#5 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\localhost\www\modules\less\classes\Less\Core.php:41
2013-08-20 15:51:58 --- CRITICAL: Exception [ 0 ]: load error: failed to find 
@lol: red;

body {
  background-color: @lol;
  box-shadow: 0px 120px 120px rgba(0,0,0,0.9) inherit;
}
@lol2: red;

header {
  background-color: @lol2;
  box-shadow: 0px 120px 120px rgba(0,0,0,0.9) inherit;
} ~ MODPATH\less\vendor\lessphp\lessc.inc.php [ 1818 ] in L:\domains\localhost\www\modules\less\classes\Less\Core.php:41
2013-08-20 15:51:58 --- DEBUG: #0 L:\domains\localhost\www\modules\less\classes\Less\Core.php(41): lessc->compileFile('?@lol: red;????...', 'L:\domains\loca...')
#1 L:\domains\localhost\www\application\classes\Controller\Main.php(15): Less_Core->compileByRq()
#2 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#5 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\localhost\www\modules\less\classes\Less\Core.php:41
2013-08-20 15:52:42 --- CRITICAL: Exception [ 0 ]: load error: failed to find @ ~ MODPATH\less\vendor\lessphp\lessc.inc.php [ 1818 ] in L:\domains\localhost\www\modules\less\classes\Less\Core.php:37
2013-08-20 15:52:42 --- DEBUG: #0 L:\domains\localhost\www\modules\less\classes\Less\Core.php(37): lessc->compileFile('@', 'L:\domains\loca...')
#1 L:\domains\localhost\www\application\classes\Controller\Main.php(15): Less_Core->compileByRq()
#2 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#5 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\localhost\www\modules\less\classes\Less\Core.php:37
2013-08-20 15:53:24 --- CRITICAL: Exception [ 0 ]: load error: failed to find @ ~ MODPATH\less\vendor\lessphp\lessc.inc.php [ 1818 ] in L:\domains\localhost\www\modules\less\classes\Less\Core.php:37
2013-08-20 15:53:24 --- DEBUG: #0 L:\domains\localhost\www\modules\less\classes\Less\Core.php(37): lessc->compileFile('@', 'L:\domains\loca...')
#1 L:\domains\localhost\www\application\classes\Controller\Main.php(15): Less_Core->compileByRq()
#2 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#5 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\localhost\www\modules\less\classes\Less\Core.php:37
2013-08-20 15:53:25 --- CRITICAL: Exception [ 0 ]: load error: failed to find @ ~ MODPATH\less\vendor\lessphp\lessc.inc.php [ 1818 ] in L:\domains\localhost\www\modules\less\classes\Less\Core.php:37
2013-08-20 15:53:25 --- DEBUG: #0 L:\domains\localhost\www\modules\less\classes\Less\Core.php(37): lessc->compileFile('@', 'L:\domains\loca...')
#1 L:\domains\localhost\www\application\classes\Controller\Main.php(15): Less_Core->compileByRq()
#2 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#5 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\localhost\www\modules\less\classes\Less\Core.php:37
2013-08-20 15:54:20 --- CRITICAL: Exception [ 0 ]: load error: failed to find 
@lol: red;

body {
  background-color: @lol;
  box-shadow: 0px 120px 120px rgba(0,0,0,0.9) inherit;
}
@lol2: red;

header {
  background-color: @lol2;
  box-shadow: 0px 120px 120px rgba(0,0,0,0.9) inherit;
} ~ MODPATH\less\vendor\lessphp\lessc.inc.php [ 1818 ] in L:\domains\localhost\www\modules\less\classes\Less\Core.php:41
2013-08-20 15:54:20 --- DEBUG: #0 L:\domains\localhost\www\modules\less\classes\Less\Core.php(41): lessc->compileFile('?@lol: red;????...', 'L:\domains\loca...')
#1 L:\domains\localhost\www\application\classes\Controller\Main.php(15): Less_Core->compileByRq()
#2 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#5 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\localhost\www\modules\less\classes\Less\Core.php:41
2013-08-20 16:04:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH\less\classes\Less\Core.php [ 37 ] in file:line
2013-08-20 16:04:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-08-20 16:08:14 --- CRITICAL: Exception [ 0 ]: load error: failed to find 
@lol: red;

body {
  background-color: @lol;
  box-shadow: 0px 120px 120px rgba(0,0,0,0.9) inherit;
}

@lol2: red;

header {
  background-color: @lol2;
  box-shadow: 0px 120px 120px rgba(0,0,0,0.9) inherit;
} ~ MODPATH\less\vendor\lessphp\lessc.inc.php [ 1818 ] in L:\domains\localhost\www\modules\less\classes\Less\Core.php:41
2013-08-20 16:08:14 --- DEBUG: #0 L:\domains\localhost\www\modules\less\classes\Less\Core.php(41): lessc->compileFile('?@lol: red;????...', 'L:\domains\loca...')
#1 L:\domains\localhost\www\application\classes\Controller\Main.php(15): Less_Core->compileByRq()
#2 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#5 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\localhost\www\modules\less\classes\Less\Core.php:41
2013-08-20 16:12:28 --- CRITICAL: ErrorException [ 8 ]: Undefined index: compress ~ MODPATH\less\classes\Less\Core.php [ 39 ] in L:\domains\localhost\www\modules\less\classes\Less\Core.php:39
2013-08-20 16:12:28 --- DEBUG: #0 L:\domains\localhost\www\modules\less\classes\Less\Core.php(39): Kohana_Core::error_handler(8, 'Undefined index...', 'L:\domains\loca...', 39, Array)
#1 L:\domains\localhost\www\application\classes\Controller\Main.php(15): Less_Core->compileByRq()
#2 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#5 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\localhost\www\modules\less\classes\Less\Core.php:39
2013-08-20 16:19:25 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Less_Core::compileByRq() ~ APPPATH\classes\Controller\Main.php [ 15 ] in file:line
2013-08-20 16:19:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-08-20 16:19:51 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Less_Core::getLessFilesFullPath() ~ MODPATH\less\classes\Less\Core.php [ 23 ] in file:line
2013-08-20 16:19:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-08-20 16:21:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: stylesheet ~ APPPATH\views\main\layout.php [ 7 ] in L:\domains\localhost\www\application\views\main\layout.php:7
2013-08-20 16:21:48 --- DEBUG: #0 L:\domains\localhost\www\application\views\main\layout.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'L:\domains\loca...', 7, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\View.php(61): include('L:\domains\loca...')
#2 L:\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('L:\domains\loca...', Array)
#3 L:\domains\localhost\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 L:\domains\localhost\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#7 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#10 {main} in L:\domains\localhost\www\application\views\main\layout.php:7
2013-08-20 16:23:03 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Main' not found ~ APPPATH\classes\Controller\Main\Index.php [ 4 ] in file:line
2013-08-20 16:23:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line