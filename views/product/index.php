<?php

use yii\helpers\Url;

$breadcrumbs = [
    'sushi' => 'Суши',
    'rolls' => 'Роллы',
    'baked_rolls' => 'Запеченные роллы',
    'set' => 'Наборы',
    'pizza' => 'Пицца',
    'soup' => 'Супы',
    'snacks' => 'САЛАТЫ И ЗАКУСКИ',
    'lunch' => 'Бизнес ланч',
    'dessert' => 'ДЕСЕРТЫ',
    'drinks' => 'НАПИТКИ',
    'wok' => 'Лапша wok',
];
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
            <!-- Карточки товаров -->
            <section class="cards">
                <h1 class="cards-title"><?php echo $breadcrumbs[$_GET['item']] ?></h1>
                <?php if(!empty($items)): ?>

                <ul class="cards-list">
                    <?php foreach($items as $item): ?>
                    <li class="cards-list__item">
                        <form id="form" method="post" >
                        <a href="/product/single?item=<?= $_GET['item'] ?>&id=<?= $item['id'] ?>" class="cards-list__link">
                            <header class="cards-list__item-header">
                                <img src="img/<?= $item['img'] ?>" class="cards-list__item-img" alt="card">
<!--                                <img src="img/rolls/los.png" class="cards-list__item-img" alt="card">-->
                            </header>
                            <div class="cards-list__item-body">
                                <h4 class="cards-list__item-title"><?= $item['title'] ?></h4>
                                <p class="cards-list__item-txt"><?= $item['description'] ?></p>
                            </div>
                        </a>
                            <footer class="cards-list__item-footer">
                                <p class="cards-list__item-price">
                                    <span><?= $item['price'] ?> ₽</span>
                                    <span class="cards-list__item-under"><?= $item['wt'] ?> гр.</span>
                                </p>
<!--                                <a href="--><?//=Url::to(['product/add', 'id' => $item['id']])?><!--">-->
                                <button id="but" type="button" onclick='$.ajax({
                url: "/product/add?item=<?= $_GET['item'] ?>&id=<?= $item['id'] ?>",
                data: $("#but").serialize(),
                                success:  function(response){
                                        console.log(response);
                                        // put on console what server sent back...
                                        },
                                error: function(response) {
                                //обработка ошибок при отправке
                                        console.log(response);
                                }
                                });'  class="cards-list__item-btn">В корзину</button>
<!--                                </a>-->
                            </footer>
                        </form>
                    </li>
                    <?php endforeach; ?>
                    <?php else:?>
                        <h3>Товар не найден!</h3>
                    <?php endif;?>
                </ul>

            </section>
        </div>
    </div>
</main>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js">
        // $('#button').submit(function(e){
        //     e.preventDefault();
        //
        // });

</script>

