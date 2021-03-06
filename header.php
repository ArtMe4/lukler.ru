<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lukler</title>
    <link rel="stylesheet" href="./assets/styles/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</head>
<body>
    <?php
        $src = '';
        $mod = '';

        if($_SERVER['REQUEST_URI'] == '/product.php' || $_SERVER['REQUEST_URI'] == '/contacts.php' || $_SERVER['REQUEST_URI'] == '/cart.php' || $_SERVER['REQUEST_URI'] == '/order-success.php') {
            $src = ' class="product"';
        } else if ($_SERVER['REQUEST_URI'] == '/catalog.php' || $_SERVER['REQUEST_URI'] == '/catalogtwo.php') {
            $src = ' class="catalog"';
            $mod = '-white';
        } else {
            $src = '';
        }
    ?>
    <header <?= !empty($src) ? $src : '' ?>>
        <div class="container">
            <div class="header">
                <div class="header__logo<?= $mod ?>">
                    <a href="/">
                        <picture>
                            <source srcset="./assets/img/logo-tablet<?= $mod ?>.png" media="(max-width: 991.98px)">
                            <img src="./assets/img/logo<?= $mod ?>.png" alt="">
                        </picture>
                    </a>
                </div>
                <div class="header__right">
                    <div class="header__menu d-none d-lg-block">
                        <ul class="header__menu-nav">
                            <li class="nav__item has-child">
                                <a href="">????????</a>
                                <div class="nav__item-children">
                                    <ul>
                                        <li><a href="">?????? ??????????</a></li>
                                        <li><a href="">?????????????????? ????????????</a></li>
                                        <li><a href="">???????????? ??????????????</a></li>
                                        <li><a href="">???????????????????????? ??????????????</a></li>
                                        <li><a href="">???????????????????????? ????????</a></li>
                                        <li><a href="">??????????????</a></li>
                                        <li><a href="">??????????</a></li>
                                        <li><a href="">?????????????????? ??????????????</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav__item">
                                <a target="_blank" href="https://rodinkirill.com/">??????-????????????????</a>
                            </li>
                            <li class="nav__item has-child">
                                <a href="">?? ????????</a>
                                <div class="nav__item-children">
                                    <ul>
                                        <li>??????-????</li>
                                        <li>??????-????</li>
                                        <li>??????-????</li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav__item">
                                <a href="">????????????????</a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__cart">
                        <div class="header__cart-count">
                            1
                        </div>
                        <img src="./assets/img/header-iamges/header-cart<?= $mod ?>.png" alt="">
                    </div>
                    <div class="header__mobile-menu d-lg-none">
                        <img src="./assets/img/header-iamges/mobile-menu<?= $mod ?>.png" alt="">
                        <div class="mobile-menu">
                            <div class="mobile-menu__top">
                                <img class="mobile-menu__back" src="./assets/img/header-iamges/menu-back.svg" alt="">
                                <img class="mobile-menu__close" src="./assets/img/header-iamges/menu-close.svg" alt="">
                            </div>
                            <div class="mobile-menu__body">
                                <div class="mobile-menu__item has-child">
                                    <a class="mobile-menu__link" href="">????????</a>
                                    <div class="mobile-menu__children">
                                        <a href="">?????? ??????????</a>
                                        <a href="">?????????????????? ????????????</a>
                                        <a href="">???????????? ??????????????</a>
                                        <a href="">???????????????????????? ??????????????</a>
                                        <a href="">???????????????????????? ????????</a>
                                        <a href="">??????????????</a>
                                        <a href="">??????????</a>
                                        <a href="">?????????????????? ??????????????</a>
                                    </div>
                                </div>
                                <div class="mobile-menu__item">
                                    <a target="_blank" href="https://rodinkirill.com/">??????-????????????????</a>
                                </div>
                                <div class="mobile-menu__item has-child">
                                    <a class="mobile-menu__link" href="">?? ????????</a>
                                    <div class="mobile-menu__children">
                                        <a href="">??????-????</a>
                                        <a href="">??????-????</a>
                                        <a href="">??????-????</a>
                                        <a href="">??????-????</a>
                                        <a href="">??????-????</a>
                                        <a href="">??????-????</a>
                                    </div>
                                </div>
                                <div class="mobile-menu__item">
                                    <a href="">????????????????</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
