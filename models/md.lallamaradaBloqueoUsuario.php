<?php
/**
 * Table Definition for lallamarada_bloqueo_usuario
 */
require_once 'DB/DataObject.php';

class DataObjects_LallamaradaBloqueoUsuario extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'lallamarada_bloqueo_usuario';    // table name
    public $__tempName = 'LallamaradaBloqueoUsuario';    // tempName
    public $id;                             // int(4) primary_key not_null
    public $usuario;                        // varchar(255)
    public $fechaBloqueo;                   // datetime
    public $fechaDesbloqueo;                // datetime

    function table()
    {
         return array(
             'id' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'usuario' =>  DB_DATAOBJECT_STR,
             'fechaBloqueo' =>  DB_DATAOBJECT_STR + DB_DATAOBJECT_DATE + DB_DATAOBJECT_TIME,
             'fechaDesbloqueo' =>  DB_DATAOBJECT_STR + DB_DATAOBJECT_DATE + DB_DATAOBJECT_TIME,
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
