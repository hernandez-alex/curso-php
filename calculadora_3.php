<style>
  .resultado{
    color: #f00;
    font-weight: bold;
    font-size: 32px;
  }
</style>

<?php
    function calcular($operacion){
      if(strcmp("suma",$operacion) == 0){
        global $num1;
        global $num2;
        echo '<p class="resultado">' . "($operacion): $num1 + $num2 = " . $num1 + $num2 . '</p>';
      } elseif(strcmp("resta",$operacion) == 0){
        global $num1;
        global $num2;
        echo '<p class="resultado">' . "($operacion): $num1 - $num2 = " . $num1 - $num2 . '</p>';
      } elseif(strcmp("multiplicacion",$operacion) == 0){
        global $num1;
        global $num2;
        echo '<p class="resultado">' . "($operacion): $num1 x $num2 = " . $num1 * $num2 . '</p>';
      } elseif(strcmp("division",$operacion) == 0){
        global $num1;
        global $num2;
        echo '<p class="resultado">' . "($operacion): $num1 / $num2 = " . $num1 / $num2 . '</p>';
      } elseif(strcmp("modulo",$operacion) == 0){
        global $num1;
        global $num2;
        echo '<p class="resultado">' . "($operacion): $num1 % $num2 = " . $num1 % $num2 . '</p>';
      } elseif(strcmp("incremento",$operacion) == 0){
        global $num1;
        echo '<p class="resultado">' . "($operacion): $num1++ " . ++$num1 . '</p>';
      } elseif(strcmp("decremento",$operacion) == 0){
        global $num1;
        echo '<p class="resultado">' . "($operacion): $num1-- " . --$num1 . '</p>';
      }
    }
  ?>