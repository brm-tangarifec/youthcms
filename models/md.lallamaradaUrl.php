<?php
/**
 * Table Definition for lallamarada_url
 */
require_once 'DB/DataObject.php';

class DataObjects_LallamaradaUrl extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'lallamarada_url';     // table name
    public $__tempName = 'LallamaradaUrl';     // tempName
    public $id;                             // int(4) primary_key not_null
    public $url;                            // varchar(300) not_null
    public $descipcion;                     // varchar(150)
    public $link;                           // varchar(100)
    public $orden;                          // int(4)
    public $seguimientoEvento;              // varchar(100)
    public $fechaInicio;                    // datetime
    public $fechaFin;                       // datetime
    public $fecha;                          // datetime
    public $fechaActualizacion;             // datetime


    function table()
    {
         return array(
             'id' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'url' =>  DB_DATAOBJECT_STR + DB_DATAOBJECT_NOTNULL,
             'link' =>  DB_DATAOBJECT_STR,
             'orden' =>  DB_DATAOBJECT_INT,
             'seguimientoEvento' =>  DB_DATAOBJECT_STR,
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
