<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-02 14:55:10 --- CRITICAL: ErrorException [ 1 ]: Class 'PHPExcel' not found ~ APPPATH\classes\Controller\Main.php [ 18 ] in file:line
2013-11-02 14:55:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-02 14:58:00 --- CRITICAL: ErrorException [ 1 ]: Class 'Formo' not found ~ APPPATH\classes\Controller\Main.php [ 18 ] in file:line
2013-11-02 14:58:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-02 14:59:09 --- CRITICAL: ErrorException [ 1 ]: Class 'Formo' not found ~ APPPATH\classes\Controller\Main.php [ 18 ] in file:line
2013-11-02 14:59:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-02 15:06:03 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to PHPExcel::addSheet() must be an instance of PHPExcel_Worksheet, none given, called in D:\OPENSERVER2\domains\autoschool.ru\www\application\classes\Controller\Main.php on line 19 and defined ~ DOCROOT\vendor\codeplex\phpexcel\PHPExcel.php [ 227 ] in D:\OPENSERVER2\domains\autoschool.ru\www\vendor\codeplex\phpexcel\PHPExcel.php:227
2013-11-02 15:06:03 --- DEBUG: #0 D:\OPENSERVER2\domains\autoschool.ru\www\vendor\codeplex\phpexcel\PHPExcel.php(227): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'D:\OPENSERVER2\...', 227, Array)
#1 D:\OPENSERVER2\domains\autoschool.ru\www\application\classes\Controller\Main.php(19): PHPExcel->addSheet()
#2 D:\OPENSERVER2\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(70): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OPENSERVER2\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 D:\OPENSERVER2\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OPENSERVER2\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OPENSERVER2\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OPENSERVER2\domains\autoschool.ru\www\vendor\codeplex\phpexcel\PHPExcel.php:227