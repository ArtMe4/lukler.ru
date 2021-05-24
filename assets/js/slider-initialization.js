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