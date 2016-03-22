<?php  
/**
* Clase donde se agregan los metodos que el usuario necesita para los modelos
*/
class MyQuerys
{
	function countPrueba(){
		$objDBO=$this->Factory($this->__tempName);
        $ret=$objDBO->count();
        $objDBO->free();
        return $ret;
	}

	function obtengoSeccion($idSeccion){
		//printVar($idSeccion);
	    $objDBO = model('LallamaradaSeccion');
		$objDBO -> selectadd();
		$objDBO -> selectadd('id,idPadre,nombre,produccionVisible,superBarra,mascaraUrl,tituloSeo,descripcionSeo,fechaInicio,fechaFin,fecha,fechaActualizacion');
		$objDBO -> whereAdd('id = '.$idSeccion['idSeccion']);
		$objDBO -> find();
		$count=0;
		while ($objDBO -> fetch()) {
			$ret[$count] ->id = $objDBO ->id;
			//$ret[$count] ->idPadre = $objDBO ->idPadre;
			$ret[$count] ->idPadre=$this->llamaNombrePadre($objDBO ->idPadre);
			$ret[$count] ->nombre = $objDBO ->nombre;
			$ret[$count] ->produccionVisible = $objDBO ->produccionVisible;
			$ret[$count] ->superBarra = $objDBO ->superBarra;
			$ret[$count] ->mascaraUrl = $objDBO ->mascaraUrl;
			$ret[$count] ->tituloSeo = $objDBO ->tituloSeo;
			$ret[$count] ->descripcionSeo = $objDBO ->descripcionSeo;
			$ret[$count] ->fechaInicio = $objDBO ->fechaInicio;
			$ret[$count] ->fechaFin = $objDBO ->fechaFin;
			$ret[$count] ->fecha = $objDBO ->fecha;
			$ret[$count] ->fechaActualizacion = $objDBO ->fechaActualizacion;
			$count++;
		}
		$objDBO -> free();
		return $ret;	
	}

	function llamaNombrePadre($idPadre){
		//printVar($idPadre,'hola');
		$objDBO = model('LallamaradaSeccion');
		$objDBO -> selectAdd();
		$objDBO -> selectAdd('id,nombre');
		$objDBO -> whereAdd('id='. $idPadre);
		$objDBO -> find();
		$padre=0;
		//$nombP=$objDBO -> fetch();
		while($objDBO -> fetch()){
			$nombP[$padre]->id = $objDBO ->id;
			$nombP[$padre]->nombre = $objDBO ->nombre;
			$padre++;
		}
		$objDBO -> free();
		return $nombP;
	}

	function traeImagenes($directorio){
		$base='youth/public/';
		$displaImg="/youth/images/";
		$directorio=$_SERVER['DOCUMENT_ROOT'].$base.$directorio;
			$directorio = opendir($directorio); //ruta actual
			$imagenes=array();
			while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
			{
			    if (!is_dir($archivo))//verificamos si es o no un directorio
			    {   
			    	$archivo=$displaImg.$archivo;
			    	array_push($imagenes,$archivo);
			    	
			    }
			}
			    	return $imagenes;
	}

	function encriptado($data,$key){
		if($key=='!Y0uth$h4StCryPt'){
			$baseM='holapersonaquebuscalacookie';
			$baseF='adiospersonaquebuscalacookie';
			$date=date('y.m.d');
			$encriptar=$baseM.'~'.$date.'.'.$data.'.'.'1459'.'~'.$baseF;
			return base64_encode($encriptar);

		}else{
			header('location: http://corporativa.nestle.com.co');
		}
	}
	function devuelvedato($data,$key){
		if($key=='!Y0uth$h4StCryPt'){
			$data = base64_decode($data);
			$limpiaData=base64_decode($data);

			$porciones = explode("~",$limpiaData);
			$sacadato= explode('.',$porciones[1]);
			//printVar($sacadato[3]);
			$eldato=$sacadato[3];

	  		return $eldato; 

		}else{
			header('location: http://corporativa.nestle.com.co');
		}
	}

	function getRealIP() {
    	if (!empty($_SERVER['HTTP_CLIENT_IP']))
    	    return $_SERVER['HTTP_CLIENT_IP'];
    	   
    	if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    	    return $_SERVER['HTTP_X_FORWARDED_FOR'];
   	
    	return $_SERVER['REMOTE_ADDR'];
	}

	//Función para actualizar los inscritos en youth
	function actulizaInscrito($campos) {
		$updE=model('LallamaradaRegistro');
		$updE->imgPerfil=$campos['imgPer'];
		$updE->nombre=$campos['nombres'];
		$updE->apellido=$campos['apellidos'];
		$updE->email=$campos['email'];
		$updE->telefono=$campos['celular'];
		$updE->idDepto=$campos['depto'];
		$updE->idCiudad=$campos['ciudad'];
		$updE->tipoDocumento=$campos['tipo'];
		$updE->numeroDocumento=$campos['documento'];
		$updE->genero=$campos['genero'];
		$updE->autorizacionMarca=$campos['terminos'];
		$updE->ipAccesso=$campos['ipAccesso'];
		$updE->fechaNacimiento=$campos['nacimiento'];
		$updE->fechaActualizacion=date('Y-m-d H:i:s');
		$objDBO-> whereAdd("id=" . $campos['id']);
		$objDBO -> find();
		$ret = $objDBO -> update(DB_DATAOBJECT_WHEREADD_ONLY);
		$objDBO -> free();
		return ($ret);
		//Asigna los valores

		//Libera el objeto DBO
	}
	
}

?>