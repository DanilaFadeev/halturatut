<div id="two-block-home">
    <div id="pr-block">
        <b class="n">Предлагаю работу <i>за последние 7 дней</i></b>
        <ul>
            <? foreach($result2 as $key)
                echo'
            <li>
                <a href="'.URL::site("objavlenie/".$key->id).'">'.$key->title.'</a>
                <div class="bottom-bl">
                    <span style="margin:0;"><b>Оплата:</b>'.$key->oplata.';</span>
                </div>
            </li>';
            ?>
        </ul>
    </div>
    <div id="is-block">
        <b class="n">Ищу работу <i>за последние 7 дней</i></b>
        <ul>
            <? foreach($result1 as $key)
            echo '<li>
                <a href="'.URL::site("objavlenie/".$key->id).'">'.$key->title.'</a>
                <div class="bottom-bl">
                    <span><b>Рабочий график:</b>'.$key->days.'; '.$key->time.'</span>
                </div>
            </li>';
            ?>
        </ul>
    </div>
</div>