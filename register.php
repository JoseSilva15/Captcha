<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>Registrarse</title>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col"></div>
    
    <div class="col">
      <form action="./api/registro.php" method="POST">
        <div class="mb-3">
        <br><br>
        <center><img src="./img/Tecnm.gif" alt="Girl in a jacket" width="200" height="200"></center>
        <center><label style="font-size:50px; color:#2874A6; font-weight: bold;">Register</label></center><br>
        <label for="exampleFormControlInput1" class="form-label"><b>Username</b></label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="username">
      </div>

      <div class="col">
        <div class="mb-3">
          <label for="inputPassword" class=" col-form-label"><b>Email</b></label>
          <input type="email" class="form-control" id="inputPassword" name="email">
        </div>
      </div>

      <div class="col">
        <div class="mb-3">
          <label for="inputPassword" class="col-sm-2 col-form-label"><b>Password</b></label>
          <input type="password" class="form-control" id="inputPassword" name="passwords">
        </div>
      </div>

      <div class="col">
        <button type="submit" class="btn btn-primary btn-lg btn-block">Registrarse</button><br><br>
      </div>
      </form>
    </div>
    <div class="col"></div>
  </div>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>