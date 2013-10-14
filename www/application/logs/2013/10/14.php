<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-14 23:37:24 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\goauth\classes\Controller\Goauth\Auth.php [ 20 ] in L:\domains\autoschool.ru\www\modules\goauth\classes\Controller\Goauth\Auth.php:20
2013-10-14 23:37:24 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\goauth\classes\Controller\Goauth\Auth.php(20): Kohana_Core::error_handler(8, 'Trying to get p...', 'L:\domains\auto...', 20, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Goauth_Auth->action_goauth()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Goauth_Auth))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\modules\goauth\classes\Controller\Goauth\Auth.php:20
2013-10-14 23:37:48 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\goauth\classes\Controller\Goauth\Auth.php [ 20 ] in L:\domains\autoschool.ru\www\modules\goauth\classes\Controller\Goauth\Auth.php:20
2013-10-14 23:37:48 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\goauth\classes\Controller\Goauth\Auth.php(20): Kohana_Core::error_handler(8, 'Trying to get p...', 'L:\domains\auto...', 20, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Goauth_Auth->action_goauth()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Goauth_Auth))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\modules\goauth\classes\Controller\Goauth\Auth.php:20
2013-10-14 23:38:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: userInfo ~ APPPATH\classes\Controller\Main.php [ 22 ] in L:\domains\autoschool.ru\www\application\classes\Controller\Main.php:22
2013-10-14 23:38:18 --- DEBUG: #0 L:\domains\autoschool.ru\www\application\classes\Controller\Main.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'L:\domains\auto...', 22, Array)
#1 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\autoschool.ru\www\application\classes\Controller\Main.php:22
2013-10-14 23:48:11 --- CRITICAL: Database_Exception [ 1146 ]: Table 'mpt_auto.admin_administrators' doesn't exist [ SHOW FULL COLUMNS FROM `admin_administrators` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php:358
2013-10-14 23:48:11 --- DEBUG: #0 L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('admin_administr...')
#2 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 L:\domains\autoschool.ru\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 L:\domains\autoschool.ru\www\application\classes\Model.php(20): Kohana_ORM->__construct()
#6 L:\domains\autoschool.ru\www\application\classes\Controller\Admin.php(64): Model::factory('Admin_Administr...')
#7 L:\domains\autoschool.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_settings()
#8 [internal function]: Kohana_Controller->execute()
#9 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#10 L:\domains\autoschool.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 L:\domains\autoschool.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 L:\domains\autoschool.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in L:\domains\autoschool.ru\www\modules\database\classes\Kohana\Database\MySQL.php:358