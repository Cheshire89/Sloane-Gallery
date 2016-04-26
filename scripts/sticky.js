$(document).ready(function(){
	var navOffset = $("nav").offset().top; //Position of nav relative to top
	
	$(window).scroll(function(){
		var scrollPos = $(window).scrollTop(); //Our  postition relative to window
		
		if(scrollPos >= navOffset){
			$(".clearfix").addClass("fixed");
		}else{
			$(".clearfix").removeClass("fixed");
		}
	});
	
	
});