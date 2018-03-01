<?php include('views/includes/header.php'); ?>

<div class="wrapper">
    <section class="content">
        <div class="page__inner docs1">
            <div class="page__header">
                <h1 class="page__heading">Документы</h1>
                <div class="breadcrumbs">
                    <a href="">Главная</a> /
                    Документы /
                </div>
            </div>

            <div class="docs__catalog">
                <?php for($i = 0; $i < 4; $i++) : ?>
                <div class="docs__catalog__row">
                    <div class="icon__papka"></div>
                    <a class="docs__catalog__heading" href="">Федеральные нормативно-правовые документы</a>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
</div>

<?php include('views/includes/footer.php'); ?>