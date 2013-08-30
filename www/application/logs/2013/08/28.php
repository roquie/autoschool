<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-28 21:38:01 --- CRITICAL: ErrorException [ 1 ]: Class 'Google_Client' not found ~ APPPATH\classes\Controller\Admin\Upload.php [ 8 ] in file:line
2013-08-28 21:38:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-08-28 21:38:35 --- CRITICAL: ErrorException [ 1 ]: Class 'Google_DriveService' not found ~ APPPATH\classes\Controller\Admin\Upload.php [ 15 ] in file:line
2013-08-28 21:38:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-08-28 22:07:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\classes\Controller\Admin\Upload.php [ 50 ] in file:line
2013-08-28 22:07:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-08-28 22:07:44 --- CRITICAL: Kohana_Kohana_Exception [ 0 ]: You must fill the oauth2_client_id in the config file ~ MODPATH\googleapi\classes\GoogleAPI\Client.php [ 17 ] in L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Upload.php:8
2013-08-28 22:07:44 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Upload.php(8): GoogleAPI_Client->__construct()
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Upload->action_google()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Upload))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Upload.php:8
2013-08-28 22:09:11 --- CRITICAL: Kohana_Kohana_Exception [ 0 ]: You must fill the developer_key in the config file ~ MODPATH\googleapi\classes\GoogleAPI\Client.php [ 29 ] in L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Upload.php:8
2013-08-28 22:09:11 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Upload.php(8): GoogleAPI_Client->__construct()
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Upload->action_google()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Upload))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Upload.php:8
2013-08-28 22:09:44 --- CRITICAL: ErrorException [ 1 ]: Class 'apiOAuth2' not found ~ MODPATH\googleapi\vendor\src\Google_Client.php [ 182 ] in file:line
2013-08-28 22:09:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-08-28 22:49:37 --- CRITICAL: ErrorException [ 1 ]: Class 'Google_DriveService' not found ~ APPPATH\classes\Controller\Admin\Upload.php [ 15 ] in file:line
2013-08-28 22:49:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-08-28 22:50:02 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant STDIN - assumed 'STDIN' ~ APPPATH\classes\Controller\Admin\Upload.php [ 22 ] in L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Upload.php:22
2013-08-28 22:50:02 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Upload.php(22): Kohana_Core::error_handler(8, 'Use of undefine...', 'L:\domains\auto...', 22, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Upload->action_google()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Upload))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Upload.php:22
2013-08-28 22:52:16 --- CRITICAL: Google_AuthException [ 400 ]: Error fetching OAuth2 access token, message: 'invalid_grant' ~ MODPATH\googleapi\vendor\googleapi\src\auth\Google_OAuth2.php [ 115 ] in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:127
2013-08-28 22:52:16 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php(127): Google_OAuth2->authenticate(Array, '4/Zdu7pr7zUqAZ2...')
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Upload.php(25): Google_Client->authenticate('4/Zdu7pr7zUqAZ2...')
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Upload->action_google()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Upload))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:127
2013-08-28 23:08:58 --- CRITICAL: Google_AuthException [ 400 ]: Error fetching OAuth2 access token, message: 'invalid_grant' ~ MODPATH\googleapi\vendor\googleapi\src\auth\Google_OAuth2.php [ 115 ] in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:127
2013-08-28 23:08:58 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php(127): Google_OAuth2->authenticate(Array, '4/ftq5L8hCGjZNx...')
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Upload.php(25): Google_Client->authenticate('4/ftq5L8hCGjZNx...')
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Upload->action_google()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Upload))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:127
2013-08-28 23:09:09 --- CRITICAL: Google_AuthException [ 400 ]: Error fetching OAuth2 access token, message: 'invalid_grant' ~ MODPATH\googleapi\vendor\googleapi\src\auth\Google_OAuth2.php [ 115 ] in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:127
2013-08-28 23:09:09 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php(127): Google_OAuth2->authenticate(Array, '4/Zdu7pr7zUqAZ2...')
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Upload.php(25): Google_Client->authenticate('4/Zdu7pr7zUqAZ2...')
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Upload->action_google()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Upload))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:127
2013-08-28 23:20:00 --- CRITICAL: Google_AuthException [ 400 ]: Error fetching OAuth2 access token, message: 'invalid_grant' ~ MODPATH\googleapi\vendor\googleapi\src\auth\Google_OAuth2.php [ 115 ] in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:127
2013-08-28 23:20:00 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php(127): Google_OAuth2->authenticate(Array, '4/Zdu7pr7zUqAZ2...')
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Upload.php(25): Google_Client->authenticate('4/Zdu7pr7zUqAZ2...')
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Upload->action_google()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Upload))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:127