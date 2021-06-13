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
        if($_SERVER['REQUEST_URI'] == '/product.php' || $_SERVER['REQUEST_URI'] == '/contacts.php' || $_SERVER['REQUEST_URI'] == '/cart.php' || $_SERVER['REQUEST_URI'] == '/order-success.php') {
            echo '<header class="product">';
        } else if ($_SERVER['REQUEST_URI'] == '/catalog.php' || $_SERVER['REQUEST_URI'] == '/catalogtwo.php') {
            echo '<header class="catalog">';
        } else {
            echo '<header>';
        }
    ?>
        <div class="container">
            <div class="header">
                <div class="header__logo-white">
                    <img class="d-none d-lg-block" src="./assets/img/logo-white.png" alt="">
                    <img class="d-block d-lg-none" src="./assets/img/logo-tablet-white.png" alt="">
                </div>
                <div class="header__logo">
                    <a href="/">
                        <img class="d-none d-lg-block" src="./assets/img/logo.png" alt="">
                        <img class="d-block d-lg-none" src="./assets/img/logo-tablet.png" alt="">
                    </a>
                </div>
                <div class="header__right">
                    <div class="header__menu d-none d-lg-block">
                        <ul class="header__menu-nav">
                            <li class="nav__item has-child">
                                <a href="">Меню</a>
                                <div class="nav__item-children">
                                    <ul>
                                        <li><a href="">Все сразу</a></li>
                                        <li><a href="">Ароматные эклеры</a></li>
                                        <li><a href="">Свежая выпечка</a></li>
                                        <li><a href="">Классические десерты</a></li>
                                        <li><a href="">Свежемолотый кофе</a></li>
                                        <li><a href="">Конфеты</a></li>
                                        <li><a href="">Муссы</a></li>
                                        <li><a href="">Авторские десерты</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav__item">
                                <a href="">Шеф-кондитер</a>
                            </li>
                            <li class="nav__item has-child">
                                <a href="">О кафе</a>
                                <div class="nav__item-children">
                                    <ul>
                                        <li>Что-то</li>
                                        <li>Что-то</li>
                                        <li>Что-то</li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav__item">
                                <a href="">Контакты</a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__cart-white">
                        <div class="header__cart-count">
                            1
                        </div>
                        <img src="./assets/img/header-iamges/header-cart-white.png" alt="">
                    </div>
                    <div class="header__cart">
                        <div class="header__cart-count">
                            1
                        </div>
                        <img src="./assets/img/header-iamges/header-cart.png" alt="">
                    </div>
                    <div class="header__mobile-menu white d-lg-none">
                        <img src="./assets/img/header-iamges/mobile-menu-white.png" alt="">
                        <div class="mobile-menu__body">
                            <div class="mobile-menu__item">
                                <a href="">Меню</a>
                            </div>
                            <div class="mobile-menu__item">
                                <a href="">Шеф-кондитер</a>
                            </div>
                            <div class="mobile-menu__item">
                                <a href="">О кафе</a>
                            </div>
                            <div class="mobile-menu__item">
                                <a href="">Контакты</a>
                            </div>
                        </div>
                    </div>
                    <div class="header__mobile-menu d-lg-none">
                        <img src="./assets/img/header-iamges/mobile-menu.png" alt="">
                        <div class="mobile-menu">
                            <div class="mobile-menu__top">
                                <img class="mobile-menu__back" src="./assets/img/header-iamges/menu-back.svg" alt="">
                                <img class="mobile-menu__close" src="./assets/img/header-iamges/menu-close.svg" alt="">
                            </div>
                            <div class="mobile-menu__body">
                                <div class="mobile-menu__item has-child">
                                    <a class="mobile-menu__link" href="">Меню</a>
                                    <div class="mobile-menu__children">
                                        <a href="">Все сразу</a>
                                        <a href="">Ароматные эклеры</a>
                                        <a href="">Свежая выпечка</a>
                                        <a href="">Классические десерты</a>
                                        <a href="">Свежемолотый кофе</a>
                                        <a href="">Конфеты</a>
                                        <a href="">Муссы</a>
                                        <a href="">Авторские десерты</a>
                                    </div>
                                </div>
                                <div class="mobile-menu__item">
                                    <a href="">Шеф-кондитер</a>
                                </div>
                                <div class="mobile-menu__item has-child">
                                    <a class="mobile-menu__link" href="">О кафе</a>
                                    <div class="mobile-menu__children">
                                        <a href="">Что-то</a>
                                        <a href="">Что-то</a>
                                        <a href="">Что-то</a>
                                        <a href="">Что-то</a>
                                        <a href="">Что-то</a>
                                        <a href="">Что-то</a>
                                    </div>
                                </div>
                                <div class="mobile-menu__item">
                                    <a href="">Контакты</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
