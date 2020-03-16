var swiper = new Swiper('.swiper-container--review', {
    pagination: {
        el: '.swiper-pagination',
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    loop: true
});

var swiper1 = new Swiper('.swiper-container--clients', {
    slidesPerView: 4,
    spaceBetween: 50,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        // when window width is >= 320px
        999: {
            slidesPerView: 1,
            spaceBetween: 5,
        },
    },
    loop: true
});

var swiper2 = new Swiper('.swiper-container--sale', {
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    loop: true
});

var swiper3 = new Swiper('.swiper-container--benefits', {
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    loop: true
});

