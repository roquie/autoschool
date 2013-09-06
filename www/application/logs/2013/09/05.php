<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-05 22:23:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '>' ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 61 ] in file:line
2013-09-05 22:23:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-05 22:24:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 64 ] in file:line
2013-09-05 22:24:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-05 22:33:55 --- CRITICAL: ErrorException [ 2 ]: opendir(docProps/,docProps/):  ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 63 ] in file:line
2013-09-05 22:33:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'opendir(docProp...', 'L:\domains\auto...', 63, Array)
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(63): opendir('docProps/')
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(51): Template_TemplateDocx->ZipDirectory('docProps/', Object(ZipArchive))
#3 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(96): Template_TemplateDocx->getFilesFullPath('L:\domains\auto...', Object(ZipArchive))
#4 L:\domains\autoschool.ru\www\application\classes\Controller\Main.php(15): Template_TemplateDocx->save()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#6 [internal function]: Kohana_Controller->execute()
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2013-09-05 22:34:11 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method TemplateDocx::ZipDirectory() ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 51 ] in file:line
2013-09-05 22:34:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-05 22:34:34 --- CRITICAL: UnexpectedValueException [ 0 ]: DirectoryIterator::__construct(docProps/,docProps/):  ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 45 ] in L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php:45
2013-09-05 22:34:34 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(45): DirectoryIterator->__construct('docProps/')
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(51): Template_TemplateDocx->getFilesFullPath('docProps/', Object(ZipArchive))
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(96): Template_TemplateDocx->getFilesFullPath('L:\domains\auto...', Object(ZipArchive))
#3 L:\domains\autoschool.ru\www\application\classes\Controller\Main.php(15): Template_TemplateDocx->save()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php:45
2013-09-05 22:34:37 --- CRITICAL: UnexpectedValueException [ 0 ]: DirectoryIterator::__construct(docProps/,docProps/):  ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 45 ] in L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php:45
2013-09-05 22:34:37 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(45): DirectoryIterator->__construct('docProps/')
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(51): Template_TemplateDocx->getFilesFullPath('docProps/', Object(ZipArchive))
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(96): Template_TemplateDocx->getFilesFullPath('L:\domains\auto...', Object(ZipArchive))
#3 L:\domains\autoschool.ru\www\application\classes\Controller\Main.php(15): Template_TemplateDocx->save()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php:45
2013-09-05 22:35:12 --- CRITICAL: UnexpectedValueException [ 0 ]: DirectoryIterator::__construct(docProps/,docProps/):  ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 45 ] in L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php:45
2013-09-05 22:35:12 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(45): DirectoryIterator->__construct('docProps/')
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(53): Template_TemplateDocx->getFilesFullPath('docProps/', Object(ZipArchive))
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(95): Template_TemplateDocx->getFilesFullPath('L:\domains\auto...', Object(ZipArchive))
#3 L:\domains\autoschool.ru\www\application\classes\Controller\Main.php(15): Template_TemplateDocx->save()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php:45
2013-09-05 22:35:21 --- CRITICAL: UnexpectedValueException [ 0 ]: DirectoryIterator::__construct(docProps,docProps):  ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 45 ] in L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php:45
2013-09-05 22:35:21 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(45): DirectoryIterator->__construct('docProps')
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(53): Template_TemplateDocx->getFilesFullPath('docProps', Object(ZipArchive))
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(95): Template_TemplateDocx->getFilesFullPath('L:\domains\auto...', Object(ZipArchive))
#3 L:\domains\autoschool.ru\www\application\classes\Controller\Main.php(15): Template_TemplateDocx->save()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php:45
2013-09-05 22:37:49 --- CRITICAL: ErrorException [ 8 ]: Undefined property: DirectoryIterator::$getPathname ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 50 ] in L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php:50
2013-09-05 22:37:49 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(50): Kohana_Core::error_handler(8, 'Undefined prope...', 'L:\domains\auto...', 50, Array)
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(55): Template_TemplateDocx->getFilesFullPath('L:\domains\auto...', Object(ZipArchive))
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(97): Template_TemplateDocx->getFilesFullPath('L:\domains\auto...', Object(ZipArchive))
#3 L:\domains\autoschool.ru\www\application\classes\Controller\Main.php(15): Template_TemplateDocx->save()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php:50
2013-09-05 22:39:11 --- CRITICAL: ErrorException [ 2 ]: ZipArchive::addEmptyDir(): Invalid or unitialized Zip object ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 75 ] in file:line
2013-09-05 22:39:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'ZipArchive::add...', 'L:\domains\auto...', 75, Array)
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(75): ZipArchive->addEmptyDir('docProps')
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(101): Template_TemplateDocx->ZipDirectory('L:\domains\auto...', Object(ZipArchive))
#3 L:\domains\autoschool.ru\www\application\classes\Controller\Main.php(15): Template_TemplateDocx->save()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-09-05 22:41:10 --- CRITICAL: ErrorException [ 2 ]: ZipArchive::addEmptyDir(): Invalid or unitialized Zip object ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 75 ] in file:line
2013-09-05 22:41:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'ZipArchive::add...', 'L:\domains\auto...', 75, Array)
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(75): ZipArchive->addEmptyDir('docProps')
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(101): Template_TemplateDocx->ZipDirectory('L:\domains\auto...', Object(ZipArchive))
#3 L:\domains\autoschool.ru\www\application\classes\Controller\Main.php(15): Template_TemplateDocx->save()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-09-05 23:02:16 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method TemplateDocx::ZipDirectory() ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 75 ] in file:line
2013-09-05 23:02:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-05 23:02:23 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method TemplateDocx::ZipDirectory() ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 53 ] in file:line
2013-09-05 23:02:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-05 23:54:32 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(L:\domains\autoschool.ru\www\application\lol/test/word/document.xml): failed to open stream: No such file or directory ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 36 ] in file:line
2013-09-05 23:54:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'L:\domains\auto...', 36, Array)
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(36): file_get_contents('L:\domains\auto...')
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(25): Template_TemplateDocx->_unzip()
#3 L:\domains\autoschool.ru\www\application\classes\Controller\Main.php(12): Template_TemplateDocx->__construct('L:\domains\auto...')
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-09-05 23:57:47 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(1/L:\domains\autoschool.ru\www\application\lol/word/document.xml): failed to open stream: Invalid argument ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 36 ] in file:line
2013-09-05 23:57:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'L:\domains\auto...', 36, Array)
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(36): file_get_contents('1/L:\domains\au...')
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(25): Template_TemplateDocx->_unzip()
#3 L:\domains\autoschool.ru\www\application\classes\Controller\Main.php(12): Template_TemplateDocx->__construct('L:\domains\auto...')
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line