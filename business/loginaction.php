<?php 
include 'loginbusiness.php';

 if(isset($_POST['verificarlogin'])){
	$user =  $_POST['usuario'];
    $pass =  $_POST['password'];

    $loginBusiness = new LoginBusiness();
	$resultado = $loginBusiness->userExists($user, $pass);

			if($resultado == 1){
                echo 'contrasenia correcta';
				//header("location: ../view/choferview.php?mensaje=1" );
			}else{
                header("location: ../index.php?error=bderror" );
			}

		}




?>