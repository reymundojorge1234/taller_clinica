<?php
  require_once("modelo/Medico.php");
  $oMedico=new Medico();
  $oMedico->buscar($_REQUEST["id"]);
?>
  <button class="btn btn-primary" type="button" name="button" data-bs-toggle="modal" data-bs-target="#editMedico" data-bs-target="#staticBackdrop">
    Editar Información
  </button>
  <button class="btn btn-primary" type="button" name="button" data-bs-toggle="modal" data-bs-target="#editMedico" data-bs-target="#staticBackdrop">
    Eliminar Registro
  </button>

  <div class="modal-body">
    <div class="mb-3 row">
      <label class="col-sm-2 col-form-label">ID:</label>
      <div class="col-sm-10">
        <?php echo $oMedico->idMedico ?>
      </div>
    </div>
    <div class="mb-3 row">
      <label class="col-sm-2 col-form-label">Apellidos:</label>
      <div class="col-sm-10">
        <?php echo $oMedico->apeMedico ?>
      </div>
    </div>

    <div class="mb-3 row">
      <label class="col-sm-2 col-form-label">Nombre:</label>
      <div class="col-sm-10">
        <?php echo $oMedico->nomMedico ?>
      </div>
    </div>
    
    <div class="mb-3 row">
      <label class="col-sm-2 col-form-label">DNI:</label>
      <div class="col-sm-10">
        <?php echo $oMedico->dniMedico ?>
      </div>
    </div>
    <div class="mb-3 row">
      <label class="col-sm-2 col-form-label">Cargo:</label>
      <div class="col-sm-10">
        <?php echo $oMedico->cargo ?>
      </div>
    </div>
    
    
  </div>


<!-- Modal Editar Medico -->
<div class="modal" id="editMedico" tabindex="-1" data-bs-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar Medico</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="" action="control/updateMedico.php" method="POST">

      <div class="modal-body">
        
      <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">Id Medico</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="txtIdMedico" name="txtIdMedico" value="<?php echo $oMedico->idMedico ?>" required>
          </div>
        </div>

        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">Apellidos Medico</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="txtApeMedico" name="txtApeMedico" value="<?php echo $oMedico->apeMedico ?>" required>
          </div>
        </div>

        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">Nombre Medico</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="txtNomMedico" name="txtNomMedico" value="<?php echo $oMedico->nomMedico ?>" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">Dni Medico</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="txtDniMedico" name="txtDniMedico" value="<?php echo $oMedico->dniMedico ?>" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">Cargo</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="txtCargo" name="txtCargo" value="<?php echo $oMedico->cargo ?>" required>
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
<div class="modal" id="delMedico" tabindex="-1" data-bs-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Eliminar Médico</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="" action="control/deleteMedico.php" method="POST">
        <div class="modal-body">
          <div class="mb-3 row">
            <label class="col-sm-12 col-form-label">
              ¿Seguro que desea eliminar el Registro?
            </label>
            <div class="col-sm-10">
              <input type="hidden" class="form-control" id="txtDniMedico" name="txtDniMedico" value="<?php echo $oMedico->dniMedico?>" required>
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
