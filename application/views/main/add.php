
            <div id="add">
                <div class="is-or-pr">
                    <form method="post" action="">
                    <label>
                        <span>Вы ищете работу или предлагаете?</span>
                        <select name="variant">
                            <option value="Предлагаю">Предлагаю</option>
                            <option value="Ищу">Ищу</option>
                        </select>
                    </label>
                </div>
                <div class="oplata">
                    <label><span>Заголовок*</span>
                        <input type="text" size="100" name="title"/></label>
                </div>
                <div class="work-time">
                    <span class="w">Рабочий график</span>
                    <label>
                        <span>Дни</span>
                        <select name="days">
                            <option value="Не важно">Не важно</option>
                            <option value="Будние">Будние</option>
                            <option value="Выходные">Выходные</option>
                        </select>
                    </label>
                    <label>
                        <span>Время суток</span>
                        <select name="time">
                            <option value="Не важно">Не важно</option>
                            <option value="Утро">Утро</option>
                            <option value="День">День</option>
                            <option value="Вечер">Вечер</option>
                        </select>
                    </label>
                </div>
                <div class="oplata">
                    <label><span>Оплата*</span>
                        <input type="text" placeholder="Например:15$ за час, или 100$ за день.." name="oplata"/></label>
                </div>
                <div class="kontakty">
                    <span>Контакты</span>
                    <label><input type="text" placeholder="Email*" name="email" <?=$valueE?>/> (обязательно, будет нужен для редактирования и удаления объявления)</label>
                    <label><input type="text" placeholder="Имя*" name="name" <?=$valueN?>/> </label>
                    <label><input type="text" placeholder="Телефон*" name="phone" <?=$valueP?>/> </label>
                    <label><input type="text" placeholder="Скайп" name="skype" <?=$valueS?>/> </label>
                </div>
                <div class="opisanie">
                    <span>Полное описание (укажите здесь всю важную информацию)</span>
                    <textarea name="description"></textarea>
                </div>
                <div class="kategorii">
                    <?=$categoris ?>
                </div>
                <div class="time-over">
                    <span>Время размещения объявления</span>
                    <select name="timeobj">
                        <option value="неделя">неделя</option>
                        <option value="2 недели">2 недели</option>
                        <option value="3 недели">3 недели</option>
                        <option value="месяц">месяц</option>
                    </select>
                </div>
                <div class="last-block">
                    <span>Докажите, что вы не робот</span>
                    <div class="captcha">
                        <?php echo $captcha; ?>
                        <input name="captcha" type="text" />
                    </div>
                    <input type="submit" value="Добавить объявление" class="save-add"/>
                    </form><br />
                <?=$errors?>
                </div>

            </div>
            <?=$ifadd?>
