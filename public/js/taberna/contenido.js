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
	jQuery('#directorios').change(function(){
		var lacarpeta=jQuery('#directorios').val(),
		urlD='/youth/listaImg/';
		//console.log(lacarpeta);
		jQuery.ajax({
				url : urlD,
				type : 'POST',
				data :
				{
				'carpeta':lacarpeta,
				},
				datatype : "json",
				success : function(data) {
					//console.log(data);
					jQuery('.cargaImages').html(data);
					
				}
			});

			//console.log('no es');
			return false;
	});

	jQuery(document).on('mouseover',function () {
 	 $('[data-toggle="popover"]').popover()
	});

	/*Activar editor de texto en la edición del contenido*/
	jQuery('.titulo-contenido').on('blur',function(){
		//jQuery(this).removeClass('activa-titulo');
		//jQuery(this).addClass('nicEdit-main');
		var tituloN=jQuery(this).html();
		console.log(tituloN);
		//jQuery(this).text('<input type="text" name="titulo" id="titulo" value="'+tituloN+'" class="form-control"/>')

	});

	jQuery('#contenido-editado').click(function(){
		jQuery('#myNicPanel').show('fade');
	});
	jQuery('#contenido-editado').on('blur',function(){
		jQuery('#myNicPanel').hide('fade');
	});
	

	  bkLib.onDomLoaded(function() {

          var myNicEditor = new nicEditor({fullPanel : true});
          myNicEditor.setPanel('myNicPanel');
          myNicEditor.addInstance('contenido-editado');
          fullPanel : true;
          /*myNicEditor.addInstance('myInstance2');
          myNicEditor.addInstance('myInstance3');*/
     });
});


jQuery(document).on('blur','.nicEdit-main',function(){
	var contenidoG=jQuery(this).html();
	var textAreg=jQuery(this).parent().next().attr('id');
	console.log(contenidoG);
	console.log(textAreg);
	jQuery('#'+textAreg).text(contenidoG);

});



