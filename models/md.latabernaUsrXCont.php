<?php
/**
 * Table Definition for lataberna_usr_x_cont
 */
require_once 'DB/DataObject.php';

class DataObjects_LatabernaUsrXCont extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'lataberna_usr_x_cont';    // table name
    public $__tempName = 'LatabernaUsrXCont';    // tempName
    public $id;                             // int(4) primary_key not_null
    public $idUser;                         // int(4)
    public $idSeccion;                      // int(4)
    public $ipAcceso;                       // varchar(140)
    public $log;                            // text
    public $fecha;                          // datetime

    function table()
    {
         return array(
             'id' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'idUser' =>  DB_DATAOBJECT_INT,
             'idSeccion' =>  DB_DATAOBJECT_INT,
             'ipAcceso' =>  DB_DATAOBJECT_STR,
             'log' =>  DB_DATAOBJECT_STR + DB_DATAOBJECT_TXT,
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
