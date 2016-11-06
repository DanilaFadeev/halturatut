<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-20 18:27:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index: login ~ APPPATH\classes\Controller\Common.php [ 31 ] in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Common.php:31
2014-10-20 18:27:22 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Common.php(31): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 31, Array)
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(69): Controller_Common->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\halturatut\index.php(120): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Common.php:31
2014-10-20 19:24:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: valueE ~ APPPATH\views\main\add.php [ 43 ] in C:\OpenServer\domains\localhost\halturatut\application\views\main\add.php:43
2014-10-20 19:24:20 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\views\main\add.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 43, Array)
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
#13 C:\OpenServer\domains\localhost\halturatut\index.php(120): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\halturatut\application\views\main\add.php:43
2014-10-20 19:59:52 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:35
2014-10-20 19:59:52 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(35): Kohana_ORM->find()
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\halturatut\index.php(120): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:35
2014-10-20 20:01:05 --- CRITICAL: ErrorException [ 8 ]: Undefined index: captcha ~ APPPATH\classes\Controller\Main.php [ 97 ] in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:97
2014-10-20 20:01:05 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(97): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 97, Array)
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\halturatut\index.php(120): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:97
2014-10-20 20:11:38 --- CRITICAL: ErrorException [ 8 ]: Undefined index: captcha ~ APPPATH\classes\Controller\Main.php [ 97 ] in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:97
2014-10-20 20:11:38 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(97): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 97, Array)
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\halturatut\index.php(120): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:97
2014-10-20 21:24:52 --- CRITICAL: ErrorException [ 8 ]: Undefined index: oblavlenia ~ MODPATH\orm\classes\Kohana\ORM.php [ 1567 ] in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:1567
2014-10-20 21:24:52 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 1567, Array)
#1 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(90): Kohana_ORM->add('oblavlenia', Object(Model_Objavlenia))
#2 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\halturatut\index.php(120): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:1567
2014-10-20 21:25:58 --- CRITICAL: ErrorException [ 8 ]: Undefined index: oblavlenia ~ MODPATH\orm\classes\Kohana\ORM.php [ 1567 ] in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:1567
2014-10-20 21:25:58 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 1567, Array)
#1 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(106): Kohana_ORM->add('oblavlenia', Object(Model_Objavlenia))
#2 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\halturatut\index.php(120): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:1567