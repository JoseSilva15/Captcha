<?php 
    class Admin{

        public function mostrarUsuarios($sql){

            $c = new conectar();
            $conexion = $c-> conexion();
            $result = mysqli_query($conexion, $sql);
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        
        }

        public function actualizarUsuario($datos){
            $c = new conectar();
            $conexion = $c->conexion();
            
            $sentencia="UPDATE t_login SET user='$datos[1]', passwords='$datos[2]', email='$datos[3]'WHERE id='$datos[0]'";
            //$message_error = mysqli_error($sentencia);
            return $result = mysqli_query($conexion, $sentencia);
        }

        public function eliminarUsuario($id){
            $c = new conectar();
            $conexion = $c->conexion();
            $sqlborrar="DELETE FROM t_login WHERE id=$id";
            return $resborrar=mysqli_query($conexion,$sqlborrar);
        }

    }
?>