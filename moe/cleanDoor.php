<?php
/**
* 
*/
class CleanDoor extends Moe
{
	// Método que elimina texto en html
	static function cambiaParaEnvio($cadena){
		$cadena = htmlentities($cadena,ENT_NOQUOTES,"ISO8859-1");
		return($cadena);
	}

	//Método que permite reemplazar caracteres especiales
	static function limpiarMiga($nombreVariable){
		$limpieza = array(	" " => "-",
							"¿" => "",
							"?" => "",
							"á" => "a",
							"é" => "e",
							"í" => "i",
							"ó" => "o",
							"ú" => "u",
							"Á" => "A",
							"É" => "E",
							"Í" => "I",
							"Ó" => "O",
							"Ú" => "U",
							"ñ" => "n",
							"Ñ" => "Ñ",
							"&aacute;" => "a",
							"&eacute;" => "e",
							"&iacute;" => "i",
							"&oacute;" => "o",
							"&uacute;" => "u",
							"&Aacute;" => "A",
							"&Eacute;" => "E",
							"&Iacute;" => "I",
							"&Oacute;" => "O",
							"&Uacute;" => "U",
							"&ntilde;" => "n",
							"&Ntilde;" => "N",
							"&iquest;" => "",
							"(" => "_",
							")" => "_"
		);
		$nombreVariable = strtr($nombreVariable, $limpieza);
		return $nombreVariable;
	}

	static function strpos_array($haystack, $needles) {
		if ( is_array($needles) ) {
		    foreach ($needles as $str) {
		    	//printVar($haystack."-". $str,"prueba");
		        if ( is_array($str) ) {
		            $pos = strpos_array($haystack, $str);
		        } else {
		            $pos = strpos(strtolower($haystack), $str);
		        }
		        if ($pos !== FALSE) {
		            return $pos;
		        }
		    }
		} else {
		    return strpos($haystack, $needles);
		}
	}

	// Método para buscar inyecciones 
	static function buscaInjec($valor){
		//printVar($valor,'cleanDorr');
		//Si encontramos alguna palabra reservada
		$blocked = array("cast","char","convert","declare","delete","drop","exec","insert","meta","script","select","set","truncate","update","version");
		for($i = 0; $i < count($blocked); $i++) {
			// Comprobamos si estan
			if (in_array(strtolower($valor), $blocked) || self::strpos_array($valor, $blocked)) {
				//printVar('entrando porque existe');
				view()->display("errorUrl.html");
				exit;
			}
			//printVar('noexiste');
		}
		return $valor;
	}


	// Método para borrar xss
	static function xss_cleaner($input_str) {
		$return_str = str_replace( array('<','>',"'",'"',')','('), array('&lt;','&gt;','&apos;','&#x22;','&#x29;','&#x28;'), $input_str ); 
		$return_str = str_ireplace( '%3Cscript', '', $return_str ); 
		return $return_str;
	}
	// Método que llama todas las funciones de limpieza de la url
	static function allClean($cadena){
		//printVar($cadena,'inicial');
		$cadena=self::cambiaParaEnvio($cadena);
		$cadena=self::limpiarMiga($cadena);
		$cadena=self::buscaInjec($cadena);
		$cadena=self::xss_cleaner($cadena);
		//printVar($cadena,'final');
		return $cadena;
	}
}


	
?>