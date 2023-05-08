<?php
include 'db2.php';

class LoginData extends DB2{

    //para saber si existe el correo
    public function userExists($user, $pass){
        //$md5pass = md5($pass);
        $correo = $user;
        $query = $this->connect()->prepare("SELECT * FROM tbacceso WHERE tbaccesonombre = :user AND tbaccesopassword = :pass ");
        $query->execute(['user' => $user, 'pass' => $pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    
}

?>