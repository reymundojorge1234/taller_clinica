<!DOCTYPE html>
<?php
  session_name("miSistema");
  session_start();
  if($_SESSION["logeo"]!="Ok")
    header("location:logeo.html");
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Crear Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </head>
  <body>
    <h1 class="text-center">Registrar Usuario</h1>
    <form class="" action="control/createUsuario.php" method="post">
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">DNI:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="txtDniUsuario" name="txtDniUsuario" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Nombre:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="txtNomUsuario" name="txtNomUsuario" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Apellidos:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="txtApeUsuario" name="txtApeUsuario" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Telefono:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="txtTelUsuario" name="txtTelUsuario" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Dirección:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="txtDirUsuario" name="txtDirUsuario" required>
        </div>
      </div>
      
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">E-mail:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="txtEmailUsuario" name="txtEmailUsuario" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="txtPswUsuario" name="txtPswUsuario" required>
        </div>
      </div>
      
      <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
  </body>
</html>
