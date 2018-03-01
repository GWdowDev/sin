<?php include('views/includes/header.php'); ?>

<div class="wrapper">
    <section class="content">
        <div class="page__inner info">
            <div class="page__header">
                <h1 class="page__heading">Новости</h1>
            </div>

            <div class="stack__rows">
                <?php for($i = 0; $i < 4; $i++) : ?>
                <div class="stack__row">
                    <div class="stack__image" style="background-image: url('assets/images/kartinka.png');"></div>
                    <div class="stack__content">
                        <div class="stack__header">
                            <div class="stack__date">03.10.2017</div>
                            <div class="stack__heading">Открытие выставки Валентина Серова</div>
                        </div>
                        <div class="stack__descr">
                            Петербург, лето 1805 г. На вечере у фрейлины Шерер присутствуют среди прочих гостей Пьер Безухов, незаконный сын богатого вельможи, и князь Андрей Болконский. Разговор заходит о Наполеоне, и оба друга пытаются защитить великого человека от осуждений хозяйки вечера и её гостей. Князь Андрей собирается на войну, потому что мечтает о славе, равной славе Наполеона, а Пьер не знает, чем ему заняться, участвует в кутежах петербургской молодёжи (здесь особое место занимает Федор Долохов, бедный, но чрезвычайно волевой и решительный офицер); за очередное озорство Пьер выслан из столицы, а Долохов разжалован в солдаты.
                        </div>
                        <div class="stack__buttons">
                            <a class="form__button" href="">Читать далее</a>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>

            <div class="pagination">
                <a href="" class="active">1</a>
                <a href="">2</a>
                <a href="">3</a>
                <a href="">4</a>
            </div>
        </div>
    </section>
</div>

<?php include('views/includes/footer.php'); ?>