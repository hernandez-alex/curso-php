<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prioridad de Operadores Lógicos</title>
</head>
<body>
  <?php
    $var1 = true;
    $var2 = false;
    $resultado = $var1 && $var2;
    
    echo "Con && <br/>";
    if($resultado === true){
      echo "Correcto <br/>";
    }else{
      echo "Incorrecto <br/>";
    }
    
    $resultado = $var1 and $var2;
    echo "Con and <br/>";
    if($resultado === true){
      echo "Correcto <br/>";
    }else{
      echo "Incorrecto <br/>";
    }

    echo " <br/> Prueba condicional con if anidado <br/>";
    $edad = 39;
    if ($edad <=18){
      echo "($edad) Eres menor de edad <br/>";
    }else if($edad <= 40){
      echo "($edad) Eres joven <br/>";
    }else if($edad <= 65){
      echo "($edad) Eres maduro <br/>";
    }else{
      echo "($edad) Cuidate <br/>";
    }

    echo " <br/> Que pasa si los if son independientes en este caso particular <br/>";
    if ($edad <=18){
      echo "($edad) Eres menor de edad <br/>";
    }
    if($edad <= 40){
      echo "($edad) Eres joven <br/>";
    }
    if($edad <= 65){
      echo "($edad) Eres maduro <br/>";
    }else{
      echo "($edad) Cuidate <br/>";
    }

    // En conclusión se debe estudiar bien la prioridad de los operadores
    // y tambien el flujo de las estructuras de control con la finalidad
    // de obtener lo resultados deseados.
  ?>
</body>
</html>