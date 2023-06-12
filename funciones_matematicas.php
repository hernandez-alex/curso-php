<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funciones Matemáticas</title>
</head>
<body>
  <?php
    // Número aleatorio
    $num1 = rand();
    echo "El número es: $num1 <br/>";

    // Número aleatorio comprendido en un rango
    $num2 = rand(10, 50);
    echo "El número es: $num2 <br/>";

    // Función exponencial
    $num3 = pow(5,3);
    echo "5 a la 3 es igual a: $num3 <br/>";

    // Redondear un valor numérico
    $num4 = round(5.45);
    echo "redondear(0) 5.45 = $num4 <br/>";
    $num4 = round(5.75);
    echo "redondear(0) 5.75 = $num4 <br/>";
    $num4 = round(5.7556454, 2);
    echo "redondear(2) 5.7556454 = $num4 <br/>";
    
    // Casting PHP
    $num5 = "5";
    $num5 +=2;
    echo "Casting de string a entero = $num5 <br/>";
    $num5 +=5.75;
    echo "Casting de entero a decimal = $num5 <br/>";
    
    // Casting explicito
    $num6 = "5.75";
    $num6 = (float)$num6;
    echo "Casting explicito de string a decimal = $num6 <br/>";


  ?>
</body>
</html>