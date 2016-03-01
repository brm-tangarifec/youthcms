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
				jQuery('.primerPos').hide('float');
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
				jQuery('.primerPos').hide('float');
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
				jQuery('.primerPos').hide('float');
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
				jQuery('.primerPos').hide('float');
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
				jQuery('.primerPos').hide('float');
				jQuery('.'+tipoM).show('float');

				/*Variables para generar campos*/
				jQuery('.'+tipoM+'C').click(function(){
					
					contar=jQuery(this).attr('class');
					classT=jQuery(this).next().attr('class');
					creaCampos(contar,tipoM,classT);

				});


			break;
				
		}

		jQuery('.galeriaGuardar').on('click',function(e){
			//console.log(tipo);
			$.base64.utf8encode = true;


			
			var idSeccion = jQuery('#idSeccion').val();
			var posicion= jQuery('#posicion').val();
			var form=jQuery(this).parent().attr('id');
			//var datosForm=jQuery('#'+form).serialize();
			var datoGuardari=jQuery('#'+tipoM+'i').val();
			var posicioni=jQuery('#'+tipoM+'posicioni').val();
			var descripcioniT=jQuery('#'+tipoM+'descripcioni').html();
			var descripcioni=$.base64.btoa(descripcioniT);
			var cuentaCampos=parseInt(jQuery('#'+form+' p').length)

			var paso;
			var linkG=tipoM+'i';
			var numpos=tipoM+'posicion';
			var numDesc=tipoM+'Desc';
			var datoGuardar = [];
			var psocionG = [];
			var descipcionG = [];
			//Recirre los campos generados y los envía
			for (paso = 1; paso < cuentaCampos; paso++) {
				datoGuardar[paso] = jQuery('#'+linkG+'_'+paso).val();
				psocionG[paso] = jQuery('#'+numpos+paso).val();
				descipcionG[paso] = $.base64.btoa(jQuery('#'+numDesc+paso).html());
			};
			/*Fin variables*/
			/*Hace requerido los campos*/
				
				var idFormValidation = form;
				

				/*Se generan las campos para enviar*/
			if(datoGuardari!='' && posicioni!=''){
				var urlM='/youth/grdMultmedia/';
				//var urlM='';

					jQuery.ajax({
						url : urlM,
						type : 'POST',
						data :
						{
						'inicial':datoGuardari,
						'posicioni': posicioni,
						'descripcioni': descripcioni,
						'formulario':datoGuardar,
						'formularioposiciones':psocionG,
						'formulariodescripciones': descipcionG,
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
				
			}else{

				jQuery('#'+idFormValidation+' input').each(function(){
					
					jQuery(this).after( "<p>El campo no debe estar vacío</p>" );
				});
			}
			return false;	
			

		});
	});

});
	

/*Subir pdfs*/

/*Creación de iframes de video*/
//jQuery('.iframegeneraVideoO').bind("change paste keyup", function() {
jQuery(document).on("change",'.iframegeneraVideoO', function() {

   var idInput=jQuery(this).attr('id');
   var valor=jQuery(this).val();
   crearDivsVideo(idInput,valor);

   
});
function creaCampos(contar,tipoM,classT){
	
	 var scntDiv = '.'+classT+' form';
 

	var nbIteration = parseInt(jQuery('.'+classT+' > form p').length);
	if(tipoM=='video'){

	       jQuery('<p><label for="'+tipoM+'i_'+nbIteration+'"><input type="text" id="'+tipoM+'i_'+nbIteration+'" name="'+tipoM+'i_'+nbIteration+'" class="iframegeneraVideoO form-control" data-tipo="'+tipoM+'" placeholder="texto" required/></label><label for="'+tipoM+'posicion'+nbIteration+'"><input type="number" class="form-control" id="'+tipoM+'posicion'+nbIteration+'" name="'+tipoM+'posicion'+nbIteration+'" maxlength="2" size="2" min="1" max="10" placeholder="posicion" required /></label><textarea id="'+tipoM+'Desc'+nbIteration+'" class="form-control" name="'+tipoM+'Desc'+nbIteration+'"></textarea></p>').appendTo(scntDiv);
	}else if(tipoM=='galeria'){
		jQuery('<p><label for="'+tipoM+'i_'+nbIteration+'"><input type="text" id="'+tipoM+'i_'+nbIteration+'" name="'+tipoM+'i_'+nbIteration+'" class="iframegeneraVideoO form-control" data-tipo="'+tipoM+'" placeholder="texto" required/></label><label for="'+tipoM+'i_'+nbIteration+'"><input type="number" class="form-control" id="'+tipoM+'posicion'+nbIteration+'" name="'+tipoM+'posicion'+nbIteration+'" maxlength="2" size="2" min="1" max="10" placeholder="posicion" required /></label><textarea id="'+tipoM+'Desc'+nbIteration+'" class="form-control" name="'+tipoM+'Desc'+nbIteration+'"></textarea></p>').appendTo(scntDiv);
	}else if(tipoM=='estatico'){
		jQuery('<p><label for="'+tipoM+'i_'+nbIteration+'"><input type="text" id="'+tipoM+'i_'+nbIteration+'" name="'+tipoM+'i_'+nbIteration+'" class="iframegeneraVideoO form-control" data-tipo="'+tipoM+'" placeholder="texto" required/></label><label for="'+tipoM+'i_'+nbIteration+'"><input type="number" class="form-control" id="'+tipoM+'posicion'+nbIteration+'" name="'+tipoM+'posicion'+nbIteration+'" maxlength="2" size="2" min="1" max="10" placeholder="posicion" required /></label><textarea id="'+tipoM+'Desc'+nbIteration+'" class="form-control" name="'+tipoM+'Desc'+nbIteration+'"></textarea></p>').appendTo(scntDiv);
		
	}else if(tipoM=='capsula'){
		jQuery('<p><label for="'+tipoM+'i_'+nbIteration+'"><input type="text" id="'+tipoM+'i_'+nbIteration+'" name="'+tipoM+'i_'+nbIteration+'" class="iframegeneraVideoO form-control" data-tipo="'+tipoM+'" placeholder="texto" required/></label><label for="'+tipoM+'i_'+nbIteration+'"><input type="number" class="form-control" id="'+tipoM+'posicion'+nbIteration+'" name="'+tipoM+'posicion'+nbIteration+'" maxlength="2" size="2" min="1" max="10" placeholder="posicion" required /></label><textarea id="'+tipoM+'Desc'+nbIteration+'" class="form-control" name="'+tipoM+'Desc'+nbIteration+'"></textarea></p>').appendTo(scntDiv);
		
	}else if(tipoM=='pdf'){
		jQuery('<p><label for="'+tipoM+'i_'+nbIteration+'"><input type="text" id="'+tipoM+'i_'+nbIteration+'" name="'+tipoM+'i_'+nbIteration+'" class="pdfUpload form-control" data-tipo="'+tipoM+'" placeholder="texto" required/></label><label for="pdf'+tipoM+'i_'+nbIteration+'"><input type="number" id="'+tipoM+'posicion'+nbIteration+'" name="'+tipoM+'posicion'+nbIteration+'" maxlength="2" class="form-control" size="2" min="1" max="10" placeholder="posicion" required /></label><textarea id="'+tipoM+'Desc'+nbIteration+'" class="form-control" name="'+tipoM+'Desc'+nbIteration+'"></textarea></p>').appendTo(scntDiv);
		
	}

		area = new nicEditor({fullPanel : true,onSave : function(content, id, instance) {
    alert('save button clicked for element '+id+' = '+content);
  } }).panelInstance(tipoM+'Desc'+nbIteration);
	      nbIteration++;


}
	
function crearDivsVideo(idInput,valor){	
   if(valor!=""){
   	jQuery('.iframegeneraVideo').append('<div id="iframegeneraVideoi_'+idInput+'"><iframe src="https://www.youtube.com/embed/'+valor+'" frameborder="0" class="embed-responsive-item"></iframe></div>');
   }else{
   	jQuery('#iframegeneraVideoi_'+idInput).remove();

   }
}


bkLib.onDomLoaded(function() { 
	nicEditors.allTextAreas({fullPanel : true, onSave : function(content, id, instance) {
    console.log(jQuery(this).attr('class'));
    alert('save button clicked for element '+id+' = '+content);
  }}) 
});

jQuery(document).on('blur','.nicEdit-main',function(){
	var contenidoG=jQuery(this).html();
	var textAreg=jQuery(this).parent().next().attr('id');
	console.log(contenidoG);
	console.log(textAreg);
	jQuery('#'+textAreg).text(contenidoG);

});