<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-08 18:51:27 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\MySQL.php:431
2014-10-08 18:51:27 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\MySQL.php(431): Kohana_Database_MySQL->connect()
#1 C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database.php(478): Kohana_Database_MySQL->escape('????????????')
#2 C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query\Builder.php(116): Kohana_Database->quote('????????????')
#3 C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query\Builder\Delete.php(67): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#4 C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Delete->compile(Object(Database_MySQL))
#5 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Common.php(16): Kohana_Database_Query->execute()
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(69): Controller_Common->before()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#9 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\MySQL.php:431
2014-10-08 18:57:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Captcha' not found ~ APPPATH\classes\Controller\Main.php [ 24 ] in file:line
2014-10-08 18:57:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-08 18:57:29 --- CRITICAL: ErrorException [ 1 ]: Class 'Captcha' not found ~ APPPATH\classes\Controller\Main.php [ 24 ] in file:line
2014-10-08 18:57:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-08 18:57:33 --- CRITICAL: ErrorException [ 1 ]: Class 'Captcha' not found ~ APPPATH\classes\Controller\Main.php [ 24 ] in file:line
2014-10-08 18:57:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-08 18:57:42 --- CRITICAL: ErrorException [ 1 ]: Class 'Captcha' not found ~ APPPATH\classes\Controller\Main.php [ 24 ] in file:line
2014-10-08 18:57:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-08 18:57:46 --- CRITICAL: ErrorException [ 1 ]: Class 'Captcha' not found ~ APPPATH\classes\Controller\Main.php [ 24 ] in file:line
2014-10-08 18:57:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-08 18:57:47 --- CRITICAL: ErrorException [ 1 ]: Class 'Captcha' not found ~ APPPATH\classes\Controller\Main.php [ 24 ] in file:line
2014-10-08 18:57:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-08 18:58:00 --- CRITICAL: ErrorException [ 1 ]: Class 'Captcha' not found ~ APPPATH\classes\Controller\Main.php [ 24 ] in file:line
2014-10-08 18:58:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-08 18:58:10 --- CRITICAL: ErrorException [ 1 ]: Class 'Captcha' not found ~ APPPATH\classes\Controller\Main.php [ 24 ] in file:line
2014-10-08 18:58:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-08 18:58:13 --- CRITICAL: ErrorException [ 1 ]: Class 'Captcha' not found ~ APPPATH\classes\Controller\Main.php [ 24 ] in file:line
2014-10-08 18:58:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-08 18:58:17 --- CRITICAL: ErrorException [ 1 ]: Class 'Captcha' not found ~ APPPATH\classes\Controller\Main.php [ 24 ] in file:line
2014-10-08 18:58:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-08 20:14:14 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php:137
2014-10-08 20:14:14 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php:137