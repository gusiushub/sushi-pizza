<?php

use yii\helpers\Url;

$this->title = $item['title'];
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
            <?php  echo $this->render('_breadcrumbs'); ?>
            <section class="card">
<!--                <form action="/product/add?id=--><?php //echo (int)$_GET['id']?><!--$item=--><?php //echo $_GET['item']?><!--" method="get">-->
                <h1 class="card-title"><?= $item['title'] ?></h1>
                 <?php  if ($item['wt']!=0){ ?>
                <p class="card-info"><?= $item['description'] ?><br> / <?= $item['wt'] ?>гр.</p>
                 <?php } ?>	
                <div class="card-main">
                    <div class="card-image__block">
                        <img class="card-image__img" src="../../web/img/<?= $item['img'] ?>">
                        <h4 class="card-image__title"><?= $item['title'] ?></h4>
                        <?php  if ($item['wt']!=0){ ?>
                        <p class="card-image__txt"><?= $item['description'] ?> / <?= $item['wt'] ?>гр.</p>
                        <?php } ?>	
                    </div>
                    <div class="card-main__right">
                        <span class="card-price"><?= $item['price'] ?> ₽</span>
                        <a href="<?=Url::to(['/product/add', 'id' => $_GET['id']])?>"><button class="card-btn">В корзину</button></a>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
