<!DOCTYPE html>
<?php
  session_name("miSistema");
  session_start();
  if($_SESSION["logeo"]!="Ok")
    header("location:logeo.html");
  require_once("modelo/Usuario.php");
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
         include("consultaUsuarios.php");
       else{
         switch ($_GET["accion"]) {
             case 'editar':
               include("editarUsuario.php");
               break;
           }
       }
       ?>
    </div>


    <!-- Ventana emergente para ingreso de usuario -->
    <div class="modal" id="addUsuario" tabindex="-1" data-bs-backdrop="static">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Nuevo Usuario</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form class="" action="control/createUsuario.php" method="POST">

          <div class="modal-body">
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
            
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </body>
</html>
