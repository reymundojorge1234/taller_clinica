<?php
  if($_SESSION["logeo"]!="Ok")
    header("location:logeo.html");
  require_once("modelo/Medicamento.php");
  $oMedicamento=new Medicamento();
  $oMedicamento->read();
?>
<h2 class="text-center">Consulta de Medicamento</h2>
<button type="button" name="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addMedicamento" data-bs-target="#staticBackdrop">
  Nuevo Medicamento
</button>
<br><br>
<table class="table table-hover">
  <thead>
    <tr style="background-color:greenyellow">
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Fecha Vencimiento</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
  <?php
    while ($regMedicamento=$oMedicamento->rSet->fetch_object()) {
      echo "
        <tr style='background-color:orangered; color:white'>
          <td><a href='mostrarMedicamento.php?id=".$regMedicamento->idMedicamento."'>".$regMedicamento->idMedicamento."</a  ></td>
          <td>".$regMedicamento->nomMedicamento."</td>
          <td>".$regMedicamento->fechaVencimiento."</td>
          <td><a href='?accion=editar&id=".$regMedicamento->idMedicamento."'><i class='fas fa-edit'></i></a></td>
        </tr>
      ";
    }
  ?>
  </tbody>
</table>