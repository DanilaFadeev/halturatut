<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-27 00:02:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\mainTemplate.php [ 62 ] in file:line
2014-09-27 00:02:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-27 09:34:41 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'category_obj.main_id' in 'on clause' [ SELECT `main`.`id` AS `id`, `main`.`variant` AS `variant`, `main`.`days` AS `days`, `main`.`time` AS `time`, `main`.`oplata` AS `oplata`, `main`.`email` AS `email`, `main`.`name` AS `name`, `main`.`phone` AS `phone`, `main`.`skype` AS `skype`, `main`.`Description` AS `Description`, `main`.`timeobj` AS `timeobj`, `main`.`date` AS `date`, `main`.`timedel` AS `timedel` FROM `objavlenia` AS `main` JOIN `category_obj` ON (`category_obj`.`main_id` = `main`.`id`) WHERE `category_obj`.`category_id` = '2' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query.php:251
2014-09-27 09:34:41 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `main`.`...', 'Model_Main', Array)
#1 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(57): Kohana_ORM->find_all()
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query.php:251
2014-09-27 09:47:17 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'category_obj.main_id' in 'on clause' [ SELECT `main`.`id` AS `id`, `main`.`variant` AS `variant`, `main`.`days` AS `days`, `main`.`time` AS `time`, `main`.`oplata` AS `oplata`, `main`.`email` AS `email`, `main`.`name` AS `name`, `main`.`phone` AS `phone`, `main`.`skype` AS `skype`, `main`.`Description` AS `Description`, `main`.`timeobj` AS `timeobj`, `main`.`date` AS `date`, `main`.`timedel` AS `timedel` FROM `objavlenia` AS `main` JOIN `category_obj` ON (`category_obj`.`main_id` = `main`.`id`) WHERE `category_obj`.`category_id` = '2' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query.php:251
2014-09-27 09:47:17 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `main`.`...', 'Model_Main', Array)
#1 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(57): Kohana_ORM->find_all()
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query.php:251
2014-09-27 09:50:11 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'category_obj.objavlenia_id' in 'on clause' [ SELECT `main`.`id` AS `id`, `main`.`variant` AS `variant`, `main`.`days` AS `days`, `main`.`time` AS `time`, `main`.`oplata` AS `oplata`, `main`.`email` AS `email`, `main`.`name` AS `name`, `main`.`phone` AS `phone`, `main`.`skype` AS `skype`, `main`.`Description` AS `Description`, `main`.`timeobj` AS `timeobj`, `main`.`date` AS `date`, `main`.`timedel` AS `timedel` FROM `objavlenia` AS `main` JOIN `category_obj` ON (`category_obj`.`objavlenia_id` = `main`.`id`) WHERE `category_obj`.`category_id` = '2' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query.php:251
2014-09-27 09:50:11 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `main`.`...', 'Model_Main', Array)
#1 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(57): Kohana_ORM->find_all()
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query.php:251
2014-09-27 09:59:34 --- CRITICAL: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT `category`.`id` AS `id`, `category`.`name` AS `name` FROM `category` AS `category` WHERE `name` = ('Для студентов', 'Для владельцев авто') LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query.php:251
2014-09-27 09:59:34 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `categor...', false, Array)
#1 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(42): Kohana_ORM->find()
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query.php:251
2014-09-27 18:37:52 --- CRITICAL: Kohana_Exception [ 0 ]: The main property does not exist in the Model_Category class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:603
2014-09-27 18:37:52 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('main')
#1 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(44): Kohana_ORM->__get('main')
#2 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:603
2014-09-27 18:38:17 --- CRITICAL: Kohana_Exception [ 0 ]: The main property does not exist in the Model_Category class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:603
2014-09-27 18:38:17 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('main')
#1 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(44): Kohana_ORM->__get('main')
#2 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:603
2014-09-27 18:38:35 --- CRITICAL: Kohana_Exception [ 0 ]: The category_obj property does not exist in the Model_Category class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:603
2014-09-27 18:38:35 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('category_obj')
#1 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(44): Kohana_ORM->__get('category_obj')
#2 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:603
2014-09-27 19:38:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH\classes\Controller\Main.php [ 12 ] in file:line
2014-09-27 19:38:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-27 20:08:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Controller\Main.php [ 69 ] in file:line
2014-09-27 20:08:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-27 20:45:14 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\main\catalog.php [ 16 ] in C:\OpenServer\domains\localhost\halturatut\application\views\main\catalog.php:16
2014-09-27 20:45:14 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\views\main\catalog.php(16): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\OpenServer\d...', 16, Array)
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
2014-09-27 20:56:35 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\main\catalog.php [ 16 ] in C:\OpenServer\domains\localhost\halturatut\application\views\main\catalog.php:16
2014-09-27 20:56:35 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\views\main\catalog.php(16): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\OpenServer\d...', 16, Array)
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
2014-09-27 23:31:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH\views\main\catalog.php [ 2 ] in C:\OpenServer\domains\localhost\halturatut\application\views\main\catalog.php:2
2014-09-27 23:31:03 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\views\main\catalog.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 2, Array)
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
#14 {main} in C:\OpenServer\domains\localhost\halturatut\application\views\main\catalog.php:2