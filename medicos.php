<!DOCTYPE html>
<?php
  session_name("miSistema");
  session_start();
  if($_SESSION["logeo"]!="Ok")
    header("location:logeo.html");
  require_once("modelo/Medico.php");
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/911b538502.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container-fluid">
      <?php
        include("menuPrincipal.html");
       if (!(isset($_GET["accion"])))
         include("consultaMedicos.php");
       else{
         switch ($_GET["accion"]) {
             case 'editar':
               include("editarMedico.php");
               break;
           }
       }
       ?>
    </div>


    <!-- Ventana emergente para ingreso de Medicos -->
    <div class="modal" id="addMedico" tabindex="-1" data-bs-backdrop="static">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Nuevo Medico</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form class="" action="control/createMedico.php" method="POST">

          <div class="modal-body">
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label">Id Medico</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="txtIdMedico" name="txtIdMedico" required>
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label">Apellidos Medico</label>
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
            
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </body>
</html>
