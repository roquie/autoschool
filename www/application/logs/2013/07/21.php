<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-21 13:59:50 --- CRITICAL: ErrorException [ 8 ]: Undefined index: right_id ~ APPPATH\classes\Controller\Admin\GoogleLogin.php [ 45 ] in L:\domains\localhost\www\application\classes\Controller\Admin\GoogleLogin.php:45
2013-07-21 13:59:50 --- DEBUG: #0 L:\domains\localhost\www\application\classes\Controller\Admin\GoogleLogin.php(45): Kohana_Core::error_handler(8, 'Undefined index...', 'L:\domains\loca...', 45, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Admin_GoogleLogin->action_goauth()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_GoogleLogin))
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\localhost\www\application\classes\Controller\Admin\GoogleLogin.php:45
2013-07-21 14:01:24 --- CRITICAL: GOAuthException [ 0 ]: Ошибка авторизации: invalid_grant ~ MODPATH\goauth\classes\GOAuth.php [ 78 ] in L:\domains\localhost\www\application\classes\Controller\Admin\GoogleLogin.php:17
2013-07-21 14:01:24 --- DEBUG: #0 L:\domains\localhost\www\application\classes\Controller\Admin\GoogleLogin.php(17): GOAuth::getUserData('4/ei0qz77T9mJGr...')
#1 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Admin_GoogleLogin->action_goauth()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_GoogleLogin))
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\localhost\www\application\classes\Controller\Admin\GoogleLogin.php:17
2013-07-21 14:04:28 --- CRITICAL: ErrorException [ 8 ]: Undefined index: file_types ~ MODPATH\uploader\classes\Controller\uploader.php [ 55 ] in L:\domains\localhost\www\modules\uploader\classes\Controller\uploader.php:55
2013-07-21 14:04:28 --- DEBUG: #0 L:\domains\localhost\www\modules\uploader\classes\Controller\uploader.php(55): Kohana_Core::error_handler(8, 'Undefined index...', 'L:\domains\loca...', 55, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Uploader->action_uploadifive()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uploader))
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\localhost\www\modules\uploader\classes\Controller\uploader.php:55
2013-07-21 14:04:51 --- CRITICAL: ErrorException [ 8 ]: Undefined index: file_types ~ MODPATH\uploader\classes\Controller\uploader.php [ 55 ] in L:\domains\localhost\www\modules\uploader\classes\Controller\uploader.php:55
2013-07-21 14:04:51 --- DEBUG: #0 L:\domains\localhost\www\modules\uploader\classes\Controller\uploader.php(55): Kohana_Core::error_handler(8, 'Undefined index...', 'L:\domains\loca...', 55, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Uploader->action_uploadifive()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uploader))
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\localhost\www\modules\uploader\classes\Controller\uploader.php:55
2013-07-21 14:06:28 --- CRITICAL: ErrorException [ 8 ]: Undefined index: file_types ~ MODPATH\uploader\classes\Controller\uploader.php [ 55 ] in L:\domains\localhost\www\modules\uploader\classes\Controller\uploader.php:55
2013-07-21 14:06:28 --- DEBUG: #0 L:\domains\localhost\www\modules\uploader\classes\Controller\uploader.php(55): Kohana_Core::error_handler(8, 'Undefined index...', 'L:\domains\loca...', 55, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Uploader->action_uploadifive()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uploader))
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\localhost\www\modules\uploader\classes\Controller\uploader.php:55
2013-07-21 14:36:10 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Route::compile() must be of the type array, string given, called in L:\domains\localhost\www\system\classes\Kohana\Route.php on line 327 and defined ~ SYSPATH\classes\Kohana\Route.php [ 237 ] in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:36:10 --- DEBUG: #0 L:\domains\localhost\www\system\classes\Kohana\Route.php(237): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'L:\domains\loca...', 237, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Route.php(327): Kohana_Route::compile(Object(Closure), '(<controller>(/...')
#2 L:\domains\localhost\www\system\classes\Kohana\Route.php(90): Kohana_Route->__construct(Object(Closure), '(<controller>(/...')
#3 L:\domains\localhost\www\application\bootstrap.php(529): Kohana_Route::set('admin', Object(Closure), '(<controller>(/...')
#4 L:\domains\localhost\www\index.php(102): require('L:\domains\loca...')
#5 {main} in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:36:10 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Route::compile() must be of the type array, string given, called in L:\domains\localhost\www\system\classes\Kohana\Route.php on line 327 and defined ~ SYSPATH\classes\Kohana\Route.php [ 237 ] in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:36:10 --- DEBUG: #0 L:\domains\localhost\www\system\classes\Kohana\Route.php(237): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'L:\domains\loca...', 237, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Route.php(327): Kohana_Route::compile(Object(Closure), '(<controller>(/...')
#2 L:\domains\localhost\www\system\classes\Kohana\Route.php(90): Kohana_Route->__construct(Object(Closure), '(<controller>(/...')
#3 L:\domains\localhost\www\application\bootstrap.php(529): Kohana_Route::set('admin', Object(Closure), '(<controller>(/...')
#4 L:\domains\localhost\www\index.php(102): require('L:\domains\loca...')
#5 {main} in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:37:24 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Route::compile() must be of the type array, string given, called in L:\domains\localhost\www\system\classes\Kohana\Route.php on line 327 and defined ~ SYSPATH\classes\Kohana\Route.php [ 237 ] in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:37:24 --- DEBUG: #0 L:\domains\localhost\www\system\classes\Kohana\Route.php(237): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'L:\domains\loca...', 237, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Route.php(327): Kohana_Route::compile(Object(Closure), '(<controller>(/...')
#2 L:\domains\localhost\www\system\classes\Kohana\Route.php(90): Kohana_Route->__construct(Object(Closure), '(<controller>(/...')
#3 L:\domains\localhost\www\application\bootstrap.php(527): Kohana_Route::set('admin', Object(Closure), '(<controller>(/...')
#4 L:\domains\localhost\www\index.php(102): require('L:\domains\loca...')
#5 {main} in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:37:24 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Route::compile() must be of the type array, string given, called in L:\domains\localhost\www\system\classes\Kohana\Route.php on line 327 and defined ~ SYSPATH\classes\Kohana\Route.php [ 237 ] in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:37:24 --- DEBUG: #0 L:\domains\localhost\www\system\classes\Kohana\Route.php(237): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'L:\domains\loca...', 237, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Route.php(327): Kohana_Route::compile(Object(Closure), '(<controller>(/...')
#2 L:\domains\localhost\www\system\classes\Kohana\Route.php(90): Kohana_Route->__construct(Object(Closure), '(<controller>(/...')
#3 L:\domains\localhost\www\application\bootstrap.php(527): Kohana_Route::set('admin', Object(Closure), '(<controller>(/...')
#4 L:\domains\localhost\www\index.php(102): require('L:\domains\loca...')
#5 {main} in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:38:26 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Route::compile() must be of the type array, string given, called in L:\domains\localhost\www\system\classes\Kohana\Route.php on line 327 and defined ~ SYSPATH\classes\Kohana\Route.php [ 237 ] in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:38:26 --- DEBUG: #0 L:\domains\localhost\www\system\classes\Kohana\Route.php(237): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'L:\domains\loca...', 237, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Route.php(327): Kohana_Route::compile(Object(Closure), '(<controller>(/...')
#2 L:\domains\localhost\www\system\classes\Kohana\Route.php(90): Kohana_Route->__construct(Object(Closure), '(<controller>(/...')
#3 L:\domains\localhost\www\application\bootstrap.php(536): Kohana_Route::set('admin', Object(Closure), '(<controller>(/...')
#4 L:\domains\localhost\www\index.php(102): require('L:\domains\loca...')
#5 {main} in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:38:27 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Route::compile() must be of the type array, string given, called in L:\domains\localhost\www\system\classes\Kohana\Route.php on line 327 and defined ~ SYSPATH\classes\Kohana\Route.php [ 237 ] in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:38:27 --- DEBUG: #0 L:\domains\localhost\www\system\classes\Kohana\Route.php(237): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'L:\domains\loca...', 237, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Route.php(327): Kohana_Route::compile(Object(Closure), '(<controller>(/...')
#2 L:\domains\localhost\www\system\classes\Kohana\Route.php(90): Kohana_Route->__construct(Object(Closure), '(<controller>(/...')
#3 L:\domains\localhost\www\application\bootstrap.php(536): Kohana_Route::set('admin', Object(Closure), '(<controller>(/...')
#4 L:\domains\localhost\www\index.php(102): require('L:\domains\loca...')
#5 {main} in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:38:54 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Route::compile() must be of the type array, string given, called in L:\domains\localhost\www\system\classes\Kohana\Route.php on line 327 and defined ~ SYSPATH\classes\Kohana\Route.php [ 237 ] in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:38:54 --- DEBUG: #0 L:\domains\localhost\www\system\classes\Kohana\Route.php(237): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'L:\domains\loca...', 237, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Route.php(327): Kohana_Route::compile(Object(Closure), '(<controller>(/...')
#2 L:\domains\localhost\www\system\classes\Kohana\Route.php(90): Kohana_Route->__construct(Object(Closure), '(<controller>(/...')
#3 L:\domains\localhost\www\application\bootstrap.php(529): Kohana_Route::set('admin', Object(Closure), '(<controller>(/...')
#4 L:\domains\localhost\www\index.php(102): require('L:\domains\loca...')
#5 {main} in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:38:54 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Route::compile() must be of the type array, string given, called in L:\domains\localhost\www\system\classes\Kohana\Route.php on line 327 and defined ~ SYSPATH\classes\Kohana\Route.php [ 237 ] in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:38:54 --- DEBUG: #0 L:\domains\localhost\www\system\classes\Kohana\Route.php(237): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'L:\domains\loca...', 237, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Route.php(327): Kohana_Route::compile(Object(Closure), '(<controller>(/...')
#2 L:\domains\localhost\www\system\classes\Kohana\Route.php(90): Kohana_Route->__construct(Object(Closure), '(<controller>(/...')
#3 L:\domains\localhost\www\application\bootstrap.php(529): Kohana_Route::set('admin', Object(Closure), '(<controller>(/...')
#4 L:\domains\localhost\www\index.php(102): require('L:\domains\loca...')
#5 {main} in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:39:14 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Route::compile() must be of the type array, string given, called in L:\domains\localhost\www\system\classes\Kohana\Route.php on line 327 and defined ~ SYSPATH\classes\Kohana\Route.php [ 237 ] in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:39:14 --- DEBUG: #0 L:\domains\localhost\www\system\classes\Kohana\Route.php(237): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'L:\domains\loca...', 237, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Route.php(327): Kohana_Route::compile(Object(Closure), '(<controller>(/...')
#2 L:\domains\localhost\www\system\classes\Kohana\Route.php(90): Kohana_Route->__construct(Object(Closure), '(<controller>(/...')
#3 L:\domains\localhost\www\application\bootstrap.php(530): Kohana_Route::set('admin', Object(Closure), '(<controller>(/...')
#4 L:\domains\localhost\www\index.php(102): require('L:\domains\loca...')
#5 {main} in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:39:14 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Route::compile() must be of the type array, string given, called in L:\domains\localhost\www\system\classes\Kohana\Route.php on line 327 and defined ~ SYSPATH\classes\Kohana\Route.php [ 237 ] in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:39:14 --- DEBUG: #0 L:\domains\localhost\www\system\classes\Kohana\Route.php(237): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'L:\domains\loca...', 237, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Route.php(327): Kohana_Route::compile(Object(Closure), '(<controller>(/...')
#2 L:\domains\localhost\www\system\classes\Kohana\Route.php(90): Kohana_Route->__construct(Object(Closure), '(<controller>(/...')
#3 L:\domains\localhost\www\application\bootstrap.php(530): Kohana_Route::set('admin', Object(Closure), '(<controller>(/...')
#4 L:\domains\localhost\www\index.php(102): require('L:\domains\loca...')
#5 {main} in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:39:27 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Route::compile() must be of the type array, string given, called in L:\domains\localhost\www\system\classes\Kohana\Route.php on line 327 and defined ~ SYSPATH\classes\Kohana\Route.php [ 237 ] in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:39:27 --- DEBUG: #0 L:\domains\localhost\www\system\classes\Kohana\Route.php(237): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'L:\domains\loca...', 237, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Route.php(327): Kohana_Route::compile(Object(Closure), '(<controller>(/...')
#2 L:\domains\localhost\www\system\classes\Kohana\Route.php(90): Kohana_Route->__construct(Object(Closure), '(<controller>(/...')
#3 L:\domains\localhost\www\application\bootstrap.php(530): Kohana_Route::set('admin', Object(Closure), '(<controller>(/...')
#4 L:\domains\localhost\www\index.php(102): require('L:\domains\loca...')
#5 {main} in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:40:03 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Route::compile() must be of the type array, string given, called in L:\domains\localhost\www\system\classes\Kohana\Route.php on line 327 and defined ~ SYSPATH\classes\Kohana\Route.php [ 237 ] in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:40:03 --- DEBUG: #0 L:\domains\localhost\www\system\classes\Kohana\Route.php(237): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'L:\domains\loca...', 237, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Route.php(327): Kohana_Route::compile(Object(Closure), '(<controller>(/...')
#2 L:\domains\localhost\www\system\classes\Kohana\Route.php(90): Kohana_Route->__construct(Object(Closure), '(<controller>(/...')
#3 L:\domains\localhost\www\application\bootstrap.php(539): Kohana_Route::set('admin', Object(Closure), '(<controller>(/...')
#4 L:\domains\localhost\www\index.php(102): require('L:\domains\loca...')
#5 {main} in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:40:04 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Route::compile() must be of the type array, string given, called in L:\domains\localhost\www\system\classes\Kohana\Route.php on line 327 and defined ~ SYSPATH\classes\Kohana\Route.php [ 237 ] in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:40:04 --- DEBUG: #0 L:\domains\localhost\www\system\classes\Kohana\Route.php(237): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'L:\domains\loca...', 237, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Route.php(327): Kohana_Route::compile(Object(Closure), '(<controller>(/...')
#2 L:\domains\localhost\www\system\classes\Kohana\Route.php(90): Kohana_Route->__construct(Object(Closure), '(<controller>(/...')
#3 L:\domains\localhost\www\application\bootstrap.php(539): Kohana_Route::set('admin', Object(Closure), '(<controller>(/...')
#4 L:\domains\localhost\www\index.php(102): require('L:\domains\loca...')
#5 {main} in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:40:31 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Route::compile() must be of the type array, string given, called in L:\domains\localhost\www\system\classes\Kohana\Route.php on line 327 and defined ~ SYSPATH\classes\Kohana\Route.php [ 237 ] in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:40:31 --- DEBUG: #0 L:\domains\localhost\www\system\classes\Kohana\Route.php(237): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'L:\domains\loca...', 237, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Route.php(327): Kohana_Route::compile(Object(Closure), '(<controller>(/...')
#2 L:\domains\localhost\www\system\classes\Kohana\Route.php(90): Kohana_Route->__construct(Object(Closure), '(<controller>(/...')
#3 L:\domains\localhost\www\application\bootstrap.php(538): Kohana_Route::set('admin', Object(Closure), '(<controller>(/...')
#4 L:\domains\localhost\www\index.php(102): require('L:\domains\loca...')
#5 {main} in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:40:32 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Route::compile() must be of the type array, string given, called in L:\domains\localhost\www\system\classes\Kohana\Route.php on line 327 and defined ~ SYSPATH\classes\Kohana\Route.php [ 237 ] in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:40:32 --- DEBUG: #0 L:\domains\localhost\www\system\classes\Kohana\Route.php(237): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'L:\domains\loca...', 237, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Route.php(327): Kohana_Route::compile(Object(Closure), '(<controller>(/...')
#2 L:\domains\localhost\www\system\classes\Kohana\Route.php(90): Kohana_Route->__construct(Object(Closure), '(<controller>(/...')
#3 L:\domains\localhost\www\application\bootstrap.php(538): Kohana_Route::set('admin', Object(Closure), '(<controller>(/...')
#4 L:\domains\localhost\www\index.php(102): require('L:\domains\loca...')
#5 {main} in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:40:39 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Route::compile() must be of the type array, string given, called in L:\domains\localhost\www\system\classes\Kohana\Route.php on line 327 and defined ~ SYSPATH\classes\Kohana\Route.php [ 237 ] in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:40:39 --- DEBUG: #0 L:\domains\localhost\www\system\classes\Kohana\Route.php(237): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'L:\domains\loca...', 237, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Route.php(327): Kohana_Route::compile(Object(Closure), '(<controller>(/...')
#2 L:\domains\localhost\www\system\classes\Kohana\Route.php(90): Kohana_Route->__construct(Object(Closure), '(<controller>(/...')
#3 L:\domains\localhost\www\application\bootstrap.php(538): Kohana_Route::set('admin', Object(Closure), '(<controller>(/...')
#4 L:\domains\localhost\www\index.php(102): require('L:\domains\loca...')
#5 {main} in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:40:39 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Route::compile() must be of the type array, string given, called in L:\domains\localhost\www\system\classes\Kohana\Route.php on line 327 and defined ~ SYSPATH\classes\Kohana\Route.php [ 237 ] in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:40:39 --- DEBUG: #0 L:\domains\localhost\www\system\classes\Kohana\Route.php(237): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'L:\domains\loca...', 237, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Route.php(327): Kohana_Route::compile(Object(Closure), '(<controller>(/...')
#2 L:\domains\localhost\www\system\classes\Kohana\Route.php(90): Kohana_Route->__construct(Object(Closure), '(<controller>(/...')
#3 L:\domains\localhost\www\application\bootstrap.php(538): Kohana_Route::set('admin', Object(Closure), '(<controller>(/...')
#4 L:\domains\localhost\www\index.php(102): require('L:\domains\loca...')
#5 {main} in L:\domains\localhost\www\system\classes\Kohana\Route.php:237
2013-07-21 14:41:54 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Route::matches() must be an instance of Request, string given, called in L:\domains\localhost\www\application\bootstrap.php on line 530 and defined ~ APPPATH\classes\Route.php [ 24 ] in L:\domains\localhost\www\application\classes\Route.php:24
2013-07-21 14:41:54 --- DEBUG: #0 L:\domains\localhost\www\application\classes\Route.php(24): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'L:\domains\loca...', 24, Array)
#1 L:\domains\localhost\www\application\bootstrap.php(530): Route->matches('admin/settings/...')
#2 L:\domains\localhost\www\index.php(102): require('L:\domains\loca...')
#3 {main} in L:\domains\localhost\www\application\classes\Route.php:24
2013-07-21 14:41:55 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Route::matches() must be an instance of Request, string given, called in L:\domains\localhost\www\application\bootstrap.php on line 530 and defined ~ APPPATH\classes\Route.php [ 24 ] in L:\domains\localhost\www\application\classes\Route.php:24
2013-07-21 14:41:55 --- DEBUG: #0 L:\domains\localhost\www\application\classes\Route.php(24): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'L:\domains\loca...', 24, Array)
#1 L:\domains\localhost\www\application\bootstrap.php(530): Route->matches('admin/settings/...')
#2 L:\domains\localhost\www\index.php(102): require('L:\domains\loca...')
#3 {main} in L:\domains\localhost\www\application\classes\Route.php:24
2013-07-21 17:38:42 --- CRITICAL: ErrorException [ 1 ]: Call to a member function is_ajax() on a non-object ~ APPPATH\bootstrap.php [ 508 ] in file:line
2013-07-21 17:38:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-07-21 17:39:12 --- CRITICAL: ErrorException [ 1 ]: Call to a member function is_ajax() on a non-object ~ APPPATH\bootstrap.php [ 508 ] in file:line
2013-07-21 17:39:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-07-21 17:41:27 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'AJAX' ~ APPPATH\bootstrap.php [ 508 ] in file:line
2013-07-21 17:41:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-07-21 20:04:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH\classes\Controller\Media.php [ 16 ] in L:\domains\localhost\www\application\classes\Controller\Media.php:16
2013-07-21 20:04:49 --- DEBUG: #0 L:\domains\localhost\www\application\classes\Controller\Media.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'L:\domains\loca...', 16, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Media->action_load()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Media))
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\localhost\www\application\classes\Controller\Media.php:16
2013-07-21 20:05:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: file1 ~ APPPATH\classes\Controller\Media.php [ 10 ] in L:\domains\localhost\www\application\classes\Controller\Media.php:10
2013-07-21 20:05:18 --- DEBUG: #0 L:\domains\localhost\www\application\classes\Controller\Media.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'L:\domains\loca...', 10, Array)
#1 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Media->action_load()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Media))
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\localhost\www\application\classes\Controller\Media.php:10