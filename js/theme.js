jQuery(function ($) {

  $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
              event.preventDefault(); 
              event.stopPropagation(); 
              $(this).parent().siblings().removeClass('open');
              $(this).parent().toggleClass('open');
          });


  $('h1, h2, h4, h3, a.fancy-title').jumble([248, 10, 6
],[246, 36, 89]),true,false;


});
