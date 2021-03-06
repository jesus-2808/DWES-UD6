<?php

class Coche extends Cuatro_Ruedas{
    private int $numero_cadenas_nieve;

    public function __construct($color, $peso, $numeroPuertas, $numero_cadenas_nieve)
    {
        parent::__construct($color, $peso, $numeroPuertas);
        $this->numero_cadenas_nieve=$numero_cadenas_nieve;
    }

    public function añadir_cadenas_nieve($num){
        return $this->numero_cadenas_nieve +=$num;
    }

    public function quitar_cadenas_nieve($num){
        return $this->numero_cadenas_nieve -=$num;
    }

    public function addPerson($peso_persona)
    {
        parent::addPerson($peso_persona);
        if($this->peso >=1500 && $this->numero_cadenas_nieve <=2){
            echo "atencion ponga 4 cadenas para la nieve";
        }
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
            $this->$name=$value;
        } else {
          parent::__set($name, $value);
        }
    }

    public function __toString()
    {
        return " Datos del vehiculo <p>".parent::__toString()."</p>  <p> cadenas de nieve <br>" . $this->numero_cadenas_nieve ;
    }
}
