<?php
?>



<main class="page-main">
    <div class="page-main__wrapper wrapper">

        <!-- Ветикальное меню -->
        <aside class="page-main__left vertical-menu">
            <span class="visually-hidden">Список блюд</span>
            <button class="vertical-menu__button-menu button" type="button" title="Открыть меню">
                <i class="fas fa-arrow-right"></i>
            </button>
            <?= $this->render('_menu') ?>
        </aside>

        <!--  Содержимое которое должно быть в main, вставлять в page-main__right -->
        <div class="page-main__right ordering">
            <ul class="breadcrumbs breadcrumbs--ordering">
                <li class="breadcrumbs__item">
                    <a href="/" class="breadcrumbs__link">Главная</a>
                </li>
                <li class="breadcrumbs__item">
                    <a class="breadcrumbs__link breadcrumbs__link--active">Оформление заказа</a>
                </li>
            </ul>
            <h1 class="ordering__h1">Оформление заказа</h1>
            <form class="ordering__form" action="/" method="get">
                <?php  if(!empty($_SESSION['cart'])){ ?>
                <table class="ordering__table">
                    <tr class="ordering__table-tr">
                        <th class="ordering__table-th">Товар</th>
                        <th class="ordering__table-th">Цена, руб.</th>
                        <th class="ordering__table-th">Количество</th>
                        <th class="ordering__table-th">Итого, руб.</th>
                        <th class="ordering__table-th">Удалить</th>
                    </tr>
                    <?php foreach($_SESSION['cart'] as $item){?>
                    <tr class="ordering__table-tr goods-container">
                        <td class="ordering__table-td">
                            <a href="#" class="ordering__table-link"><?= $item->getProduct()->title ?></a>
                        </td>
                        <td class="ordering__table-td ordering__table-td--price"><?= $item->getPrice()?></td>
                        <td class="ordering__table-td ordering__table-td--amount">
                            <button onclick='$.ajax({
                                    url: "/product/remove?item=<?= $_GET['item'] ?>&id=<?= $item->getId() ?>",
                                    data: $("#min").serialize(),
                                    success:  function(response){
                                    console.log(response);
                                    // put on console what server sent back...
                                    },
                                    error: function(response) {
                                    //обработка ошибок при отправке
                                    console.log(response);
                                    }
                                    });' class="ordering__table-amount ordering__table--subtraction button goods-subtraction"
                                    type="button" title="Уменьшить количество">
                                <span>-</span>
                            </button>
                            <label class="page-header__cart-label">
                                <input class="ordering__table-input goods-input" name="Калифорния креветка" type="number" value="<?= $item->getQuantity() ?>"
                                       min="1" max="100" title="Количество">
                            </label>
                            <button onclick='$.ajax({
                                    url: "/product/add?id=<?= $item->getId() ?>",
                                    data: $("#max").serialize(),
                                    success:  function(response){
                                    console.log(response);
                                    // put on console what server sent back...
                                    },
                                    error: function(response) {
                                    //обработка ошибок при отправке
                                    console.log(response);
                                    }
                                    });' class="ordering__table-amount ordering__table--addition button goods-addition"
                                    type="button" title="Увеличить количество">
                                <span>+</span>
                            </button>
                        </td>
                        <td class="ordering__table-td ordering__table-td--price goods-price-value" data-price="<?= $item->getCost()?>"><?= $item->getCost()?></td>
                        <td class="ordering__table-td">
                            <button onclick='$.ajax({
                                    url: "/product/remove?id=<?= $item->getId() ?>",
                                    data: $("#max").serialize(),
                                    success:  function(response){
                                    console.log(response);
                                    // put on console what server sent back...
                                    },
                                    error: function(response) {
                                    //обработка ошибок при отправке
                                    console.log(response);
                                    }
                                    });' class="ordering__table-button button goods-delete" type="button" title="Удалить">
                                <span>x</span>
                            </button>
                        </td>
                    </tr>
                    <?php } ?>
<!--                    <tr class="ordering__table-tr goods-container">-->
<!--                        <td class="ordering__table-td">-->
<!--                            <a href="#" class="ordering__table-link">Калифорния креветка</a>-->
<!--                        </td>-->
<!--                        <td class="ordering__table-td ordering__table-td--price" data-price="250">250</td>-->
<!--                        <td class="ordering__table-td ordering__table-td--amount">-->
<!--                            <button class="ordering__table-amount ordering__table-amount--subtraction button goods-subtraction"-->
<!--                                    type="button" title="Уменьшить количество">-->
<!--                                <span>-</span>-->
<!--                            </button>-->
<!--                            <label class="page-header__cart-label">-->
<!--                                <input class="ordering__table-input goods-input" name="Калифорния креветка" type="number" value="1"-->
<!--                                       min="1" max="100" title="Количество">-->
<!--                            </label>-->
<!--                            <button class="ordering__table-amount ordering__table-amount--addition button goods-addition"-->
<!--                                    type="button" title="Увеличить количество">-->
<!--                                <span>+</span>-->
<!--                            </button>-->
<!--                        </td>-->
<!--                        <td class="ordering__table-td ordering__table-td--price goods-price-value" data-price="250">250</td>-->
<!--                        <td class="ordering__table-td">-->
<!--                            <button class="ordering__table-button button goods-delete" type="button" title="Удалить">-->
<!--                                <span>x</span>-->
<!--                            </button>-->
<!--                        </td>-->
<!--                    </tr>-->
                </table>
                <div class="ordering__cart-total-price goods-total-price">
                    <span class="ordering__cart-total-price-text">Итого по заказу: </span>
                    <span class="goods-total-price-value">869</span>
                    <button class="ordering__cart-delete-all button goods-delete-all" type="button">Очистить корзину</button>
                </div>
                <?php } else{?>
                    <h3>Корзина пуста</h3>
                <?php }?>
                <div class="ordering__form-info">
                    <div class="ordering__form-info-left">
                        <h3 class="ordering__form-info-title">Клиетн:</h3>
                        <div class="ordering__form-info-field-wrapper">
                            <label class="ordering__form-info-label" for="name">Имя*:</label>
                            <input class="ordering__form-info-input" id="name" type="text" required>
                        </div>
                        <div class="ordering__form-info-field-wrapper">
                            <label class="ordering__form-info-label" for="phone">Телефон*:</label>
                            <input class="ordering__form-info-input" id="phone" type="tel" required>
                        </div>
                        <div class="ordering__form-info-field-wrapper">
                            <label class="ordering__form-info-label" for="letter">Примечание к заказу*:</label>
                            <textarea class="ordering__form-info-textarea" id="letter" required></textarea>
                        </div>
                        <p class="ordering__form-info-required">*Эти поля необходимо заполнить</p>
                    </div>
                    <div class="ordering__form-info-right">
                        <div class="ordering__form-info-delivery">
                            <h3 class="ordering__form-info-title">Доставка:</h3>
                            <div class="drop-down">
                                <button class="drop-down__button" type="button" title="Открыть список">Самовывоз</button>
                                <div class="drop-down__list-wrapper">
                                    <ul class="drop-down__list">
                                        <li class="drop-down__item">
                                            <a href="#" class="drop-down__link">Самовывоз (пр. Октябрьский, 19а)</a>
                                        </li>
                                        <li class="drop-down__item">
                                            <a href="#" class="drop-down__link">Самовывоз (пр. Октябрьский, 19а)</a>
                                        </li>
                                        <li class="drop-down__item">
                                            <a href="#" class="drop-down__link drop-down__link--search">Доставка (адрес клиента)</a>
                                        </li>
                                        <li class="drop-down__item">
                                            <a href="#" class="drop-down__link">test</a>
                                        </li>
                                    </ul>
                                    <label class="drop-down__label-search">
                                        <input class="drop-down__input-search" type="search" placeholder="Введите адрес">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="ordering__form-info-pay">
                            <h3 class="ordering__form-info-title">Оплата:</h3>
                            <div class="drop-down">
                                <button class="drop-down__button" type="button" title="Открыть список">Наличными</button>
                                <div class="drop-down__list-wrapper">
                                    <ul class="drop-down__list">
                                        <li class="drop-down__item">
                                            <a href="#" class="drop-down__link">Наличными</a>
                                        </li>
                                        <li class="drop-down__item">
                                            <a href="#" class="drop-down__link">Кредит</a>
                                        </li>
                                        <li class="drop-down__item">
                                            <a href="#" class="drop-down__link">Карткой</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ordering__form-submit-button-wrapper">
                    <div class="ordering__form-submit-button-text">
                        <span>Итого к оплате:</span>
                        <span class="goods-total-price-value">869</span>
                        <span class="ordering__form-submit-button-sign">руб.</span>
                    </div>
                    <button class="ordering__form-submit-button button" type="submit">Оформить заказ</button>
                </div>

            </form>
        </div>
    </div>
</main>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
