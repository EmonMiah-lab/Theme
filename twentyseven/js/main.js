jQuery(document).ready(function () {
  jQuery('#nav').slicknav();



  jQuery(".slider").bxSlider({
    mode: 'fade',
    captions: true,
  });



jQuery("#owl-slider").owlCarousel({
  autoplay:true,
  autoplayTimeout:1000,
  autoplayHoverPause:true,
      items:1,
      merge:true,
      loop:true,
      margin:10,
      video:true,
      lazyLoad:true,
      center:true,
      responsive:{
          480:{
              items:2
          },
          600:{
              items:2
          }
      }
  });



  
});
