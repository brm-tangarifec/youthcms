/*Guardar contenido nuevo*/
jQuery(document).ready(function(){

jQuery(document).on('click','.ui-icon-save',function(){
		$.base64.utf8encode = true;
		//console.log('hola, soy un click');
		var tituloContT= jQuery('.titulo-contenido').html();
		var contenidohtml= jQuery('.contenido-texto').html();
		var tituloCont=$.base64.btoa(tituloContT);
		var contenidoTexto=$.base64.btoa(contenidohtml);
		var fechaInicio= jQuery('#fechaIni').val();
		var fechaFin= jQuery('#fechaFin').val();
		var visible= jQuery('#visible').val();
		var posicion= jQuery('#posicion').val();
		var idSeccion = jQuery('#idSeccion').val();
		var url="/youth/grdContenido/";
		jQuery.ajax({
				url : url,
				type : 'POST',
				data :
				{
				'tituloCont':tituloCont,
				'contenidoTexto': contenidoTexto,
				'fechaInicio': fechaInicio,
				'fechaFin': fechaFin,
				'visible': visible,
				'posicion': posicion,
				'idSeccion':idSeccion
				},
				datatype : "json",
				success : function(data) {
					if(data>0){
						console.log('entramos');
						jQuery('.limpiar').val('');
						jQuery('.titulo-contenido').text('Ingresa el título');
						jQuery('.contenido-texto').text('Haz click sobre el texto para ingresar un contenido');
						window.location='/youth/admSecciones/';
					}
				}
			});

			//console.log('no es');
			return false;
	

	});

/*Cambia date*/
    
