$(document).ready(function(){
  $('.bespoke_slider-wrap').slick({
centerMode: true,
  centerPadding: '60px',
  slidesToShow: 5,
  autoplay: true,
  autoplaySpeed: 4000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3,

        
      }
    },

    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1,

      }
    }
  ]
  });



});

