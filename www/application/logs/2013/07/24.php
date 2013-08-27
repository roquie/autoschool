<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-24 14:29:58 --- CRITICAL: Database_Exception [ 1049 ]: Unknown database 'mpt_auto' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in L:\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:75
2013-07-24 14:29:58 --- DEBUG: #0 L:\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('mpt_auto')
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
2013-07-24 15:04:09 --- CRITICAL: GOAuthException [ 0 ]: Ошибка авторизации: invalid_grant ~ MODPATH\goauth\classes\GOAuth.php [ 78 ] in L:\domains\localhost\www\application\classes\Controller\Admin\Auth.php:17
2013-07-24 15:04:09 --- DEBUG: #0 L:\domains\localhost\www\application\classes\Controller\Admin\Auth.php(17): GOAuth::getUserData('4/w5Z75UkwNWZ5x...')
#1 L:\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_goauth()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#4 L:\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 L:\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in L:\domains\localhost\www\application\classes\Controller\Admin\Auth.php:17