$(document).ready(function(){
	$('#img').focus();
});

var $first = $('.container:first'),
    $last = $('.container:last');

if($('.container').length === 1){
	$(".next").addClass("hidden");
  $(".prev").addClass("hidden");
  $("#img").css("margin-left","10%");
}

$(".next").on("click", function () {
 
    var $next,
        $selected = $(".selected");
    // get the selected item
    // If next  is empty , get the first
    $next = $selected.next('.container').length ? $selected.next('.container') :$first;
    $selected.fadeOut().removeClass("selected");
    $next.fadeIn().addClass('selected');
});

$(".prev").on("click", function () {
    var $prev,
        $selected = $(".selected");
    // get the selected item
    // If prev li is empty , get the last
    $prev = $selected.prev('.container').length ? $selected.prev('.container') : $last;
    $selected.fadeOut().removeClass("selected");
    $prev.fadeIn().addClass('selected');

});