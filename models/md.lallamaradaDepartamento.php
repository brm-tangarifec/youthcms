<?php
/**
 * Table Definition for lallamarada_departamento
 */
require_once 'DB/DataObject.php';

class DataObjects_LallamaradaDepartamento extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'lallamarada_departamento';    // table name
    public $__tempName = 'LallamaradaDepartamento';    // tempName
    public $id;                             // int(4) primary_key not_null
    public $idPais;                         // int(4)
    public $nombre;                         // varchar(100)
    public $region;                         // varchar(100)
    public $coordenada;                     // varchar(100)
    public $fecha;                          // datetime

    function table()
    {
         return array(
             'id' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'idPais' =>  DB_DATAOBJECT_INT,
             'nombre' =>  DB_DATAOBJECT_STR,
             'region' =>  DB_DATAOBJECT_STR,
             'coordenada' =>  DB_DATAOBJECT_STR,
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
