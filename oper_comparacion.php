<?php
  // Operadores lógicos
  // == Igualda en valor pero no necesariamente en tipo de variable
  // === Igualda en valor y en tipo de variable
  // != Diferencia en valor pero no necesariamente en tipo de variable
  // <> Diferencia en valor y en tipo de variable

  $var1 = 8;
  $var2 = "8";
  $var3 = "Juan";
  $var4 = 2;
  $var5 = 3;

  if($var1 == $var2){
    echo "Igualda en valor pero no necesariamente en tipo de variable";
  }else{
    echo "No son iguales en valor";
  }

  echo "<br/>";

  if($var1 === $var2){
    echo "Igualda en valor y en tipo de variable";
  }else{
    echo "No son iguales en valor y/o tipo de variable";
  }

  echo "<br/>";

  if($var1 != $var2){
    echo "Diferencia en valor pero no necesariamente en tipo de variable";
  }else{
    echo "Son iguales";
  }

  echo "<br/>";

  if($var1 <> $var2){
    echo "Diferencia en valor y en tipo de variable";
  }else{
    echo "No son diferentes en valor y/o tipo de variable";
  }

  echo "<br/>";

  if($var4 > $var5){
    echo "$var4 es mayor que $var5";
  }else{
    echo "$var4 no es mayor que $var5";
  }

  echo "<br/>";

  if($var4 >= $var5){
    echo "$var4 es mayor o igual que $var5";
  }else{
    echo "$var4 no es mayor o igual que $var5";
  }

  echo "<br/>";

  if($var4 < $var5){
    echo "$var4 es menor que $var5";
  }else{
    echo "$var4 no es menor que $var5";
  }

  echo "<br/>";

  if($var4 <= $var5){
    echo "$var4 es menor o igual que $var5";
  }else{
    echo "$var4 no es menor o igual que $var5";
  }
?>