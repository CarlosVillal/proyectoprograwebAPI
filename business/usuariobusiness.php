<?php 

include '../data/usuariodata.php';

class UsuarioBusiness{

	private $usuarioData;

	public function UsuarioBusiness(){
		$this->usuarioData = new UsuarioData();
	}

	public function insertarUsuario($usuario){
        return $this->usuarioData->insertarUsuario($usuario);
    }

	public function actualizarUsuario($usuario){
        return $this->usuarioData->actualizarUsuario($usuario);
    }

	public function eliminarUsuario($id){
        return $this->usuarioData->eliminarUsuario($id);
    }

	public function obtenerUsuarios(){
        return $this->usuarioData->obtenerUsuarios();
    }



}


?>