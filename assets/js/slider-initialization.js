var catalog_swiper = new Swiper('.catalog__slider-slider .swiper-container', {
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

var new_swiper = new Swiper(".new__tabs-content.active .new__tabs-content-slider-bg .swiper-container", {
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

var catering_swiper = new Swiper(".catering__slider-slider .swiper-container", {
    slidesPerView: 4,
    spaceBetween: 6,
    breakpoints: {
        0: {
            slidesPerView: 2
        },
        768: {
            slidesPerView: 3
        },
        992: {
            slidesPerView: 4
        }
    },
    // Navigation arrows
    navigation: {
        nextEl: '.catering-button-next',
        prevEl: '.catering-button-prev',
    }
});

var organization_swiper = new Swiper(".organization__slider .swiper-container", {
    slidesPerView: 'auto',
    spaceBetween: 4,
    // Navigation arrows
    navigation: {
        nextEl: '.organization-button-next',
        prevEl: '.organization-button-prev',
    }
});

var review_swiper_thumb = new Swiper(".review__thumb .swiper-container", {
    slidesPerView: "auto",
    spaceBetween: 20,
    centeredSlides: true,
    slideToClickedSlide: true,
    loop: true,
    loopedSlides: 4,
});

var review_swiper = new Swiper(".review__body .swiper-container", {
    loop: true,
    loopedSlides: 4,
    navigation: {
        nextEl: '.review__button-next',
        prevEl: '.review__button-prev',
    },
});

review_swiper.controller.control = review_swiper_thumb;
review_swiper_thumb.controller.control = review_swiper;

var product_swiper_thumb = new Swiper(".product__thumb .swiper-container", {
    slidesPerView: "auto",
    spaceBetween: 10,
    direction: 'horizontal',
    breakpoints: {
        0: {
            direction: 'horizontal'
        },
        768: {
            direction: 'vertical'
        },
        992: {
            direction: 'horizontal'
        }
    }
});

var product_swiper = new Swiper(".product__image .swiper-container", {
    slidesPerView: 1,
    thumbs: {
        swiper: product_swiper_thumb,
    },
});

var main_swiper = new Swiper('.cakeUp .swiper-container', {
    slidesPerView: 1,
    spaceBetween: 20,
    // Navigation arrows
    navigation: {
        nextEl: '.cakeUp-button-next',
        prevEl: '.cakeUp-button-prev',
    },
    pagination: {
        el: '.cakeUp-pagination',
        clickable: 'true',
    },
});


