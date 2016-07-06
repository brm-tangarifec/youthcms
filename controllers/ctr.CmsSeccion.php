<?php

class CmsSeccion {

	function listaSecciones(){

		$seccion = model("LallamaradaSeccion");
		$SecXCont = model("LallamaradaSeccionXContenido");
		$seccions = $seccion->getData();
		$seccionArray=array();
		foreach ($seccions as $key) {
			if(isset($key['idPadre'])){
				$conf=array(
				"fields" => array("nombre"),
				'conditions'=>array("id"=>$key['idPadre']),
				);
			}
			
			$padre = $seccion->getData($conf);
			//printVar($padre);
			$key['nombrePadre']=(count($padre)>0) ? $padre[0]['nombre'] : '';
			array_push($seccionArray, $key);
		}
		
		//printVar($seccionArray);
		/*for ($i=0; $i <count($seccionArray) ; $i++) { 
			# code...
			$contenido=$seccionArray[$i]['id'];
			printVar($contenido);
		}*/
		//view()->assign('contenido',$contenido);
		//printVar($seccionArray);
		view()->assign("seccions",$seccionArray);
		view()->display("taberna/list.html");
	}

	function editaSecciones($idSeccion){
		//printVar($idSeccion);
		
		$seccion = model("LallamaradaSeccion");
		$seccions = $seccion->obtengoSeccion($idSeccion);
		//printVar($seccions);
		$idPadre=$seccions[0]->idPadre[0]->id;
		//printVar($idPadre);
		$seccionP = $this->listaSeccionesPadre($idSeccion);
		/*$seccionG = $this->listaAbuelos($idSeccion,$idPadre);
		$seccionP = $this->listaPadres($idSeccion,$seccionG);*/
		//printVar($seccionP);
		/*Llama lista de padres*/

		view()->assign("tienePadre",$idPadre);
		view()->assign("padres",$seccionP);
		view()->assign("seccion",$seccions);
		view()->display("taberna/edit.html");
	}

	function agregarSeccion(){
		$idPadre=0;
		$seccion= model('LallamaradaSeccion');
		$conf=array(
			"conditions" => 'id <> '.$idPadre,
			"fields" => array('id,nombre')
			);
		$res = $seccion->getData($conf);
		//printVar($res);
		view()->assign("padre",$res);
		view()->display("taberna/insert.html");
	}

	function grdSeccion($secciones){
		//debug(1);
		$varPost = filter_input_array(INPUT_POST);
		//printVar($varPost);
		$newSeccion= model('LallamaradaSeccion');
		$newSeccion->nombre=MyQuerys::limpiaContent($varPost['nombSec']);
		$newSeccion->idPadre=$varPost['idPadre'];
		$newSeccion->produccionVisible=$varPost['visible'];
		$newSeccion->mascaraUrl=$varPost['mascUrl'];
		$newSeccion->tituloSeo=MyQuerys::limpiaContent($varPost['titleSeo']);
		$newSeccion->descripcionSeo=MyQuerys::limpiaContent($varPost['descSeo']);
		$newSeccion->fechaInicio=$varPost['fechaIni'];
		$newSeccion->fechaFin=$varPost['fechaFin'];
		$newSeccion->fecha=date('Y-m-d H:m:s');
		$newSeccion->fechaActualizacion=date('Y-m-d H:m:s');
		$ret=$newSeccion->setInstancia();
		echo $ret;
		//printVar($ret);
	}

	function editSeccion(){
		//debug(1);
		$newSeccion= model('LallamaradaSeccion');
		$fitlraS = filter_input_array(INPUT_POST);
		//printVar($fitlraS);
		$idSeccion=$fitlraS['idSeccion'];
    	$nombreS=$fitlraS['nobmreS'];
    	$idPadre=$fitlraS['idPadre'];
    	$visible=$fitlraS['visible'];
    	$mascUrl=$fitlraS['msacraUrl'];
    	$titleSeo=$fitlraS['titleSeo'];
    	$descSeo=$fitlraS['descSeo'];
    	$fechaInicio=$fitlraS['fechaInicio'];
    	$fechaFin=$fitlraS['fechaFin'];
    	$varPost = filter_input_array(INPUT_POST);
		//printVar($varPost);
		
		$newSeccion->nombre=MyQuerys::limpiaContent($nombreS);
		$newSeccion->idPadre=$idPadre;
		$newSeccion->produccionVisible=$visible;
		$newSeccion->mascaraUrl=$mascUrl;
		$newSeccion->tituloSeo=MyQuerys::limpiaContent($titleSeo);
		$newSeccion->descripcionSeo=MyQuerys::limpiaContent($descSeo);
		$newSeccion->fechaInicio=$fechaInicio;
		$newSeccion->fechaFin=$fechaFin;
		//$newSeccion->fecha=date('Y-m-d H:m:s');
		$newSeccion->fechaActualizacion=date('Y-m-d H:m:s');
		$ret=$newSeccion->updateInstancia($idSeccion);
		echo $ret;
		//printVar($ret);
	}

	/*Función para llamar los datos de la sección de los padres*/
	function listaPadres($idSeccion,$abuello){
		//debug(1);
		//printVar($abuello);
		$listado = implode(",", $abuello);
		//printVar($listado);
		$idS=$idSeccion['idSeccion'];
		$newSeccion= model('LallamaradaSeccion');
		$conf=array(
			'conditions' => 'id NOT IN ('.$idS.','.$listado.')',
			'fields' => array('id')
			);
		$res = $newSeccion->getData($conf);
		return $res;
	}

	/*Función para llamar las secciones*/
	function listaSeccionesPadre($idSeccion){
		$idS=$idSeccion['idSeccion'];
		$newSeccion= model('LallamaradaSeccion');
		$conf=array(
			'conditions' => 'id NOT IN (0,'.$idS.')',
			'fields' => array('id,nombre')
			);
		$res = $newSeccion->getData($conf);
		return $res;
	}

	/*Función para traer los padres*/
	function listaAbuelos($idSeccion,$idPadre){
		//debug(1);
		//printVar($idSeccion['idSeccion']);
		//printVar($idPadre);
		$idS=$idSeccion['idSeccion'];
		$newSeccion= model('LallamaradaSeccion');
		$abuello=array();
		$abuelo=array(
			'conditions' => 'id NOT IN (0,'.$idS.','.$idPadre.')',
			'fields' => array('id')
			);
		$rabuelo=$newSeccion->getData($abuelo);
		array_push($abuello, $idPadre);
		
		do{
			$buscaP=array(
				'conditions'=>'id <> 0 AND id='.$idPadre,
				'fields' => array('idPadre')
				);
			$bisabuelo=$newSeccion->getData($buscaP);
			$idPadre=$bisabuelo[0]['idPadre'];
			array_push($abuello, $idPadre);
		}
		while ($idPadre!=0);

		//printVar($abuello,'los abuelos');
		return $abuello;
	}
}