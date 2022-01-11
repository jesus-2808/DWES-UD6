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

    public function setLargo($largo)
    {
        $this->largo = $largo;
    }

    public function getLargo($largo)
    {
        $this->largo = $largo;
    }

    public function setAlto($alto)
    {
        $this->alto = $alto;
    }
    public function getAlto($alto)
    {
        $this->alto = $alto;
    }

    public function setAncho($ancho)
    {
        $this->ancho = $ancho;
    }

    public function getAncho($ancho)
    {
        $this->ancho = $ancho;
    }


    function __toString()
    {
        return $this->largo . "largo <br>" . $this->alto . "alto <br>" . $this->ancho . "ancho";
    }

    public function __get($nombre)
    {
        return "el valor del atributo es " . $this->$nombre;
    }

    public function __set($nombre, $valor)
    {
        if ($valor < 1 && !is_float($valor))  {
            echo "no se puede continuar";
            
        } else {
            $this->$nombre=$valor;
        }
    }
}

$d1 = new Dimensiones(3, 7, 2);

echo $d1;
$d1->alto=0;