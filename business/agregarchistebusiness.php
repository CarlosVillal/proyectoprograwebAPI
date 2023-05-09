<?php 

include '../data/chistedata.php';

class AgregarchisteBusiness{

	private $chisteData;

	public function AgregarchisteBusiness(){
		$this->chisteData = new chisteData();
	}

	public function insertarChiste($chiste){
        return $this->chisteData->insertarChiste($chiste);
    }

	public function eliminarUsuario($id){
        return $this->chisteData->eliminarUsuario($id);
    }

	public function obtenerChistes(){
        return $this->chisteData->obtenerChistes();
    }



}


?>