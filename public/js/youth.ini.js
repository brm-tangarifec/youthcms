var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

$(document).ready(function() {

	/*if ( window.location.hash != "#manifiesto"){

		$('.contenedor-lightbox').addClass('animated fadeIn');
		$('.contenedor-lightbox').removeClass('hidden');

		$('.contenedor-lightbox .close').click(function() {
				
			$(this).parent().parent().addClass('animated fadeOut');
			
			setTimeout(function () {
				$('.contenedor-lightbox').addClass('hidden');
			}, 1000);

			window.location = '#manifiesto';

		});

		$('.contenedor-lightbox').one(animationEnd, function () {
			 
			 $(this).removeClass('animated fadeIn fadeOut');
		});


	};*/
	if ($.cookie('pop') == null) {
         $('.contenedor-lightbox').addClass('animated fadeIn');
		$('.contenedor-lightbox').removeClass('hidden');

		$('.contenedor-lightbox .close').click(function() {
				
			$(this).parent().parent().addClass('animated fadeOut');
			
			setTimeout(function () {
				$('.contenedor-lightbox').addClass('hidden');
			}, 1000);

			//window.location = '#manifiesto';

		});

		$('.contenedor-lightbox').one(animationEnd, function () {
			 
			 $(this).removeClass('animated fadeIn fadeOut');
		});
         $.cookie('pop', '7');
     };

	/*Mostrar Login*/
	$('.show-login').click(function(event) {

		event.preventDefault();

		// $('.login-wrapper').removeClass('u-no-animation');
		$('.login-wrapper').addClass('login-show');

	});

	/*oculta Login*/
	$('.login-wrapper .close').click(function() {
		
		$('.login-wrapper').addClass('u-reverse');
		// $('.login-wrapper').removeClass('login-show');

		window.setTimeout(function() {

				$('.login-wrapper').removeClass(' login-show u-reverse');

		}, 1100);


	});


	//posicion label input
	var input = $('.form-group .form-control ');

	input.focus( function() {

		$(this).parent().addClass('input-activo');


	});



	input.focusout(function() {
		$(this).parent().removeClass('input-activo');

		if ( $(this).val() != '' ){

		$(this).parent().addClass('input-activo');
			
		}

	});
	
});

/*tiempo de slider header*/
$('.carousel').carousel({

	interval: 13000
});

/*Scroll down*/

$(document).on("click", ".go-down", function () {
		
		// $(window).scrollTop(0);
		var opacity=1.3-($(window).scrollTop()/500);
		if(opacity>1)opacity=1;
		if(opacity<0)opacity=0;$('.go-down').fadeTo(0.1,opacity);

		$('html,body').animate({scrollTop:$(window).scrollTop()+580+'px'},1000);


});