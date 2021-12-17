<?php
  if($_SESSION["logeo"]!="Ok")
    header("location:logeo.html");
  require_once("modelo/Paciente.php");
  $oPaciente=new Paciente();
  $oPaciente->read();
?>
<h2 class="text-center">Consulta de Pacientes</h2>
<button type="button" name="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPaciente" data-bs-target="#staticBackdrop">
  Nuevo Paciente
</button>
<br><br>
<table class="table table-hover">
   <thead>
    <tr style="background-color:greenyellow">
      <th scope="col">ID</th>
      <th scope="col">Apellidos y Nombres</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
  <?php
    while ($regPaciente=$oPaciente->rSet->fetch_object()) {
      echo "
        <tr style='background-color:orangered; color:white'>
          <td><a href='mostrarPaciente.php?id=".$regPaciente->idPaciente."'>".$regPaciente->idPaciente."</a  ></td>
          <td>".$regPaciente->apePaciente." ".$regPaciente->nomPaciente."</td>
          <td>".$regPaciente->telfPaciente."</td>
          <td><a href='?accion=editar&id=".$regPaciente->idPaciente."'><i class='fas fa-edit'></i></a></td>
        </tr>
      ";
    }
  ?>
  </tbody>
</table>
