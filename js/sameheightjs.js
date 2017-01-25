(function($) {

//add class equalize to bootstrap grid-divs to make height of elements even
var maxHeight = 0;          
$(".equalize").each(function(){
  if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
});         
$(".equalize").height(maxHeight);

});