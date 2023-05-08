<?php 
$conexion =mysqli_connect("localhost","root","","dbproyectoweb");
class Database{

     public static $dbName = "dbproyectoweb";
     public static $dbHost = "localhost" ;
     public static $dbUsername = "root";
     public static $dbUserPassword = "";
 
    private static $cont  = null;
    
    protected function __construct() {
        die('Inicialización no permitida.');
    }
    
    public static function conectar()
    {
    // One connection through whole application
    if ( null == self::$cont )
    {     
        try
        {
        self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, 
        self::$dbUsername, self::$dbUserPassword); 
     
        }
        catch(PDOException $e)
        {
        die($e->getMessage()); 
        }
    }
    return self::$cont;
    }
    
    public static function desconectar()
    {
        self::$cont = null;
    }
}



?>