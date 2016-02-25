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
	function subeImagen($imagenes,$rutaI){
			$valid_extensions = array('jpeg', 'jpg', 'png'); // valid extensions
			$path = '/youth/images/$rutaI/'; // upload directory
			printVar($imagenes);
			if(isset($_FILES['image'])){
			 	$img = $_FILES['image']['name'];
			 	$tmp = $_FILES['image']['tmp_name'];
			  
			 // get uploaded file's extension
			 $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
			 
			 // can upload same image using rand function
			 $final_image = rand(1000,1000000).$img;
			 
			 // check's valid format
			 if(in_array($ext, $valid_extensions)){
			 	$path = $path.strtolower($final_image); 
			   
			  if(move_uploaded_file($tmp,$path)) 
			  {
			   echo "<img src='$path' />";
			  }
			 } 
			 else 
			 {
			  echo 'invalid file';
			 }
			}
					
	return $nombreArchivo;
	}
}

?>