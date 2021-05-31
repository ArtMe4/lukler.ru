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
                <img src="/assets/img/index-organization/hr.png" alt="">
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
                                                <div class="product__image-slide" style="background-image: url('/assets/img/product/product-img.png');">
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
                                                <div class="product__thumb-slide" style="background-image: url('/assets/img/product/product-img.png');">
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
                                <img src="/assets/img/index-organization/hr.png" alt="">
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
                                            <img src="/assets/img/product/minus.png" alt="">
                                        </span>
                                        <input class="buttons__count-quantity" type="text" value="1">
                                        <span class="buttons__count-plus">
                                            <img src="/assets/img/product/plus.png" alt="">
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
    </div>
</div>


<?php
require 'footer.php';
?>
