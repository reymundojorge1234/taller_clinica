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
    <title>Crear Paciente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </head>
  <body>
    <h1 class="text-center">Crear Paciente</h1>
    <form class="" action="control/createPaciente.php" method="post">
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Id Paciente</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="txtIdPaciente" name="txtIdPaciente" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Apellidos Paciente</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="txtApePaciente" name="txtApePaciente" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Nombre Paciente</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="txtNomPaciente" name="txtNomPaciente" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">E-mail Paciente</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="txtEmailPaciente" name="txtEmailPaciente" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Telefono Paciente</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="txtTelPaciente" name="txtTelPaciente" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Dirección Paciente</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="txtDirPaciente" name="txtDirPaciente" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Nacimiento Paciente</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="txtNacPaciente" name="txtNacPaciente" required>
        </div>
      </div>

      
      <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
  </body>
</html>
