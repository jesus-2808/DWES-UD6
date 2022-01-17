<?php

class Camion extends Cuatro_Ruedas{
    private int $longitud;

    public function __construct($color, $peso, $numeroPuertas, $longitud)
    {
        parent::__construct($color, $peso, $numeroPuertas);
        $this->longitud=$longitud;
    }

    public function añadir_remolque($longitud_remolque){
         $this->longitud +=$longitud_remolque;
    }

   

    public function __get($name) {
        if (property_exists(get_Class(),$name)) {
            return $this->$name;
        } else {
            return parent::__get($name);
        }
    }
    
   
    public function __set($name, $value){
        if (property_exists(get_Class(),$name)) {
            $this->name=$value;
        } else {
          parent::__set($name, $value);
        }
    }

    public function __toString()
    {
        return " Datos del vehiculo <p>".parent::__toString()."</p>  <p> longitud <br>" . $this->longitud ;
    }
  
}

?>