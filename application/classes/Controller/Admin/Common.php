<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Admin_Common extends Controller_Template {

    public $template = 'admin/mainTemplate';

    public function before()
    {
        parent::before();

        $session = Session::instance();

        if(isset($_GET['exit'])=='1') $session->delete('name');

        $name = $session->get('name');
        if(!empty($name)) $name = $session->get('name');
            else $this->redirect('/auth');

        $this->template->content = '';
        $this->template->styles = array('admin-style');
        $this->template->scripts = '';
        $this->template->pages = ORM::factory('pages')->find_all();

    }

} // End Common