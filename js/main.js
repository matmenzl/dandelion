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

// put is-checked class on buttons of isotope filter
$('.network-button').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
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

//same height for columns
$(function() {
    $('.team-member, .sameheight').matchHeight();
});

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