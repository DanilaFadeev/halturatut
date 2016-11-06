<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-24 12:43:58 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Cookie.php:67
2014-09-24 12:43:58 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('BITRIX_SM_LOGIN', NULL)
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('BITRIX_SM_LOGIN')
#2 C:\OpenServer\domains\localhost\halturatut\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Cookie.php:67
2014-09-24 12:44:31 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Cookie.php:67
2014-09-24 12:44:31 --- DEBUG: #0 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('BITRIX_SM_LOGIN', NULL)
#1 C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('BITRIX_SM_LOGIN')
#2 C:\OpenServer\domains\localhost\halturatut\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\OpenServer\domains\localhost\halturatut\system\classes\Kohana\Cookie.php:67