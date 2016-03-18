<?php

class Contenido {

private $idSession='';
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
		$reusua= model("LallamaradaRegistro");
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

			//printVar($mySeccionId);
			/*Trae el template asociado a la sección*/
			$confT=array(
				"conditions" => 'idSeccion = '.$mySeccionId,
				"fields" => array('urlCss','urlJs','template'),
				);
			$traeTemplate=$newTemplate->getData($confT);
			$templateCss=array();
			$templateJs=array();
			//printVar($traeTemplate);
			$templateInterna=$traeTemplate[0]['template'];
			if(isset($traeTemplate[0]['urlCss'])){
				
				$tCss=count($traeTemplate);
				for ($css=0; $css < $tCss ; $css++) { 
					# code...
					//printVar($traeTemplate[$css]['urlCss']);
					array_push($templateCss,$traeTemplate[$css]['urlCss']);
				
				}
			}
			if(isset($traeTemplate[0]['urlJs'])){
				$jss=count($traeTemplate);
				for ($js=0; $js < $jss; $js++) { 
					# code...
					array_push($templateJs,$traeTemplate[$js]['urlJs']);
				}
			}
		/*Carga de la interna de registro*/
		if($mySeccionId!='18' || $mySeccionId!='19'){
			
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
					$conteo=count($buscaUrl);
					//printVar($buscaUrl);
					$string=implode(',', array_map(function ($input) {
					return $input['idUrl'];
					}, $buscaUrl));
					//printVar($string);
					//die();
					//$string = substr($string, 1); // remove leading ","

					//printVar($string);
					
					//debug(1);
					$getUrlC=array(
						'conditions'=> 'id IN ('.$string.')',
						'fields' => array('id','orden','url','descripcion','link'),
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
			if($mySeccionId=='6'){
				header('location: /');
				
			}
		}
		/*Trae datos de usuario*/
		if($mySeccionId=='19'){
			//sprintVar($_COOKIE['youth_usu']);
			$idUsuario=MyQuerys::devuelvedato($_COOKIE['youth_usu'],'!Y0uth$h4StCryPt');
			//printVar($idUsuario);
			if(isset($idUsuario) && $idUsuario!=''){
				$confPerf=array(
				"conditions" => 'id = '.$idUsuario,
				);
				$datosUsu=$reusua->getData($confPerf);
				//printVar($datosUsu);
				view()->assign("datosUsu",$datosUsu);

			}

			//view()->assign("SeccionCss",$templateCss);
		}
		if($mySeccionId=='18' || $mySeccionId=='19'){
			$departamentos=$this->departamento();
			//printVar($departamentos);
			view()->assign('deptos',$departamentos);
		}

		if($templateCss!='' && isset($templateCss)){
			view()->assign("SeccionCss",$templateCss);
		}

		if(isset($templateJs)){
			view()->assign("SeccionJs",$templateJs);
		}

		view()->assign("idSeccion",$mySeccionId);
		//printVar($internaD);
		view()->display($templateInterna);
	}

	function registro(){
		//debug(1);
		$reusu= model("LallamaradaRegistro");
		$varPost = filter_input_array(INPUT_POST);
		printVar($varPost);
		if($varPost['rs']=='fb'){
			$reusu->idFacebook=$varPost['idRs'];
		}else{
			$reusu->idGoogle=$varPost['idRs'];
		}
		$reusu->imgPerfil=$varPost['imgPer'];
		$reusu->nombre=$varPost['nombres'];
		$reusu->apellido=$varPost['apellidos'];
		$reusu->email=$varPost['email'];
		$reusu->telefono=$varPost['celular'];
		$reusu->idDepto=$varPost['depto'];
		$reusu->idCiudad=$varPost['ciudad'];
		$reusu->tipoDocumento=$varPost['tipo'];
		$reusu->numeroDocumento=$varPost['documento'];
		$reusu->genero=$varPost['genero'];
		$reusu->autorizacionMarca=$varPost['terminos'];
		//$reusu->ipAccesso;
		$reusu->fechaNacimiento=$varPost['nacimiento'];
		$reusu->fecha=date('Y-m-d H:i:s');
		$guardaUsu=$reusu->setInstancia();
		printVar($guardaUsu);
	}
	/*Carga Perfil de usuario*/
	function perfilUsuReg(){
		$reusu= model("LallamaradaRegistro");
		$varPostR = filter_input_array(INPUT_POST);
		
			/*Se Obtiene los datos del contenido en la seccion*/
			
		if($varPostR['rrs']=='fb'){
			$confPer=array(
					"conditions" => 'idFacebook = '.$varPostR['revisaIdRs'],
					'fields' => array('id')
					);
		}else{
			$confPer=array(
				"conditions" => 'idGoogle = '.$varPostR['revisaIdRs'],
				'fields' => array('id')
				);
		}
		$traeUsu=$reusu->getData($confPer);
		$idUsuario=$traeUsu[0]['id'];
		if($idUsuario!=''){
			$encri=MyQuerys::encriptado($idUsuario,'!Y0uth$h4StCryPt');
			setcookie("youth_usu", base64_encode($encri),time()+1200, "/");
			//printVar($this->idSession);
			echo $idUsuario;
			//printVar($_SESSION);

		}

	}
	/*Perfil de usuario*/
	function cargaIdUsuario($mySeccionId){
		$reusua= model("LallamaradaRegistro");
		if($mySeccionId=='19'){
			if(isset($_SESSION['usuario']) && $_SESSION['usuario']!=''){
				$confPerf=array(
				"conditions" => 'id = '.$_SESSION['usuario'],
				);
				$datosUsu=$reusua->getData($confPerf);
				return $datosUsu;
				//printVar($datosUsu);

			}
		}
	}

	/*Traer departamentos*/
	function departamento(){
		$depto =model('LallamaradaDepartamento');
		$departamentos=$depto->getData();
		return $departamentos;
	}
	/*Ciudades*/
	function ciudad(){
		$varPostC = filter_input_array(INPUT_POST);
		$idDepto =$varPostC['idDepto'];
		$ciudad =model('LallamaradaCiudad');
		$traeCiudad=array(
					"conditions" => 'idDepto = '.$idDepto,
					'fields' => array('id','nombre')
					);
		$ciudades=$ciudad->getData($traeCiudad);
		//printVar($ciudades);
		echo json_encode($ciudades);

	}
	/*Ruta curso*/
	function cursosHv(){
		//debug(1);
		$varPost = filter_input_array(INPUT_POST);
		view()->display("cursos/hojaVida/index.html");

	}
	function cursosHv1(){
		//debug(1);
		$varPost = filter_input_array(INPUT_POST);
		view()->display("cursos/hojaVida/page1.html");

	}
	function cursosHv2(){
		//debug(1);
		$varPost = filter_input_array(INPUT_POST);
		view()->display("cursos/hojaVida/page2.html");

	}
	function cursosHv3(){
		//debug(1);
		$varPost = filter_input_array(INPUT_POST);
		view()->display("cursos/hojaVida/page3.html");

	}
	function cursosHv4(){
		//debug(1);
		$varPost = filter_input_array(INPUT_POST);
		view()->display("cursos/hojaVida/page4.html");

	}
	function cursosHv5(){
		//debug(1);
		$varPost = filter_input_array(INPUT_POST);
		view()->display("cursos/hojaVida/page5.html");

	}
	function cursosHv6(){
		//debug(1);
		$varPost = filter_input_array(INPUT_POST);
		view()->display("cursos/hojaVida/page6.html");

	}

}