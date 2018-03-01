<?php include('views/includes/header.php'); ?>

<div class="wrapper">
    <section class="content">
        <div class="page__inner page__padd contacts">
            <div class="contacts__cols">
                <div class="contacts__left">
                    <div class="page__header">
                        <h1 class="page__heading">Контактная информация</h1>
                    </div>

                    <h3 class="page_subheading">Полное наименование:</h3>
                    <p>
                        <strong>Муниципальное бюджетное учреждение</strong>
                        <br><strong class="mark">&laquo;Центральный дом культуры "Синьково"&raquo;</strong>
                    </p>
                    <p>
                        Директор: <span class="mark">Садова Анна Фёдоровна</span>
                        <br>Телефон: <span class="mark">89269066194</span>
                    </p>
                    
                    <h3 class="page_subheading">Юридический адрес:</h3>
                    <p>
                        Адрес: <span class="mark">141830, Московская область, Дмитровский район,
                        <br>п. Новосиньково, Д.73</span>
                        <br>E-mail: <span class="mark">dk-sinkovo2@yandex.ru</span>
                        <br>Телефон: <span class="mark">89269065883</span>
                    </p>
                    
                    <h3 class="page_subheading">График работы:</h3>
                    <p class="mark">
                        Понедельник-суббота с 09:00 до 21:00
                        <br>Воскресенье выходной
                    </p>               
                </div>

                <div class="contacts__right">
                    <div class="contacts__map">
                        <script charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aba17f74f66ca623310d47a703f7eb04332a4b7fef6f05d78652ba287ebb38962&amp;width=100%25&amp;height=390&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
                </div>
            </div>

            <h2 class="page_subheading">Обратная связь:</h2>

            <form action="" method="post" class="contacts__form">
                <div class="contacts__form__left">
                    <label class="form__label">
                        Ваше имя
                        <input type="text" class="form__text">
                    </label>
                    <label class="form__label">
                        Ваш E-mail
                        <input type="text" class="form__text">
                    </label>
                    <label class="form__label">
                        Тема
                        <input type="text" class="form__text">
                    </label>
                </div>
                <div class="contacts__form__right">
                    <label class="form__label">
                        Сообщение
                        <textarea class="form__text"></textarea>
                        <button type="submit" class="form__button">Отправить</button>
                    </label>
                </div>
            </form>
        </div>
    </section>
</div>

<?php include('views/includes/footer.php'); ?>