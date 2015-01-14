  // Setup variables
$window = $(window);
$slide = $('.skrollrSlide');
$body = $('body');

  //FadeIn all sections
  $body.imagesLoaded( function() {
    setTimeout(function() {
      
        // Resize sections
        adjustWindow();
        
        // Fade in sections
        $body.removeClass('loading').addClass('loaded');
        
    }, 100);
  });
  
  function adjustWindow(){
  // Init Skrollr
  var s = skrollr.init({
    forceHeight: false
  });
}


$(document).ready(function(){
  $('.imageGallery').bxSlider({
    pagerCustom: '.thumbnails',
    infiniteLoop: false,
    hideControlOnEnd: true
  });
});


//Set Thumbnails width correctly
var sum=0;
$(document).ready(function(){
  $('.thumbnails li').each( function(){ sum +=  $(this).width(); });
  $('.thumbnails').width( sum );
});
$(window).resize(function(){
  $('.thumbnails li').each( function(){ sum +=  $(this).width(); });
  $('.thumbnails').width( sum );
});