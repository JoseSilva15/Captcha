<?php 
     
    class loginRegistro{

        public function registrar($datos){
            $c = new conectar();
            $conexion = $c->conexion();

            $sql_register = "INSERT INTO t_login (user,passwords,email) 
                    VALUES ('$datos[0]','$datos[1]','$datos[2]')";

            return $result = mysqli_query($conexion, $sql_register);
        }
        
        public function login($datos){
            $c = new conectar();
            $conexion = $c->conexion();
            $sql_login=mysqli_query($conexion,"SELECT * FROM t_login WHERE user =  '$datos[0]' AND passwords = '$datos[1]'");
            
            if($row=mysqli_fetch_assoc($sql_login))
	        {
                if($datos[1]==$row['passwords'])
                {
                    $_SESSION['id']=$row['id'];
                    $_SESSION['user']=$row['user'];
                    $_SESSION['email']=$row['email'];
                    $_SESSION['rol']=$row['rol'];

                    if($_SESSION['rol'] == 1)
                    {
                        echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
                        echo "<script>location.href='../admin.php'</script>";
                    } else {
                        echo "<script>location.href='../user.php'</script>";
                    }

                } else {
                    echo '<script>alert("Contraseña o correo incorrectos")</script> ';
                    echo "<script>location.href='../index.php'</script>";
                }
	        }
	        else
	        {
                echo '<script>alert("El Usuario no existe registrate")</script> ';
                echo "<script>location.href='../register.php'</script>";
	        }
            return $result = mysqli_query($conexion, $sql_login);
        }
    }

?>