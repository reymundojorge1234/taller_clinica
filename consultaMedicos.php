<?php
  if($_SESSION["logeo"]!="Ok")
    header("location:logeo.html");
  require_once("modelo/Medico.php");
  $oMedico=new Medico();
  $oMedico->read();
?>
<h2 class="text-center">Consulta de Médicos</h2>
<button type="button" name="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addMedico" data-bs-target="#staticBackdrop">
  Nuevo Médico
</button>
<br><br>
<table class="table table-hover">
  <thead>
    <tr style="background-color:greenyellow">
      <th scope="col">ID</th>
      <th scope="col">Apellidos y Nombres</th>
      <th scope="col">DNI</th>
      <th scope="col">Cargo</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
  <?php
    while ($regMedico=$oMedico->rSet->fetch_object()) {
      echo "
        <tr style='background-color:orangered; color:white'>
          <td><a href='mostrarUsuario.php?id=".$regMedico->idMedico."'>".$regMedico->idMedico."</a  ></td>
          <td>".$regMedico->apeMedico." ".$regMedico->nomMedico."</td>
          <td>".$regMedico->dniMedico."</td>
          <td>".$regMedico->cargo."</td>
          <td><a href='?accion=editar&id=".$regMedico->idMedico."'><i class='fas fa-edit'></i></a></td>
        </tr>
      ";
    }
  ?>
  </tbody>
</table>
