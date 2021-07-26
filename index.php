<?php
    require 'header.php';
?>

    <section class="cakeUp">
        <div class="cakeUp-button-prev">
            <img src="./assets/img/catalog-slider/slider-arrow.png" alt="">
        </div>
        <div class="cakeUp-button-next">
            <img src="./assets/img/catalog-slider/slider-arrow.png" alt="">
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php for($i = 0; $i < 4; $i++) { ?>
                    <div class="swiper-slide cakeUp__main-slider">
                        <img src="./assets/img/slider1.png">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-lg-7 cakeUp__img">

                                </div>
                                <div class="col-md-6 col-lg-5 cakeUp__bg">
                                    <div class="cakeUp__all">
                                        <div class="cakeUp__all-title">
                                            Влюбляем в шоколад
                                        </div>
                                        <div class="cakeUp__all-main">
                                            Тортики
                                        </div>
                                        <div class="cakeUp__all-description">
                                            Тортики ручной работы от шеф-кондитера, которые сделают праздник самым незабываемым
                                        </div>
                                        <div class="cakeUp__all-buttons">
                                            <div class="cakeUp__all-buttons-need">
                                                <a href="" class="button-red">Хочу!</a>
                                            </div>
                                            <div class="cakeUp__all-buttons-all">
                                                <a href="">Все тортики</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-7"></div>
                    <div class="col-md-6 col-lg-5">
                        <div class="cakeUp__pagination">
                            <div class="cakeUp-pagination d-none d-md-block"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--SLIDER SECTION-->

    <section class="catalog__slider">
        <div class="container">
            <div class="catalog__slider-title">
                Заказать десерт Online
            </div>
            <div class="catalog__slider-tags">
                <ul class="tabs__caption">
                    <li class="active">Всё сразу</li>
                    <li>Ароматные эклеры</li>
                    <li>Свежая выпечка</li>
                    <li>Классические десерты</li>
                    <li>Свежемолотый кофе</li>
                    <li>Конфеты</li>
                    <li>Муссы</li>
                    <li>Авторские десерты</li>
                </ul>
            </div>
            <div class="for__buttons">
                <!-- If we need navigation buttons -->
                <div class="catalog__slider-prev d-none d-lg-flex">
                    <img src="./assets/img/catalog-slider/slider-arrow.png" alt="">
                </div>
                <div class="catalog__slider-next d-none d-lg-flex">
                    <img src="./assets/img/catalog-slider/slider-arrow.png" alt="">
                </div>
                <div class="catalog__slider-slider">
                    <div class="swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper tabs__content active">
                            <!-- Slides -->
                            <div class="swiper-slide catalog__slide" style="background-image: url('./assets/img/catalog-slider/product1.png');">
                                <div class="catalog__slide-bg"></div>
                                <div class="catalog__slide-body">
                                    <div class="catalog__slide-body-name">
                                        <a href="">Эклер</a>
                                    </div>
                                    <div class="catalog__slide-body-description">
                                        С мякотью банана и пюре маракуйя
                                    </div>
                                    <div class="catalog__slide-body-price">
                                        <div class="body__price-price">
                                            69 ₽
                                        </div>
                                        <div class="body__price-cart d-flex d-lg-none">
                                            <img src="./assets/img/catalog-slider/cart.png" alt="">
                                        </div>
                                    </div>
                                    <div class="catalog__slide-body-cart d-none d-lg-flex">
                                        Добавить
                                        <img src="./assets/img/catalog-slider/cart.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide catalog__slide" style="background-image: url('./assets/img/catalog-slider/product2.png');">
                                <div class="catalog__slide-bg"></div>
                                <div class="catalog__slide-body">
                                    <div class="catalog__slide-body-name">
                                        <a href="">Эклер в два ряда для проверки</a>
                                    </div>
                                    <div class="catalog__slide-body-description">
                                        С мякотью банана и пюре маракуйя
                                    </div>
                                    <div class="catalog__slide-body-price">
                                        <div class="body__price-price">
                                            69 ₽
                                        </div>
                                        <div class="body__price-cart d-flex d-lg-none">
                                            <img src="./assets/img/catalog-slider/cart.png" alt="">
                                        </div>
                                    </div>
                                    <div class="catalog__slide-body-cart d-none d-lg-flex">
                                        Добавить
                                        <img src="./assets/img/catalog-slider/cart.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide catalog__slide" style="background-image: url('./assets/img/catalog-slider/product3.png');">
                                <div class="catalog__slide-bg"></div>
                                <div class="catalog__slide-body">
                                    <div class="catalog__slide-body-name">
                                        <a href="">Эклер</a>
                                    </div>
                                    <div class="catalog__slide-body-description">
                                        С мякотью банана и пюре маракуйя
                                    </div>
                                    <div class="catalog__slide-body-price">
                                        <div class="body__price-price">
                                            69 ₽
                                        </div>
                                        <div class="body__price-cart d-flex d-lg-none">
                                            <img src="./assets/img/catalog-slider/cart.png" alt="">
                                        </div>
                                    </div>
                                    <div class="catalog__slide-body-cart d-none d-lg-flex">
                                        Добавить
                                        <img src="./assets/img/catalog-slider/cart.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide catalog__slide" style="background-image: url('./assets/img/catalog-slider/product4.png');">
                                <div class="catalog__slide-bg"></div>
                                <div class="catalog__slide-body">
                                    <div class="catalog__slide-body-name">
                                        <a href="">Эклер</a>
                                    </div>
                                    <div class="catalog__slide-body-description">
                                        С мякотью банана и пюре маракуйя
                                    </div>
                                    <div class="catalog__slide-body-price">
                                        <div class="body__price-price">
                                            69 ₽
                                        </div>
                                        <div class="body__price-cart d-flex d-lg-none">
                                            <img src="./assets/img/catalog-slider/cart.png" alt="">
                                        </div>
                                    </div>
                                    <div class="catalog__slide-body-cart d-none d-lg-flex">
                                        Добавить
                                        <img src="./assets/img/catalog-slider/cart.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide catalog__slide" style="background-image: url('./assets/img/catalog-slider/product5.png');">
                                <div class="catalog__slide-bg"></div>
                                <div class="catalog__slide-body">
                                    <div class="catalog__slide-body-name">
                                        <a href="">Эклер</a>
                                    </div>
                                    <div class="catalog__slide-body-description">
                                        С мякотью банана и пюре маракуйя
                                    </div>
                                    <div class="catalog__slide-body-price">
                                        <div class="body__price-price">
                                            69 ₽
                                        </div>
                                        <div class="body__price-cart d-flex d-lg-none">
                                            <img src="./assets/img/catalog-slider/cart.png" alt="">
                                        </div>
                                    </div>
                                    <div class="catalog__slide-body-cart d-none d-lg-flex">
                                        Добавить
                                        <img src="./assets/img/catalog-slider/cart.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide catalog__slide" style="background-image: url('./assets/img/catalog-slider/product1.png');">
                                <div class="catalog__slide-bg"></div>
                                <div class="catalog__slide-body">
                                    <div class="catalog__slide-body-name">
                                        <a href="">Эклер</a>
                                    </div>
                                    <div class="catalog__slide-body-description">
                                        С мякотью банана и пюре маракуйя
                                    </div>
                                    <div class="catalog__slide-body-price">
                                        <div class="body__price-price">
                                            69 ₽
                                        </div>
                                        <div class="body__price-cart d-flex d-lg-none">
                                            <img src="./assets/img/catalog-slider/cart.png" alt="">
                                        </div>
                                    </div>
                                    <div class="catalog__slide-body-cart d-none d-lg-flex">
                                        Добавить
                                        <img src="./assets/img/catalog-slider/cart.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide catalog__slide" style="background-image: url('./assets/img/catalog-slider/product2.png');">
                                <div class="catalog__slide-bg"></div>
                                <div class="catalog__slide-body">
                                    <div class="catalog__slide-body-name">
                                        <a href="">Эклер</a>
                                    </div>
                                    <div class="catalog__slide-body-description">
                                        С мякотью банана и пюре маракуйя
                                    </div>
                                    <div class="catalog__slide-body-price">
                                        <div class="body__price-price">
                                            69 ₽
                                        </div>
                                        <div class="body__price-cart d-flex d-lg-none">
                                            <img src="./assets/img/catalog-slider/cart.png" alt="">
                                        </div>
                                    </div>
                                    <div class="catalog__slide-body-cart d-none d-lg-flex">
                                        Добавить
                                        <img src="./assets/img/catalog-slider/cart.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide catalog__slide" style="background-image: url('./assets/img/catalog-slider/product3.png');">
                                <div class="catalog__slide-bg"></div>
                                <div class="catalog__slide-body">
                                    <div class="catalog__slide-body-name">
                                        <a href="">Эклер</a>
                                    </div>
                                    <div class="catalog__slide-body-description">
                                        С мякотью банана и пюре маракуйя
                                    </div>
                                    <div class="catalog__slide-body-price">
                                        <div class="body__price-price">
                                            69 ₽
                                        </div>
                                        <div class="body__price-cart d-flex d-lg-none">
                                            <img src="./assets/img/catalog-slider/cart.png" alt="">
                                        </div>
                                    </div>
                                    <div class="catalog__slide-body-cart d-none d-lg-flex">
                                        Добавить
                                        <img src="./assets/img/catalog-slider/cart.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-container">
                        <div class="swiper-wrapper tabs__content">
                            <!-- Slides -->
                            <div class="swiper-slide catalog__slide" style="background-image: url('./assets/img/catalog-slider/product1.png');">
                                <div class="catalog__slide-bg"></div>
                                <div class="catalog__slide-body">
                                    <div class="catalog__slide-body-name">
                                        <a href="">Эклер</a>
                                    </div>
                                    <div class="catalog__slide-body-description">
                                        С мякотью банана и пюре маракуйя
                                    </div>
                                    <div class="catalog__slide-body-price">
                                        <div class="body__price-price">
                                            69 ₽
                                        </div>
                                        <div class="body__price-cart d-flex d-lg-none">
                                            <img src="./assets/img/catalog-slider/cart.png" alt="">
                                        </div>
                                    </div>
                                    <div class="catalog__slide-body-cart d-none d-lg-flex">
                                        Добавить
                                        <img src="./assets/img/catalog-slider/cart.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide catalog__slide" style="background-image: url('./assets/img/catalog-slider/product2.png');">
                                <div class="catalog__slide-bg"></div>
                                <div class="catalog__slide-body">
                                    <div class="catalog__slide-body-name">
                                        <a href="">Эклер в два ряда для проверки</a>
                                    </div>
                                    <div class="catalog__slide-body-description">
                                        С мякотью банана и пюре маракуйя
                                    </div>
                                    <div class="catalog__slide-body-price">
                                        <div class="body__price-price">
                                            69 ₽
                                        </div>
                                        <div class="body__price-cart d-flex d-lg-none">
                                            <img src="./assets/img/catalog-slider/cart.png" alt="">
                                        </div>
                                    </div>
                                    <div class="catalog__slide-body-cart d-none d-lg-flex">
                                        Добавить
                                        <img src="./assets/img/catalog-slider/cart.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide catalog__slide" style="background-image: url('./assets/img/catalog-slider/product3.png');">
                                <div class="catalog__slide-bg"></div>
                                <div class="catalog__slide-body">
                                    <div class="catalog__slide-body-name">
                                        <a href="">Эклер</a>
                                    </div>
                                    <div class="catalog__slide-body-description">
                                        С мякотью банана и пюре маракуйя
                                    </div>
                                    <div class="catalog__slide-body-price">
                                        <div class="body__price-price">
                                            69 ₽
                                        </div>
                                        <div class="body__price-cart d-flex d-lg-none">
                                            <img src="./assets/img/catalog-slider/cart.png" alt="">
                                        </div>
                                    </div>
                                    <div class="catalog__slide-body-cart d-none d-lg-flex">
                                        Добавить
                                        <img src="./assets/img/catalog-slider/cart.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide catalog__slide" style="background-image: url('./assets/img/catalog-slider/product4.png');">
                                <div class="catalog__slide-bg"></div>
                                <div class="catalog__slide-body">
                                    <div class="catalog__slide-body-name">
                                        <a href="">Эклер</a>
                                    </div>
                                    <div class="catalog__slide-body-description">
                                        С мякотью банана и пюре маракуйя
                                    </div>
                                    <div class="catalog__slide-body-price">
                                        <div class="body__price-price">
                                            69 ₽
                                        </div>
                                        <div class="body__price-cart d-flex d-lg-none">
                                            <img src="./assets/img/catalog-slider/cart.png" alt="">
                                        </div>
                                    </div>
                                    <div class="catalog__slide-body-cart d-none d-lg-flex">
                                        Добавить
                                        <img src="./assets/img/catalog-slider/cart.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide catalog__slide" style="background-image: url('./assets/img/catalog-slider/product5.png');">
                                <div class="catalog__slide-bg"></div>
                                <div class="catalog__slide-body">
                                    <div class="catalog__slide-body-name">
                                        <a href="">Эклер</a>
                                    </div>
                                    <div class="catalog__slide-body-description">
                                        С мякотью банана и пюре маракуйя
                                    </div>
                                    <div class="catalog__slide-body-price">
                                        <div class="body__price-price">
                                            69 ₽
                                        </div>
                                        <div class="body__price-cart d-flex d-lg-none">
                                            <img src="./assets/img/catalog-slider/cart.png" alt="">
                                        </div>
                                    </div>
                                    <div class="catalog__slide-body-cart d-none d-lg-flex">
                                        Добавить
                                        <img src="./assets/img/catalog-slider/cart.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide catalog__slide" style="background-image: url('./assets/img/catalog-slider/product1.png');">
                                <div class="catalog__slide-bg"></div>
                                <div class="catalog__slide-body">
                                    <div class="catalog__slide-body-name">
                                        <a href="">Эклер</a>
                                    </div>
                                    <div class="catalog__slide-body-description">
                                        С мякотью банана и пюре маракуйя
                                    </div>
                                    <div class="catalog__slide-body-price">
                                        <div class="body__price-price">
                                            69 ₽
                                        </div>
                                        <div class="body__price-cart d-flex d-lg-none">
                                            <img src="./assets/img/catalog-slider/cart.png" alt="">
                                        </div>
                                    </div>
                                    <div class="catalog__slide-body-cart d-none d-lg-flex">
                                        Добавить
                                        <img src="./assets/img/catalog-slider/cart.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide catalog__slide" style="background-image: url('./assets/img/catalog-slider/product2.png');">
                                <div class="catalog__slide-bg"></div>
                                <div class="catalog__slide-body">
                                    <div class="catalog__slide-body-name">
                                        <a href="">Эклер</a>
                                    </div>
                                    <div class="catalog__slide-body-description">
                                        С мякотью банана и пюре маракуйя
                                    </div>
                                    <div class="catalog__slide-body-price">
                                        <div class="body__price-price">
                                            69 ₽
                                        </div>
                                        <div class="body__price-cart d-flex d-lg-none">
                                            <img src="./assets/img/catalog-slider/cart.png" alt="">
                                        </div>
                                    </div>
                                    <div class="catalog__slide-body-cart d-none d-lg-flex">
                                        Добавить
                                        <img src="./assets/img/catalog-slider/cart.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide catalog__slide" style="background-image: url('./assets/img/catalog-slider/product3.png');">
                                <div class="catalog__slide-bg"></div>
                                <div class="catalog__slide-body">
                                    <div class="catalog__slide-body-name">
                                        <a href="">Эклер</a>
                                    </div>
                                    <div class="catalog__slide-body-description">
                                        С мякотью банана и пюре маракуйя
                                    </div>
                                    <div class="catalog__slide-body-price">
                                        <div class="body__price-price">
                                            69 ₽
                                        </div>
                                        <div class="body__price-cart d-flex d-lg-none">
                                            <img src="./assets/img/catalog-slider/cart.png" alt="">
                                        </div>
                                    </div>
                                    <div class="catalog__slide-body-cart d-none d-lg-flex">
                                        Добавить
                                        <img src="./assets/img/catalog-slider/cart.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-container">
                        <div class="swiper-wrapper tabs__content">
                            <!-- Slides -->
                            <div class="swiper-slide catalog__slide" style="background-image: url('./assets/img/catalog-slider/product5.png');">
                                <div class="catalog__slide-bg"></div>
                                <div class="catalog__slide-body">
                                    <div class="catalog__slide-body-name">
                                        <a href="">Эклер</a>
                                    </div>
                                    <div class="catalog__slide-body-description">
                                        С мякотью банана и пюре маракуйя
                                    </div>
                                    <div class="catalog__slide-body-price">
                                        <div class="body__price-price">
                                            69 ₽
                                        </div>
                                        <div class="body__price-cart d-flex d-lg-none">
                                            <img src="./assets/img/catalog-slider/cart.png" alt="">
                                        </div>
                                    </div>
                                    <div class="catalog__slide-body-cart d-none d-lg-flex">
                                        Добавить
                                        <img src="./assets/img/catalog-slider/cart.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide catalog__slide" style="background-image: url('./assets/img/catalog-slider/product1.png');">
                                <div class="catalog__slide-bg"></div>
                                <div class="catalog__slide-body">
                                    <div class="catalog__slide-body-name">
                                        <a href="">Эклер</a>
                                    </div>
                                    <div class="catalog__slide-body-description">
                                        С мякотью банана и пюре маракуйя
                                    </div>
                                    <div class="catalog__slide-body-price">
                                        <div class="body__price-price">
                                            69 ₽
                                        </div>
                                        <div class="body__price-cart d-flex d-lg-none">
                                            <img src="./assets/img/catalog-slider/cart.png" alt="">
                                        </div>
                                    </div>
                                    <div class="catalog__slide-body-cart d-none d-lg-flex">
                                        Добавить
                                        <img src="./assets/img/catalog-slider/cart.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-container">
                        <div class="swiper-wrapper tabs__content">
                            <!-- Slides -->
                            <div class="swiper-slide catalog__slide" style="background-image: url('./assets/img/catalog-slider/product1.png');">
                                <div class="catalog__slide-bg"></div>
                                <div class="catalog__slide-body">
                                    <div class="catalog__slide-body-name">
                                        <a href="">Эклер</a>
                                    </div>
                                    <div class="catalog__slide-body-description">
                                        С мякотью банана и пюре маракуйя
                                    </div>
                                    <div class="catalog__slide-body-price">
                                        <div class="body__price-price">
                                            69 ₽
                                        </div>
                                        <div class="body__price-cart d-flex d-lg-none">
                                            <img src="./assets/img/catalog-slider/cart.png" alt="">
                                        </div>
                                    </div>
                                    <div class="catalog__slide-body-cart d-none d-lg-flex">
                                        Добавить
                                        <img src="./assets/img/catalog-slider/cart.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide catalog__slide" style="background-image: url('./assets/img/catalog-slider/product2.png');">
                                <div class="catalog__slide-bg"></div>
                                <div class="catalog__slide-body">
                                    <div class="catalog__slide-body-name">
                                        <a href="">Эклер в два ряда для проверки</a>
                                    </div>
                                    <div class="catalog__slide-body-description">
                                        С мякотью банана и пюре маракуйя
                                    </div>
                                    <div class="catalog__slide-body-price">
                                        <div class="body__price-price">
                                            69 ₽
                                        </div>
                                        <div class="body__price-cart d-flex d-lg-none">
                                            <img src="./assets/img/catalog-slider/cart.png" alt="">
                                        </div>
                                    </div>
                                    <div class="catalog__slide-body-cart d-none d-lg-flex">
                                        Добавить
                                        <img src="./assets/img/catalog-slider/cart.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide catalog__slide" style="background-image: url('./assets/img/catalog-slider/product3.png');">
                                <div class="catalog__slide-bg"></div>
                                <div class="catalog__slide-body">
                                    <div class="catalog__slide-body-name">
                                        <a href="">Эклер</a>
                                    </div>
                                    <div class="catalog__slide-body-description">
                                        С мякотью банана и пюре маракуйя
                                    </div>
                                    <div class="catalog__slide-body-price">
                                        <div class="body__price-price">
                                            69 ₽
                                        </div>
                                        <div class="body__price-cart d-flex d-lg-none">
                                            <img src="./assets/img/catalog-slider/cart.png" alt="">
                                        </div>
                                    </div>
                                    <div class="catalog__slide-body-cart d-none d-lg-flex">
                                        Добавить
                                        <img src="./assets/img/catalog-slider/cart.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide catalog__slide" style="background-image: url('./assets/img/catalog-slider/product4.png');">
                                <div class="catalog__slide-bg"></div>
                                <div class="catalog__slide-body">
                                    <div class="catalog__slide-body-name">
                                        <a href="">Эклер</a>
                                    </div>
                                    <div class="catalog__slide-body-description">
                                        С мякотью банана и пюре маракуйя
                                    </div>
                                    <div class="catalog__slide-body-price">
                                        <div class="body__price-price">
                                            69 ₽
                                        </div>
                                        <div class="body__price-cart d-flex d-lg-none">
                                            <img src="./assets/img/catalog-slider/cart.png" alt="">
                                        </div>
                                    </div>
                                    <div class="catalog__slide-body-cart d-none d-lg-flex">
                                        Добавить
                                        <img src="./assets/img/catalog-slider/cart.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="catalog__slider-button">
                <a href="" class="button-red">
                    Посмотреть Все меню
                </a>
            </div>
        </div>
    </section>
    

<!--ABOUT-->
    <section class="info">
        <div class="container">
            <div class="row">
                <div class="col-xl-1 d-none d-xl-block"></div>
                <div class="col-xl-5 col-md-6 info__text">
                    <div class="info__title">
                        Десерты от шефа
                    </div>
                    <div class="info__name">
                        Кирилл Родин
                    </div>
                    <div class="info__hr">
                        <img src="./assets/img/index-about/info-hr.png" alt="">
                    </div>
                    <div class="info__description">
                        Автор и создатель ваших любимых десертов и эксклюзивный шеф-кондитер
                    </div>
                    <div class="info__site">
                        <a href="">rodinkirill.com</a>
                    </div>
                    <div class="info__buttons">
                        <a href="">
                            <img src="./assets/img/index-about/info-arrow.png" alt="">
                            О Шефе-кондитере
                        </a>
                    </div>
                </div>
                <div class="col-xl-1 d-none d-xl-block"></div>
                <div class="col-xl-5 col-md-6 info__img">
                    <img class="d-none d-lg-block" src="./assets/img/index-about/autor.png" alt="">
                    <img class="d-none d-md-block d-lg-none" src="./assets/img/index-about/autor-tablet.png" alt="">
                    <img class="d-block d-md-none" src="./assets/img/index-about/autor-phone.png" alt="">
                </div>
            </div>
        </div>
    </section>

<!--NEW-->

    <section class="new">
        <div class="container">
            <div class="new__title">
                Новенькие <br class="d-block d-sm-none"> авторские десерты
                <img src="./assets/img/index-new/zapyataya.png" alt="">
            </div>
            <div class="new__subtitle">
                Пробуй, чувствуй, влюбляйся...
            </div>
            <div class="new__body">
                <div class="new__tabs">
                    <ul class="new__tabs-items">
                        <li class="active">Горгонзола</li>
                        <li>Дескерт «Палитта»</li>
                        <li>Мусс «Париж»</li>
                    </ul>
                </div>
                <div class="new__tabs-content active">
                    <div class="new__tabs-content-text">
                        <p>
                            Возможно вам, как и мне хочется вновь отправиться в путешествие, гулять по европейским
                            городам и зависать в маленьких кофейнях, наслаждаться напитками и  местной едой. Мне очень хочется!
                        </p>
                        <p>
                            Моя ностальния по поездкам привела меня к созданию нового десерта по
                            мотивам знаменитого итальянского сыра Горгонзола, именно так я его и назвал.
                        </p>
                        <p>
                            В этом десерте я впервык использовал новые для себя ингредиенты. Мусс из микса сырок
                            Горгонзола и Дорблю очень нежный, сливочный, и почти не сладкий, а вкус сыра звучит
                            очень тонко и приятно. Внутри мусса спрятана начинка из пбре спелого свежего фиолетового
                            инжира, такая нежная и сочная... Ммм...
                        </p>
                        <p>
                            Покрытие десерта приготовлено из микса пасты грецкого ореха,
                            пасты фундука и шоколада, в декоре использовано песочное печенье.
                        </p>
                        <p>
                            <b>
                                Один десерт — как целая сырная тарелка  на вашем столе. Не правда ли звучит прекрасно?
                            </b>
                        </p>
                        <a href="#" class="button-red">Купить онлайн</a>
                    </div>
                    <div class="new__tabs-content-slider">
                        <div class="new__tabs-content-slider-bg">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="./assets/img/index-new/new-image.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./assets/img/index-new/new-image.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./assets/img/index-new/new-image.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./assets/img/index-new/new-image.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./assets/img/index-new/new-image.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="new__slider-buttons">
                            <div class="new__slider-prev">
                                <img src="./assets/img/index-new/arrow-next.png" alt="">
                            </div>
                            <div class="new__slider-pagination"></div>
                            <div class="new__slider-next">
                                <img src="./assets/img/index-new/arrow-next.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="new__tabs-content">
                    <div class="new__tabs-content-text">
                        <p>
                            Возможно вам, как и мне хочется вновь отправиться в путешествие, гулять по европейским
                            городам и зависать в маленьких кофейнях, наслаждаться напитками и  местной едой. Мне очень хочется!
                        </p>
                        <p>
                            Моя ностальния по поездкам привела меня к созданию нового десерта по
                            мотивам знаменитого итальянского сыра Горгонзола, именно так я его и назвал.
                        </p>
                        <p>
                            В этом десерте я впервык использовал новые для себя ингредиенты. Мусс из микса сырок
                            Горгонзола и Дорблю очень нежный, сливочный, и почти не сладкий, а вкус сыра звучит
                            очень тонко и приятно. Внутри мусса спрятана начинка из пбре спелого свежего фиолетового
                            инжира, такая нежная и сочная... Ммм...
                        </p>
                        <p>
                            Покрытие десерта приготовлено из микса пасты грецкого ореха,
                            пасты фундука и шоколада, в декоре использовано песочное печенье.
                        </p>
                        <p>
                            <b>
                                Один десерт — как целая сырная тарелка  на вашем столе. Не правда ли звучит прекрасно?
                            </b>
                        </p>
                        <a href="#" class="button-red">Купить онлайн</a>
                    </div>
                    <div class="new__tabs-content-slider">
                        <div class="new__tabs-content-slider-bg">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="./assets/img/index-new/new-image.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./assets/img/index-new/new-image.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./assets/img/index-new/new-image.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./assets/img/index-new/new-image.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./assets/img/index-new/new-image.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="new__slider-buttons">
                            <div class="new__slider-prev">
                                <img src="./assets/img/index-new/arrow-next.png" alt="">
                            </div>
                            <div class="new__slider-pagination"></div>
                            <div class="new__slider-next">
                                <img src="./assets/img/index-new/arrow-next.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="new__tabs-content">
                    <div class="new__tabs-content-text">
                        <p>
                            Возможно вам, как и мне хочется вновь отправиться в путешествие, гулять по европейским
                            городам и зависать в маленьких кофейнях, наслаждаться напитками и  местной едой. Мне очень хочется!
                        </p>
                        <p>
                            Моя ностальния по поездкам привела меня к созданию нового десерта по
                            мотивам знаменитого итальянского сыра Горгонзола, именно так я его и назвал.
                        </p>
                        <p>
                            В этом десерте я впервык использовал новые для себя ингредиенты. Мусс из микса сырок
                            Горгонзола и Дорблю очень нежный, сливочный, и почти не сладкий, а вкус сыра звучит
                            очень тонко и приятно. Внутри мусса спрятана начинка из пбре спелого свежего фиолетового
                            инжира, такая нежная и сочная... Ммм...
                        </p>
                        <p>
                            Покрытие десерта приготовлено из микса пасты грецкого ореха,
                            пасты фундука и шоколада, в декоре использовано песочное печенье.
                        </p>
                        <p>
                            <b>
                                Один десерт — как целая сырная тарелка  на вашем столе. Не правда ли звучит прекрасно?
                            </b>
                        </p>
                        <a href="#" class="button-red">Купить онлайн</a>
                    </div>
                    <div class="new__tabs-content-slider">
                        <div class="new__tabs-content-slider-bg">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="./assets/img/index-new/new-image.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./assets/img/index-new/new-image.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./assets/img/index-new/new-image.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./assets/img/index-new/new-image.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./assets/img/index-new/new-image.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="new__slider-buttons">
                            <div class="new__slider-prev">
                                <img src="./assets/img/index-new/arrow-next.png" alt="">
                            </div>
                            <div class="new__slider-pagination"></div>
                            <div class="new__slider-next">
                                <img src="./assets/img/index-new/arrow-next.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="new__tabs-content">
                    <div class="new__tabs-content-text">
                        <p>
                            Возможно вам, как и мне хочется вновь отправиться в путешествие, гулять по европейским
                            городам и зависать в маленьких кофейнях, наслаждаться напитками и  местной едой. Мне очень хочется!
                        </p>
                        <p>
                            Моя ностальния по поездкам привела меня к созданию нового десерта по
                            мотивам знаменитого итальянского сыра Горгонзола, именно так я его и назвал.
                        </p>
                        <p>
                            В этом десерте я впервык использовал новые для себя ингредиенты. Мусс из микса сырок
                            Горгонзола и Дорблю очень нежный, сливочный, и почти не сладкий, а вкус сыра звучит
                            очень тонко и приятно. Внутри мусса спрятана начинка из пбре спелого свежего фиолетового
                            инжира, такая нежная и сочная... Ммм...
                        </p>
                        <p>
                            Покрытие десерта приготовлено из микса пасты грецкого ореха,
                            пасты фундука и шоколада, в декоре использовано песочное печенье.
                        </p>
                        <p>
                            <b>
                                Один десерт — как целая сырная тарелка  на вашем столе. Не правда ли звучит прекрасно?
                            </b>
                        </p>
                        <a href="#" class="button-red">Купить онлайн</a>
                    </div>
                    <div class="new__tabs-content-slider">
                        <div class="new__tabs-content-slider-bg">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="./assets/img/index-new/new-image.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./assets/img/index-new/new-image.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./assets/img/index-new/new-image.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./assets/img/index-new/new-image.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./assets/img/index-new/new-image.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="new__slider-buttons">
                            <div class="new__slider-prev">
                                <img src="./assets/img/index-new/arrow-next.png" alt="">
                            </div>
                            <div class="new__slider-pagination"></div>
                            <div class="new__slider-next">
                                <img src="./assets/img/index-new/arrow-next.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--CATERING-->

<section class="catering">
    <div class="container">
        <div class="catering__bg">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="catering__text">
                        Десерты на мероприятие
                    </div>
                    <div class="catering__title">
                        Сладкий контейнер
                    </div>
                    <div class="catering__hr">
                        <img src="./assets/img/catering-images/hr.png" alt="">
                    </div>
                    <div class="catering__description">
                        Организовать сладкий фуршет стало с Люклером очень просто. Ваши гости оценят глубину вкуса авторских десертов.
                    </div>
                    <div class="catering__link">
                        <a href="" class="button-red">
                            Кейтеринг меню
                        </a>
                    </div>
                </div>
            </div>
            <div class="catering__slider">
                <div class="catering__slider-title">
                    Уже оценили авторские десерты
                </div>
                <div class="catering__slider-slider">
                    <div class="catering-button-prev d-none d-lg-flex">
                        <img src="./assets/img/catalog-slider/slider-arrow.png" alt="">
                    </div>
                    <div class="catering-button-next d-none d-lg-flex">
                        <img src="./assets/img/catalog-slider/slider-arrow.png" alt="">
                    </div>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">Slide 1</div>
                            <div class="swiper-slide">Slide 2</div>
                            <div class="swiper-slide">Slide 3</div>
                            <div class="swiper-slide">Slide 4</div>
                            <div class="swiper-slide">Slide 5</div>
                            <div class="swiper-slide">Slide 6</div>
                            <div class="swiper-slide">Slide 7</div>
                            <div class="swiper-slide">Slide 8</div>
                            <div class="swiper-slide">Slide 9</div>
                            <div class="swiper-slide">Slide 10</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="catering__girl d-none d-md-block">
                <img src="./assets/img/catering-images/girl.png" alt="">
            </div>
        </div>
    </div>
</section>


<section class="contacts">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contacts__title">
                    Уютные кафе-кондитерские в г. Омске
                </div>
                <div class="contacts__description">
                    Встречайся, отдыхай, наслаждайся...
                </div>
                <div class="contacts__address d-none d-lg-block">
                    <div class="contacts__address-item">
                        <div class="contacts__address-item-icon">
                            <img src="./assets/img/contacts-index/icon.svg" alt="">
                        </div>
                        <div class="contacts__address-item-body">
                            <div class="contacts__address-item-body-title">
                                Ленина, 11
                            </div>
                            <div class="contacts__address-item-body-phone">
                                <a href="">+7 (950) 334 - 33 - 53</a>
                            </div>
                            <div class="contacts__address-item-body-time">
                                пн-вс 10:00 - 20:00
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contacts__address d-none d-lg-block">
                    <div class="contacts__address-item">
                        <div class="contacts__address-item-icon">
                            <img src="./assets/img/contacts-index/icon.svg" alt="">
                        </div>
                        <div class="contacts__address-item-body">
                            <div class="contacts__address-item-body-title">
                                Красный Путь, 101
                            </div>
                            <div class="contacts__address-item-body-phone">
                                <a href="">+7 (950) 334 - 33 - 53</a>
                            </div>
                            <div class="contacts__address-item-body-time">
                                пн-вс 09:00 - 19:00
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A9bb52edcff6800f3d7b14463ddce25634385e24e1e372511a9296485d3109172&amp;source=constructor" width="100%" height="557" frameborder="0"></iframe>
            </div>
            <div class="phone__address d-block d-lg-none">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contacts__address">
                            <div class="contacts__address-item">
                                <div class="contacts__address-item-icon">
                                    <img src="./assets/img/contacts-index/icon.svg" alt="">
                                </div>
                                <div class="contacts__address-item-body">
                                    <div class="contacts__address-item-body-title">
                                        Ленина, 11
                                    </div>
                                    <div class="contacts__address-item-body-phone">
                                        <a href="">+7 (950) 334 - 33 - 53</a>
                                    </div>
                                    <div class="contacts__address-item-body-time">
                                        пн-вс 10:00 - 20:00
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="contacts__address">
                            <div class="contacts__address-item">
                                <div class="contacts__address-item-icon">
                                    <img src="./assets/img/contacts-index/icon.svg" alt="">
                                </div>
                                <div class="contacts__address-item-body">
                                    <div class="contacts__address-item-body-title">
                                        Красный Путь, 101
                                    </div>
                                    <div class="contacts__address-item-body-phone">
                                        <a href="">+7 (950) 334 - 33 - 53</a>
                                    </div>
                                    <div class="contacts__address-item-body-time">
                                        пн-вс 09:00 - 19:00
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="organization">
    <div class="container">
        <div class="organization__slider">
            <div class="organization-button-prev d-none d-lg-flex">
                <img src="./assets/img/catalog-slider/slider-arrow.png" alt="">
            </div>
            <div class="organization-button-next d-none d-lg-flex">
                <img src="./assets/img/catalog-slider/slider-arrow.png" alt="">
            </div>
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <?php for($i = 0; $i < 20; $i++) { ?>
                        <div class="swiper-slide">
                            <img src="./assets/img/index-organization/image.png" alt="">
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="organization__body">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-6">
                    <div class="organization__body-text">
                        Сделай клиента лояльным
                    </div>
                    <div class="organization__body-title">
                        Десерты для организаций
                    </div>
                    <div class="organization__body-hr">
                        <img src="./assets/img/index-organization/hr.png" alt="">
                    </div>
                    <div class="organization__body-description">
                        Люклер представляет поставку сладкой группы под ключ. Что отлично подойдет театрам, кофейням, ресторанам и любым организациям.
                        Брендированные десерты - это то, чем вы можете удивить клиента, и быть уверенным в его лояльности.
                    </div>
                    <div class="organization__body-link">
                        <a href="" class="button-red">Подробнее</a>
                    </div>
                </div>
                <div class="col-md-5 col-lg-6 organization__right-flex">
                    <div class="organization__body-image">
                        <div class="organization__body-image-img">
                            <img src="./assets/img/index-organization/img.png" alt="">
                            <div class="organization__body-image-border"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="review">
    <div class="container">
        <div class="review__head">
            Отзывы о «Люклер»
        </div>
        <div class="review__thumb">
            <div thumbsSlider="" class="swiper-container">
                <div class="swiper-wrapper">
                    <?php for($i = 0; $i < 20; $i++) { ?>
                        <div class="swiper-slide">
                            <div class="review__thumb-image" style="background-image: url('./assets/img/index-review/people.png');">
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="review__relative">
            <div class="review__body">
                <div class="review__button-prev d-none d-md-flex">
                    <img src="./assets/img/catalog-slider/slider-arrow.png" alt="">
                </div>
                <div class="review__button-next d-none d-md-flex">
                    <img src="./assets/img/catalog-slider/slider-arrow.png" alt="">
                </div>
                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <?php for($i = 0; $i < 20; $i++) { ?>
                            <div class="swiper-slide">
                                <div class="review__slide-body">
                                    <div class="review__slide-body-name">
                                        Roma Sharafutdinov
                                    </div>
                                    <div class="review__slide-body-text">
                                        Вот и дошел до вас, а то парень вчера сбил меня (листовкой) со своей пиццей.
                                        Небольшое, но уютное место, девушка - добра и улыбчева, все бы так
                                        <a href="">подробнее...</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="review__body-button">
            <a href="javascript:" class="button-red">Оставить отзыв</a>
        </div>
    </div>
</section>

<?php
    require 'footer.php';
?>
