

	jQuery(document).on('click','.glyphicon-pencil',function(){
		var seccion=jQuery(this).data('seccion');
		var urlS="/youth/admEditSecciones/";

		editaSeccion(seccion,urlS);
		


	});
	/*Agregar contenido*/
	jQuery(document).on('click','.glyphicon-blackboard',function(){
		var seccionAc=jQuery(this).data('seccion');
		//console.log(seccion);
		var urlC="/youth/agrContenido/";

		creaContenido(seccionAc,urlC);
		
	

	});

	jQuery(document).on('click','.agregaSec',function(){
		var datos=jQuery('#agregaSeccion').serialize();
		//console.log(datos);
		var urlSn="/youth/grdSecciones/";

		creaSeccion(datos,urlSn);
		
	

	});
	/*Guardar contenido nuevo*/
	jQuery(document).on('click','.ui-icon-save',function(){
		$.base64.utf8encode = true;
		
		var tituloCont= jQuery('.titulo-contenido').text();
		var contenidohtml= jQuery('.contenido-texto').html();
		var contenidoTexto=$.base64.btoa(contenidohtml);
		var fechaInicio= jQuery('#fechaIni').val();
		var fechaFin= jQuery('#fechaFin').val();
		var visible= jQuery('#visible').val();
		var idSeccion = jQuery('#idSeccion').val();
		var urlGc="/youth/grdContenido/";

		guardaCotenidio(tituloCont,contenidoTexto,fechaInicio,fechaFin,visible,idSeccion,urlGc);
		
	

	});

function editaSeccion(seccion,urlS){
	console.log(seccion);
	jQuery.ajax({
				url : urlS,
				type : 'POST',
				data : {
					'idSeccion': seccion,
				},
				success : function(data) {
					console.log(data);
					jQuery('.listaSecciones').hide('fade');
					jQuery('.edicion').html(data).show('fade');
				}
			});

			//console.log('no es');
			return false;

		//window.location='/youth/'+urlS+'/'+seccion
}

function creaContenido(seccionAc,urlC){
	//window.location='/youth/agrContenido';
	jQuery.ajax({
				url : urlC,
				type : 'POST',
				data : {
					'idSeccion': seccionAc,
				},
				datatype : "json",
				//async : false,
				success : function(data) {
					//console.log(data);
					window.location='/youth/agrContenido/';
					activaEdit();
				}
			});

			//console.log('no es');
			return false;
}

function creaSeccion(datos,urlSn){
	jQuery.ajax({
				url : urlSn,
				type : 'POST',
				data : datos,
				//datatype : "json",
				async : true,
				success : function(data) {
					
					if(data>0){
						jQuery('.limpiar').val('');
						window.location='/youth/admSecciones/';
					}
				}
			});

			//console.log('no es');
			return false;
}

function guardaCotenidio(tituloCont,contenidoTexto,fechaInicio,fechaFin,visible,idSeccion,urlGc){
	jQuery.ajax({
				url : urlGc,
				type : 'POST',
				data :
				{
				'tituloCont':tituloCont,
				'contenidoTexto': contenidoTexto,
				'fechaInicio': fechaInicio,
				'fechaFin': fechaFin,
				'visible': visible,
				'idSeccion':idSeccion
				},
				datatype : "json",
				success : function(data) {
					if(data>0){
						jQuery('.limpiar').val('');
						window.location='/youth/admSecciones/';
					}
				}
			});

			//console.log('no es');
			return false;
}