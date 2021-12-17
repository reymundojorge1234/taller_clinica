<?php
  require_once("modelo/Paciente.php");
  $oPaciente=new Paciente();
  $oPaciente->buscar($_REQUEST["id"]);
?>
  <button class="btn btn-primary" type="button" name="button" data-bs-toggle="modal" data-bs-target="#editPaciente" data-bs-target="#staticBackdrop">
    Editar Información
  </button>
  <button class="btn btn-primary" type="button" name="button" data-bs-toggle="modal" data-bs-target="#editPaciente" data-bs-target="#staticBackdrop">
    Eliminar Registro
  </button>

  <div class="modal-body">
    <div class="mb-3 row">
      <label class="col-sm-2 col-form-label">id Paciente</label>
      <div class="col-sm-10">
        <?php echo $oPaciente->idPaciente ?>
      </div>
    </div>
    <div class="mb-3 row">
      <label class="col-sm-2 col-form-label">Apellidos Paciente</label>
      <div class="col-sm-10">
        <?php echo $oPaciente->apePaciente ?>
      </div>
    </div>
    <div class="mb-3 row">
      <label class="col-sm-2 col-form-label">Nombre Paciente</label>
      <div class="col-sm-10">
        <?php echo $oPaciente->nomPaciente ?>
      </div>
    </div>
    
    
    
    <div class="mb-3 row">
      <label class="col-sm-2 col-form-label">eMail Paciente</label>
      <div class="col-sm-10">
        <?php echo $oPaciente->emailPaciente ?>
      </div>
    </div>
    <div class="mb-3 row">
      <label class="col-sm-2 col-form-label">Telefono Paciente</label>
      <div class="col-sm-10">
        <?php echo $oPaciente->telfPaciente ?>
      </div>
    </div>
    <div class="mb-3 row">
      <label class="col-sm-2 col-form-label">Dirección Paciente</label>
      <div class="col-sm-10">
        <?php echo $oPaciente->dirPaciente ?>
      </div>
    </div>
    <div class="mb-3 row">
      <label class="col-sm-2 col-form-label">Nacimiento Paciente </label>
      <div class="col-sm-10">
        <?php echo $oPaciente->nacPaciente ?>
      </div>
    </div>
  </div>


<!-- Modal Editar Usuario -->
<div class="modal" id="editPaciente" tabindex="-1" data-bs-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar Paciente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="" action="control/updatePaciente.php" method="POST">

      <div class="modal-body">
        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">id Paciente</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="txtIdPaciente" name="txtIdPaciente" value="<?php echo $oPaciente->idPaciente ?>" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">Apellidos Paciente</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="txtApePaciente" name="txtApePaciente" value="<?php echo $oPaciente->apePaciente ?>" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">Nombre Paciente</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="txtNomPaciente" name="txtNomPaciente" value="<?php echo $oPaciente->nomPaciente ?>" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">eMail Paciente</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="txtEmailPaciente" name="txtEmailPaciente" value="<?php echo $oPaciente->emailPaciente ?>" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">Telefono Paciente</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="txtTelfPaciente" name="txtTelfPaciente" value="<?php echo $oPaciente->telfPaciente ?>" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">Dirección Paciente</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="txtDirPaciente" name="txtDirPaciente" value="<?php echo $oPaciente->dirPaciente ?>" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">Nacimiento </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="txtNacPaciente" name="txtNacPaciente" value="<?php echo $oPaciente->nacPaciente ?>" required>
          </div>
        </div>
        
        
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Actualizar Datos</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- Modal Eliminar Usuario -->
<div class="modal" id="delPaciente" tabindex="-1" data-bs-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Eliminar Paciente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="" action="control/deletePaciente.php" method="POST">
        <div class="modal-body">
          <div class="mb-3 row">
            <label class="col-sm-12 col-form-label">
            ¿Seguro que desea eliminar el Registro?
            </label>
            <div class="col-sm-10">
              <input type="hidden" class="form-control" id="txtIdPaciente" name="txtIdPaciente" value="<?php echo $oPaciente->dniPaciente ?>" required>
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