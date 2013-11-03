<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-12 19:28:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: userPhoto ~ MODPATH\lk\views\pages\help.php [ 5 ] in D:\OpenServer\domains\autoschool.ru\www\modules\lk\views\pages\help.php:5
2013-10-12 19:28:28 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\modules\lk\views\pages\help.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 5, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Ajax.php(257): Kohana_View->render()
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Lk_Ajax->action_help()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\autoschool.ru\www\modules\lk\views\pages\help.php:5
2013-10-12 19:28:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: userPhoto ~ MODPATH\lk\views\pages\help.php [ 5 ] in D:\OpenServer\domains\autoschool.ru\www\modules\lk\views\pages\help.php:5
2013-10-12 19:28:42 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\modules\lk\views\pages\help.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 5, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Ajax.php(257): Kohana_View->render()
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Lk_Ajax->action_help()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\autoschool.ru\www\modules\lk\views\pages\help.php:5