<div id="sort">
    <span style="float:left; display:inline-block; margin:10px 0px 0px 0px; font-size:14px;"><a href="<?=URL::site()?>">Главная</a> > <a href=""><?=$name?> </a></span> <div id="switch"><?=$variant?></div>
</div>

<div class="pagination">
    <ul>
        <?=$nav?>
    </ul>
    <ul>
        <? if(isset($searchres)) echo $searchres; ?>
    </ul>
</div>
<div id="grid-item">
    <?php
    foreach($result as $key)
    {
        $t1 = explode(" ", $key->date);
        $t2 = explode(":", $t1[1]);
        $d2 = explode("-", $t1[0]);
        $obj = ORM::factory('objavlenia', $key->id)->category->find_all();

        echo '
    <div class="item">
        <a href="'.URL::site('objavlenie/'.$key->id).'" class="name">'.$key->title.'...</a>
        <div class="categories-item"><b>Категории:</b> ';
        foreach($obj as $value) echo "<a href='".URL::site('catalog/'.$value->id)."'>".$value->name."</a>, ";
        echo '</div>
        <div class="other-information-item"><span><b>Рабочий график:</b> '.$key->days.'; '.$key->time.'; </span> <span><b>Оплата:</b> '.$key->oplata.'; </span></div>
        <span class="date">'.$t2[0].":".$t2[1].'<br/> '.$d2[2].".".$d2[1].".".$d2[0].'</span>
    </div> ';
    }
    ?>

</div>

<div style="margin-bottom:15px;" class="pagination">
    <ul>
        <?=$nav?>
    </ul>
</div>
<div style="padding:20px 15px;">
    <?=$text?>
</div>