<?php
/**
 * Table Definition for lallamarada_session
 */
require_once 'DB/DataObject.php';

class DataObjects_LallamaradaSession extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'lallamarada_session';    // table name
    public $__tempName = 'LallamaradaSession';    // tempName
    public $id;                             // int(4) primary_key not_null
    public $user_id;                        // varchar(128) not_null
    public $data;                           // text not_null
    public $session_key;                    // varchar(128) not_null
    public $dns;                            // varchar(128) not_null
    public $set_time;                       // varchar(10) not_null

    function table()
    {
         return array(
             'id' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'user_id' =>  DB_DATAOBJECT_STR + DB_DATAOBJECT_NOTNULL,
             'data' =>  DB_DATAOBJECT_STR + DB_DATAOBJECT_TXT + DB_DATAOBJECT_NOTNULL,
             'session_key' =>  DB_DATAOBJECT_STR + DB_DATAOBJECT_NOTNULL,
             'dns' =>  DB_DATAOBJECT_STR + DB_DATAOBJECT_NOTNULL,
             'set_time' =>  DB_DATAOBJECT_STR + DB_DATAOBJECT_NOTNULL,
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
