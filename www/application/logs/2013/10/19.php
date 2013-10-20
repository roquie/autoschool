<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-19 00:29:28 --- CRITICAL: ErrorException [ 8 ]: Undefined index: dev_key ~ MODPATH\googleapi\classes\Google\Google.php [ 45 ] in L:\domains\autoschool.ru\www\modules\googleapi\classes\Google\Google.php:45
2013-10-19 00:29:28 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\classes\Google\Google.php(45): Kohana_Core::error_handler(8, 'Undefined index...', 'L:\domains\auto...', 45, Array)
#1 L:\domains\autoschool.ru\www\modules\googleapi\classes\Controller\GoogleAPI\Auth.php(15): Google_Google->auth(NULL)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_GoogleAPI_Auth->action_google()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleAPI_Auth))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\modules\googleapi\classes\Google\Google.php:45
2013-10-19 00:43:45 --- CRITICAL: Google_AuthException [ 0 ]: Could not json decode the token ~ MODPATH\googleapi\vendor\googleapi\src\auth\Google_OAuth2.php [ 162 ] in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:170
2013-10-19 00:43:45 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php(170): Google_OAuth2->setAccessToken('AIzaSyCvaaVlh19...')
#1 L:\domains\autoschool.ru\www\modules\googleapi\classes\Google\Google.php(45): Google_Client->setAccessToken('AIzaSyCvaaVlh19...')
#2 L:\domains\autoschool.ru\www\modules\googleapi\classes\Controller\GoogleAPI\Auth.php(15): Google_Google->auth(NULL)
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_GoogleAPI_Auth->action_google()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleAPI_Auth))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:170
2013-10-19 00:44:01 --- CRITICAL: Google_AuthException [ 0 ]: Could not json decode the token ~ MODPATH\googleapi\vendor\googleapi\src\auth\Google_OAuth2.php [ 162 ] in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:170
2013-10-19 00:44:01 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php(170): Google_OAuth2->setAccessToken('AIzaSyCvaaVlh19...')
#1 L:\domains\autoschool.ru\www\modules\googleapi\classes\Google\Google.php(45): Google_Client->setAccessToken('AIzaSyCvaaVlh19...')
#2 L:\domains\autoschool.ru\www\modules\googleapi\classes\Controller\GoogleAPI\Auth.php(15): Google_Google->auth('4/ok4WBhfvcuUfV...')
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_GoogleAPI_Auth->action_google()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleAPI_Auth))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:170
2013-10-19 00:46:39 --- CRITICAL: Google_AuthException [ 0 ]: Could not json decode the token ~ MODPATH\googleapi\vendor\googleapi\src\auth\Google_OAuth2.php [ 162 ] in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:170
2013-10-19 00:46:39 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php(170): Google_OAuth2->setAccessToken(NULL)
#1 L:\domains\autoschool.ru\www\modules\googleapi\classes\Google\Google.php(61): Google_Client->setAccessToken('null')
#2 L:\domains\autoschool.ru\www\modules\googleapi\classes\Controller\GoogleAPI\Auth.php(15): Google_Google->auth(NULL)
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_GoogleAPI_Auth->action_google()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleAPI_Auth))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:170
2013-10-19 00:46:47 --- CRITICAL: Google_AuthException [ 0 ]: Could not json decode the token ~ MODPATH\googleapi\vendor\googleapi\src\auth\Google_OAuth2.php [ 162 ] in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:170
2013-10-19 00:46:47 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php(170): Google_OAuth2->setAccessToken(NULL)
#1 L:\domains\autoschool.ru\www\modules\googleapi\classes\Google\Google.php(61): Google_Client->setAccessToken('null')
#2 L:\domains\autoschool.ru\www\modules\googleapi\classes\Controller\GoogleAPI\Auth.php(15): Google_Google->auth(NULL)
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_GoogleAPI_Auth->action_google()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleAPI_Auth))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:170
2013-10-19 00:48:06 --- CRITICAL: ErrorException [ 8 ]: Undefined index: oauth_access_token ~ MODPATH\googleapi\classes\Google\Google.php [ 62 ] in L:\domains\autoschool.ru\www\modules\googleapi\classes\Google\Google.php:62
2013-10-19 00:48:06 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\classes\Google\Google.php(62): Kohana_Core::error_handler(8, 'Undefined index...', 'L:\domains\auto...', 62, Array)
#1 L:\domains\autoschool.ru\www\modules\googleapi\classes\Controller\GoogleAPI\Auth.php(15): Google_Google->auth(NULL)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_GoogleAPI_Auth->action_google()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleAPI_Auth))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\modules\googleapi\classes\Google\Google.php:62
2013-10-19 00:50:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index: oauth_access_token ~ MODPATH\googleapi\classes\Google\Google.php [ 64 ] in L:\domains\autoschool.ru\www\modules\googleapi\classes\Google\Google.php:64
2013-10-19 00:50:22 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\classes\Google\Google.php(64): Kohana_Core::error_handler(8, 'Undefined index...', 'L:\domains\auto...', 64, Array)
#1 L:\domains\autoschool.ru\www\modules\googleapi\classes\Controller\GoogleAPI\Auth.php(15): Google_Google->auth(NULL)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_GoogleAPI_Auth->action_google()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleAPI_Auth))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\modules\googleapi\classes\Google\Google.php:64
2013-10-19 01:01:56 --- CRITICAL: Google_AuthException [ 0 ]: Could not json decode the token ~ MODPATH\googleapi\vendor\googleapi\src\auth\Google_OAuth2.php [ 162 ] in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:170
2013-10-19 01:01:56 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php(170): Google_OAuth2->setAccessToken(NULL)
#1 L:\domains\autoschool.ru\www\modules\googleapi\classes\Google\Google.php(60): Google_Client->setAccessToken(NULL)
#2 L:\domains\autoschool.ru\www\modules\googleapi\classes\Controller\GoogleAPI\Auth.php(15): Google_Google->auth(NULL)
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_GoogleAPI_Auth->action_google()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleAPI_Auth))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:170
2013-10-19 01:02:36 --- CRITICAL: Google_AuthException [ 0 ]: Could not json decode the token ~ MODPATH\googleapi\vendor\googleapi\src\auth\Google_OAuth2.php [ 162 ] in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:170
2013-10-19 01:02:36 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php(170): Google_OAuth2->setAccessToken(NULL)
#1 L:\domains\autoschool.ru\www\modules\googleapi\classes\Google\Google.php(62): Google_Client->setAccessToken(NULL)
#2 L:\domains\autoschool.ru\www\modules\googleapi\classes\Controller\GoogleAPI\Auth.php(15): Google_Google->auth(NULL)
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_GoogleAPI_Auth->action_google()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleAPI_Auth))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:170
2013-10-19 01:02:55 --- CRITICAL: Google_AuthException [ 0 ]: Could not json decode the token ~ MODPATH\googleapi\vendor\googleapi\src\auth\Google_OAuth2.php [ 162 ] in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:170
2013-10-19 01:02:55 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php(170): Google_OAuth2->setAccessToken(NULL)
#1 L:\domains\autoschool.ru\www\modules\googleapi\classes\Google\Google.php(63): Google_Client->setAccessToken(NULL)
#2 L:\domains\autoschool.ru\www\modules\googleapi\classes\Controller\GoogleAPI\Auth.php(15): Google_Google->auth(NULL)
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_GoogleAPI_Auth->action_google()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleAPI_Auth))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:170
2013-10-19 01:03:26 --- CRITICAL: Google_AuthException [ 0 ]: Could not json decode the token ~ MODPATH\googleapi\vendor\googleapi\src\auth\Google_OAuth2.php [ 162 ] in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:170
2013-10-19 01:03:26 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php(170): Google_OAuth2->setAccessToken(NULL)
#1 L:\domains\autoschool.ru\www\modules\googleapi\classes\Google\Google.php(63): Google_Client->setAccessToken(NULL)
#2 L:\domains\autoschool.ru\www\modules\googleapi\classes\Controller\GoogleAPI\Auth.php(15): Google_Google->auth(NULL)
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_GoogleAPI_Auth->action_google()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleAPI_Auth))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:170
2013-10-19 01:03:37 --- CRITICAL: Google_AuthException [ 0 ]: Could not json decode the token ~ MODPATH\googleapi\vendor\googleapi\src\auth\Google_OAuth2.php [ 162 ] in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:170
2013-10-19 01:03:37 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php(170): Google_OAuth2->setAccessToken(NULL)
#1 L:\domains\autoschool.ru\www\modules\googleapi\classes\Google\Google.php(63): Google_Client->setAccessToken(NULL)
#2 L:\domains\autoschool.ru\www\modules\googleapi\classes\Controller\GoogleAPI\Auth.php(15): Google_Google->auth(NULL)
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_GoogleAPI_Auth->action_google()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleAPI_Auth))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in L:\domains\autoschool.ru\www\modules\googleapi\vendor\googleapi\src\Google_Client.php:170
2013-10-19 17:28:52 --- CRITICAL: Database_Exception [ 1146 ]: Table 'mpt_auto.messages' doesn't exist [ SHOW FULL COLUMNS FROM `Messages` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php:358
2013-10-19 17:28:52 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('Messages')
#2 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 L:\domains\autoschool.ru\www\application\classes\Model.php(20): Kohana_ORM->__construct()
#6 L:\domains\autoschool.ru\www\modules\chat\classes\Controller\chat.php(23): Model::factory('Message')
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Chat->action_help()
#8 [internal function]: Kohana_Controller->execute()
#9 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Chat))
#10 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php:358
2013-10-19 17:45:50 --- CRITICAL: Database_Exception [ 1146 ]: Table 'mpt_auto.messages' doesn't exist [ SHOW FULL COLUMNS FROM `Messages` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php:358
2013-10-19 17:45:50 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('Messages')
#2 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 L:\domains\autoschool.ru\www\application\classes\Model.php(20): Kohana_ORM->__construct()
#6 L:\domains\autoschool.ru\www\modules\chat\classes\Controller\chat.php(23): Model::factory('Message')
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Chat->action_help()
#8 [internal function]: Kohana_Controller->execute()
#9 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Chat))
#10 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php:358
2013-10-19 17:46:26 --- CRITICAL: Database_Exception [ 1146 ]: Table 'mpt_auto.messages' doesn't exist [ SHOW FULL COLUMNS FROM `Messages` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php:358
2013-10-19 17:46:26 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('Messages')
#2 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 L:\domains\autoschool.ru\www\application\classes\Model.php(20): Kohana_ORM->__construct()
#6 L:\domains\autoschool.ru\www\modules\chat\classes\Controller\chat.php(23): Model::factory('Message')
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Chat->action_help()
#8 [internal function]: Kohana_Controller->execute()
#9 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Chat))
#10 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php:358
2013-10-19 17:51:45 --- CRITICAL: View_Exception [ 0 ]: The requested view lk could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in L:\domains\autoschool.ru\www\system\classes\Kohana\View.php:137
2013-10-19 17:51:45 --- DEBUG: #0 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('lk')
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('lk', Array)
#2 L:\domains\autoschool.ru\www\application\classes\Controller\Lk\Lk.php(31): Kohana_View::factory('lk', Array)
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Lk_Lk->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Lk))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in L:\domains\autoschool.ru\www\system\classes\Kohana\View.php:137
2013-10-19 17:51:54 --- CRITICAL: View_Exception [ 0 ]: The requested view lk could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in L:\domains\autoschool.ru\www\system\classes\Kohana\View.php:137
2013-10-19 17:51:54 --- DEBUG: #0 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('lk')
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('lk', Array)
#2 L:\domains\autoschool.ru\www\application\classes\Controller\Lk\Lk.php(31): Kohana_View::factory('lk', Array)
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Lk_Lk->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Lk))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in L:\domains\autoschool.ru\www\system\classes\Kohana\View.php:137
2013-10-19 17:52:26 --- CRITICAL: Database_Exception [ 1146 ]: Table 'mpt_auto.messages' doesn't exist [ SHOW FULL COLUMNS FROM `Messages` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php:358
2013-10-19 17:52:26 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('Messages')
#2 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 L:\domains\autoschool.ru\www\application\classes\Model.php(20): Kohana_ORM->__construct()
#6 L:\domains\autoschool.ru\www\modules\chat\classes\Controller\chat.php(23): Model::factory('Message')
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Chat->action_help()
#8 [internal function]: Kohana_Controller->execute()
#9 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Chat))
#10 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php:358
2013-10-19 18:07:38 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:07:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:07:43 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:07:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:07:43 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:07:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:07:44 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:07:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:07:44 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:07:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:07:44 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:07:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:07:44 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:07:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:07:44 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:07:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:07:45 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:07:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:07:45 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:07:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:07:45 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:07:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:07:45 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:07:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:07:45 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:07:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:07:45 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:07:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:07:46 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:07:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:07:46 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:07:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:07:46 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:07:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:07:46 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:07:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:07:46 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:07:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:07:46 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:07:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:07:47 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:07:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:07:47 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:07:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:07:47 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:07:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:07:47 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:07:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:08:26 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:08:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:08:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:08:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:08:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:08:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:08:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:08:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:08:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:08:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:08:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:08:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:08:28 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:08:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:08:28 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:08:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:08:28 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:08:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:08:28 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:08:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:08:28 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:08:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:08:48 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lk_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-19 18:08:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:09:36 --- CRITICAL: Database_Exception [ 1146 ]: Table 'mpt_auto.messages' doesn't exist [ SHOW FULL COLUMNS FROM `Messages` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php:358
2013-10-19 18:09:36 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('Messages')
#2 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 L:\domains\autoschool.ru\www\application\classes\Model.php(20): Kohana_ORM->__construct()
#6 L:\domains\autoschool.ru\www\modules\chat\classes\Controller\chat.php(23): Model::factory('Message')
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Chat->action_help()
#8 [internal function]: Kohana_Controller->execute()
#9 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Chat))
#10 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php:358
2013-10-19 18:10:05 --- CRITICAL: Database_Exception [ 1146 ]: Table 'mpt_auto.messages' doesn't exist [ SHOW FULL COLUMNS FROM `Messages` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php:358
2013-10-19 18:10:05 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('Messages')
#2 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 L:\domains\autoschool.ru\www\application\classes\Model.php(20): Kohana_ORM->__construct()
#6 L:\domains\autoschool.ru\www\modules\chat\classes\Controller\chat.php(23): Model::factory('Message')
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Chat->action_help()
#8 [internal function]: Kohana_Controller->execute()
#9 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Chat))
#10 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php:358
2013-10-19 18:55:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '*' ~ APPPATH\views\lk\pages\messages.php [ 56 ] in file:line
2013-10-19 18:55:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 18:55:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '*' ~ APPPATH\views\lk\pages\messages.php [ 56 ] in file:line
2013-10-19 18:55:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 19:33:06 --- CRITICAL: Database_Exception [ 1146 ]: Table 'mpt_auto.messages' doesn't exist [ SHOW FULL COLUMNS FROM `Messages` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php:358
2013-10-19 19:33:06 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('Messages')
#2 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 L:\domains\autoschool.ru\www\application\classes\Model.php(20): Kohana_ORM->__construct()
#6 L:\domains\autoschool.ru\www\modules\chat\classes\Controller\chat.php(23): Model::factory('Message')
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Chat->action_help()
#8 [internal function]: Kohana_Controller->execute()
#9 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Chat))
#10 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php:358
2013-10-19 19:39:33 --- CRITICAL: Database_Exception [ 1146 ]: Table 'mpt_auto.messages' doesn't exist [ SHOW FULL COLUMNS FROM `Messages` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php:358
2013-10-19 19:39:33 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('Messages')
#2 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 L:\domains\autoschool.ru\www\application\classes\Model.php(20): Kohana_ORM->__construct()
#6 L:\domains\autoschool.ru\www\modules\chat\classes\Controller\chat.php(23): Model::factory('Message')
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Chat->action_help()
#8 [internal function]: Kohana_Controller->execute()
#9 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Chat))
#10 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php:358
2013-10-19 20:11:52 --- CRITICAL: ErrorException [ 8 ]: Undefined index: imya ~ APPPATH\classes\Controller\Lk\Ajax.php [ 119 ] in L:\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php:119
2013-10-19 20:11:52 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php(119): Kohana_Core::error_handler(8, 'Undefined index...', 'L:\domains\auto...', 119, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Lk_Ajax->action_changeStatement()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php:119
2013-10-19 20:12:00 --- CRITICAL: ErrorException [ 8 ]: Undefined index: imya ~ APPPATH\classes\Controller\Lk\Ajax.php [ 119 ] in L:\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php:119
2013-10-19 20:12:00 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php(119): Kohana_Core::error_handler(8, 'Undefined index...', 'L:\domains\auto...', 119, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Lk_Ajax->action_changeStatement()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\Lk\Ajax.php:119
2013-10-19 21:21:10 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Admin_Administrator' not found ~ APPPATH\classes\Model.php [ 20 ] in file:line
2013-10-19 21:21:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 22:35:25 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update educations model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in L:\domains\autoschool.ru\www\application\classes\Model.php:90
2013-10-19 22:35:25 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Model.php(90): Kohana_ORM->update()
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php(112): Model->upd('10', Array)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Ajax_Admin->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Admin))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\application\classes\Model.php:90
2013-10-19 22:43:57 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update educations model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in L:\domains\autoschool.ru\www\application\classes\Model.php:95
2013-10-19 22:43:57 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Model.php(95): Kohana_ORM->update()
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php(112): Model->upd(Array, Array)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Ajax_Admin->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Admin))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\application\classes\Model.php:95
2013-10-19 22:56:34 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update educations model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in L:\domains\autoschool.ru\www\application\classes\Model.php:95
2013-10-19 22:56:34 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Model.php(95): Kohana_ORM->update()
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php(112): Model->upd(Array, Array)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Ajax_Admin->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Admin))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\application\classes\Model.php:95
2013-10-19 22:57:01 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update educations model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in L:\domains\autoschool.ru\www\application\classes\Model.php:95
2013-10-19 22:57:01 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Model.php(95): Kohana_ORM->update()
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php(112): Model->upd(Array, Array)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Ajax_Admin->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Admin))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\application\classes\Model.php:95
2013-10-19 22:57:37 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update educations model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in L:\domains\autoschool.ru\www\application\classes\Model.php:95
2013-10-19 22:57:37 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Model.php(95): Kohana_ORM->update()
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php(112): Model->upd(Array, Array)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Ajax_Admin->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Admin))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\application\classes\Model.php:95
2013-10-19 22:59:11 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update educations model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in L:\domains\autoschool.ru\www\application\classes\Model.php:96
2013-10-19 22:59:11 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Model.php(96): Kohana_ORM->update()
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php(112): Model->upd(Array, Array)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Ajax_Admin->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Admin))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\application\classes\Model.php:96
2013-10-19 22:59:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH\classes\Model.php [ 94 ] in file:line
2013-10-19 22:59:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 22:59:58 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update educations model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in L:\domains\autoschool.ru\www\application\classes\Model.php:100
2013-10-19 22:59:58 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Model.php(100): Kohana_ORM->update()
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php(112): Model->upd(Array, Array)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Ajax_Admin->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Admin))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\application\classes\Model.php:100
2013-10-19 23:01:00 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update educations model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in L:\domains\autoschool.ru\www\application\classes\Model.php:91
2013-10-19 23:01:00 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Model.php(91): Kohana_ORM->update()
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php(112): Model->upd(5, Array)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Ajax_Admin->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Admin))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\application\classes\Model.php:91
2013-10-19 23:01:23 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update educations model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in L:\domains\autoschool.ru\www\application\classes\Model.php:91
2013-10-19 23:01:23 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Model.php(91): Kohana_ORM->update()
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php(112): Model->upd(5, Array)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Ajax_Admin->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Admin))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\application\classes\Model.php:91
2013-10-19 23:02:23 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update educations model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in L:\domains\autoschool.ru\www\application\classes\Model.php:91
2013-10-19 23:02:23 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Model.php(91): Kohana_ORM->update()
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php(112): Model->upd(5, Array)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Ajax_Admin->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Admin))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\application\classes\Model.php:91
2013-10-19 23:03:16 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update educations model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in L:\domains\autoschool.ru\www\application\classes\Model.php:91
2013-10-19 23:03:16 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Model.php(91): Kohana_ORM->update()
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php(112): Model->upd(5, Array)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Ajax_Admin->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Admin))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\application\classes\Model.php:91
2013-10-19 23:10:53 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model.php [ 93 ] in L:\domains\autoschool.ru\www\application\classes\Model.php:93
2013-10-19 23:10:53 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Model.php(93): Kohana_Core::error_handler(8, 'Undefined offse...', 'L:\domains\auto...', 93, Array)
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php(112): Model->upd(Array, Array)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Ajax_Admin->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Admin))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\application\classes\Model.php:93
2013-10-19 23:23:09 --- CRITICAL: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\classes\Model.php [ 99 ] in file:line
2013-10-19 23:23:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 23:31:43 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model.php [ 94 ] in L:\domains\autoschool.ru\www\application\classes\Model.php:94
2013-10-19 23:31:43 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Model.php(94): Kohana_Core::error_handler(8, 'Undefined offse...', 'L:\domains\auto...', 94, Array)
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php(112): Model->upd(Array, Array)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Ajax_Admin->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Admin))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\application\classes\Model.php:94
2013-10-19 23:32:01 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model.php [ 95 ] in L:\domains\autoschool.ru\www\application\classes\Model.php:95
2013-10-19 23:32:01 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Model.php(95): Kohana_Core::error_handler(8, 'Undefined offse...', 'L:\domains\auto...', 95, Array)
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php(112): Model->upd(Array, Array)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Ajax_Admin->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Admin))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\application\classes\Model.php:95
2013-10-19 23:32:29 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model.php [ 95 ] in L:\domains\autoschool.ru\www\application\classes\Model.php:95
2013-10-19 23:32:29 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Model.php(95): Kohana_Core::error_handler(8, 'Undefined offse...', 'L:\domains\auto...', 95, Array)
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php(112): Model->upd(Array, Array)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Ajax_Admin->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Admin))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\application\classes\Model.php:95
2013-10-19 23:32:38 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model.php [ 95 ] in L:\domains\autoschool.ru\www\application\classes\Model.php:95
2013-10-19 23:32:38 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Model.php(95): Kohana_Core::error_handler(8, 'Undefined offse...', 'L:\domains\auto...', 95, Array)
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php(112): Model->upd(Array, Array)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Ajax_Admin->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Admin))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\application\classes\Model.php:95
2013-10-19 23:36:09 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model.php [ 95 ] in L:\domains\autoschool.ru\www\application\classes\Model.php:95
2013-10-19 23:36:09 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Model.php(95): Kohana_Core::error_handler(8, 'Undefined offse...', 'L:\domains\auto...', 95, Array)
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php(112): Model->upd(Array, Array)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Ajax_Admin->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Admin))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\application\classes\Model.php:95
2013-10-19 23:38:18 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update educations model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in L:\domains\autoschool.ru\www\application\classes\Model.php:96
2013-10-19 23:38:18 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Model.php(96): Kohana_ORM->update()
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php(112): Model->upd(Array, Array)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Ajax_Admin->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Admin))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\application\classes\Model.php:96
2013-10-19 23:39:49 --- CRITICAL: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\classes\Model.php [ 100 ] in file:line
2013-10-19 23:39:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-19 23:41:47 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '12' for key 'PRIMARY' [ UPDATE `educations` SET `id` = 12 WHERE `obrazovanie` = 'asd' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2013-10-19 23:41:47 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `educati...', false, Array)
#1 L:\domains\autoschool.ru\www\application\classes\Model.php(99): Kohana_Database_Query->execute()
#2 L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php(112): Model->upd(Array, Array)
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Ajax_Admin->action_update()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Admin))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\Query.php:251