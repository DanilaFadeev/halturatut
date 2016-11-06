<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-16 16:33:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\views\admin\addpage.php [ 5 ] in C:\OpenServer\domains\localhost\halturatut\application\views\admin\addpage.php:5
2014-10-16 16:33:55 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\views\admin\addpage.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 5, Array)
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\halturatut\application\views\admin\mainTemplate.php(45): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#11 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\halturatut\index.php(120): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\halturatut\application\views\admin\addpage.php:5
2014-10-16 16:39:36 --- CRITICAL: Kohana_Exception [ 0 ]: The keywords property does not exist in the Model_Pages class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 16:39:36 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('keywords')
#1 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\admin\Main.php(115): Kohana_ORM->__get('keywords')
#2 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Admin_Main->action_addpage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\halturatut\index.php(120): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 16:40:08 --- CRITICAL: Kohana_Exception [ 0 ]: The descriprion property does not exist in the Model_Pages class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 16:40:08 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('descriprion')
#1 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\admin\Main.php(117): Kohana_ORM->__get('descriprion')
#2 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Admin_Main->action_addpage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\halturatut\index.php(120): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 21:26:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'v' (T_STRING) ~ APPPATH\classes\Controller\Main.php [ 150 ] in file:line
2014-10-16 21:26:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-16 21:40:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: stop ~ APPPATH\classes\Controller\Main.php [ 115 ] in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:115
2014-10-16 21:40:52 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(115): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 115, Array)
#1 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php(203): addQuery('v', '0')
#2 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Main->action_catalog()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\halturatut\index.php(120): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\Main.php:115