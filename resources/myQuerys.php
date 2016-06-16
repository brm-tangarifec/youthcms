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
		$base='public/images/';
		$displaImg=$directorio;
		//printVar($displaImg);
		$directorio=$_SERVER['DOCUMENT_ROOT'].$base.$directorio;
			$directorio = opendir($directorio); //ruta actual
			$imagenes=array();
			while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
			{
			    if (!is_dir($archivo))//verificamos si es o no un directorio
			    {   
			    	$archivo=$displaImg.'/'.$archivo;
			    	//printvar($archivo);
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
		//printVar($campos);
		$updE=model('LallamaradaRegistro');
		//$updE->imgPerfil=$campos['imgPer'];
		$updE->nombre=$campos['nombre'];
		$updE->apellido=$campos['apellido'];
		$updE->email=$campos['email'];
		$updE->telefono=$campos['telefono'];
		$updE->idDepto=$campos['idDepto'];
		$updE->idCiudad=$campos['idCiudad'];
		$updE->tipoDocumento=$campos['tipoDocumento'];
		$updE->direccion=$campos['direccion'];
		$updE->numeroDocumento=$campos['documento'];
		$updE->genero=$campos['genero'];
		$updE->ipAccesso=$campos['ipAccesso'];
		$updE->fechaNacimiento=$campos['nacimiento'];
		$updE->fechaActualizacion=date('Y-m-d H:i:s');
		$updE-> whereAdd("id=" . $campos['id']);
		$updE -> find();
		$ret = $updE -> update(DB_DATAOBJECT_WHEREADD_ONLY);
		$updE -> free();
		return ($ret);
		//Asigna los valores

		//Libera el objeto DBO
	}

	/*Funcion para traer los directorios de las imagenes*/
	function listaDir(){
		$base='public/images/';
		//$displaImg="images/";
			$path = $_SERVER['DOCUMENT_ROOT'].$base;
			$dirs = array();
			// directory handle
			$dir = dir($path);
			while (false !== ($entry = $dir->read())) {
				if ($entry != '.' && $entry != '..') {
					if (is_dir($path . '/' .$entry)) {
						//printVar($entry);
						if($entry!='cursos'){
							//printVar($entry);
							$dirs[] = $entry;
						}
					}
				}
			}
			return $dirs;




	}
	/*Funcion para limpiar el texto antes de guardarlo*/
	function limpiaContent($nombreVariable){
		$limpieza = array(	"é" => "&eacute;",
			"á" => "&aacute;",
			"í" => "&iacute;",
			"ó" => "&oacute;",
			"ú" => "&uacute;",
			"ñ" => "&ntilde;",
			"É" => "&Eacute;",
			"Á" => "&Aacute;",
			"Í" => "&Iacute;",
			"Ó" => "&Oacute;",
			"Ú" => "&Uacute;",
			"Ñ" => "&Ntilde;",
			"®" => "&reg;",
			"¿" => "&iquest;",
			"¡" => "&iexcl;",
			"®" => "&reg;",

							
		);
		$nombreVariable = strtr($nombreVariable, $limpieza);
		return $nombreVariable;
	}
	
	
}

?>