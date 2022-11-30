<?php 
    require_once "conexion.php";
    require_once "claseLoginRegistro.php";

    $username = $_POST['username'];
    $passwords = $_POST['passwords'];

    $ip = $_SERVER['REMOTE_ADDR'];
    $captcha = $_POST['g-recaptcha-response'];
    $secretkey = "6LfXCEMjAAAAAI-XpcRsbXXDaXCu0LNiljCXAyH5";

    $respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captcha&remoteip=$ip");
    
    $atributos = json_decode($respuesta, TRUE);

    if(!$atributos['success']){
        echo "<script>
                alert('Debes verificar el captcha');
                window.location= '/Prueba/index.php'
            </script>";
    }

    $datos = array (
                $username, 
                $passwords
            );

    $obj = new loginRegistro();
    
    if($obj-> login($datos)==1){
        echo "";
    } else {
        echo "falla login";
    }

?>