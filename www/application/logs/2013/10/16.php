<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-16 00:31:56 --- CRITICAL: ErrorException [ 2 ]: unlink(administrators): No such file or directory ~ APPPATH\classes\Controller\Ajax\Admin.php [ 38 ] in file:line
2013-10-16 00:31:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unlink(administ...', 'L:\domains\auto...', 38, Array)
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php(38): unlink('administrators')
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(69): Controller_Ajax_Admin->before()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Admin))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-10-16 00:32:14 --- CRITICAL: ErrorException [ 2 ]: unlink(administrators.php): No such file or directory ~ APPPATH\classes\Controller\Ajax\Admin.php [ 38 ] in file:line
2013-10-16 00:32:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unlink(administ...', 'L:\domains\auto...', 38, Array)
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Ajax\Admin.php(38): unlink('administrators....')
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(69): Controller_Ajax_Admin->before()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Admin))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-10-16 00:36:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_educations' not found ~ APPPATH\classes\Model.php [ 20 ] in file:line
2013-10-16 00:36:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line