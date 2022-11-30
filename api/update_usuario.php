<?php 

    require_once "conexion.php";
    require_once "claseAdminCrud.php";

    $id = $_POST['id'];
    $user = $_POST['user'];
    $email = $_POST['email'];
    $passwords = $_POST['passwords'];

    $datos = array (
                $id,
                $user, 
                $email,
                $passwords
            );

    $obj = new Admin();

    if($obj-> actualizarUsuario($datos)==1){
        header("Location:../admin.php");
    } else {
        echo "falla al actualizar";
    }


?>