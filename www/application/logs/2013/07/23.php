<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-23 00:01:39 --- CRITICAL: ActiveRecord\ActiveRecordException [ 0 ]: Call to undefined method: getLastRecord ~ MODPATH\activerecord\vendor\activerecord\lib\Model.php [ 1385 ] in L:\domains\localhost\www\application\classes\Controller\Admin\Settings.php:20
2013-07-23 00:01:39 --- DEBUG: #0 L:\domains\localhost\www\application\classes\Controller\Admin\Settings.php(20): ActiveRecord\Model->__call('getLastRecord', Array)
#1 L:\domains\localhost\www\application\classes\Controller\Admin\Settings.php(20): Model_Admin_GoogleAccount->getLastRecord()
#2 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Settings->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Settings))
#5 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\localhost\www\application\classes\Controller\Admin\Settings.php:20
2013-07-23 00:02:21 --- CRITICAL: ActiveRecord\ActiveRecordException [ 0 ]: Call to undefined method: getLastRecord ~ MODPATH\activerecord\vendor\activerecord\lib\Model.php [ 1385 ] in L:\domains\localhost\www\application\classes\Controller\Admin\Settings.php:20
2013-07-23 00:02:21 --- DEBUG: #0 L:\domains\localhost\www\application\classes\Controller\Admin\Settings.php(20): ActiveRecord\Model->__call('getLastRecord', Array)
#1 L:\domains\localhost\www\application\classes\Controller\Admin\Settings.php(20): Model_Admin_GoogleAccount->getLastRecord()
#2 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Settings->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Settings))
#5 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#8 {main} in L:\domains\localhost\www\application\classes\Controller\Admin\Settings.php:20
2013-07-23 10:13:04 --- CRITICAL: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'activerecord' at 'MODPATH\activerecord' ~ SYSPATH\classes\Kohana\Core.php [ 579 ] in L:\domains\localhost\www\application\bootstrap.php:130
2013-07-23 10:13:04 --- DEBUG: #0 L:\domains\localhost\www\application\bootstrap.php(130): Kohana_Core::modules(Array)
#1 L:\domains\localhost\www\index.php(102): require('L:\domains\loca...')
#2 {main} in L:\domains\localhost\www\application\bootstrap.php:130
2013-07-23 10:13:12 --- CRITICAL: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'activerecord' at 'MODPATH\activerecord' ~ SYSPATH\classes\Kohana\Core.php [ 579 ] in L:\domains\localhost\www\application\bootstrap.php:130
2013-07-23 10:13:12 --- DEBUG: #0 L:\domains\localhost\www\application\bootstrap.php(130): Kohana_Core::modules(Array)
#1 L:\domains\localhost\www\index.php(102): require('L:\domains\loca...')
#2 {main} in L:\domains\localhost\www\application\bootstrap.php:130
2013-07-23 19:15:42 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'127.0.0.1' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in L:\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:171
2013-07-23 19:15:42 --- DEBUG: #0 L:\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 L:\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 L:\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('PreRegs')
#3 L:\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 L:\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 L:\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 L:\domains\localhost\www\system\classes\Kohana\Model.php(26): Kohana_ORM->__construct()
#7 L:\domains\localhost\www\application\classes\Controller\Admin\Auth.php(21): Kohana_Model::factory('Admin_PreReg')
#8 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_goauth()
#9 [internal function]: Kohana_Controller->execute()
#10 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#11 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#14 {main} in L:\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:171
2013-07-23 19:16:09 --- CRITICAL: GOAuthException [ 0 ]: Ошибка авторизации: invalid_grant ~ MODPATH\goauth\classes\GOAuth.php [ 78 ] in L:\domains\localhost\www\application\classes\Controller\Admin\Auth.php:17
2013-07-23 19:16:09 --- DEBUG: #0 L:\domains\localhost\www\application\classes\Controller\Admin\Auth.php(17): GOAuth::getUserData('4/t7KwXtGpp2d-2...')
#1 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_goauth()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\localhost\www\application\classes\Controller\Admin\Auth.php:17
2013-07-23 19:20:05 --- CRITICAL: Database_Exception [ 1049 ]: Unknown database 'mpt_auto' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in L:\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:75
2013-07-23 19:20:05 --- DEBUG: #0 L:\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('mpt_auto')
#1 L:\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 L:\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 L:\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('PreRegs')
#4 L:\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#5 L:\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#6 L:\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 L:\domains\localhost\www\system\classes\Kohana\Model.php(26): Kohana_ORM->__construct()
#8 L:\domains\localhost\www\application\classes\Controller\Admin\Auth.php(21): Kohana_Model::factory('Admin_PreReg')
#9 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_goauth()
#10 [internal function]: Kohana_Controller->execute()
#11 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#12 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#15 {main} in L:\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:75
2013-07-23 20:53:32 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'127.0.0.1' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in L:\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:171
2013-07-23 20:53:32 --- DEBUG: #0 L:\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 L:\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 L:\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('PreRegs')
#3 L:\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 L:\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 L:\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 L:\domains\localhost\www\system\classes\Kohana\Model.php(26): Kohana_ORM->__construct()
#7 L:\domains\localhost\www\application\classes\Controller\Admin\Auth.php(21): Kohana_Model::factory('Admin_PreReg')
#8 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_goauth()
#9 [internal function]: Kohana_Controller->execute()
#10 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#11 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#14 {main} in L:\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:171