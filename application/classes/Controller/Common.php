<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Common extends Controller_Template {

    public $template = 'mainTemplate';

    public function before()
    {
        parent::before();

        $this->template->content = '';
        $this->template->styles = array('style');
        $this->template->scripts = '';
        $this->template->keywords = '';
        $this->template->description = '';
        $this->template->title = 'Halturatut';

        DB::delete('objavlenia')
            ->where('date', '<', DB::expr('NOW() - INTERVAL 1 WEEK' ))->and_where('timeobj', '=', 'неделя')->execute();

        DB::delete('objavlenia')
            ->where('date', '<', DB::expr('NOW() - INTERVAL 2 WEEK' ))->and_where('timeobj', '=', '2 недели')->execute();

        DB::delete('objavlenia')
            ->where('date', '<', DB::expr('NOW() - INTERVAL 3 WEEK' ))->and_where('timeobj', '=', '3 недели')->execute();

        DB::delete('objavlenia')
            ->where('date', '<', DB::expr('NOW() - INTERVAL 1 MONTH' ))->and_where('timeobj', '=', 'месяц')->execute();


        if(isset($_POST['login'])) $name = $_POST['login'];
        if(isset($_POST['password'])) $password = $_POST['password'];

        if(isset($_GET['exit']))
        {
            Session::instance()->delete('name');
            Session::instance()->delete('id');
        }

        if(!empty($name) && !empty($password))
        {
            $user = ORM::factory('users')->where('email', '=', $name)->find();
            if($user->loaded() && md5($password) === $user->password)
            {
                Session::instance()->set('name', $user->name);
                Session::instance()->set('id', $user->id);
            }
        }

        $user =  Session::instance()->get('id');
        if(!empty($user))
        {
            $content = View::factory('user/block')
                                ->set('name', Session::instance()->get('name'));
            $this->template->block = $content;

        }
        else{
            $content = View::factory('user/auth');
            $this->template->block = $content;
        }
    }

} // End Common