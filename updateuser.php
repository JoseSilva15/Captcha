<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

	<title>Actualizar usuarios</title>
</head>
<body>



<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: #2874A6 !important;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color: white; font-weight: bold;">ADMINISTRADOR</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admin.php" style="color: white; font-weight: bold;">Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php" style="color: white; font-weight: bold;">Cerrar sesión</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<br><br>

<div>
  <label style="font-size: 40px; margin-left: 15px; color: #2874A6; font-weight:bold;">Actualizar Usuario</label>
  <div style="border:1px solid #2874A6; width: 80%; margin-left:15px; margin-top:8px;"></div>
</div>
<br><br>

<?php 

  require_once "./api/conexion.php";
  $obj = new conectar();
  $conexion = $obj->conexion();

  extract($_GET);

  $sql="SELECT * FROM t_login WHERE id='$id'";
  $ressql=mysqli_query($conexion,$sql);
  $ver = mysqli_fetch_row ($ressql);
?>


<div class="container">
  <div class="row">
    <div class="col">
    </div>
    <div class="col" style="margin-top: -30px;">
        <form action="./api/update_usuario.php" method="POST">
          <div class="mb-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Username</label>
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <input type="text" class="form-control" id="inputPassword" name="user" value="<?php echo $ver[1]; ?>">
        </div>
        <div class="mb-3">
          <label for="inputPassword" class="col-form-label">Email</label>
          <input type="text" class="form-control" id="inputPassword" name="passwords" value="<?php echo $ver[3]; ?>">
        </div>
        <div class="mb-3">
          <label for="inputPassword" class="col-form-label">Password</label>
          <input type="password" class="form-control" id="inputPassword" name="email" value="<?php echo $ver[2]; ?>">
        </div>
        <button  type="submit" class="btn btn-primary btn-lg btn-block">Actualizar usuario</button>
        </form>
      
    </div>
    <div class="col">
    
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>