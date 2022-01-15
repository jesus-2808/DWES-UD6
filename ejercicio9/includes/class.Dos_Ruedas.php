<?php
class Dos_Ruedas extends Vehiculo
{
    private int $cilindrada;

    function __construct($color, $peso, $cilindrada)
    {
       
        $this->cilindrada = $cilindrada;
        parent::__construct($color, $peso);
    }

    function addPerson($peso_persona)
    {
        $this->peso +=$peso_persona+1.5;
    }


    public function poner_gasolina($litros)
    {
     $this->peso +=$litros*1.5; 
    }

    public function añadirPuertas($puertas_nuevas)
    {
        $this->numeroPuertas = $this->numeroPuertas+$puertas_nuevas;
    }
    public function __get($name)
    {
        if (property_exists(get_Class(),$name)) {
            return $this->$name;
        } else {
            return parent::__get($name);
        }
    }

    public function __set($name, $value)
    {
        if (property_exists(get_Class(),$name)) {
            $this->$name = $value;
        } else {
            parent::__set($name, $value);
        }
    }
}



    
