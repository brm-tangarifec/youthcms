<?php
//ini_set('display_errors',0);
$rutaArray=array();
/*Curso hoja de vida*/
$rutaArray["cursos/hojavida/"]="Contenido@cursosHv";
$rutaArray["cursos/hojavida/page1/"]="Contenido@cursosHv1";
$rutaArray["cursos/hojavida/page2/"]="Contenido@cursosHv2";
$rutaArray["cursos/hojavida/page3/"]="Contenido@cursosHv3";
$rutaArray["cursos/hojavida/page4/"]="Contenido@cursosHv4";
$rutaArray["cursos/hojavida/page5/"]="Contenido@cursosHv5";
$rutaArray["cursos/hojavida/page6/"]="Contenido@cursosHv6";
/*Curso proyecto de vida*/
$rutaArray["cursos/proyectovida/"]="Contenido@cursosPv";
$rutaArray["cursos/proyectovida/page1/"]="Contenido@cursosPv1";
$rutaArray["cursos/proyectovida/page2/"]="Contenido@cursosPv2";
$rutaArray["cursos/proyectovida/page3/"]="Contenido@cursosPv3";
$rutaArray["cursos/proyectovida/page4/"]="Contenido@cursosPv4";
$rutaArray["cursos/proyectovida/page5/"]="Contenido@cursosPv5";
$rutaArray["cursos/proyectovida/page6/"]="Contenido@cursosPv6";
/*Curso entrevista laboral*/
$rutaArray["cursos/entrevistalaboral/"]="Contenido@cursosEl";
$rutaArray["cursos/entrevistalaboral/page1/"]="Contenido@cursosEl1";
$rutaArray["cursos/entrevistalaboral/page2/"]="Contenido@cursosEl2";
$rutaArray["cursos/entrevistalaboral/page3/"]="Contenido@cursosEl3";
$rutaArray["cursos/entrevistalaboral/page4/"]="Contenido@cursosEl4";
$rutaArray["cursos/entrevistalaboral/page5/"]="Contenido@cursosEl5";
$rutaArray["cursos/entrevistalaboral/page6/"]="Contenido@cursosEl6";

/*Curso oferta laboral*/
$rutaArray["cursos/ofertalaboral/"]="Contenido@cursosOl";
$rutaArray["cursos/ofertalaboral/page1/"]="Contenido@cursosOl1";
$rutaArray["cursos/ofertalaboral/page2/"]="Contenido@cursosOl2";
$rutaArray["cursos/ofertalaboral/page3/"]="Contenido@cursosOl3";
$rutaArray["cursos/ofertalaboral/page4/"]="Contenido@cursosOl4";
$rutaArray["cursos/ofertalaboral/page5/"]="Contenido@cursosOl5";
$rutaArray["cursos/ofertalaboral/page6/"]="Contenido@cursosOl6";



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
$rutaArray["ciudades/"]="Contenido@ciudad";
$rutaArray["loginUser/"]="Contenido@login";
$rutaArray["logout/"]="Contenido@cerrarSession";
$rutaArray["updateRegistro/"]="Contenido@updateRegistro";
/*Captcha*/
$rutaArray["comprobarcaptcha/"]="Contenido@validaCaptcha";
/*Descarga Usuarios*/
$rutaArray["reporte-iniciativa-jovenes/"]="Contenido@descargaReporte";
$rutaArray["valdiadescarga/"]="Contenido@validaIngresoDescarga";

/*Urls del administador*/
$rutaArray['youth/admSecciones/'] = "CmsSeccion@listaSecciones";
$rutaArray['youth/admEditSecciones/'] = "CmsSeccion@editaSecciones";
$rutaArray['youth/agrSecciones/'] = "CmsSeccion@agregarSeccion";
$rutaArray['youth/grdSecciones/'] = "CmsSeccion@grdSeccion";
$rutaArray['youth/editaSeccion/'] = "CmsSeccion@editSeccion";
$rutaArray['youth/agrContenido/'] = "CmsContenido@creaContenido";
$rutaArray['youth/adtContenido/'] = "CmsContenido@editContenido";
$rutaArray['youth/updContenido/'] = "CmsContenido@eupdContenido";
$rutaArray['youth/grdContenido/'] = "CmsContenido@grdContenido";
$rutaArray['youth/agrMultimedia/'] = "CmsContenido@creaMultimedia";
$rutaArray['youth/grdMultmedia/'] = "CmsContenido@grdMultmedia";
$rutaArray['youth/editMultimedia/'] = "CmsContenido@editMultimedia";
$rutaArray['youth/listaImg/']="CmsContenido@imgInterna";
$rutaArray['youth/editaMultimedia/']="CmsContenido@edtMultimedia";

/* Urls del administrador Haspe */
$rutaArray['youth/logUser/'] = "CmsContenido@logUser";
$rutaArray['youth/logUser/perfil/'] = "CmsContenido@perfil";
$rutaArray['youth/logUser/perfil/add/'] = "CmsContenido@addPerfil";
$rutaArray['youth/logUser/perfil/edit/'] = "CmsContenido@editPerfil";
$rutaArray['youth/logUser/user/'] = "CmsContenido@user";
$rutaArray['youth/logUser/user/add/'] = "CmsContenido@addUser";
$rutaArray['youth/logUser/user/edit/'] = "CmsContenido@editUser";
$rutaArray['youth/logUser/user/edit2/'] = "CmsContenido@editUser2";


 Moe::routes($rutaArray);
/*Moe::routes(array(
	"/"=>"Seccion@index",
	));*/
?>