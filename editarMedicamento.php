<?php
  require_once("modelo/Medicamento.php");
  $oMedicamento=new Medicamento();
  $oMedicamento->buscar($_REQUEST["id"]);
?>
  <button class="btn btn-primary" type="button" name="button" data-bs-toggle="modal" data-bs-target="#editMedicamento" data-bs-target="#staticBackdrop">
    Editar Información
  </button>
  <button class="btn btn-primary" type="button" name="button" data-bs-toggle="modal" data-bs-target="#editPaciente" data-bs-target="#staticBackdrop">
    Eliminar Registro
  </button>

  <div class="modal-body">
    <div class="mb-3 row">
      <label class="col-sm-2 col-form-label">id Medicamento</label>
      <div class="col-sm-10">
        <?php echo $oMedicamento->idMedicamento ?>
      </div>
    </div>
    <div class="mb-3 row">
      <label class="col-sm-2 col-form-label">Nombre Medicamento</label>
      <div class="col-sm-10">
        <?php echo $oMedicamento->nomMedicamento ?>
      </div>
    </div>
    <div class="mb-3 row">
      <label class="col-sm-2 col-form-label">fecha Vencimiento</label>
      <div class="col-sm-10">
        <?php echo $oMedicamento->fechaVencimiento ?>
      </div>
    </div>
    
    
  </div>


<!-- Modal Editar Medicamento -->
<div class="modal" id="editMedicamento" tabindex="-1" data-bs-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar Medicamento</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="" action="control/updateMedicamento.php" method="POST">

      <div class="modal-body">
        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">ID Medicamento</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="txtIdMedicamento" name="txtIdMedicamento" value="<?php echo $oMedicamento->idMedicamento ?>" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">Nombre Medicamento</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="txtNomMedicamento" name="txtNomMedicamento" value="<?php echo $oMedicamento->nomMedicamento ?>" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">Fecha Medicamento</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" id="txtFechaVencimiento" name="txtFechaVencimiento" value="<?php echo $oMedicamento->fechaVencimiento ?>" required>
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
<div class="modal" id="delMedicamento" tabindex="-1" data-bs-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Eliminar Medicamento</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="" action="control/deleteMedicamento.php" method="POST">
        <div class="modal-body">
          <div class="mb-3 row">
            <label class="col-sm-12 col-form-label">
              ¿Seguro que desea eliminar el Registro?
            </label>
            <div class="col-sm-10">
              <input type="hidden" class="form-control" id="txtIdMedicamento" name="txtIdMedicamento" value="<?php echo $oMedicamento->idMedicamento ?>" required>
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