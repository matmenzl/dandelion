jQuery(function ($) {


  // initialize Isotope after all images have loaded
  // var $container = $('#network-items').imagesLoaded( function() {
  //   $container.isotope({
  //     itemSelector: '.item',
  //     layoutMode: 'fitRows'
  //   });
  //   });


  // filter items on button click
  // $('#filters').on( 'click', 'button', function() {
  //   var filterValue = $(this).attr('data-filter');
  //   $container.isotope({ filter: filterValue });
  // });  




  $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
              event.preventDefault(); 
              event.stopPropagation(); 
              $(this).parent().siblings().removeClass('open');
              $(this).parent().toggleClass('open');
          });

  $(".wpknb .wpknb-category .wpknb-inner ul.wpknb-lists i.knb-icon:before").jumble([180,160,90],[230,20,130],false,false);

  $(document).ready(function() {
    $("h1, h2, h4, h3, a.fancy-title, i.knb-icon").lettering();
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
