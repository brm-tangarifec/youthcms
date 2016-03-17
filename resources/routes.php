<?php
ini_set('display_errors',1);
$rutaArray=array();
/*$rutaArray["cursos/hojavida/"]="Contenido@cursosHv";
$rutaArray["cursos/hojavida/page1/"]="Contenido@cursosHv1";
$rutaArray["cursos/hojavida/page2/"]="Contenido@cursosHv2";
$rutaArray["cursos/hojavida/page3"]="Contenido@cursosHv3";
$rutaArray["cursos/hojavida/page4/"]="Contenido@cursosHv4";
$rutaArray["cursos/hojavida/page5/"]="Contenido@cursosHv5";
$rutaArray["cursos/hojavida/page6/"]="Contenido@cursosHv6";*/
//printVar($rutaArray);
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
	$ruta=CleanDoor::allClean(strtolower($ruta));
	$mySeccionId=$seccionGet['id'];
	//printVar($mySeccionId);
	$rutaArray[$ruta]="Contenido@getContent";
}
$rutaArray["registroYouth/"]="Contenido@registro";
$rutaArray["registroYouthP/"]="Contenido@perfilUsuReg";

 Moe::routes($rutaArray);
/*Moe::routes(array(
	"/"=>"Seccion@index",
	));*/
?>