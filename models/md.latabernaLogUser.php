<?php
/**
 * Table Definition for lataberna_log_user
 */
require_once 'DB/DataObject.php';

class DataObjects_LatabernaLogUser extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'lataberna_log_user';    // table name
    public $__tempName = 'LatabernaLogUser';    // tempName
    public $id;                             // int(4) primary_key not_null
    public $idUser;                         // varchar(45)
    public $fechaLoggin;                    // datetime

    function table()
    {
         return array(
             'id' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'idUser' =>  DB_DATAOBJECT_STR,
             'fechaLoggin' =>  DB_DATAOBJECT_STR + DB_DATAOBJECT_DATE + DB_DATAOBJECT_TIME,
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
