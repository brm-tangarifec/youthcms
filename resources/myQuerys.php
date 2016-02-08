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
}


?>