<?php
abstract class Vehiculo
{
    private string $color;
    private float $peso;
    static protected int $numero_cambio_color = 0;

    function __construct($color, $peso)
    {
        $this->color = $color;
        $this->peso = $peso;
    }

    public function __set($name, $value)
    {
        if ($name == "color") {
            self::$numero_cambio_color++;
            $this->$name = $value;
        } elseif ($name == "peso") {
            if ($value <= 2100) {
                $this->$name = $value;
            } else {
                echo "el vehiculo tiene mas de 2100 kg";
                $this->$name = 2100;
            }
        } else {
            $this->$name = $value;
        }
    }

    public function __get($name)
    {
        return $this->$name;
    }
    
    public static function ver_atributo($obj)
    {
        echo "numero de cambios de color " . self::$numero_cambio_color . "<br>";

        if (isset($obj->color)) {
            echo "color " . $obj->color . "<br>";
        }
        if (isset($obj->peso)) {
            echo "peso " . $obj->peso . "<br>";
        }
        if (get_class($obj) == "Coche" || get_class($obj) == "Camion") {
            echo "numero de puertas " . $obj->numeroPuertas . "<br>";
        }

        if (get_class($obj) == "Dos_Ruedas") {
            echo "numero de puertas " . $obj->cilindrada;
        }

        if (get_class($obj) == "Camion") {
            echo "Longitud " . $obj->longitud;
        }
    }


    public function circula()
    {
        echo "el vehiculo circula";
    }

    abstract function addPerson($peso_persona);

    abstract function añadirPuertas($puertas_nuevas);




   

    


    function __toString()
    {
        return "color del vehiculo <br>" . $this->color . " <p> peso <br>" . $this->peso;
    }
}
