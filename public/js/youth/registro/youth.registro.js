$(document).on('ready', function () {

	/*validacion de formulario de fiesta*/
	$("#registro").validate({

	       debug: true,

	      /*Contenedor y clase donde se pinta el error*/
	      errorElement: "div",
	      errorClass: "alert-danger",

	      /*Campos para validar en form para pedir fiesta*/

	    rules: {
	           nombres:       {required: true, accept: "[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]+" },
	           apellidos:       {required: true, accept: "[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]+" },
	           celular:          {required: true,  digits: true},  
	           direccion:       {required: true},
	           tipo:       {required: true},
	           email:       {required: true, email: true},  
	           documento:          {required: true, digits: true},  
	           nacimiento:          {required: true, date: true},  
	           ciudad:       {required: true},
	           terminos:        {required: true} 
	           },

	    /*Mensajes en caso de dar error para cada input*/

	    messages: {
	      nombres:      {required: "debes ingresar un nombre", accept: "solo ingresa texto"},
	      apellidos:      {required: "debes ingresar tus apellidos", accept: "solo ingresa texto"},
	      celular:      {required: "Indíca un número", digits: "Ingresa solo números" },
	      direccion:      {required: "debes ingresar la dirección del lugar"},
	      tipo:      {required: "debes seleccionar un tipo de documento"},
	      email:      {required: "debes ingresar un email", email: "Ingresa un email válido"},
	      documento:  {required: "Indíca un númerno de documento", digits: "solo se aceptan números" },
	      nacimiento:  {required: "Indíca una fecha de nacimiento", date: "no es un formato de fecha válido" },
	      ciudad:      {required: "debes ingresar la ciudad"},
	      terminos:         {required: "Debes aceptar los términos y condiciones"}
	     

	           },

	    errorPlacement: function (error, element) {

	      if( element.attr('name') == 'terminos'){

	        error.insertAfter(element.next());

	      }else{

	        error.insertAfter(element);
	      }

	    },

	    // highlight: function (element, errorClass, validClass) {

	    //   $(element).parent().parent().parent().find('.col-lg-6').addClass('u-error');
	    // },

	    // unhighlight: function (element, errorClass, validaClass) {
	    //   $(element).parent().parent().parent().find('.col-lg-6').removeClass('u-error');
	    //   // body...
	    // }
	    

	});
	jQuery(document).on('click','.btn-submit',function(){

	    if(jQuery('#registro').valid()) {
	    	var urlR='/fbappCasaBienestar/registroYouth/',
	    		rs=jQuery('#idRs').attr('data'),
	    		idrs=jQuery('#idRs').val(),
	    		imgPf=jQuery('.img-perfil img').attr('src'),
	    		nombreJ=jQuery('#nombres').val(),
	    		apellidoJ=jQuery('#apellidos').val(),
	    		celularJ=jQuery('#celular').val(),
	    		direccionJ=jQuery('#direccion').val(),
	    		emailJ=jQuery('#email').val(),
	    		tipoJ=jQuery('#tipo').val(),
	    		documentoJ=jQuery('#documento').val(),
	    		nacimientoJ=jQuery('#nacimiento').val(),
	    		terminosJ=jQuery('#terminos').val();
	    		jQuery('#departamento').on('change',function(){
	    			var deptoJ=jQuery(this).val();
	    			console.log(deptoJ)
	    		});
	    		jQuery('#ciudad').on('change',function(){
	    			var ciudadJ=jQuery(this).val();
	    			console.log(ciudadJ);
	    		});	
	    		console.log(rs);
	    	jQuery.ajax({
	    		url: urlR,
				dataType:'json' ,
				type: 'POST',
				data:{
					idRs: idrs,
					rs:rs,
					imgPer: imgPf,
    				nombres: nombreJ,
    				apellidos: apellidoJ,
    				celular: celularJ,
    				direccion:direccionJ,
    				email: emailJ,
    				tipo:tipoJ,
    				documento: documentoJ,
    				nacimiento: nacimientoJ,
    				depto: deptoJ,
    				ciudad: ciudadJ,
    				terminos: terminosJ
				},
				success: function (data){
					console.log(data);
					
				}
	    	});
	    	return false;
	    }else{
	    	return false;
	    }
	});
});