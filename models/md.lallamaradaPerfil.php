<?php
/**
 * Table Definition for lallamarada_perfil
 */
require_once 'DB/DataObject.php';

class DataObjects_LallamaradaPerfil extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'lallamarada_perfil';    // table name
    public $__tempName = 'LallamaradaPerfil';    // tempName
    public $id;                             // int(4) primary_key not_null
    public $tipo;                           // varchar(45)
    public $descripcion;                    // varchar(140)
    public $fecha;                          // varchar(45)

    function table()
    {
         return array(
             'id' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'tipo' =>  DB_DATAOBJECT_STR,
             'descripcion' =>  DB_DATAOBJECT_STR,
             'fecha' =>  DB_DATAOBJECT_STR,
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
