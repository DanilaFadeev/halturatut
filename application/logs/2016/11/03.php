<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-11-03 17:41:34 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): ��������� �� �����������, �.�. ������ ������� ������ ������ �� ���������.
 ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\OpenServer\domains\halturatut\modules\database\classes\Kohana\Database\MySQL.php:431
2016-11-03 17:41:34 --- DEBUG: #0 C:\OpenServer\domains\halturatut\modules\database\classes\Kohana\Database\MySQL.php(431): Kohana_Database_MySQL->connect()
#1 C:\OpenServer\domains\halturatut\modules\database\classes\Kohana\Database.php(478): Kohana_Database_MySQL->escape('\xD0\xBD\xD0\xB5\xD0\xB4\xD0\xB5\xD0\xBB\xD1\x8F')
#2 C:\OpenServer\domains\halturatut\modules\database\classes\Kohana\Database\Query\Builder.php(116): Kohana_Database->quote('\xD0\xBD\xD0\xB5\xD0\xB4\xD0\xB5\xD0\xBB\xD1\x8F')
#3 C:\OpenServer\domains\halturatut\modules\database\classes\Kohana\Database\Query\Builder\Delete.php(67): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#4 C:\OpenServer\domains\halturatut\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Delete->compile(Object(Database_MySQL))
#5 C:\OpenServer\domains\halturatut\application\classes\Controller\Common.php(19): Kohana_Database_Query->execute()
#6 C:\OpenServer\domains\halturatut\system\classes\Kohana\Controller.php(69): Controller_Common->before()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#9 C:\OpenServer\domains\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\halturatut\index.php(120): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\halturatut\modules\database\classes\Kohana\Database\MySQL.php:431
2016-11-03 17:42:57 --- CRITICAL: Database_Exception [ 1049 ]: Unknown database 'halturatut' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in C:\OpenServer\domains\halturatut\modules\database\classes\Kohana\Database\MySQL.php:75
2016-11-03 17:42:57 --- DEBUG: #0 C:\OpenServer\domains\halturatut\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('halturatut')
#1 C:\OpenServer\domains\halturatut\modules\database\classes\Kohana\Database\MySQL.php(431): Kohana_Database_MySQL->connect()
#2 C:\OpenServer\domains\halturatut\modules\database\classes\Kohana\Database.php(478): Kohana_Database_MySQL->escape('\xD0\xBD\xD0\xB5\xD0\xB4\xD0\xB5\xD0\xBB\xD1\x8F')
#3 C:\OpenServer\domains\halturatut\modules\database\classes\Kohana\Database\Query\Builder.php(116): Kohana_Database->quote('\xD0\xBD\xD0\xB5\xD0\xB4\xD0\xB5\xD0\xBB\xD1\x8F')
#4 C:\OpenServer\domains\halturatut\modules\database\classes\Kohana\Database\Query\Builder\Delete.php(67): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#5 C:\OpenServer\domains\halturatut\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Delete->compile(Object(Database_MySQL))
#6 C:\OpenServer\domains\halturatut\application\classes\Controller\Common.php(19): Kohana_Database_Query->execute()
#7 C:\OpenServer\domains\halturatut\system\classes\Kohana\Controller.php(69): Controller_Common->before()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 C:\OpenServer\domains\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\halturatut\index.php(120): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\halturatut\modules\database\classes\Kohana\Database\MySQL.php:75
2016-11-03 17:43:57 --- CRITICAL: Database_Exception [ 1146 ]: Table 'halturatut.objavlenia' doesn't exist [ DELETE FROM `objavlenia` WHERE `date` < NOW() - INTERVAL 1 WEEK AND `timeobj` = 'неделя' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\halturatut\modules\database\classes\Kohana\Database\Query.php:251
2016-11-03 17:43:57 --- DEBUG: #0 C:\OpenServer\domains\halturatut\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(4, 'DELETE FROM `ob...', false, Array)
#1 C:\OpenServer\domains\halturatut\application\classes\Controller\Common.php(19): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\halturatut\system\classes\Kohana\Controller.php(69): Controller_Common->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\OpenServer\domains\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\halturatut\index.php(120): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\halturatut\modules\database\classes\Kohana\Database\Query.php:251