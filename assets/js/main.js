
$( document ).ready(function() {
    

    /* Show tooltips*/
    $('[data-toggle="tooltip"]').tooltip()

    /* Enable swipe on carousel */
    $('.carousel').bcSwipe({ threshold: 50 });


    // console.log("SPY");
    // $('body').scrollspy({ target: '#nav-main' });


    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
          $('body').addClass('sticky');
        } else {
          $('body').removeClass('sticky');
        }
    });

});
