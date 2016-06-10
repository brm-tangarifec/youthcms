/*Guardar contenido nuevo*/
var contar,
	tipoM,
	classT,
	tipo,
	i = 0;

jQuery(document).ready(function(){


	jQuery('.addM').on('click',function(){
		var tipoM = jQuery(this).data('mult');
		
		switch (tipoM) {
			case 'galeria': 
				tipo='G';				
				jQuery('.addM').hide('float');
				jQuery('.'+tipoM).show('float');


				/*Variables para generar campos*/
				jQuery('.'+tipoM+'C').click(function(){
					
					contar=jQuery(this).attr('class');
					classT=jQuery(this).next().attr('class');
					creaCampos(contar,tipoM,classT);

				});

				break;
			case 'estatico':
				tipo='E';				
				jQuery('.addM').hide('float');
				jQuery('.'+tipoM).show('float');

				/*Variables para generar campos*/
				jQuery('.'+tipoM+'C').click(function(){
					
					contar=jQuery(this).attr('class');
					classT=jQuery(this).next().attr('class');
					creaCampos(contar,tipoM,classT);

				});


				break;
			case 'video': 
				tipo='V';
				jQuery('.addM').hide('float');
				jQuery('.'+tipoM).show('float');

				/*Variables para generar campos*/
				jQuery('.'+tipoM+'C').click(function(){
					
					contar=jQuery(this).attr('class');
					classT=jQuery(this).next().attr('class');
					creaCampos(contar,tipoM,classT);

				});

				break;		
			case 'capsula': 
				tipo='C';
				jQuery('.addM').hide('float');
				jQuery('.'+tipoM).show('float');

				/*Variables para generar campos*/
				jQuery('.'+tipoM+'C').click(function(){
					
					contar=jQuery(this).attr('class');
					classT=jQuery(this).next().attr('class');
					creaCampos(contar,tipoM,classT);

				});


				break;
			case 'pdf': 
				tipo='P';
				jQuery('.addM').hide('float');
				jQuery('.'+tipoM).show('float');

				/*Variables para generar campos*/
				jQuery('.'+tipoM+'C').click(function(){
					
					contar=jQuery(this).attr('class');
					classT=jQuery(this).next().attr('class');
					creaCampos(contar,tipoM,classT);

				});


			break;
				
		}

		jQuery('.galeriaGuardar').on('click',function(){
			console.log(tipo);
			
			var idSeccion = jQuery('#idSeccion').val();
			var posicion= jQuery('#posicion').val();
			var form=jQuery(this).parent().attr('id');
			//var datosForm=jQuery('#'+form).serialize();
			var datoGuardari=jQuery('#'+tipoM+'i').val();
			var cuentaCampos=parseInt(jQuery('#'+form+' p').length)
			

			/*Se generan las campos para enviar*/
			var paso;
			var linkG=tipoM+'i';
				var datoGuardar = [];
			for (paso = 1; paso < cuentaCampos; paso++) {
				datoGuardar[paso] = jQuery('#'+linkG+'_'+paso).val();
				//console.log(datoGuardar+' '+paso);
			  // Se ejecuta 5 veces, con valores desde paso desde 0 hasta 4.
			};
			 // console.log(datoGuardar);
			/*Fin variables*/
			var urlM='/youth/grdMultmedia';
			console.log(idSeccion);
			console.log(posicion);
			console.log(datoGuardar);
			jQuery.ajax({
				url : urlM,
				type : 'POST',
				data :
				{
				'inicial':datoGuardari,
				'formulario':datoGuardar,
				'posicion': posicion,
				'idSeccion':idSeccion,
				'tipo':tipo
				},
				datatype : "json",
				success : function(data) {
					console.log(data);
					if(data>0){
						console.log('entramos');
						jQuery('.limpiar').val('');
						/*jQuery('.titulo-contenido').text('Ingresa el título');
						jQuery('.contenido-texto').text('Haz click sobre el texto para ingresar un contenido');
						window.location='/youth/admSecciones/';*/
					}
				}
			});

			//console.log('no es');
			return false;
		});
	});

});

function creaCampos(contar,tipoM,classT){
	
	 var scntDiv = '.'+classT+' form';
 

	var nbIteration = parseInt(jQuery('.'+classT+' > form p').length);
	    

	       jQuery('<p><label for="'+tipoM+'i_'+nbIteration+'"><input type="text" id="'+tipoM+'i_'+nbIteration+'" name="'+tipoM+'i_'+nbIteration+'" data-tipo="'+tipoM+'" placeholder="texto"/></label></p>').appendTo(scntDiv);

	      nbIteration++;

}
	
    
