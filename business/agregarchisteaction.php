<?php 
include 'chistebusiness.php';


if(isset($_POST['insertar'])){ 
    if(isset($_POST['chistetexto']) ){
        
            ///------------------ --    $chistetexto = $_POST['chistetexto'];
             
            $chiste = new Chiste(0,$chistetexto);
                $resultado = $agregarchisteBusiness->insertarChiste($chiste);
                if($resultado == 1){
                    header("location: ../view/vista.php?mensaje=1" );
                    exit();
                }else{
                    header("location: ../view/vista.php?mensaje=4" );
                    exit();
                }
                
            }
            
        }



?>