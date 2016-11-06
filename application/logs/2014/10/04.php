<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-04 09:02:16 --- CRITICAL: Database_Exception [ 1049 ]: Unknown database 'hulturatut' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\MySQL.php:75
2014-10-04 09:02:16 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('hulturatut')
#1 C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\MySQL.php(431): Kohana_Database_MySQL->connect()
#2 C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database.php(478): Kohana_Database_MySQL->escape('????????????')
#3 C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query\Builder.php(116): Kohana_Database->quote('????????????')
#4 C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query\Builder\Delete.php(67): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#5 C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Delete->compile(Object(Database_MySQL))
#6 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\common.php(15): Kohana_Database_Query->execute()
#7 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(69): Controller_Common->before()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\MySQL.php:75
2014-10-04 11:39:25 --- CRITICAL: View_Exception [ 0 ]: The requested view admin/mainTemplate could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php:137
2014-10-04 11:39:25 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(137): Kohana_View->set_filename('admin/mainTempl...')
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin/mainTempl...', NULL)
#2 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('admin/mainTempl...')
#3 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\admin\common.php(9): Kohana_Controller_Template->before()
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(69): Controller_Admin_Common->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#7 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php:137