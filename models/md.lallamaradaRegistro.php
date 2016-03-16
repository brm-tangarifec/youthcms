<?php
/**
 * Table Definition for lallamarada_registro
 */
require_once 'DB/DataObject.php';

class DataObjects_LallamaradaRegistro extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'lallamarada_registro';    // table name
    public $__tempName = 'LallamaradaRegistro';    // tempName
    public $id;                             // int(4) primary_key not_null
    public $idCampania;                     // varchar(45)
    public $idFacebook;                     // varchar(45)
    public $idGoogle;                     // varchar(45)
    public $imgPerfil;                     // varchar(45)
    public $nombre;                         // varchar(45)
    public $apellido;                       // varchar(45)
    public $email;                          // varchar(45)
    public $idPerfil;                       // int(4)
    public $username;                       // varchar(45)
    public $password;                       // varchar(45)
    public $telefono;                       // varchar(45)
    public $idPais;                         // int(4)
    public $idDepto;                        // int(4)
    public $idCiudad;                       // int(4)
    public $tipoDocumento;                  // enum(2)
    public $numeroDocumento;                // varchar(100)
    public $genero;                         // enum(1)
    public $deseoInformacion;               // enum(1) default_N
    public $autorizacionMarca;              // enum(1) default_N
    public $ipAccesso;                      // varchar(140)
    public $fechaNacimiento;                // date
    public $fecha;                          // datetime
    public $fechaActualizacion;             // datetime

    function table()
    {
         return array(
             'id' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'idCampania' =>  DB_DATAOBJECT_STR,
             'idFacebook' =>  DB_DATAOBJECT_STR,
             'idGoogle' =>  DB_DATAOBJECT_STR,
             'imgPerfil' =>  DB_DATAOBJECT_STR,
             'nombre' =>  DB_DATAOBJECT_STR,
             'apellido' =>  DB_DATAOBJECT_STR,
             'email' =>  DB_DATAOBJECT_STR,
             'idPerfil' =>  DB_DATAOBJECT_INT,
             'username' =>  DB_DATAOBJECT_STR,
             'password' =>  DB_DATAOBJECT_STR,
             'telefono' =>  DB_DATAOBJECT_STR,
             'idPais' =>  DB_DATAOBJECT_INT,
             'idDepto' =>  DB_DATAOBJECT_INT,
             'idCiudad' =>  DB_DATAOBJECT_INT,
             'tipoDocumento' =>  DB_DATAOBJECT_STR,
             'numeroDocumento' =>  DB_DATAOBJECT_STR,
             'genero' =>  DB_DATAOBJECT_STR,
             'deseoInformacion' =>  DB_DATAOBJECT_STR,
             'autorizacionMarca' =>  DB_DATAOBJECT_STR,
             'ipAccesso' =>  DB_DATAOBJECT_STR,
             'fechaNacimiento' =>  DB_DATAOBJECT_STR + DB_DATAOBJECT_DATE,
             'fecha' =>  DB_DATAOBJECT_STR + DB_DATAOBJECT_DATE + DB_DATAOBJECT_TIME,
             'fechaActualizacion' =>  DB_DATAOBJECT_STR + DB_DATAOBJECT_DATE + DB_DATAOBJECT_TIME,
         );
    }

    function keys()
    {
         return array('id');
    }

    function sequenceKey() // keyname, use native, native name
    {
         return array('id', true, false);
    }

    function defaults() // column default values 
    {
         return array(
             '' => null,
         );
    }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
