let swiper = new Swiper(".slider", {
    slidesPerView: 1, 
    wrapperClass: "slider__wrapper", 
    slideClass: "slider__slide", 

    navigation: {
      nextEl: ".slider__button-next",
      prevEl: ".slider__button-prev",
    },
    pagination: {
        el: '.slider__pagination',
    }

  });

  let swiper2 = new Swiper(".slider-skill", {
    slidesPerView: 4, 
    wrapperClass: "slider-skill__wrapper", 
    slideClass: "slider-skill__slide", 

    navigation: {
      nextEl: ".slider-skill__button-next",
      prevEl: ".slider-skill__button-prev",
    },
    pagination: {
        el: '.slider-skill__pagination',
    },

    breakpoints: { 
      0: { 
          slidesPerView: 1, 
      }, 

      479.99: { 
        slidesPerView: 2, 
        spaceBetween: 10 
      }, 

      767.99: { 
          slidesPerView: 3, 
          spaceBetween: 10 
      }, 

      1024.99: { 
          slidesPerView: 4, 
          spaceBetween: 10, 
      } 
    } 
  });