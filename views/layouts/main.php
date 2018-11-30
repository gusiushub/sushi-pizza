<?php

/* @var $this \yii\web\View */
/* @var $content string */


use yii\helpers\Html;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header class="page-header">
    <div class="page-header__wrapper wrapper">
        <div class="page-header__vertical-menu">
            <button class="page-header__vertical-button button" type="button" title="Открыть меню">
                <i class="fas fa-bars"></i>
                <i class="fas fa-times"></i>
            </button>
            <div class="page-header__vertical-menu-content">
                <h3 class="page-header__vertical-title">Меню</h3>
                <ul class="page-header__vertical-list">
                    <li class="page-header__vertical-item">
                        <a href="/product?item=sushi" class="page-header__vertical-link">Суши</a>
                    </li>
                    <li class="page-header__vertical-item">
                        <a href="/product?item=rolls" class="page-header__vertical-link">Роллы</a>
                    </li>
                    <li class="page-header__vertical-item">
                        <a href="/product?item=baked_rolls" class="page-header__vertical-link">Запечённые роллы</a>
                    </li>
                    <li class="page-header__vertical-item">
                        <a href="/product?item=set" class="page-header__vertical-link">Наборы</a>
                    </li>
                    <li class="page-header__vertical-item">
                        <a href="/product?item=pizza" class="page-header__vertical-link">Пицца</a>
                    </li>
                    <li class="page-header__vertical-item">
                        <a href="/product?item=wok" class="page-header__vertical-link">Лапша WOK</a>
                    </li>
                    <li class="page-header__vertical-item">
                        <a href="/product?item=soup" class="page-header__vertical-link">Супы</a>
                    </li>
                    <li class="page-header__vertical-item">
                        <a href="/product?item=lunch" class="page-header__vertical-link">Бизнес ланчи</a>
                    </li>
                    <li class="page-header__vertical-item">
                        <a href="/product?item=snacks" class="page-header__vertical-link">Салаты и закуски</a>
                    </li>
                    <li class="page-header__vertical-item">
                        <a href="/product?item=dessert" class="page-header__vertical-link">Десерты</a>
                    </li>
                    <li class="page-header__vertical-item">
                        <a href="/product?item=drinks" class="page-header__vertical-link">Напитки</a>
                    </li>
                </ul>
                <ul class="page-header__vertical-list">
                    <li class="page-header__vertical-item">
                        <a href="/site/stock" class="page-header__vertical-link">Акции</a>
                    </li>
                    <li class="page-header__vertical-item">
                        <a href="/site/stock" class="page-header__vertical-link">О нас</a>
                    </li>
                    <li class="page-header__vertical-item">
                        <a href="/site/delivery" class="page-header__vertical-link">Доставка</a>
                    </li>
                    <li class="page-header__vertical-item">
                        <a href="/site/contacts" class="page-header__vertical-link">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
        <a class="page-header__logo">
            <picture>
                <source media="(max-width: 767px)" srcset="../../web/img/logo-min.png">
                <img class="page-header__logo-image" src="../../web/img/logo.png" width="116" height="92" alt="Takara 'Готовим с душой соблюдаем традиции'">
            </picture>
        </a>
        <div class="page-header__center-container">
            <p class="page-header__cart-info">Прием заказов с 11:00 до 23:00</p>
            <div class="page-header__cart-wrapper">
                <div class="page-header__cart-top">
                    <a href="/product/pay" class="page-header__cart-link button">Корзина</a>
                    <div class="page-header__cart-top-button-wrapper">
                        <a href="/product/pay" class="page-header__cart-button" title="Открыть корзину">
                            <i class="fas fa-shopping-bag"></i>
                            <span class="goods-item">1</span>
                        </a>
                        <p class="page-header__cart-top-total-price">
                            <span class="goods-total-price-value">1</span>
                            <i class="fas fa-ruble-sign"></i>
                        </p>
                        <button class="page-header__cart-top-item button">
                            <span class="page-header__cart-top-item-goods goods-item">1</span>
                            <span> товар</span>
                            <i class="fas fa-angle-down"></i>
                        </button>
                    </div>
                </div>
                <form class="page-header__cart-form goods-form" action="/" method="post">
                    <h3 class="page-header__cart-form-title">Корзина</h3>
                    <ol class="page-header__cart-list">
                        <?php

//                        $cartItems = $_SESSION['cart'];

                        if(!empty($_SESSION['cart'])){ ?>
                            <?php foreach($_SESSION['cart'] as $item){?>
                        <li class="page-header__cart-item goods-container">
                            <div class="page-header__cart-title-wrapper">
                                <a href="<?=Url::to(['product', 'id' => $item->getId()])?>" class="page-header__cart-title"><?php echo $item->getProduct()->title ?></a>
                                <a href="<?=Url::to(['product', 'id' => $item->getId()])?>">
                                    <button class="button goods-delete" type="submit" title="Удалить">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </a>
                            </div>
                            <div class="page-header__cart-input-wrapper">
                                <form method="get" >
                                <div class="page-header__cart-input-inner">
                                    <button id="min" onclick='$.ajax({
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
                                            });' name="minus" class="page-header__cart-amount page-header__cart-amount--subtraction button goods-subtraction"
                                            type="button" title="Уменьшить количество">
                                        <span>-</span>
                                    </button>
                                    <label class="page-header__cart-label">
                                        <input class="page-header__cart-input goods-input" name="Калифорния креветка" type="number" value="<?= $item->getQuantity() ?>"
                                               min="0" max="100" title="Количество">
                                    </label>
                                    <button id="max" onclick='$.ajax({
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
                                            });' name="plus" class="page-header__cart-amount page-header__cart-amount--addition button goods-addition"
                                            type="button" title="Увеличить количество">
                                        <span>+</span>
                                    </button>
                                </div>
                                </form>
                                <div class="page-header__cart-item-price">
                                    <span class="goods-price-value" data-price="<?= $item->getCost()?>"><?= $item->getCost()?></span>
                                    <span class="page-header__cart-sign">руб.</span>
                                    <i class="fas fa-ruble-sign"></i>
                                </div>
                            </div>
                        </li>

                            <?php } ?>

                    </ol>
                    <div class="page-header__cart-total-price-wrapper">
                        <div class="page-header__cart-total-price-text">
                            <span>Сумма</span>
                            <span> заказа</span>:
                        </div>
                        <div class="page-header__cart-total-price goods-total-price">
                            <span class="goods-total-price-value"><?= Yii::$app->cart->getTotalCost()?></span>
                            <span class="page-header__cart-sign">руб.</span>
                            <i class="fas fa-ruble-sign"></i>
                        </div>
                    </div>
                    <button class="page-header__cart-submit-button button" type="submit">Оформить</button>
                    <?php } else{?>
                        <h3>Корзина пуста</h3>
                    <?php }?>
                </form>
            </div>
            <ul class="page-header__center-list">
                <li class="page-header__center-item">
                    <a href="/" class="page-header__center-link  <?php if(Yii::$app->controller->action->id=='index') echo 'page-header__center-link--active'?>">Главная</a>
                </li>
                <li class="page-header__center-item">
                    <a href="/site/stock" class="page-header__center-link <?php if(Yii::$app->controller->action->id=='stock') echo 'page-header__center-link--active'?>">Акции</a>
                </li>
                <li class="page-header__center-item">
                    <a href="/site/delivery" class="page-header__center-link <?php if(Yii::$app->controller->action->id=='delivery') echo 'page-header__center-link--active'?>">Доставка</a>
                </li>
                <li class="page-header__center-item">
                    <a href="/site/menu" class="page-header__center-link <?php if(Yii::$app->controller->action->id=='menu') echo 'page-header__center-link--active'?>">Меню</a>
                </li>
                <li class="page-header__center-item">
                    <a href="/site/contact" class="page-header__center-link <?php if(Yii::$app->controller->action->id=='contact') echo 'page-header__center-link--active'?>">Контакты</a>
                </li>
            </ul>
        </div>
        <div class="page-header__right-container">
            <button class="page-header__right-button button" type="button" title="Открыть контакты">
                <i class="fas fa-phone"></i>
                <i class="fas fa-angle-down"></i>
            </button>
            <ul class="page-header__right-list">
                <li class="page-header__right-item">
                    <p class="page-header__right-address">ул. Западная, 16 Б</p>
                    <p class="page-header__right-phone">
                        На вынос
                        <a href="tel:612-001">
                            <i class="fas fa-phone"></i>
                            <strong>612 - 001</strong>
                        </a>
                    </p>
                    <p class="page-header__right-phone">Приём заказов
                        <a href="tel:602-067">
                            <i class="fas fa-phone"></i>
                            <strong>602 - 067</strong>
                        </a>
                </li>
                <li class="page-header__right-item">
                    <p class="page-header__right-address">пр. Октябрьский, 19А</p>
                    <p class="page-header__right-phone">На вынос
                        <a href="tel:612-011">
                            <i class="fas fa-phone"></i>
                            <strong>612 - 011</strong>
                        </a>
                    <p class="page-header__right-phone">Приём заказов
                        <a href="tel:602-229">
                            <i class="fas fa-phone"></i>
                            <strong>602 - 229</strong>
                        </a>
                </li>
            </ul>
        </div>
    </div>
</header>
        <?= $content ?>

<footer class="page-footer">
    <div class="page-footer__wrapper wrapper">
        <div class="page-footer__left">
            <a href="/" class="page-footer__logo">
                <picture>
                    <source media="(max-width: 767px)" srcset="../../web/img/footer/logo-mobile.png">
                    <img class="page-footer__logo-img" src="../../web/img/footer/logo.png" alt="logo" width="116">
                </picture>
            </a>
            <p class="page-footer__left-copyright">
                © ТАКАРА - Суши-бары и служба доставки,
                <br> г. Псков, 2011 - 2018.
            </p>
            <div class="page-footer__left-social">
                <span class="page-footer__left-span">Мы есть в Вконтакте</span>
                <a href="https://vk.com/takara.pskov" class="page-footer__left-vk">
                    <img class="page-footer__left-vk-img" src="../../web/img/footer/vk.png" alt="vkontakte">
                </a>
            </div>
        </div>
        <nav class="page-footer__nav">
            <ul class="page-footer__nav-list">
                <li class="page-footer__nav-item">
                    <a class="page-footer__nav-link" href="/">Главная</a>
                </li>
                <li class="page-footer__nav-item">
                    <a class="page-footer__nav-link" href="/site/stock">Акции</a>
                </li>
                <li class="page-footer__nav-item">
                    <a class="page-footer__nav-link" href="/site/delivery">Доставка</a>
                </li>
                <li class="page-footer__nav-item">
                    <a class="page-footer__nav-link" href="/site/menu">Меню</a>
                </li>
                <li class="page-footer__nav-item hidden-item">
                    <a class="page-footer__nav-link" href="/site/about">О нас</a>
                </li>
                <li class="page-footer__nav-item">
                    <a class="page-footer__nav-link" href="/site/contact">Контакты</a>
                </li>
            </ul>
        </nav>
        <div class="page-footer__contacts footer-contacts">
            <ul class="footer-contacts__list">
                <li class="footer-contacts__item">
                    <p class="footer-contacts__item-title">ул. Западная, 16 Б</p>
                    <div class="footer-contacts__item-txt">
                        <p class="footer-contacts__item-delivery">На вынос
                            <a href="tel:612-001" class="footer-contacts__item-delivery-tel">
                                <i class="fas fa-phone"></i> 612 - 001
                            </a>
                        </p>
                        <p class="footer-contacts__item-orders">Приём заказов
                            <a href="tel:602-067" class="footer-contacts__item-orders-tel">
                                <i class="fas fa-phone"></i> 602 - 067
                            </a>
                        </p>
                    </div>
                </li>
                <li class="footer-contacts__item">
                    <p class="footer-contacts__item-title">пр. Октябрьский, 19А</p>
                    <div class="footer-contacts__item-txt">
                        <p class="footer-contacts__item-delivery">На вынос
                            <a href="tel:612-011" class="footer-contacts__item-delivery-tel">
                                <i class="fas fa-phone"></i> 612 - 011
                            </a>
                        </p>
                        <p class="footer-contacts__item-orders">Приём заказов
                            <a href="tel:602-229" class="footer-contacts__item-orders-tel">
                                <i class="fas fa-phone"></i> 602 - 229
                            </a>
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</footer>

<script src="../../web/js/polyfills.js"></script>
<script src="../../web/js/utils.js"></script>
<script src="../../web/js/header.js"></script>
<script src="../../web/js/swiper.min.js"></script>
<script src="../../web/js/swiper.js"></script>
<script src="../../web/js/vertical-menu.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
