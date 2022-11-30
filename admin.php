<!DOCTYPE html>
<?php 
  require_once "./api/conexion.php";
  require_once "./api/claseAdminCrud.php";
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

	<title>Admin</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: #2874A6 !important;">
  <div class="container-fluid">
    <a class="navbar-brand" href="" style="color: white; font-weight: bold;">ADMINISTRADOR</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admin.php" style="color: white; font-weight: bold;">Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./api/logout.php" style="color: white; font-weight: bold;">Cerrar sesión</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<br><br>

<div>
  <label style="font-size: 40px; margin-left: 15px; color: #2874A6; font-weight:bold;">Usuarios registrados</label>
  <div style="border:1px solid #2874A6; width: 80%; margin-left:15px; margin-top:8px;"></div>
</div>
<br><br>

<div style="width:80%; margin-left:15px;">
  <table class="table table-bordered">
  <thead class="table-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Usuario</th>
      <th scope="col">Correo electronico</th>
      <th scope="col">Contraseña</th>
      <th>Acción</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    $obj = new Admin();
    $sql =  "SELECT id, user, passwords, email FROM t_login";
    $datos = $obj->mostrarUsuarios($sql);
      
    
    $cnt=1;
    foreach ($datos as $row) {
?>                  
    <tr>
      <th scope="row"><?php echo htmlentities($cnt);?></th>
      <td><?php echo htmlentities($row['user']);?></td>
      <td><?php echo htmlentities($row['email']);?></td>
      <td><?php echo htmlentities($row['passwords']);?></td>
      <td>
        <a href="updateuser.php?id=<?php echo $row['id']?>">
          <button type="button" class="btn btn-outline-primary">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
          </button>
        </a>
        
        <a href="./api/eliminarUsuario.php?id=<?php echo $row['id']?>">
          <button type="button" class="btn btn-outline-danger">
            <i class="fa fa-trash-o" aria-hidden="true"></i>
          </button>
        </a>

      </td>
    </tr>
<?php   $cnt=$cnt+1;  } ?>

  </tbody>
</table>
</div>

<?php 

extract($_GET);
          if(@$idborrar==2){
    
            $sqlborrar="DELETE FROM login WHERE id=$id";
            $resborrar=mysqli_query($mysqli,$sqlborrar);
            echo '<script>alert("REGISTRO ELIMINADO")</script> ';
            echo "<script>location.href='admin.php'</script>";
          }

          ?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>