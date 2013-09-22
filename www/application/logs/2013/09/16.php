<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-16 02:26:47 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\twitterapi\views\tweets.php [ 4 ] in D:\OpenServer\domains\autoschool.ru\www\modules\twitterapi\views\tweets.php:4
2013-09-16 02:26:47 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\modules\twitterapi\views\tweets.php(4): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\OpenServer\d...', 4, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\autoschool.ru\www\modules\twitterapi\classes\Controller\Twitter.php(10): Kohana_View->render()
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Twitter->action_tweets()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\autoschool.ru\www\modules\twitterapi\views\tweets.php:4
2013-09-16 02:32:08 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\twitterapi\views\tweets.php [ 4 ] in D:\OpenServer\domains\autoschool.ru\www\modules\twitterapi\views\tweets.php:4
2013-09-16 02:32:08 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\modules\twitterapi\views\tweets.php(4): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\OpenServer\d...', 4, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\autoschool.ru\www\modules\twitterapi\classes\Controller\Twitter.php(10): Kohana_View->render()
#4 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Twitter->action_tweets()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\autoschool.ru\www\modules\twitterapi\views\tweets.php:4