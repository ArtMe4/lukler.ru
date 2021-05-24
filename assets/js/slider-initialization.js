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


// const catalog_swiper = new Swiper('.catalog__slider-slider .swiper-container', {
//     observer: true,
//     observeParents: true,
//     slidesPerView: "auto",
//     spaceBetween: 10,
//     // Navigation arrows
//     navigation: {
//         nextEl: '.catalog__slider-next',
//         prevEl: '.catalog__slider-prev',
//     }
// });

// var swipers = [].slice.call(document.querySelectorAll('.catalog__slider-slider .swiper-container'));
// swipers.forEach(function(container) {
//
//     var swiper = new Swiper(container, {
//         // pagination: container.$('.new__slider-pagination'),
//         slidesPerView: 'auto',
//         spaceBetween: 10,
//         // navigation: {
//         //     nextEl: container.$('.new__slider-next'),
//         //     prevEl: container.$('.new__slider-prev'),
//         // },
//
//         observer: true,
//         observeParents: true
//     });
//
// });

// const new_swiper = new Swiper(".new__tabs-content-slider-bg .swiper-container", {
//     observer: true,
//     observeParents: true,
//     slidesPerView: 1,
//     pagination: {
//         el: ".new__slider-pagination",
//         type: "fraction",
//     },
//     // Navigation arrows
//     navigation: {
//         nextEl: '.new__slider-next',
//         prevEl: '.new__slider-prev',
//     }
// });

// $(".new__tabs-items").on("click",function(){
//     reinitializeSwiper(new_swiper);
// });
//
// $(".tabs__caption").on("click",function(){
//     reinitializeCatalogSwiper(catalog_swiper);
// });
//
// function reinitializeCatalogSwiper(catalog_swiper) {
//     setTimeout(function () {
//         catalog_swiper.update();
//     }, 400);
// }
//
// function reinitializeSwiper(new_swiper) {
//     setTimeout(function () {
//         new_swiper.update();
//     }, 400);
// }

// $('.new__tabs-items').click(function () {
//
//     need_swiper = $('.new__tabs-content.active').find('.new__tabs-content-slider .swiper-container');
//     console.log(need_swiper);
//     need_swiper = $(this).parent().parent().find('.new__tabs-content-slider .swiper-container');
//     new_swiper = new Swiper(need_swiper, {
//         slidesPerView: 1,
//         pagination: {
//             el: ".new__slider-buttons",
//             type: "fraction",
//         },
//         // Navigation arrows
//         navigation: {
//             nextEl: '.new__slider-next',
//             prevEl: '.new__slider-prev',
//         }
//     });
//
// });