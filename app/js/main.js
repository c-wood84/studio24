$(document).ready(function(){
	$(window).scroll(function(){
		var scrollTop = 
		$(window).scrollTop();
	if (scrollTop > 970) {
		$('#header').addClass('sticky');

	} else {
		$('#header').removeClass('sticky');

	}

	//animated for Hero Logo 
	if (scrollTop > 400) {

		$('#logo-hero').removeClass('fadeInDown');
		$('#logo-hero').addClass('fadeOutDown');
		
	} else {
		$('#logo-hero').removeClass('fadeOutDown');
		$('#logo-hero').addClass('fadeInDown');
	} 

	//animated for Hero text 
	if (scrollTop > 515) {

		$('#hero-head-text').removeClass('fadeInDown');
		$('#hero-head-text').addClass('fadeOutDown');
		
	} else {
		$('#hero-head-text').removeClass('fadeOutDown');
		$('#hero-head-text').addClass('fadeInDown');
	} 

	
	});

	// Cache the Window object
	var $window = $(window);
	
	// Parallax Backgrounds
	// Tutorial: http://code.tutsplus.com/tutorials/a-simple-parallax-scrolling-technique--net-27641
	
	$('section[data-type="background"]').each(function(){
		var $bgobj = $(this); // assigning the object
		
		$(window).scroll(function() {
		
			// Scroll the background at var speed
			// the yPos is a negative value because we're scrolling it UP!								
			var yPos = -($window.scrollTop() / $bgobj.data('speed'));
			
			// Put together our final background position
			var coords = '50% '+ yPos + 'px';
			
			// Move the background
			$bgobj.css({ backgroundPosition: coords });
			
		}); // end window scroll
	});


	

});



