<?php include('views/includes/header.php'); ?>

<div class="wrapper">
    <section class="content">
        <div class="page__inner docs2">
            <div class="page__header">
                <h1 class="page__heading">Документы</h1>
                <div class="breadcrumbs">
                    <a href="">Главная</a> /
                    <a href="">Документы</a> /
                    Федеральные нормативно-правовые документы
                </div>
            </div>

            <div class="docs__catalog">
                <?php for($i = 0; $i < 4; $i++) : ?>
                <div class="docs__catalog__row">
                    <div class="row__counter"></div>
                    <div class="docs__date">31.12.2015Г.</div>
                    <div class="docs__catalog__content">
                        <a class="docs__catalog__heading" href="">Приказ отдела культуры администрации Дмитровского муниципального района Московской области №80</a>
                        <div class="docs__catalog__descr">
                            Петербург, лето 1805 г. На вечере у фрейлины Шерер присутствуют среди прочих гостей Пьер Безухов, незаконный сын богатого вельможи, и князь Андрей Болконский. Разговор заходит о Наполеоне, и оба друга пытаются защитить великого человека от осуждений хозяйки вечера и её гостей. Князь Андрей собирается на войну, потому что мечтает о славе, равной славе Наполеона.
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
</div>

<?php include('views/includes/footer.php'); ?>