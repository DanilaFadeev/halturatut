<form action="" method="post">
<div id="add">
    <div class="oplata">
        <label><span>Название категории</span>
            <input type="text" placeholder="Название категории" name="name" value="<?=$name?>"/>
        </label>
    </div>
    <div class="oplata">
        <label><span>URL</span>
            <input type="text" placeholder="URL" value="<?=$url?>" name="url"/>
        </label>
    </div>
    <div class="oplata">
        <label><span>Title</span>
            <input type="text" placeholder="Название страницы" value="<?=$title?>" name="title"/>
        </label>
    </div>
    <div class="oplata">
        <label><span>Ключевые слова (meta)</span>
            <input type="text" placeholder="Название страницы" value="<?=$keywords?>" name="keywords"/>
        </label>
    </div>
    <div class="oplata">
        <label>
            <span>Описание (meta)</span>
            <input type="text" placeholder="Название страницы" value="<?=$description?>" name="description"/>
        </label>
    </div>
    <div class="opisanie">
        <span>Текст</span>
        <textarea name="text"><?=$text?></textarea>
    </div>
    <div class="last-block">

        <input type="submit" value="Добавить категорию" class="save-add"/>
    </div>

</div></form>