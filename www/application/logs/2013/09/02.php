<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-02 21:20:45 --- CRITICAL: ErrorException [ 2 ]: rename(D:\OpenServer\domains\autoschool.ru\www\application\templates/contract\1378142445.docx,D:\OpenServer\domains\autoschool.ru\www\application\output_blanks/contract/contract_02_09_2013_21_20_45.docx):  ~ MODPATH\phpword\vendor\PHPWord\PHPWord\Template.php [ 131 ] in file:line
2013-09-02 21:20:45 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'rename(D:\OpenS...', 'D:\OpenServer\d...', 131, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\modules\phpword\vendor\PHPWord\PHPWord\Template.php(131): rename('D:\OpenServer\d...', 'D:\OpenServer\d...')
#2 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(100): PHPWord_Template->save('D:\OpenServer\d...')
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-09-02 21:20:55 --- CRITICAL: ErrorException [ 2 ]: rename(D:\OpenServer\domains\autoschool.ru\www\application\templates/contract\1378142455.docx,D:\OpenServer\domains\autoschool.ru\www\application\output_blanks/contract/contract_02_09_2013_21_20_55.docx):  ~ MODPATH\phpword\vendor\PHPWord\PHPWord\Template.php [ 131 ] in file:line
2013-09-02 21:20:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'rename(D:\OpenS...', 'D:\OpenServer\d...', 131, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\modules\phpword\vendor\PHPWord\PHPWord\Template.php(131): rename('D:\OpenServer\d...', 'D:\OpenServer\d...')
#2 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(100): PHPWord_Template->save('D:\OpenServer\d...')
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-09-02 23:09:08 --- CRITICAL: ErrorException [ 8 ]: Undefined index: age ~ APPPATH\classes\Controller\WordTemplate.php [ 94 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:94
2013-09-02 23:09:08 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(94): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 94, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:94
2013-09-02 23:09:12 --- CRITICAL: ErrorException [ 8 ]: Undefined index: age ~ APPPATH\classes\Controller\WordTemplate.php [ 94 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:94
2013-09-02 23:09:12 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(94): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 94, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:94
2013-09-02 23:09:29 --- CRITICAL: ErrorException [ 8 ]: Undefined index: age ~ APPPATH\classes\Controller\WordTemplate.php [ 94 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:94
2013-09-02 23:09:29 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(94): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 94, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:94
2013-09-02 23:12:49 --- CRITICAL: ErrorException [ 8 ]: Undefined index: age ~ APPPATH\classes\Controller\WordTemplate.php [ 94 ] in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:94
2013-09-02 23:12:49 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php(94): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 94, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_WordTemplate->action_zayavlenie()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_WordTemplate))
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\WordTemplate.php:94