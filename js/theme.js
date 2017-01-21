
jQuery(function ($) {


  $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
              event.preventDefault(); 
              event.stopPropagation(); 
              $(this).parent().siblings().removeClass('open');
              $(this).parent().toggleClass('open');
          });


  // $('h1, h2, h4, h3, a.fancy-title').jumble([220,180,110],[250,20,170],false,true);

  $(document).ready(function() {
    $("h1, h2, h4, h3, a.fancy-title").lettering();
  });

  $('.banner').addClass('animated lightSpeedIn');

  jQuery(function($) {
    // Bootstrap menu magic
    $(window).resize(function() {
      if ($(window).width() < 768) {
        $(".dropdown-toggle").attr('data-toggle', 'dropdown');
      } else {
        $(".dropdown-toggle").removeAttr('data-toggle dropdown');
      }
    });
  });


});
