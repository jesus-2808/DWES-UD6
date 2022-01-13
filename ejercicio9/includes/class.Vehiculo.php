<?php
class Vehiculo{
    private string $color;
    private string $peso;

   function __construct ($color, $peso){
       $this->color=$color;
       $this->peso=$peso;
   } 

    public function __get($name){
    return $this->$name;
    }

    public function __set($name, $value)
    {
    return $name->$value;
    }

    public function addPerson($peso_persona){
        $this->peso +=$peso_persona;
    }
}
?>