jQuery(document).ready(function($) {


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