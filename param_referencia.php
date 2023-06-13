<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parametros por referencia</title>
</head>
<body>
  <?php
    // Parámetro por valor, no modifica la variable de entrada
    // todos los cambios ocurren solo dentro del ambito de la
    // variable...
    function incrementa($valor1){
      $valor1++;
      return $valor1;
    }
    
    $numero = 5;
    
    echo incrementa($numero) . "<br/>";
    
    echo $numero . "<br/>";
    
    function a_minusculas(&$param){
      // Colocando un ampersan & delante del parametro de la función
      // pasamos la variable por referencia, con esto automaticamente
      // si el valor de la variable cambiara fuera del ambito de la misma
      $param = strtolower($param);
      $param = ucwords($param);
      return $param;
    }

    $cadena = "hoLa MunDo";
    echo a_minusculas($cadena) . "<br/>";
    echo $cadena;
  ?>
</body>
</html>