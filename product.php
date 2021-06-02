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
                <a href="">Меню</a>
            </div>
            <div class="breadcrumbs__item">
                <span>Ароматные эклеры</span>
            </div>
        </div>
        <div class="product">
            <div class="product__info-name d-block d-lg-none">
                Эклеры
            </div>
            <div class="product__info-hr d-block d-lg-none">
                <img src="./assets/img/index-organization/hr.png" alt="">
            </div>
            <div class="product__info-description d-none d-md-block d-lg-none">
                Тонкое, но очень вкусное тесто, хрустящая песочная корочка. Нежнейший твороженный крем с бананом и маракуйея.
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-lg-12 col-md-9 padding__right-0">
                            <div class="product__image">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <?php for($i = 0; $i < 5; $i++) { ?>
                                            <div class="swiper-slide">
                                                <div class="product__image-slide" style="background-image: url('./assets/img/product/product-img.png');">
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-3 padding__left-0">
                            <div class="product__thumb">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <?php for($i = 0; $i < 5; $i++) { ?>
                                            <div class="swiper-slide">
                                                <div class="product__thumb-slide" style="background-image: url('./assets/img/product/product-img.png');">
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="product__info">
                        <form action="">
                            <div class="product__info-name d-none d-lg-block">
                                Эклеры
                            </div>
                            <div class="product__info-hr d-none d-lg-block">
                                <img src="./assets/img/index-organization/hr.png" alt="">
                            </div>
                            <div class="product__info-description d-block d-md-none d-lg-block">
                                Тонкое, но очень вкусное тесто, хрустящая песочная корочка. Нежнейший твороженный крем с бананом и маракуйея.
                            </div>
                            <div class="product__info-star">
                                <div class="product__info-star-rating"></div>
                                <div data-star="4.2" class="product__info-star-mask"></div>
                            </div>
                            <div class="product__info-price">
                                <div class="price__old" data-price="109">
                                    109 ₽
                                </div>
                                <div class="price__new" data-price="69">
                                    69 ₽
                                </div>
                            </div>
                            <div class="product__info-buttons">
                                <div class="buttons__count">
                                    <div class="buttons__count-label d-none d-md-block">
                                        Количество
                                    </div>
                                    <div class="buttons__count-number">
                                        <span class="buttons__count-minus">
                                            <img src="./assets/img/product/minus.png" alt="">
                                        </span>
                                        <input class="buttons__count-quantity" type="text" value="1">
                                        <span class="buttons__count-plus">
                                            <img src="./assets/img/product/plus.png" alt="">
                                        </span>
                                    </div>
                                </div>
                                <div class="buttons__cart">
                                    <button>В корзину</button>
                                </div>
                            </div>
                            <div class="product__info-structure">
                                Состав: мука пшеничная, масло сливочное, яйца куриные, вода, сахар, соль, молоко, ванилин, лимонный сок, сахарная пудра.
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--SLIDER SECTION-->

        <section class="catalog__slider">
            <div class="catalog__slider-title">
                Другие эклеры
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
                </div>
            </div>
        </section>
    </div>
    <div class="static">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-8">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="static__label">
                                <div class="static__label-title">
                                    История эклера
                                </div>
                                <div class="static__label-hr">
                                    <img src="./assets/img/index-organization/hr.png" alt="">
                                </div>
                                <div class="static__label-description">
                                    Небольшой текст про опыт и заслуги. Ну и обязательно что МЫ влюбляем в каждый десерт
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="static__text">
                                История заварного теста, необходимого для приготовления эклеров, берёт своё начало в
                                1533 году, когда Екатерина Медичи переехала во Францию в сопровождении всего своего
                                двора, включая повара по имени Пантерелли (Panterelli). Именно он в 1554 году «открыл»
                                заварное тесто, с гордостью назвав его собственным именем — pâte à Panterelli.
                                Новая выпечка произвела настоящий фурор при дворе, и иноземные булочки с охотой
                                добавили в королевское меню.
                                Рецепт современного заварного теста появился благодаря ещё одному придворному повару —
                                Мари-Антуану Карему, который по праву считается одним из основателей современной мировой
                                кухни. Он был придворным поваром Наполеона I, работал в Англии для Георга IV. Карем
                                служил поваром даже в России, где за несколько коротких месяцев устроил настоящую
                                гастрономическую революцию при дворе Александра I. <a href="">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 d-none d-lg-block">
                </div>
                <div class="col-md-4 d-none d-md-block">
                    <div class="static__image">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
require 'footer.php';
?>
