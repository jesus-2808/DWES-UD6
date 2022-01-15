<?php
class Cuatro_Ruedas extends Vehiculo
{
    private int $numero_puertas;

    function __construct($color, $peso, $numeroPuertas)
    {
        
        $this->numeroPuertas = $numeroPuertas;
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

   public function addPerson($peso_persona)
    {
        $this->peso = $this->peso+$peso_persona;
     
    }
    
    public function añadirPuertas($puertas_nuevas)
    {
        $this->numeroPuertas = $this->numeroPuertas+$puertas_nuevas;
    }
    function __toString()
    {
        return  " Datos del vehiculo <p>".parent::__toString()."</p>  <p> numero de puertas <br>" . $this->numeroPuertas  ;
    }
}
