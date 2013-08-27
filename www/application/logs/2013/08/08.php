<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-08 19:35:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: footer ~ APPPATH\views\main\layout.php [ 65 ] in D:\OpenServer\domains\localhost\www\application\views\main\layout.php:65
2013-08-08 19:35:27 --- DEBUG: #0 D:\OpenServer\domains\localhost\www\application\views\main\layout.php(65): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#7 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\localhost\www\application\views\main\layout.php:65
2013-08-08 20:10:26 --- CRITICAL: View_Exception [ 0 ]: The requested view main/blank/index could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php:137
2013-08-08 20:10:26 --- DEBUG: #0 D:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('main/blank/inde...')
#1 D:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('main/blank/inde...', NULL)
#2 D:\OpenServer\domains\localhost\www\application\classes\Controller\Main\Statement.php(9): Kohana_View::factory('main/blank/inde...')
#3 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Main_Statement->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Statement))
#6 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php:137