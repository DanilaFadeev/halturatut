<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-30 15:09:32 --- CRITICAL: ErrorException [ 8 ]: Undefined index: page ~ APPPATH\classes\Controller\Main.php [ 109 ] in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:109
2014-09-30 15:09:32 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(109): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 109, Array)
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:109
2014-09-30 15:09:54 --- CRITICAL: ErrorException [ 8 ]: Undefined index: page ~ APPPATH\classes\Controller\Main.php [ 109 ] in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:109
2014-09-30 15:09:54 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(109): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 109, Array)
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:109
2014-09-30 15:10:56 --- CRITICAL: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\classes\Controller\Main.php [ 115 ] in file:line
2014-09-30 15:10:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-30 18:51:26 --- CRITICAL: ErrorException [ 2 ]: mysql_query(): Access denied for user ''@'localhost' (using password: NO) ~ APPPATH\classes\Controller\Main.php [ 114 ] in file:line
2014-09-30 18:51:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_query(): ...', 'C:\OpenServer\d...', 114, Array)
#1 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(114): mysql_query('SELECT COUNT(*)...')
#2 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_catalog()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-09-30 18:54:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function count_last_query() ~ APPPATH\classes\Controller\Main.php [ 115 ] in file:line
2014-09-30 18:54:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-30 18:55:24 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_last_query() ~ APPPATH\classes\Controller\Main.php [ 114 ] in file:line
2014-09-30 18:55:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-30 18:58:58 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH\classes\Controller\Main.php [ 115 ] in file:line
2014-09-30 18:58:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-30 18:59:35 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH\classes\Controller\Main.php [ 117 ] in file:line
2014-09-30 18:59:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-30 18:59:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH\classes\Controller\Main.php [ 119 ] in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:119
2014-09-30 18:59:53 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(119): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 119, Array)
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:119
2014-09-30 19:00:27 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::ount_last_query() ~ APPPATH\classes\Controller\Main.php [ 117 ] in file:line
2014-09-30 19:00:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-30 19:01:25 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Objavlenia::ount_last_query() ~ APPPATH\classes\Controller\Main.php [ 117 ] in file:line
2014-09-30 19:01:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-30 19:02:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH\classes\Controller\Main.php [ 119 ] in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:119
2014-09-30 19:02:09 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(119): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 119, Array)
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:119
2014-09-30 19:02:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH\classes\Controller\Main.php [ 119 ] in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:119
2014-09-30 19:02:19 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(119): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 119, Array)
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:119
2014-09-30 19:02:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH\classes\Controller\Main.php [ 119 ] in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:119
2014-09-30 19:02:25 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(119): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 119, Array)
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:119
2014-09-30 19:04:29 --- CRITICAL: ErrorException [ 8 ]: Undefined index: page ~ APPPATH\classes\Controller\Main.php [ 112 ] in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:112
2014-09-30 19:04:29 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(112): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 112, Array)
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:112
2014-09-30 19:04:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH\classes\Controller\Main.php [ 119 ] in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:119
2014-09-30 19:04:41 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(119): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 119, Array)
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:119
2014-09-30 19:12:56 --- CRITICAL: ErrorException [ 8 ]: Undefined index: page ~ APPPATH\classes\Controller\Main.php [ 111 ] in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:111
2014-09-30 19:12:56 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(111): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 111, Array)
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:111
2014-09-30 19:14:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH\classes\Controller\Main.php [ 112 ] in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:112
2014-09-30 19:14:09 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(112): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 112, Array)
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:112
2014-09-30 19:24:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: page2left ~ APPPATH\classes\Controller\Main.php [ 140 ] in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:140
2014-09-30 19:24:03 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(140): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 140, Array)
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:140
2014-09-30 19:25:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pervpage ~ APPPATH\classes\Controller\Main.php [ 140 ] in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:140
2014-09-30 19:25:56 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(140): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 140, Array)
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:140