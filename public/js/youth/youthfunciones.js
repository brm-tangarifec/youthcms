jQuery(document).ready(function(){
	if (window.location.href.indexOf('orientate') > -1) {
		if (jQuery('section').hasClass('slider-ppal')) {
			jQuery('.slider-ppal').removeClass('slider-entrenate');
			jQuery('.slider-ppal').addClass('slider-orientate');
			jQuery('.navbar-nav li:nth-child(1)').addClass('active');
			jQuery('.navbar-nav li:nth-child(1) a').addClass('verde');

		}
		if(jQuery('section').hasClass('mask-arrow')){
			jQuery('.mask-arrow').removeClass('mask-arrow');
		}

			jQuery('.down').removeClass('magenta-text').addClass('verde-text');
			jQuery('.button-container').removeClass('amarillo').addClass('verde');		
	}if(window.location.href.indexOf('empleate') > -1){
		if (jQuery('section').hasClass('slider-ppal')) {
			
			jQuery('.slider-ppal').removeClass('slider-entrenate');
			jQuery('.slider-ppal').addClass('slider-empleate');

			jQuery('.navbar-nav li:nth-child(3)').addClass('active');
			jQuery('.navbar-nav li:nth-child(3) a').addClass('naranja');
			jQuery('.navbar-nav li:nth-child(4)').removeClass('active');
			jQuery('.navbar-nav li:nth-child(4) a').removeClass('purpura');

		}
		jQuery('.down').removeClass('purpura-text').addClass('naranja-text');
		jQuery('.button-container').removeClass('amarillo').addClass('naranja');
	}if(window.location.href.indexOf('oportunidades') > -1){
		if (jQuery('section').hasClass('slider-ppal')) {
			
			jQuery('.slider-ppal').removeClass('slider-entrenate');
			jQuery('.slider-ppal').addClass('slider-orientate');

			jQuery('.navbar-nav li:nth-child(4)').addClass('active');
			jQuery('.navbar-nav li:nth-child(4) a').addClass('purpura');

		}
		jQuery('.down').removeClass('magenta-text').addClass('purpura-text');
		jQuery('.button-container').removeClass('amarillo').addClass('purpura');
	}if(window.location.href.indexOf('entrenate') > -1){
		if (jQuery('section').hasClass('slider-ppal')) {
				jQuery('.navbar-nav li:nth-child(2)').addClass('active');
				jQuery('.navbar-nav li:nth-child(2) a').addClass('magenta');


		}
		jQuery('.down').removeClass('purpura-text').addClass('magenta-text');
		jQuery('.button-container').removeClass('amarillo').addClass('magenta');
		
	}

if(jQuery('.list').length > 0){
	var lista=".list ul li";
	jQuery(lista).on('click',function(event){
		event.preventDefault();
		var lic=jQuery(this).attr('data-contenidoc')
		console.log(lic);
		if(lic=="ventas"){
			jQuery('.cambiaContenventas').show();
			jQuery('.cambiaContenlogistica').hide();
			jQuery('.cambiaContenpia').hide();
			jQuery('.cambiaContencafe').hide();
		}else if(lic=="cafe"){
			jQuery('.cambiaContenventas').hide();
			jQuery('.cambiaContenlogistica').hide();
			jQuery('.cambiaContenpia').hide();
			jQuery('.cambiaContencafe').show();
		}else if(lic=="pia"){
			jQuery('.cambiaContenventas').hide();
			jQuery('.cambiaContenlogistica').hide();
			jQuery('.cambiaContenpia').show();
			jQuery('.cambiaContencafe').hide();
		}else if(lic=="logistica"){
			jQuery('.cambiaContenventas').hide();
			jQuery('.cambiaContenlogistica').show();
			jQuery('.cambiaContenpia').hide();
			jQuery('.cambiaContencafe').hide();
		}


		/*ContenidoB*/
		var lib=jQuery(this).attr('data-contenidob');
		if(lib=="practicantes"){
			jQuery('.cambiaContengraduados').hide();
			jQuery('.cambiaContenaprendices').hide();
			jQuery('.cambiaContenpracticantes').show();
		}else if(lib=="aprendices"){
			jQuery('.cambiaContengraduados').hide();
			jQuery('.cambiaContenaprendices').show();
			jQuery('.cambiaContenpracticantes').hide();
		}else if(lib=="graduados"){
			jQuery('.cambiaContengraduados').show();
			jQuery('.cambiaContenaprendices').hide();
			jQuery('.cambiaContenpracticantes').hide();
		}
		jQuery(lista).removeClass('active');
    	jQuery(this).addClass('active');
	});

}
});