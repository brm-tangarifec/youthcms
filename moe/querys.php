<?php  
/**
* Clase donde estan todas los metodos predeterminados de los modelos
*/
class Querys extends MyQuerys
{

    function setInstancia(){
        //Crea una nueva instancia de $tabla a partir de DataObject
        $objDBO=$this->Factory($this->__tempName);
        $campos = $objDBO->table();
        unset($campos["id"]);
        unset($campos["fecha"]);
        //Asigna los valores
        foreach($campos as $key => $value){
            $objDBO->$key = utf8_decode($this->$key);
        }
        $objDBO->fecha = date("Y-m-d H:i:s");
        $objDBO->find();
        if($objDBO->fetch()){
            $ret = $objDBO->id;
        }else{
            $ret = $objDBO->insert();
        }
        //Libera el objeto DBO
        $objDBO->free();
        return $ret;
    }

    /**
    * Actualiza o inserta una tupla dependiendo de la condición
    * @param tabla: Nombre del DBO de la tabla donde se va a borrar
    * @param id: Id del registro a borrar
    */
    function setUpdateInstancia($campos,$campoWhere=""){
        //Crea una nueva instancia de $tabla a partir de DataObject
        $objDBO=$this->Factory($this->__tempName);
        if ($campoWhere) {
            foreach ($campoWhere as $key => $value) {
                $objDBO->$key = $value;
            }
        }
        //Asigna los valores
        $objDBO->find();
        if($objDBO->fetch()){
            foreach($campos as $key => $value){
                $objDBO->$key = $value;
            }
            $objDBO->fecha = date("Y-m-d H:i:s");
            $objDBO->update();
            $ret = true;
        }else{
            foreach($campos as $key => $value){
                $objDBO->$key = $value;
            }
            $objDBO->fecha = date("Y-m-d H:i:s");
            $objDBO->insert();
            $ret = true;
        }
        //Libera el objeto DBO
        $objDBO->free();
        return ($ret);
    }

    /**
    * Actualiza una tabla con id dado
    * @param tabla: Nombre del DBO de la tabla donde se va a borrar
    * @param id: Id del registro a borrar
    */
    function updateInstancia($id){
        //Actualiza una fila
        $objDBO=$this->Factory($this->__tempName);
        $campos = $objDBO->table();
        unset($campos["id"]);
        unset($campos["password"]);
        unset($campos["fecha"]);
        $objDBO->id = $id;
        //Asigna los valores
        $objDBO->find();
        if($objDBO->fetch()){
            foreach($campos as $key => $value){
                $objDBO->$key = utf8_decode($this->$key);
            }
            $objDBO->fecha = date("Y-m-d H:i:s");
            $objDBO->update();
            $ret = true;
        }else{
            $ret = false;
        }
        //Libera el objeto DBO
        $objDBO->free();
        return ($ret);
    }

    /**
    * Borrar la tupla con id dado en la tabla dada
    * @param tabla: Nombre del DBO de la tabla donde se va a borrar
    * @param id: Id del registro a borrar
    */
    function unSetInstancia($id){
        //Crea una nueva instancia de $tabla a partir de DataObject
        $objDBO=$this->Factory($this->__tempName);
        $objDBO->get($id);
        $ret = $objDBO->delete();
        //Libera el objeto DBO
        $objDBO->free();
        return $ret;
    }

    function getData($conf=array()){
        /*
        Conf Fields: 
            - fields: array('campo', 'campo2')
            - conditions: array('campo'=>'valor') || campo > 0
            - group: 'campo'
            - order: 'campo ASC/DESC'
            - limit: array('from'=>0/{vacio},'number'=>20)
            - getLinks: true/false
        */
        $objDBO=$this->Factory($this->__tempName);
        /*Fields*/
        if (isset($conf['fields']) && is_array($conf['fields']) && count($conf['fields']) > 0) {
            $objDBO->selectAdd();
            foreach($conf['fields'] as $field){
                $objDBO->selectAdd($field);
            }
        }
        /*Conditions*/
        if (isset($conf['conditions'])) {
           if(is_array($conf['conditions']) && count($conf['conditions']) > 0){ // como arreglo asociativo
                foreach($conf['conditions'] as $key => $value){
                    $objDBO->$key = $value;
                }
            }else if($conf['conditions'] != ""){
                $objDBO->whereAdd($conf['conditions']);
            }
        }
        /*Group*/
        if(isset($conf['group']) && $conf['group']!=""){
            $objDBO->groupBy($conf['group']);
        }
        /*Order*/
        if(isset($conf['order']) && $conf['order']!=""){
            $objDBO->orderBy($conf['order']);
        }
        /*Limit*/
        if(isset($conf['limit']) && is_array($conf['limit']) && $conf['limit']['number'] > 0 )
        {
            if ($conf['limit']['from']>0) {
                $objDBO->limit( $conf['limit']['from'], $conf['limit']['number']);
            }else{
                $objDBO->limit( $conf['limit']['number']);
            }
        }
        $objDBO->find();
        $ret=array();
        $i=0;
        while ($objDBO->fetch()) {
            /*getLinks*/
            if (isset($conf['getLinks']) && $conf['getLinks']==true) {
                $objDBO->getLinks();
            }
            $campos = $objDBO->ToArray('%s', true);
            foreach ($campos as $key => $value) {
                $encoding= mb_detect_encoding($value, "auto");
                if($encoding == 'UTF-8'){
                    $ret[$i][$key] =  utf8_encode( $value);
                }else{
                    if($encoding == 'ASCII'){
                        $ret[$i][$key] =  utf8_decode( $value);
                    }else{
                        $ret[$i][$key] = $value;
                    }
                }
            }
            $i++;
        }
        //Libera el objeto DBO
        $objDBO->free();
        return $ret;
    }

    function lastId($field) {
        //Crea una nueva instancia de $tabla a partir de DataObject
        $objDBO = DB_DataObject::Factory($this->__tempName);
        $objDBO -> selectadd();
        $objDBO -> selectadd($field);
        $objDBO -> orderBy("$field DESC");
        $objDBO -> find();
        $objDBO -> fetch();
        $ret = $objDBO->$field;
        $objDBO -> free();
        return $ret;
    }
}
?>