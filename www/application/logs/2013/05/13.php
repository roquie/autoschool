<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-13 00:10:43 --- CRITICAL: ErrorException [ 2 ]: mail() expects parameter 1 to be string, array given ~ MODPATH\email\classes\Kohana\RqMail.php [ 182 ] in file:line
2013-05-13 00:10:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mail() expects ...', 'C:\OpenServer\d...', 182, Array)
#1 C:\OpenServer\domains\localhost\www\modules\email\classes\Kohana\RqMail.php(182): mail(Array, ' =?utf-8?b?MTE=...', '----EB80DB03902...', 'From: test@exam...')
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Mail.php(213): Kohana_RqMail->send()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Mail->action_fly_post_go()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mail))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-05-13 00:10:47 --- CRITICAL: ErrorException [ 2 ]: mail() expects parameter 1 to be string, array given ~ MODPATH\email\classes\Kohana\RqMail.php [ 182 ] in file:line
2013-05-13 00:10:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mail() expects ...', 'C:\OpenServer\d...', 182, Array)
#1 C:\OpenServer\domains\localhost\www\modules\email\classes\Kohana\RqMail.php(182): mail(Array, ' =?utf-8?b?MTE=...', '----5E154087EEC...', 'From: test@exam...')
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Mail.php(213): Kohana_RqMail->send()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Mail->action_fly_post_go()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mail))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-05-13 01:25:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: depts ~ APPPATH\views\navbar.php [ 43 ] in C:\OpenServer\domains\localhost\www\application\views\navbar.php:43
2013-05-13 01:25:30 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\views\navbar.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 43, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\www\application\views\layout.php(48): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\www\application\views\navbar.php:43
2013-05-13 01:26:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: depts ~ APPPATH\views\navbar.php [ 43 ] in C:\OpenServer\domains\localhost\www\application\views\navbar.php:43
2013-05-13 01:26:02 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\views\navbar.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 43, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\www\application\views\layout.php(48): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\www\application\views\navbar.php:43
2013-05-13 01:26:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: depts ~ APPPATH\views\navbar.php [ 43 ] in C:\OpenServer\domains\localhost\www\application\views\navbar.php:43
2013-05-13 01:26:25 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\views\navbar.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 43, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\www\application\views\layout.php(48): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\www\application\views\navbar.php:43
2013-05-13 01:26:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: departments ~ APPPATH\views\navbar.php [ 43 ] in C:\OpenServer\domains\localhost\www\application\views\navbar.php:43
2013-05-13 01:26:44 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\views\navbar.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 43, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\www\application\views\layout.php(48): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\www\application\views\navbar.php:43
2013-05-13 01:28:34 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Department class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-13 01:28:34 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 C:\OpenServer\domains\localhost\www\application\views\settings.php(326): Kohana_ORM->__get('name')
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\localhost\www\application\views\layout.php(49): Kohana_View->__toString()
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#12 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#15 {main} in C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-13 01:45:03 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update group model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 01:45:03 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(64): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(264): Model_Group->updateGroup(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveGroup()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:01:06 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update group model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:01:06 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(64): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(270): Model_Group->updateGroup(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveGroup()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:01:09 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update group model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:01:09 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(64): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(270): Model_Group->updateGroup(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveGroup()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:01:09 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update group model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:01:09 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(64): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(270): Model_Group->updateGroup(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveGroup()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:01:09 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update group model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:01:09 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(64): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(270): Model_Group->updateGroup(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveGroup()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:02:55 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update group model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:02:55 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(64): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(270): Model_Group->updateGroup(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveGroup()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:05:05 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update group model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:05:05 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(64): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(260): Model_Group->updateGroup(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveGroup()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:05:05 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update group model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:05:05 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(64): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(260): Model_Group->updateGroup(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveGroup()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:05:06 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update group model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:05:06 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(64): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(260): Model_Group->updateGroup(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveGroup()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:05:06 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update group model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:05:06 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(64): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(260): Model_Group->updateGroup(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveGroup()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:05:06 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update group model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:05:06 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(64): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(260): Model_Group->updateGroup(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveGroup()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:05:06 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update group model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:05:06 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(64): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(260): Model_Group->updateGroup(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveGroup()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:05:06 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update group model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:05:06 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(64): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(260): Model_Group->updateGroup(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveGroup()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:05:07 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update group model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:05:07 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(64): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(260): Model_Group->updateGroup(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveGroup()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:05:07 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update group model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:05:07 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(64): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(260): Model_Group->updateGroup(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveGroup()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:05:07 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update group model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:05:07 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(64): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(260): Model_Group->updateGroup(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveGroup()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:05:07 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update group model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:05:07 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(64): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(260): Model_Group->updateGroup(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveGroup()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:06:01 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update group model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:06:01 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(64): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(260): Model_Group->updateGroup(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveGroup()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:07:31 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update group model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:07:31 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(64): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(260): Model_Group->updateGroup(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveGroup()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:09:15 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update group model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:09:15 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(64): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(260): Model_Group->updateGroup(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveGroup()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:09:16 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update group model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:09:16 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(64): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(260): Model_Group->updateGroup(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveGroup()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:09:17 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update group model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:09:17 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(64): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(260): Model_Group->updateGroup(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveGroup()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:09:17 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update group model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:09:17 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(64): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(260): Model_Group->updateGroup(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveGroup()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:09:17 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update group model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:09:17 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(64): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(260): Model_Group->updateGroup(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveGroup()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:09:18 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update group model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:09:18 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(64): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(260): Model_Group->updateGroup(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveGroup()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:64
2013-05-13 02:44:26 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT `department`.`id` AS `id`, `department`.`number` AS `number` FROM `Departments` AS `department` WHERE `name` = 'e' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-13 02:44:26 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `departm...', false, Array)
#1 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\OpenServer\domains\localhost\www\application\classes\Model\Department.php(26): Kohana_ORM->find()
#4 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(310): Model_Department->getName('e')
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_addDept()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#11 {main} in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-13 02:44:27 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT `department`.`id` AS `id`, `department`.`number` AS `number` FROM `Departments` AS `department` WHERE `name` = 'e' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-13 02:44:27 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `departm...', false, Array)
#1 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\OpenServer\domains\localhost\www\application\classes\Model\Department.php(26): Kohana_ORM->find()
#4 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(310): Model_Department->getName('e')
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_addDept()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#11 {main} in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-13 02:44:29 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT `department`.`id` AS `id`, `department`.`number` AS `number` FROM `Departments` AS `department` WHERE `name` = '1' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-13 02:44:29 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `departm...', false, Array)
#1 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\OpenServer\domains\localhost\www\application\classes\Model\Department.php(26): Kohana_ORM->find()
#4 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(310): Model_Department->getName('1')
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_addDept()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#11 {main} in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-13 02:44:30 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT `department`.`id` AS `id`, `department`.`number` AS `number` FROM `Departments` AS `department` WHERE `name` = '1' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-13 02:44:30 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `departm...', false, Array)
#1 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\OpenServer\domains\localhost\www\application\classes\Model\Department.php(26): Kohana_ORM->find()
#4 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(310): Model_Department->getName('1')
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_addDept()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#11 {main} in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-13 02:44:30 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT `department`.`id` AS `id`, `department`.`number` AS `number` FROM `Departments` AS `department` WHERE `name` = '1' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-13 02:44:30 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `departm...', false, Array)
#1 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\OpenServer\domains\localhost\www\application\classes\Model\Department.php(26): Kohana_ORM->find()
#4 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(310): Model_Department->getName('1')
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_addDept()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#11 {main} in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-13 02:46:31 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT `department`.`id` AS `id`, `department`.`number` AS `number` FROM `Departments` AS `department` WHERE `name` = '2' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-13 02:46:31 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `departm...', false, Array)
#1 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\OpenServer\domains\localhost\www\application\classes\Model\Department.php(26): Kohana_ORM->find()
#4 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(310): Model_Department->getName('2')
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_addDept()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#11 {main} in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-13 02:46:40 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT `department`.`id` AS `id`, `department`.`number` AS `number` FROM `Departments` AS `department` WHERE `name` = '' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-13 02:46:40 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `departm...', false, Array)
#1 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\OpenServer\domains\localhost\www\application\classes\Model\Department.php(26): Kohana_ORM->find()
#4 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(310): Model_Department->getName('')
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_addDept()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#11 {main} in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-13 02:50:09 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Group::addDept() ~ APPPATH\classes\Controller\Settings.php [ 314 ] in file:line
2013-05-13 02:50:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-13 02:50:11 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Group::addDept() ~ APPPATH\classes\Controller\Settings.php [ 314 ] in file:line
2013-05-13 02:50:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-13 02:50:13 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Group::addDept() ~ APPPATH\classes\Controller\Settings.php [ 314 ] in file:line
2013-05-13 02:50:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-13 02:50:14 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Group::addDept() ~ APPPATH\classes\Controller\Settings.php [ 314 ] in file:line
2013-05-13 02:50:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-13 02:50:14 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Group::addDept() ~ APPPATH\classes\Controller\Settings.php [ 314 ] in file:line
2013-05-13 02:50:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-13 02:50:15 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Group::addDept() ~ APPPATH\classes\Controller\Settings.php [ 314 ] in file:line
2013-05-13 02:50:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-13 02:50:15 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Group::addDept() ~ APPPATH\classes\Controller\Settings.php [ 314 ] in file:line
2013-05-13 02:50:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-13 02:50:15 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Group::addDept() ~ APPPATH\classes\Controller\Settings.php [ 314 ] in file:line
2013-05-13 02:50:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-13 02:50:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Group::addDept() ~ APPPATH\classes\Controller\Settings.php [ 314 ] in file:line
2013-05-13 02:50:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-13 02:50:39 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Group::addDept() ~ APPPATH\classes\Controller\Settings.php [ 314 ] in file:line
2013-05-13 02:50:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-13 02:50:40 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Group::addDept() ~ APPPATH\classes\Controller\Settings.php [ 314 ] in file:line
2013-05-13 02:50:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-13 02:50:41 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Group::addDept() ~ APPPATH\classes\Controller\Settings.php [ 314 ] in file:line
2013-05-13 02:50:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-13 02:50:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Group::addDept() ~ APPPATH\classes\Controller\Settings.php [ 314 ] in file:line
2013-05-13 02:50:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-13 02:51:19 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Group::addDept() ~ APPPATH\classes\Controller\Settings.php [ 314 ] in file:line
2013-05-13 02:51:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-13 02:51:24 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Group::addDept() ~ APPPATH\classes\Controller\Settings.php [ 314 ] in file:line
2013-05-13 02:51:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-13 02:51:42 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Group::addDept() ~ APPPATH\classes\Controller\Settings.php [ 314 ] in file:line
2013-05-13 02:51:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-13 02:53:07 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update department model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Department.php:65
2013-05-13 02:53:07 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Department.php(65): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(355): Model_Department->updateDept(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveDept()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Department.php:65
2013-05-13 02:53:16 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update department model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Department.php:65
2013-05-13 02:53:16 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Department.php(65): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(355): Model_Department->updateDept(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveDept()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Department.php:65
2013-05-13 02:53:41 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update department model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Department.php:65
2013-05-13 02:53:41 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Department.php(65): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(355): Model_Department->updateDept(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveDept()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Department.php:65
2013-05-13 03:10:22 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Groupe' not found ~ APPPATH\classes\Model.php [ 10 ] in file:line
2013-05-13 03:10:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-13 03:10:30 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update department model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Department.php:65
2013-05-13 03:10:30 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Department.php(65): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(355): Model_Department->updateDept(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveDept()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Department.php:65
2013-05-13 03:10:44 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update department model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Department.php:65
2013-05-13 03:10:44 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Department.php(65): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(355): Model_Department->updateDept(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveDept()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Department.php:65
2013-05-13 03:11:09 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update department model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Department.php:65
2013-05-13 03:11:09 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Department.php(65): Kohana_ORM->update()
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(355): Model_Department->updateDept(Array)
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveDept()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Department.php:65
2013-05-13 03:20:46 --- CRITICAL: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\Model\Group.php [ 26 ] in file:line
2013-05-13 03:20:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-13 03:20:58 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Model\Group.php [ 26 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:26
2013-05-13 03:20:58 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(26): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\OpenServer\d...', 26, Array)
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(196): Model_Group->getAllArray()
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:26
2013-05-13 03:21:09 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Model\Group.php [ 26 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:26
2013-05-13 03:21:09 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(26): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\OpenServer\d...', 26, Array)
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(196): Model_Group->getAllArray()
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:26
2013-05-13 03:21:18 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Model\Group.php [ 27 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:27
2013-05-13 03:21:18 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(27): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\OpenServer\d...', 27, Array)
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(196): Model_Group->getAllArray()
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:27
2013-05-13 03:21:55 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Model\Group.php [ 27 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:27
2013-05-13 03:21:55 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(27): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\OpenServer\d...', 27, Array)
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(196): Model_Group->getAllArray()
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:27
2013-05-13 03:21:58 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Model\Group.php [ 27 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:27
2013-05-13 03:21:58 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(27): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\OpenServer\d...', 27, Array)
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(196): Model_Group->getAllArray()
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:27
2013-05-13 03:23:19 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Model\Group.php [ 27 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:27
2013-05-13 03:23:19 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(27): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 27, Array)
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(196): Model_Group->getAllArray()
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:27
2013-05-13 03:24:42 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type ~ APPPATH\classes\Model\Group.php [ 27 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:27
2013-05-13 03:24:42 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(27): Kohana_Core::error_handler(2, 'Illegal offset ...', 'C:\OpenServer\d...', 27, Array)
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(196): Model_Group->getAllArray()
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:27
2013-05-13 03:50:47 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\Papers.php [ 211 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:211
2013-05-13 03:50:47 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(211): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\OpenServer\d...', 211, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_exportPaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:211
2013-05-13 03:54:05 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\Papers.php [ 212 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:212
2013-05-13 03:54:05 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(212): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\OpenServer\d...', 212, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_exportPaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:212
2013-05-13 04:07:04 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\Papers.php [ 240 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:240
2013-05-13 04:07:04 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(240): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\OpenServer\d...', 240, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_safePaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:240
2013-05-13 04:10:11 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Papers.php [ 258 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:258
2013-05-13 04:10:11 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(258): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 258, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:258
2013-05-13 04:10:12 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Papers.php [ 258 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:258
2013-05-13 04:10:12 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(258): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 258, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:258
2013-05-13 04:10:13 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Papers.php [ 258 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:258
2013-05-13 04:10:13 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(258): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 258, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:258
2013-05-13 04:10:14 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Papers.php [ 258 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:258
2013-05-13 04:10:14 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(258): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 258, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:258
2013-05-13 04:10:15 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Papers.php [ 258 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:258
2013-05-13 04:10:15 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(258): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 258, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:258
2013-05-13 04:10:15 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Papers.php [ 258 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:258
2013-05-13 04:10:15 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(258): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 258, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:258
2013-05-13 04:10:15 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Papers.php [ 258 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:258
2013-05-13 04:10:15 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(258): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 258, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:258
2013-05-13 04:12:00 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Papers.php [ 267 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:267
2013-05-13 04:12:00 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(267): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 267, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:267
2013-05-13 04:12:01 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Papers.php [ 230 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:230
2013-05-13 04:12:01 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(230): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 230, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_exportPaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:230
2013-05-13 04:12:03 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Papers.php [ 267 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:267
2013-05-13 04:12:03 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(267): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 267, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:267
2013-05-13 04:12:03 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Papers.php [ 230 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:230
2013-05-13 04:12:03 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(230): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 230, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_exportPaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:230
2013-05-13 04:12:03 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Papers.php [ 267 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:267
2013-05-13 04:12:03 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(267): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 267, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:267
2013-05-13 04:12:04 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Papers.php [ 230 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:230
2013-05-13 04:12:04 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(230): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 230, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_exportPaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:230
2013-05-13 04:12:04 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Papers.php [ 267 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:267
2013-05-13 04:12:04 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(267): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 267, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:267
2013-05-13 04:12:04 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Papers.php [ 230 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:230
2013-05-13 04:12:04 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(230): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 230, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_exportPaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:230
2013-05-13 04:12:04 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Papers.php [ 267 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:267
2013-05-13 04:12:04 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(267): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 267, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:267
2013-05-13 04:12:15 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Papers.php [ 267 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:267
2013-05-13 04:12:15 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(267): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 267, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:267
2013-05-13 04:12:28 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Too many connections ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:171
2013-05-13 04:12:28 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('Rights')
#3 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\OpenServer\domains\localhost\www\application\classes\Model.php(10): Kohana_ORM->__construct()
#7 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(192): Model::factory('Right')
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:171
2013-05-13 04:12:34 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Papers.php [ 267 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:267
2013-05-13 04:12:34 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(267): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 267, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:267
2013-05-13 04:12:43 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Papers.php [ 230 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:230
2013-05-13 04:12:43 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(230): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 230, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_exportPaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:230
2013-05-13 04:12:45 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Papers.php [ 230 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:230
2013-05-13 04:12:45 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(230): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 230, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_exportPaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:230
2013-05-13 04:12:45 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Papers.php [ 230 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:230
2013-05-13 04:12:45 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(230): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 230, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_exportPaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:230
2013-05-13 04:12:45 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Papers.php [ 230 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:230
2013-05-13 04:12:45 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(230): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 230, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_exportPaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:230
2013-05-13 04:12:46 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Papers.php [ 230 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:230
2013-05-13 04:12:46 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(230): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 230, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_exportPaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:230
2013-05-13 04:12:46 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Papers.php [ 230 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:230
2013-05-13 04:12:46 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(230): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 230, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_exportPaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:230
2013-05-13 04:12:46 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Papers.php [ 230 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:230
2013-05-13 04:12:46 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(230): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 230, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_exportPaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:230
2013-05-13 04:30:29 --- CRITICAL: ErrorException [ 2 ]: move_uploaded_file(./uploads/downloaded/svod.xls): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\Papers.php [ 281 ] in file:line
2013-05-13 04:30:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'C:\OpenServer\d...', 281, Array)
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(281): move_uploaded_file('C:\OpenServer\u...', './uploads/downl...')
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_upload_file()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-05-13 04:35:30 --- CRITICAL: ErrorException [ 2 ]: scandir(/uploads/downloaded/,/uploads/downloaded/):  ~ APPPATH\classes\Controller\Papers.php [ 291 ] in file:line
2013-05-13 04:35:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'scandir(/upload...', 'C:\OpenServer\d...', 291, Array)
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(291): scandir('/uploads/downlo...')
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(146): Controller_Papers->scanDownloadedFolder()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_view()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-05-13 04:36:38 --- CRITICAL: ErrorException [ 2 ]: scandir(/uploads/downloaded,/uploads/downloaded):  ~ APPPATH\classes\Controller\Papers.php [ 291 ] in file:line
2013-05-13 04:36:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'scandir(/upload...', 'C:\OpenServer\d...', 291, Array)
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(291): scandir('/uploads/downlo...')
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(146): Controller_Papers->scanDownloadedFolder()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_view()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-05-13 04:46:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\papers\export.php [ 16 ] in file:line
2013-05-13 04:46:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-13 04:47:35 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Papers.php [ 271 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:271
2013-05-13 04:47:35 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(271): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 271, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:271
2013-05-13 04:50:53 --- CRITICAL: ErrorException [ 2 ]: fopen(./uploads/created/vedomost 2013-05-13 04:50:52.xls): failed to open stream: Invalid argument ~ MODPATH\phpexcel\classes\vendor\phpexcel\PHPExcel\Shared\OLE\PPS\Root.php [ 90 ] in file:line
2013-05-13 04:50:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(./uploads...', 'C:\OpenServer\d...', 90, Array)
#1 C:\OpenServer\domains\localhost\www\modules\phpexcel\classes\vendor\phpexcel\PHPExcel\Shared\OLE\PPS\Root.php(90): fopen('./uploads/creat...', 'wb')
#2 C:\OpenServer\domains\localhost\www\modules\phpexcel\classes\vendor\phpexcel\PHPExcel\Writer\Excel5.php(233): PHPExcel_Shared_OLE_PPS_Root->save('./uploads/creat...')
#3 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(264): PHPExcel_Writer_Excel5->save('./uploads/creat...')
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-05-13 04:51:07 --- CRITICAL: ErrorException [ 2 ]: fopen(./uploads/created/vedomost 2013-05-13 04:51:06.xls): failed to open stream: Invalid argument ~ MODPATH\phpexcel\classes\vendor\phpexcel\PHPExcel\Shared\OLE\PPS\Root.php [ 90 ] in file:line
2013-05-13 04:51:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(./uploads...', 'C:\OpenServer\d...', 90, Array)
#1 C:\OpenServer\domains\localhost\www\modules\phpexcel\classes\vendor\phpexcel\PHPExcel\Shared\OLE\PPS\Root.php(90): fopen('./uploads/creat...', 'wb')
#2 C:\OpenServer\domains\localhost\www\modules\phpexcel\classes\vendor\phpexcel\PHPExcel\Writer\Excel5.php(233): PHPExcel_Shared_OLE_PPS_Root->save('./uploads/creat...')
#3 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(264): PHPExcel_Writer_Excel5->save('./uploads/creat...')
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-05-13 04:51:28 --- CRITICAL: ErrorException [ 2 ]: fopen(/uploads/created/vedomost 2013-05-13 04:51:26.xls): failed to open stream: Invalid argument ~ MODPATH\phpexcel\classes\vendor\phpexcel\PHPExcel\Shared\OLE\PPS\Root.php [ 90 ] in file:line
2013-05-13 04:51:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(/uploads/...', 'C:\OpenServer\d...', 90, Array)
#1 C:\OpenServer\domains\localhost\www\modules\phpexcel\classes\vendor\phpexcel\PHPExcel\Shared\OLE\PPS\Root.php(90): fopen('/uploads/create...', 'wb')
#2 C:\OpenServer\domains\localhost\www\modules\phpexcel\classes\vendor\phpexcel\PHPExcel\Writer\Excel5.php(233): PHPExcel_Shared_OLE_PPS_Root->save('/uploads/create...')
#3 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(264): PHPExcel_Writer_Excel5->save('/uploads/create...')
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-05-13 04:51:35 --- CRITICAL: ErrorException [ 2 ]: fopen(vedomost 2013-05-13 04:51:34.xls): failed to open stream: Invalid argument ~ MODPATH\phpexcel\classes\vendor\phpexcel\PHPExcel\Shared\OLE\PPS\Root.php [ 90 ] in file:line
2013-05-13 04:51:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(vedomost ...', 'C:\OpenServer\d...', 90, Array)
#1 C:\OpenServer\domains\localhost\www\modules\phpexcel\classes\vendor\phpexcel\PHPExcel\Shared\OLE\PPS\Root.php(90): fopen('vedomost 2013-0...', 'wb')
#2 C:\OpenServer\domains\localhost\www\modules\phpexcel\classes\vendor\phpexcel\PHPExcel\Writer\Excel5.php(233): PHPExcel_Shared_OLE_PPS_Root->save('vedomost 2013-0...')
#3 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(264): PHPExcel_Writer_Excel5->save('vedomost 2013-0...')
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-05-13 04:54:38 --- CRITICAL: ErrorException [ 1 ]: Class 'PHPExcel_Writer_Excel2003' not found ~ MODPATH\phpexcel\classes\vendor\phpexcel\PHPExcel\IOFactory.php [ 141 ] in file:line
2013-05-13 04:54:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-13 04:54:59 --- CRITICAL: Exception [ 0 ]: Could not close zip file ./uploads/created/vedomost 2013-05-13 04:54:57.xls. ~ MODPATH\phpexcel\classes\vendor\phpexcel\PHPExcel\Writer\Excel2007.php [ 378 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:264
2013-05-13 04:54:59 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(264): PHPExcel_Writer_Excel2007->save('./uploads/creat...')
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:264
2013-05-13 04:55:09 --- CRITICAL: Exception [ 0 ]: Could not close zip file ./uploads/created/vedomost 2013-05-13 04:55:08.xlsx. ~ MODPATH\phpexcel\classes\vendor\phpexcel\PHPExcel\Writer\Excel2007.php [ 378 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:264
2013-05-13 04:55:09 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(264): PHPExcel_Writer_Excel2007->save('./uploads/creat...')
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:264
2013-05-13 04:56:51 --- CRITICAL: Exception [ 0 ]: Could not close zip file ./uploads/created/vedomost 2013-05-13 04:56:50.xlsx. ~ MODPATH\phpexcel\classes\vendor\phpexcel\PHPExcel\Writer\Excel2007.php [ 378 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:265
2013-05-13 04:56:51 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(265): PHPExcel_Writer_Excel2007->save('./uploads/creat...')
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:265
2013-05-13 04:57:26 --- CRITICAL: Exception [ 0 ]: Could not close zip file vedomost 2013-05-13 04:57:25.xlsx. ~ MODPATH\phpexcel\classes\vendor\phpexcel\PHPExcel\Writer\Excel2007.php [ 378 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:265
2013-05-13 04:57:26 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(265): PHPExcel_Writer_Excel2007->save('vedomost 2013-0...')
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:265
2013-05-13 04:58:54 --- CRITICAL: Exception [ 0 ]: Could not close zip file ./uploads/created/vedomost 2013-05-13 04:58:53.xls. ~ MODPATH\phpexcel\classes\vendor\phpexcel\PHPExcel\Writer\Excel2007.php [ 378 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:265
2013-05-13 04:58:54 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(265): PHPExcel_Writer_Excel2007->save('./uploads/creat...')
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:265
2013-05-13 04:59:05 --- CRITICAL: Exception [ 0 ]: Could not close zip file vedomost 2013-05-13 04:59:04.xls. ~ MODPATH\phpexcel\classes\vendor\phpexcel\PHPExcel\Writer\Excel2007.php [ 378 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:265
2013-05-13 04:59:05 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(265): PHPExcel_Writer_Excel2007->save('vedomost 2013-0...')
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:265
2013-05-13 04:59:12 --- CRITICAL: Exception [ 0 ]: Could not close zip file ./uploads/created/vedomost 2013-05-13 04:59:11.xls. ~ MODPATH\phpexcel\classes\vendor\phpexcel\PHPExcel\Writer\Excel2007.php [ 378 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:265
2013-05-13 04:59:12 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(265): PHPExcel_Writer_Excel2007->save('./uploads/creat...')
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:265
2013-05-13 05:01:21 --- CRITICAL: Exception [ 0 ]: Could not close zip file ./uploads/created/vedomost 2013-05-13 05:01:20.xls. ~ MODPATH\phpexcel\classes\vendor\phpexcel\PHPExcel\Writer\Excel2007.php [ 378 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:266
2013-05-13 05:01:21 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(266): PHPExcel_Writer_Excel2007->save('./uploads/creat...')
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:266
2013-05-13 05:03:09 --- CRITICAL: Exception [ 0 ]: Error zipping files : PCLZIP_ERR_READ_OPEN_FAIL (-2) : Unable to open archive './uploads/created/vedomost 2013-05-13 05:03:09.xls' in wb mode ~ MODPATH\phpexcel\classes\vendor\phpexcel\PHPExcel\Shared\ZipArchive.php [ 108 ] in C:\OpenServer\domains\localhost\www\modules\phpexcel\classes\vendor\phpexcel\PHPExcel\Writer\Excel2007.php:253
2013-05-13 05:03:09 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\phpexcel\classes\vendor\phpexcel\PHPExcel\Writer\Excel2007.php(253): PHPExcel_Shared_ZipArchive->addFromString('[Content_Types]...', '<?xml version="...')
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(266): PHPExcel_Writer_Excel2007->save('./uploads/creat...')
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\modules\phpexcel\classes\vendor\phpexcel\PHPExcel\Writer\Excel2007.php:253
2013-05-13 05:03:22 --- CRITICAL: Exception [ 0 ]: Could not close zip file ./uploads/created/vedomost 2013-05-13 05:03:20.xls. ~ MODPATH\phpexcel\classes\vendor\phpexcel\PHPExcel\Writer\Excel2007.php [ 378 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:266
2013-05-13 05:03:22 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(266): PHPExcel_Writer_Excel2007->save('./uploads/creat...')
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:266
2013-05-13 05:04:58 --- CRITICAL: ErrorException [ 2 ]: fopen(./uploads/created/vedomost 2013-05-13 05:04:57.xls): failed to open stream: Invalid argument ~ MODPATH\phpexcel\classes\vendor\phpexcel\PHPExcel\Shared\OLE\PPS\Root.php [ 90 ] in file:line
2013-05-13 05:04:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(./uploads...', 'C:\OpenServer\d...', 90, Array)
#1 C:\OpenServer\domains\localhost\www\modules\phpexcel\classes\vendor\phpexcel\PHPExcel\Shared\OLE\PPS\Root.php(90): fopen('./uploads/creat...', 'wb')
#2 C:\OpenServer\domains\localhost\www\modules\phpexcel\classes\vendor\phpexcel\PHPExcel\Writer\Excel5.php(233): PHPExcel_Shared_OLE_PPS_Root->save('./uploads/creat...')
#3 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(266): PHPExcel_Writer_Excel5->save('./uploads/creat...')
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-05-13 05:05:06 --- CRITICAL: ErrorException [ 1 ]: Class 'PHPExcel_Writer_Excel95' not found ~ MODPATH\phpexcel\classes\vendor\phpexcel\PHPExcel\IOFactory.php [ 141 ] in file:line
2013-05-13 05:05:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-13 05:05:13 --- CRITICAL: ErrorException [ 2 ]: fopen(./uploads/created/vedomost 2013-05-13 05:05:12.xls): failed to open stream: Invalid argument ~ MODPATH\phpexcel\classes\vendor\phpexcel\PHPExcel\Shared\OLE\PPS\Root.php [ 90 ] in file:line
2013-05-13 05:05:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(./uploads...', 'C:\OpenServer\d...', 90, Array)
#1 C:\OpenServer\domains\localhost\www\modules\phpexcel\classes\vendor\phpexcel\PHPExcel\Shared\OLE\PPS\Root.php(90): fopen('./uploads/creat...', 'wb')
#2 C:\OpenServer\domains\localhost\www\modules\phpexcel\classes\vendor\phpexcel\PHPExcel\Writer\Excel5.php(233): PHPExcel_Shared_OLE_PPS_Root->save('./uploads/creat...')
#3 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(266): PHPExcel_Writer_Excel5->save('./uploads/creat...')
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-05-13 05:13:28 --- CRITICAL: ErrorException [ 2 ]: fopen(C:\OpenServer\domains\localhost\www\application\uploads/created/vedomost 2013-05-13 05:13:27.xls): failed to open stream: Invalid argument ~ MODPATH\phpexcel\classes\vendor\phpexcel\PHPExcel\Shared\OLE\PPS\Root.php [ 90 ] in file:line
2013-05-13 05:13:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(C:\OpenSe...', 'C:\OpenServer\d...', 90, Array)
#1 C:\OpenServer\domains\localhost\www\modules\phpexcel\classes\vendor\phpexcel\PHPExcel\Shared\OLE\PPS\Root.php(90): fopen('C:\OpenServer\d...', 'wb')
#2 C:\OpenServer\domains\localhost\www\modules\phpexcel\classes\vendor\phpexcel\PHPExcel\Writer\Excel5.php(233): PHPExcel_Shared_OLE_PPS_Root->save('C:\OpenServer\d...')
#3 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(266): PHPExcel_Writer_Excel5->save('C:\OpenServer\d...')
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-05-13 05:13:55 --- CRITICAL: Exception [ 0 ]: Could not close zip file C:\OpenServer\domains\localhost\www\application\uploads/created/vedomost 2013-05-13 05:13:54.xlsx. ~ MODPATH\phpexcel\classes\vendor\phpexcel\PHPExcel\Writer\Excel2007.php [ 378 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:266
2013-05-13 05:13:55 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(266): PHPExcel_Writer_Excel2007->save('C:\OpenServer\d...')
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:266
2013-05-13 05:14:13 --- CRITICAL: Exception [ 0 ]: Could not close zip file C:\OpenServer\domains\localhost\www\application\uploads/created/vedomost 2013-05-13 05:14:12.xlsx. ~ MODPATH\phpexcel\classes\vendor\phpexcel\PHPExcel\Writer\Excel2007.php [ 378 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:266
2013-05-13 05:14:13 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php(266): PHPExcel_Writer_Excel2007->save('C:\OpenServer\d...')
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Papers->action_savePaper()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Papers.php:266
2013-05-13 06:02:33 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'melnik5g_mpt'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:171
2013-05-13 06:02:33 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('Rights')
#3 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Model.php(26): Kohana_ORM->__construct()
#7 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(192): Kohana_Model::factory('Right')
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:171
2013-05-13 06:04:56 --- CRITICAL: Exception [ 0 ]: Could not open test.xlsx for reading! File does not exist. ~ MODPATH\phpexcel\classes\vendor\phpexcel\PHPExcel\Reader\Excel2007.php [ 235 ] in C:\OpenServer\domains\localhost\www\modules\phpexcel\classes\vendor\phpexcel\PHPExcel\IOFactory.php:268
2013-05-13 06:04:56 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\phpexcel\classes\vendor\phpexcel\PHPExcel\IOFactory.php(268): PHPExcel_Reader_Excel2007->canRead('test.xlsx')
#1 C:\OpenServer\domains\localhost\www\modules\phpexcel\classes\vendor\phpexcel\PHPExcel\IOFactory.php(191): PHPExcel_IOFactory::createReaderForFile('test.xlsx')
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(72): PHPExcel_IOFactory::load('test.xlsx')
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\www\modules\phpexcel\classes\vendor\phpexcel\PHPExcel\IOFactory.php:268
2013-05-13 06:05:56 --- CRITICAL: Exception [ 0 ]: Could not open C:\OpenServer\domains\localhost\www\application\uploads/downloaded/svod.xlsx for reading! File does not exist. ~ MODPATH\phpexcel\classes\vendor\phpexcel\PHPExcel\Reader\Excel2007.php [ 235 ] in C:\OpenServer\domains\localhost\www\modules\phpexcel\classes\vendor\phpexcel\PHPExcel\IOFactory.php:268
2013-05-13 06:05:56 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\phpexcel\classes\vendor\phpexcel\PHPExcel\IOFactory.php(268): PHPExcel_Reader_Excel2007->canRead('C:\OpenServer\d...')
#1 C:\OpenServer\domains\localhost\www\modules\phpexcel\classes\vendor\phpexcel\PHPExcel\IOFactory.php(191): PHPExcel_IOFactory::createReaderForFile('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Main.php(72): PHPExcel_IOFactory::load('C:\OpenServer\d...')
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\www\modules\phpexcel\classes\vendor\phpexcel\PHPExcel\IOFactory.php:268
2013-05-13 06:06:03 --- CRITICAL: ErrorException [ 1 ]: Call to a member function getStyle() on a non-object ~ APPPATH\classes\Controller\Main.php [ 81 ] in file:line
2013-05-13 06:06:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-13 06:06:22 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method PHPExcel_Worksheet_CellIterator::getStyle() ~ APPPATH\classes\Controller\Main.php [ 79 ] in file:line
2013-05-13 06:06:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-13 06:06:44 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method PHPExcel_Cell::getStyle() ~ APPPATH\classes\Controller\Main.php [ 81 ] in file:line
2013-05-13 06:06:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-13 06:06:47 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method PHPExcel_Cell::getStyle() ~ APPPATH\classes\Controller\Main.php [ 81 ] in file:line
2013-05-13 06:06:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-13 08:38:40 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method PHPExcel_Worksheet_RowIterator::getStyle() ~ APPPATH\classes\Controller\Main.php [ 77 ] in file:line
2013-05-13 08:38:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-13 08:39:32 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method PHPExcel::getStyle() ~ APPPATH\classes\Controller\Main.php [ 75 ] in file:line
2013-05-13 08:39:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-13 08:40:14 --- CRITICAL: ErrorException [ 1 ]: Call to a member function setActiveSheetIndex() on a non-object ~ APPPATH\classes\Controller\Main.php [ 74 ] in file:line
2013-05-13 08:40:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-13 08:42:16 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method PHPExcel::getStyle() ~ APPPATH\classes\Controller\Main.php [ 73 ] in file:line
2013-05-13 08:42:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-13 08:42:44 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method PHPExcel::getStyle() ~ APPPATH\classes\Controller\Main.php [ 73 ] in file:line
2013-05-13 08:42:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-13 08:44:43 --- CRITICAL: ErrorException [ 1 ]: Call to a member function setActiveSheetIndex() on a non-object ~ APPPATH\classes\Controller\Main.php [ 74 ] in file:line
2013-05-13 08:44:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-13 08:45:42 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method PHPExcel_Style::getRotation() ~ APPPATH\classes\Controller\Main.php [ 73 ] in file:line
2013-05-13 08:45:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line