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
      function establece_color($color_coche){
        $this->color=$color_coche;
        echo "El color de este coche es " . $this->color . "<br/>";
      }
    }

    // Creando una instancia de la clase Coche
    // $renault = new Coche();
    // $mazda = new Coche();
    // $seat = new Coche();

    // $mazda->girar();
    // echo $mazda->ruedas;

    // echo "<br/>";
    
    // $renault->establece_color("Rojo");
    // $seat->establece_color("Azul");

// ----------------------------------------------------------------------

    // Creando una clase
    class Camion extends Coche{

      // Constructor __construct(): indica el estado inicial de los objetos que pertenecen
      // a la clase
      function __construct(){
        // Antiguamente era una función con el mismo nombre de la clase
        $this->ruedas= 8;
        $this->color= "Gris";
        $this->motor= 2600;
      }

      function establece_color($color_camion){
        $this->color=$color_camion;
        echo "El color de este camion es " . $this->color . "<br/>";
      }

      function arrancar(){
        parent::arrancar();
        echo "Camión arrancado.";
      }
    }

  ?>