<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Segunda página</title>
</head>
<body>
  <?php
    // Este es un comentario de una línea
    /*
    Este es un comentario 
    multilínea
    */

    // Declaración de variables
    $nombre = "Juan";
    $edad = 18;

    // Concatenación usando comillas dobles y punto
    echo "El nombre del usuario es " . $nombre;
    echo "<br/>";

    // Concatenación interpolando comillas dobles
    echo "El nombre del usuario es $nombre";
    echo "<br/>";

    // Concatenación interpolando comillas simples ERROR
    echo 'El nombre del usuario es $nombre';
    echo "<br/>";

    // Diferencias estre la función print y la expresión echo
    // echo admite la impresioń multiple
    echo $nombre, $edad;
    echo "<br/>";
    // print no admite la impresión multiple
    // print $nombre, $edad; // ERROR
  ?>
</body>
</html>