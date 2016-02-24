<?php
//ini_set('display_errors',1);

$rutaArray=array();

$rutaArray['admSecciones/'] = "Seccion@listaSecciones";
$rutaArray['admEditSecciones/'] = "Seccion@editaSecciones";
$rutaArray['agrSecciones/'] = "Seccion@agregarSeccion";
$rutaArray['grdSecciones/'] = "Seccion@grdSeccion";
$rutaArray['agrContenido/'] = "Contenido@creaContenido";
$rutaArray['grdContenido/'] = "Contenido@grdContenido";
$rutaArray['agrMultimedia/'] = "Contenido@creaMultimedia";
$rutaArray['grdMultmedia/'] = "Contenido@grdMultmedia";





$seccion = model("LallamaradaSeccion");
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
	$rutaArray[$ruta]="Contenido@getContent";
}
 Moe::routes($rutaArray);
/*Moe::routes(array(
	"/"=>"Seccion@index",
	));*/
?>