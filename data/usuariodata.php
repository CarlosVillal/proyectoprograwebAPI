<?php
include 'data.php';
include '../domain/usuario.php';

class UsuarioData extends Database{

    public function __construct(){}

	//INSERTAR
    public function insertarUsuario($usuario){

		$pdo = Database::conectar();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$stmt = $pdo->prepare("SELECT MAX(tbusuarioid ) AS tbusuarioid   FROM tbusuario");
		$stmt->execute();
		$nextId = 1;

		if ($row = $stmt->fetch()) {
			$nextId = $row[0] + 1;
		}

		$cedula = $usuario->getusuariocedula();
		$nombre = $usuario->getusuarionombre();
		$apellido1 = $usuario->getusuarioapellido1();
		$apellido2 = $usuario->getusuarioapellido2();
		$edad = $usuario->getusuarioedad();
		$correo = $usuario->getusuariocorreo();

		$stm = $pdo->prepare("CALL insertarusuario(?,?,?,?,?,?,?)");
		$stm->bindParam(1, $nextId, PDO::PARAM_INT);
		$stm->bindParam(2, $cedula, PDO::PARAM_STR);
		$stm->bindParam(3, $nombre, PDO::PARAM_STR);
		$stm->bindParam(4, $apellido1, PDO::PARAM_STR);
		$stm->bindParam(5, $apellido2, PDO::PARAM_STR);
		$stm->bindParam(6, $edad, PDO::PARAM_INT);
		$stm->bindParam(7, $correo, PDO::PARAM_STR);
		$resultado = $stm->execute();

		Database::desconectar();

		return $resultado;
	}


	//ACTUALIZAR
	public function actualizarUsuario($usuario){

		$id = $usuario->getusuarioid();
		$cedula = $usuario->getusuariocedula();
		$nombre = $usuario->getusuarionombre();
		$apellido1 = $usuario->getusuarioapellido1();
		$apellido2 = $usuario->getusuarioapellido2();
		$edad = $usuario->getusuarioedad();
		$correo = $usuario->getusuariocorreo();

		$stm = $pdo->prepare("CALL actualizarusuario(?,?,?,?,?,?,?)");
		$stm->bindParam(1, $nextId, PDO::PARAM_INT);
		$stm->bindParam(2, $cedula, PDO::PARAM_STR);
		$stm->bindParam(3, $nombre, PDO::PARAM_STR);
		$stm->bindParam(4, $apellido1, PDO::PARAM_STR);
		$stm->bindParam(5, $apellido2, PDO::PARAM_STR);
		$stm->bindParam(6, $edad, PDO::PARAM_INT);
		$stm->bindParam(7, $correo, PDO::PARAM_STR);
		$resultado = $stm->execute();

		Database::desconectar();

		return $resultado;
	}


	//ELIMINAR
	public function eliminarUsuario($usuarioid){
		$pdo = Database::conectar();
		$stm = $pdo->prepare("CALL eliminarUsuario(?)");
		$stm ->bindParam(1,$usuarioid,PDO::PARAM_INT);
		$resultado = $stm->execute();
		Database::desconectar();
		   
		return $resultado;
	}

	//OBTENER
	public function obtenerUsuarios() {
		$pdo = Database::conectar();
		$stm = $pdo->prepare("CALL obtenerUsuarios()");
		$stm->execute();
		Database::desconectar();
		return $stm->fetchAll(PDO::FETCH_ASSOC);
	}

    
}

?>