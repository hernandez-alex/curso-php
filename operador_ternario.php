<?php
  $edad = 15;

  // Condicional If
  if($edad < 18){
    echo "Eres menor de edad. No tienes acceso <br/>";
  }else{
    echo "Eres mayor de edad. Puedes acceder <br/>";
  }

  // Operador ternario
  echo ($edad <18 )? "Eres menor de edad. <br/>" : "Eres mayor de edad. <br/>";
?>