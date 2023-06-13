<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funciones predefinidas PHP</title>
</head>
<body>
  <?php
    // Ejemplo de función predefinida de PHP
    $palabra = "JUAN";
    echo strtolower($palabra);
    echo "<br/>";
    
    // Ejemplo de función propia
    function suma($num1, $num2){
      return $num1 + $num2;
    }
    echo suma(2, 3);
    echo "<br/>";
    
    // Ejemplo de función propia con parametro con defecto
    function frase_mayus($frase, $conversion = true){
      $frase = strtolower($frase);
      if($conversion == true){
        return ucwords($frase);
      }else{
        return strtoupper($frase);
      }
    }
    echo frase_mayus("MONICA marQuez");
    echo "<br/>";
    echo frase_mayus("AleX HERNANDEZ", false);
  ?>
</body>
</html>