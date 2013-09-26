<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-26 09:06:12 --- CRITICAL: Kohana_Exception [ 0 ]: The first_name property does not exist in the Model_Admin_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-09-26 09:06:12 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('first_name')
#1 L:\domains\autoschool.ru\www\application\views\admin\settings.php(108): Kohana_ORM->__get('first_name')
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(61): include('L:\domains\auto...')
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('L:\domains\auto...', Array)
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 L:\domains\autoschool.ru\www\application\views\admin\layout.php(82): Kohana_View->__toString()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(61): include('L:\domains\auto...')
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('L:\domains\auto...', Array)
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php:600