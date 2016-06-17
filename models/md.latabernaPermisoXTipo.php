<?php
/**
 * Table Definition for lataberna_permiso_x_tipo
 */
require_once 'DB/DataObject.php';

class DataObjects_LatabernaPermisoXTipo extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'lataberna_permiso_x_tipo';    // table name
    public $__tempName = 'LatabernaPermisoXTipo';    // tempName
    public $id;                             // int(4) primary_key not_null
    public $idTipo;                         // int(4)
    public $idPermiso;                      // int(4)
    public $fecha;                          // datetime
    public $estado;                         // int(4)

    function table()
    {
         return array(
             'id' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'idTipo' =>  DB_DATAOBJECT_INT,
             'idPermiso' =>  DB_DATAOBJECT_INT,
             'fecha' =>  DB_DATAOBJECT_STR + DB_DATAOBJECT_DATE + DB_DATAOBJECT_TIME,
             'estado' =>  DB_DATAOBJECT_INT,
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
