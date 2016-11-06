<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Common {

    // Главная страница
    public function action_index()
    {
        $content = View::factory('/main/index')
                        ->bind('result1', $result1)
                        ->bind('result2', $result2);

        $result1 = ORM::factory('objavlenia')->where('date', '>', DB::expr("(NOW()- INTERVAL 7 DAY)"))->and_where('variant', '=', 'Ищу')->order_by('date', 'DESC')->find_all();
        $result2 = ORM::factory('objavlenia')->where('date', '>', DB::expr("(NOW()- INTERVAL 7 DAY)"))->and_where('variant', '=', 'Предлагаю')->order_by('date', 'DESC')->find_all();
        $this->template->content = $content;
        $this->template->title .= ' - Главная';
    }

    // Добавление объявлений
    public function action_add()
    {
        $content = View::factory('/main/add')
              ->bind('categoris', $categoris)
              ->bind('errors', $errors)
              ->bind('ifadd', $ifadd)
              ->bind('valueS', $s)
              ->bind('valueE', $e)
              ->bind('valueP', $p)
              ->bind('valueN', $n);

        $s = ''; $e = ''; $p = ''; $n = '';

        $id = Session::instance()->get('id');
        if(!empty($id))
        {
            $user = ORM::factory('users', $id);
            $s = 'value="'.$user->skype.'" disabled';
            $e = 'value="'.$user->email.'" disabled';
            $p = 'value="'.$user->phone.'" disabled';
            $n = 'value="'.$user->name.'" disabled';
        }

        $captcha = Captcha::instance();
        $content->captcha = $captcha;

        $categoris = '';
        $errors = '';
        $ifadd = '';

        $cat = ORM::factory('category')->find_all();
        foreach($cat as $key)
            $categoris .= '<label><input type="checkbox" name="category[]" value="'.$key->name.'"/>'.$key->name.'</label>';

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $post = Validation::factory($_POST);
            $post -> rule('oplata', 'not_empty')
                -> rule('email', 'not_empty')
                -> rule('email', 'email')
                -> rule('phone', 'not_empty')
                -> rule('name', 'not_empty')
                -> rule('title', 'not_empty')
                -> rule('category', 'not_empty');

            if($post->check() && Captcha::valid($_POST['captcha']))
            {
                $data = Arr::extract($_POST, array('variant', 'days', 'time', 'oplata',
                    'email', 'name', 'phone', 'skype', 'description', 'timeobj', 'title'));
                if(empty($data['skype']))  $data['skype'] = "Не указан";
                if($data['days']=="Не важно") $data['days'] = "В любой день недели";
                if($data['time']=="Не важно") $data['time'] = "В любой половине дня";
                $data['date'] = date('Y-m-d H:i:s');

                $res = ORM::factory('objavlenia')
                        ->values($data)
                        ->save();
                $last_id = mysql_insert_id();

                if(empty($id))
                {
                    $minLength=10;
                    $maxLength=15;
                    $rgLetters = array('a','b','c','d','e','f',
                        'g','h','i','j','k','l',
                        'm','n','o','p','r','s',
                        't','u','v','x','y','z',
                        'A','B','C','D','E','F',
                        'G','H','I','J','K','L',
                        'M','N','O','P','R','S',
                        'T','U','V','X','Y','Z',
                        '1','2','3','4','5','6',
                        '7','8','9','0');
                    shuffle($rgLetters);

                    $password = join('',array_slice($rgLetters, 0, mt_rand($minLength, $maxLength)));

                    $result = ORM::factory('users');
                    $result->skype = $data['skype'];
                    $result->phone = $data['phone'];
                    $result->name = $data['name'];
                    $result->email = $data['email'];
                    $result->password = md5($password);
                    $result->save();

                    $id = mysql_insert_id();
                    $text = View::factory('user/mail')->set('password', $password)->set('email', $data['email'])->set('name', $data['name']);
                    mail($data['email'], 'Приветствуем вас на Halturatut!', $text);
                }

                if($res->loaded())
                {
                  foreach($this->request->post('category') as $key)
                  $list[] = ORM::factory('category')->where('name', "=", $key)->find()->id;

                  foreach($list as $key){
                      $tag = ORM::factory('category', $key);
                      $article =ORM::factory('objavlenia', $last_id);
                      $tag->add('objavlenia',$article);
                  }

                  $tag = ORM::factory('users', $id);
                  $obj = ORM::factory('objavlenia', $last_id);
                  $tag->add('objavlenia', $obj);

                  $ifadd = "<script>alert('Объявление успешно добавлено! На вашу почту было выслано письмо!');</script>";
                  $this->redirect('/');
                }
            }
            else
            {
              foreach($post->errors('validation') as $key=>$value)
                      $errors .= $value.'<br />';
              if(!Captcha::valid($_POST['captcha'])) $errors .= "Значение капчи не верное!<br>";
            }
        }

        $this->template->content = $content;
    }

    // Вывод объявления
    public function action_objavlenie()
    {
        $content = View::factory('/main/objavlenie')->bind('objavlenie', $objavlenie)->bind('category', $category);

        $id = (int)$this->request->param('id');

        $category='';
        $obj = ORM::factory('objavlenia', $id)->category->find_all();
        foreach($obj as $value) $category .= "<a href='".URL::site('catalog/'.$value->id)."'>".$value->name."</a>, ";


        $objavlenie = ORM::factory('objavlenia')->where('id', '=', $id)->find();
        if(!$objavlenie->loaded()) $this->redirect('page/404');

        $this->template->content = $content;
    }

    //Каталог
    public function action_catalog()
    {
        function addQuery($key, $value){
            $result = '?';
            foreach ($_GET as $k => $v){
                if($k != $key)
                $result .= $k."=".$v."&";
            }
            $result .= $key."=".$value;
            return $result;
        }

        $content = View::factory('/main/catalog')
                            ->bind('result', $result)
                            ->bind('name', $name)
                            ->bind('text', $text)
                            ->bind('nav', $nav)
                            ->bind('variant', $variants);


       $category = $this->request->param('id');
       if(!empty($category) || !empty($_GET['search']))
       {
               if(isset($_GET['search']))
               {
                   $search = htmlspecialchars($_GET['search']);
                   $Sresult = ORM::factory('objavlenia') ->or_where_open()
                                                        ->or_where('title', 'LIKE', '%'.$search.'%')
                                                        ->or_where('Description', 'LIKE', '%'.$search.'%')
                                                        ->or_where('skype', 'LIKE', '%'.$search.'%')
                                                        ->or_where_close();
                   $num = 3;
                   if(isset($_GET['page'])) $page = intval($_GET['page']);
                   if(empty($page) or $page < 0) $page = 1;
                   $genre = ORM::factory('category')->where('url', '=', $category)->find();
                   $posts = $Sresult->count_all();
                   $total = intval(($posts - 1) / $num) + 1;
                   if($page > $total) $page = $total;
                   $start = $page * $num - $num;

                   $name =  $Sresult->find();
                   $searchres = $search;
                   if($name->loaded()){
                       if(isset($_GET['v'])) {
                           if($_GET['v'] == "0") {$variant = "Предлагаю"; $variants .= '<a class="pr active" href='.addQuery('v', '0').'">Предлагают</a><a class="is" href="'.addQuery('v', '1').'">Ищут</a>';}
                           if($_GET['v'] == "1") {$variant = "Ищу"; $variants .= '<a class="is" href="'.addQuery('v', '0').'">Предлагают</a><a class="pr active" href="'.addQuery('v', '1').'">Ищут</a>';}
                       }
                       else {$variant = "Предлагаю"; $variants .= '<a class="pr active" href="'.addQuery('v', '0').'">Предлагают</a><a class="is" href="'.addQuery('v', '1').'">Ищут</a>';}

                       $name = "Результаты поиска";
                       $text = '';

                       $result = ORM::factory('objavlenia') ->or_where_open()
                           ->or_where('title', 'LIKE', '%'.$search.'%')
                           ->or_where('Description', 'LIKE', '%'.$search.'%')
                           ->or_where('skype', 'LIKE', '%'.$search.'%')
                           ->or_where_close()->where('variant', '=', $variant)->offset($start)->limit($num)->find_all();

                       if ($page != 1) $pervpage = '<li><a href=&page=1><<</a></li>
                               <li><a href=?search='.$search.'&page='. ($page - 1) .'><</a></li> '; else $pervpage = '';

                       if ($page != $total) $nextpage = ' <li><a href=?search='.$search.'&page='. ($page + 1) .'>></a></li>
                                   <li><a href=?search='.$search.'&page=' .$total. '>>></a></li>'; else $nextpage = '';

                       if($page - 2 > 0) $page2left = '<li><a href=?search='.$search.'&page='. ($page - 2) .'>'. ($page - 2) .'</a></li>'; else $page2left = '';
                       if($page - 1 > 0) $page1left = '<li><a href=?search='.$search.'&page='. ($page - 1) .'>'. ($page - 1) .'</a></li>'; else $page1left = '';
                       if($page + 2 <= $total) $page2right = '<li><a href=?search='.$search.'&page='. ($page + 2) .'>'. ($page + 2) .'</a></li>'; else $page2right ='';
                       if($page + 1 <= $total) $page1right = '<li><a href=?search='.$search.'&page='. ($page + 1) .'>'. ($page + 1) .'</a></li>'; else $page1right = '';

                       $nav = $pervpage.$page2left.$page1left.'<li><a class="active">'.$page.'</a></li>'.$page1right.$page2right.$nextpage;
                   }
                   else{
                       $this->redirect('pages/404'); // переход на стр. поиск не дал результатов
                   }

               }
           else{
               $genre = ORM::factory('category')->where('url', '=', $category)->find();
               $variant = '';
               if($genre->loaded()){
                   if(isset($_GET['v'])) {
                       if($_GET['v'] == "0") {$variant = "Предлагаю"; $variants .= '<a class="pr active" href='.addQuery('v', '0').'">Предлагают</a><a class="is" href="'.addQuery('v', '1').'">Ищут</a>';}
                       if($_GET['v'] == "1") {$variant = "Ищу"; $variants .= '<a class="is" href="'.addQuery('v', '0').'">Предлагают</a><a class="pr active" href="'.addQuery('v', '1').'">Ищут</a>';}
                   }
                   else {$variant = "Предлагаю"; $variants .= '<a class="pr active" href="'.addQuery('v', '0').'">Предлагают</a><a class="is" href="'.addQuery('v', '1').'">Ищут</a>';}

                   $num = 3;
               if(isset($_GET['page'])) $page = intval($_GET['page']);
               if(empty($page) or $page < 0) $page = 1;
               $posts = $genre->objavlenia->where('variant', '=', $variant)->count_all();
               $total = intval(($posts - 1) / $num) + 1;
               if($page > $total) $page = $total;
               $start = $page * $num - $num;

               $this->template->keywords = $genre->keywords;
               $this->template->description = $genre->description;
               $this->template->title .= ' - '.$genre->title;

               $name = $genre->name;
           $text = $genre->text;

           $result = $genre->objavlenia->where('variant', '=', $variant)->order_by('date', 'DESC')->offset($start)->limit($num)->find_all();

               if ($page != 1) $pervpage = '<li><a href='.addQuery('page', '1').'><<</a></li>
                               <li><a href= .'.addQuery('page', $page - 1) .'><</a></li> '; else $pervpage = '';

               if ($page != $total) $nextpage = ' <li><a href='.addQuery('page', $page + 1) .'>></a></li>
                                   <li><a href=?page=' .$total. '>>></a></li>'; else $nextpage = '';

               if($page - 2 > 0) $page2left = '<li><a href='.addQuery('page', $page - 2) .'>'. ($page - 2) .'</a></li>'; else $page2left = '';
               if($page - 1 > 0) $page1left = '<li><a href='.addQuery('page', $page - 1) .'>'. ($page - 1) .'</a></li>'; else $page1left = '';
               if($page + 2 <= $total) $page2right = '<li><a href='.addQuery('page', $page + 2) .'>'. ($page + 2) .'</a></li>'; else $page2right ='';
               if($page + 1 <= $total) $page1right = '<li><a href='.addQuery('page', $page + 1) .'>'. ($page + 1) .'</a></li>'; else $page1right = '';

               $nav = $pervpage.$page2left.$page1left.'<li><a class="active">'.$page.'</a></li>'.$page1right.$page2right.$nextpage;
           }
           else{
               $this->redirect('page/404');
           }}
       }else  {$this->redirect('page/404');
       }

       $this->template->content = $content;
    }


    function action_myobj()
    {
        $id = Session::instance()->get('id');
        if(!empty($id))
        {
        $result = ORM::factory('users', $id)->objavlenia->find_all();
        $content = View::factory('/main/catalog')
            ->set('result', $result)
            ->set('name', 'Мои объявления')
            ->set('text', '')
            ->set('nav', '')
            ->set('variant', '');

        $this->template->content = $content;
        }
        else
            $this->redirect('');
    }

}