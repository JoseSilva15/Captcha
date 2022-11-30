<?php 
    require_once "conexion.php";
    require_once "claseLoginRegistro.php";

    $user = $_POST['username'];
    $email = $_POST['email'];
    $passwords = $_POST['passwords'];
    $rol = 2;
   
    $datos = array (
                $user, 
                $passwords, 
                $email
            );

    $obj = new loginRegistro();
    
    if($obj-> registrar($datos)==1){
        if($rol==2){
            header("Location:../user.php");
        } else if($rol==1){
            header("Location:../admin.php");
        }
    } else {
        echo "falla al insertar";
    }
?>