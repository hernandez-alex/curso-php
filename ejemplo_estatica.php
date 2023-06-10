<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejemplo variables estáticas</title>
</head>
<body>
  <?php
    function incrementaVariable(){
      // Las variables estáticas conservan su valor fuera del
      // ambito de la función y la línea donde se declaran o
      // inicializan se ejecuta una sola vez.
      static $contador = 0;
      $contador++;
      echo $contador . "<br/>";
    }
    incrementaVariable();
    incrementaVariable();
    incrementaVariable();
    incrementaVariable();
  ?>
</body>
</html>