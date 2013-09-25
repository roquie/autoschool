<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-24 20:21:16 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Kohana_Goauth::getAuthData() should not be called statically, assuming $this from incompatible context ~ MODPATH\goauth\classes\Controller\Goauth\Auth.php [ 9 ] in L:\domains\autoschool.ru\www\modules\goauth\classes\Controller\Goauth\Auth.php:9
2013-09-24 20:21:16 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\goauth\classes\Controller\Goauth\Auth.php(9): Kohana_Core::error_handler(2048, 'Non-static meth...', 'L:\domains\auto...', 9, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Goauth_Auth->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Goauth_Auth))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\modules\goauth\classes\Controller\Goauth\Auth.php:9
2013-09-24 20:27:39 --- CRITICAL: GOAuthException [ 0 ]: Не получен код ответа от гугла ($_GET параметр code) ИЛИ нажата кнопка отмены ~ MODPATH\goauth\classes\Kohana\Goauth.php [ 73 ] in L:\domains\autoschool.ru\www\modules\goauth\classes\Controller\Goauth\Auth.php:16
2013-09-24 20:27:39 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\goauth\classes\Controller\Goauth\Auth.php(16): Kohana_Goauth->getUserData(NULL)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Goauth_Auth->action_goauth()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Goauth_Auth))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\modules\goauth\classes\Controller\Goauth\Auth.php:16
2013-09-24 20:27:47 --- CRITICAL: GOAuthException [ 0 ]: Не получен код ответа от гугла ($_GET параметр code) ИЛИ нажата кнопка отмены ~ MODPATH\goauth\classes\Kohana\Goauth.php [ 73 ] in L:\domains\autoschool.ru\www\modules\goauth\classes\Controller\Goauth\Auth.php:16
2013-09-24 20:27:47 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\goauth\classes\Controller\Goauth\Auth.php(16): Kohana_Goauth->getUserData(NULL)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Goauth_Auth->action_goauth()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Goauth_Auth))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\modules\goauth\classes\Controller\Goauth\Auth.php:16
2013-09-24 20:27:53 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_PreReg' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2013-09-24 20:27:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-24 20:30:53 --- CRITICAL: ErrorException [ 8 ]: Undefined index: first_name ~ MODPATH\goauth\classes\Controller\Goauth\Auth.php [ 41 ] in L:\domains\autoschool.ru\www\modules\goauth\classes\Controller\Goauth\Auth.php:41
2013-09-24 20:30:53 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\goauth\classes\Controller\Goauth\Auth.php(41): Kohana_Core::error_handler(8, 'Undefined index...', 'L:\domains\auto...', 41, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Goauth_Auth->action_goauth()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Goauth_Auth))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\modules\goauth\classes\Controller\Goauth\Auth.php:41
2013-09-24 20:33:57 --- CRITICAL: ErrorException [ 8 ]: Undefined index: first_name ~ MODPATH\goauth\classes\Controller\Goauth\Auth.php [ 43 ] in L:\domains\autoschool.ru\www\modules\goauth\classes\Controller\Goauth\Auth.php:43
2013-09-24 20:33:57 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\goauth\classes\Controller\Goauth\Auth.php(43): Kohana_Core::error_handler(8, 'Undefined index...', 'L:\domains\auto...', 43, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Goauth_Auth->action_goauth()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Goauth_Auth))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\modules\goauth\classes\Controller\Goauth\Auth.php:43
2013-09-24 21:33:31 --- CRITICAL: ErrorException [ 8 ]: Undefined index: photo ~ MODPATH\goauth\classes\Controller\Goauth\Auth.php [ 37 ] in L:\domains\autoschool.ru\www\modules\goauth\classes\Controller\Goauth\Auth.php:37
2013-09-24 21:33:31 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\goauth\classes\Controller\Goauth\Auth.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'L:\domains\auto...', 37, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Goauth_Auth->action_goauth()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Goauth_Auth))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\modules\goauth\classes\Controller\Goauth\Auth.php:37
2013-09-24 23:22:36 --- CRITICAL: TemplatedocxException [ 0 ]: Запись в папку L:\domains\autoschool.ru\www\application\output_blanks/contracts невозможна ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 112 ] in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:22:36 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(98): Template_TemplateDocx->save('L:\domains\auto...')
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:24:54 --- CRITICAL: TemplatedocxException [ 0 ]: Запись в папку L:\domains\autoschool.ru\www\application\output_blanks/contracts невозможна ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 112 ] in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:24:54 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(98): Template_TemplateDocx->save('L:\domains\auto...')
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:25:00 --- CRITICAL: TemplatedocxException [ 0 ]: Запись в папку L:\domains\autoschool.ru\www\application\output_blanks/contracts невозможна ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 112 ] in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:25:00 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(98): Template_TemplateDocx->save('L:\domains\auto...')
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:25:01 --- CRITICAL: TemplatedocxException [ 0 ]: Запись в папку L:\domains\autoschool.ru\www\application\output_blanks/contracts невозможна ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 112 ] in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:25:01 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(98): Template_TemplateDocx->save('L:\domains\auto...')
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:25:02 --- CRITICAL: TemplatedocxException [ 0 ]: Запись в папку L:\domains\autoschool.ru\www\application\output_blanks/contracts невозможна ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 112 ] in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:25:02 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(98): Template_TemplateDocx->save('L:\domains\auto...')
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:25:02 --- CRITICAL: TemplatedocxException [ 0 ]: Запись в папку L:\domains\autoschool.ru\www\application\output_blanks/contracts невозможна ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 112 ] in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:25:02 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(98): Template_TemplateDocx->save('L:\domains\auto...')
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:25:02 --- CRITICAL: TemplatedocxException [ 0 ]: Запись в папку L:\domains\autoschool.ru\www\application\output_blanks/contracts невозможна ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 112 ] in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:25:02 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(98): Template_TemplateDocx->save('L:\domains\auto...')
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:26:00 --- CRITICAL: TemplatedocxException [ 0 ]: Запись в папку L:\domains\autoschool.ru\www\application\output_blanks/contracts невозможна ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 112 ] in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:26:00 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(98): Template_TemplateDocx->save('L:\domains\auto...')
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:28:01 --- CRITICAL: TemplatedocxException [ 0 ]: Запись в папку L:\domains\autoschool.ru\www\application\output_blanks/contracts невозможна ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 112 ] in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:28:01 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(98): Template_TemplateDocx->save('L:\domains\auto...')
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:28:19 --- CRITICAL: ErrorException [ 2 ]: rmdir(L:\domains\autoschool.ru\www\application\templates/zayavlenie/template/): Directory not empty ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 143 ] in file:line
2013-09-24 23:28:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'rmdir(L:\domain...', 'L:\domains\auto...', 143, Array)
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(143): rmdir('L:\domains\auto...')
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(122): Template_TemplateDocx->deleteLocalDir('L:\domains\auto...')
#3 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(66): Template_TemplateDocx->save('L:\domains\auto...')
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-09-24 23:28:19 --- CRITICAL: ErrorException [ 2 ]: ZipArchive::extractTo(L:\domains\autoschool.ru\www\application\templates/zayavlenie/template//_rels/.rels): failed to open stream: Permission denied ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 62 ] in file:line
2013-09-24 23:28:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'ZipArchive::ext...', 'L:\domains\auto...', 62, Array)
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(62): ZipArchive->extractTo('L:\domains\auto...')
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(49): Template_TemplateDocx->_unzip()
#3 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(45): Template_TemplateDocx->__construct('L:\domains\auto...')
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-09-24 23:28:19 --- CRITICAL: ErrorException [ 2 ]: ZipArchive::extractTo(L:\domains\autoschool.ru\www\application\templates/zayavlenie/template//_rels/.rels): failed to open stream: Permission denied ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 62 ] in file:line
2013-09-24 23:28:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'ZipArchive::ext...', 'L:\domains\auto...', 62, Array)
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(62): ZipArchive->extractTo('L:\domains\auto...')
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(49): Template_TemplateDocx->_unzip()
#3 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(45): Template_TemplateDocx->__construct('L:\domains\auto...')
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-09-24 23:28:19 --- CRITICAL: ErrorException [ 2 ]: ZipArchive::extractTo(L:\domains\autoschool.ru\www\application\templates/zayavlenie/template//_rels/.rels): failed to open stream: Permission denied ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 62 ] in file:line
2013-09-24 23:28:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'ZipArchive::ext...', 'L:\domains\auto...', 62, Array)
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(62): ZipArchive->extractTo('L:\domains\auto...')
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(49): Template_TemplateDocx->_unzip()
#3 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(45): Template_TemplateDocx->__construct('L:\domains\auto...')
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-09-24 23:28:19 --- CRITICAL: ErrorException [ 2 ]: ZipArchive::extractTo(L:\domains\autoschool.ru\www\application\templates/zayavlenie/template//_rels/.rels): failed to open stream: Permission denied ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 62 ] in file:line
2013-09-24 23:28:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'ZipArchive::ext...', 'L:\domains\auto...', 62, Array)
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(62): ZipArchive->extractTo('L:\domains\auto...')
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(49): Template_TemplateDocx->_unzip()
#3 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(45): Template_TemplateDocx->__construct('L:\domains\auto...')
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-09-24 23:28:20 --- CRITICAL: UnexpectedValueException [ 0 ]: RecursiveDirectoryIterator::__construct(L:\domains\autoschool.ru\www\application\templates/zayavlenie/template\_rels,L:\domains\autoschool.ru\www\application\templates/zayavlenie/template\_rels):  ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 135 ] in file:line
2013-09-24 23:28:20 --- DEBUG: #0 [internal function]: RecursiveDirectoryIterator->__construct('L:\domains\auto...', 4096)
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(135): RecursiveDirectoryIterator->getChildren()
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(122): Template_TemplateDocx->deleteLocalDir('L:\domains\auto...')
#3 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(66): Template_TemplateDocx->save('L:\domains\auto...')
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-09-24 23:28:21 --- CRITICAL: TemplatedocxException [ 0 ]: Запись в папку L:\domains\autoschool.ru\www\application\output_blanks/contracts невозможна ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 112 ] in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:28:21 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(98): Template_TemplateDocx->save('L:\domains\auto...')
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:28:23 --- CRITICAL: ErrorException [ 2 ]: unlink(L:\domains\autoschool.ru\www\application\templates/zayavlenie/template\word\document.xml): Permission denied ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 139 ] in file:line
2013-09-24 23:28:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unlink(L:\domai...', 'L:\domains\auto...', 139, Array)
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(139): unlink('L:\domains\auto...')
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(122): Template_TemplateDocx->deleteLocalDir('L:\domains\auto...')
#3 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(66): Template_TemplateDocx->save('L:\domains\auto...')
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-09-24 23:28:23 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(L:\domains\autoschool.ru\www\application\templates/zayavlenie/template/word/document.xml): failed to open stream: No such file or directory ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 66 ] in file:line
2013-09-24 23:28:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'L:\domains\auto...', 66, Array)
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(66): file_get_contents('L:\domains\auto...')
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(49): Template_TemplateDocx->_unzip()
#3 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(45): Template_TemplateDocx->__construct('L:\domains\auto...')
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-09-24 23:28:23 --- CRITICAL: ErrorException [ 2 ]: rmdir(L:\domains\autoschool.ru\www\application\templates/zayavlenie/template/): Directory not empty ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 143 ] in file:line
2013-09-24 23:28:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'rmdir(L:\domain...', 'L:\domains\auto...', 143, Array)
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(143): rmdir('L:\domains\auto...')
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(122): Template_TemplateDocx->deleteLocalDir('L:\domains\auto...')
#3 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(66): Template_TemplateDocx->save('L:\domains\auto...')
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-09-24 23:28:23 --- CRITICAL: ErrorException [ 2 ]: unlink(L:\domains\autoschool.ru\www\application\templates/zayavlenie/template\docProps\app.xml): Permission denied ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 139 ] in file:line
2013-09-24 23:28:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unlink(L:\domai...', 'L:\domains\auto...', 139, Array)
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(139): unlink('L:\domains\auto...')
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(122): Template_TemplateDocx->deleteLocalDir('L:\domains\auto...')
#3 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(66): Template_TemplateDocx->save('L:\domains\auto...')
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-09-24 23:28:23 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(L:\domains\autoschool.ru\www\application\templates/zayavlenie/template/word/document.xml): failed to open stream: No such file or directory ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 66 ] in file:line
2013-09-24 23:28:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'L:\domains\auto...', 66, Array)
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(66): file_get_contents('L:\domains\auto...')
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(49): Template_TemplateDocx->_unzip()
#3 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(45): Template_TemplateDocx->__construct('L:\domains\auto...')
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-09-24 23:28:23 --- CRITICAL: ErrorException [ 2 ]: ZipArchive::extractTo(L:\domains\autoschool.ru\www\application\templates/zayavlenie/template//_rels/.rels): failed to open stream: Permission denied ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 62 ] in file:line
2013-09-24 23:28:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'ZipArchive::ext...', 'L:\domains\auto...', 62, Array)
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(62): ZipArchive->extractTo('L:\domains\auto...')
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(49): Template_TemplateDocx->_unzip()
#3 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(45): Template_TemplateDocx->__construct('L:\domains\auto...')
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-09-24 23:28:24 --- CRITICAL: TemplatedocxException [ 0 ]: Запись в папку L:\domains\autoschool.ru\www\application\output_blanks/contracts невозможна ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 112 ] in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:28:24 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(98): Template_TemplateDocx->save('L:\domains\auto...')
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:28:29 --- CRITICAL: TemplatedocxException [ 0 ]: Запись в папку L:\domains\autoschool.ru\www\application\output_blanks/contracts невозможна ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 112 ] in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:28:29 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(98): Template_TemplateDocx->save('L:\domains\auto...')
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:28:31 --- CRITICAL: TemplatedocxException [ 0 ]: Запись в папку L:\domains\autoschool.ru\www\application\output_blanks/contracts невозможна ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 112 ] in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:28:31 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(98): Template_TemplateDocx->save('L:\domains\auto...')
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:28:31 --- CRITICAL: ErrorException [ 2 ]: rmdir(L:\domains\autoschool.ru\www\application\templates/zayavlenie/template\word): Directory not empty ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 137 ] in file:line
2013-09-24 23:28:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'rmdir(L:\domain...', 'L:\domains\auto...', 137, Array)
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(137): rmdir('L:\domains\auto...')
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(122): Template_TemplateDocx->deleteLocalDir('L:\domains\auto...')
#3 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(66): Template_TemplateDocx->save('L:\domains\auto...')
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-09-24 23:28:31 --- CRITICAL: ErrorException [ 2 ]: ZipArchive::extractTo(L:\domains\autoschool.ru\www\application\templates/zayavlenie/template//word\_rels/document.xml.rels): failed to open stream: Permission denied ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 62 ] in file:line
2013-09-24 23:28:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'ZipArchive::ext...', 'L:\domains\auto...', 62, Array)
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(62): ZipArchive->extractTo('L:\domains\auto...')
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(49): Template_TemplateDocx->_unzip()
#3 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(45): Template_TemplateDocx->__construct('L:\domains\auto...')
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-09-24 23:28:32 --- CRITICAL: TemplatedocxException [ 0 ]: Запись в папку L:\domains\autoschool.ru\www\application\output_blanks/contracts невозможна ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 112 ] in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:28:32 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(98): Template_TemplateDocx->save('L:\domains\auto...')
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:28:33 --- CRITICAL: TemplatedocxException [ 0 ]: Запись в папку L:\domains\autoschool.ru\www\application\output_blanks/contracts невозможна ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 112 ] in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:28:33 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(98): Template_TemplateDocx->save('L:\domains\auto...')
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:28:55 --- CRITICAL: TemplatedocxException [ 0 ]: Запись в папку L:\domains\autoschool.ru\www\application\output_blanks/contracts невозможна ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 112 ] in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:28:55 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(98): Template_TemplateDocx->save('L:\domains\auto...')
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:29:23 --- CRITICAL: TemplatedocxException [ 0 ]: Запись в папку L:\domains\autoschool.ru\www\application\output_blanks/contracts невозможна ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 112 ] in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:29:23 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(98): Template_TemplateDocx->save('L:\domains\auto...')
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:29:25 --- CRITICAL: ErrorException [ 2 ]: rmdir(L:\domains\autoschool.ru\www\application\templates/zayavlenie/template\word\_rels): Directory not empty ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 137 ] in file:line
2013-09-24 23:29:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'rmdir(L:\domain...', 'L:\domains\auto...', 137, Array)
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(137): rmdir('L:\domains\auto...')
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(122): Template_TemplateDocx->deleteLocalDir('L:\domains\auto...')
#3 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(66): Template_TemplateDocx->save('L:\domains\auto...')
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-09-24 23:29:25 --- CRITICAL: ErrorException [ 2 ]: unlink(L:\domains\autoschool.ru\www\application\templates/zayavlenie/template\word\settings.xml): Permission denied ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 139 ] in file:line
2013-09-24 23:29:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unlink(L:\domai...', 'L:\domains\auto...', 139, Array)
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(139): unlink('L:\domains\auto...')
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(122): Template_TemplateDocx->deleteLocalDir('L:\domains\auto...')
#3 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(66): Template_TemplateDocx->save('L:\domains\auto...')
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-09-24 23:29:25 --- CRITICAL: ErrorException [ 2 ]: rmdir(L:\domains\autoschool.ru\www\application\templates/zayavlenie/template/): Directory not empty ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 143 ] in file:line
2013-09-24 23:29:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'rmdir(L:\domain...', 'L:\domains\auto...', 143, Array)
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(143): rmdir('L:\domains\auto...')
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(122): Template_TemplateDocx->deleteLocalDir('L:\domains\auto...')
#3 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(66): Template_TemplateDocx->save('L:\domains\auto...')
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-09-24 23:29:26 --- CRITICAL: ErrorException [ 2 ]: rmdir(L:\domains\autoschool.ru\www\application\templates/zayavlenie/template\_rels): Directory not empty ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 137 ] in file:line
2013-09-24 23:29:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'rmdir(L:\domain...', 'L:\domains\auto...', 137, Array)
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(137): rmdir('L:\domains\auto...')
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(122): Template_TemplateDocx->deleteLocalDir('L:\domains\auto...')
#3 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(66): Template_TemplateDocx->save('L:\domains\auto...')
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-09-24 23:29:26 --- CRITICAL: ErrorException [ 2 ]: rmdir(L:\domains\autoschool.ru\www\application\templates/zayavlenie/template/): Directory not empty ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 143 ] in file:line
2013-09-24 23:29:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'rmdir(L:\domain...', 'L:\domains\auto...', 143, Array)
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(143): rmdir('L:\domains\auto...')
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(122): Template_TemplateDocx->deleteLocalDir('L:\domains\auto...')
#3 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(66): Template_TemplateDocx->save('L:\domains\auto...')
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-09-24 23:29:26 --- CRITICAL: ErrorException [ 2 ]: ZipArchive::extractTo(L:\domains\autoschool.ru\www\application\templates/zayavlenie/template//_rels/.rels): failed to open stream: Permission denied ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 62 ] in file:line
2013-09-24 23:29:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'ZipArchive::ext...', 'L:\domains\auto...', 62, Array)
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(62): ZipArchive->extractTo('L:\domains\auto...')
#2 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(49): Template_TemplateDocx->_unzip()
#3 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(45): Template_TemplateDocx->__construct('L:\domains\auto...')
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-09-24 23:29:27 --- CRITICAL: TemplatedocxException [ 0 ]: Запись в папку L:\domains\autoschool.ru\www\application\output_blanks/contracts невозможна ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 112 ] in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:29:27 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(98): Template_TemplateDocx->save('L:\domains\auto...')
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:29:27 --- CRITICAL: TemplatedocxException [ 0 ]: Запись в папку L:\domains\autoschool.ru\www\application\output_blanks/contracts невозможна ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 112 ] in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:29:27 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(98): Template_TemplateDocx->save('L:\domains\auto...')
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:30:34 --- CRITICAL: TemplatedocxException [ 0 ]: Запись в папку L:\domains\autoschool.ru\www\application\output_blanks/contracts невозможна ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 112 ] in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:30:34 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(98): Template_TemplateDocx->save('L:\domains\auto...')
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:98
2013-09-24 23:45:38 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\lk\classes\Controller\Lk\Lk.php [ 281 ] in L:\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Lk.php:281
2013-09-24 23:45:38 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Lk.php(281): Kohana_Core::error_handler(8, 'Trying to get p...', 'L:\domains\auto...', 281, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Lk_Lk->action_downloadStatement()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Lk))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Lk.php:281
2013-09-24 23:47:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index: familiya ~ MODPATH\lk\classes\Controller\Lk\Lk.php [ 281 ] in L:\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Lk.php:281
2013-09-24 23:47:37 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Lk.php(281): Kohana_Core::error_handler(8, 'Undefined index...', 'L:\domains\auto...', 281, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Lk_Lk->action_downloadStatement()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Lk))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Lk.php:281
2013-09-24 23:54:45 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type TemplateDocx as array ~ MODPATH\lk\classes\Controller\Lk\Lk.php [ 321 ] in file:line
2013-09-24 23:54:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-24 23:56:04 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type TemplateDocx as array ~ MODPATH\lk\classes\Controller\Lk\Lk.php [ 321 ] in file:line
2013-09-24 23:56:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line