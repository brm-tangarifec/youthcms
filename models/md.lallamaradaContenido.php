<?php
/**
 * Table Definition for lallamarada_contenido
 */
require_once 'DB/DataObject.php';

class DataObjects_LallamaradaContenido extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'lallamarada_contenido';    // table name
    public $__tempName = 'LallamaradaContenido';    // tempName
    public $id;                             // int(4) primary_key not_null
    public $titulo;                         // varchar(100)
    public $contenido;                      // text
    public $modulo;                         // varchar(100)
    public $visible;                        // enum(1) default_N
    public $fechaInicio;                    // datetime
    public $fechaFin;                       // datetime
    public $fecha;                          // datetime
    public $fechaActualizacion;             // datetime

    function table()
    {
         return array(
             'id' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'titulo' =>  DB_DATAOBJECT_STR,
             'contenido' =>  DB_DATAOBJECT_STR + DB_DATAOBJECT_TXT,
             'modulo' =>  DB_DATAOBJECT_STR,
             'visible' =>  DB_DATAOBJECT_STR,
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
