<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays en PHP</title>
</head>
<body>
  <?php
    /* Definiendo un array indexado
    $semana[] = "Lunes";
    $semana[] = "Martes";
    $semana[] = "Miercoles";
    */

    /* Definiendo un array indexado */

    $semana = array("Lunes", "Martes", "Miercoles");

    echo $semana[2] . "<br/>";

    $datos = array("nombre"=>"Alex", "apellido"=>"Hernández", "cedula"=>"12326995");
    echo "Me llamo " . $datos["nombre"] . " " . $datos["apellido"];
  ?>
</body>
</html>