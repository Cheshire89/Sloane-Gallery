var query = location.href;
    query = query.split('/');
var artistId, workId, initialSlide = 0;
var numberPattern = /\d+/g;
artistId = query[5].match(numberPattern);
workId = query[6].match(numberPattern);
initialSlide = workId[0];
$(document).ready(function(){

	$('.bodyContainer').slick({
	  accessibility: true,
	  fade:true,
	  initialSlide: initialSlide,
	  infinite: false,
	  speed:300,
	  accessibility:true,
	  mobileFirst:true,
	  dots:true
	});

});

$('.bodyContainer').ready(function(){
	$('.slick-track .slick-slide').each(function() {
   if($(this).css('opacity') == '1'){
   	  $workTitle = $(this).find('.title span').text();
   	  $workTitle = $workTitle.replace(/\"/g,'');
   	  $titleTag = $('title').text();
   	  $newTitle = $titleTag + $workTitle;
   	  $('title').text($newTitle);
   }
});
})