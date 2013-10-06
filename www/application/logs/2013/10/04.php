<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-04 01:19:35 --- CRITICAL: TemplatedocxException [ 0 ]: Файла нет/не читается ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 51 ] in L:\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Lk.php:176
2013-10-04 01:19:35 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Lk.php(176): Template_TemplateDocx->__construct('L:\domains\auto...')
#1 L:\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Lk.php(139): Controller_Lk_Lk->createTicket()
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Lk_Lk->action_downloadTicket()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Lk))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Lk.php:176