<?php  


// Se Vuelve global la instancia de smarty para la creación de las vistas
$Configuration= new Configuration;
$options=$Configuration->dataObject();


// Se Vuelve global la instancia de smarty para la creación de las vistas
$Configuration= new Configuration;
$smarty=$Configuration->smarty();
function view(){
    global $smarty;
    return $smarty;
}

/*Generate dbs*/
function regenerateDataObject()
{
    $generator = new DB_DataObject_Generator;
    $generator->start();
}
/**---*/
// Función que permite imprimir información legible para humanos sobre una variable
function printVar( $variable, $title = "" ){
    $var = print_r( $variable, true);
    echo "<pre style='background-color:#dddd00; border: dashed thin #000000;'><strong>[$title]</strong> $var</pre>";
}
// Function que permite la creación de un modelo

function model($table){
    $dataObject=new DB_DataObject;
    return $dataObject->Factory($table);
}
// Activa el debug de las consultas
function debug($n){
    return DB_DataObject::debugLevel($n);
};
// Activa el debug de las consultas
function redirect($url){
    header('location: '.$url);
};
//Encriptar
function encrypt($text, $salt = "earlysandwich.com"){
    $key=trim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $salt, $text, MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND))));
    //return str_replace("/", "65498", $key);
    //return "kasjbd65465".$text;
    return $text;
}
//Desencriptar
function decrypt($text, $salt = "earlysandwich.com"){
    $text=str_replace("65498", "/", $text);
    //return trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $salt, base64_decode($text), MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND)));
    return $text;
}

// Función para incluidr clases
function loadClass($filename,$prex,$nPrex){
    $nCount = strlen($prex); 
    $pref=substr($filename,$nPrex,$nCount);
    if ($pref == $prex )
    {
        include_once $filename;
    }
}
?>