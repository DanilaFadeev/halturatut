<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-28 09:17:55 --- CRITICAL: Kohana_Exception [ 0 ]: The is_loaded property does not exist in the Model_Category class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:603
2014-09-28 09:17:55 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('is_loaded')
#1 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(75): Kohana_ORM->__get('is_loaded')
#2 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_catalog()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:603
2014-09-28 09:18:16 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Category::is_loaded() ~ APPPATH\classes\Controller\Main.php [ 75 ] in file:line
2014-09-28 09:18:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 09:18:59 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\main\catalog.php [ 16 ] in C:\OpenServer\domains\localhost\halturatut\application\views\main\catalog.php:16
2014-09-28 09:18:59 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\views\main\catalog.php(16): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\OpenServer\d...', 16, Array)
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\halturatut\application\views\mainTemplate.php(50): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\halturatut\application\views\main\catalog.php:16
2014-09-28 09:19:12 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\main\catalog.php [ 16 ] in C:\OpenServer\domains\localhost\halturatut\application\views\main\catalog.php:16
2014-09-28 09:19:12 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\views\main\catalog.php(16): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\OpenServer\d...', 16, Array)
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\halturatut\application\views\mainTemplate.php(50): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\halturatut\application\views\main\catalog.php:16
2014-09-28 10:01:31 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\main\catalog.php [ 16 ] in C:\OpenServer\domains\localhost\halturatut\application\views\main\catalog.php:16
2014-09-28 10:01:31 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\views\main\catalog.php(16): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\OpenServer\d...', 16, Array)
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\halturatut\application\views\mainTemplate.php(50): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\halturatut\application\views\main\catalog.php:16
2014-09-28 13:49:15 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\main\catalog.php [ 16 ] in C:\OpenServer\domains\localhost\halturatut\application\views\main\catalog.php:16
2014-09-28 13:49:15 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\views\main\catalog.php(16): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\OpenServer\d...', 16, Array)
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\halturatut\application\views\mainTemplate.php(50): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\halturatut\application\views\main\catalog.php:16
2014-09-28 13:57:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Main.php [ 65 ] in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:65
2014-09-28 13:57:27 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(65): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 65, Array)
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_objavlenie()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:65
2014-09-28 15:59:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\Controller\Main.php [ 41 ] in file:line
2014-09-28 15:59:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 15:59:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\main\add.php [ 72 ] in C:\OpenServer\domains\localhost\halturatut\application\views\main\add.php:72
2014-09-28 15:59:56 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\views\main\add.php(72): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 72, Array)
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\halturatut\application\views\mainTemplate.php(49): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\halturatut\application\views\main\add.php:72
2014-09-28 16:36:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: t ~ APPPATH\views\main\catalog.php [ 26 ] in C:\OpenServer\domains\localhost\halturatut\application\views\main\catalog.php:26
2014-09-28 16:36:54 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\views\main\catalog.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 26, Array)
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\halturatut\application\views\mainTemplate.php(49): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\halturatut\application\views\main\catalog.php:26
2014-09-28 19:52:39 --- CRITICAL: ErrorException [ 8 ]: Undefined index: tags ~ MODPATH\orm\classes\Kohana\ORM.php [ 1567 ] in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:1567
2014-09-28 19:52:39 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 1567, Array)
#1 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(78): Kohana_ORM->add('tags', Object(Model_Category))
#2 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_objavlenie()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:1567
2014-09-28 19:53:01 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'main_id' in 'field list' [ INSERT INTO `category_obj` (`main_id`, `category_id`) VALUES ('17', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query.php:251
2014-09-28 19:53:01 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ca...', false, Array)
#1 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(78): Kohana_ORM->add('category', Object(Model_Category))
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_objavlenie()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query.php:251
2014-09-28 19:55:21 --- CRITICAL: ErrorException [ 8 ]: Undefined index: main ~ MODPATH\orm\classes\Kohana\ORM.php [ 1567 ] in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:1567
2014-09-28 19:55:21 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 1567, Array)
#1 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(78): Kohana_ORM->add('main', Object(Model_Category))
#2 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_objavlenie()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:1567
2014-09-28 19:55:39 --- CRITICAL: ErrorException [ 8 ]: Undefined index: objavlenia ~ MODPATH\orm\classes\Kohana\ORM.php [ 1567 ] in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:1567
2014-09-28 19:55:39 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 1567, Array)
#1 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(78): Kohana_ORM->add('objavlenia', Object(Model_Category))
#2 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_objavlenie()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:1567
2014-09-28 19:57:51 --- CRITICAL: ErrorException [ 8 ]: Undefined index: objavlenia ~ MODPATH\orm\classes\Kohana\ORM.php [ 1567 ] in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:1567
2014-09-28 19:57:51 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 1567, Array)
#1 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(78): Kohana_ORM->add('objavlenia', Object(Model_Category))
#2 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_objavlenie()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:1567
2014-09-28 20:01:49 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'main_id' in 'field list' [ INSERT INTO `category_obj` (`main_id`, `category_id`) VALUES ('17', '2') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query.php:251
2014-09-28 20:01:49 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ca...', false, Array)
#1 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(77): Kohana_ORM->add('category', Object(Model_Category))
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_objavlenie()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query.php:251
2014-09-28 20:03:03 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_objavlenia' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-09-28 20:03:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 20:03:50 --- CRITICAL: ErrorException [ 8 ]: Undefined index: main ~ MODPATH\orm\classes\Kohana\ORM.php [ 1567 ] in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:1567
2014-09-28 20:03:50 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 1567, Array)
#1 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(77): Kohana_ORM->add('main', Object(Model_Category))
#2 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_objavlenie()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:1567
2014-09-28 20:04:03 --- CRITICAL: Database_Exception [ 1048 ]: Column 'category_id' cannot be null [ INSERT INTO `category_obj` (`category_id`, `objavlenia_id`) VALUES (NULL, '2') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query.php:251
2014-09-28 20:04:03 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ca...', false, Array)
#1 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(77): Kohana_ORM->add('objavlenia', Object(Model_Category))
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_objavlenie()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query.php:251
2014-09-28 20:04:49 --- CRITICAL: ErrorException [ 8 ]: Undefined index: objavlenia ~ MODPATH\orm\classes\Kohana\ORM.php [ 1567 ] in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:1567
2014-09-28 20:04:49 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 1567, Array)
#1 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(77): Kohana_ORM->add('objavlenia', Object(Model_Category))
#2 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_objavlenie()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:1567
2014-09-28 20:05:07 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'main_id' in 'field list' [ INSERT INTO `category_obj` (`main_id`, `category_id`) VALUES ('17', '2') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query.php:251
2014-09-28 20:05:07 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ca...', false, Array)
#1 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(77): Kohana_ORM->add('category', Object(Model_Category))
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_objavlenie()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query.php:251
2014-09-28 20:05:58 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_objavlenia' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-09-28 20:05:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 20:06:35 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_main' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-09-28 20:06:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 20:07:02 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_objavlenia' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-09-28 20:07:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 20:35:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\Main.php [ 78 ] in file:line
2014-09-28 20:35:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 20:51:42 --- CRITICAL: ErrorException [ 1 ]: Call to a member function add() on a non-object ~ APPPATH\classes\Controller\Main.php [ 34 ] in file:line
2014-09-28 20:51:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 20:51:54 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_objavlenie' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-09-28 20:51:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 20:52:25 --- CRITICAL: ErrorException [ 8 ]: Undefined index: objavlenie ~ MODPATH\orm\classes\Kohana\ORM.php [ 1567 ] in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:1567
2014-09-28 20:52:25 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 1567, Array)
#1 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(32): Kohana_ORM->add('objavlenie', Object(Model_Category))
#2 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:1567
2014-09-28 20:52:43 --- CRITICAL: ErrorException [ 8 ]: Undefined index: objavlenia ~ MODPATH\orm\classes\Kohana\ORM.php [ 1567 ] in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:1567
2014-09-28 20:52:43 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 1567, Array)
#1 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(32): Kohana_ORM->add('objavlenia', Object(Model_Category))
#2 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:1567
2014-09-28 20:52:46 --- CRITICAL: ErrorException [ 8 ]: Undefined index: objavlenia ~ MODPATH\orm\classes\Kohana\ORM.php [ 1567 ] in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:1567
2014-09-28 20:52:46 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 1567, Array)
#1 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(32): Kohana_ORM->add('objavlenia', Object(Model_Category))
#2 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:1567
2014-09-28 20:53:29 --- CRITICAL: Database_Exception [ 1048 ]: Column 'category_id' cannot be null [ INSERT INTO `category_obj` (`category_id`, `objavlenia_id`) VALUES (NULL, '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query.php:251
2014-09-28 20:53:29 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ca...', false, Array)
#1 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(32): Kohana_ORM->add('objavlenia', Object(Model_Category))
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query.php:251
2014-09-28 20:54:21 --- CRITICAL: ErrorException [ 8 ]: Undefined index: objavlenia ~ MODPATH\orm\classes\Kohana\ORM.php [ 1567 ] in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:1567
2014-09-28 20:54:21 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 1567, Array)
#1 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(32): Kohana_ORM->add('objavlenia', Object(Model_Category))
#2 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:1567
2014-09-28 20:54:32 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_objavlenie' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-09-28 20:54:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 20:55:47 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_categoryobj' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-09-28 20:55:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line