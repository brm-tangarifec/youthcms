/*Guardar contenido nuevo*/
jQuery(document).ready(function(){

jQuery(document).on('click','.ui-icon-save',function(){
		$.base64.utf8encode = true;
		//console.log('hola, soy un click');
		var tituloCont= jQuery('.titulo-contenido').text();
		var contenidohtml= jQuery('.contenido-texto').html();
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

	
	jQuery(function($) {
		$('.contenidoEditable').raptor({
		"plugins": {
		    dock: {                  // Dock specific plugin options
	            docked: true,        // Start the editor already docked
	            dockToElement: true, // Dock the editor inplace of the element
	            persist: false,      // Do not save the docked state
	            unsavedEditWarning: false,
	        },
		    classMenu: {
		        "classes": {
		            "Blue background": "cms-blue-bg",
		            "Round corners": "cms-round-corners",
		            "Indent and center": "cms-indent-center"
		        }
		    },
		}
		});
	});

	jQuery('#directorios').change(function(){
		var lacarpeta=jQuery('#directorios').val(),
		urlD='/youth/listaImg/';
		console.log(lacarpeta);
		jQuery.ajax({
				url : urlD,
				type : 'POST',
				data :
				{
				'carpeta':lacarpeta,
				},
				datatype : "json",
				success : function(data) {
					console.log(data);
					jQuery('.cargaImages').html(data);
					
				}
			});

			//console.log('no es');
			return false;
	});

	jQuery(document).on('mouseover',function () {
 	 $('[data-toggle="popover"]').popover()
	});
});
	
    
