<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-09 01:50:21 --- CRITICAL: Zend_Gdata_App_AuthException [ 0 ]: Authentication with Google failed. Reason: BadAuthentication ~ APPPATH\vendor\Zend\Gdata\ClientLogin.php [ 175 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php:16
2013-05-09 01:50:21 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php(16): Zend_Gdata_ClientLogin::getHttpClient('roquie0', 'f6hfrflf6hf', 'wise')
#1 C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php(39): Model_Spreadsheet->getData()
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(133): Model_Spreadsheet->getArrayData()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_view()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php:16
2013-05-09 01:50:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: arr ~ APPPATH\classes\Controller\Papers.php [ 187 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:187
2013-05-09 01:50:26 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(187): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 187, Array)
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(190): csvToArray('https://docs.go...')
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_load_to_grid()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:187
2013-05-09 01:57:03 --- CRITICAL: Zend_Gdata_App_AuthException [ 0 ]: Authentication with Google failed. Reason: BadAuthentication ~ APPPATH\vendor\Zend\Gdata\ClientLogin.php [ 175 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php:16
2013-05-09 01:57:03 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php(16): Zend_Gdata_ClientLogin::getHttpClient('roquie0', 'f6hfrflf6hf', 'wise')
#1 C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php(40): Model_Spreadsheet->getData()
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(133): Model_Spreadsheet->getArrayData()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_view()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php:16
2013-05-09 02:07:55 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 39 ~ APPPATH\classes\Model\Spreadsheet.php [ 71 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php:71
2013-05-09 02:07:55 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php(71): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\OpenServer\d...', 71, Array)
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(170): Model_Spreadsheet->getStudents()
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_load_to_grid()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php:71
2013-05-09 02:08:21 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 39 ~ APPPATH\classes\Model\Spreadsheet.php [ 71 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php:71
2013-05-09 02:08:21 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php(71): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\OpenServer\d...', 71, Array)
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(170): Model_Spreadsheet->getStudents()
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_load_to_grid()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php:71
2013-05-09 02:09:15 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 39 ~ APPPATH\classes\Model\Spreadsheet.php [ 71 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php:71
2013-05-09 02:09:15 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php(71): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\OpenServer\d...', 71, Array)
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(170): Model_Spreadsheet->getStudents()
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_load_to_grid()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php:71
2013-05-09 02:11:13 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 39 ~ APPPATH\classes\Model\Spreadsheet.php [ 71 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php:71
2013-05-09 02:11:13 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php(71): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\OpenServer\d...', 71, Array)
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(170): Model_Spreadsheet->getStudents()
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_load_to_grid()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php:71
2013-05-09 02:11:50 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 39 ~ APPPATH\classes\Model\Spreadsheet.php [ 71 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php:71
2013-05-09 02:11:50 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php(71): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\OpenServer\d...', 71, Array)
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(170): Model_Spreadsheet->getStudents()
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_load_to_grid()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php:71
2013-05-09 02:12:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'array_pop' (T_STRING) ~ APPPATH\classes\Model\Spreadsheet.php [ 71 ] in file:line
2013-05-09 02:12:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-09 02:12:18 --- CRITICAL: ErrorException [ 2 ]: array_pop() expects parameter 1 to be array, string given ~ APPPATH\classes\Model\Spreadsheet.php [ 71 ] in file:line
2013-05-09 02:12:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_pop() exp...', 'C:\OpenServer\d...', 71, Array)
#1 C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php(71): array_pop('???????????????...')
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(170): Model_Spreadsheet->getStudents()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_load_to_grid()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-05-09 02:13:21 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 39 ~ APPPATH\classes\Model\Spreadsheet.php [ 71 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php:71
2013-05-09 02:13:21 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php(71): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\OpenServer\d...', 71, Array)
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(170): Model_Spreadsheet->getStudents()
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_load_to_grid()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php:71
2013-05-09 02:13:27 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 39 ~ APPPATH\classes\Model\Spreadsheet.php [ 71 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php:71
2013-05-09 02:13:27 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php(71): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\OpenServer\d...', 71, Array)
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(170): Model_Spreadsheet->getStudents()
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_load_to_grid()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php:71
2013-05-09 19:47:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: arr ~ APPPATH\classes\Model\Spreadsheet.php [ 92 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php:92
2013-05-09 19:47:39 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php(92): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 92, Array)
#1 C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php(99): Model_Spreadsheet->csvToArray('https://docs.go...')
#2 C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php(56): Model_Spreadsheet->getNormArrayData()
#3 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(170): Model_Spreadsheet->getItems()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_load_to_grid()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php:92
2013-05-09 19:47:50 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Spreadsheet::getItem() ~ APPPATH\classes\Controller\Papers.php [ 170 ] in file:line
2013-05-09 19:47:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-09 22:45:06 --- CRITICAL: ErrorException [ 2 ]: json_encode() expects parameter 2 to be long, string given ~ APPPATH\classes\Controller\Papers.php [ 171 ] in file:line
2013-05-09 22:45:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_encode() e...', 'C:\OpenServer\d...', 171, Array)
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(171): json_encode('items_j.txt', 'a:18:{i:2;s:77:...')
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_load_to_grid()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-05-09 23:45:45 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Rigths' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-09 23:45:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-09 23:45:57 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Rigths' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-09 23:45:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-09 23:46:46 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Rigth' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-09 23:46:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-09 23:46:53 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Rigths' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-09 23:46:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-09 23:57:49 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Rigths' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-09 23:57:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-09 23:57:57 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Rigth' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-09 23:57:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-09 23:58:23 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Rigth' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-09 23:58:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line