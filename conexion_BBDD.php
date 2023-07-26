<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conexión BBDD php</title>
</head>
<body>
  <?php
    $db_host = "localhost";
    $db_nombre = "pruebas";
    $db_usuario = "root";
    $db_clave = "";

    $db_conexion = mysqli_connect($db_host, $db_usuario, $db_clave, $db_nombre);

    if (mysqli_connect_errno()){
      echo "Fallo al conectar a la BBDD";
      exit();
    }

    $query = "SELECT * FROM datos_personales";

    $resultados = mysqli_query($db_conexion, $query);

    while($fila = mysqli_fetch_row($resultados)){
      echo $fila[0] . " " . $fila[1] . " " . $fila[2] . " " . $fila[3] . "</br>";
      $registros++;
    }

    echo "</br> Hola esto está funciona, nuevamente desde linux mint... jajaja Yupiiiii";

    mysqli_close($db_conexion)
  ?>
</body>
</html>