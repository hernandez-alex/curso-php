<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flujo ejecución PHP</title>
</head>
<body>
  <?php
    // require("proporciona_datoss.php");
    include("proporciona_datos.php");
    
    echo "Este es el primer mensaje <br/>";
    dameDatos();
    echo "Este es el segundo mensaje <br/>";
  ?>
</body>
</html>