<?php
  require_once "conexion.php";
  require_once "metodosCrud.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>crud</title>
</head>
<body>
  <table style="border-collapse: collapse;" border="1">
    <tr>
      <td>Nombre</td>
      <td>Apellido</td>
    </tr>
    <?php
      $obj= new metodos();
      $sql="SELECT id,nombre,apellido from t_persona";
      $datos=$obj->mostrarDatos($sql);
      foreach ($datos as $key) {
    ?>
    <tr>
      <td><?php echo $key['nombre']?></td>
      <td><?php echo $key['apellido']?></td>
    </tr>
    <?php
      }
    ?>
  </table>
</body>
</html>