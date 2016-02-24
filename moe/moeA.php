<?php  
/**
* 
*/
class Moe
{
	private static $routes=array();
	public static $config=array();
	public static $myRoute=array();

	public static function start(){
		new Configuration();
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
		$estadoClassFunction=false;

		$arrKeysLength = array_map('strlen', array_keys(self::$routes));
		array_multisort($arrKeysLength, SORT_DESC, self::$routes);

		// comparamos routes con la url y si es igual se le da valores a la clase y la funcion
		foreach (self::$routes as $route => $classFunction) {
			// Si la ruta es igual a la url
			$classFunction=explode("@", $classFunction);
			$lenRoute=strlen($route);
			$lenUrl=strlen($url);
			printVar($url);
			printVar(substr($url, 0, $lenRoute));
			if ($route==substr($url, 0, $lenRoute)) {
				self::$myRoute=$route;
				$class=$classFunction[0];
				$function=$classFunction[1];
				//Se crean los parametros
				if($lenUrl > $lenRoute && substr($url, $lenRoute, $lenUrl-$lenRoute)!="/"){
					if (substr($url, $lenRoute, 1)=="/") {
						$lenRoute++;
					}
					$urlParametros=substr($url, $lenRoute, $lenUrl-$lenRoute);
					$urlArrayParametros=explode("/",$urlParametros);
					foreach ($urlArrayParametros as $idVar => $valueVar) {
						$parametros['var'.($idVar+1)]=decrypt($valueVar);
					}
				}
				break(1);
			// si la url es igual al la clase y a la función, agragamos un elemento a la url array para que no tomen valores en el siguiente paso
			}else if($urlArray[0]==$classFunction[0] && $urlArray[1]==$classFunction[1]){
				$estadoClassFunction=true;
			}
		}
		$parametros = (count($parametros) == 0 && count($post)>0) ? $post : $parametros ;

		// Si en el paso anterior no hubo una ruta igual a la de la url y la url es de dos parametros, le damos valor a class y function
		if($class=="" || $function==""){
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
		}
		foreach ($parametros as $key => $value) {
			CleanDoor::allClean($value);
		}
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
}

?>