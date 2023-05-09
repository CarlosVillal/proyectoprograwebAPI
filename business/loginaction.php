<?php 
include 'loginbusiness.php';

 if(isset($_POST['verificarlogin'])){
	$user =  $_POST['usuario'];
    $pass =  $_POST['password'];

    $loginBusiness = new LoginBusiness();
	$resultado = $loginBusiness->userExists($user, $pass);

			if($resultado == 1){
				header("location: ../view/menuview.php" );
			}else{
                header("location: ../index.php?error=bderror" );
			}

		}




?>