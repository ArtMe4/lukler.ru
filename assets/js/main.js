// tabs


$(function() {
    $("ul.tabs__caption").on("click", "li:not(.active)", function() {
        $(this)
            .addClass("active")
            .siblings()
            .removeClass("active")
            .closest("section.catalog__slider")
            .find("div.tabs__content")
            .removeClass("active")
            .eq($(this).index())
            .addClass("active");
        catalog_swiper = new Swiper('.catalog__slider-slider .swiper-container', {
            observer: true,
            observeParents: true,
            slidesPerView: "auto",
            spaceBetween: 10,
            // Navigation arrows
            navigation: {
                nextEl: '.catalog__slider-next',
                prevEl: '.catalog__slider-prev',
            }
        });
    });
    $(".new__tabs ul").on("click", "li:not(.active)", function() {
        $(this)
            .addClass("active")
            .siblings()
            .removeClass("active")
            .closest("section.new")
            .find("div.new__tabs-content")
            .removeClass("active")
            .eq($(this).index())
            .addClass("active");
        new_swiper = new Swiper(".new__tabs-content.active .new__tabs-content-slider-bg .swiper-container", {
            observer: true,
            observeParents: true,
            slidesPerView: 1,
            pagination: {
                el: ".new__tabs-content.active .new__slider-pagination",
                type: "fraction",
            },
            // Navigation arrows
            navigation: {
                nextEl: '.new__tabs-content.active .new__slider-next',
                prevEl: '.new__tabs-content.active .new__slider-prev',
            }
        });
    });
});

// Изменение цены и количества в карточке товара

$(document).ready(function() {
    var totalCount = 0;
    var totalPrice = 0;
    var totalPricePhone = 0;
    var totalCountPhone = 0;
    $('.buttons__count-quantity:not(".phone")').each(function(i,elem) {
        totalCount += parseInt($(this).val());
    });
    $('.price__new:not(".phone")').each(function(i,elem) {
        totalPrice += parseInt($(this).text());
    });
    $('.count__total.desktop').text(totalCount);
    $('.price__total.desktop').text(totalPrice + ' ₽');

    $('.buttons__count-quantity:not(".desktop")').each(function(i,elem) {
        totalCountPhone += parseInt($(this).val());
    });
    $('.price__new:not(".desktop")').each(function(i,elem) {
        totalPricePhone += parseInt($(this).text());
    });
    $('.count__total.phone').text(totalCountPhone);
    $('.price__total.phone').text(totalPricePhone + ' ₽');

    function change($tr, val) {
        totalCount = 0;
        totalPrice = 0;
        totalPricePhone = 0;
        totalCountPhone = 0;
        var $input = $tr.find('.buttons__count-quantity');
        var count = parseInt($input.val()) + val;
        count = count < 1 ? 1 : count;
        $input.val(count);
        var $price = $tr.parent().parent().find('.price__new');
        var $price_old = $tr.parent().parent().find('.price__old');
        var $price_count = $tr.parent().parent().find('.price__count-count');
        $price.text(count * $price.data('price') + ' ₽');
        $price_old.text(count * $price_old.data('price') + ' ₽');
        $price_count.text(count);

        $('.buttons__count-quantity:not(".phone")').each(function(i,elem) {
            totalCount += parseInt($(this).val());
        });
        $('.price__new:not(".phone")').each(function(i,elem) {
            totalPrice += parseInt($(this).text());
        });
        $('.count__total.desktop').text(totalCount);
        $('.price__total.desktop').text(totalPrice + ' ₽');

        $('.buttons__count-quantity:not(".desktop")').each(function(i,elem) {
            totalCountPhone += parseInt($(this).val());
        });
        $('.price__new:not(".desktop")').each(function(i,elem) {
            totalPricePhone += parseInt($(this).text());
        });
        $('.count__total.phone').text(totalCountPhone);
        $('.price__total.phone').text(totalPricePhone + ' ₽');
    }
    $('.buttons__count-minus').click(function() {
        change($(this).closest('.buttons__count'), -1);
    });
    $('.buttons__count-plus').click(function() {
        change($(this).closest('.buttons__count'), 1);
    });
    $('.buttons__count-quantity').on("input", function() {
        totalCount = 0;
        totalPrice = 0;
        totalPricePhone = 0;
        totalCountPhone = 0;
        var $price = $(this).parent().parent().parent().parent().find('.price__new');
        var $price_old = $(this).parent().parent().parent().parent().find('.price__old');
        var $price_count = $(this).parent().parent().parent().parent().find('.price__count-count');
        $price.text(this.value * $price.data('price') + ' ₽');
        $price_old.text(this.value * $price_old.data('price') + ' ₽');
        $price_count.text(this.value);

        $('.buttons__count-quantity:not(".phone")').each(function(i,elem) {
            totalCount += parseInt($(this).val());
        });
        $('.price__new:not(".phone")').each(function(i,elem) {
            totalPrice += parseInt($(this).text());
        });
        $('.count__total.desktop').text(totalCount);
        $('.price__total.desktop').text(totalPrice + ' ₽');

        $('.buttons__count-quantity:not(".desktop")').each(function(i,elem) {
            totalCountPhone += parseInt($(this).val());
        });
        $('.price__new:not(".desktop")').each(function(i,elem) {
            totalPricePhone += parseInt($(this).text());
        });
        $('.count__total.phone').text(totalCountPhone);
        $('.price__total.phone').text(totalPricePhone + ' ₽');
    });
});

// Рейтинг в звездах

$(document).ready(function() {
    var total_rating = $('.product__info-star-mask').data('star');
    var star_width = total_rating * 20 + Math.floor(total_rating) * 5;
    $('.product__info-star-mask').width(star_width);
});

// Меню для мобилки

$('.header__mobile-menu img').click(function () {

    $(this).parent().toggleClass('opened');

});