<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-12 16:24:52 --- CRITICAL: Kohana_Exception [ 0 ]: The objavlenie property does not exist in the Model_Category class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:603
2014-10-12 16:24:52 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('objavlenie')
#1 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\admin\Main.php(37): Kohana_ORM->__get('objavlenie')
#2 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Admin_Main->action_categorydel()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\halturatut\index.php(120): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\halturatut\modules\orm\classes\Kohana\ORM.php:603
2014-10-12 16:28:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting '(' ~ APPPATH\classes\Controller\admin\Main.php [ 46 ] in file:line
2014-10-12 16:28:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-12 16:28:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting '(' ~ APPPATH\classes\Controller\admin\Main.php [ 46 ] in file:line
2014-10-12 16:28:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-12 16:28:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting '(' ~ APPPATH\classes\Controller\admin\Main.php [ 46 ] in file:line
2014-10-12 16:28:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-12 16:29:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{', expecting '(' ~ APPPATH\classes\Controller\admin\Main.php [ 46 ] in file:line
2014-10-12 16:29:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-12 16:46:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\Controller\admin\Main.php [ 20 ] in file:line
2014-10-12 16:46:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-12 16:49:55 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::text() ~ APPPATH\classes\Controller\admin\Main.php [ 16 ] in file:line
2014-10-12 16:49:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-12 16:50:20 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\admin\Main.php:21
2014-10-12 16:50:20 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\admin\Main.php(21): Kohana_ORM->find()
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Admin_Main->action_addcategory()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\halturatut\index.php(120): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\admin\Main.php:21
2014-10-12 16:51:44 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\admin\Main.php:21
2014-10-12 16:51:44 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\admin\Main.php(21): Kohana_ORM->find()
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(84): Controller_Admin_Main->action_addcategory()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\halturatut\index.php(120): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\halturatut\application\classes\Controller\admin\Main.php:21
2014-10-12 16:54:11 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Session.php:125
2014-10-12 16:54:11 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\OpenServer\domains\localhost\halturatut\modules\captcha\classes\captcha.php(161): Kohana_Session::instance()
#3 C:\OpenServer\domains\localhost\halturatut\modules\captcha\classes\controller\captcha.php(38): Captcha->update_response_session()
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(87): Controller_Captcha->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Captcha))
#7 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\halturatut\index.php(120): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Session.php:125
2014-10-12 16:54:30 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Session.php:125
2014-10-12 16:54:30 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\OpenServer\domains\localhost\halturatut\modules\captcha\classes\captcha.php(161): Kohana_Session::instance()
#3 C:\OpenServer\domains\localhost\halturatut\modules\captcha\classes\controller\captcha.php(38): Captcha->update_response_session()
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(87): Controller_Captcha->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Captcha))
#7 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\halturatut\index.php(120): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Session.php:125
2014-10-12 16:55:44 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Session.php:125
2014-10-12 16:55:44 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\OpenServer\domains\localhost\halturatut\modules\captcha\classes\captcha.php(161): Kohana_Session::instance()
#3 C:\OpenServer\domains\localhost\halturatut\modules\captcha\classes\controller\captcha.php(38): Captcha->update_response_session()
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(87): Controller_Captcha->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Captcha))
#7 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\halturatut\index.php(120): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Session.php:125
2014-10-12 16:56:13 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Session.php:125
2014-10-12 16:56:13 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\OpenServer\domains\localhost\halturatut\modules\captcha\classes\captcha.php(161): Kohana_Session::instance()
#3 C:\OpenServer\domains\localhost\halturatut\modules\captcha\classes\controller\captcha.php(38): Captcha->update_response_session()
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(87): Controller_Captcha->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Captcha))
#7 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\halturatut\index.php(120): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Session.php:125
2014-10-12 17:53:56 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Session.php:125
2014-10-12 17:53:56 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\OpenServer\domains\localhost\halturatut\modules\captcha\classes\captcha.php(161): Kohana_Session::instance()
#3 C:\OpenServer\domains\localhost\halturatut\modules\captcha\classes\controller\captcha.php(38): Captcha->update_response_session()
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(87): Controller_Captcha->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Captcha))
#7 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\halturatut\index.php(120): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Session.php:125
2014-10-12 18:06:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: value ~ APPPATH\views\admin\catalog.php [ 16 ] in C:\OpenServer\domains\localhost\halturatut\application\views\admin\catalog.php:16
2014-10-12 18:06:23 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\application\views\admin\catalog.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 16, Array)
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
#14 {main} in C:\OpenServer\domains\localhost\halturatut\application\views\admin\catalog.php:16
2014-10-12 18:09:17 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Session.php:125
2014-10-12 18:09:17 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\OpenServer\domains\localhost\halturatut\modules\captcha\classes\captcha.php(161): Kohana_Session::instance()
#3 C:\OpenServer\domains\localhost\halturatut\modules\captcha\classes\controller\captcha.php(38): Captcha->update_response_session()
#4 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Controller.php(87): Controller_Captcha->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Captcha))
#7 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\halturatut\index.php(120): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Session.php:125