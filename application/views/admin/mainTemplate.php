<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <?php foreach($styles as $style): ?>
        <?php echo HTML::style('public/css/'.$style.'.css'); ?>
    <?php endforeach; ?>
</head>

<body>

<div class="wrapper">

    <header class="header">
        <a id="logo" href="<?php echo URL::site('admin');?>"></a>

        <div id="header-menu">
            <ul>
                <li> <a href="<?php echo URL::site('page/about');?>">О проекте</a> • </li>
                <li> <a style="color:red;" href="<?php echo URL::site('page/help');?>">Помощь проекту</a> • </li>
                <li> <a href="<?php echo URL::site('page/rule');?>">Правила</a> • </li>
                <li> <a href="<?php echo URL::site('page/contacts');?>">Связаться</a> </li>
            </ul>
        </div>
    </header><!-- .header-->

    <div class="middle">

        <div class="container">
            <main class="content">
                <div id="search">
                    <form action="<?=URL::site('catalog')?>" method="get">
                        <input class="input-search" placeholder="Введите ключевое слово или фразу для поиска.." type="text" name="search"/>
                        <input type="submit" class="button-search" value=""/>
                    </form>
                </div>
                <div id="sort">
                    <span style="float:left; display:inline-block; margin:10px 0px 0px 0px; font-size:14px;"><a href="#">Главная</a> > <a href="#">Для студентов </a></span> <div id="switch"><a class="pr active" href="#">Предлагают</a><a class="is" href="#">Ищут</a></div>
                </div>

                <?=$content?>
            </main><!-- .content -->
        </div><!-- .container-->

        <aside class="left-sidebar">
            <a id="pr-button" href="<?php echo URL::site('add'); ?>"><i></i><span>Предложить работу</span></a>
            <a id="is-button" href="<?php echo URL::site('add'); ?>"><i></i><span>Разместить резюме</span></a>
            <div id="categories">
                <b>Категории</b>
                <ul>
                    <?php
                    $listcategory = ORM::factory('category')->find_all();
                    foreach($listcategory as $key){
                        echo '<li><a href="'.URL::site('admin/catalog/'.$key->id).'">'.$key->name.'</a>
                        <a style="color:red; font-size:12px;" href="'.URL::site('admin/categorydel/'.$key->id).'">удалить</a> <a style="color:green; font-size:12px;" href="'.URL::site('admin/addcategory/'.$key->id).'">изменить</a>
                        </li>';}
                    ?>

                    <li style=" margin-top:20px;"><a  style="font-weight:bold; font-size:18px; color:green;" href="<?=URL::site('admin/addcategory/')?>">+ ДОБАВИТЬ НОВУЮ</a></li>
                </ul>
            </div>
            <div id="categories2">
                <b>Cтраницы</b>
                <ul>
                    <?php foreach($pages as $page): ?>
                    <li><a href="<?=URL::site('page/'.$page->url)?>"><?=$page->name?></a> <a style="color:red; font-size:12px;" href="<?=URL::site('admin/pagedel/'.$page->id)?>">удалить</a>
                                <a style="color:green; font-size:12px;" href="<?=URL::site('admin/addpage/'.$page->id)?>">изменить</a></li>
                    <?php endforeach; ?>
                    <li style=" margin-top:20px;"><a  style="font-weight:bold; font-size:18px; color:green;" href="<?=URL::site('admin/addpage')?>">+ ДОБАВИТЬ НОВУЮ</a></li>
                </ul>
            </div>
            <div style="margin:15px;">
                <script type="text/javascript" src="//vk.com/js/api/openapi.js?115"></script>
                <!-- VK Widget -->
                <div id="vk_groups"></div>
                <script type="text/javascript">
                    VK.Widgets.Group("vk_groups", {mode: 0, width: "220", height: "200", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 74631912);
                </script>
            </div>
        </aside><!-- .left-sidebar -->

    </div><!-- .middle-->

</div><!-- .wrapper -->

<footer class="footer">
    <div id="footer-menu">

    </div>
    <span id="copyright">halturatut.by 2014  © - подработка в Минске</span>
</footer><!-- .footer -->

</body>
</html>