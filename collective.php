<?php include('views/includes/header.php'); ?>

<div class="wrapper">
    <section class="content">
        <div class="page__inner info">
            <div class="page__header">
                <h1 class="page__heading">Коллективы</h1>
            </div>

            <div class="cards__grid">
                <?php for($i = 0; $i < 12; $i++) : ?>
                <div class="card" style="background-image: url('assets/images/kartinka.png');">
                    <div class="card__footer">
                        <div class="card__heading">
                            Династия
                            <?php if(rand(1, 6) == 6) : ?>
                                <br>Более длинный заголовок
                            <?php endif; ?>
                        </div>
                        <div class="card__descr">
                            Вокально-инструментальный ансамбль
                            <?php if(rand(1, 6) == 6) : ?>
                            <br>Вторая строка
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
</div>

<?php include('views/includes/footer.php'); ?>