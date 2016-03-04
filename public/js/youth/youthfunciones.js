jQuery(document).ready(function(){
	if (window.location.href.indexOf('orientate') > -1) {
		if (jQuery('section').hasClass('slider-ppal')) {
			jQuery('.slider-ppal').removeClass('slider-entrenate');
			jQuery('.slider-ppal').addClass('slider-orientate');

		}
		if(jQuery('section').hasClass('mask-arrow')){
			jQuery('.mask-arrow').removeClass('mask-arrow');
		}

			jQuery('.down').removeClass('magenta-text').addClass('verde-text');
		
	}else if(window.location.href.indexOf('empleate') > -1){
		if (jQuery('section').hasClass('slider-ppal')) {
			
			jQuery('.slider-ppal').removeClass('slider-entrenate');
			jQuery('.slider-ppal').addClass('slider-empleate');

		}
		jQuery('.down').removeClass('magenta-text').addClass('naranja-text');
	}else if(window.location.href.indexOf('oportunidades') > -1){
		if (jQuery('section').hasClass('slider-ppal')) {
			
			jQuery('.slider-ppal').removeClass('slider-entrenate');
			jQuery('.slider-ppal').addClass('slider-orientate');

		}
		jQuery('.down').removeClass('magenta-text').addClass('purpura-text');
	}

if(jQuery('.list').length > 0){
	var lista=".list ul li";
	jQuery(lista).on('click',function(event){
		//console.log(event);
		event.preventDefault();
		var lic=jQuery(this).attr('data-contenidoc')
		if(lic=="ventas"){
			jQuery('.cambiaContenventas').show('fade');
			jQuery('.cambiaContenlogistica').hide('fade');
			jQuery('.cambiaContenpia').hide('fade');
			jQuery('.cambiaContencafe').hide('fade');
		}else if(lic=="cafe"){
			jQuery('.cambiaContenventas').hide('fade');
			jQuery('.cambiaContenlogistica').hide('fade');
			jQuery('.cambiaContenpia').hide('fade');
			jQuery('.cambiaContencafe').show('fade');
		}else if(lic=="pia"){
			jQuery('.cambiaContenventas').hide('fade');
			jQuery('.cambiaContenlogistica').hide('fade');
			jQuery('.cambiaContenpia').show('fade');
			jQuery('.cambiaContencafe').hide('fade');
		}else if(lic=="logistica"){
			jQuery('.cambiaContenventas').hide('fade');
			jQuery('.cambiaContenlogistica').show('fade');
			jQuery('.cambiaContenpia').hide('fade');
			jQuery('.cambiaContencafe').hide('fade');
		}


		/*ContenidoB*/
		var lib=jQuery(this).attr('data-contenidob');
		if(lib=="practicantes"){
			jQuery('.cambiaContengraduados').hide('fade');
			jQuery('.cambiaContenaprendices').hide('fade');
			jQuery('.cambiaContenpracticantes').show('fade');
		}else if(lib=="aprendices"){
			jQuery('.cambiaContengraduados').hide('fade');
			jQuery('.cambiaContenaprendices').show('fade');
			jQuery('.cambiaContenpracticantes').hide('fade');
		}else if(lib=="graduados"){
			jQuery('.cambiaContengraduados').show('fade');
			jQuery('.cambiaContenaprendices').hide('fade');
			jQuery('.cambiaContenpracticantes').hide('fade');
		}
		jQuery(lista).removeClass('active');
    	jQuery(this).addClass('active');
	});

}
});