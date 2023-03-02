const targets = document.getElementsByClassName('fade');
for (let i = targets.length; i--;) {
    let observer = new IntersectionObserver((entries, observer) => {
        for (let j = entries.length; j--;) {
            if (entries[j].isIntersecting) {
                entries[j].target.classList.add('active');
                observer.unobserve(entries[j].target);
            }
        }
    });
    observer.observe(targets[i]);
}

let vw = 0.04266666667 * window.innerWidth;
var mySwiper = new Swiper('.swiper-container', {
    centeredSlides: true,
    loop: true,
    autoHeight: true,

    slidesPerView: 'auto',
    spaceBetween: 10,
    centeredSlides: true,
    breakpoints: {
        767: {
            spaceBetween: vw,
            slidesPerView: 1,
            slidesPerView: 'auto',
        }
    },
    autoplay: {
        delay: 3000,
        stopOnLastSlide: false,
        disableOnInteraction: false,
        reverseDirection: false
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
    }
});