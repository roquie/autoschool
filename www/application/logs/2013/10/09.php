<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-09 21:24:18 --- CRITICAL: View_Exception [ 0 ]: The requested view admin/gr_obr could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in L:\domains\autoschool.ru\www\system\classes\Kohana\View.php:137
2013-10-09 21:24:18 --- DEBUG: #0 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('admin/gr_obr')
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin/gr_obr', NULL)
#2 L:\domains\autoschool.ru\www\application\classes\Controller\Admin.php(31): Kohana_View::factory('admin/gr_obr')
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_gr_obr()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in L:\domains\autoschool.ru\www\system\classes\Kohana\View.php:137