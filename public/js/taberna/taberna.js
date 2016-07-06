

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
		//console.log(seccionAc);
		var urlC="/youth/agrContenido/";
		var formCont=jQuery('#listaSeccion-'+seccionAc).attr('action',urlC);

		formCont.submit();
});
	/*Agregar Multimedia*/
	jQuery(document).on('click','.glyphicon-film',function(){
		var seccionAc=jQuery(this).data('seccion');
		//console.log(seccionAc);
		var urlC="/youth/agrMultimedia/";
		var formCont=jQuery('#listaSeccion-'+seccionAc).attr('action',urlC);

		formCont.submit();
});

/*Editar Contenido*/
jQuery(document).on('click','.glyphicon-list-alt',function(){
	var seccionAc=jQuery(this).data('seccion');
		//console.log(seccionAc);
		var urlC="/youth/adtContenido/";
		var formCont=jQuery('#listaSeccion-'+seccionAc).attr('action',urlC);

		formCont.submit();
});

<<<<<<< HEAD
/*Editar sección*/

jQuery(document).on('click','#editaS',function(){
	//console.log(jQuery('#descSeo').text());
	var idSeccion=jQuery(this).attr('data-seccion'),
	nobmreS=jQuery('#nombSec').val(),
	idPadre=jQuery('#padre').val(),
	visible=jQuery('input[type="radio"]:checked').val(),
	msacraUrl=jQuery('#mascUrl').val(),
	titleSeo=jQuery('#titleSeo').val(),
	descSeo=jQuery('#descSeo').val(),
	fechaInicio=jQuery('#fechaIni').val(),
	fechaFin=jQuery('#fechaFin').val();
	//console.log(idSeccion);
	var urlSE="/youth/editaSeccion/";

	console.log(idPadre);
	if(idPadre==undefined){
		idPadre==0;
	}

	jQuery.ajax({
		url : urlSE,
		type : 'POST',
		data : {
			'idSeccion':idSeccion,
			'nobmreS':nobmreS,
			'idPadre':idPadre,
			'visible':visible,
			'msacraUrl':msacraUrl,
			'titleSeo':titleSeo,
			'descSeo':descSeo,
			'fechaInicio':fechaInicio,
			'fechaFin':fechaFin
		},
		//datatype : "json",
		async : true,
		success : function(data) {
			//console.log(data);
			if(data==1){
				window.location.reload();
			}
		}
	});
	return false;
});

	/*Editar Multimedia*/
jQuery(document).on('click','.glyphicon-edit',function(){
	var seccionAc=jQuery(this).data('seccion');
	//console.log(seccionAc);
	var urlC="/youth/editMultimedia/";
	var formCont=jQuery('#listaSeccion-'+seccionAc).attr('action',urlC);
	formCont.submit();
=======
/*Editar Usuarios*/
	jQuery(document).on('click','.editarUserHaspe',function(){
		var seccionAc=jQuery(this).data('seccion');
		console.log(seccionAc);
		var urlC="/youth/logUser/user/edit/";
		var formCont=jQuery('#user-'+seccionAc).attr('action',urlC);
		formCont.submit();
});

/*Editar Perfiles*/
	jQuery(document).on('click','.editarPerfilHaspe',function(){
		var seccionAc=jQuery(this).data('seccion');
		console.log(seccionAc);
		var urlC="/youth/logUser/perfil/edit/";
		var formCont=jQuery('#perfil-'+seccionAc).attr('action',urlC);
		formCont.submit();
>>>>>>> 341c74036615e8119323a9b14a6a42fa095d932e
});