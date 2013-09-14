<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-14 16:14:53 --- CRITICAL: View_Exception [ 0 ]: The requested view uploader/index could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php:137
2013-09-14 16:14:53 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('uploader/index')
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('uploader/index', Array)
#2 D:\OpenServer\domains\autoschool.ru\www\modules\uploader\classes\Kohana\Uploader.php(31): Kohana_View::factory('uploader/index', Array)
#3 D:\OpenServer\domains\autoschool.ru\www\application\views\admin\mail\send.php(109): Kohana_Uploader->getUploadForm()
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 D:\OpenServer\domains\autoschool.ru\www\application\views\admin\layout.php(82): Kohana_View->__toString()
#8 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#9 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#10 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#14 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#17 {main} in D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php:137