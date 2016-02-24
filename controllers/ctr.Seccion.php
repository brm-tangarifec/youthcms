<?php

class Seccion {

	function listaSecciones(){

		$seccion = model("LallamaradaSeccion");
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
		view()->assign("seccions",$seccionArray);
		view()->display("taberna/list.html");
	}

	function editaSecciones($idSeccion){
		//printVar($idSeccion);
		
		$seccion = model("LallamaradaSeccion");
		$seccions = $seccion->obtengoSeccion($idSeccion);
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
		$newSeccion->nombre=$varPost['nombSec'];
		$newSeccion->idPadre=$varPost['idPadre'];
		$newSeccion->produccionVisible=$varPost['visible'];
		$newSeccion->mascaraUrl=$varPost['mascUrl'];
		$newSeccion->tituloSeo=$varPost['titleSeo'];
		$newSeccion->descripcionSeo=$varPost['descSeo'];
		$newSeccion->fechaInicio=$varPost['fechaIni'];
		$newSeccion->fechaFin=$varPost['fechaFin'];
		$newSeccion->fecha=date('Y-m-d H:m:s');
		$newSeccion->fechaActualizacion=date('Y-m-d H:m:s');
		$ret=$newSeccion->setInstancia();
		echo $ret;
		//printVar($ret);
	}
}