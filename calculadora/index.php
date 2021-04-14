<!DOCTYPE html>
<html lang="es">
<head>
  <title>Calculadora</title>
</head>
<body>
  <form action="procesar.php" method="post">
    <label>valor1</label>
    <p></p>
    <input type="text" name="val1">
    <p></p>
    <label >valor2</label>
    <p></p>
    <input type="text" name="val2">
    <p></p>
    <select name="opcion">
      <option value="suma">Suma</option>
      <option value="resta">Resta</option>
      <option value="division">Division</option>
      <option value="multiplicacion">Multiplicacion</option>
    </select>
    <p></p>
    <button>calcular</button>
  </form>
</body>
</html>