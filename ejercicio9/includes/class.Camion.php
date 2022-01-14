<?php

class Camion extends Cuatro_Ruedas{
    private int $longitud;

    public function __construct($color, $peso, $numero_puertas, $longitud)
    {
        parent::__construct($color, $peso, $numero_puertas);
        $this->longitud=$longitud;
    }

    public function añadir_remolque($longitud_remolque){
         $this->longitud +=$longitud_remolque;
    }

    public function __get($name){
        return $this->$name;
    }
    
     public function __set($name, $value)
    {
     return $name->$value;
    }
  
}

?>