$(window).scroll(function(){
	if($('#header').offset().top>185){
		$('#header').fadeIn(300).addClass('.sticky');
	}
	else{
		$('#header').removeClass('.sticky');
	}

});