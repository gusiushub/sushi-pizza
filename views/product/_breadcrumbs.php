<?php
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

if (isset($_GET['id'])){
?>

    <ul class="breadcrumbs breadcrumbs-menu">
        <li class="breadcrumbs__item">
            <a href="/" class="breadcrumbs__link">Главная</a>
        </li>
        <li class="breadcrumbs__item">
            <a href="/menu" class="breadcrumbs__link">Меню</a>
        </li>
        <li class="breadcrumbs__item">
            <a href="/product?item=<?= $_GET['item'] ?>" class="breadcrumbs__link">Роллы</a>
        </li>
        <li class="breadcrumbs__item">
            <a class="breadcrumbs__link breadcrumbs__link--active"><?= $this->title ?></a>
        </li>
    </ul>
<?php }else{ ?>
<ul class="breadcrumbs breadcrumbs-menu">
    <li class="breadcrumbs__item">
        <a href="/" class="breadcrumbs__link">Главная</a>
    </li>
    <li class="breadcrumbs__item">
        <a href="/menu" class="breadcrumbs__link">Меню</a>
    </li>
    <li class="breadcrumbs__item">
        <a href="/product?item=<?php echo $_GET['item'] ?>" class="breadcrumbs__link breadcrumbs__link--active"><?php echo $breadcrumbs[$_GET['item']] ?></a>
<!--        --><?php //if ($_GET['item']=='rolls') ?><!-- <a href="/product?item=rolls" class="breadcrumbs__link breadcrumbs__link--active">Роллы</a>--><?php // ?>
    </li>
</ul>
<?php } ?>