<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POO I</title>
</head>
<body>
<?php
  include("vehiculos.php");

  $mazda = new Coche();
  // El código debajo da error porque se ha encapsulado la variable $ruedas
  // echo "El Mazda tiene " . $mazda->ruedas . " ruedas. <br/>";
  $mazda->frenar();
  $mazda->set_color("Verde");

  
  $pegaso = new Camion();
  // El código debajo da error porque se ha encapsulado la variable $ruedas
  // echo "El Pegaso tiene " . $pegaso->ruedas . " ruedas. <br/>";
  $pegaso->frenar();
  $pegaso->set_color("Violeta");
  $pegaso->arrancar();
  echo "<br/>";
  
  // Getters y Setters
  echo "El mazda tiene " . $mazda->get_ruedas() . " ruedas<br/>";
  echo "El pegazo tiene " . $pegaso->get_ruedas() . " ruedas<br/>";


?>
</body>
</html>
