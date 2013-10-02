<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-29 22:16:15 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Lk_Lk::hash() ~ MODPATH\lk\classes\Controller\Lk\Lk.php [ 51 ] in file:line
2013-09-29 22:16:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-29 22:38:31 --- CRITICAL: ErrorException [ 8 ]: Undefined index: photo ~ MODPATH\lk\classes\Controller\Lk\Ajax.php [ 159 ] in D:\OpenServer\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Ajax.php:159
2013-09-29 22:38:31 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Ajax.php(159): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 159, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Lk_Ajax->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Ajax.php:159