<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-09 23:56:33 --- CRITICAL: ErrorException [ 4096 ]: Object of class PHPWord_Section could not be converted to string ~ APPPATH\vendor\PHPWord\PHPWord\Template.php [ 111 ] in file:line
2013-08-09 23:56:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(4096, 'Object of class...', 'D:\OpenServer\d...', 111, Array)
#1 D:\OpenServer\domains\localhost\www\application\vendor\PHPWord\PHPWord\Template.php(111): preg_replace('/\$\{.*?familiy...', 'Object', '<?xml version="...', 1)
#2 D:\OpenServer\domains\localhost\www\application\classes\Controller\WordTemplate.php(38): PHPWord_Template->setValue('familiya', Object(PHPWord_Section))
#3 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#6 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in file:line