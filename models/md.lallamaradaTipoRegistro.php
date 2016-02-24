<?php
/**
 * Table Definition for lallamarada_tipo_registro
 */
require_once 'DB/DataObject.php';

class DataObjects_LallamaradaTipoRegistro extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'lallamarada_tipo_registro';    // table name
    public $__tempName = 'LallamaradaTipoRegistro';    // tempName
    public $id;                             // int(4) primary_key not_null
    public $tipoRegistro;                   // enum(1)
    public $fecha;                          // datetime

    function table()
    {
         return array(
             'id' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'tipoRegistro' =>  DB_DATAOBJECT_STR,
             'fecha' =>  DB_DATAOBJECT_STR + DB_DATAOBJECT_DATE + DB_DATAOBJECT_TIME,
         );
    }

    function keys()
    {
         return array('id');
    }

    function sequenceKey() // keyname, use native, native name
    {
         return array('id', false, false);
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
