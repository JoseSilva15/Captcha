<!DOCTYPE html>
<?php 
  require_once "./api/conexion.php";
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <title>User</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: #2874A6 !important;">
        <div class="container-fluid">
            <a class="navbar-brand" href="user.php" style="color: white; font-weight: bold;">Usuario</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./api/logout.php" style="color: white; font-weight: bold;">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
      <p style="color:red; font-size:100px">Hola Mundo</p>
    <div>
</body>

</html>