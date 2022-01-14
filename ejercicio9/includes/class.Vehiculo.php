<?php
class Vehiculo{
    private string $color;
    private int $peso;

   function __construct ($color, $peso){
       $this->color=$color;
       $this->peso=$peso;
   } 

   

    public function circula(){
        echo "el vehiculo circula";
    }

    public function addPerson($peso_persona){
        $this->peso +=$peso_persona;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function __get($name){
        return $this->$name;
    }
    
    public function __set($name, $value){ 
        $this->$name=$value;
    }

    function __toString()
    {
        return "color del coche <br>" . $this->color . " <p> peso <br>" . $this->peso ;
    }
}
?>