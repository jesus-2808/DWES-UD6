<?php
class Dimensiones
{
    private float $largo;
    private float $alto;
    private float $ancho;

    function __construct($largo, $alto, $ancho)
    {
        $this->largo = $largo;
        $this->alto = $alto;
        $this->ancho = $ancho;
    }


    public function __get($nombre)
    {
        return "el valor del atributo es " . $this->$nombre;
    }

    public function __set($name, $value)
    {
        if ($value > 1 && is_float($value)) {
            $this->$name = $value;
        } else {
            echo "inserta valores adecuados";
            die();
        }
    }


    function __toString()
    {
        return $this->largo . "largo <br>" . $this->alto . "alto <br>" . $this->ancho . "ancho";
    }
}
/*
$d1 = new Dimensiones(3, 7, 2);

echo $d1;
*/