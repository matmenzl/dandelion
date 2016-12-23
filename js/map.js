jQuery(function ($) {


// Google Maps Scripts
var map = null;
// When the window has finished loading create our google map below
google.maps.event.addDomListener(window, 'load', init);
google.maps.event.addDomListener(window, 'resize', function() {
    map.setCenter(new google.maps.LatLng(47.381495, 8.488121));
});

function init() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 13,

        // The latitude and longitude to center the map (always required)
        center: new google.maps.LatLng(47.381495, 8.488121), // Zurich

        // Disables the default Google Maps UI components
        disableDefaultUI: true,
        scrollwheel: false,
        draggable: false,

        // How you would like to style the map. 
        // This is where you would paste any style found on Snazzy Maps.
        styles: [{"featureType":"landscape","stylers":[{"hue":"#FFBB00"},{"saturation":43.400000000000006},{"lightness":37.599999999999994},{"gamma":1}]},{"featureType":"road.highway","stylers":[{"hue":"#FFC200"},{"saturation":-61.8},{"lightness":45.599999999999994},{"gamma":1}]},{"featureType":"road.arterial","stylers":[{"hue":"#FF0300"},{"saturation":-100},{"lightness":51.19999999999999},{"gamma":1}]},{"featureType":"road.local","stylers":[{"hue":"#FF0300"},{"saturation":-100},{"lightness":52},{"gamma":1}]},{"featureType":"water","stylers":[{"hue":"#0078FF"},{"saturation":-13.200000000000003},{"lightness":2.4000000000000057},{"gamma":1}]},{"featureType":"poi","stylers":[{"hue":"#00FF6A"},{"saturation":-1.0989010989011234},{"lightness":11.200000000000017},{"gamma":1}]}]
    };

    // Get the HTML DOM element that will contain your map 
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');

    // Create the Google Map using out element and options defined above
    map = new google.maps.Map(mapElement, mapOptions);

    // Following section, you can create your info window content using html markup

                    var contentString = '<div id="content">'+
                        '<div id="siteNotice">'+
                        '</div>'+
                        '<h1 id="firstHeading" class="firstHeading">Schule DANDELION</h1>'+
                        '<div id="bodyContent">'+
                        '<p>Die <b>Schule DANDELION</b>, ist eine freie Schule in Zürich Albisrieden/Altstetten' + ' an der Rautistrasse 77' + ' in 8048 Zürich.'
                        '</p>'+
                        '</div>'+
                        '</div>';



    // Custom Map Marker Icon - Customize the map-marker.png file to customize your icon
    var image = 'wp-content/themes/dandelion/images/map-marker.png';
    var myLatLng = new google.maps.LatLng(47.381495, 8.488121);
    var beachMarker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: image
    });

             // Following Lines are needed if you use the Info Window to display content when map marker is clicked

               var infowindow = new google.maps.InfoWindow({
                                content: contentString
                            });

                // Following line turns the marker, into a clickable button and when clicked, opens the info window

                    google.maps.event.addListener(beachMarker, 'click', function() {
                        infowindow.open(map, beachMarker);
                    });  



}

});