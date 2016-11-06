<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Auth extends Controller_Template{

    public $template = 'admin/auth';

    public function action_index()
    {

        // halturatall - password

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $login = $this->request->post('login');
            $password = $this->request->post('password');
            $result = ORM::factory('admin')->where('name', '=', $login)->find();
            if($result->loaded())
                if(md5($password) === $result->password)  {Session::instance()->set('name', $result->name); $this->redirect('/admin/');}

        }
    }

}