<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejemplo operadores</title>
</head>
<body>
  <p>&nbsp;</p>
  <form action="" name="form1" method="post">
    <p>
      <label for="num1"></label>
      <input type="text" name="num1" id="num1">
      <label for="num2"></label>
      <input type="text" name="num2" id="num2">
      <label for="operacion"></label>
      <select name="operacion" id="operacion">
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicacion">Multiplicación</option>
        <option value="division">División</option>
        <option value="modulo">Modulo</option>
        <option value="incremento">Incremento</option>
        <option value="decremento">Decremento</option>
      </select>
    </p>
    <p>
      <input type="submit" name="button" id="button" value="Enviar" onclick="prueba">
    </p>
  </form>
  <p>&nbsp;</p>

  <?php
    include("calculadora_3.php");
    if(isset($_POST['button'])){
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      $operacion = $_POST['operacion'];

      calcular($operacion);
    }
  ?>
</body>
</html>