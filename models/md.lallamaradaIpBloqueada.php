<?php
/**
 * Table Definition for lallamarada_ip_bloqueada
 */
require_once 'DB/DataObject.php';

class DataObjects_LallamaradaIpBloqueada extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'lallamarada_ip_bloqueada';    // table name
    public $__tempName = 'LallamaradaIpBloqueada';    // tempName
    public $id;                             // int(4) primary_key not_null
    public $ip;                             // varchar(45)
    public $fecha;                          // datetime

    function table()
    {
         return array(
             'id' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'ip' =>  DB_DATAOBJECT_STR,
             'fecha' =>  DB_DATAOBJECT_STR + DB_DATAOBJECT_DATE + DB_DATAOBJECT_TIME,
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
