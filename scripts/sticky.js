jQuery(document).ready(function(){
	var navOffset = jQuery("nav").offset().top; //Position of nav relative to top
	
	jQuery(window).scroll(function(){
		var scrollPos = jQuery(window).scrollTop(); //Our  postition relative to window
		
		if(scrollPos >= navOffset){
			jQuery(".clearfix").addClass("fixed");
		}else{
			jQuery(".clearfix").removeClass("fixed");
		}
	});
	
	
});