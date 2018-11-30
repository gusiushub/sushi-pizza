<?php
?>

<main class="page-main footer-bottom__content">
    <div class="page-main__wrapper wrapper">

        <!-- Ветикальное меню -->
        <aside class="page-main__left vertical-menu">
            <span class="visually-hidden">Список блюд</span>
            <button class="vertical-menu__button-menu button" type="button" title="Открыть меню">
                <i class="fas fa-arrow-right"></i>
            </button>
            <?= $this->render('_menu'); ?>
        </aside>

        <!--  Содержимое которое должно быть в main, вставлять в page-main__right -->
        <div class="page-main__right ordering">
            <?= $this->render('_breadcrumbs'); ?>
            <h1 class="ordering__h1">Подтверждение заказа</h1>
            <form class="ordering__form" action="/" method="get">
                <p class="ordering__success-text">Ваш заказ принят!</p>
                <p class="ordering__success-text">Мы свяжемся с вами в ближайшее время для подтверждения заказа!</p>
            </form>
        </div>
    </div>
</main>
