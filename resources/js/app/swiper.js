document.addEventListener("DOMContentLoaded", () => {
    const swiper = new Swiper('.record__content', {
        autoplay: {
            delay: 5000,
        },
        slidesPerView: 3,
        spaceBetween: 30,
        breakpoints: {
            660: {
                slidesPerView: 2,
            },
            320: {
                slidesPerView: 1,
            },
            992: {
                slidesPerView: 3,
            },
        },
        navigation: {
            nextEl: '.record__content-slider-next',
            prevEl: '.record__content-slider-prev',
        },
    });
});
