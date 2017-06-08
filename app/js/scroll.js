
jQuery(function($) {

  // $('body').scrollspy({
  //   target: '#stickyheader',
  //   offset: 40
  // });

  // $(window).scroll(function() {
  
  //   var scrollVar = $(window).scrollTop();
  
  //   if (scrollVar > 150) {
  //     $('#stickyheader').addClass('sticky');
      
  //   }
  
  //   if (scrollVar < 151) {
  //     $('#stickyheader').removeClass('sticky');
     
  //   }
  // });

 

  $('#header-sticky ul li a[href^="#"]').on('click', function(e) {
    e.preventDefault();

    var target = this.hash;
    var $target = $(target);

    $('html, body').stop().animate({
      'scrollTop': $target.offset().top - 77
    }, 980, 'swing', function() {
      window.location.hash = target;
    });
  });


});

$(document).ready(function () {
        $(".navbar-toggle").on("click", function () {
            $(this).toggleClass("active");
        });
    });
