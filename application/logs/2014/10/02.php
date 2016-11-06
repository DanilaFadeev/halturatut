<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-02 18:08:12 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\main\catalog.php [ 12 ] in C:\OpenServer\domains\localhost\halturatut\application\views\main\catalog.php:12
2014-10-02 18:08:12 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\views\main\catalog.php(12): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\OpenServer\d...', 12, Array)
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\halturatut\application\views\mainTemplate.php(51): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\halturatut\application\views\main\catalog.php:12
2014-10-02 18:09:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH\classes\Controller\Main.php [ 140 ] in file:line
2014-10-02 18:09:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-02 18:14:23 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 991 ] in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:140
2014-10-02 18:14:23 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(140): Kohana_ORM->find_all()
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:140
2014-10-02 18:46:45 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'date_in' in 'where clause' [ SELECT `objavlenia`.`id` AS `id`, `objavlenia`.`title` AS `title`, `objavlenia`.`variant` AS `variant`, `objavlenia`.`days` AS `days`, `objavlenia`.`time` AS `time`, `objavlenia`.`oplata` AS `oplata`, `objavlenia`.`email` AS `email`, `objavlenia`.`name` AS `name`, `objavlenia`.`phone` AS `phone`, `objavlenia`.`skype` AS `skype`, `objavlenia`.`Description` AS `Description`, `objavlenia`.`timeobj` AS `timeobj`, `objavlenia`.`date` AS `date`, `objavlenia`.`timedel` AS `timedel` FROM `objavlenia` AS `objavlenia` WHERE `date_in` > (NOW()- INTERVAL 7 DAY) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query.php:251
2014-10-02 18:46:45 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `objavle...', 'Model_Objavleni...', Array)
#1 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(9): Kohana_ORM->find_all()
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\halturatut\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\halturatut\modules\database\classes\Kohana\Database\Query.php:251