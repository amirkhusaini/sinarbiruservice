$(document).ready(function () {
   $(".slick").slick({
      dots: false,
      infinite: true,
      autoplaySpeed: 5000,
      slidesToShow: 1,
      adaptiveHeight: false,
      autoplay:true,
      arrows:false,
      mobileFirst: true,
      responsive: true,
      cssEase: 'linear',
      fade:true
   });
});
