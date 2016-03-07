<?php

class Contenido {

	

	/*Funcion para hacer display al contenido*/
	function getContent(){
		
		$nombreSeccion=Moe::$myRoute;
		//printVar($idSeccion);
		$seccion = model("LallamaradaSeccion");
		$newContent = model('LallamaradaContenido');
		$newUrl = model('LallamaradaUrl');
		$newMutlXUrl = model('LallamaradaMultXUrl');
		$newSexXContent = model('LallamaradaSeccionXContenido');
		$newTemplate = model('LallamaradaArchivoTemplate');
		$seccions = $seccion->getData();
		foreach ($seccions as $seccionGet) {
				// Cuando el nombre de la ruta es distinta a "/" agrega un / al final
				$ruta=($seccionGet['nombre']=="/") ? $seccionGet['nombre'] : $seccionGet['nombre']."/";
				if (isset($seccionGet['idPadre']) && $seccionGet['idPadre']!=0) {
					$idPadre=$seccionGet['idPadre'];
					do{
						$padre = $seccion->getData(array(
							"fields" => array("id","nombre","idPadre"),
							'conditions'=>array("id"=>$idPadre),
							));
						$ruta= $padre[0]['nombre']."/".$ruta;
						$idPadre=$padre[0]['idPadre'];
			
					}while($idPadre > 0);
				}
				
				$ruta = (substr($ruta, 0, 1)=="/" && strlen($ruta)>1) ? substr($ruta,2) : $ruta ;
				$ruta=CleanDoor::allClean(strtolower($ruta));
				//printVar($ruta);
			if ($ruta==$nombreSeccion) {
				$mySeccionId=$seccionGet['id'];
			}
			}
		

		

		/*Se pasan los parametros de busqueda*/
		$conf=array(
			"conditions" => 'idSeccion = '.$mySeccionId,
			"fields" => array('idContenido','idMultXUrl','posicion'),
			'order' => 'posicion ASC'
			);
		/*Se Obtiene los datos del contenido en la seccion*/
		$traeContenido=$newSexXContent->getData($conf);
		//printVar($mySeccionId);
		//printVar($traeContenido,"este do");

		/*Trae el template asociado a la sección*/
		$confT=array(
			"conditions" => 'idSeccion = '.$mySeccionId,
			"fields" => array('template'),
			);
		$traeTemplate=$newTemplate->getData($confT);
		//printVar($traeTemplate);
		$templateInterna=$traeTemplate[0]['template'];
		
		/*Recorre contenidos por posicion*/
		foreach ($traeContenido as $contenidoOrd) {
			# code...
			//printVar($contenidoOrd['idMultXUrl']);
			$numC=$contenidoOrd['posicion'];

			if(isset($contenidoOrd['idContenido']) && $contenidoOrd['idContenido']!=''){

				//printVar($contenidoOrd);
				$cont=array(
					'conditions'=> 'id ='.$contenidoOrd['idContenido'].' AND visible="S"',
					'fields' => array('titulo','contenido')
					);
				$buscaContenido=$newContent->getData($cont);
				//printVar($buscaContenido[0]);
				view()->assign("titulo",$buscaContenido[0]['titulo']);
				view()->assign('poscicionCon',$numC);
				view()->assign("contenido",$buscaContenido[0]['contenido']);
			}else if(isset($contenidoOrd['idMultXUrl'])){
			
				# code...
				$getIdUrl=array(
					'conditions'=> 'idMultimedia ='.$contenidoOrd['idMultXUrl'],
					'fields' => array('idUrl')
					);
				$buscaUrl=$newMutlXUrl->getData($getIdUrl);
				//printVar(count($buscaUrl));
				$pasaString=array();
				$string = '';
				for ($j=0; $j < count($buscaUrl) ; $j++) { 
					//printVar($buscaUrl[$j]['idUrl']);
					$string.=",".$buscaUrl[$j]['idUrl'];
				}	

				$string = substr($string, 1); // remove leading ","

				//printVar($string);
				
				//debug(1);
				$getUrlC=array(
					'conditions'=> 'id IN ('.$string.')',
					'fields' => array('id','orden','url','descripcion'),
					'order' => 'orden ASC'
					);
				
				$traeDatosUrl=$newUrl->getData($getUrlC);
				$buscaContenidoUrl[$numC]=(count($traeDatosUrl)>0) ? $traeDatosUrl : array() ;
				//view()->assign("contenido",$buscaContenido[0]['contenido']);*/
				
				//$internaD="indexNew.html";

				view()->assign("multimedia",$buscaContenidoUrl);
			}

		}


		/*Trae datos de la tabla contenido*/
		

		view()->assign("idSeccion",$mySeccionId);
		//printVar($internaD);
		view()->display($templateInterna);
	}
}