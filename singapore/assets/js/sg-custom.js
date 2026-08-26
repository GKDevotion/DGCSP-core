window.addEventListener('scroll', function() {
    const header = document.querySelector('.devotion-header');
    if (window.scrollY > 50) {
        header.classList.add('py-2');
        header.classList.remove('py-3');
    } else {
        header.classList.add('py-3');
        header.classList.remove('py-2');
    }
});

if( $('.offshoreSwiper').length > 0 ) {
    // Initialize Offshore Jurisdictions Swiper Slider
    const offshoreSwiper = new Swiper('.offshoreSwiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 5000, // Moves right to left automatically every 5 seconds
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-next-btn',
            prevEl: '.swiper-prev-btn',
        },
        breakpoints: {
            576: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 24,
            },
        },
    });
}