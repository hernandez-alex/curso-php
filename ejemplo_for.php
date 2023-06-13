<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bucle For</title>
</head>
<body>
  <?php
    // Ejemplo for sencillo
    for ($i=0; $i <= 10 ; $i++) { 
      echo "<p>Hemos entrado en el bucle for</p>";
    }

    // Ejemplo for step 2 con interrupción
    for ($i=10; $i >= 0 ; $i-=2) { 
      echo "<p>Estamos dentro del bucle for step 2 loop $i</p>";
      if($i == 6){
        echo "<p>Hemos interrumpido el bucle</p>";
        break;
      }
    }
    
    // Saltar loop de un bucle for
    for ($i=-10; $i <= 10; $i++) {
      // Deseo saltarme el 9 / 0 para evitar error de división por 0
      if($i==0){
        echo "División entre cero (0) no es posible <br/>";
        continue;
      } 
      echo "9 / $i = " . 9 / $i . "<br/>";
    }
    echo "<p>Hemos salido del bucle</p>";
  ?>
</body>
</html>