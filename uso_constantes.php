<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Uso de contantes PHP</title>
</head>
<body>
  <?php
    // Las constantes deben tener siempre el nombre en mayúsculas (convención)
    // Las constantes no debes ser redefinidas
    // Existe un tercer argumento para saltar lo anterior peron no es recomendado
    define("AUTOR", "Alex");
    echo AUTOR;
    echo "<br/>";

    // Las constantes no aceptan el metodo literal para concatenar strings
    echo "El autor es AUTOR";
    echo "<br/>";
    // Para concatenar constantes se usa el punto (.)
    echo "El autor es: " . AUTOR;
    echo "<br/>";
    
    // Existen constantes literales predefinidas de PHP
    // Pueden buscarse en la documentación, como por ejemplo
    echo "La línea de esta instrucción es: " . __LINE__ . "<br/>";
    echo "Estamos trabajando con este fichero: " . __FILE__ . "<br/>";

  ?>
</body>
</html>