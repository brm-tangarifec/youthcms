<?php
/**
 * Table Definition for lallamarada_intentologgin
 */
require_once 'DB/DataObject.php';

class DataObjects_LallamaradaIntentologgin extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'lallamarada_intentologgin';    // table name
    public $__tempName = 'LallamaradaIntentologgin';    // tempName
    public $id;                             // int(4) primary_key not_null
    public $usuario;                        // varchar(255) not_null
    public $ip;                             // varchar(255) not_null
    public $fecha;                          // datetime not_null default_0000-00-00%2000%3A00%3A00

    function table()
    {
         return array(
             'id' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'usuario' =>  DB_DATAOBJECT_STR + DB_DATAOBJECT_NOTNULL,
             'ip' =>  DB_DATAOBJECT_STR + DB_DATAOBJECT_NOTNULL,
             'fecha' =>  DB_DATAOBJECT_STR + DB_DATAOBJECT_DATE + DB_DATAOBJECT_TIME + DB_DATAOBJECT_NOTNULL,
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
