<?php
  require_once("modelo/Usuario.php");
  $oUsuario=new Usuario();
  $oUsuario->buscar($_REQUEST["id"]);
?>
  <button class="btn btn-primary" type="button" name="button" data-bs-toggle="modal" data-bs-target="#editUsuario" data-bs-target="#staticBackdrop">
    Editar Información
  </button>
  <button class="btn btn-primary" type="button" name="button" data-bs-toggle="modal" data-bs-target="#delUsuario" data-bs-target="#staticBackdrop">
    Eliminar Registro
  </button>

  <div class="modal-body">
    <div class="mb-3 row">
      <label class="col-sm-2 col-form-label">DNI Usuario</label>
      <div class="col-sm-10">
        <?php echo $oUsuario->dniUsuario ?>
      </div>
    </div>
    <div class="mb-3 row">
      <label class="col-sm-2 col-form-label">Nombre Usuario</label>
      <div class="col-sm-10">
        <?php echo $oUsuario->nomUsuario ?>
      </div>
    </div>
    <div class="mb-3 row">
      <label class="col-sm-2 col-form-label">Apellidos Usuario</label>
      <div class="col-sm-10">
        <?php echo $oUsuario->apeUsuario ?>
      </div>
    </div>
    <div class="mb-3 row">
      <label class="col-sm-2 col-form-label">Teléfono Usuario</label>
      <div class="col-sm-10">
        <?php echo $oUsuario->telUsuario ?>
      </div>
    </div>
    <div class="mb-3 row">
      <label class="col-sm-2 col-form-label">Dirección Usuario</label>
      <div class="col-sm-10">
        <?php echo $oUsuario->dirUsuario ?>
      </div>
    </div>
    
    <div class="mb-3 row">
      <label class="col-sm-2 col-form-label">E-mail Usuario</label>
      <div class="col-sm-10">
        <?php echo $oUsuario->emailUsuario ?>
      </div>
    </div>
    
  </div>


<!-- Modal Editar Usuario -->
<div class="modal" id="editUsuario" tabindex="-1" data-bs-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="" action="control/updateUsuario.php" method="POST">

      <div class="modal-body">
        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">DNI:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="txtDniUsuario" name="txtDniUsuario" value="<?php echo $oUsuario->dniUsuario ?>" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">Nombre:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="txtNomUsuario" name="txtNomUsuario" value="<?php echo $oUsuario->nomUsuario ?>" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">Apellidos:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="txtApeUsuario" name="txtApeUsuario" value="<?php echo $oUsuario->apeUsuario ?>" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">Teléfono:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="txtTelUsuario" name="txtTelUsuario" value="<?php echo $oUsuario->telUsuario ?>" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">Dirección:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="txtDirUsuario" name="txtDirUsuario" value="<?php echo $oUsuario->dirUsuario ?>" required>
          </div>
        </div>
        
        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">E-mail:</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="txtEmailUsuario" name="txtEmailUsuario" value="<?php echo $oUsuario->emailUsuario ?>" required>
          </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- Modal Eliminar Usuario -->
<div class="modal" id="delUsuario" tabindex="-1" data-bs-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Eliminar Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="" action="control/deleteUsuario.php" method="POST">
        <div class="modal-body">
          <div class="mb-3 row">
            <label class="col-sm-12 col-form-label">
              ¿Seguro que desea eliminar el Registro?
            </label>
            <div class="col-sm-10">
              <input type="hidden" class="form-control" id="txtDniUsuario" name="txtDniUsuario" value="<?php echo $oUsuario->dniUsuario ?>" required>
            </div>
          </div>
        </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Eliminar Datos</button>
      </div>
    </form>
    </div>
  </div>
</div>