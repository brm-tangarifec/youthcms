<?php
/**
 * Table Definition for lataberna_user
 */
require_once 'DB/DataObject.php';

class DataObjects_LatabernaUser extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'lataberna_user';      // table name
    public $__tempName = 'LatabernaUser';      // tempName
    public $id;                             // int(4) primary_key not_null
    public $username;                       // varchar(45)
    public $idPerfil;                       // varchar(45)
    public $fecha;                          // varchar(45)

    function table()
    {
         return array(
             'id' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'username' =>  DB_DATAOBJECT_STR,
             'idPerfil' =>  DB_DATAOBJECT_STR,
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
