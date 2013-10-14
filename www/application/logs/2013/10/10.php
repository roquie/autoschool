<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-10 17:23:04 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Kohana_Autocrud::f() should not be called statically ~ MODPATH\autocrud\views\test.php [ 28 ] in L:\domains\autoschool.ru\www\modules\autocrud\views\test.php:28
2013-10-10 17:23:04 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\autocrud\views\test.php(28): Kohana_Core::error_handler(2048, 'Non-static meth...', 'L:\domains\auto...', 28, Array)
#1 L:\domains\autoschool.ru\www\modules\autocrud\views\test.php(28): Kohana_Autocrud::f()
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(61): include('L:\domains\auto...')
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('L:\domains\auto...', Array)
#4 L:\domains\autoschool.ru\www\modules\autocrud\classes\Controller\Autocrud.php(120): Kohana_View->render()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Autocrud->action_init()
#6 [internal function]: Kohana_Controller->execute()
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Autocrud))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in L:\domains\autoschool.ru\www\modules\autocrud\views\test.php:28
2013-10-10 19:41:01 --- CRITICAL: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'autocrud' at 'MODPATH\autocrud' ~ SYSPATH\classes\Kohana\Core.php [ 579 ] in L:\domains\autoschool.ru\www\application\bootstrap.php:144
2013-10-10 19:41:01 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\bootstrap.php(144): Kohana_Core::modules(Array)
#1 L:\domains\autoschool.ru\www\index.php(102): require('L:\domains\auto...')
#2 {main} in L:\domains\autoschool.ru\www\application\bootstrap.php:144