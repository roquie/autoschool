<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-25 00:18:35 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Ajax' not found ~ APPPATH\classes\Controller\Main\Mail.php [ 4 ] in file:line
2013-09-25 00:18:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-25 00:18:37 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Ajax' not found ~ APPPATH\classes\Controller\Main\Mail.php [ 4 ] in file:line
2013-09-25 00:18:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-25 00:18:38 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Ajax' not found ~ APPPATH\classes\Controller\Main\Mail.php [ 4 ] in file:line
2013-09-25 00:18:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-25 00:18:38 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Ajax' not found ~ APPPATH\classes\Controller\Main\Mail.php [ 4 ] in file:line
2013-09-25 00:18:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-25 00:18:38 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Ajax' not found ~ APPPATH\classes\Controller\Main\Mail.php [ 4 ] in file:line
2013-09-25 00:18:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-25 00:18:38 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Ajax' not found ~ APPPATH\classes\Controller\Main\Mail.php [ 4 ] in file:line
2013-09-25 00:18:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-25 00:18:48 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Ajax' not found ~ APPPATH\classes\Controller\Main\Mail.php [ 4 ] in file:line
2013-09-25 00:18:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-25 00:19:02 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Ajax_Ajax' not found ~ APPPATH\classes\Controller\Ajax\Main.php [ 4 ] in file:line
2013-09-25 00:19:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-25 00:26:57 --- CRITICAL: ErrorException [ 2 ]: call_user_func() expects parameter 1 to be a valid callback, class 'Swift_Message' does not have a method 'addAuto@mpt.ru' ~ MODPATH\email\classes\Kohana\Email.php [ 228 ] in file:line
2013-09-25 00:26:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func(...', 'L:\domains\auto...', 228, Array)
#1 L:\domains\autoschool.ru\www\modules\email\classes\Kohana\Email.php(228): call_user_func(Array, 'vik.melnikov@gm...', 'roquie0@gmail.c...')
#2 L:\domains\autoschool.ru\www\application\classes\Controller\Main\Mail.php(26): Kohana_Email->to('vik.melnikov@gm...', 'roquie0@gmail.c...', 'auto@mpt.ru')
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main_Mail->action_send()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Mail))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-09-25 00:27:02 --- CRITICAL: ErrorException [ 2 ]: call_user_func() expects parameter 1 to be a valid callback, class 'Swift_Message' does not have a method 'addAuto@mpt.ru' ~ MODPATH\email\classes\Kohana\Email.php [ 228 ] in file:line
2013-09-25 00:27:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func(...', 'L:\domains\auto...', 228, Array)
#1 L:\domains\autoschool.ru\www\modules\email\classes\Kohana\Email.php(228): call_user_func(Array, 'vik.melnikov@gm...', 'roquie0@gmail.c...')
#2 L:\domains\autoschool.ru\www\application\classes\Controller\Main\Mail.php(26): Kohana_Email->to('vik.melnikov@gm...', 'roquie0@gmail.c...', 'auto@mpt.ru')
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main_Mail->action_send()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Mail))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-09-25 00:27:12 --- CRITICAL: ErrorException [ 2 ]: call_user_func() expects parameter 1 to be a valid callback, class 'Swift_Message' does not have a method 'addAuto@mpt.ru' ~ MODPATH\email\classes\Kohana\Email.php [ 228 ] in file:line
2013-09-25 00:27:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func(...', 'L:\domains\auto...', 228, Array)
#1 L:\domains\autoschool.ru\www\modules\email\classes\Kohana\Email.php(228): call_user_func(Array, 'vik.melnikov@gm...', 'roquie0@gmail.c...')
#2 L:\domains\autoschool.ru\www\application\classes\Controller\Main\Mail.php(26): Kohana_Email->to('vik.melnikov@gm...', 'roquie0@gmail.c...', 'auto@mpt.ru')
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main_Mail->action_send()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Mail))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-09-25 00:27:30 --- CRITICAL: ErrorException [ 2 ]: call_user_func() expects parameter 1 to be a valid callback, class 'Swift_Message' does not have a method 'addAuto@mpt.ru' ~ MODPATH\email\classes\Kohana\Email.php [ 228 ] in file:line
2013-09-25 00:27:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func(...', 'L:\domains\auto...', 228, Array)
#1 L:\domains\autoschool.ru\www\modules\email\classes\Kohana\Email.php(228): call_user_func(Array, 'vik.melnikov@gm...', 'roquie0@gmail.c...')
#2 L:\domains\autoschool.ru\www\application\classes\Controller\Main\Mail.php(26): Kohana_Email->to('vik.melnikov@gm...', 'roquie0@gmail.c...', 'auto@mpt.ru')
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main_Mail->action_send()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Mail))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-09-25 00:28:22 --- CRITICAL: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [] does not comply with RFC 2822, 3.6.2. ~ MODPATH\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php [ 352 ] in L:\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php:264
2013-09-25 00:28:22 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php(264): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('')
#1 L:\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php(108): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 L:\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php(65): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 L:\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleMimeEntity.php(604): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 L:\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleMessage.php(215): Swift_Mime_SimpleMimeEntity->_setHeaderFieldModel('From', Array)
#5 L:\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleMessage.php(193): Swift_Mime_SimpleMessage->setFrom(Array)
#6 [internal function]: Swift_Mime_SimpleMessage->addFrom(NULL, NULL)
#7 L:\domains\autoschool.ru\www\modules\email\classes\Kohana\Email.php(296): call_user_func(Array, NULL, NULL)
#8 L:\domains\autoschool.ru\www\application\classes\Controller\Main\Mail.php(27): Kohana_Email->from(NULL, NULL)
#9 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main_Mail->action_send()
#10 [internal function]: Kohana_Controller->execute()
#11 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Mail))
#12 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in L:\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php:264
2013-09-25 00:29:30 --- CRITICAL: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [] does not comply with RFC 2822, 3.6.2. ~ MODPATH\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php [ 352 ] in L:\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php:264
2013-09-25 00:29:30 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php(264): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('')
#1 L:\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php(108): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 L:\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php(65): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 L:\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleMimeEntity.php(604): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 L:\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleMessage.php(215): Swift_Mime_SimpleMimeEntity->_setHeaderFieldModel('From', Array)
#5 L:\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleMessage.php(193): Swift_Mime_SimpleMessage->setFrom(Array)
#6 [internal function]: Swift_Mime_SimpleMessage->addFrom(NULL, NULL)
#7 L:\domains\autoschool.ru\www\modules\email\classes\Kohana\Email.php(296): call_user_func(Array, NULL, NULL)
#8 L:\domains\autoschool.ru\www\application\classes\Controller\Main\Mail.php(29): Kohana_Email->from(NULL, NULL)
#9 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main_Mail->action_send()
#10 [internal function]: Kohana_Controller->execute()
#11 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Mail))
#12 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in L:\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php:264
2013-09-25 00:32:11 --- CRITICAL: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [] does not comply with RFC 2822, 3.6.2. ~ MODPATH\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php [ 352 ] in L:\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php:264
2013-09-25 00:32:11 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php(264): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('')
#1 L:\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php(108): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 L:\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php(65): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 L:\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleMimeEntity.php(604): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 L:\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleMessage.php(215): Swift_Mime_SimpleMimeEntity->_setHeaderFieldModel('From', Array)
#5 L:\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleMessage.php(193): Swift_Mime_SimpleMessage->setFrom(Array)
#6 [internal function]: Swift_Mime_SimpleMessage->addFrom(NULL, NULL)
#7 L:\domains\autoschool.ru\www\modules\email\classes\Kohana\Email.php(296): call_user_func(Array, NULL, NULL)
#8 L:\domains\autoschool.ru\www\application\classes\Controller\Main\Mail.php(31): Kohana_Email->from(NULL, NULL)
#9 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main_Mail->action_send()
#10 [internal function]: Kohana_Controller->execute()
#11 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Mail))
#12 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in L:\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php:264
2013-09-25 00:44:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Lk_Lk::hash() ~ MODPATH\lk\classes\Controller\Lk\Lk.php [ 36 ] in file:line
2013-09-25 00:44:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-25 22:42:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ MODPATH\lk\views\lk.php [ 5 ] in file:line
2013-09-25 22:42:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line