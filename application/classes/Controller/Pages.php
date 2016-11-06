<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Pages extends Controller_Common
{
    public function action_index()
    {
        $url = $this->request->param('id');
        $page = ORM::factory('pages')->where('url', '=', $url)->find();
        if($page->loaded()){
            $content = $page->text;
            $this->template->title .= $page->title;
            $this->template->description = $page->description;
            $this->template->keywords = $page->keywords;
        }
        else $content = '';
        $this->template->content = $content;
    }

}
