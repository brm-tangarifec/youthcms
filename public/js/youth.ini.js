$(document).ready(function() {

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