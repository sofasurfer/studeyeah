

function isInView(elem){
    return $(elem).offset().top - $(window).scrollTop() < $(elem).height() ;
}

var $window = $(window);
var $animation_elements = $('.anchor');
function check_if_in_view() {
  var delay = 0;
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);
  var window_offset = 0; //((window_height/100) * 10 );

  $.each($animation_elements, function() {

    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = ($element.offset().top + window_offset);
    var element_bottom_position = (element_top_position + element_height);


    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
      (element_top_position <= window_bottom_position)) {
        console.log( $element.attr('id') );
        $('.'+$element.attr('id')).addClass('active');
    }else{
        $('.'+$element.attr('id')).removeClass('active');
    }
  });
}



$( document ).ready(function() {
    
    // $('body').scrollspy({ target: '#nav-main-spy' });

    /* Show tooltips*/
    $('[data-toggle="tooltip"]').tooltip()

    /* Enable swipe on carousel */
    $('.carousel').bcSwipe({ threshold: 50 });

    var activeItem = '.info';
    $(window).scroll(function () {

        // Sticky header
        if ($(this).scrollTop() > 50) {
          $('body').addClass('sticky');
        } else {
          $('body').removeClass('sticky');
        }


        check_if_in_view();

    });

});
