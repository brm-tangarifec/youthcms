<?php  
/**
* 
*/
class Moe
{
	private static $routes=array();
	public static $config=array();
	public static $validate=array();
	public static $myRoute;

	public static function start(){
		new Configuration();
	}

	public static function validate($validate){
		self::$validate=$validate;
	}
	
	public static function config($config){
		self::$config=$config;
	}

	public static function routes($routes){
		self::$routes=$routes;
	}
	
	public static function redirect($url){
		$post=$_POST;
		$get=$_GET;
		unset($_POST);
		unset($_GET);
		$class="";
		$function="";
		$parametros=array();
		$urlArray=explode("/", $url);
		$nUrl=count($urlArray);
		$estadoClassFunction=0;
		$routes=self::$routes;
		$arrKeysLength = array_map('strlen', array_keys($routes));
		array_multisort($arrKeysLength, SORT_DESC, $routes);

		// comparamos routes con la url y si es igual se le da valores a la clase y la funcion
		foreach ($routes as $route => $classFunction) {
			// Si la ruta es igual a la url
			$routeArray=explode("/", $route);
			if (count($routeArray) == count($urlArray) ) {
				$nRoute=count($routeArray);
				for ($i=0; $i < $nRoute; $i++) {
					if (substr($routeArray[$i], 0, 1) != '$' && $urlArray[$i]==$routeArray[$i]) {
						$estadoClassFunction++;
					}else if (substr($routeArray[$i], 0, 1) == '$') {
						$keyParametro = substr($routeArray[$i], 1);
						$value=CleanDoor::allClean($urlArray[$i]);
						$parametros[$keyParametro]=$value;
						$estadoClassFunction++;
					}else{
						$estadoClassFunction= 0;
						break;
					}
				}
			}else{
				$estadoClassFunction= 0;
			}
			if ($nUrl==$estadoClassFunction) {
				self::$myRoute=$route;
				$classFunction=explode("@", $classFunction);
				$class=$classFunction[0];
				$function=$classFunction[1];
				break;
			}
		}

		$parametros = (count($parametros) == 0 && count($post)>0) ? $post : $parametros ;

		foreach ($parametros as $key => $value) {
			$parametros[$key]=CleanDoor::allClean($value);
		}

		// Si en el paso anterior no hubo una ruta igual a la de la url y la url es de dos parametros, le damos valor a class y function
		
			/*if($class=="" || $function==""){
				if ($estadoClassFunction==false) {
					$class=$urlArray[0];
					$function=(isset($urlArray[1])) ? $urlArray[1] : "";
					//Se crean los parametros
					$urlArrayParametros=$urlArray;
					// Se eliminan los dos primeros
					array_shift($urlArrayParametros);
					array_shift($urlArrayParametros);
					if (count($urlArray)>2 && $urlArrayParametros[0]!="") {
						// Se crea arreglo de urlParametros
						foreach ($urlArrayParametros as $idVar => $valueVar) {
							$parametros['var'.($idVar+1)]=decrypt($valueVar);
						}
					}
				}
			}*/
		
		// si la class es igual a generate y la function es igual a models
		if ($class=="generate" && $function=="models") {
			regenerateDataObject();
			exit;
		}
		// Si la clase y el metodo existe, instanciamos el metodo
		if (method_exists($class, $function)) {
		    $class=New $class;
		    if (count($parametros)>0) {
		    	$class->$function($parametros);
		    }else{
				$class->$function();
		    }
		}else{
			// la pagina es incorrecta
			view()->display("errorUrl.html");
			exit;
		}
	}

	public static function valid($name,$get){
		$estado=true;
		$validate = self::$validate;
		if (isset($validate[$name])) {
			$validate = $validate[$name];
			foreach ($validate as $keyValidate => $valueValidate) {
				foreach ($get as $keyGet => $valueGet) {
					if ($keyValidate==$keyGet) {
						$fieldsValid=$validate[$keyValidate];
						foreach ($fieldsValid as $keyFieldsValid  => $valueFieldsValid) {
							switch ($keyFieldsValid) {
								case "number":
									if ($valueFieldsValid==true) {
										if ($valueGet>0) {}
										else{
											$estado=false;
											break(3);
										}
									}
								break;
								case "string":
									if ($valueFieldsValid==true) {
										if (!is_string($valueGet) || $valueGet>0) {
											$estado=false;
											break(3);
										}
									}
								break;
								case "min":
									if ($valueFieldsValid>=0) {
										if ($valueGet < $valueFieldsValid) {
											$estado=false;
											break(3);
										}
									}
								break;
								case "max":
									if ($valueFieldsValid>0) {
										if ($valueGet > $valueFieldsValid) {
											$estado=false;
											break(3);
										}
									}
								break;
								case "minlength":
									if ($valueFieldsValid>=0) {
										if (strlen($valueGet) < $valueFieldsValid) {
											$estado=false;
											break(3);
										}
									}
								break;
								case "maxlength":
									if ($valueFieldsValid>0) {
										if (strlen($valueGet) > $valueFieldsValid) {
											$estado=false;
											break(3);
										}
									}
								break;
								case "required":
									if ($valueFieldsValid==true) {
										if ($valueGet == "" || !isset($valueGet )) {
											$estado=false;
											break(3);
										}
									}
								break;
								case "email":
									if ($valueFieldsValid==true) {
										if (!filter_var($valueGet, FILTER_VALIDATE_EMAIL)) {
										  $estado=false;
											break(3);
										}
									}
								break;
								case "url":
									if ($valueFieldsValid==true) {
										if (!filter_var($valueGet, FILTER_VALIDATE_EMAIL)) {
									  		$estado=false;
											break(3);
										}
									}
								break;
							}
						}
					}
				}
				
			}
		}else{
			echo"validacion incorrecta";
		}
		
		return $estado;
	}
}

?>