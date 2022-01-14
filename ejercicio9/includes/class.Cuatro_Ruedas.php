<?php
class Cuatro_Ruedas extends Vehiculo
{
    private int $numero_puertas;

    function __construct($color, $peso, $numero_puertas)
    {
        
        $this->numero_puertas = $numero_puertas;
        parent::__construct($color, $peso);
    }

    public function repintar($color)
    {
        $this->color=$color;
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
    
    function __toString()
    {
        return  " Datos del vehiculo <p>".parent::__toString()."</p>  <p> numero de puertas <br>" . $this->numero_puertas  ;
    }
}
