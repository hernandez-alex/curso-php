<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POO I</title>
</head>
<body>
  <?php
    // Creando una clase
    class Coche{
      // Creando propiedades (caracteristicas) a una clase
      var $ruedas;
      var $color;
      var $motor;

      // Constructor __construct(): indica el estado inicial de los objetos que pertenecen
      // a la clase
      function __construct(){
        // Antiguamente era una función con el mismo nombre de la clase
        $this->ruedas= 4;
        $this->color= "";
        $this->motor= 1600;
      }

      // Creando métodos (funcionalidades)
      function arrancar(){
        echo "Estoy arrancando <br/>";
      }
      function girar(){
        echo "Estoy girando <br/>";
      }
      function frenar(){
        echo "Estoy frenando <br/>";
      }
    }

    // Creando una instancia de la clase Coche
    $renault = new Coche();
    $mazda = new Coche();
    $seat = new Coche();

    $mazda->girar();
    echo $mazda->ruedas;
  ?>
</body>
</html>
