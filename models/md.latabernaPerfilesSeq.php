<?php
/**
 * Table Definition for lataberna_perfiles_seq
 */
require_once 'DB/DataObject.php';

class DataObjects_LatabernaPerfilesSeq extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'lataberna_perfiles_seq';    // table name
    public $__tempName = 'LatabernaPerfilesSeq';    // tempName
    public $sequence;                       // int(4) primary_key not_null

    function table()
    {
         return array(
             'sequence' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
         );
    }

    function keys()
    {
         return array('sequence');
    }

    function sequenceKey() // keyname, use native, native name
    {
         return array('sequence', true, false);
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
