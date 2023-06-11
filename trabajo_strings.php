<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trabajo strings</title>
  <style>
    .resaltar{
      color: #f00;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <?php
    // Uso de comillas simples dentro de comillas dobles OK
    echo "<p class='resaltar'>Esto es un ejemplo de frase</p>";
    // Uso de comillas dobles dentro de comillas simples OK
    echo '<p class="resaltar">Esto es un ejemplo de frase</p>';
    // Uso de la barra invertida para escapar la comilla doble anidada.
    echo "<p class=\"resaltar\">Esto es un ejemplo de frase</p>";

    // Insertar variables tipo strings dentro de strings, otra solución
    // esto solo se puede hacer con la comilla doble
    $nombre = "Juan";
    echo "Hola $nombre <br/>";
    // si usas la comilla simple tomará la variable como literal.
    $nombre = "Alex";
    echo 'Hola $nombre <br/>';
    echo "<br/>";
  ?>

  <?php
    // Comparación de strings
    $var1 = "Casa";
    $var2 = "CASA";

    // strcmp devuelve 0 si las dos variables son iguales
    $resultado = strcmp($var1, $var2);
    echo "$var1=$var2 / strcmp $resultado (0-true | 1-false)";
    echo "<br/>";

    // strcasecmp devuelve 0 si las dos variables son iguales
    $resultado = strcasecmp($var1, $var2);
    echo "$var1=$var2 / strcasecmp $resultado (0-true | 1-false)";
    echo "<br/>";

    // usando un if
    if($resultado == 0){
      echo "Coinciden";
    }else{
      echo "No coinciden";
    }
  ?>
</body>
</html>