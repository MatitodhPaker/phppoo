<?php
  require_once "conexion.php";
  $obj= new conectar();
  $conexion=$obj->conexion();
  $id=$_GET['id'];
  $sql="SELECT nombre,apellido from t_persona where id='$id'";
  $result=mysqli_query($conexion,$sql);
  $ver=mysqli_fetch_row($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Editar</title>
</head>
<body>
  <form action="procesos/actualizar.php" method="post">
    <input type="text" name="id" value="<?php echo $id ?>" hidden="">
    <label>Nombre</label>
    <p></p>
    <input type="text" name="txtnombre" value="<?php echo $ver[0] ?>">
    <p></p>
    <label>Apellido</label>
    <p></p>
    <input type="text" name="txtapellido" value="<?php echo $ver[1] ?>">
    <p></p>
    <button>Agregar</button>
  </form>
</body>
</html>