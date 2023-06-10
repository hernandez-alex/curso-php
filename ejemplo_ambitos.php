<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejemplo ambitos PHP</title>
</head>
<body>
  <?php
    $nombre = "Juan";

    function dameNombre(){
      // Las variables globales deben ser escritas dentro de la función
      // Hay otros métoddos que nos evitan usar esto como los parámetros
      global $nombre;
      $nombre = "El nombre es " . $nombre;
    }

    dameNombre();

    echo $nombre;
  ?> 
</body>
</html>