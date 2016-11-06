
<div id="description">
    <h1 class="name"><?=$objavlenie->title?></h1>
    <div class="categories-description"><b>Категории:</b> <?=$category?></div>
    <div class="categories-description"><b>Рабочий график:</b> <?=$objavlenie->days?>; <?=$objavlenie->time?></div>
    <div class="categories-description"><b>Оплата:</b> <?=$objavlenie->oplata?></div>
    <div id="contacts-description">
        <b>Контакты для связи</b>
        <div><span><b>Имя:</b> <?=$objavlenie->name?></span>
            <span><b>Телефон:</b> <?=$objavlenie->phone?></span>
            <span><b>Skype:</b> <?=$objavlenie->skype?></span></div>
    </div>
    <div id="description-text">
        <b>Описание</b>
        <p><?=$objavlenie->description?></p>
    </div>
</div>