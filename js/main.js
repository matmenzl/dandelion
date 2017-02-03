jQuery(function ($) {

// initialize Isotope after all images have loaded
var $container = $('#network-items').imagesLoaded( function() {
  $container.isotope({
    itemSelector: '.item',
    masonry: {
        columnWidth: 5
      }
  });
  });




// filter items on button click
$('#filters').on( 'click', 'button', function() {
  var filterValue = $(this).attr('data-filter');
  $container.isotope({ filter: filterValue });
});   

$('.carousel').carousel({
        interval: 5000 //changes the speed
    })

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.scroll').bind('click', function(event) {
        var jQueryanchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(jQueryanchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});


});