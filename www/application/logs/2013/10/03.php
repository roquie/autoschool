<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-03 01:21:38 --- CRITICAL: TemplatedocxException [ 0 ]: Запись в папку L:\domains\autoschool.ru\www\application\output_blanks/contracts невозможна ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 112 ] in L:\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Ajax.php:373
2013-10-03 01:21:38 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Ajax.php(373): Template_TemplateDocx->save('L:\domains\auto...')
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Lk_Ajax->action_downloadContract()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Ajax.php:373
2013-10-03 01:51:15 --- CRITICAL: ErrorException [ 2 ]: fopen(): Filename cannot be empty ~ SYSPATH\classes\Kohana\Response.php [ 453 ] in file:line
2013-10-03 01:51:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(): Filena...', 'L:\domains\auto...', 453, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Response.php(453): fopen('', 'rb')
#2 L:\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Ajax.php(355): Kohana_Response->send_file('L:\domains\auto...')
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Lk_Ajax->action_downloadZip()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-10-03 01:52:09 --- CRITICAL: ErrorException [ 2 ]: fopen(): Filename cannot be empty ~ SYSPATH\classes\Kohana\Response.php [ 453 ] in file:line
2013-10-03 01:52:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(): Filena...', 'L:\domains\auto...', 453, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Response.php(453): fopen('', 'rb')
#2 L:\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Ajax.php(357): Kohana_Response->send_file('L:\domains\auto...')
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Lk_Ajax->action_downloadZip()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-10-03 01:52:18 --- CRITICAL: ErrorException [ 2 ]: fopen(): Filename cannot be empty ~ SYSPATH\classes\Kohana\Response.php [ 453 ] in file:line
2013-10-03 01:52:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(): Filena...', 'L:\domains\auto...', 453, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Response.php(453): fopen('', 'rb')
#2 L:\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Ajax.php(357): Kohana_Response->send_file('L:\domains\auto...')
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Lk_Ajax->action_downloadZip()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-10-03 01:53:25 --- CRITICAL: ErrorException [ 2 ]: fopen(): Filename cannot be empty ~ SYSPATH\classes\Kohana\Response.php [ 453 ] in file:line
2013-10-03 01:53:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(): Filena...', 'L:\domains\auto...', 453, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Response.php(453): fopen('', 'rb')
#2 L:\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Ajax.php(357): Kohana_Response->send_file('L:\domains\auto...')
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Lk_Ajax->action_downloadZip()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-10-03 02:03:22 --- CRITICAL: ErrorException [ 2 ]: fopen(): Filename cannot be empty ~ SYSPATH\classes\Kohana\Response.php [ 453 ] in file:line
2013-10-03 02:03:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(): Filena...', 'L:\domains\auto...', 453, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Response.php(453): fopen('', 'rb')
#2 L:\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Ajax.php(359): Kohana_Response->send_file('L:\domains\auto...', NULL, Array)
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Lk_Ajax->action_downloadZip()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in file:line