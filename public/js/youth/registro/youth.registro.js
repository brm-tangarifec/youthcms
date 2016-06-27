$(document).ready(function () {



	/*validacion de formulario de Usuario*/
	$("#registro").validate({

	       debug: true,

	      /*Contenedor y clase donde se pinta el error*/
	      errorElement: "div",
	      errorClass: "alert-danger",

	      /*Campos para validar en form para pedir Usuario*/

	    rules: {
	           nombres:       {required: true, accept: "[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]+" },
	           apellidos:       {required: true, accept: "[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]+" },
	           celular:          {required: true,  digits: true},  
	           direccion:       {required: true},
	           tipo:       {required: true},
	           genero:       {required: true},
	           email:       {required: true, email: true},  
	           documento:          {required: true, digits: true},  
	           nacimiento:          {required: true, date: true},  
	           departamento:       {required: true},
	           ciudad:       {required: true},
	           elingreso:       {required: true},
	           confirmelingreso:{
	           	required: true,
	           	equalTo : '#elingreso',
	           },
	           terminos:        {required: true} 
	           },

	    /*Mensajes en caso de dar error para cada input*/

	    messages: {
	      nombres:      {required: "debes ingresar un nombre", accept: "solo ingresa texto"},
	      apellidos:      {required: "debes ingresar tus apellidos", accept: "solo ingresa texto"},
	      celular:      {required: "Indíca un número", digits: "Ingresa solo números" },
	      direccion:      {required: "debes ingresar la dirección del lugar"},
	      tipo:      {required: "debes seleccionar un tipo de documento"},
	      genero:      {required: "debes seleccionar un ´genero"},
	      email:      {required: "debes ingresar un email", email: "Ingresa un email válido"},
	      documento:  {required: "Indíca un númerno de documento", digits: "solo se aceptan números" },
	      nacimiento:  {required: "Indíca una fecha de nacimiento", date: "no es un formato de fecha válido" },
	      departamento:      {required: "debes seleccionar el departamento"},
	      ciudad:      {required: "debes seleccionar la ciudad"},
	      elingreso:      {required: "Campo contraseña requerido"},
	      confirmelingreso:      {required: "Por favor confirme su contraseña",equalTo:'Las contraseñas no coinciden'},
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

	jQuery(document).on('click','#registroUser',function(){
		//console.log('hola, me dieron click');

	    /*Valida captcha*/
	    /*Codifica contraeña*/
	    var input = document.getElementById('confirmelingreso');
	     var codi=Base64.encode(input.value);
 			console.log(codi);
 			jQuery('#elingreso').val(codi);
 			jQuery('#confirmelingreso').val(codi);
	    /*Codifica cotnraseña*/
	    var recaptchaResponse = grecaptcha.getResponse();

		jQuery.ajax({
		      type: "POST", //Método a usar
		      url: "/comprobarcaptcha/", //Url del archivo
		      data: {recaptchaResponse: recaptchaResponse},
		        /*data: son los valores que le mandamos a 'comprobar.php' por
		        el método POST*/
		      dataType: "html", //el tipo de dato que se espera recibir
		      error: function(){
		            console.log("error petición ajax");
		        //muestra una alerta si no se realiza la petición
		      },
		      success: function(data){ 
		            //console.log(data);
		            var captcha=data;
		        /*devuelve el resultado de la petición en la variable  
		        'data' y lo muestra en una alerta*/
		        if(captcha=='NA'){
		        	 jQuery('.mensaje-reg-exitoso').html('<p>El captcha es requerido</p>');
		        }else if(captcha=='Error'){
		        	jQuery('.mensaje-reg-exitoso').html('<p>El captcha no es válido</p>');
		        }

	    		else if(jQuery('#registro').valid() && captcha=='validado') {
	    			var urlR='/registroYouth/',
	    				rs=jQuery('#idRs').attr('data'),
	    				idrs=jQuery('#idRs').val(),
	    				imgPf=jQuery('.img-perfil img').attr('src'),
	    				nombreJ=jQuery('#nombres').val(),
	    				apellidoJ=jQuery('#apellidos').val(),
	    				celularJ=jQuery('#celular').val(),
	    				direccionJ=jQuery('#direccion').val(),
	    				emailJ=jQuery('#email').val(),
	    				deptoJ=jQuery('#departamento').val(),
						ciudadJ=jQuery('#ciudad').val(),
	    				tipoJ=jQuery('#tipo').val(),
	    				generoJ=jQuery('#genero').val(),
	    				documentoJ=jQuery('#documento').val(),
	    				nacimientoJ=jQuery('#nacimiento').val(),
	    				passwordJ=jQuery('#elingreso').val(),
	    				confirmPassJ=jQuery('#confirmelingreso').val(),
	    				terminosJ=jQuery('#terminos').val();
	    				
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
    						genero:generoJ,
    						documento: documentoJ,
    						nacimiento: nacimientoJ,
    						depto: deptoJ,
    						ciudad: ciudadJ,
    						password: passwordJ,
    						confirmPass: confirmPassJ,
    						terminos: terminosJ
						},
						success: function (data){
							//console.log(data);
							 //window.location= "/perfil/#exitoso";
							 //jQuery('.mensaje-reg-exitoso').html(data);
							 
							 jQuery('.mensaje-reg-exitoso').html(data);
							 window.location= "/perfil/#exitoso";
						}, 
						error: function(result) {
           	        	 jQuery('.mensaje-reg-exitoso').html(result);
           	    		 }
	    			});
	    			return false;
	   		 	}else{
	    			return false;
	   		 	}

	   		 /*F success*/
	   		}
	    /*F captcha*/
	    });
	});


/*Perfil de usuario*/
/*validacion de formulario de fiesta*/
	$("#perfil").validate({

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
	           genero:       {required: true},
	           email:       {required: true, email: true},  
	           documento:          {required: true, digits: true},  
	           nacimiento:          {required: true, date: true},  
	           departamento:       {required: true},
	           ciudad:       {required: true},
	           },

	    /*Mensajes en caso de dar error para cada input*/

	    messages: {
	      nombres:      {required: "debes ingresar un nombre", accept: "solo ingresa texto"},
	      apellidos:      {required: "debes ingresar tus apellidos", accept: "solo ingresa texto"},
	      celular:      {required: "Indíca un número", digits: "Ingresa solo números" },
	      direccion:      {required: "debes ingresar la dirección del lugar"},
	      tipo:      {required: "debes seleccionar un tipo de documento"},
	      genero:      {required: "debes seleccionar un ´genero"},
	      email:      {required: "debes ingresar un email", email: "Ingresa un email válido"},
	      documento:  {required: "Indíca un númerno de documento", digits: "solo se aceptan números" },
	      nacimiento:  {required: "Indíca una fecha de nacimiento", date: "no es un formato de fecha válido" },
	      departamento:      {required: "debes seleccionar el departamento"},
	      ciudad:      {required: "debes seleccionar la ciudad"},
	     

	           },

	    errorPlacement: function (error, element) {

	      if( element.attr('name') == 'terminos'){

	        error.insertAfter(element.next());

	      }else{

	        error.insertAfter(element);
	      }

	    },

	});

jQuery(document).on('click','#updatePer',function(){
	//console.log('hola, me dieron click');

	    if(jQuery('#perfil').valid()) {
	    	var urlR='/updateRegistro/',
	    		idrs=jQuery('#idusr').val(),
	    		nombreJ=jQuery('#nombres').val(),
	    		apellidoJ=jQuery('#apellidos').val(),
	    		celularJ=jQuery('#celular').val(),
	    		direccionJ=jQuery('#direccion').val(),
	    		emailJ=jQuery('#email').val(),
	    		deptoJ=jQuery('#departamento').val(),
				ciudadJ=jQuery('#ciudad').val(),
	    		tipoJ=jQuery('#tipo').val(),
	    		generoJ=jQuery('#genero').val(),
	    		documentoJ=jQuery('#documento').val(),
	    		nacimientoJ=jQuery('#nacimiento').val();
	    		
	    	jQuery.ajax({
	    		url: urlR,
				dataType:'json' ,
				type: 'POST',
				data:{
					idRs: idrs,
    				nombres: nombreJ,
    				apellidos: apellidoJ,
    				celular: celularJ,
    				direccion:direccionJ,
    				email: emailJ,
    				tipo:tipoJ,
    				genero:generoJ,
    				documento: documentoJ,
    				nacimiento: nacimientoJ,
    				depto: deptoJ,
    				ciudad: ciudadJ,
				},
				success: function (data){
			
					 jQuery('.mensajes-sistema').html(data)
					
				},
				error: function(result) {

                    jQuery('.mensajes-sistema').html(result);
                }
	    	});
	    	return false;
	    }else{
	    	return false;
	    }
	});



});