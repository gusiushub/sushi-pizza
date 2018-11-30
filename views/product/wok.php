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
            <?php  echo $this->render('_menu'); ?>
        </aside>

        <!--  Содержимое которое должно быть в main, вставлять в page-main__right -->
        <div class="page-main__right">
            <ul class="breadcrumbs">
                <li class="breadcrumbs__item">
                    <a href="/" class="breadcrumbs__link">Главная</a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="/site/menu" class="breadcrumbs__link">Меню</a>
                </li>
                <li class="breadcrumbs__item">
                    <a class="breadcrumbs__link breadcrumbs__link--active">Лапша Wok</a>
                </li>
            </ul>
            <h1 class="noodles__h1">Лапша WOK</h1>
            <form class="noodles__form" action="/product?item=wok" method="post">
                <p class="noodles__desc">СОБЕРИ СВОЙ WOK</p>
                <div class="noodles__form-fieldset-wrapper noodles__form-fieldset-wrapper--main">
                    <fieldset class="noodles__form-fieldset">
                        <legend class="noodles__form-legend">
                            <span class="noodles__form-legend-title">Начинка</span>
                            <span class="noodles__form-legend-img-container">
                <img class="noodles__form-legend-img" src="../../web/img/content/noodles/lapshp_pshenichnaya.jpg" width="1920"
                     height="1380"
                     alt="Блюдо">
              </span>
                            <span class="noodles__form-legend-text noodles__form-legend-text--bold">или</span>
                        </legend>
                        <ul class="noodles__form-list">
                            <li class="noodles__form-item">
                                <label class="noodles__form-label label-radio">
                                    <span class="label-radio__text">Харусаме<br> (рисовая)</span>
                                    <input class="noodles__form-input visually-hidden" type="radio" name="filling" value="Харусаме" checked>
                                    <span class="label-radio__icon"></span>
                                </label>
                            </li>
                            <li class="noodles__form-item">
                                <label class="noodles__form-label label-radio">
                                    <span class="label-radio__text">Удон<br> (пшеничная)</span>
                                    <input class="noodles__form-input visually-hidden" type="radio" name="filling" value="Удон(пшеничная)">
                                    <span class="label-radio__icon"></span>
                                </label>
                            </li>
                            <li class="noodles__form-item">
                                <label class="noodles__form-label label-radio">
                                    <span class="label-radio__text">Харусаме<br> (рисовая)</span>
                                    <input class="noodles__form-input visually-hidden" type="radio" name="filling" value="Харусаме(рисовая)">
                                    <span class="label-radio__icon"></span>
                                </label>
                            </li>
                        </ul>
                    </fieldset>
                    <fieldset class="noodles__form-fieldset">
                        <legend class="noodles__form-legend">
                            <span class="noodles__form-legend-title">Гарнир</span>
                            <span class="noodles__form-legend-img-container">
                <img class="noodles__form-legend-img" src="../../web/img/content/noodles/garnish.png" width="260"
                     height="320" alt="Гарнир">
              </span>
                            <span class="noodles__form-legend-text">+</span>
                        </legend>
                        <ul class="noodles__form-list">
                            <li class="noodles__form-item">
                                <label class="noodles__form-label label-radio">
                                    <span class="label-radio__text">Рис<br> (белый)</span>
                                    <input class="noodles__form-input visually-hidden" type="radio" name="filling" value="Рис(белый)">
                                    <span class="label-radio__icon"></span>
                                </label>
                            </li>
                        </ul>
                    </fieldset>
                    <fieldset class="noodles__form-fieldset">
                        <legend class="noodles__form-legend">
                            <span class="noodles__form-legend-title">Овощи</span>
                            <span class="noodles__form-legend-img-container">
                <img class="noodles__form-legend-img" src="../../web/img/content/noodles/ovishi.png" width="400"
                     height="345" alt="Овощи">
              </span>
                            <span class="noodles__form-legend-text">+</span>
                        </legend>
                        <ul class="noodles__form-list">
                            <li class="noodles__form-item">
                                <label class="noodles__form-label label-radio label-radio--not-pick">
                                    <span class="label-radio__text label-radio__text--width-auto">Овощной микс</span>
                                    <input class="noodles__form-input visually-hidden" type="radio" name="vegetables" value="1" checked>
                                    <span class="label-radio__icon visually-hidden"></span>
                                </label>
                            </li>
                        </ul>
                    </fieldset>
                    <fieldset class="noodles__form-fieldset">
                        <legend class="noodles__form-legend">
                            <span class="noodles__form-legend-title">Соус</span>
                            <span class="noodles__form-legend-img-container">
                <img class="noodles__form-legend-img" src="../../web/img/content/noodles/soeviy-sous.jpg" width="414"
                     height="290" alt="Соус">
              </span>
                            <span class="noodles__form-legend-text">=</span>
                        </legend>
                        <ul class="noodles__form-list">
                            <li class="noodles__form-item">
                                <label class="noodles__form-label label-radio">
                                    <span class="label-radio__text">Фирменный</span>
                                    <input class="noodles__form-input visually-hidden" type="radio" name="sauce" value="Фирменный" checked>
                                    <span class="label-radio__icon"></span>
                                </label>
                            </li>
                            <li class="noodles__form-item">
                                <label class="noodles__form-label label-radio">
                                    <span class="label-radio__text">Сливочный</span>
                                    <input class="noodles__form-input visually-hidden" type="radio" name="sauce" value="Сливочный">
                                    <span class="label-radio__icon"></span>
                                </label>
                            </li>
                            <li class="noodles__form-item">
                                <label class="noodles__form-label label-radio">
                                    <span class="label-radio__text">Терияки</span>
                                    <input class="noodles__form-input visually-hidden" type="radio" name="sauce" value="Терияки">
                                    <span class="label-radio__icon"></span>
                                </label>
                            </li>
                            <li class="noodles__form-item">
                                <label class="noodles__form-label label-radio">
                                    <span class="label-radio__text">Острый</span>
                                    <input class="noodles__form-input visually-hidden" type="radio" name="sauce" value="Острый">
                                    <span class="label-radio__icon"></span>
                                </label>
                            </li>
                        </ul>
                    </fieldset>
                    <div class="noodles__form-fieldset-price">
                        <span class="noodles__form-fieldset-price-sale"></span>
                        <span class="noodles__form-fieldset-price-value">169</span>
                        <span class="noodles__form-fieldset-price-sign">руб.</span>
                    </div>
                </div>
                <!--<p class="noodles__desc">Сделай её ещё вкуснее и сочнее (дополнительная стоимость)</p>-->
                <div class="noodles__form-fieldset-wrapper noodles__form-fieldset-wrapper--more">
                    <fieldset class="noodles__form-fieldset">
                        <legend class="noodles__form-legend">
                            <span class="noodles__form-legend-title">Начинка</span>
                            <span class="noodles__form-legend-img-container">
                <img class="noodles__form-legend-img" src="../../web/img/content/noodles/big__nazvaniia.png" width="256"
                     height="194" alt="Дополнительная начинка">
              </span>
                        </legend>
                        <ul class="noodles__form-list">
                            <li class="noodles__form-item">
                                <label class="noodles__form-label label-radio">
                                    <span class="label-radio__text">Морепродукты</span>
                                    <span class="label-radio__price">
                    <span class="label-radio__price-value" data-price="100">100</span>
                    <i class="fas fa-ruble-sign"></i>
                  </span>
                                    <input class="noodles__form-input visually-hidden" type="radio" name="add-filling" value="Морепродукты" checked>
                                    <span class="label-radio__icon"></span>
                                </label>
                            </li>
                            <li class="noodles__form-item">
                                <label class="noodles__form-label label-radio">
                                    <span class="label-radio__text">Говядина</span>
                                    <span class="label-radio__price">
                    <span class="label-radio__price-value" data-price="90">90</span>
                    <i class="fas fa-ruble-sign"></i>
                  </span>
                                    <input class="noodles__form-input visually-hidden" type="radio" name="add-filling" value="Говядина">
                                    <span class="label-radio__icon"></span>
                                </label>
                            </li>
                            <li class="noodles__form-item">
                                <label class="noodles__form-label label-radio">
                                    <span class="label-radio__text">Свинина</span>
                                    <span class="label-radio__price">
                    <span class="label-radio__price-value" data-price="70">70</span>
                    <i class="fas fa-ruble-sign"></i>
                  </span>
                                    <input class="noodles__form-input visually-hidden" type="radio" name="add-filling" value="Свинина">
                                    <span class="label-radio__icon"></span>
                                </label>
                            </li>
                            <li class="noodles__form-item">
                                <label class="noodles__form-label label-radio">
                                    <span class="label-radio__text">Курица</span>
                                    <span class="label-radio__price">
                    <span class="label-radio__price-value" data-price="60">60</span>
                    <i class="fas fa-ruble-sign"></i>
                  </span>
                                    <input class="noodles__form-input visually-hidden" type="radio" name="add-filling" value="Курица">
                                    <span class="label-radio__icon"></span>
                                </label>
                            </li>
                            <li class="noodles__form-item">
                                <label class="noodles__form-label label-radio">
                                    <span class="label-radio__text">Лосось</span>
                                    <span class="label-radio__price">
                    <span class="label-radio__price-value" data-price="110">110</span>
                    <i class="fas fa-ruble-sign"></i>
                  </span>
                                    <input class="noodles__form-input visually-hidden" type="radio" name="add-filling" value="Лосось">
                                    <span class="label-radio__icon"></span>
                                </label>
                            </li>
                        </ul>
                    </fieldset>
                    <fieldset class="noodles__form-fieldset">
                        <legend class="noodles__form-legend">
                            <span class="noodles__form-legend-title">Топинги</span>
                            <span class="noodles__form-legend-img-container">
                <img class="noodles__form-legend-img" src="../../web/img/content/noodles/580b57fbd9996e24bc43c08d-min.png"
                     width="370" height="370" alt="Топинги">
              </span>
                        </legend>
                        <ul class="noodles__form-list">
                            <li class="noodles__form-item">
                                <label class="noodles__form-label label-radio">
                                    <span class="label-radio__text">Яйцо жаренное</span>
                                    <span class="label-radio__price">
                    <span class="label-radio__price-value" data-price="20">20</span>
                    <i class="fas fa-ruble-sign"></i>
                  </span>
                                    <input class="noodles__form-input visually-hidden" type="radio" name="topping" value="Яйцо" checked>
                                    <span class="label-radio__icon"></span>
                                </label>
                            </li>
                            <li class="noodles__form-item">
                                <label class="noodles__form-label label-radio">
                                    <span class="label-radio__text">Шампиньоны</span>
                                    <span class="label-radio__price">
                    <span class="label-radio__price-value" data-price="40">40</span>
                    <i class="fas fa-ruble-sign"></i>
                  </span>
                                    <input class="noodles__form-input visually-hidden" type="radio" name="topping" value="Шампиньоны">
                                    <span class="label-radio__icon"></span>
                                </label>
                            </li>
                            <li class="noodles__form-item">
                                <label class="noodles__form-label label-radio">
                                    <span class="label-radio__text">Бекон</span>
                                    <span class="label-radio__price">
                    <span class="label-radio__price-value" data-price="60">60</span>
                    <i class="fas fa-ruble-sign"></i>
                  </span>
                                    <input class="noodles__form-input visually-hidden" type="radio" name="topping" value="Бекон">
                                    <span class="label-radio__icon"></span>
                                </label>
                            </li>
                            <li class="noodles__form-item">
                                <label class="noodles__form-label label-radio">
                                    <span class="label-radio__text">Сыр</span>
                                    <span class="label-radio__price">
                    <span class="label-radio__price-value" data-price="40">40</span>
                    <i class="fas fa-ruble-sign"></i>
                  </span>
                                    <input class="noodles__form-input visually-hidden" type="radio" name="topping" value="Сыр">
                                    <span class="label-radio__icon"></span>
                                </label>
                            </li>
                        </ul>
                    </fieldset>
                </div>
                <div class="noodles__cart-total-wrapper">
                    <div class="noodles__cart-total-text">
                        <span>Итого к оплате:</span>
                        <strong class="noodles__cart-total-value">289</strong>
                        <strong class="noodles__cart-total-sign"> руб.</strong>
                    </div>
                    <button class="noodles__cart-total-button button" name="wok" type="submit">В корзину</button>
                </div>
            </form>
        </div>
    </div>
</main>
