<?php
//ini_set('display_errors',0);
//error_reporting(0);
include "moe.php";

include "../resources/config.php";
include "configuration.php";
// Configuración usuario


if (isset(Moe::$config['DEBUG_PHP']) && Moe::$config['DEBUG_PHP']==1) {
    @ini_set("display_errors","1");
}elseif (isset(Moe::$config['DEBUG_PHP']) && Moe::$config['DEBUG_PHP']==2) {
    @ini_set("display_errors","1");
    @error_reporting(E_ALL);
}

include "../resources/myQuerys.php";
// Si la clase MyQuerys no existe, se crea una nueva instancia
if (!class_exists('MyQuerys')) {
    eval('
        class MyQuerys{
            function __construct() {
            }
        }
    ');
}
// Se Incluye Querys, en donde se encuentran los metodos predeterminados
require("querys.php");

/* Se Incluye DataObjects del ORM */
if (!defined('PATH_SEPARATOR')) {
    if (defined('DIRECTORY_SEPARATOR') && DIRECTORY_SEPARATOR == "\\") {
        define('PATH_SEPARATOR', ';');
    } else {
        define('PATH_SEPARATOR', ':');
    }
}
$include_path = ini_get("include_path");
@ini_set("include_path", "PEAR");
require_once("MDB2.php");
require_once("DB/DataObject.php");


/*---*/
// Se incluye el motor de plantillas - Smarty
require("Smarty/libs/Smarty.class.php");
// Se incluyen funciones especiales
include_once("specialFeatures.php");
// Se incluye para limpiar la url
include_once("cleanDoor.php");
// Se incluye los Controladores que el usuario crea.
foreach (glob("../controllers/*.php") as $filename){ loadClass($filename,"ctr.",15);}
// Se incluye los Models que el usuario crea.
foreach (glob("../models/*.php") as $filename){ loadClass($filename,"md.",10);}

include "../resources/routes.php";

require_once 'DB/DataObject/Generator.php';


?>