<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-16 01:46:59 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Students.php [ 12 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Students.php:12
2013-05-16 01:46:59 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Students.php(12): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\OpenServer\d...', 12, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Students->action_view()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Students))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Students.php:12
2013-05-16 01:48:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Model\Group.php [ 26 ] in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:26
2013-05-16 01:48:24 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 26, Array)
#1 C:\OpenServer\domains\localhost\www\application\classes\Controller\Department.php(19): Model_Group->getGroupByDept('7')
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Department->action_DeptWithGroupBlock()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Department))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\www\application\classes\Model\Group.php:26
2013-05-16 02:00:35 --- EMERGENCY: View_Exception [ 0 ]: The requested view preview/preview could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/View.php:137
2013-05-16 02:00:35 --- DEBUG: #0 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('preview/preview')
#1 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('preview/preview', NULL)
#2 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('preview/preview')
#3 /home/m/melnik5g/roquie.tk/public_html/application/classes/Controller/MainPreview.php(10): Kohana_Controller_Template->before()
#4 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Controller.php(69): Controller_MainPreview->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Preview))
#7 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/m/melnik5g/roquie.tk/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/View.php:137
2013-05-16 02:00:40 --- EMERGENCY: View_Exception [ 0 ]: The requested view preview/preview could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/View.php:137
2013-05-16 02:00:40 --- DEBUG: #0 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('preview/preview')
#1 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('preview/preview', NULL)
#2 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('preview/preview')
#3 /home/m/melnik5g/roquie.tk/public_html/application/classes/Controller/MainPreview.php(10): Kohana_Controller_Template->before()
#4 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Controller.php(69): Controller_MainPreview->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Preview))
#7 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/m/melnik5g/roquie.tk/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/View.php:137
2013-05-16 02:01:57 --- EMERGENCY: View_Exception [ 0 ]: The requested view preview/preview could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/View.php:137
2013-05-16 02:01:57 --- DEBUG: #0 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('preview/preview')
#1 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('preview/preview', NULL)
#2 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('preview/preview')
#3 /home/m/melnik5g/roquie.tk/public_html/application/classes/Controller/MainPreview.php(10): Kohana_Controller_Template->before()
#4 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Controller.php(69): Controller_MainPreview->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Preview))
#7 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/m/melnik5g/roquie.tk/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/View.php:137
2013-05-16 02:05:28 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /home/m/melnik5g/roquie.tk/public_html/modules/database/classes/Kohana/Database/MySQL.php:171
2013-05-16 02:05:28 --- DEBUG: #0 /home/m/melnik5g/roquie.tk/public_html/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /home/m/melnik5g/roquie.tk/public_html/modules/database/classes/Kohana/Database/MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /home/m/melnik5g/roquie.tk/public_html/modules/orm/classes/Kohana/ORM.php(1665): Kohana_Database_MySQL->list_columns('Rights')
#3 /home/m/melnik5g/roquie.tk/public_html/modules/orm/classes/Kohana/ORM.php(441): Kohana_ORM->list_columns()
#4 /home/m/melnik5g/roquie.tk/public_html/modules/orm/classes/Kohana/ORM.php(386): Kohana_ORM->reload_columns()
#5 /home/m/melnik5g/roquie.tk/public_html/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Model.php(26): Kohana_ORM->__construct()
#7 /home/m/melnik5g/roquie.tk/public_html/application/classes/Controller/Main.php(194): Kohana_Model::factory('Right')
#8 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /home/m/melnik5g/roquie.tk/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /home/m/melnik5g/roquie.tk/public_html/modules/database/classes/Kohana/Database/MySQL.php:171
2013-05-16 02:09:11 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(array.txt): failed to open stream: No such file or directory ~ APPPATH/classes/Controller/Papers.php [ 223 ] in file:line
2013-05-16 02:09:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/home/m/melnik5...', 223, Array)
#1 /home/m/melnik5g/roquie.tk/public_html/application/classes/Controller/Papers.php(223): file_get_contents('array.txt')
#2 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Controller.php(84): Controller_Papers->action_exportPaper()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#5 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/m/melnik5g/roquie.tk/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-05-16 02:10:06 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Papers.php [ 226 ] in /home/m/melnik5g/roquie.tk/public_html/application/classes/Controller/Papers.php:226
2013-05-16 02:10:06 --- DEBUG: #0 /home/m/melnik5g/roquie.tk/public_html/application/classes/Controller/Papers.php(226): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/m/melnik5...', 226, Array)
#1 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Controller.php(84): Controller_Papers->action_exportPaper()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Papers))
#4 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/m/melnik5g/roquie.tk/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/m/melnik5g/roquie.tk/public_html/application/classes/Controller/Papers.php:226
2013-05-16 11:23:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/Model/Group.php [ 26 ] in /home/m/melnik5g/roquie.tk/public_html/application/classes/Model/Group.php:26
2013-05-16 11:23:00 --- DEBUG: #0 /home/m/melnik5g/roquie.tk/public_html/application/classes/Model/Group.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/m/melnik5...', 26, Array)
#1 /home/m/melnik5g/roquie.tk/public_html/application/classes/Controller/Department.php(19): Model_Group->getGroupByDept('7')
#2 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Controller.php(84): Controller_Department->action_DeptWithGroupBlock()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Department))
#5 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/m/melnik5g/roquie.tk/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home/m/melnik5g/roquie.tk/public_html/application/classes/Model/Group.php:26
2013-05-16 12:57:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/Model/Group.php [ 26 ] in /home/m/melnik5g/roquie.tk/public_html/application/classes/Model/Group.php:26
2013-05-16 12:57:52 --- DEBUG: #0 /home/m/melnik5g/roquie.tk/public_html/application/classes/Model/Group.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/m/melnik5...', 26, Array)
#1 /home/m/melnik5g/roquie.tk/public_html/application/classes/Controller/Department.php(19): Model_Group->getGroupByDept('7')
#2 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Controller.php(84): Controller_Department->action_DeptWithGroupBlock()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Department))
#5 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/m/melnik5g/roquie.tk/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home/m/melnik5g/roquie.tk/public_html/application/classes/Model/Group.php:26
2013-05-16 12:57:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/Model/Group.php [ 26 ] in /home/m/melnik5g/roquie.tk/public_html/application/classes/Model/Group.php:26
2013-05-16 12:57:59 --- DEBUG: #0 /home/m/melnik5g/roquie.tk/public_html/application/classes/Model/Group.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/m/melnik5...', 26, Array)
#1 /home/m/melnik5g/roquie.tk/public_html/application/classes/Controller/Department.php(19): Model_Group->getGroupByDept('7')
#2 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Controller.php(84): Controller_Department->action_DeptWithGroupBlock()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Department))
#5 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/m/melnik5g/roquie.tk/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/m/melnik5g/roquie.tk/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home/m/melnik5g/roquie.tk/public_html/application/classes/Model/Group.php:26