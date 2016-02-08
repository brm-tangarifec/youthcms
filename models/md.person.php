<?php
/**
 * Table Definition for person
 */
require_once 'DB/DataObject.php';

class DataObjects_Person extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'person';              // table name
    public $__tempName = 'Person';              // tempName
    public $id;                             // int(4) primary_key not_null
    public $name;                           // varchar(75)
    public $document;                       // varchar(12)
    public $email;                          // varchar(75)
    public $dateUpdate;                     // timestamp default_CURRENT_TIMESTAMP
    public $date;                           // timestamp default_CURRENT_TIMESTAMP

    function table()
    {
         return array(
             'id' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'name' =>  DB_DATAOBJECT_STR,
             'document' =>  DB_DATAOBJECT_STR,
             'email' =>  DB_DATAOBJECT_STR,
             'dateUpdate' =>  DB_DATAOBJECT_MYSQLTIMESTAMP,
             'date' =>  DB_DATAOBJECT_MYSQLTIMESTAMP,
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
