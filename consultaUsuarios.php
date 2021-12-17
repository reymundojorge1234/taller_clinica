<?php
  if($_SESSION["logeo"]!="Ok")
    header("location:logeo.html");
  require_once("modelo/Usuario.php");
  $oUsuario=new Usuario();
  $oUsuario->read();
?>
<h2 class="text-center" style="color:black">Consulta de Usuarios</h2>
<br>
<button type="button" name="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUsuario" data-bs-target="#staticBackdrop">
  Nuevo Usuario
</button>
<br><br>
<table class="table table-hover" border="3">
  <thead>
    <tr style="background-color:greenyellow">
      <th scope="col">ID</th>
      <th scope="col">DNI</th>
      <th scope="col">Apellidos y Nombres</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
  <?php
    while ($regUsuario=$oUsuario->rSet->fetch_object()) {
      echo "
        <tr style='background-color:orangered; color:white'>
          <td><a href='mostrarUsuario.php?id=".$regUsuario->idUsuario."'>".$regUsuario->idUsuario."</a  ></td>
          <td>".$regUsuario->dniUsuario."</td>
          <td>".$regUsuario->apeUsuario." ".$regUsuario->nomUsuario."</td>
          <td>".$regUsuario->telUsuario."</td>
          <td><a href='?accion=editar&id=".$regUsuario->idUsuario."'><i class='fas fa-edit'></i></a></td>
        </tr>
      ";
    }
  ?>
  </tbody>
</table>
