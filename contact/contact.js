$(document).ready(function(){
	$(".page li").each(function(){
		$(this).on('click',function(){
			if(!$(this).hasClass("active")){
				$(this).siblings().removeClass("active");
				$(this).addClass("active");
			}

				if($("#send").hasClass("active")){
					$("#email").addClass("visible");
					$("#info").removeClass("visible");
				}else if($("#address").hasClass("active")){
					$("#info").addClass("visible");
					$("#email").removeClass("visible");
				}
		});
	});

	if(!$('#contact-form textarea').val()){
		$(".page #address").addClass('active');
		$("#info").addClass('visible');
	}else{
		$(".page #send").addClass('active');
		$("#email").addClass('visible');
		$('#email textarea').css('min-height','250px')
		$('body').delay(1000).animate({scrollTop: $("#email").offset().top - 60}, 1000);
	}

	

	mapStyling();
}); 

$(window).resize(function(){
	mapStyling();
});

function mapStyling(){
	if($(document).width() < 1024){
		if(!$('#map-contaner').length){
			$("#map").wrap('<div id="map-contaner"></div>');
		} 
	}else{
			$("#map").unwrap();
	}
}