<?php  
/**
* 
*/
class Configuration extends Moe
{

	function __construct(){
		$this->php();
	}

	function smarty(){
		// Se realiza la configuración de Smarty - Views
		$smarty = new Smarty();
		$smarty->compile_check = true;
		$smarty->left_delimiter = '{#';
		$smarty->right_delimiter = '#}';
		$smarty->setTemplateDir(array('../views','reveal/views'))
		    ->setCompileDir('cache');
		return $smarty;
	}

	function dataObject(){
		/* Configuración de PEAR */
		$options = &PEAR::getStaticProperty('DB_DataObject','options');
		$options = array(
		    'debug'             => Moe::$config['DEBUG_PEAR'], // Permite detallar las consultas que ejecuta, tiene hasta 3 niveles de detalle
		    'database'          => "mysql://".Moe::$config['DATABASE']['USER'].":".Moe::$config['DATABASE']['PASSWORD']."@".Moe::$config['DATABASE']['SERVER']."/".Moe::$config['DATABASE']['DBNAME'], // Configura la base de datos
		    'schema_location'   => '../models',
		    'class_location'    => '../models',
		    'require_prefix'    => 'db/',
		    'class_prefix'      => 'DataObjects_',
		    'db_driver'         => 'MDB2',
		    'generate_links'    => true,
		    'quote_identifiers' => true,
		    'build_views'       => true,
		    'generator_no_ini' => true

		);
		return $options;
	}

	function php(){
		/* Zona horaria */
		if (Moe::$config['TIMEZONE']!="") {
		    date_default_timezone_set(Moe::$config['TIMEZONE']);
		}
	}
}
?>