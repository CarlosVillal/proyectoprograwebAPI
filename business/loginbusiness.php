<?php 

include '../data/logindata.php';

class LoginBusiness{

	private $loginData;

	public function LoginBusiness(){
		$this->loginData = new LoginData();
	}

	public function userExists($user, $pass){
        return $this->loginData->userExists($user, $pass);
    }



}


?>