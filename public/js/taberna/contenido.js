/*Guardar contenido nuevo*/
jQuery.fn.hasAttr = function(name) {  
   return this.attr(name) !== undefined;
};
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
	jQuery('#contenido-editado').click(function(){
		jQuery('#myNicPanel').show('fade');
	});
	jQuery('#contenido-editado').on('blur',function(){
		jQuery('#myNicPanel').hide('fade');
		var contentEdit=jQuery('#contenido-editado').html();
		var contentEditimg=jQuery(contentEdit).find('img');
		var imagesC=jQuery(contentEditimg);

		jQuery(contentEditimg).each(function(){

		})
		console.log(imagesC);
		if(jQuery(contentEditimg).hasAttr('class')) {
        	console.log('true');
        	jQuery(contentEditimg).attr('class');
		 } else {
		     console.log('false');
		     document.querySelectorAll("#contenido-editado > p > img")[0].classList.add('img-responsive');
		     document.querySelectorAll("#contenido-editado > p > img[title]");
		     var altImg=document.querySelector("#contenido-editado > p > img").getAttribute('alt');
		     document.querySelector("#contenido-editado > p > img").setAttribute('title',altImg);
		     
		 }
		
		/*jQuery(contentEdit).each(function(){
			var imagesC=jQuery(contentEdit).find('img');
			console.log(imagesC);
			
		});*/
	});
	

	  bkLib.onDomLoaded(function() {

          var myNicEditor = new nicEditor({fullPanel : true});
          myNicEditor.setPanel('myNicPanel');
          myNicEditor.addInstance('contenido-editado');
          fullPanel : true;
          /*myNicEditor.addInstance('myInstance2');
          myNicEditor.addInstance('myInstance3');*/
     });




	  /*Se guarda el formulario editad*/
	  jQuery(document).on('click','.actContenido',function(){
		$.base64.utf8encode = true;
		//console.log('hola, soy un click');
		var tituloContT= jQuery('.titulo-contenido').text();
		var contenidohtml= jQuery('#contenido-editado').html();
		var tituloCont=$.base64.btoa(tituloContT);
		var contenidoTexto=$.base64.btoa(contenidohtml);
		var fechaInicio= jQuery('#fechaIni').val();
		var fechaFin= jQuery('#fechaFin').val();
		var visible= jQuery('#visible:checked').val();
		var posicion= jQuery('#posicion').val();
		var idSeccion = jQuery('#idSeccion').val();
		var idContenido = jQuery('#idContenido').val();
		var idCruce = jQuery('#idCruce').val();
		var url="/youth/updContenido/";
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
				'idSeccion':idSeccion,
				'idCruce':idCruce,
				'idContenido':idContenido
				},
				datatype : "json",
				success : function(data) {
					console.log(data);
				}
			});

			//console.log('no es');
			return false;
	

	});
	  /*Fin edición*/
});


jQuery(document).on('blur','.nicEdit-main',function(){
	var contenidoG=jQuery(this).html();
	var textAreg=jQuery(this).parent().next().attr('id');
	console.log(contenidoG);
	console.log(textAreg);
	jQuery('#'+textAreg).text(contenidoG);

});



