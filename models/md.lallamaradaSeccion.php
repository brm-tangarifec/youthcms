<?php
/**
 * Table Definition for lallamarada_seccion
 */
require_once 'DB/DataObject.php';

class DataObjects_LallamaradaSeccion extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'lallamarada_seccion';    // table name
    public $__tempName = 'LallamaradaSeccion';    // tempName
    public $id;                             // int(4) primary_key not_null
    public $idPadre;                        // int(4)
    public $nombre;                         // varchar(100) not_null
    public $produccionVisible;              // enum(1) default_N
    public $superBarra;                     // enum(1) default_N
    public $mascaraUrl;                     // varchar(100)
    public $tituloSeo;                      // varchar(60)
    public $descripcionSeo;                 // varchar(150)
    public $fechaInicio;                    // datetime
    public $fechaFin;                       // datetime
    public $fecha;                          // datetime
    public $fechaActualizacion;             // datetime

    function table()
    {
         return array(
             'id' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'idPadre' =>  DB_DATAOBJECT_INT,
             'nombre' =>  DB_DATAOBJECT_STR + DB_DATAOBJECT_NOTNULL,
             'produccionVisible' =>  DB_DATAOBJECT_STR,
             'superBarra' =>  DB_DATAOBJECT_STR,
             'mascaraUrl' =>  DB_DATAOBJECT_STR,
             'tituloSeo' =>  DB_DATAOBJECT_STR,
             'descripcionSeo' =>  DB_DATAOBJECT_STR,
             'fechaInicio' =>  DB_DATAOBJECT_STR + DB_DATAOBJECT_DATE + DB_DATAOBJECT_TIME,
             'fechaFin' =>  DB_DATAOBJECT_STR + DB_DATAOBJECT_DATE + DB_DATAOBJECT_TIME,
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
