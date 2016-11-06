

                <div class="pagination">
                    <ul>
                        <li><a class="active" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                    </ul>
                </div>
                <?php foreach($objavlenia as $obj): ?>
                <?php $cat = ORM::factory('objavlenia', $obj->id)->category->find_all(); ?>
                <div id="grid-item">
                    <div class="item">
                        <div><a href="<?=URL::site('objavlenie/'.$obj->id)?>" class="name"><?=$obj->title?></a> <a style="color:red; font-size:12px;" href="<?=URL::site('admin/objavleniedel/'.$obj->id)?>">удалить</a> <a style="color:green; font-size:12px;" href="<?=URL::site('admin/editobj/'.$obj->id)?>">изменить</a></div>
                        <div class="categories-item"><?php foreach($cat as $value) echo "<a href='".URL::site('admin/catalog/'.$value->id)."'>".$value->name."</a>, ";?></div>
                        <div class="other-information-item"><span><b>Рабочий график:</b><?=$obj->days?>; <?=$obj->time?></span> <span><b>Оплата:</b> <?=$obj->oplata?>; </span></div>
                        <span class="date"><?=$obj->date?></span>
                    </div>
                    <?php endforeach; ?>

                </div>
                <div style="margin-bottom:15px;" class="pagination">
                    <ul>
                        <li><a class="active" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                    </ul>
                </div>
