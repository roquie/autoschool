<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-07 12:02:08 --- CRITICAL: ErrorException [ 2 ]: array_combine(): Both parameters should have an equal number of elements ~ APPPATH\views\papers\view.php [ 53 ] in file:line
2013-05-07 12:02:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_combine()...', 'C:\OpenServer\d...', 53, Array)
#1 C:\OpenServer\domains\localhost\www\application\views\papers\view.php(53): array_combine(Array, Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\localhost\www\application\views\layout.php(32): Kohana_View->__toString()
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#12 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2013-05-07 12:03:14 --- CRITICAL: ErrorException [ 2 ]: array_combine(): Both parameters should have an equal number of elements ~ APPPATH\views\papers\view.php [ 53 ] in file:line
2013-05-07 12:03:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_combine()...', 'C:\OpenServer\d...', 53, Array)
#1 C:\OpenServer\domains\localhost\www\application\views\papers\view.php(53): array_combine(Array, Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\localhost\www\application\views\layout.php(32): Kohana_View->__toString()
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#12 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2013-05-07 12:47:21 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$gsx$title ~ APPPATH\views\papers\view.php [ 13 ] in C:\OpenServer\domains\localhost\www\application\views\papers\view.php:13
2013-05-07 12:47:21 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\views\papers\view.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 13, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\www\application\views\layout.php(32): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\www\application\views\papers\view.php:13
2013-05-07 12:48:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\papers\view.php [ 13 ] in C:\OpenServer\domains\localhost\www\application\views\papers\view.php:13
2013-05-07 12:48:09 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\views\papers\view.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 13, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\www\application\views\layout.php(32): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\www\application\views\papers\view.php:13
2013-05-07 12:48:27 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$gsx$title ~ APPPATH\views\papers\view.php [ 13 ] in C:\OpenServer\domains\localhost\www\application\views\papers\view.php:13
2013-05-07 12:48:27 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\views\papers\view.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 13, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\www\application\views\layout.php(32): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\www\application\views\papers\view.php:13
2013-05-07 12:48:43 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$gsx$author ~ APPPATH\views\papers\view.php [ 14 ] in C:\OpenServer\domains\localhost\www\application\views\papers\view.php:14
2013-05-07 12:48:43 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\views\papers\view.php(14): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 14, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\www\application\views\layout.php(32): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\www\application\views\papers\view.php:14
2013-05-07 13:13:47 --- CRITICAL: Exception [ 0 ]: String could not be parsed as XML ~ APPPATH\classes\Controller\Papers.php [ 199 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:0
2013-05-07 13:13:47 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(0): SimpleXMLElement->__construct()
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_load_to_grid()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:0
2013-05-07 13:14:09 --- CRITICAL: Exception [ 0 ]: String could not be parsed as XML ~ APPPATH\classes\Controller\Papers.php [ 199 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:0
2013-05-07 13:14:09 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(0): SimpleXMLElement->__construct()
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_load_to_grid()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:0
2013-05-07 13:14:42 --- CRITICAL: Exception [ 0 ]: String could not be parsed as XML ~ APPPATH\classes\Controller\Papers.php [ 199 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:0
2013-05-07 13:14:42 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(0): SimpleXMLElement->__construct()
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_load_to_grid()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:0
2013-05-07 13:21:49 --- CRITICAL: Exception [ 0 ]: String could not be parsed as XML ~ APPPATH\classes\Controller\Papers.php [ 199 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:0
2013-05-07 13:21:49 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(0): SimpleXMLElement->__construct()
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_load_to_grid()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:0
2013-05-07 14:04:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''cp1251'' (T_CONSTANT_ENCAPSED_STRING), expecting '&' or variable (T_VARIABLE) ~ APPPATH\classes\Controller\Papers.php [ 203 ] in file:line
2013-05-07 14:04:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-07 14:05:26 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function convert() ~ APPPATH\classes\Controller\Papers.php [ 214 ] in file:line
2013-05-07 14:05:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-07 14:05:40 --- CRITICAL: ErrorException [ 8 ]: iconv(): Detected an illegal character in input string ~ APPPATH\classes\Controller\Papers.php [ 220 ] in file:line
2013-05-07 14:05:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'iconv(): Detect...', 'C:\OpenServer\d...', 220, Array)
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(220): iconv('cp1251', 'utf-8', '??.??.??. ?????...')
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(214): Controller_Papers->convert('cp1251', 'utf-8', '??.??.??. ?????...')
#3 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(214): Controller_Papers->convert('cp1251', 'utf-8', Array)
#4 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(201): Controller_Papers->convert('cp1251', 'utf-8', Array)
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_load_to_grid()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2013-05-07 19:38:57 --- CRITICAL: ErrorException [ 1 ]: Class 'Swift' not found ~ APPPATH\classes\Controller\Mail.php [ 20 ] in file:line
2013-05-07 19:38:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line