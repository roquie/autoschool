<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-30 00:34:55 --- CRITICAL: ErrorException [ 2 ]: fopen(): Filename cannot be empty ~ SYSPATH\classes\Kohana\Response.php [ 453 ] in file:line
2013-09-30 00:34:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(): Filena...', 'D:\OpenServer\d...', 453, Array)
#1 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Response.php(453): fopen('', 'rb')
#2 D:\OpenServer\domains\autoschool.ru\www\application\classes\Controller\Updownload.php(16): Kohana_Response->send_file('D:\OpenServer\d...')
#3 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Updownload->action_download()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Updownload))
#6 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-09-30 18:39:33 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\views\main\navbar.php [ 32 ] in file:line
2013-09-30 18:39:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-30 23:59:33 --- CRITICAL: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [] does not comply with RFC 2822, 3.6.2. ~ MODPATH\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php [ 352 ] in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php:264
2013-09-30 23:59:33 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php(264): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('')
#1 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php(108): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php(65): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleHeaderFactory.php(60): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleHeaderSet.php(70): Swift_Mime_SimpleHeaderFactory->createMailboxHeader('To', Array)
#5 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleMessage.php(324): Swift_Mime_SimpleHeaderSet->addMailboxHeader('To', Array)
#6 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleMessage.php(301): Swift_Mime_SimpleMessage->setTo(Array)
#7 [internal function]: Swift_Mime_SimpleMessage->addTo('', NULL)
#8 D:\OpenServer\domains\autoschool.ru\www\modules\email\classes\Kohana\Email.php(228): call_user_func(Array, '', NULL)
#9 D:\OpenServer\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Ajax.php(208): Kohana_Email->to('')
#10 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Lk_Ajax->action_register()
#11 [internal function]: Kohana_Controller->execute()
#12 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#13 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#16 {main} in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php:264
2013-09-30 23:59:42 --- CRITICAL: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [] does not comply with RFC 2822, 3.6.2. ~ MODPATH\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php [ 352 ] in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php:264
2013-09-30 23:59:42 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php(264): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('')
#1 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php(108): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php(65): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleHeaderFactory.php(60): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleHeaderSet.php(70): Swift_Mime_SimpleHeaderFactory->createMailboxHeader('To', Array)
#5 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleMessage.php(324): Swift_Mime_SimpleHeaderSet->addMailboxHeader('To', Array)
#6 D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\SimpleMessage.php(301): Swift_Mime_SimpleMessage->setTo(Array)
#7 [internal function]: Swift_Mime_SimpleMessage->addTo('', NULL)
#8 D:\OpenServer\domains\autoschool.ru\www\modules\email\classes\Kohana\Email.php(228): call_user_func(Array, '', NULL)
#9 D:\OpenServer\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Ajax.php(208): Kohana_Email->to('')
#10 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Lk_Ajax->action_register()
#11 [internal function]: Kohana_Controller->execute()
#12 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#13 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 D:\OpenServer\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 D:\OpenServer\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#16 {main} in D:\OpenServer\domains\autoschool.ru\www\modules\email\vendor\swiftmailer\classes\Swift\Mime\Headers\MailboxHeader.php:264