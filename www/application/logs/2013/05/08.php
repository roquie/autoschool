<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-08 12:27:48 --- CRITICAL: Zend_Gdata_App_HttpException [ 0 ]: Expected response code 200, got 400
Ошибка синтаксического анализа: Invalid token encountered ~ APPPATH\vendor\Zend\Gdata\App.php [ 714 ] in C:\OpenServer\domains\localhost\www\application\vendor\Zend\Gdata.php:219
2013-05-08 12:27:48 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\vendor\Zend\Gdata.php(219): Zend_Gdata_App->performHttpRequest('GET', 'https://spreads...', Array, NULL, NULL, NULL)
#1 C:\OpenServer\domains\localhost\www\application\vendor\Zend\Gdata\App.php(880): Zend_Gdata->performHttpRequest('GET', 'https://spreads...', Array)
#2 C:\OpenServer\domains\localhost\www\application\vendor\Zend\Gdata\App.php(768): Zend_Gdata_App->get('https://spreads...', NULL)
#3 C:\OpenServer\domains\localhost\www\application\vendor\Zend\Gdata\App.php(210): Zend_Gdata_App->importUrl('https://spreads...', 'Zend_Gdata_Spre...', NULL)
#4 C:\OpenServer\domains\localhost\www\application\vendor\Zend\Gdata.php(162): Zend_Gdata_App->getFeed('https://spreads...', 'Zend_Gdata_Spre...')
#5 C:\OpenServer\domains\localhost\www\application\vendor\Zend\Gdata\Spreadsheets.php(266): Zend_Gdata->getFeed('https://spreads...', 'Zend_Gdata_Spre...')
#6 C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php(33): Zend_Gdata_Spreadsheets->getListFeed(Object(Zend_Gdata_Spreadsheets_ListQuery))
#7 C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php(50): Model_Spreadsheet->getData()
#8 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(133): Model_Spreadsheet->getArrayData()
#9 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_view()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#12 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#15 {main} in C:\OpenServer\domains\localhost\www\application\vendor\Zend\Gdata.php:219
2013-05-08 12:30:49 --- CRITICAL: Zend_Gdata_App_HttpException [ 0 ]: Expected response code 200, got 400
Ошибка синтаксического анализа: Invalid token encountered ~ APPPATH\vendor\Zend\Gdata\App.php [ 714 ] in C:\OpenServer\domains\localhost\www\application\vendor\Zend\Gdata.php:219
2013-05-08 12:30:49 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\vendor\Zend\Gdata.php(219): Zend_Gdata_App->performHttpRequest('GET', 'https://spreads...', Array, NULL, NULL, NULL)
#1 C:\OpenServer\domains\localhost\www\application\vendor\Zend\Gdata\App.php(880): Zend_Gdata->performHttpRequest('GET', 'https://spreads...', Array)
#2 C:\OpenServer\domains\localhost\www\application\vendor\Zend\Gdata\App.php(768): Zend_Gdata_App->get('https://spreads...', NULL)
#3 C:\OpenServer\domains\localhost\www\application\vendor\Zend\Gdata\App.php(210): Zend_Gdata_App->importUrl('https://spreads...', 'Zend_Gdata_Spre...', NULL)
#4 C:\OpenServer\domains\localhost\www\application\vendor\Zend\Gdata.php(162): Zend_Gdata_App->getFeed('https://spreads...', 'Zend_Gdata_Spre...')
#5 C:\OpenServer\domains\localhost\www\application\vendor\Zend\Gdata\Spreadsheets.php(266): Zend_Gdata->getFeed('https://spreads...', 'Zend_Gdata_Spre...')
#6 C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php(33): Zend_Gdata_Spreadsheets->getListFeed(Object(Zend_Gdata_Spreadsheets_ListQuery))
#7 C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php(40): Model_Spreadsheet->getData()
#8 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(192): Model_Spreadsheet->listFeed()
#9 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_load_to_grid()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#12 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#15 {main} in C:\OpenServer\domains\localhost\www\application\vendor\Zend\Gdata.php:219
2013-05-08 12:31:09 --- CRITICAL: Zend_Gdata_App_HttpException [ 0 ]: Expected response code 200, got 400
Ошибка синтаксического анализа: Invalid token encountered ~ APPPATH\vendor\Zend\Gdata\App.php [ 714 ] in C:\OpenServer\domains\localhost\www\application\vendor\Zend\Gdata.php:219
2013-05-08 12:31:09 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\vendor\Zend\Gdata.php(219): Zend_Gdata_App->performHttpRequest('GET', 'https://spreads...', Array, NULL, NULL, NULL)
#1 C:\OpenServer\domains\localhost\www\application\vendor\Zend\Gdata\App.php(880): Zend_Gdata->performHttpRequest('GET', 'https://spreads...', Array)
#2 C:\OpenServer\domains\localhost\www\application\vendor\Zend\Gdata\App.php(768): Zend_Gdata_App->get('https://spreads...', NULL)
#3 C:\OpenServer\domains\localhost\www\application\vendor\Zend\Gdata\App.php(210): Zend_Gdata_App->importUrl('https://spreads...', 'Zend_Gdata_Spre...', NULL)
#4 C:\OpenServer\domains\localhost\www\application\vendor\Zend\Gdata.php(162): Zend_Gdata_App->getFeed('https://spreads...', 'Zend_Gdata_Spre...')
#5 C:\OpenServer\domains\localhost\www\application\vendor\Zend\Gdata\Spreadsheets.php(266): Zend_Gdata->getFeed('https://spreads...', 'Zend_Gdata_Spre...')
#6 C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php(33): Zend_Gdata_Spreadsheets->getListFeed(Object(Zend_Gdata_Spreadsheets_ListQuery))
#7 C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php(40): Model_Spreadsheet->getData()
#8 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(192): Model_Spreadsheet->listFeed()
#9 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_load_to_grid()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#12 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#15 {main} in C:\OpenServer\domains\localhost\www\application\vendor\Zend\Gdata.php:219
2013-05-08 12:31:46 --- CRITICAL: Zend_Gdata_App_HttpException [ 0 ]: Expected response code 200, got 400
Ошибка синтаксического анализа: Encountered &quot;5&quot; at line 1, column 1.
Was expecting one of:
    &quot;!&quot; ...
    &lt;STRING&gt; ...
    &lt;NAME&gt; ...
    &quot;{&quot; ...
    &quot;(&quot; ...
     ~ APPPATH\vendor\Zend\Gdata\App.php [ 714 ] in C:\OpenServer\domains\localhost\www\application\vendor\Zend\Gdata.php:219
2013-05-08 12:31:46 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\vendor\Zend\Gdata.php(219): Zend_Gdata_App->performHttpRequest('GET', 'https://spreads...', Array, NULL, NULL, NULL)
#1 C:\OpenServer\domains\localhost\www\application\vendor\Zend\Gdata\App.php(880): Zend_Gdata->performHttpRequest('GET', 'https://spreads...', Array)
#2 C:\OpenServer\domains\localhost\www\application\vendor\Zend\Gdata\App.php(768): Zend_Gdata_App->get('https://spreads...', NULL)
#3 C:\OpenServer\domains\localhost\www\application\vendor\Zend\Gdata\App.php(210): Zend_Gdata_App->importUrl('https://spreads...', 'Zend_Gdata_Spre...', NULL)
#4 C:\OpenServer\domains\localhost\www\application\vendor\Zend\Gdata.php(162): Zend_Gdata_App->getFeed('https://spreads...', 'Zend_Gdata_Spre...')
#5 C:\OpenServer\domains\localhost\www\application\vendor\Zend\Gdata\Spreadsheets.php(266): Zend_Gdata->getFeed('https://spreads...', 'Zend_Gdata_Spre...')
#6 C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php(33): Zend_Gdata_Spreadsheets->getListFeed(Object(Zend_Gdata_Spreadsheets_ListQuery))
#7 C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php(40): Model_Spreadsheet->getData()
#8 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(192): Model_Spreadsheet->listFeed()
#9 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_load_to_grid()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#12 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#15 {main} in C:\OpenServer\domains\localhost\www\application\vendor\Zend\Gdata.php:219
2013-05-08 12:49:10 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Model\Spreadsheet.php [ 39 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php:39
2013-05-08 12:49:10 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php(39): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\OpenServer\d...', 39, Array)
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(133): Model_Spreadsheet->getArrayData()
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_view()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Spreadsheet.php:39
2013-05-08 13:11:18 --- CRITICAL: ErrorException [ 1 ]: Class 'GRequest' not found ~ APPPATH\classes\Controller\Papers.php [ 193 ] in file:line
2013-05-08 13:11:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-08 13:11:42 --- CRITICAL: ErrorException [ 1 ]: Class 'GRequest' not found ~ APPPATH\classes\Controller\Papers.php [ 193 ] in file:line
2013-05-08 13:11:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-08 13:13:36 --- CRITICAL: ErrorException [ 1 ]: Class 'GRequest' not found ~ APPPATH\classes\Controller\Papers.php [ 193 ] in file:line
2013-05-08 13:13:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-08 13:13:40 --- CRITICAL: ErrorException [ 1 ]: Class 'GRequest' not found ~ APPPATH\classes\Controller\Papers.php [ 193 ] in file:line
2013-05-08 13:13:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-08 13:14:03 --- CRITICAL: ErrorException [ 1 ]: Class 'GRequest' not found ~ APPPATH\classes\Controller\Papers.php [ 193 ] in file:line
2013-05-08 13:14:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-08 13:14:07 --- CRITICAL: ErrorException [ 1 ]: Class 'GRequest' not found ~ APPPATH\classes\Controller\Papers.php [ 193 ] in file:line
2013-05-08 13:14:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-08 13:15:43 --- CRITICAL: Exception [ 0 ]: String could not be parsed as XML ~ APPPATH\vendor\spreadsheet\SpreadsheetFeed.php [ 43 ] in C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php:43
2013-05-08 13:15:43 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php(43): SimpleXMLElement->__construct('')
#1 C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetService.php(39): SpreadsheetFeed->__construct(false)
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(198): SpreadsheetService->getSpreadsheets()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_load_to_grid()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php:43
2013-05-08 13:16:16 --- CRITICAL: Exception [ 0 ]: String could not be parsed as XML ~ APPPATH\vendor\spreadsheet\SpreadsheetFeed.php [ 43 ] in C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php:43
2013-05-08 13:16:16 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php(43): SimpleXMLElement->__construct('')
#1 C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetService.php(39): SpreadsheetFeed->__construct(false)
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(198): SpreadsheetService->getSpreadsheets()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_load_to_grid()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php:43
2013-05-08 13:16:25 --- CRITICAL: Exception [ 0 ]: String could not be parsed as XML ~ APPPATH\vendor\spreadsheet\SpreadsheetFeed.php [ 43 ] in C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php:43
2013-05-08 13:16:25 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php(43): SimpleXMLElement->__construct('')
#1 C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetService.php(39): SpreadsheetFeed->__construct(false)
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(198): SpreadsheetService->getSpreadsheets()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_load_to_grid()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php:43
2013-05-08 13:16:56 --- CRITICAL: Exception [ 0 ]:  ~ APPPATH\vendor\spreadsheet\ServiceRequestFactory.php [ 39 ] in C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetService.php:36
2013-05-08 13:16:56 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetService.php(36): ServiceRequestFactory::getInstance()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(196): SpreadsheetService->getSpreadsheets()
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_load_to_grid()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetService.php:36
2013-05-08 13:17:05 --- CRITICAL: Exception [ 0 ]: String could not be parsed as XML ~ APPPATH\vendor\spreadsheet\SpreadsheetFeed.php [ 43 ] in C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php:43
2013-05-08 13:17:05 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php(43): SimpleXMLElement->__construct('')
#1 C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetService.php(39): SpreadsheetFeed->__construct(false)
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(198): SpreadsheetService->getSpreadsheets()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_load_to_grid()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php:43
2013-05-08 13:20:34 --- CRITICAL: Exception [ 0 ]: String could not be parsed as XML ~ APPPATH\vendor\spreadsheet\SpreadsheetFeed.php [ 43 ] in C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php:43
2013-05-08 13:20:34 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php(43): SimpleXMLElement->__construct('')
#1 C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetService.php(39): SpreadsheetFeed->__construct(false)
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(198): SpreadsheetService->getSpreadsheets()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_load_to_grid()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php:43
2013-05-08 13:21:04 --- CRITICAL: ErrorException [ 1 ]: Class 'SpreadsheetService' not found ~ APPPATH\classes\Controller\Papers.php [ 194 ] in file:line
2013-05-08 13:21:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-08 13:21:11 --- CRITICAL: Exception [ 0 ]:  ~ APPPATH\vendor\spreadsheet\ServiceRequestFactory.php [ 39 ] in C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetService.php:36
2013-05-08 13:21:11 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetService.php(36): ServiceRequestFactory::getInstance()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(195): SpreadsheetService->getSpreadsheets()
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_load_to_grid()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetService.php:36
2013-05-08 13:21:31 --- CRITICAL: Exception [ 0 ]: String could not be parsed as XML ~ APPPATH\vendor\spreadsheet\SpreadsheetFeed.php [ 43 ] in C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php:43
2013-05-08 13:21:31 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php(43): SimpleXMLElement->__construct('')
#1 C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetService.php(39): SpreadsheetFeed->__construct(false)
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(198): SpreadsheetService->getSpreadsheets()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_load_to_grid()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php:43
2013-05-08 13:22:09 --- CRITICAL: Exception [ 0 ]: String could not be parsed as XML ~ APPPATH\vendor\spreadsheet\SpreadsheetFeed.php [ 43 ] in C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php:43
2013-05-08 13:22:09 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php(43): SimpleXMLElement->__construct('')
#1 C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetService.php(39): SpreadsheetFeed->__construct(false)
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(198): SpreadsheetService->getSpreadsheets()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_load_to_grid()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php:43
2013-05-08 13:22:13 --- CRITICAL: Exception [ 0 ]: String could not be parsed as XML ~ APPPATH\vendor\spreadsheet\SpreadsheetFeed.php [ 43 ] in C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php:43
2013-05-08 13:22:13 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php(43): SimpleXMLElement->__construct('')
#1 C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetService.php(39): SpreadsheetFeed->__construct(false)
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(198): SpreadsheetService->getSpreadsheets()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_load_to_grid()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php:43
2013-05-08 13:24:45 --- CRITICAL: Exception [ 0 ]: String could not be parsed as XML ~ APPPATH\vendor\spreadsheet\SpreadsheetFeed.php [ 43 ] in C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php:43
2013-05-08 13:24:45 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php(43): SimpleXMLElement->__construct('')
#1 C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetService.php(39): SpreadsheetFeed->__construct(false)
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(198): SpreadsheetService->getSpreadsheets()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_load_to_grid()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php:43
2013-05-08 13:25:07 --- CRITICAL: Exception [ 0 ]: String could not be parsed as XML ~ APPPATH\vendor\spreadsheet\SpreadsheetFeed.php [ 43 ] in C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php:43
2013-05-08 13:25:07 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php(43): SimpleXMLElement->__construct('')
#1 C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetService.php(39): SpreadsheetFeed->__construct(false)
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(198): SpreadsheetService->getSpreadsheets()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_load_to_grid()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php:43
2013-05-08 13:27:18 --- CRITICAL: Exception [ 0 ]: String could not be parsed as XML ~ APPPATH\vendor\spreadsheet\SpreadsheetFeed.php [ 43 ] in C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php:43
2013-05-08 13:27:18 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php(43): SimpleXMLElement->__construct('')
#1 C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetService.php(39): SpreadsheetFeed->__construct(false)
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(199): SpreadsheetService->getSpreadsheets()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_load_to_grid()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php:43
2013-05-08 13:28:37 --- CRITICAL: Exception [ 0 ]: String could not be parsed as XML ~ APPPATH\vendor\spreadsheet\SpreadsheetFeed.php [ 43 ] in C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php:43
2013-05-08 13:28:37 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php(43): SimpleXMLElement->__construct('')
#1 C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetService.php(40): SpreadsheetFeed->__construct(false)
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(199): SpreadsheetService->getSpreadsheets()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_load_to_grid()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\www\application\vendor\spreadsheet\SpreadsheetFeed.php:43
2013-05-08 13:28:44 --- CRITICAL: ErrorException [ 1 ]: Call to a member function getByTitle() on a non-object ~ APPPATH\classes\Controller\Papers.php [ 200 ] in file:line
2013-05-08 13:28:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-08 13:28:46 --- CRITICAL: ErrorException [ 1 ]: Call to a member function getByTitle() on a non-object ~ APPPATH\classes\Controller\Papers.php [ 200 ] in file:line
2013-05-08 13:28:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line