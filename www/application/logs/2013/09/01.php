<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-01 13:05:36 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Controller\Ajax.php [ 94 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Ajax.php:94
2013-09-01 13:05:36 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Ajax.php(94): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\OpenServer\d...', 94, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(30): Controller_Ajax->ajax_msg(Array, 'error')
#2 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Ajax.php:94
2013-09-01 13:06:42 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Controller\Ajax.php [ 94 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Ajax.php:94
2013-09-01 13:06:42 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Ajax.php(94): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\OpenServer\d...', 94, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(31): Controller_Ajax->ajax_msg(Array, 'error')
#2 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Ajax.php:94
2013-09-01 21:05:50 --- CRITICAL: ErrorException [ 2 ]: fopen(): Filename cannot be empty ~ SYSPATH\classes\Kohana\Response.php [ 453 ] in file:line
2013-09-01 21:05:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(): Filena...', 'D:\OpenServer\d...', 453, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Response.php(453): fopen('', 'rb')
#2 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Updownload.php(23): Kohana_Response->send_file('D:\OpenServer\d...')
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Updownload->action_download()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Updownload))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-09-01 21:07:24 --- CRITICAL: ErrorException [ 2 ]: fopen(): Filename cannot be empty ~ SYSPATH\classes\Kohana\Response.php [ 453 ] in file:line
2013-09-01 21:07:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(): Filena...', 'D:\OpenServer\d...', 453, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Response.php(453): fopen('', 'rb')
#2 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Updownload.php(23): Kohana_Response->send_file('D:\OpenServer\d...')
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Updownload->action_download()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Updownload))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in file:line