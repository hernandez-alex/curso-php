<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Concesionario</title>
</head>
<body>
  <?php
    include("concesionario.php");

    Compra_vehiculo::$ayuda = 10000;

    $compra_Antonio = new Compra_vehiculo("compacto");
    $compra_Antonio->climatizador();
    $compra_Antonio->tapiceria_cuero("blanco");
    echo "Precio coche Antonio $" . $compra_Antonio->precio_final() . "<br/>";

    $compra_Ana = new Compra_vehiculo("compacto");
    $compra_Ana->climatizador();
    $compra_Ana->tapiceria_cuero("rojo");
    echo "Precio coche Ana $" . $compra_Ana->precio_final() . "<br/>";
  ?>
</body>
</html>