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
	
}

?>