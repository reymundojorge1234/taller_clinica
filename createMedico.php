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
    <title>Crear Medico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </head>
  <body>
    <h1 class="text-center">Crear Medico</h1>
    <form class="" action="control/createMedico.php" method="post">
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Id Medico</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="txtIdMedico" name="txtIdMedico" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Apellido Medico</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="txtApeMedico" name="txtApeMedico" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Nombre Medico</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="txtNomMedico" name="txtNomMedico" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Dni Medico</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="txtDniMedico" name="txtDniMedico" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Cargo</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="txtCargo" name="txtCargo" required>
        </div>
      </div>
      
      <button type="submit" class="btn btn-primary">Grabar</button>
    </form>
  </body>
</html>
