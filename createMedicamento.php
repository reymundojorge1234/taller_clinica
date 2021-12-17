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
    <title>Crear Medicamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </head>
  <body>
    <h1 class="text-center">Crear Medicamento</h1>
    <form class="" action="control/createMedicamento.php" method="post">
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Id Medicamento</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="txtIdMedicamento" name="txtIdMedicamento" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Nombre Medicamento</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="txtNomMedicamento" name="txtNomMedicamento" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Fecha vencimiento</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="txtFechaVencimiento" name="txtFechaVencimiento" required>
        </div>
      </div>
      
      
      <button type="submit" class="btn btn-primary">Grabar</button>
    </form>
  </body>
</html>
