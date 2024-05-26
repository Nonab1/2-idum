var splide = new Splide( '.splide', {
    type: 'loop',
    speed: 2000,
    perPage: 1,
    autoplay: true,
    gap: '2px',
    rewind: true,
    rewindSpeed: 3000,
    classes: {
          arrows: 'splide__arrows your-class-arrows',
          arrow : 'splide__arrow your-class-arrow',
          prev  : 'splide__arrow--prev your-class-prev',
          next  : 'splide__arrow--next your-class-next',
    },
  } );
  
  splide.mount();