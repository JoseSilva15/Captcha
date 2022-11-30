<?php 

    require_once "conexion.php";
    require_once "claseAdminCrud.php";

    $id = $_GET['id'];

    $obj = new Admin();

    if($obj-> eliminarUsuario($id)==1){
        header("Location:../admin.php");
    } else {
        echo "falla al eliminar";
    }


?>