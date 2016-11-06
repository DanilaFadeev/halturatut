<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Main extends Controller_Admin_Common{


    public function action_index()
    {
        $content = View::factory('/admin/index');
        $this->template->content = $content;
    }

    public function action_addcategory()
    {
        $content = View::factory('/admin/addcategory')
                            ->bind('name', $name)
                            ->bind('text', $text)
                            ->bind('keywords', $keywords)
                            ->bind('url', $url)
                            ->bind('title', $title)
                            ->bind('description', $description);

        $name = ''; $text = ''; $keywords = ''; $url = ''; $description = ''; $title = '';
        $id = (int)$this->request->param('id');
        if(!empty($id))
        {
            $category = ORM::factory('category', $id);
            $name = $category->name;
            $text = $category->text;
            $keywords = $category->keywords;
            $url = $category->url;
            $description = $category->description;
            $title = $category->title;
        }
        else
        {

        $data = Arr::extract($_POST, array('name', 'text', 'keywords', 'description', 'title', 'url'));
        if(!empty($data['name']) && !empty($data['text']) && !empty($data['keywords'])
                    && !empty($data['description']) && !empty($data['title']) && !empty($data['url']))
        {
            $result = ORM::factory('category')->values($data)->save();
            if($result->loaded())
                echo "<script>alert('Категория добавлена!')</script>";
        }
        }

        $this->template->content = $content;
    }

    public function action_catalog()
    {
        $content = View::factory('admin/catalog')
                    ->bind('objavlenia', $result);
        $id = (int)$this->request->param('id');
        $result = null;
        if(!empty($id))
        {
            $result = ORM::factory('category', $id)->objavlenia->find_all();

        }
        $this->template->content = $content;
    }

    public function action_categorydel()
    {
        $id = (int)$this->request->param('id');
        if(!empty($id))
        {
            $tag = ORM::factory('category',$id);
            foreach ($tag->objavlenia->find_all() as $article){
                $tag->remove('objavlenia',$article);
            }
            $tag->delete();
        }
        $this->redirect('/admin');
    }

    public function action_objavleniedel()
    {
        $id = (int)$this->request->param('id');
        if(!empty($id))
        {
            $tag = ORM::factory('objavlenia',$id);
            foreach ($tag->category->find_all() as $article){
                $tag->remove('category',$article);
            }
            $tag->delete();
        }
        $this->redirect('/admin');
    }

    public function action_pagedel()
    {
        $id = (int)$this->request->param('id');
        if(!empty($id))
        {
            $page = ORM::factory('pages', $id)->delete();
        }
        $this->redirect('/admin');
    }

    public function action_addpage()
    {
        $content = View::factory('admin/addpage')
            ->bind('name', $name)
            ->bind('text', $text)
            ->bind('keywords', $keywords)
            ->bind('url', $url)
            ->bind('title', $title)
            ->bind('description', $description);

        $name = ''; $text = ''; $keywords = ''; $url = ''; $description = ''; $title = '';
        $id = (int)$this->request->param('id');
        if(!empty($id))
        {
            $page = ORM::factory('pages', $id);
            $name = $page->name;
            $text = $page->text;
            $keywords = $page->keywords;
            $url = $page->url;
            $description = $page->description;
            $title = $page->title;
        }
        else
        {

            $data = Arr::extract($_POST, array('name', 'text', 'keywords', 'description', 'title', 'url'));
            if(!empty($data['name']) && !empty($data['text']) && !empty($data['keywords'])
                && !empty($data['description']) && !empty($data['title']) && !empty($data['url']))
            {
                $result = ORM::factory('pages')->values($data)->save();
                if($result->loaded())
                {
                    $this->redirect('admin/');
                }
            }
        }

        $this->template->content = $content;
    }

    public function action_editobj()
    {
        $id = $this->request->param('id');
        $obj = ORM::factory('objavlenia', $id)->as_array();

        $categores = '';
        foreach(ORM::factory('objavlenia', $id)->category->find_all() as $key)
        $categores .= "<a href=".URL::site('catalog/'.$key->url).">".$key->name."</a>, ";

        $content = View::factory('admin/editobj')
            ->bind('categoris', $categores)
            ->bind('name', $obj['name'])
            ->bind('email', $obj['email'])
            ->bind('skype', $obj['skype'])
            ->bind('phone', $obj['phone'])
            ->bind('oplata', $obj['oplata'])
            ->bind('title', $obj['title'])
            ->bind('description', $obj['description']);

        $this->template->content = $content;
    }

}