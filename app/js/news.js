var splide = new Splide( '.el', {
    type: 'loop',
    gap: '20px',
    speed: 2000,
    perPage: 4,
    perMove: 1,
    autoplay: true,
    rewind: true,
    rewindSpeed: 3000,
    classes: {
      arrows: 'splide__arrows ',
      arrow : 'splide__arrow el-arrow',
      prev  : 'splide__arrow--prev el-prev',
      next  : 'splide__arrow--next el-next',
    },
    breakpoints: {
      320: {
            perPage: 1,
            gap: '20px',
      },
      425: {
            perPage: 1,
      },
      576: {
        perPage: 1,
      },
      768: {
        perPage: 2,
      },
      992: {
        perPage: 2,
      },
      1200: {
        perPage: 3,
      },
    }
  } );

splide.mount();