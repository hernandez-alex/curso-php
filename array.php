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

    $semana = array("Lunes", "Martes", "Miercoles", "Jueves");

    echo $semana[2] . "<br/>";

    $datos = array("nombre"=>"Alex", "apellido"=>"Hernández", "cedula"=>"12326995");
    echo "Me llamo " . $datos["nombre"] . " " . $datos["apellido"] . "<br/>";
    // Agregamos un elemento más a un array asociativo
    $datos["edad"] = 49;

    // Sobreescribimos la variable datos con otro tipo distinto de array solo para probar
    // $datos = 1;
    if (is_array($datos)){
      echo "Es un array <br/>";
    } else {
      echo "No es un array <br/>";
    }

    // Recorriendo un array indexado con for
    for ($i=0; $i < count($semana); $i++) { 
      echo "Dia $semana[$i] <br/>";
    }
    // Agregamos un nuevo elemento al array $semana y ejecutamos el código nuevamente.
    $semana[] = "Viernes";
    for ($i=0; $i < count($semana); $i++) { 
      echo "Día $semana[$i] <br/>";
    }

    // Recorriendo un array asociativo con foreach
    foreach ($datos as $key => $value) {
      echo "$key : $value <br/>";
    }
  ?>
</body>
</html>