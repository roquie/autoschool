<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-19 22:20:55 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(L:\domains\localhost\www\application\media/css): failed to open stream: Permission denied ~ MODPATH\less\classes\Less\Core.php [ 169 ] in file:line
2013-08-19 22:20:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'L:\domains\loca...', 169, Array)
#1 L:\domains\localhost\www\modules\less\classes\Less\Core.php(169): file_get_contents('L:\domains\loca...')
#2 L:\domains\localhost\www\modules\less\classes\Less\Core.php(146): Less_Core::_generate_assets('L:\domains\loca...', Array)
#3 L:\domains\localhost\www\modules\less\classes\Less\Core.php(60): Less_Core::_combine(Array)
#4 L:\domains\localhost\www\application\classes\Controller\Main.php(18): Less_Core::compile(Array)
#5 L:\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#6 [internal function]: Kohana_Controller->execute()
#7 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#8 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#11 {main} in file:line