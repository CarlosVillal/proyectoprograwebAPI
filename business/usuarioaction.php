<?php 
include 'usuariobusiness.php';


//INSERTAR
 if(isset($_POST['registrar'])){

	$cedula =  $_POST['cedula'];
    $nombre =  $_POST['nombre'];
    $apellido1 =  $_POST['apellido1'];
    $apellido2 =  $_POST['apellido2'];
    $edad =  $_POST['edad'];
    $correo =  $_POST['correo'];

    $usuario = new Usuario(0, $cedula, $nombre, $apellido1, $apellido2, $edad, $correo);
    $userBusiness = new UsuarioBusiness();
	$resultado = $userBusiness->insertarUsuario($usuario);

	if($resultado == 1){
		header("location: ../view/viewregistrouser.php?mensaje=1" );
	}else{
         header("location: ../view/viewregistrouser.php?mensaje=2" );
		}



    
    //ACTUALIZAR
}else if(isset($_POST['actualizar'])){

    $id =  $_POST['id'];
    $cedula =  $_POST['cedula'];
    $nombre =  $_POST['nombre'];
    $apellido1 =  $_POST['apellido1'];
    $apellido2 =  $_POST['apellido2'];
    $edad =  $_POST['edad'];
    $correo =  $_POST['correo'];
		
    $usuario = new Usuario($id, $cedula, $nombre, $apellido1, $apellido2, $edad, $correo);
    $userBusiness = new UsuarioBusiness();
	$resultado = $userBusiness->actualizarUsuario($usuario);

	if($resultado == 1){
        echo 'actualizo correctamente correcta';
		//header("location: ../view/viewlistausuario.php?mensaje=1" );
	}else{
        echo "error";
        // header("location: ../view/viewlistausuario.php?error=bderror" );
		}

        //ELIMINAR
    }else if(isset($_GET['eliminar'])){
        $id = $_POST['id'];
    
        $userBusiness = new UsuarioBusiness();	
        $resultado = $userBusiness->eliminarUsuario($id);
    
        if($resultado == 1){
            echo 'actualizo correctamente correcta';
            //header("location: ../view/viewlistausuario.php?mensaje=1" );
        }else{
            echo "error";
            // header("location: ../view/viewlistausuario.php?error=bderror" );
            }

}


?>