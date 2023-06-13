<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejemplo while I</title>
</head>
<body>
  <?php
    $var1 = 1;
    // Bucle while
    while ($var1 < 6) {
      echo "Estamos ejecutando el código del bucle while <br/>";
      $var1++;
    }
    echo "Hemos salido del bucle while <br/>";

    // Bucle do-while
    $var1 = 7;
    do {
      echo "Estamos ejecutando el código del bucle do while <br/>";
      $var1++;
    } while ($var1 < 6);
    echo "Hemos salido del bucle do-while <br/>";
  ?>
</body>
</html>