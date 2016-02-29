<?php
/**
 * Table Definition for lallamarada_archivo_template
 */
require_once 'DB/DataObject.php';

class DataObjects_LallamaradaArchivoTemplate extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'lallamarada_archivo_template';    // table name
    public $__tempName = 'LallamaradaArchivoTemplate';    // tempName
    public $id;                             // int(4) primary_key not_null
    public $idSeccion;                      // int(4)
    public $urlCss;                         // varchar(100)
    public $urlJs;                          // varchar(100)
    public $template;                       // varchar(100)
    public $fecha;                          // datetime
    public $fechaActualizacion;             // datetime

    function table()
    {
         return array(
             'id' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'idSeccion' =>  DB_DATAOBJECT_INT,
             'urlCss' =>  DB_DATAOBJECT_STR,
             'urlJs' =>  DB_DATAOBJECT_STR,
             'template' =>  DB_DATAOBJECT_STR,
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
