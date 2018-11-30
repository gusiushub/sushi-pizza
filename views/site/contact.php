<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="footer-bottom__wrapper">

    <main class="page-main footer-bottom__content">
        <div class="page-main__wrapper wrapper">

            <!-- Ветикальное меню -->
            <aside class="page-main__left vertical-menu">
                <span class="visually-hidden">Список блюд</span>
                <button class="vertical-menu__button-menu button" type="button" title="Открыть меню">
                    <i class="fas fa-arrow-right"></i>
                </button>



                <?php  echo $this->render('_menu'); ?>




            </aside>

            <!--  Содержимое которое должно быть в main, вставлять в page-main__right -->
            <div class="page-main__right contacts">
                <ul class="breadcrumbs breadcrumbs--ordering">
                    <li class="breadcrumbs__item">
                        <a href="index.html" class="breadcrumbs__link">Главная</a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a class="breadcrumbs__link breadcrumbs__link--active">Контакты</a>
                    </li>
                </ul>
                <h1 class="contacts__h1">Контакты</h1>
                <ul class="contacts__list">
                    <li class="contacts__item">
                        <i class="fab fa-instagram"></i>
                        <a href="#">takara.pskov</a>
                        <span> - наш Instagram.</span>
                    </li>
                    <li class="contacts__item">
                        <i class="fab fa-vk"></i>
                        <a href="https://vk.com/club47933889">https://vk.com/club47933889</a>
                        <span> - наша группа в Вконтакте.</span>
                    </li>
                </ul>
                <h2 class="contacts__h2">Адреса наших суши-баров:</h2>
                <ul class="contacts__address-list">
                    <li class="contacts__address-item">
                        <h3 class="contacts__address-title">Западная ул., дом 16Б, ТД Гулливер</h3>
                        <p class="contacts__address-text">Заказ на вынос: <a href="tel:612-001">612-001</a></p>
                        <p class="contacts__address-text">На доставку: <a href="tel:602-067">602-067</a></p>
                    </li>
                    <li class="contacts__address-item">
                        <h3 class="contacts__address-title">Октябрьский пр. 19А</h3>
                        <p class="contacts__address-text">Заказ на вынос: <a href="tel:612-011">612-011</a></p>
                        <p class="contacts__address-text">На доставку: <a href="tel:602-229">602-229</a></p>
                    </li>
                </ul>
                <div class="contacts__map"></div>
            </div>
        </div>
    </main>
</div>
<script src="../../web/js/vertical-menu.js"></script>
<script src="../../web/js/drop-down.js"></script>
<script
        src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDluwBfvy_M346vmyhvVLD62kK76nnVtss"></script>
<script src="../../web/js/map.js"></script>