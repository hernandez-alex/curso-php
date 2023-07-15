<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array - Dimensiones</title>
</head>
<body>
  <?php
    $alimentos = array(
      "fruta"=>array(
                      "tropical"=>"kiwi",
                      "citrico"=>"mandarina",
                      "otros"=>"manzana" 
                    ),
      "leche"=>array(
                      "animal"=>"vaca",
                      "vegetal"=>"coco"
                    ),
      "carne"=>array(
                      "vacuno"=>"lomo",
                      "porcino"=>"pata"
                    )
    );

    echo $alimentos["carne"]["vacuno"] . "<br/>";
    echo $alimentos["leche"]["animal"] . "<br/>";

    echo "<br/>Recorriendo un array anidado, prueba Alex... <br/>";

    foreach ($alimentos as $key_lev1 => $val_lev1) {
      echo "$key_lev1: <br/>";
      foreach ($val_lev1 as $key_lev2 => $val_lev2) {
        echo " - $val_lev2 <br/>";
      }
      echo "</br>";
    }

    echo "</br>Recorriendo el array anidado, como Tutorial... </br>";
    echo "No funciona each was deprecated...";
    // foreach ($alimentos as $clave_alim => $alim) {
    //   echo "$clave_alim: <br/>";

    //   reset($alim);
    //   while(list($clave, $valor)=each($alim)){
    //     echo "$clave=$valor </br>";
    //   }
    //   echo "</br>";
    // }

    echo "</br>Usando la función vardump de PHP...</br>";
    echo var_dump($alimentos);

  ?>
</body>
</html>