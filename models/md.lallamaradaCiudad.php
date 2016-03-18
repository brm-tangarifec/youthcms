<?php
/**
 * Table Definition for lallamarada_ciudad
 */
require_once 'DB/DataObject.php';

class DataObjects_LallamaradaCiudad extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'lallamarada_ciudad';    // table name
    public $__tempName = 'LallamaradaCiudad';    // tempName
    public $id;                             // int(4) primary_key not_null
    public $idDepto;                        // int(4)
    public $nombre;                         // varchar(100)
    public $codDane;                        // varchar(100)
    public $nombreDane;                     // varchar(100)
    public $coordenada;                     // varchar(100)
    public $fecha;                          // datetime

    function table()
    {
         return array(
             'id' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'idDepto' =>  DB_DATAOBJECT_INT,
             'nombre' =>  DB_DATAOBJECT_STR,
             'codDane' =>  DB_DATAOBJECT_STR,
             'nombreDane' =>  DB_DATAOBJECT_STR,
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
