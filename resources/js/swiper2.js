var swiper = new Swiper(".mySwiper2", {
    loop: true,
    speed: 1000,
    autoplay:{
      delay: 2000,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      1: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 5,
      }
    },
  });