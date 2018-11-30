<?php

?>
<ul class="vertical-menu__list">
    <li class="vertical-menu__item">
        <a href="/product?item=sushi" class="vertical-menu__link <?php if ($_GET['item']=='sushi') echo 'vertical-menu__link--active"' ?>">Суши</a>
    </li>
    <li class="vertical-menu__item">
        <a href="/product?item=rolls" class="vertical-menu__link <?php if ($_GET['item']=='rolls') echo 'vertical-menu__link--active"'?>">Роллы</a>
    </li>
    <li class="vertical-menu__item">
        <a href="/product?item=baked_rolls" class="vertical-menu__link <?php if ($_GET['item']=='baked_rolls') echo 'vertical-menu__link--active"' ?>">Запечённые роллы</a>
    </li>
    <li class="vertical-menu__item">
        <a href="/product?item=set" class="vertical-menu__link <?php if ($_GET['item']=='set') echo 'vertical-menu__link--active"' ?>">Наборы</a>
    </li>
    <li class="vertical-menu__item">
        <a href="/product?item=pizza" class="vertical-menu__link <?php if ($_GET['item']=='pizza') echo 'vertical-menu__link--active"' ?>">Пицца</a>
    </li>
    <li class="vertical-menu__item">
        <a href="/product?item=wok" class="vertical-menu__link <?php if ($_GET['item']=='wok') echo 'vertical-menu__link--active"' ?>">Лапша WOK</a>
    </li>
    <li class="vertical-menu__item">
        <a href="/product?item=soup" class="vertical-menu__link <?php if ($_GET['item']=='soup') echo 'vertical-menu__link--active"' ?>">Супы</a>
    </li>
    <li class="vertical-menu__item">
        <a href="/product?item=lunch" class="vertical-menu__link <?php if ($_GET['item']=='lunch') echo 'vertical-menu__link--active"' ?>">Бизнес ланчи</a>
    </li>
    <li class="vertical-menu__item">
        <a href="/product?item=snacks" class="vertical-menu__link <?php if ($_GET['item']=='snacks') echo 'vertical-menu__link--active"' ?>">Салаты и закуски</a>
    </li>
    <li class="vertical-menu__item">
        <a href="/product?item=dessert" class="vertical-menu__link <?php if ($_GET['item']=='dessert') echo 'vertical-menu__link--active"' ?>">Десерты</a>
    </li>
    <li class="vertical-menu__item">
        <a href="/product?item=drinks" class="vertical-menu__link <?php if ($_GET['item']=='drinks') echo 'vertical-menu__link--active"' ?>">Напитки</a>
    </li>
</ul>

