jQuery(function ($) {


var colours = ["#ff5c5c", "#ffbd4a", "#35b729", "#70bb9d", "#5291aa", "#ff63b1", "#44d9e6", "#5271ff", "#ff2d30"], 
    idx;

$(function() {
    var div = $('#randomcolor'); 
    var chars = div.text().split('');
    div.html('');     
    for(var i=0; i<chars.length; i++) {
        idx = Math.floor(Math.random() * colours.length);
        var span = $('<span>' + chars[i] + '</span>').css("color", colours[idx]);
        div.append(span);
    }
});

});