<?php

class Contenido {



 protected $protected='$y4tus4b3lac00k13';
	/*Funcion para hacer display al contenido*/
	function getContent(){

		//printVar($_COOKIE);
	$session= new manejaSession();
		if(isset($_COOKIE['youth_msj'])){
			
			$mensajeSis=$session->decryptS($_COOKIE['youth_msj'],$protected);
			echo '<div class="mensajes-sistema">'.$mensajeSis.'</div>';
			//printVar($mensajeSis);
		}
		setcookie("youth_urlAnt", base64_encode($_SERVER['REQUEST_URI']),time()+1200, "/");		
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
						//printVar($seccionGet);
					$tituloSeccion=$seccionGet['tituloSeo'];
					$descripcionSeo=$seccionGet['descripcionSeo'];
					
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
					view()->assign("tituloC",$buscaContenido[0]['titulo']);
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
			if(isset($_COOKIE['youth_usu'])){

			//printVar($_COOKIE['youth_usu']);
			//printVar($_COOKIE['youth_fr']);
			//$idUsuario=MyQuerys::devuelvedato($_COOKIE['youth_usu'],'!Y0uth$h4StCryPt');
			$idUser=$session->decryptS($_COOKIE['youth_fr'],$protected);
			//printVar($idUser,'hola');
			$validaD=$session->read($idUser);
			//printVar($validaD,'hola2');
			$porciones = explode("~",$validaD);
			$user=$porciones[0];
			$domain=$porciones[1];
			$constanto=$porciones[3];
			$mail=$porciones[2];
			//printVar($user,'d1');
			//printVar($domain,'d2');
			//printVar($constanto,'d3');


			if($idUser==$user && $domain=='www.jovenesnestle.com.co' && $constanto=="9145" ){
				
				$confPerf=array(
				"conditions" => 'id = '.$idUser,
				);
				$datosUsu=$reusua->getData($confPerf);
				//printVar($datosUsu);
				view()->assign("datosUsu",$datosUsu);
			}else{
				header('location : /');
			}
			
			

			//view()->assign("SeccionCss",$templateCss);
		}else{
			header('location: /');
		}
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

		if(isset($_COOKIE['youth_usu'])){
			$loggeado=1;
		}else{
			$loggeado=0;
		}
		view()->assign('loggueado',$loggeado);
		view()->assign("idSeccion",$mySeccionId);
		view()->assign("titulo",$tituloSeccion);
		view()->assign("descripcionS",$descripcionSeo);
		//printVar($templateInterna);
		view()->display($templateInterna);
	}

	function registro(){

		$ipAccesso=MyQuerys::getRealIP();
		//printVar($ipAccesso);
		//debug(1);
		$reusu= model("LallamaradaRegistro");
		$varPost = filter_input_array(INPUT_POST);
		//printVar($varPost);
		$emailEx=$this->verificaExistenciaE($varPost['email']);
		$documentoEx=$this->verificaExistenciaC($varPost['documento']);
		//printvar($emailEx);
		//printvar($documentoEx);
		if($varPost['password']==$varPost['confirmPass']){
			if($emailEx==''){
				if($documentoEx==''){
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
					$reusu->direccion=$varPost['direccion'];
					$reusu->password=$varPost['password'];
					$reusu->autorizacionMarca=$varPost['terminos'];
					$reusu->ipAccesso=$ipAccesso;
					$reusu->fechaNacimiento=$varPost['nacimiento'];
					$reusu->fecha=date('Y-m-d H:i:s');
					$guardaUsu=$reusu->setInstancia();
					//printVar($guardaUsu);
					echo $guardaUsu;
					//$encri=MyQuerys::encriptado($guardaUsu,'!Y0uth$h4StCryPt');
					//setcookie("youth_usu", base64_encode($encri),time()+1200, "/");
					/*Creación de cookie de ususario*/
					$session= new manejaSession();
					$host=$_SERVER['SERVER_NAME'];
					$dato=$guardaUsu."~".$host.'~'.$varPost['email'].'~9145';
					$creaSession=$session->write($guardaUsu,$dato,$host);
					$createCookie=$session->start_session('youth_usu',true);
					/*Se crea cookie de usuario*/
	   				setcookie('youth_usu', $creaSession, time() + 1200, '/', $secure, $httponly);

	   				/*Id Usuario*/
	   				$datoCookie=$session->encryptS($guardaUsu,$protected);
	   				setcookie('youth_fr',$datoCookie, time() + 1200, '/', $secure, $httponly);
				}else{
					$mensaje="El registro no pudo ser realizado";
					echo json_encode($mensaje);
				}
			}else{
				$mensaje="El registro no pudo ser realizado";
					echo json_encode($mensaje);
			}
		}else{
				$mensaje="El registro no pudo ser realizado";
					echo json_encode($mensaje);
		}
	}
	/*Carga Perfil de usuario*/
	function perfilUsuReg(){
		$reusu= model("LallamaradaRegistro");
		$varPostR = filter_input_array(INPUT_POST);
		$session= new manejaSession();		
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
			

			/*Creación de sessión*/
					
					$host=$_SERVER['SERVER_NAME'];
					$dato=$idUsuario."~".$host.'~'.$user.'~9145';
					//debug(1);
					$creaSession=$session->write($idUsuario,$dato,$host);

					$createCookie=$session->start_session('youth_usu',true);
					/*Se crea cookie de usuario*/
	   				setcookie('youth_usu', $creaSession, time() + 1200, '/', $secure, $httponly);

	   				/*Cookie con id de usuario*/
	   				$datoCookie=$session->encryptS($idUsuario,$protected);
	   				//printVar($datoCookie);
	   				setcookie('youth_fr',$datoCookie, time() + 1200, '/', $secure, $httponly);
				//printVar($_COOKIE);
			//printVar($this->idSession);
			
			/*UrlAnt*/
				$urlAnt=$_COOKIE['youth_urlAnt'];
				if(isset($urlAnt) && $urlAnt!=''){
 				  $urlAnte=base64_decode($urlAnt);
 				   //header("location:$urlAnte");
 				   //echo json_encode($urlAnte);
 				   $mensaje='exitourl';
					//printVar($_SESSION);
 				   $msj=array("mensaje"=>$mensaje,"url"=>$urlAnte);
					echo json_encode($msj);
 				 }else{
 				 	$mensaje='exito';
					//printVar($_SESSION);
					echo json_encode($mensaje);
 				 }

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
		//debug(1);
		$varPostC = filter_input_array(INPUT_POST);
		$idDepto =$varPostC['idDepto'];
		//printVar($idDepto);
		$ciudad =model('LallamaradaCiudad');
		$traeCiudad=array(
					"conditions" => array('idDepto'=>$idDepto),
					'fields' => array('id','nombre')
					);
		$ciudades=$ciudad->getData($traeCiudad);
		//printVar($ciudades);
		echo json_encode($ciudades);

	}
	/*Ruta curso*/
	function cursosHv(){
		//debug(1);
		if(isset($_COOKIE['youth_usu'])){
			$varPost = filter_input_array(INPUT_POST);
			view()->display("cursos/hojavida/index.html");
		}else{
			setcookie("youth_urlAnt", base64_encode($_SERVER['REQUEST_URI']),time()+1200, "/");
			header('location: /#cursos');
		}
		

	}
	function cursosHv1(){
		//debug(1);
		$varPost = filter_input_array(INPUT_POST);
		view()->display("cursos/hojavida/page1.html");

	}
	function cursosHv2(){
		//debug(1);
		$varPost = filter_input_array(INPUT_POST);
		view()->display("cursos/hojavida/page2.html");

	}
	function cursosHv3(){
		//debug(1);
		$varPost = filter_input_array(INPUT_POST);
		view()->display("cursos/hojavida/page3.html");

	}
	function cursosHv4(){
		//debug(1);
		$varPost = filter_input_array(INPUT_POST);
		view()->display("cursos/hojavida/page4.html");

	}
	function cursosHv5(){
		//debug(1);
		$varPost = filter_input_array(INPUT_POST);
		view()->display("cursos/hojavida/page5.html");

	}
	function cursosHv6(){
		//debug(1);
		$varPost = filter_input_array(INPUT_POST);
		view()->display("cursos/hojavida/page6.html");

	}

	function verificaExistenciaE($dato){
		//debug(1);
		$reusuae= model("LallamaradaRegistro");
		$condE=array(
			"conditions" => 'email = '.'"'.$dato.'"',
			'fields' => array('id')
			);
		$exite=$reusuae->getData($condE);
		//printVar($exite[0]['id']);
		if(isset($exite) && $exite!=''){
			
			$existeE=$exite[0]['id'];
		}else{
			
			$existeE="";
		}
		return $existeE;

	}
	function verificaExistenciaC($docu){
		//debug(1);
		$reusuae= model("LallamaradaRegistro");
		$condC=array(
			"conditions" => array('numeroDocumento'=>$docu),
			'fields' => array('id')
			);
		$exiteC=$reusuae->getData($condC);
		//printVar($exiteC[0]['id']);
		if(isset($exiteC) && $exiteC!=''){
			$existeCe=$exiteC[0]['id'];
		}else{
			$existeCe="";
		}
		return $existeCe;

	}
	function login(){
		//debug(3);youth_urlAnt
		$varPostL=filter_input_array(INPUT_POST);
		$reusuae= model("LallamaradaRegistro");
		$tmplo= model("LallamaradaIntentologgin");
		$blockUsu= model("LallamaradaBloqueoUsuario");
		$session= new manejaSession();
		//printVar($varPostL);
		$user=$varPostL['loginUsuario'];
		$pass=$varPostL['loginElingreso'];
		$passw=base64_encode($pass);
		$passw=base64_encode($passw);
		//printVar($passw);
		$userBlock=MyQuerys::userBlock($user);
		$fechaNow=date('Y-m-d H:i:s');

		if($fechaNow>$userBlock){

		

		printVar($userBlock,'bloqk');
		$condC=array(
			"conditions" => 'email = '.'"'.$user.'" AND password="'.$passw.'"',
			'fields' => array('id')
			);
		$log=$reusuae->getData($condC);
		
		//printVar($log[0]['id']);
		if($log[0]['id']!=0){
			$idUsuario=$log[0]['id'];
			if($idUsuario!=''){

					/*Creación de sessión*/
					
					$host=$_SERVER['SERVER_NAME'];
					$dato=$idUsuario."~".$host.'~'.$user.'~9145';
					//debug(1);
					$creaSession=$session->write($idUsuario,$dato,$host);

					$createCookie=$session->start_session('youth_usu',true);
					/*Se crea cookie de usuario*/
	   				setcookie('youth_usu', $creaSession, time() + 1200, '/', $secure, $httponly);

	   				/*Cookie con id de usuario*/
	   				$datoCookie=$session->encryptS($idUsuario,$protected);
	   				//printVar($datoCookie);
	   				setcookie('youth_fr',$datoCookie, time() + 1200, '/', $secure, $httponly);
				//printVar($_COOKIE);
				
				/*UrlAnt*/
				$urlAnt=$_COOKIE['youth_urlAnt'];
				if(isset($urlAnt) && $urlAnt!=''){
					//printVar($urlAnte,'hao');
					//	printVar($urlAnte);
 				  $urlAnte=base64_decode($urlAnt);
 				   //header("location:$urlAnte");
 				   //echo json_encode($urlAnte);
 				 /*  $mensaje='exitourl';
					//printVar($_SESSION);
 				   $msj=array("mensaje"=>$mensaje,"url"=>$urlAnte);
					echo json_encode($msj);*/
					$mensaje='Bienvenido, ingresa a tu <a href="/perfil/">perfil</a>';
					$msjCookie=$session->encryptS($mensaje,$protected);
					setcookie('youth_msj',$msjCookie, time() + 20, '/', $secure, $httponly);
					header("location: $urlAnte");
 				 }else{
 				 	//printVar($urlAnte,'eo');
					header('location: /perfil/');
 				 }
			}
		}else{
			
			/*Acá va la valdiacón de intentos*/
			$cuentaUsu=MyQuerys::cuentaIntentos($user);
			$conteoAttemps=count($cuentaUsu);
			//printVar($conteoAttemps,'conteo');
			//printVar($cuentaUsu);
			if($conteoAttemps<3){
				$ipAccesso=MyQuerys::getRealIP();
				//printVar($ipAccesso);
				//printVar($user);
				$tmplo->usuario=$user;
				$tmplo->ip=$ipAccesso;
				$tmplo->fecha=date('Y-m-d H:i:s');
				$guardaip=$tmplo->setInstancia();
				$mensaje='Lo sentimos, no reconocemos el nombre de usuario o la contrase&ntilde;a';
			}else{
				$mensaje='Lo sentimos, tu usuario ha sido bloqueado';
				$blockUsu->usuario=$user;
				$blockUsu->fechaBloqueo=date('Y-m-d H:i:s');
				$blockUsu->fechaDesbloqueo=date('Y-m-d H:i:s', strtotime('+3 hour'));
				$bloqueaUsu=$blockUsu->setInstancia();

			}
			
			$msjCookie=$session->encryptS($mensaje,$protected);
			setcookie('youth_msj',$msjCookie, time() + 20, '/', $secure, $httponly);
			$urlAnt=$_COOKIE['youth_urlAnt'];
			$urlAnte=base64_decode($urlAnt);
			//printVar($urlAnte,'hola');
			header("location: $urlAnte");
		}

		/*El if*/
		}else{
			$mensaje='Lo sentimos, tu usuario ha sido bloqueado';
			$msjCookie=$session->encryptS($mensaje,$protected);
			setcookie('youth_msj',$msjCookie, time() + 20, '/', $secure, $httponly);
			$urlAnt=$_COOKIE['youth_urlAnt'];
			$urlAnte=base64_decode($urlAnt);
			header("location: $urlAnte");
		}

	}
	function cerrarSession(){
		$session= new manejaSession();
		$usuario=$session->decryptS($_COOKIE['youth_fr'],$protected);
		$destruye=$session->destroy($usuario);
		foreach ($_COOKIE as $key => $value) {
    		unset($value);
    		//var_dump($key);
    		$_COOKIE[$key]="";
    		setcookie($key, null, time() - 3600,'/');
		}
		header('location: /');

	}

	function updateRegistro(){
		$ipAccesso=MyQuerys::getRealIP();
		$varActu=filter_input_array(INPUT_POST);
		//printVar($varActu);
		$campos['id'] = $varActu['idRs'];
		$campos['nombre'] = $varActu['nombres'];
		$campos['apellido'] = $varActu['apellidos'];
		$campos['email'] = $varActu['email'];
		$campos['telefono'] = $varActu['celular'];
		$campos['documento'] = $varActu['documento'];
		$campos['nacimiento'] = $varActu['nacimiento'];
		$campos['idDepto'] = $varActu['depto'];
		$campos['direccion']=$varActu['direccion'];
		$campos['idCiudad'] = $varActu['ciudad'];
		$campos['tipoDocumento'] = $varActu['tipo'];
		$campos['genero'] = $varActu['genero'];
		$campos['ipAccesso'] = $ipAccesso;

		$res = MyQuerys::actulizaInscrito($campos);
		if($res==1){

			$mensaje="Tus datos han sido actualizados";
		}else{
			$mensaje='';
		}
		echo json_encode($mensaje);

	}

	/*Curso Proyecto de vida*/
	/*Ruta curso*/
	function cursosPv(){
		//debug(1);
		if(isset($_COOKIE['youth_usu'])){

			$varPost = filter_input_array(INPUT_POST);
			view()->display("cursos/proyectovida/index.html");
		}else{
			setcookie("youth_urlAnt", base64_encode($_SERVER['REQUEST_URI']),time()+1200, "/");
			header('location: /#cursos');

		}


	}
	function cursosPv1(){
		//debug(1);
		$varPost = filter_input_array(INPUT_POST);
		view()->display("cursos/proyectovida/page1.html");

	}
	function cursosPv2(){
		//debug(1);
		$varPost = filter_input_array(INPUT_POST);
		view()->display("cursos/proyectovida/page2.html");

	}
	function cursosPv3(){
		//debug(1);
		$varPost = filter_input_array(INPUT_POST);
		view()->display("cursos/proyectovida/page3.html");

	}
	function cursosPv4(){
		//debug(1);
		$varPost = filter_input_array(INPUT_POST);
		view()->display("cursos/proyectovida/page4.html");

	}
	function cursosPv5(){
		//debug(1);
		$varPost = filter_input_array(INPUT_POST);
		view()->display("cursos/proyectovida/page5.html");

	}
	function cursosPv6(){
		//debug(1);
		$varPost = filter_input_array(INPUT_POST);
		view()->display("cursos/proyectovida/page6.html");

	}
	/*Curso Entrevista laboral*/
	/*Ruta curso*/
	function cursosEl(){
		//debug(1);
		if(isset($_COOKIE['youth_usu'])){
			$varPost = filter_input_array(INPUT_POST);
			view()->display("cursos/entrevistalaboral/index.html");
		}else{
			setcookie("youth_urlAnt", base64_encode($_SERVER['REQUEST_URI']),time()+1200, "/");
			header('location: /#cursos');
		}
	}
	function cursosEl1(){
		//debug(1);
		$varPost = filter_input_array(INPUT_POST);
		view()->display("cursos/entrevistalaboral/page1.html");

	}
	function cursosEl2(){
		//debug(1);
		$varPost = filter_input_array(INPUT_POST);
		view()->display("cursos/entrevistalaboral/page2.html");

	}
	function cursosEl3(){
		//debug(1);
		$varPost = filter_input_array(INPUT_POST);
		view()->display("cursos/entrevistalaboral/page3.html");

	}
	function cursosEl4(){
		//debug(1);
		$varPost = filter_input_array(INPUT_POST);
		view()->display("cursos/entrevistalaboral/page4.html");

	}
	function cursosEl5(){
		//debug(1);
		$varPost = filter_input_array(INPUT_POST);
		view()->display("cursos/entrevistalaboral/page5.html");

	}
	function cursosEl6(){
		//debug(1);
		$varPost = filter_input_array(INPUT_POST);
		view()->display("cursos/entrevistalaboral/page6.html");

	}

	/*Ruta curso oferta laboral*/
	function cursosOl(){
		//debug(1);
		if(isset($_COOKIE['youth_usu'])){
			$varPost = filter_input_array(INPUT_POST);
			view()->display("cursos/ofertalaboral/index.html");
		}else{
			setcookie("youth_urlAnt", base64_encode($_SERVER['REQUEST_URI']),time()+1200, "/");
			header('location: /#cursos');
		}
	}
	function cursosOl1(){
		//debug(1);
		$varPost = filter_input_array(INPUT_POST);
		view()->display("cursos/ofertalaboral/page1.html");

	}
	function cursosOl2(){
		//debug(1);
		$varPost = filter_input_array(INPUT_POST);
		view()->display("cursos/ofertalaboral/page2.html");

	}
	function cursosOl3(){
		//debug(1);
		$varPost = filter_input_array(INPUT_POST);
		view()->display("cursos/ofertalaboral/page3.html");

	}
	function cursosOl4(){
		//debug(1);
		$varPost = filter_input_array(INPUT_POST);
		view()->display("cursos/ofertalaboral/page4.html");

	}
	function cursosOl5(){
		//debug(1);
		$varPost = filter_input_array(INPUT_POST);
		view()->display("cursos/ofertalaboral/page5.html");

	}
	function cursosOl6(){
		//debug(1);
		$varPost = filter_input_array(INPUT_POST);
		view()->display("cursos/ofertalaboral/page6.html");

	}
	/*Validar captcha jovenes nestlé*/
	function validaCaptcha(){

		$varCap = filter_input_array(INPUT_POST);
		$secret = "6LdUHSATAAAAACQ_lg8hlxNDRmjvyosCfdwsEOD5";
 
		if(isset($varCap['recaptchaResponse']) && !empty($varCap['recaptchaResponse'])){
		     //get verified response data
		     $param = "https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$varCap['recaptchaResponse'];
		     $verifyResponse = file_get_contents($param);
		     $responseData = json_decode($verifyResponse);

		     if($responseData->success){
		         // success
		         echo "validado";
		     }else{
		         // failure
		         echo "Error";
		     }

		 }else{
		     echo "NA";
		 }
	}


	/*Descarga de usuarios*/
	function departamentoReg($idDepto){
		//debug(1);
		//printVar($idDepto,'hola');
		$deptoReg=model('LallamaradaDepartamento');
		$deptoReg-> selectAdd();
		$deptoReg-> selectAdd("nombre");
		$deptoReg-> whereAdd("id=" . $idDepto);
		$deptoReg -> find();
		$deptoReg->fetch();
		$departamentosReg = $deptoReg->nombre;
		return $departamentosReg;
		$deptoReg -> free();
	}
	/*Ciudades registro*/
	function ciudadReg($idCiudad){
		$ciudadR =model('LallamaradaCiudad');
		$ciudadR-> selectAdd();
		$ciudadR-> selectAdd("nombre");
		$ciudadR-> whereAdd("id=" . $idCiudad);
		$ciudadR -> find();
		$ciudadR->fetch();
		$ciudadesReg = $ciudadR->nombre;
		return $ciudadesReg;

	}

	function descargaReporte(){

		$siSirve=$_COOKIE['youth_descarga'];


    	if(isset($siSirve) && $siSirve!=''){
		$registro = model("LallamaradaRegistro");
		$registros = $registro->getData();
			// Create the instance of the exportexcel format
			$excel_obj = new ExportExcel(date('Y-m-d')."JovenesNesle.xls");
			// Setting the values of the headers and data of the excel file
			// and these values comes from the other file which file shows the data
			$excelHeader = array("id",
				"imgPerfil",
				"nombre",
				"apellido",
				"email",
				"telefono",
				"Departamento",
				"Ciudad",
				"Tipo Documento",
				"Documento",
				"genero",
				"direccion",
				"Deseo Informacion",
				"Autorizacion Marca",
				"ipAccesso",
				"fechaNacimiento",
				"fecha");
			if($registros){

				$excelValues = array();
				$conteo=count($registros);
				for( $i=0; $i < $conteo; $i++){
					$excelValues[$i][]= $registros[$i]['id'];
					$excelValues[$i][] = $registros[$i]['imgPerfil'];
					$excelValues[$i][] = $registros[$i]['nombre'];
					$excelValues[$i][] = $registros[$i]['apellido'];
					$excelValues[$i][] = $registros[$i]['email'];
					$excelValues[$i][] = $registros[$i]['telefono'];
					/*Depto Ciudad*/
					$deptoReg=$this->departamentoReg($registros[$i]['idDepto']);
					$ciudadRegU=$this->ciudadReg($registros[$i]['idCiudad']);
					$excelValues[$i][]=utf8_decode($deptoReg);
					$excelValues[$i][]=utf8_decode($ciudadRegU);
					/*F Depto Ciudad*/
					$excelValues[$i][] = $registros[$i]['tipoDocumento'];
					$excelValues[$i][] = $registros[$i]['numeroDocumento'];
					$excelValues[$i][] = $registros[$i]['genero'];
					$excelValues[$i][] = $registros[$i]['direccion'];
					$excelValues[$i][] = $registros[$i]['deseoInformacion'];
					$excelValues[$i][] = $registros[$i]['autorizacionMarca'];
					$excelValues[$i][] = $registros[$i]['ipAccesso'];
					$excelValues[$i][] = $registros[$i]['fechaNacimiento'];
					$excelValues[$i][] = $registros[$i]['fecha'];
				}
				$excel_obj->setHeadersAndValues($excelHeader, $excelValues);
				// Now generate the excel file with the data and headers set
				$excel_obj->GenerateExcelFile();
			}
		}else{
			header('location: https://www.jovenesnestle.com.co/');
		}
	}

	/*Valdia Ingreso*/
	function validaIngresoDescarga(){
		$varPostD = filter_input_array(INPUT_POST);
		$siSirve=$varPostD['validarIngreso'];

		if($siSirve=='toc4h4c3rcl1c3n3st4v41n4'){
		 $encri=MyQuerys::encriptado($siSirve,'!Y0uth$h4StCryPt');
			setcookie("youth_descarga", base64_encode($encri),time()+800, "/");
		 	header('location: https://www.jovenesnestle.com.co/reporte-iniciativa-jovenes/');

		}else{
			header('location: https://www.jovenesnestle.com.co/');
		}
	}


	function testeo(){
		$user="cristian.tangarife@brm.com.co";
		
	}
}