<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-15 00:59:07 --- CRITICAL: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\Kohana\Request.php [ 960 ] in C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php:960
2013-05-15 00:59:07 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(960): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 960, Array)
#1 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#2 {main} in C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php:960
2013-05-15 00:59:36 --- CRITICAL: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\Kohana\Request.php [ 960 ] in C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php:960
2013-05-15 00:59:36 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(960): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 960, Array)
#1 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#2 {main} in C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php:960
2013-05-15 01:15:38 --- CRITICAL: ErrorException [ 2 ]: fopen(): Filename cannot be empty ~ SYSPATH\classes\Kohana\Response.php [ 453 ] in file:line
2013-05-15 01:15:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(): Filena...', 'C:\OpenServer\d...', 453, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Response.php(453): fopen('', 'rb')
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Upload.php(13): Kohana_Response->send_file('C:\OpenServer\d...')
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Upload->action_upload()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Upload))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-05-15 21:02:00 --- CRITICAL: Exception [ 0 ]: Could not close zip file C:\OpenServer\domains\localhost\www\application\uploads/created/vedomost 2013-05-15 21:01.xlsx. ~ MODPATH\phpexcel\classes\vendor\phpexcel\PHPExcel\Writer\Excel2007.php [ 378 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:267
2013-05-15 21:02:00 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(267): PHPExcel_Writer_Excel2007->save('C:\OpenServer\d...')
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:267
2013-05-15 21:02:11 --- CRITICAL: Exception [ 0 ]: Could not close zip file C:\OpenServer\domains\localhost\www\application\uploads/created/vedomost 2013-05-15 21:02.xlsx. ~ MODPATH\phpexcel\classes\vendor\phpexcel\PHPExcel\Writer\Excel2007.php [ 378 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:267
2013-05-15 21:02:11 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(267): PHPExcel_Writer_Excel2007->save('C:\OpenServer\d...')
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:267
2013-05-15 21:03:12 --- CRITICAL: Exception [ 0 ]: Could not close zip file C:\OpenServer\domains\localhost\www\application\uploads/created/vedomost 2013-05-15 21:03:11.xlsx. ~ MODPATH\phpexcel\classes\vendor\phpexcel\PHPExcel\Writer\Excel2007.php [ 378 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:267
2013-05-15 21:03:12 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(267): PHPExcel_Writer_Excel2007->save('C:\OpenServer\d...')
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:267
2013-05-15 21:05:23 --- CRITICAL: Exception [ 0 ]: Could not close zip file C:\OpenServer\domains\localhost\www\application\uploads/created/vedomost 2013-05-15 21:05:22.xlsx. ~ MODPATH\phpexcel\classes\vendor\phpexcel\PHPExcel\Writer\Excel2007.php [ 378 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:267
2013-05-15 21:05:23 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(267): PHPExcel_Writer_Excel2007->save('C:\OpenServer\d...')
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:267
2013-05-15 21:05:42 --- CRITICAL: Exception [ 0 ]: Could not close zip file C:\OpenServer\domains\localhost\www\application\uploads/created/vedomost 2013-05-15 21:05:41.xlsx. ~ MODPATH\phpexcel\classes\vendor\phpexcel\PHPExcel\Writer\Excel2007.php [ 378 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:267
2013-05-15 21:05:42 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(267): PHPExcel_Writer_Excel2007->save('C:\OpenServer\d...')
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:267
2013-05-15 21:06:03 --- CRITICAL: Exception [ 0 ]: Could not close zip file C:\OpenServer\domains\localhost\www\application\uploads/created/vedomost 2013-05-15 21:06.xlsx. ~ MODPATH\phpexcel\classes\vendor\phpexcel\PHPExcel\Writer\Excel2007.php [ 378 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:267
2013-05-15 21:06:03 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(267): PHPExcel_Writer_Excel2007->save('C:\OpenServer\d...')
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:267
2013-05-15 21:58:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: req ~ APPPATH\views\papers\vedomost.php [ 1 ] in C:\OpenServer\domains\localhost\www\application\views\papers\vedomost.php:1
2013-05-15 21:58:49 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\views\papers\vedomost.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 1, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\www\application\views\layout.php(49): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Students))
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\www\application\views\papers\vedomost.php:1
2013-05-15 22:02:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH\views\papers\vedomost.php [ 2 ] in file:line
2013-05-15 22:02:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-15 23:58:58 --- CRITICAL: RqMailException [ 0 ]: Указанный формат email не правильный. Пример: mail@example.com ~ MODPATH\email\classes\Kohana\RqMail.php [ 107 ] in C:\OpenServer\domains\localhost\www\modules\email\classes\Kohana\RqMail.php:145
2013-05-15 23:58:58 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\email\classes\Kohana\RqMail.php(145): Kohana_RqMail->isMail('MPT SpreadSheet...')
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Mail.php(218): Kohana_RqMail->send()
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Mail->action_send_mail()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mail))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\modules\email\classes\Kohana\RqMail.php:145