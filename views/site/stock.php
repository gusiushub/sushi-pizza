<?php
?>

<main class="page-main">
    <div class="page-main__wrapper wrapper">
        <aside class="page-main__left vertical-menu">
            <span class="visually-hidden">Список блюд</span>
            <button class="vertical-menu__button-menu button" type="button" title="Открыть меню">
                <i class="fas fa-arrow-right"></i>
            </button>
            <?php  echo $this->render('_menu'); ?>
        </aside>
        <div class="page-main__right">
            <ul class="breadcrumbs breadcrumbs-menu">
                <li class="breadcrumbs__item">
                    <a href="/" class="breadcrumbs__link">Главная</a>
                </li>
                <li class="breadcrumbs__item">
                    <a class="breadcrumbs__link breadcrumbs__link--active">Акции</a>
                </li>
            </ul>
            <section class="sales">
                <h1 class="sales-title">Акции и подарки</h1>
                <div class="sales-textblock">
                    <b>Скидка -20% в день рождения!!!</b>
                    <b class="sales-textblock__first-b">Ролл ясай или киото в подарок!</b>
                    <span>При заказе с собой от 800 рублей;</span>
                    <span>На доставку от 1000 рублей.</span>
                    <b class="sales-textblock__second-b">Скидки в суши - баре ТАКАРА</b>
                </div>
                <div class="sales-banner">
                    <img class="sales-banner__img" src="../../web/img/banner.png" alt="sales">
                </div>
            </section>
        </div>
    </div>
</main>
