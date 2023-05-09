<?php 
include 'agregarchistebusiness.php';


if(isset($_POST['insertar'])){
    $chistetexto = $_POST['chistetexto'];
        
            $chiste = new Chiste(0,$chistetexto);
            $agregarchisteBusiness = new AgregarchisteBusiness();
                $resultado = $agregarchisteBusiness->insertarChiste($chiste);

                if($resultado == 1){
                    header("location: ../view/agregarchisteview.php?mensaje=1" );
                    exit();
                }else{
                    header("location: ../view/agregarchisteview.php?mensaje=4" );
                    exit();
                }
                
            }
            
        



?>