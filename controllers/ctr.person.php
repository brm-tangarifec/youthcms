<?php
/**
* Clase donde se agregan los metodos que contienen la lógica.
*/

class Person
{

	function index(){
		$person = model("Person");
		$persons = $person->getData();
		view()->assign("persons",$persons);
		view()->display("list.html");
	}

	function edit($get){
		$person = model("Person");
		$idPerson=$get['var1'];
		$conf=array(
			'conditions'=>array('id'=>$idPerson)
			);
		$persons = $person->getData($conf);
		view()->assign("persons",$persons);
		view()->display("edit.html");
	}

	function update($get){
		$person = model("Person");
		$idPerson=$get['id'];
		$person->name = $get['name'];
		$person->document = $get['document'];
		$person->email = $get['email'];
		$person->updateInstancia($idPerson);
		redirect("/mvc/");
	}

	function delete($get){
		$person = model("Person");
		$idPerson=$get['var1'];
		$person->unSetInstancia($idPerson);
		redirect("/mvc/");
	}

	function insert(){
		view()->display("insert.html");
	}

	function aggregate($get){
		$person = model("Person");
		$person->name = $get['name'];
		$person->document = $get['document'];
		$person->email = $get['email'];
		$person->setInstancia();
		redirect("/mvc/");
	}
}
