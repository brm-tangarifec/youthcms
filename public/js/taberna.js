

	jQuery(document).on('click','.glyphicon-pencil',function(){
		var seccion=jQuery(this).data('seccion');
		var urlS="/youth/admEditSecciones/";

		jQuery.ajax({
				url : urlS,
				type : 'POST',
				data : {
					'idSeccion': seccion,
				},
				success : function(data) {

					jQuery('.listaSecciones').hide('fade');
					jQuery('.edicion').html(data).show('fade');
				}
			});

			//console.log('no es');
			return false;

		//window.location='/youth/'+urlS+'/'+seccion	


	});


	jQuery(document).on('click','.agregaSec',function(){
		var datos=jQuery('#agregaSeccion').serialize();
		//console.log(datos);
		var urlSn="/youth/grdSecciones/";

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
		
	

	});

/*Agregar contenido*/
	jQuery(document).on('click','.glyphicon-blackboard',function(){
		var seccionAc=jQuery(this).data('seccion');
		console.log(seccionAc);
		var urlC="/youth/agrContenido/";
		var formCont=jQuery('#listaSeccion-'+seccionAc).attr('action',urlC);

		formCont.submit();
});
	/*Agregar Multimedia*/
	jQuery(document).on('click','.glyphicon-film',function(){
		var seccionAc=jQuery(this).data('seccion');
		console.log(seccionAc);
		var urlC="/youth/agrMultimedia/";
		var formCont=jQuery('#listaSeccion-'+seccionAc).attr('action',urlC);

		formCont.submit();
});