<?php

class CmsContenido {

	/*Hace display a la creación de contenido*/
	function creaContenido($idSeccion){
		//printVar($idSeccion);
		$filtraSeccion = filter_input_array(INPUT_POST);
		//$directorio='images/';
		//$traeImagenes=MyQuerys::traeImagenes($directorio);
		$traeImagenes=MyQuerys::listaDir();
		//printVar($traeImagenes);
		view()->assign("imagenes",$traeImagenes);
		view()->assign("seccion",$filtraSeccion['idSeccion']);
		view()->display("taberna/creaContenido.html");
	}

	/*Agrega los contenidos*/
	function grdContenido(){
		//debug(1);
			$varPost = filter_input_array(INPUT_POST);	
			$newContenido= model('LallamaradaContenido');
			$newSeccion= model('LallamaradaSeccionXContenido');

			$tituloCont=trim(ltrim(rtrim(base64_decode($varPost['tituloCont']))));
			$contentEdit=trim(ltrim(rtrim(base64_decode($varPost['contenidoTexto']))));

			$tituloContC=MyQuerys::limpiaContent($tituloCont);
			$contentEditC=MyQuerys::limpiaContent($contentEdit);

			//die();
			
			$newContenido->titulo=$tituloContC;
			$newContenido->contenido=$contentEditC;
			$newContenido->visible=$varPost['visible'];
			
			$newContenido->fechaInicio=$varPost['fechaInicio'];
			$newContenido->fechaFin=$varPost['fechaFin'];
			$newContenido->fecha=date('Y-m-d H:m:s');
			$newContenido->fechaActualizacion=date('Y-m-d H:m:s');
			$ret=$newContenido->setInstancia();
			$seccion=$varPost['idSeccion'];
			echo json_encode($ret);
			/*Guarda en la tabla contenido por seccion*/
			$newSeccion->idSeccion=$seccion;
			$newSeccion->idContenido=$ret;
			$newSeccion->posicion=$varPost['posicion'];
			$newSeccion->fecha=date('Y-m-d H:m:s');
			$newSeccion->fechaActualizacion=date('Y-m-d H:m:s');
			$secxcont=$newSeccion->setInstancia();

	}
	/*Editar Contenido*/
	function editContenido(){
		//debug(1);
		$filtraSeccion = filter_input_array(INPUT_POST);
		//printVar($filtraSeccion);
		$mySeccionId = $filtraSeccion['idSeccion'];
		$SecXContenido= model('LallamaradaSeccionXContenido');
		$contenido= model('LallamaradaContenido');
		$buscaC=array(
			"conditions" => 'idSeccion = '.$mySeccionId,
			"fields" => array('id,idContenido','posicion'),
			'order' => 'posicion ASC'
			);
		$traeIdContenido=$SecXContenido->getData($buscaC);
		for ($i=0; $i < count($traeIdContenido) ; $i++) { 
			# code...
			if(isset($traeIdContenido[$i]['idContenido'])){

				$idSecXContenido=$traeIdContenido[$i]['id'];
				$idContenido=$traeIdContenido[$i]['idContenido'];
				$posicion=$traeIdContenido[$i]['posicion'];
			}
		}
		/*Trae contenido para edición*/
		$buscaEd=array(
			"conditions"=> 'id ='.$idContenido,
			"fields" => array('id,titulo','contenido','visible','fechaInicio','fechaFin')
			);
		$editaContenido=$contenido->getData($buscaEd);
			$traeImagenes=MyQuerys::listaDir();
		//printVar($traeImagenes);
		view()->assign("imagenes",$traeImagenes);
		/*Fin traida contenido*/
		view()->assign("contenido",$editaContenido);
		view()->assign("idCruce",$idSecXContenido);
		view()->assign("posicion",$posicion);
		view()->assign("seccion",$filtraSeccion['idSeccion']);
		view()->display("taberna/editContenido.html");
	}
	/*Agrega multimedia*/
	function creaMultimedia(){
		//printVar($idSeccion);
		$filtraSeccion = filter_input_array(INPUT_POST);
		$contenido= model('LallamaradaContenido');
			$traeImagenes=MyQuerys::listaDir();
		//printVar($traeImagenes);
		view()->assign("imagenes",$traeImagenes);
		view()->assign("seccion",$filtraSeccion['idSeccion']);
		view()->display("taberna/creaMultimedia.html");
	}

	function grdMultmedia(){
		/*Modelos*/
		//debug(1);
		$newTipoM= model('LallamaradaMultimedia');
		$newUrl= model('LallamaradaUrl');
		$newTXU= model('LallamaradaMultXUrl');
		$newSeccion= model('LallamaradaSeccionXContenido');
		/*Recibe datos de multimedia*/
		$varUrl = filter_input_array(INPUT_POST);

		/*Guardar tipo multimedia*/
		$newTipoM->tipo=$varUrl['tipo'];
		$newTipoM->fecha=date('Y-m-d H:m:s');
		$newTipoM->fechaActualizacion=date('Y-m-d H:m:s');
		$guardaMultimedia=$newTipoM->setInstancia();

		/*Guarda url de la multimedia*/
		/*Revisar desde acá*/
		$generados=array();
		$posicionesGeneradas=array();
		$guardaUlrid=array();
		$guardaUlrids=array();
		if(isset($varUrl['formulario']) && $varUrl['formulario']!=''){
			$generados=$varUrl['formulario'];
			$posicionesGeneradas=$varUrl['formularioposiciones'];
			$descripcionesGeneradas=$varUrl['formulariodescripciones'];
			array_push($generados,$varUrl['inicial']);
			array_push($posicionesGeneradas,$varUrl['posicioni']);
			array_push($descripcionesGeneradas,$varUrl['descripcioni']);
		}else{
			$generados=$varUrl['inicial'];
			$posicionesGeneradas=$varUrl['posicioni'];
			$descripcionesGeneradas=$varUrl['descripcioni'];
		}
		if(isset($generados)){
			/*Se guardan datos generados*/
		
			
			//$tipoMulti=$varUrl['tipo'];
			//printVar($descripcionesGeneradas);
			$mayor=count($descripcionesGeneradas);
			if($mayor>1){
				for ($i=0; $i <count($generados) ; $i++) {
			   		
					//printVar($generados);
					//printVar($descripcionesGeneradas);

			   			$newUrl->url=$generados[$i];
			   			$newUrl->orden=$posicionesGeneradas[$i];
			   			$newUrl->descripcion=trim(ltrim(rtrim(MyQuerys::limpiaContent($descripcionesGeneradas[$i]))));
			   			//$newUrl->descripcion=htmlspecialchars_decode(base64_decode($descripcionesGeneradas[$i]));
			   			//$newUrl->descripcion=trim(ltrim(rtrim(base64_decode(html_entity_decode(htmlspecialchars_decode($descripcionesGeneradas[$i]))))));
						//$newUrl->fechaInicio=$varPost['fechaInicio'];
						//$newUrl->fechaFin=$varPost['fechaFin'];
						$newUrl->fecha=date('Y-m-d H:m:s');
						$newUrl->fechaActualizacion=date('Y-m-d H:m:s');
						if($generados[$i]!=NULL || $generados[$i]!=''){
						$guardaUrl=$newUrl->setInstancia();
						}else{
			   			echo "No hay datos";
			   			}
						array_push($guardaUlrid,$guardaUrl);

			   		/*switch ($tipoMulti) {
			   			case 'G':
			   			# guardar las Galerias
			   			break;
			   			case 'E':
			   			# Guarda contenido estatico imagenes
			   			break;
			   			case 'C':
			   			# Guarda las capsulas
			   			$rutaI="capsula";
			   			$imagenes=$generados[$i];
			   			$copiaImg=subeImagen($imagenes,$rutaI);
			   			printVar($copiaImg);
			   			printVar('Hola, soy una capsula');
			   			die();
			   			$newUrl->url=$generados[$i];
			   			break;
			   			case 'V':
			   			# Cuando el tipo de multimedia es video
			   			
			   			
			   			break;
			   			case 'P':
			   			# code...
			   			break;
			   		}	*/		   		
			   		

			   }
			}else{
				//printVar($generados);
					//printVar($descripcionesGeneradas);

			   			$newUrl->url=$generados;
			   			$newUrl->orden=$posicionesGeneradas;
			   			$newUrl->descripcion=trim(ltrim(rtrim(MyQuerys::limpiaContent($descripcionesGeneradas))));
			   			//$newUrl->descripcion=htmlspecialchars_decode(base64_decode($descripcionesGeneradas));
			   			//$newUrl->descripcion=trim(ltrim(rtrim(base64_decode(html_entity_decode(htmlspecialchars_decode($descripcionesGeneradas))))));
						//$newUrl->fechaInicio=$varPost['fechaInicio'];
						//$newUrl->fechaFin=$varPost['fechaFin'];
						$newUrl->fecha=date('Y-m-d H:m:s');
						$newUrl->fechaActualizacion=date('Y-m-d H:m:s');
						if($generados!=NULL || $generados!=''){
						$guardaUrl=$newUrl->setInstancia();
						}else{
			   			echo "No hay datos";
			   			}
						array_push($guardaUlrid,$guardaUrl);
			}
			   
		}else{
		$newUrl->url=$generados;
		$newUrl->orden=$posicionesGeneradas;
		$newUrl->descripcion=trim(ltrim(rtrim(base64_decode(MyQuerys::limpiaContent($descripcionesGeneradas)))));
		$newUrl->fecha=date('Y-m-d H:m:s');
		$newUrl->fechaActualizacion=date('Y-m-d H:m:s');
		$guardaUrl=$newUrl->setInstancia();
		array_push($guardaUlrid,$guardaUrl);
		}
		
		//die();
		/*Guarda la url x multimedia*/
		if(is_array($guardaUlrid)){

			//printVar($posicionesGeneradas);
			foreach ($guardaUlrid as $idUrl) {
					$newTXU->idMultimedia=$guardaMultimedia;
					$newTXU->idUrl=$idUrl;
					##$newTXU->orden=$posicionesGeneradas;
					$newTXU->fecha=date('Y-m-d H:m:s');
					$newTXU->fechaActualizacion=date('Y-m-d H:m:s');
					
					$idTXM=$newTXU->setInstancia();
					array_push($guardaUlrids,$idTXM);
			}
			
			for ($i=1; $i <count($posicionesGeneradas) ; $i++) {
				$newTXU->idMultimedia=$guardaMultimedia;
				$newTXU->idUrl=$guardaUlrid[$i];
					//printVar($i);
					$newTXU->orden=$posicionesGeneradas[$i];
				$newTXU->fecha=date('Y-m-d H:m:s');
				$newTXU->fechaActualizacion=date('Y-m-d H:m:s');
				$idTXM=$newTXU->setInstancia();
				array_push($guardaUlrids,$idTXM);
				# code...
			}
		}else{
			$newTXU->idMultimedia=$guardaMultimedia;
			$newTXU->idUrl=$guardaUlrid;
			$newTXU->fecha=date('Y-m-d H:m:s');
			$newTXU->fechaActualizacion=date('Y-m-d H:m:s');
			$idTXM=$newTXU->setInstancia();
			array_push($guardaUlrids,$idTXM);
		}
		/*Guarda IDs de multimedia por seccion*/
		if(array($guardaUlrids)){
			
				$newSeccion->idSeccion=$varUrl['idSeccion'];
				$newSeccion->posicion=$varUrl['posicion'];
				$newSeccion->idMultXUrl=$guardaMultimedia;
				$newSeccion->fecha=date('Y-m-d H:m:s');
				$newSeccion->fechaActualizacion=date('Y-m-d H:m:s');
				$secXUrl=$newSeccion->setInstancia();
				
		}
	}


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

	function perfil(){
		$res = model('latabernaPerfiles');
		$res1 = model('latabernaPermisos');
		$res2 = model('latabernaPermisoXTipo');
		$varPost = filter_input_array(INPUT_POST);
		if($varPost != NULL){			
			//Guardar en la tabla Permisos
			$res->descripcion = $varPost['perfil'];
			$res->tipo = $varPost['perfil'];
			$guardaUsu=$res->setInstancia();

			//Guardar en tipo x permiso
			foreach ($varPost['permisos'] as $key => $value) {
				$res2->idTipo = $guardaUsu;
				$res2->idPermiso = $value;
				$guardaPermi=$res2->setInstancia();
			}		
		}

		$daras = $res->getData();
		
		foreach ($daras as $key => $value) {
			$confTi=array(
				"conditions" => 'idTipo = "'.$value['id'].'"',
				"fields" => array('idPermiso'),
			);
			$data = $res2->getData($confTi);

			foreach ($data as $key2 => $value2) {
				$confTi2=array(
					"conditions" => 'id = "'.$value2['idPermiso'].'"',
					"fields" => array('permiso'),
				);
				$dataPermisos[$value['tipo']][] = $res1->getData($confTi2);
			}
		}
		view()->assign("list",$daras);
		view()->assign("permisos",$dataPermisos);
		
		view()->display("taberna/addPerfiles.html");
	}

	function logUser(){
		$varPost = filter_input_array(INPUT_POST);
		if($varPost != NULL){

			$users = model("latabernaUser");
			$confTi=array(
				"conditions" => 'username = "'.$varPost['user'].'"',
				"fields" => array('id','username','idPerfil'),
			);
			$dara = $users->getData($confTi);

			if(isset($dara[0])){ // Si existe el dato post, se manda al template de usuario loggeado, sino vuelve al formulario
				
				/* armo el array con todas las opciones a mostrar en el template*/
				$confi = array();
				$confi['username'] = $dara[0]['username'];
				
				$res = model('latabernaPerfiles');
				$config = array(
					"conditions" => 'id = '.$dara[0]['idPerfil'],
					"fields" => array('tipo'),
				);
				$daras = $res->getData($config);
				$confi['perfil'] = $daras[0]['tipo'];
				$confi['idPerfil'] = $dara[0]['idPerfil'];
				//$confi['items'] = array('item1' => 'item1', 'item2' => 'item2');

				/* Paso el array y pinto con el template */
				view()->assign("confi",$confi);
				view()->display("taberna/logUserAdminTrue.html");

			}else{
				view()->display("taberna/logUserAdmin.html");
			}
		}else{
			view()->display("taberna/logUserAdmin.html");
		}
		
	}

	function user(){
		$res = model('latabernaUser');
		$res2 = model('latabernaPerfiles');
		$guardaUsu=$res->getData();
		
		foreach ($guardaUsu as $key => $value) {
			$con = array(
				"conditions" => 'id = '.$value['idPerfil'],
				"fields" => array('tipo'),
			);
			$guardaUsu2[$value['username']]=$res2->getData($con);
			if(isset($value['nombre'])){
				$guardaUsu2[$value['username']]['nombre'] = $value['nombre'];
			}
			if(isset($value['apellido'])){
				$guardaUsu2[$value['username']]['apellido'] = $value['apellido'];
			}
			if(isset($value['email'])){
				$guardaUsu2[$value['username']]['email'] = $value['email'];
			}	
		}
		view()->assign("confi",$guardaUsu2);
		view()->display("taberna/addUser.html");
	}

	function addUser(){
		$varPost = filter_input_array(INPUT_POST);
		if($varPost != NULL){
			$user = model("latabernaUser");
			$con = array(
				"conditions" => 'username = "'.$varPost['perfil'].'"',
			);
			$resul = $user->getData($con);
			if(isset($resul[0]['username'])){
				view()->assign("mensaje","Error, el nombre de usuario ya esta siento utilizado");
			}else{
				$user->username = $varPost['perfil'];
				$user->idPerfil = $varPost['permisos'];
				$user->nombre = $varPost['nombre'];
				$user->apellido = $varPost['apellido'];
				$user->email = $varPost['email'];
				$guardaPermi=$user->setInstancia();
				view()->assign("mensaje","Usuario creado exitosamente");
			}
		}
		$res = model('latabernaPerfiles');
		$guardaUsu=$res->getData();
		view()->assign("confi",$guardaUsu);
		view()->display("taberna/addUser2.html");
	}

	/*Función para traer las imagenes desde la carpeta imagenes*/
	function imgInterna(){
		$Frecibido=filter_input_array(INPUT_POST);
		//printVar($Frecibido['carpeta']);
		$directorio=$Frecibido['carpeta'];
		$traeImagenes=MyQuerys::traeImagenes($directorio);
		view()->assign('imgDisponible',$traeImagenes);
		view()->display('taberna/listaImages.html');
		//printVar($traeImagenes);
	}


	function editUser(){
		$fir = filter_input_array(INPUT_POST);
		$user = model("latabernaUser");
		$con = array(
			"conditions" => 'username = "'.$fir['user'].'"',
		);
		$resul = $user->getData($con);

		$res2 = model('latabernaPerfiles');
		$allPermision = $res2->getData();

		view()->assign('permision',$allPermision);
		view()->assign('edita',"1");
		view()->assign('info', $resul);
		view()->display("taberna/addUser2.html");
	}

	function editUser2(){
		
		$fir = filter_input_array(INPUT_POST);
		$user = model("latabernaUser");

		$user->username = $fir['perfil'];
		$user->idPerfil = $fir['permisos'];
		$user->nombre = $fir['nombre'];
		$user->apellido = $fir['apellido'];
		$user->email = $fir['email'];

		$result2 = $user->updateInstancia($fir['idP']);
		header('Location: /youth/logUser/user/');
	}

	function editPerfil(){
		$fir = filter_input_array(INPUT_POST);
		$res = model('latabernaPerfiles');
		$res1 = model('latabernaPermisos');
		$res2 = model('latabernaPermisoXTipo');

		$con = array(
			"conditions" => 'tipo = "'.$fir['perfil'].'"',
		);

		$daras = $res->getData($con);
		$dataPermisos = $res1->getData();
		view()->assign("id",$daras);
		view()->assign("list",$daras);
		view()->assign('edita',"1");
		view()->assign('info',$fir);
		view()->assign("permisos",$dataPermisos);
		view()->display("taberna/addPerfiles2.html");
	}

	function editPerfil2(){
		$res = model('latabernaPerfiles');
		$fir = filter_input_array(INPUT_POST);

		$res->descripcion = $fir['perfil'];
		$res->tipo = $fir['perfil'];

		$res2 = model('latabernaPermisoXTipo');
		$con = array(
			"conditions" => 'idTipo = "'.$fir['idP'].'"',
		);
		var_dump($fir);
		exit();

		$result2 = $res->updateInstancia($fir['idP']);
		header('Location: /youth/logUser/perfil/');
	}

	function addPerfil(){
		$res = model('latabernaPerfiles');
		$res1 = model('latabernaPermisos');
		$res2 = model('latabernaPermisoXTipo');
		$guardaUsu=$res->getData();
		$daras = $res->getData();
		$dataPermisos = $res1->getData();
		view()->assign("list",$daras);
		view()->assign("permisos",$dataPermisos);
		view()->display("taberna/addPerfiles2.html");
	}

	/*Actulizar contenido interna*/
	function eupdContenido(){
		$cont=filter_input_array(INPUT_POST);
		//printVar($cont);
		$tituloCont=trim(ltrim(rtrim(base64_decode($cont['tituloCont']))));
		$contentEdit=trim(ltrim(rtrim(base64_decode($cont['contenidoTexto']))));

		$tituloContC=MyQuerys::limpiaContent($tituloCont);
		$contentEditC=MyQuerys::limpiaContent($contentEdit);
			//die();

			$newContenido= model('LallamaradaContenido');
			$newSeccion= model('LallamaradaSeccionXContenido');
			$newContenido->titulo=$tituloContC;
			$newContenido->contenido=$contentEditC;
			
			$newContenido->visible=$cont['visible'];
			
			$newContenido->fechaInicio=$cont['fechaInicio'];
			$newContenido->fechaFin=$cont['fechaFin'];
			//$newContenido->fecha=date('Y-m-d H:m:s');
			$newContenido->fechaActualizacion=date('Y-m-d H:m:s');
			$ret=$newContenido->updateInstancia($cont['idContenido']);
			$seccion=$cont['idSeccion'];
			echo json_encode($ret);
			/*Guarda en la tabla contenido por seccion*/
			$newSeccion->idSeccion=$seccion;
			$newSeccion->idContenido=$ret;
			$newSeccion->posicion=$cont['posicion'];
			//$newSeccion->fecha=date('Y-m-d H:m:s');
			$newSeccion->fechaActualizacion=date('Y-m-d H:m:s');
			$secxcont=$newSeccion->updateInstancia($cont['idCruce']);
	}


	/*Edición de multimedia*/
	function editMultimedia(){
		$newTipoM= model('LallamaradaMultimedia');
		$newUrl= model('LallamaradaUrl');
		$newTXU= model('LallamaradaMultXUrl');
		$newSeccion= model('LallamaradaSeccionXContenido');
		$filtraSeccion = filter_input_array(INPUT_POST);
		$contenido= model('LallamaradaContenido');
			$traeImagenes=MyQuerys::listaDir();
		

		/*Trae las url por sección*/
		$idS=$filtraSeccion['idSeccion'];
		printVar($idS);
		$urlXSec=array(
			'conditions'=> 'idSeccion='.$idS,
			'fields'=> array('idSeccion,idMultXUrl,posicion')
			);
		$urlXS=$newSeccion->getData($urlXSec);
		printVar($urlXS);
		$urlMulti=array();
		foreach ($urlXS as $key => $value) {
			# code...
			array_push($urlMulti,$value['idMultXUrl']);
		}
			printVar($urlMulti,'el array');

		$multimedias = implode(",", $urlMulti);

		$traeUrl=array(
			'conditions'=>'idMultimedia IN ('.$multimedias.')',
			'fields'=>array('idMultimedia,idUrl')
			);
		$idurls=$newTXU->getData($traeUrl);
		printVar($idurls,'idsUr');

		
	}

}