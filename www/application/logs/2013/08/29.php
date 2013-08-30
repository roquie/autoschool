<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-29 19:05:51 --- CRITICAL: Google_AuthException [ 400 ]: Error fetching OAuth2 access token, message: 'invalid_grant' ~ MODPATH\googleapi\vendor\googleapi\src\auth\Google_OAuth2.php [ 115 ] in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:127
2013-08-29 19:05:51 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php(127): Google_OAuth2->authenticate(Array, '4/fZQKSjphJ7fQq...')
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php(33): Google_Client->authenticate('4/fZQKSjphJ7fQq...')
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:127
2013-08-29 19:06:15 --- CRITICAL: Google_AuthException [ 400 ]: Error fetching OAuth2 access token, message: 'invalid_grant' ~ MODPATH\googleapi\vendor\googleapi\src\auth\Google_OAuth2.php [ 115 ] in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:127
2013-08-29 19:06:15 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php(127): Google_OAuth2->authenticate(Array, '4/fZQKSjphJ7fQq...')
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php(33): Google_Client->authenticate('4/fZQKSjphJ7fQq...')
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:127
2013-08-29 19:09:25 --- CRITICAL: ErrorException [ 2 ]: http_build_query(): Parameter 1 expected to be Array or Object.  Incorrect value given ~ APPPATH\classes\Controller\Admin\Auth.php [ 26 ] in file:line
2013-08-29 19:09:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'http_build_quer...', 'L:\domains\auto...', 26, Array)
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php(26): http_build_query('https://account...')
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-08-29 19:09:26 --- CRITICAL: ErrorException [ 2 ]: http_build_query(): Parameter 1 expected to be Array or Object.  Incorrect value given ~ APPPATH\classes\Controller\Admin\Auth.php [ 26 ] in file:line
2013-08-29 19:09:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'http_build_quer...', 'L:\domains\auto...', 26, Array)
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php(26): http_build_query('https://account...')
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-08-29 20:03:32 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Admin\Auth.php [ 48 ] in L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php:48
2013-08-29 20:03:32 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php(48): Kohana_Core::error_handler(8, 'Trying to get p...', 'L:\domains\auto...', 48, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_goauth()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php:48
2013-08-29 20:04:05 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Google_Oauth2Service::__construct() must be an instance of Google_Client, null given, called in L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php on line 48 and defined ~ MODPATH\googleapi\vendor\googleapi\src\contrib\Google_Oauth2Service.php [ 107 ] in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\contrib\Google_Oauth2Service.php:107
2013-08-29 20:04:05 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\contrib\Google_Oauth2Service.php(107): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'L:\domains\auto...', 107, Array)
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php(48): Google_Oauth2Service->__construct(NULL)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_goauth()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\contrib\Google_Oauth2Service.php:107
2013-08-29 20:05:07 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Google_Oauth2Service::__construct() must be an instance of Google_Client, null given, called in L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php on line 51 and defined ~ MODPATH\googleapi\vendor\googleapi\src\contrib\Google_Oauth2Service.php [ 107 ] in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\contrib\Google_Oauth2Service.php:107
2013-08-29 20:05:07 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\contrib\Google_Oauth2Service.php(107): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'L:\domains\auto...', 107, Array)
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php(51): Google_Oauth2Service->__construct(NULL)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_goauth()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\contrib\Google_Oauth2Service.php:107
2013-08-29 20:05:10 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Google_Oauth2Service::__construct() must be an instance of Google_Client, null given, called in L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php on line 51 and defined ~ MODPATH\googleapi\vendor\googleapi\src\contrib\Google_Oauth2Service.php [ 107 ] in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\contrib\Google_Oauth2Service.php:107
2013-08-29 20:05:10 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\contrib\Google_Oauth2Service.php(107): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'L:\domains\auto...', 107, Array)
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php(51): Google_Oauth2Service->__construct(NULL)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_goauth()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\contrib\Google_Oauth2Service.php:107
2013-08-29 20:05:11 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Google_Oauth2Service::__construct() must be an instance of Google_Client, null given, called in L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php on line 51 and defined ~ MODPATH\googleapi\vendor\googleapi\src\contrib\Google_Oauth2Service.php [ 107 ] in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\contrib\Google_Oauth2Service.php:107
2013-08-29 20:05:11 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\contrib\Google_Oauth2Service.php(107): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'L:\domains\auto...', 107, Array)
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php(51): Google_Oauth2Service->__construct(NULL)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_goauth()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\contrib\Google_Oauth2Service.php:107
2013-08-29 20:05:18 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Google_Oauth2Service::__construct() must be an instance of Google_Client, null given, called in L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php on line 51 and defined ~ MODPATH\googleapi\vendor\googleapi\src\contrib\Google_Oauth2Service.php [ 107 ] in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\contrib\Google_Oauth2Service.php:107
2013-08-29 20:05:18 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\contrib\Google_Oauth2Service.php(107): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'L:\domains\auto...', 107, Array)
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php(51): Google_Oauth2Service->__construct(NULL)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_goauth()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\contrib\Google_Oauth2Service.php:107
2013-08-29 20:05:43 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Google_Oauth2Service::__construct() must be an instance of Google_Client, null given, called in L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php on line 51 and defined ~ MODPATH\googleapi\vendor\googleapi\src\contrib\Google_Oauth2Service.php [ 107 ] in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\contrib\Google_Oauth2Service.php:107
2013-08-29 20:05:43 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\contrib\Google_Oauth2Service.php(107): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'L:\domains\auto...', 107, Array)
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php(51): Google_Oauth2Service->__construct(NULL)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_goauth()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\contrib\Google_Oauth2Service.php:107
2013-08-29 20:13:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function authenticate() on a non-object ~ APPPATH\classes\Controller\Admin\Auth.php [ 48 ] in file:line
2013-08-29 20:13:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-08-29 20:14:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function authenticate() on a non-object ~ APPPATH\classes\Controller\Admin\Auth.php [ 48 ] in file:line
2013-08-29 20:14:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-08-29 20:15:21 --- CRITICAL: Google_AuthException [ 400 ]: Error fetching OAuth2 access token, message: 'invalid_request' ~ MODPATH\googleapi\vendor\googleapi\src\auth\Google_OAuth2.php [ 115 ] in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:127
2013-08-29 20:15:21 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php(127): Google_OAuth2->authenticate(Array, '4/sFwQoyFE_PadW...')
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php(54): Google_Client->authenticate('4/sFwQoyFE_PadW...')
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_goauth()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:127
2013-08-29 20:15:31 --- CRITICAL: Google_AuthException [ 400 ]: Error fetching OAuth2 access token, message: 'invalid_request' ~ MODPATH\googleapi\vendor\googleapi\src\auth\Google_OAuth2.php [ 115 ] in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:127
2013-08-29 20:15:31 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php(127): Google_OAuth2->authenticate(Array, '4/gAF3Yqzvy3p0f...')
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php(54): Google_Client->authenticate('4/gAF3Yqzvy3p0f...')
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_goauth()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:127
2013-08-29 20:17:08 --- CRITICAL: Google_AuthException [ 400 ]: Error fetching OAuth2 access token, message: 'invalid_request' ~ MODPATH\googleapi\vendor\googleapi\src\auth\Google_OAuth2.php [ 115 ] in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:127
2013-08-29 20:17:08 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php(127): Google_OAuth2->authenticate(Array, '4/UM0ISyvE-e3CV...')
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php(55): Google_Client->authenticate('4/UM0ISyvE-e3CV...')
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_goauth()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:127
2013-08-29 20:17:53 --- CRITICAL: Google_ServiceException [ 401 ]: Error calling GET https://www.googleapis.com/oauth2/v2/userinfo: (401) Login Required ~ MODPATH\googleapi\vendor\googleapi\src\io\Google_REST.php [ 66 ] in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\io\Google_REST.php:36
2013-08-29 20:17:53 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\io\Google_REST.php(36): Google_REST::decodeHttpResponse(Object(Google_HttpRequest))
#1 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\service\Google_ServiceResource.php(186): Google_REST::execute(Object(Google_HttpRequest))
#2 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\contrib\Google_Oauth2Service.php(36): Google_ServiceResource->__call('get', Array)
#3 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php(57): Google_UserinfoServiceResource->get()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_goauth()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\io\Google_REST.php:36
2013-08-29 20:51:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\Controller\Admin\Auth.php [ 56 ] in L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php:56
2013-08-29 20:51:21 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', 'L:\domains\auto...', 56, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php:56
2013-08-29 20:51:53 --- CRITICAL: Google_ServiceException [ 401 ]: Error calling GET https://www.googleapis.com/oauth2/v2/userinfo: (401) Login Required ~ MODPATH\googleapi\vendor\googleapi\src\io\Google_REST.php [ 66 ] in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\io\Google_REST.php:36
2013-08-29 20:51:53 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\io\Google_REST.php(36): Google_REST::decodeHttpResponse(Object(Google_HttpRequest))
#1 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\service\Google_ServiceResource.php(186): Google_REST::execute(Object(Google_HttpRequest))
#2 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\contrib\Google_Oauth2Service.php(36): Google_ServiceResource->__call('get', Array)
#3 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php(48): Google_UserinfoServiceResource->get()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\io\Google_REST.php:36
2013-08-29 20:54:37 --- CRITICAL: Google_ServiceException [ 401 ]: Error calling GET https://www.googleapis.com/oauth2/v2/userinfo: (401) Login Required ~ MODPATH\googleapi\vendor\googleapi\src\io\Google_REST.php [ 66 ] in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\io\Google_REST.php:36
2013-08-29 20:54:37 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\io\Google_REST.php(36): Google_REST::decodeHttpResponse(Object(Google_HttpRequest))
#1 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\service\Google_ServiceResource.php(186): Google_REST::execute(Object(Google_HttpRequest))
#2 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\contrib\Google_Oauth2Service.php(36): Google_ServiceResource->__call('get', Array)
#3 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php(48): Google_UserinfoServiceResource->get()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\io\Google_REST.php:36
2013-08-29 21:03:55 --- CRITICAL: Google_ServiceException [ 401 ]: Error calling GET https://www.googleapis.com/oauth2/v2/userinfo: (401) Login Required ~ MODPATH\googleapi\vendor\googleapi\src\io\Google_REST.php [ 66 ] in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\io\Google_REST.php:36
2013-08-29 21:03:55 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\io\Google_REST.php(36): Google_REST::decodeHttpResponse(Object(Google_HttpRequest))
#1 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\service\Google_ServiceResource.php(186): Google_REST::execute(Object(Google_HttpRequest))
#2 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\contrib\Google_Oauth2Service.php(36): Google_ServiceResource->__call('get', Array)
#3 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php(29): Google_UserinfoServiceResource->get()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\io\Google_REST.php:36
2013-08-29 21:08:06 --- CRITICAL: Google_AuthException [ 400 ]: Error fetching OAuth2 access token, message: 'invalid_grant' ~ MODPATH\googleapi\vendor\googleapi\src\auth\Google_OAuth2.php [ 115 ] in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:127
2013-08-29 21:08:06 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php(127): Google_OAuth2->authenticate(Array, '4/tFNtYXtTH4CMq...')
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php(33): Google_Client->authenticate('4/tFNtYXtTH4CMq...')
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:127
2013-08-29 21:48:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: userInfo ~ APPPATH\classes\Controller\Admin\Auth.php [ 48 ] in L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php:48
2013-08-29 21:48:21 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', 'L:\domains\auto...', 48, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_google()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php:48
2013-08-29 21:52:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: userInfo ~ APPPATH\classes\Controller\Admin\Auth.php [ 50 ] in L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php:50
2013-08-29 21:52:22 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php(50): Kohana_Core::error_handler(8, 'Undefined varia...', 'L:\domains\auto...', 50, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_google()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php:50
2013-08-29 22:13:09 --- CRITICAL: Google_AuthException [ 400 ]: Error fetching OAuth2 access token, message: 'invalid_grant' ~ MODPATH\googleapi\vendor\googleapi\src\auth\Google_OAuth2.php [ 115 ] in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:127
2013-08-29 22:13:09 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php(127): Google_OAuth2->authenticate(Array, '4/M-6Fyx_lWBcQW...')
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php(50): Google_Client->authenticate('4/M-6Fyx_lWBcQW...')
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_google()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:127
2013-08-29 22:26:47 --- CRITICAL: ErrorException [ 1 ]: Call to a member function revokeToken() on a non-object ~ APPPATH\classes\Controller\Admin\Auth.php [ 106 ] in file:line
2013-08-29 22:26:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-08-29 22:34:57 --- CRITICAL: Google_IOException [ 0 ]: HTTP Error: (0) couldn't connect to host ~ MODPATH\googleapi\vendor\googleapi\src\io\Google_CurlIO.php [ 123 ] in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\auth\Google_OAuth2.php:103
2013-08-29 22:34:57 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\auth\Google_OAuth2.php(103): Google_CurlIO->makeRequest(Object(Google_HttpRequest))
#1 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php(127): Google_OAuth2->authenticate(Array, '4/RX6hm32XBbabG...')
#2 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php(30): Google_Client->authenticate('4/RX6hm32XBbabG...')
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_google()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\auth\Google_OAuth2.php:103
2013-08-29 22:37:56 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be assigned by reference ~ APPPATH\classes\Controller\Admin\Auth.php [ 110 ] in L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php:110
2013-08-29 22:37:56 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php(110): Kohana_Core::error_handler(2048, 'Only variables ...', 'L:\domains\auto...', 110, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_logout()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php:110
2013-08-29 22:38:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH\classes\Controller\Admin\Auth.php [ 111 ] in L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php:111
2013-08-29 22:38:34 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php(111): Kohana_Core::error_handler(8, 'Undefined varia...', 'L:\domains\auto...', 111, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_logout()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php:111
2013-08-29 22:39:00 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be assigned by reference ~ APPPATH\classes\Controller\Admin\Auth.php [ 110 ] in L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php:110
2013-08-29 22:39:00 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php(110): Kohana_Core::error_handler(2048, 'Only variables ...', 'L:\domains\auto...', 110, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_logout()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php:110
2013-08-29 22:40:19 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Session_Native as array ~ APPPATH\classes\Controller\Admin\Auth.php [ 111 ] in file:line
2013-08-29 22:40:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-08-29 22:48:19 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Admin::scanDownloadedFolder() ~ APPPATH\classes\Controller\Admin.php [ 54 ] in file:line
2013-08-29 22:48:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-08-29 22:54:25 --- CRITICAL: Google_ServiceException [ 401 ]: Error calling GET https://www.googleapis.com/oauth2/v2/userinfo: (401) Login Required ~ MODPATH\googleapi\vendor\googleapi\src\io\Google_REST.php [ 66 ] in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\io\Google_REST.php:36
2013-08-29 22:54:25 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\io\Google_REST.php(36): Google_REST::decodeHttpResponse(Object(Google_HttpRequest))
#1 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\service\Google_ServiceResource.php(186): Google_REST::execute(Object(Google_HttpRequest))
#2 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\contrib\Google_Oauth2Service.php(36): Google_ServiceResource->__call('get', Array)
#3 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php(44): Google_UserinfoServiceResource->get()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_google()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\io\Google_REST.php:36
2013-08-29 22:57:13 --- CRITICAL: ErrorException [ 2 ]: Illegal string offset 'token' ~ APPPATH\classes\Controller\Admin\Auth.php [ 114 ] in L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php:114
2013-08-29 22:57:13 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php(114): Kohana_Core::error_handler(2, 'Illegal string ...', 'L:\domains\auto...', 114, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_logout()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Auth.php:114