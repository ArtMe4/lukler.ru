<?php
require 'header.php';
?>

    <div class="content">
        <div class="container">
            <div class="breadcrumbs">
                <div class="breadcrumbs__item">
                    <a href="">Главная</a>
                </div>
                <div class="breadcrumbs__item">
                    <span>Корзина</span>
                </div>
            </div>
        </div>
        <div class="container-md">
            <div class="cart">
                <div class="cart__title">
                    Корзина
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart__body">
                            <div class="cart__body-titles d-none d-md-block">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="cart__body-title">
                                            Название товара
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="cart__body-title">
                                            Количество
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="cart__body-title">
                                            Сумма
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php for($i = 0; $i < 4; $i++) { ?>
                                <div class="cart__body-item">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <div class="cart__body-left">
                                                <div class="cart__body-image" style="background-image: url('./assets/img/cart/product.png');">

                                                </div>
                                                <div class="cart__body-width">
                                                    <div class="cart__body-left-info">
                                                        <div class="cart__body-info">
                                                            <div class="info__name">
                                                                <a href="">
                                                                    Эклер
                                                                </a>
                                                            </div>
                                                            <div class="info__description">
                                                                С мякотью банана и пюре маракуйи
                                                            </div>
                                                        </div>
                                                        <div class="cart__body-delete d-block d-md-none">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                <path d="M13.8112 6.89556L12.2457 6.83813L11.9062 16.107L13.4718 16.1642L13.8112 6.89556Z" fill="#A3A3AC"/>
                                                                <path d="M10.7824 6.86682H9.21582V16.1358H10.7824V6.86682Z" fill="#A3A3AC"/>
                                                                <path d="M8.09344 16.1068L7.75402 6.83786L6.18848 6.89532L6.52793 16.1642L8.09344 16.1068Z" fill="#A3A3AC"/>
                                                                <path d="M0.678711 3.00262V4.56919H2.31109L3.60609 19.2854C3.6416 19.6898 3.98027 20 4.38625 20H15.587C15.993 20 16.332 19.6896 16.3672 19.2851L17.6622 4.56919H19.321V3.00262H0.678711ZM14.8696 18.4334H5.10352L3.88367 4.56919H16.0897L14.8696 18.4334Z" fill="#A3A3AC"/>
                                                                <path d="M12.5587 0H7.44121C6.72137 0 6.13574 0.585625 6.13574 1.30547V3.7859H7.7023V1.56656H12.2976V3.7859H13.8642V1.30547C13.8642 0.585625 13.2785 0 12.5587 0Z" fill="#A3A3AC"/>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="cart__body-left-info d-flex d-md-none align-items-center">
                                                        <div class="buttons__count">
                                                            <div class="buttons__count-number">
                                                        <span class="buttons__count-minus">
                                                            <img src="./assets/img/product/minus.png" alt="">
                                                        </span>
                                                                <input class="buttons__count-quantity phone" type="text" value="1">
                                                                <span class="buttons__count-plus">
                                                            <img src="./assets/img/product/plus.png" alt="">
                                                        </span>
                                                            </div>
                                                        </div>
                                                        <div class="product__info-price">
                                                            <div class="price__new phone" data-price="69">
                                                                69 ₽
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 d-none d-md-block">
                                            <div class="buttons__count">
                                                <div class="buttons__count-number">
                                        <span class="buttons__count-minus">
                                            <img src="./assets/img/product/minus.png" alt="">
                                        </span>
                                                    <input class="buttons__count-quantity desktop" type="text" value="1">
                                                    <span class="buttons__count-plus">
                                            <img src="./assets/img/product/plus.png" alt="">
                                        </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 d-none d-md-block">
                                            <div class="cart__body-right">
                                                <div class="product__info-price">
                                                    <div class="price__new desktop" data-price="69">
                                                        69 <span>₽</span>
                                                    </div>
                                                    <div class="price__count">
                                                        69 ₽ x <span class="price__count-count desktop">1</span>
                                                    </div>
                                                </div>
                                                <div class="cart__body-delete d-none d-md-block">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                        <path d="M13.8112 6.89556L12.2457 6.83813L11.9062 16.107L13.4718 16.1642L13.8112 6.89556Z" fill="#A3A3AC"/>
                                                        <path d="M10.7824 6.86682H9.21582V16.1358H10.7824V6.86682Z" fill="#A3A3AC"/>
                                                        <path d="M8.09344 16.1068L7.75402 6.83786L6.18848 6.89532L6.52793 16.1642L8.09344 16.1068Z" fill="#A3A3AC"/>
                                                        <path d="M0.678711 3.00262V4.56919H2.31109L3.60609 19.2854C3.6416 19.6898 3.98027 20 4.38625 20H15.587C15.993 20 16.332 19.6896 16.3672 19.2851L17.6622 4.56919H19.321V3.00262H0.678711ZM14.8696 18.4334H5.10352L3.88367 4.56919H16.0897L14.8696 18.4334Z" fill="#A3A3AC"/>
                                                        <path d="M12.5587 0H7.44121C6.72137 0 6.13574 0.585625 6.13574 1.30547V3.7859H7.7023V1.56656H12.2976V3.7859H13.8642V1.30547C13.8642 0.585625 13.2785 0 12.5587 0Z" fill="#A3A3AC"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-4 cart__count-padding">
                        <div class="cart__count">
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <div class="cart__count-title">
                                        Общая стоимость
                                    </div>
                                    <div class="cart__count-count">
                                        <div class="count__title">
                                            Товаров
                                        </div>
                                        <div class="count__total desktop d-none d-md-block">

                                        </div>
                                        <div class="count__total phone d-block d-md-none">

                                        </div>
                                    </div>
                                    <div class="cart__count-price">
                                        <div class="price__title">
                                            Всего товаров на сумму
                                        </div>
                                        <div class="price__total desktop d-none d-md-block">

                                        </div>
                                        <div class="price__total phone d-block d-md-none">

                                        </div>
                                    </div>
                                    <div class="cart__count-radio">
                                        <div class="radio__item">
                                            <input type="radio" name="delivery" id="delivery" hidden checked>
                                            <label for="delivery">Доставка</label>
                                        </div>
                                        <div class="radio__item">
                                            <input type="radio" name="delivery" id="self-delivery" hidden>
                                            <label for="self-delivery">Самовывоз</label>
                                        </div>
                                    </div>
                                    <div class="cart__count-text">
                                        Бесплатная доставка при заказе на сумму от 2000 руб.
                                    </div>
                                    <div class="cart__count-btn">
                                        <button>
                                            Оформить заказ
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-6 d-none d-md-block d-lg-none">
                                    <div class="cart__count-img">
                                        <img src="./assets/img/cart/form-bg.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart__order">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="order__form">
                            <div class="order__form-title">
                                Оформление заказа
                            </div>
                            <div class="order__form-subtitle">
                                Контактная информация
                            </div>
                            <form action="">
                                <div class="form__name">
                                    Имя
                                    <input type="text" name="name" placeholder="Ваше имя">
                                </div>
                                <div class="form__phone">
                                    Номер телефона *
                                    <input type="tel" name="phone" placeholder="Ваш телефон">
                                </div>
                                <div class="form__address">
                                    Адрес доставки *
                                    <input type="text" name="address" placeholder="Улица, дом, квартира">
                                </div>
                                <div class="form__comment">
                                    Комментарий к заказу
                                    <textarea name="comment" cols="30" rows="10" placeholder="Ваш комментарий"></textarea>
                                </div>
                                <div class="form__radio">
                                    <div class="form__radio-title">
                                        Способ оплаты
                                    </div>
                                    <div class="cart__count-radio">
                                        <div class="radio__item">
                                            <input type="radio" name="pay" id="online" hidden checked>
                                            <label for="online">Online оплата</label>
                                        </div>
                                        <div class="radio__item">
                                            <input type="radio" name="pay" id="cash" hidden>
                                            <label for="cash">Наличными курьеру</label>
                                        </div>
                                        <div class="radio__item">
                                            <input type="radio" name="pay" id="card" hidden>
                                            <label for="card">Курьеру по карте</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form__button">
                                    <button>
                                        Оформить заказ
                                    </button>
                                    <div class="form__policy">
                                        Отправляя форму, вы принимаете <a href="">Условия
                                        Пользовательского соглашения</a> «Люклер».
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="cart__order-img-rel">
                            <div class="cart__order-img">
                                <img src="./assets/img/cart/form-bg.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
require 'footer.php';
?>
