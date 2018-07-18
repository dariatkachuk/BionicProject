$(document).ready(function(){
  $('.main_slider-wrap').slick({
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    fade: true,
    cssEase: 'linear',
    pauseOnFocus: true,
    adaptiveHeight: false
  });
});
