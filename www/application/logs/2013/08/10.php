<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-10 17:29:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\WordTemplate.php [ 38 ] in D:\OpenServer\domains\localhost\www\application\classes\Controller\WordTemplate.php:38
2013-08-10 17:29:51 --- DEBUG: #0 D:\OpenServer\domains\localhost\www\application\classes\Controller\WordTemplate.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 38, Array)
#1 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#4 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\localhost\www\application\classes\Controller\WordTemplate.php:38
2013-08-10 18:23:40 --- CRITICAL: ErrorException [ 2 ]: ZipArchive::getFromName(): Invalid or unitialized Zip object ~ APPPATH\vendor\PHPWord\PHPWord\Template.php [ 74 ] in file:line
2013-08-10 18:23:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'ZipArchive::get...', 'D:\OpenServer\d...', 74, Array)
#1 D:\OpenServer\domains\localhost\www\application\vendor\PHPWord\PHPWord\Template.php(74): ZipArchive->getFromName('word/document.x...')
#2 D:\OpenServer\domains\localhost\www\application\vendor\PHPWord\PHPWord.php(223): PHPWord_Template->__construct('D:\OpenServer\d...')
#3 D:\OpenServer\domains\localhost\www\application\classes\Controller\WordTemplate.php(28): PHPWord->loadTemplate('D:\OpenServer\d...')
#4 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#7 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-08-10 18:24:23 --- CRITICAL: ErrorException [ 2 ]: ZipArchive::getFromName(): Invalid or unitialized Zip object ~ APPPATH\vendor\PHPWord\PHPWord\Template.php [ 74 ] in file:line
2013-08-10 18:24:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'ZipArchive::get...', 'D:\OpenServer\d...', 74, Array)
#1 D:\OpenServer\domains\localhost\www\application\vendor\PHPWord\PHPWord\Template.php(74): ZipArchive->getFromName('word/document.x...')
#2 D:\OpenServer\domains\localhost\www\application\vendor\PHPWord\PHPWord.php(223): PHPWord_Template->__construct('D:\OpenServer\d...')
#3 D:\OpenServer\domains\localhost\www\application\classes\Controller\WordTemplate.php(28): PHPWord->loadTemplate('D:\OpenServer\d...')
#4 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#7 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-08-10 18:25:26 --- CRITICAL: ErrorException [ 2 ]: ZipArchive::getFromName(): Invalid or unitialized Zip object ~ APPPATH\vendor\PHPWord\PHPWord\Template.php [ 74 ] in file:line
2013-08-10 18:25:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'ZipArchive::get...', 'D:\OpenServer\d...', 74, Array)
#1 D:\OpenServer\domains\localhost\www\application\vendor\PHPWord\PHPWord\Template.php(74): ZipArchive->getFromName('word/document.x...')
#2 D:\OpenServer\domains\localhost\www\application\vendor\PHPWord\PHPWord.php(223): PHPWord_Template->__construct('D:\OpenServer\d...')
#3 D:\OpenServer\domains\localhost\www\application\classes\Controller\WordTemplate.php(28): PHPWord->loadTemplate('D:\OpenServer\d...')
#4 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#7 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-08-10 18:25:57 --- CRITICAL: ErrorException [ 2 ]: ZipArchive::getFromName(): Invalid or unitialized Zip object ~ APPPATH\vendor\PHPWord\PHPWord\Template.php [ 74 ] in file:line
2013-08-10 18:25:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'ZipArchive::get...', 'D:\OpenServer\d...', 74, Array)
#1 D:\OpenServer\domains\localhost\www\application\vendor\PHPWord\PHPWord\Template.php(74): ZipArchive->getFromName('word/document.x...')
#2 D:\OpenServer\domains\localhost\www\application\vendor\PHPWord\PHPWord.php(223): PHPWord_Template->__construct('D:\OpenServer\d...')
#3 D:\OpenServer\domains\localhost\www\application\classes\Controller\WordTemplate.php(28): PHPWord->loadTemplate('D:\OpenServer\d...')
#4 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#7 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-08-10 18:26:35 --- CRITICAL: ErrorException [ 2 ]: ZipArchive::getFromName(): Invalid or unitialized Zip object ~ APPPATH\vendor\PHPWord\PHPWord\Template.php [ 74 ] in file:line
2013-08-10 18:26:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'ZipArchive::get...', 'D:\OpenServer\d...', 74, Array)
#1 D:\OpenServer\domains\localhost\www\application\vendor\PHPWord\PHPWord\Template.php(74): ZipArchive->getFromName('word/document.x...')
#2 D:\OpenServer\domains\localhost\www\application\vendor\PHPWord\PHPWord.php(223): PHPWord_Template->__construct('D:\OpenServer\d...')
#3 D:\OpenServer\domains\localhost\www\application\classes\Controller\WordTemplate.php(28): PHPWord->loadTemplate('D:\OpenServer\d...')
#4 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#7 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-08-10 23:33:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fam ~ APPPATH\classes\Controller\WordTemplate.php [ 60 ] in D:\OpenServer\domains\localhost\www\application\classes\Controller\WordTemplate.php:60
2013-08-10 23:33:15 --- DEBUG: #0 D:\OpenServer\domains\localhost\www\application\classes\Controller\WordTemplate.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 60, Array)
#1 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#4 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\localhost\www\application\classes\Controller\WordTemplate.php:60