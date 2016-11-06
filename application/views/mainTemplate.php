<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <title><?=$title?></title>
    <meta name="keywords" content="<?=$keywords?>" />
    <meta name="description" content="<?=$description?>" />
    <?php foreach($styles as $style): ?>
        <?php echo HTML::style('public/css/'.$style.'.css'); ?>
    <?php endforeach; ?>
</head>

<body>

<div class="wrapper">

    <header class="header">
        <a id="logo" href="<?php echo URL::site();?>"></a>

        <div id="header-menu">
            <ul>
                <li> <a href="<?php echo URL::site('page/about');?>">О проекте</a> • </li>
                <li> <a style="color:red;" href="<?php echo URL::site('page/help');?>">Помощь проекту</a> • </li>
                <li> <a href="<?php echo URL::site('page/rule');?>">Правила</a> • </li>
                <li> <a href="<?php echo URL::site('page/contacts');?>">Связаться</a> </li>
        </div>
        <div id="social-buttons">
            <b>Расскажите о проекте:</b>
            <div class="buttons"> <script type="text/javascript" src="//yandex.st/share/share.js"
                                          charset="utf-8"></script>
                <div class="yashare-auto-init" data-yashareL10n="ru"
                     data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,moimir,gplus" data-yashareTheme="counter"

                    ></div> </div>


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
                <?=$content?>
            </main><!-- .content -->
        </div><!-- .container-->

        <aside class="left-sidebar">
           <?=$block?>
            <a id="pr-button" href="<?php echo URL::site('add'); ?>"><i></i><span>Предложить работу</span></a>
            <a id="is-button" href="<?php echo URL::site('add'); ?>"><i></i><span>Разместить резюме</span></a>
            <div id="categories">
                <b>Категории</b>
                <ul>
                    <?php $cat = ORM::factory('category')->find_all();
                    foreach($cat as $key){
                        $tag = ORM::factory('category')->where('url', '=', $key->url)->find();
                        $sum = $tag->objavlenia->count_all();

                    echo '<li><a href="'.URL::site('/catalog/'.$key->url).'">'.$key->name.'</a>  <span>'.$sum.'</span></li>';}
                    ?>

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
        <ul>
            <li><a href="<?php echo URL::site('page/about');?>">О проекте</a></li>
            <li><a style="color:red;" href="<?php echo URL::site('page/help');?>">Помощь проекту</a></li>
            <li><a href="<?php echo URL::site('page/rule');?>">Правила</a></li>
            <li><a href="<?php echo URL::site('page/contacts');?>">Связаться</a></li>
        </ul>
    </div>
    <span id="copyright">halturatut.by 2014  © - подработка в Минске</span>
    <div id="web-ws">
        <span> <a href="#">Разработка сайта</a></span>
        <span>Интерактивное агенство white.stripe</span>
    </div>
</footer><!-- .footer -->

</body>
</html>