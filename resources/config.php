<?php  
Moe::config(array(
	// Activa el debug nativo de php, niveles desde 0 hasta 2
	'DEBUG_PHP' =>0,

	// Activa el debug de las consultas y de la conexión, niveles desde 0 hasta 5
	'DEBUG_PEAR' =>0,

	// Si necesita la zona horaria de los angeles, colocar 'America/Los_Angeles'
	'TIMEZONE' =>'America/Bogota',

	/* Configuración base de datos */
	'DATABASE' =>array(
		'SERVER' => '127.0.0.1',
		'DBNAME' => 'lataberna',
		'USER' => 'root',
		'PASSWORD' => '1nt3r4ct1v3'
		)
));

?>