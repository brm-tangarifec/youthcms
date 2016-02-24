<?php
/**
 * Table Definition for lallamarada_seccion_x_contenido
 */
require_once 'DB/DataObject.php';

class DataObjects_LallamaradaSeccionXContenido extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'lallamarada_seccion_x_contenido';    // table name
    public $__tempName = 'LallamaradaSeccionXContenido';    // tempName
    public $id;                             // int(4) primary_key not_null
    public $idSeccion;                      // int(4) primary_key not_null
    public $idContenido;                    // int(4)
    public $idMultXUrl;                     // int(4)
    public $posicion;                       // int(4)
    public $fecha;                          // datetime
    public $fechaActualizacion;             // datetime

    function table()
    {
         return array(
             'id' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'idSeccion' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'idContenido' =>  DB_DATAOBJECT_INT,
             'idMultXUrl' =>  DB_DATAOBJECT_INT,
             'posicion' =>  DB_DATAOBJECT_INT,
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
