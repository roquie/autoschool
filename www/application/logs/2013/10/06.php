<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-06 17:21:33 --- CRITICAL: Kohana_Exception [ 0 ]: The obtazovanie property does not exist in the Model_Lk_Nationality class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-10-06 17:21:33 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('obtazovanie')
#1 L:\domains\autoschool.ru\www\modules\lk\views\pages\statement.php(6): Kohana_ORM->__get('obtazovanie')
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(61): include('L:\domains\auto...')
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('L:\domains\auto...', Array)
#4 L:\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Ajax.php(185): Kohana_View->render()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Lk_Ajax->action_statement()
#6 [internal function]: Kohana_Controller->execute()
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-10-06 17:21:44 --- CRITICAL: Kohana_Exception [ 0 ]: The obrazovanie property does not exist in the Model_Lk_Nationality class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-10-06 17:21:44 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('obrazovanie')
#1 L:\domains\autoschool.ru\www\modules\lk\views\pages\statement.php(6): Kohana_ORM->__get('obrazovanie')
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(61): include('L:\domains\auto...')
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('L:\domains\auto...', Array)
#4 L:\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Ajax.php(185): Kohana_View->render()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Lk_Ajax->action_statement()
#6 [internal function]: Kohana_Controller->execute()
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-10-06 17:32:13 --- CRITICAL: ErrorException [ 8 ]: Undefined index: grajdanstvo ~ MODPATH\lk\classes\Controller\Lk\Lk.php [ 239 ] in L:\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Lk.php:239
2013-10-06 17:32:13 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Lk.php(239): Kohana_Core::error_handler(8, 'Undefined index...', 'L:\domains\auto...', 239, Array)
#1 L:\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Lk.php(117): Controller_Lk_Lk->createStatement()
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Lk_Lk->action_downloadStatement()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Lk))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Lk.php:239
2013-10-06 17:37:50 --- CRITICAL: ErrorException [ 2 ]: preg_replace(): Parameter mismatch, pattern is a string while replacement is an array ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 76 ] in file:line
2013-10-06 17:37:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', 'L:\domains\auto...', 76, Array)
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(76): preg_replace('/Nationality/', Array, '<?xml version="...')
#2 L:\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Lk.php(242): Template_TemplateDocx->setValue('Nationality', Array)
#3 L:\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Lk.php(117): Controller_Lk_Lk->createStatement()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Lk_Lk->action_downloadStatement()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Lk))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-10-06 17:38:09 --- CRITICAL: ErrorException [ 2 ]: preg_replace(): Parameter mismatch, pattern is a string while replacement is an array ~ MODPATH\docxtemplate\classes\Template\TemplateDocx.php [ 76 ] in file:line
2013-10-06 17:38:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', 'L:\domains\auto...', 76, Array)
#1 L:\domains\autoschool.ru\www\modules\docxtemplate\classes\Template\TemplateDocx.php(76): preg_replace('/Nationality/', Array, '<?xml version="...')
#2 L:\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Lk.php(244): Template_TemplateDocx->setValue('Nationality', Array)
#3 L:\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Lk.php(117): Controller_Lk_Lk->createStatement()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Lk_Lk->action_downloadStatement()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Lk))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-10-06 19:12:10 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete lk_nationality model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in L:\domains\autoschool.ru\www\modules\lk\classes\Model\Lk\Nationality.php:52
2013-10-06 19:12:10 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\lk\classes\Model\Lk\Nationality.php(52): Kohana_ORM->delete()
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Nationality.php(9): Model_Lk_Nationality->del(1)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(69): Controller_Admin_Nationality->before()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Nationality))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\modules\lk\classes\Model\Lk\Nationality.php:52
2013-10-06 19:38:15 --- CRITICAL: ErrorException [ 2 ]: session_destroy(): Session object destruction failed ~ SYSPATH\classes\Kohana\Session\Native.php [ 93 ] in file:line
2013-10-06 19:38:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'session_destroy...', 'L:\domains\auto...', 93, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Session\Native.php(93): session_destroy()
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Session.php(394): Kohana_Session_Native->_destroy()
#3 L:\domains\autoschool.ru\www\modules\goauth\classes\Controller\Goauth\Auth.php(46): Kohana_Session->destroy()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Goauth_Auth->action_logout()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Goauth_Auth))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-10-06 19:38:15 --- CRITICAL: ErrorException [ 2 ]: session_destroy(): Session object destruction failed ~ SYSPATH\classes\Kohana\Session\Native.php [ 93 ] in file:line
2013-10-06 19:38:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'session_destroy...', 'L:\domains\auto...', 93, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Session\Native.php(93): session_destroy()
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Session.php(394): Kohana_Session_Native->_destroy()
#3 L:\domains\autoschool.ru\www\modules\goauth\classes\Controller\Goauth\Auth.php(46): Kohana_Session->destroy()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Goauth_Auth->action_logout()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Goauth_Auth))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-10-06 19:38:25 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete lk_nationality model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in L:\domains\autoschool.ru\www\modules\lk\classes\Model\Lk\Nationality.php:52
2013-10-06 19:38:25 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\lk\classes\Model\Lk\Nationality.php(52): Kohana_ORM->delete()
#1 L:\domains\autoschool.ru\www\modules\lk\views\pages\statement.php(2): Model_Lk_Nationality->del(1)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(61): include('L:\domains\auto...')
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('L:\domains\auto...', Array)
#4 L:\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Ajax.php(184): Kohana_View->render()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Lk_Ajax->action_statement()
#6 [internal function]: Kohana_Controller->execute()
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in L:\domains\autoschool.ru\www\modules\lk\classes\Model\Lk\Nationality.php:52
2013-10-06 19:38:28 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete lk_nationality model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in L:\domains\autoschool.ru\www\modules\lk\classes\Model\Lk\Nationality.php:52
2013-10-06 19:38:28 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\lk\classes\Model\Lk\Nationality.php(52): Kohana_ORM->delete()
#1 L:\domains\autoschool.ru\www\modules\lk\views\pages\statement.php(2): Model_Lk_Nationality->del(1)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(61): include('L:\domains\auto...')
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('L:\domains\auto...', Array)
#4 L:\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Ajax.php(184): Kohana_View->render()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Lk_Ajax->action_statement()
#6 [internal function]: Kohana_Controller->execute()
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in L:\domains\autoschool.ru\www\modules\lk\classes\Model\Lk\Nationality.php:52
2013-10-06 19:38:30 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete lk_nationality model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in L:\domains\autoschool.ru\www\modules\lk\classes\Model\Lk\Nationality.php:52
2013-10-06 19:38:30 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\lk\classes\Model\Lk\Nationality.php(52): Kohana_ORM->delete()
#1 L:\domains\autoschool.ru\www\modules\lk\views\pages\statement.php(2): Model_Lk_Nationality->del(1)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(61): include('L:\domains\auto...')
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('L:\domains\auto...', Array)
#4 L:\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Ajax.php(184): Kohana_View->render()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Lk_Ajax->action_statement()
#6 [internal function]: Kohana_Controller->execute()
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in L:\domains\autoschool.ru\www\modules\lk\classes\Model\Lk\Nationality.php:52
2013-10-06 19:39:12 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete lk_nationality model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in L:\domains\autoschool.ru\www\modules\lk\classes\Model\Lk\Nationality.php:52
2013-10-06 19:39:12 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\lk\classes\Model\Lk\Nationality.php(52): Kohana_ORM->delete()
#1 L:\domains\autoschool.ru\www\modules\lk\views\pages\statement.php(2): Model_Lk_Nationality->del(1)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(61): include('L:\domains\auto...')
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('L:\domains\auto...', Array)
#4 L:\domains\autoschool.ru\www\modules\lk\classes\Controller\Lk\Ajax.php(184): Kohana_View->render()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Lk_Ajax->action_statement()
#6 [internal function]: Kohana_Controller->execute()
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lk_Ajax))
#8 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in L:\domains\autoschool.ru\www\modules\lk\classes\Model\Lk\Nationality.php:52
2013-10-06 19:41:32 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete lk_nationality model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in L:\domains\autoschool.ru\www\modules\lk\classes\Model\Lk\Nationality.php:51
2013-10-06 19:41:32 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\lk\classes\Model\Lk\Nationality.php(51): Kohana_ORM->delete()
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Nationality.php(9): Model_Lk_Nationality->del(1)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(69): Controller_Admin_Nationality->before()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Nationality))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\modules\lk\classes\Model\Lk\Nationality.php:51
2013-10-06 19:41:37 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete lk_nationality model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in L:\domains\autoschool.ru\www\modules\lk\classes\Model\Lk\Nationality.php:51
2013-10-06 19:41:37 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\lk\classes\Model\Lk\Nationality.php(51): Kohana_ORM->delete()
#1 L:\domains\autoschool.ru\www\application\classes\Controller\Admin\Nationality.php(9): Model_Lk_Nationality->del(1)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(69): Controller_Admin_Nationality->before()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Nationality))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\modules\lk\classes\Model\Lk\Nationality.php:51
2013-10-06 21:39:46 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in L:\domains\autoschool.ru\www\system\classes\Kohana\View.php:137
2013-10-06 21:39:46 --- DEBUG: #0 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Autocrud))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in L:\domains\autoschool.ru\www\system\classes\Kohana\View.php:137
2013-10-06 21:40:15 --- CRITICAL: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ MODPATH\autocrud\classes\Controller\Autocrud.php [ 17 ] in file:line
2013-10-06 21:40:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-06 21:47:21 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'NAMES TABLES from mpt_auto' at line 1 [ SHOW NAMES TABLES from mpt_auto ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2013-10-06 21:47:21 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(NULL, 'SHOW NAMES TABL...', false, Array)
#1 L:\domains\autoschool.ru\www\modules\autocrud\classes\Controller\Autocrud.php(17): Kohana_Database_Query->execute()
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Autocrud->action_init()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Autocrud))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2013-10-06 21:48:19 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_Query::$users ~ MODPATH\autocrud\classes\Controller\Autocrud.php [ 17 ] in L:\domains\autoschool.ru\www\modules\autocrud\classes\Controller\Autocrud.php:17
2013-10-06 21:48:19 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\autocrud\classes\Controller\Autocrud.php(17): Kohana_Core::error_handler(8, 'Undefined prope...', 'L:\domains\auto...', 17, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Autocrud->action_init()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Autocrud))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\modules\autocrud\classes\Controller\Autocrud.php:17
2013-10-06 21:49:45 --- CRITICAL: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ MODPATH\autocrud\classes\Controller\Autocrud.php [ 17 ] in file:line
2013-10-06 21:49:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-06 22:09:22 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_DB::insert() must be of the type array, string given, called in L:\domains\autoschool.ru\www\modules\autocrud\classes\Controller\Autocrud.php on line 36 and defined ~ MODPATH\database\classes\Kohana\DB.php [ 89 ] in L:\domains\autoschool.ru\www\modules\database\classes\Kohana\DB.php:89
2013-10-06 22:09:22 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\database\classes\Kohana\DB.php(89): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'L:\domains\auto...', 89, Array)
#1 L:\domains\autoschool.ru\www\modules\autocrud\classes\Controller\Autocrud.php(36): Kohana_DB::insert('educations', 'obrazovanie')
#2 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Autocrud->action_init()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Autocrud))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\autoschool.ru\www\modules\database\classes\Kohana\DB.php:89
2013-10-06 23:18:52 --- CRITICAL: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'autocrud' at 'MODPATH\autocrud' ~ SYSPATH\classes\Kohana\Core.php [ 579 ] in D:\OpenServer\domains\autoschool.ru\www\application\bootstrap.php:141
2013-10-06 23:18:52 --- DEBUG: #0 D:\OpenServer\domains\autoschool.ru\www\application\bootstrap.php(141): Kohana_Core::modules(Array)
#1 D:\OpenServer\domains\autoschool.ru\www\index.php(102): require('D:\OpenServer\d...')
#2 {main} in D:\OpenServer\domains\autoschool.ru\www\application\bootstrap.php:141