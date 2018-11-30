<?php
?>
<main class="page-main">
    <div class="page-main__wrapper wrapper">
        <aside class="page-main__left vertical-menu vertical-menu__menu">
            <span class="visually-hidden">Список блюд</span>
            <button class="vertical-menu__button-menu button" type="button" title="Открыть меню">
                <i class="fas fa-arrow-right"></i>
            </button>
            <?php  echo $this->render('_menu'); ?>
        </aside>
        <div class="page-main__right">
            <ul class="breadcrumbs breadcrumbs-menu">
                <li class="breadcrumbs__item">
                    <a href="index.html" class="breadcrumbs__link">Главная</a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="menu.html" class="breadcrumbs__link breadcrumbs__link--active">Меню</a>
                </li>
            </ul>
            <h1 class="menu-title">Меню</h1>
            <section class="menu">
<!--                --><?php //if(!empty($products)): ?>
<!--                    <ul class="catalog-list">-->
<!--                        --><?php //foreach($products as $product): ?>
<!--                            <li class="catalog-list__item sushi-item">-->
<!--                                <a href="#" class="catalog-list__link">-->
<!--                                    <img src="../../web/img/catalog/sushi.png" class="catalog-list__item-img" alt="catalog-item">-->
<!--                                    <p class="catalog-list__item-title">--><?//= $product['title'] ?><!--</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                        --><?php //endforeach; ?>
<!--                    </ul>-->
<!--                --><?php //else:?>
<!--                    <h3>Корзина пуста</h3>-->
<!--                --><?php //endif;?>



                <ul class="catalog-list">
                    <li class="catalog-list__item sushi-item">
                        <a href="/product?item=sushi" class="catalog-list__link">
                            <img src="../../web/img/catalog/sushi.png" class="catalog-list__item-img" alt="catalog-item">
                            <p class="catalog-list__item-title">Суши</p>
                        </a>
                    </li>
                    <li class="catalog-list__item rolls-item">
                        <a href="/product?item=rolls" class="catalog-list__link">
                            <img src="" class="catalog-list__item-img" alt="catalog-item">
                            <p class="catalog-list__item-title">Роллы</p>
                        </a>
                    </li>
                    <li class="catalog-list__item fry-rolls-item">
                        <a href="/product?item=baked_rolls" class="catalog-list__link">
                            <img src="" class="catalog-list__item-img" alt="catalog-item">
                            <p class="catalog-list__item-title">Запеченные роллы</p>
                        </a>
                    </li>
                    <li class="catalog-list__item sets-item">
                        <a href="/product?item=set" class="catalog-list__link">
                            <img src="" class="catalog-list__item-img" alt="catalog-item">
                            <p class="catalog-list__item-title">Наборы</p>
                        </a>
                    </li>
                    <li class="catalog-list__item pizza-item">
                        <a href="/product?item=pizza" class="catalog-list__link">
                            <img src="" class="catalog-list__item-img" alt="catalog-item">
                            <p class="catalog-list__item-title">Пицца</p>
                        </a>
                    </li>
                    <li class="catalog-list__item wok-item">
                        <a href="/product?item=wok" class="catalog-list__link">
                            <img src="img/catalog/wok.png" class="catalog-list__item-img" alt="catalog-item">
                            <p class="catalog-list__item-title">Лапша wok</p>
                        </a>
                    </li>
                    <li class="catalog-list__item soup-item">
                        <a href="/product?item=soup" class="catalog-list__link">
                            <img src="img/catalog/miso.png" class="catalog-list__item-img" alt="catalog-item">
                            <p class="catalog-list__item-title">Супы</p>
                        </a>
                    </li>
                    <li class="catalog-list__item lanch-item">
                        <a href="/product?item=lunch" class="catalog-list__link">
                            <img src="img/catalog/lanch.png" class="catalog-list__item-img" alt="catalog-item">
                            <p class="catalog-list__item-title">Бизнес ланчи</p>
                        </a>
                    </li>
                    <li class="catalog-list__item salad-item">
                        <a href="/product?item=snacks" class="catalog-list__link">
                            <img src="" class="catalog-list__item-img" alt="catalog-item">
                            <p class="catalog-list__item-title">Салаты и закуски</p>
                        </a>
                    </li>
                    <li class="catalog-list__item desert-item">
                        <a href="/product?item=dessert" class="catalog-list__link">
                            <img src="" class="catalog-list__item-img" alt="catalog-item">
                            <p class="catalog-list__item-title">Десерты</p>
                        </a>
                    </li>
                    <li class="catalog-list__item drink-item">
                        <a href="/product?item=drinks" class="catalog-list__link">
                            <img src="img/catalog/cola.png" class="catalog-list__item-img" alt="catalog-item">
                            <p class="catalog-list__item-title">Напитки</p>
                        </a>
                    </li>
                </ul>

            </section>
        </div>
    </div>
</main>
