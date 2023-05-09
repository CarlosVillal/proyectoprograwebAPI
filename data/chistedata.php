<?php
include 'data.php';
include '../domain/chiste.php';

class ChisteData extends Database{

    public function __construct(){}

	//INSERTAR
    public function insertarChiste($chiste){

		$pdo = Database::conectar();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$stmt = $pdo->prepare("SELECT MAX(tbchisteid) AS tbchisteid   FROM tbchiste");
		$stmt->execute();
		$nextId = 1;

		if ($row = $stmt->fetch()) {
			$nextId = $row[0] + 1;
		}

		$chistetexto = $chiste->getChistetexto();
	

		$stm = $pdo->prepare("CALL insertarChiste(?,?)");
		$stm->bindParam(1, $nextId, PDO::PARAM_INT);
		$stm->bindParam(2, $chistetexto, PDO::PARAM_STR);

		$resultado = $stm->execute();

		Database::desconectar();

		return $resultado;
	}

	//ELIMINAR
	public function eliminarUsuario($chisteid){
		$pdo = Database::conectar();
		$stm = $pdo->prepare("CALL eliminarChiste(?)");
		$stm ->bindParam(1,$chisteid,PDO::PARAM_INT);
		$resultado = $stm->execute();
		Database::desconectar();
		   
		return $resultado;
	}

	//OBTENER
	public function obtenerChistes() {
		$pdo = Database::conectar();
		$stm = $pdo->prepare("CALL obtenerChistes()");
		$stm->execute();
		Database::desconectar();
		return $stm->fetchAll(PDO::FETCH_ASSOC);
	}

    
}

?>