$(function(){


  // scroll reveal!
  window.sr = new ScrollReveal({
    opacity: 0.20,
    easing: 'ease',
    mobile: false,
    enter: 'bottom',
    delay : 300,
  });

  sr.reveal('.home-artwork-item');

});

// home slider
(function($){
    // all jquery code goes in here
    $(document).ready(function(){
      var $slider = $('.slick-slider');

      if($slider.length) { // if it exists
        // then slickit
        $slider.slick({
          infinite: true,
          speed: 3000,
          fade: true,
          autoplay: true,
          adaptiveHeight:true,
          autoplaySpeed: 5000,
          prevArrow:false,
          nextArrow:false,
          cssEase: 'linear'
        });
      }
    });

})(jQuery);


// artwork page slider
(function($){
    // all jquery code goes in here
    $(document).ready(function(){
 
        $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
        slidesToShow: 8,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        arrows:true,
        centerMode: false,
        focusOnSelect: true
        });

    });


})(jQuery);



// mobile navigation menu
$('.mobileNavIcon').on('click', function(){
  $('.mobile').slideToggle(500);
});