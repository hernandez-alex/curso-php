<?php
  $nombre = "Patricia";

  echo "<br/> Switch con una variable </br>";
  switch ($nombre) {
    case 'Alex':
      echo "Bienvenido Alex";
      break;
    case 'Monica':
      echo "Bienvenida Monica";
      break;
    case 'Patricia':
      echo "Bienvenida Patricia";
      break;
    
    default:
      echo "Usuario no autorizado";
      break;
  }

  $contra = 1234;
  echo "<br/> Switch con dos variables </br>";
  switch (true) {
    case $nombre == 'Alex' && $contra == 1234:
      echo "Bienvenido Alex, contraseña valida";
      break;
    case $nombre == 'Monica' && $contra == 1234:
      echo "Bienvenida Monica, contraseña valida";
      break;
    case $nombre == 'Patricia' && $contra == 1234:
      echo "Bienvenida Patricia, contraseña valida";
      break;
    
    default:
      echo "Usuario no autorizado, usuario y/o contraseña invalida...";
      break;
  }
?>