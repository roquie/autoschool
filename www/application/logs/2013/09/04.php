<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-04 17:52:24 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function getFilesFullPath() ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 58 ] in file:line
2013-09-04 17:52:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-04 17:57:52 --- CRITICAL: ErrorException [ 2 ]: ZipArchive::addEmptyDir(): Invalid or unitialized Zip object ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 62 ] in file:line
2013-09-04 17:57:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'ZipArchive::add...', 'L:\domains\auto...', 62, Array)
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(62): ZipArchive->addEmptyDir('docProps')
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(90): Template_TemplateDocx->ZipDirectory('L:\domains\auto...', 'L:\domains\auto...')
#3 L:\domains\autoschool.ru\www\application\classes\Controller\Main.php(15): Template_TemplateDocx->save()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-09-04 21:38:20 --- CRITICAL: ErrorException [ 2 ]: ZipArchive::addFile(): Invalid or unitialized Zip object ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 47 ] in file:line
2013-09-04 21:38:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'ZipArchive::add...', 'L:\domains\auto...', 47, Array)
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(47): ZipArchive->addFile('L:\domains\auto...')
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(79): Template_TemplateDocx->getFilesFullPath('L:\domains\auto...')
#3 L:\domains\autoschool.ru\www\application\classes\Controller\Main.php(15): Template_TemplateDocx->save()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-09-04 21:38:47 --- CRITICAL: ErrorException [ 2 ]: ZipArchive::addFile(): Invalid or unitialized Zip object ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 47 ] in file:line
2013-09-04 21:38:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'ZipArchive::add...', 'L:\domains\auto...', 47, Array)
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(47): ZipArchive->addFile('L:\domains\auto...', 'app.xml')
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(79): Template_TemplateDocx->getFilesFullPath('L:\domains\auto...')
#3 L:\domains\autoschool.ru\www\application\classes\Controller\Main.php(15): Template_TemplateDocx->save()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-09-04 23:33:18 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 56 ] in file:line
2013-09-04 23:33:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-04 23:33:42 --- CRITICAL: UnexpectedValueException [ 0 ]: RecursiveDirectoryIterator::__construct(L:\domains\autoschool.ru\www\application\test/L:\domains\autoschool.ru\www\application\test\./,L:\domains\autoschool.ru\www\application\test/L:\domains\autoschool.ru\www\application\test\./):  ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 56 ] in L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php:56
2013-09-04 23:33:42 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(56): RecursiveDirectoryIterator->__construct('L:\domains\auto...')
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(65): Template_TemplateDocx->ZipDirectory('L:\domains\auto...', Object(ZipArchive), 'L:\domains\auto...')
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(88): Template_TemplateDocx->ZipDirectory('L:\domains\auto...', Object(ZipArchive))
#3 L:\domains\autoschool.ru\www\application\classes\Controller\Main.php(15): Template_TemplateDocx->save()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php:56
2013-09-04 23:36:58 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 56 ] in file:line
2013-09-04 23:36:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line