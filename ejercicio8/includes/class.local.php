<?php
include_once "class.dimensiones.php";
class Local
{
    private string $ciudad;
    private string $calle;
    private int $plantas;
    /*private float $area; */
    private Dimensiones $dimensiones;

    function __construct($ciudad, $calle, $plantas, $dimensiones)
    {

        if (!is_string($ciudad)) {
            echo "la ciudad no tiene el formato correcto";
            die();
        } else {
            $this->ciudad = $ciudad;
        }

        if (!is_string($calle)) {
            echo "la ciudad no tiene el formato correcto";
            die();
        } else {
            $this->calle = $calle;
        }

        if ($plantas < 0 || $plantas > 10) {
            echo "plantas incorrectas";
            die();
        } else {
            $this->plantas = $plantas;
        }

        if ($dimensiones instanceof Dimensiones) {
            $this->dimensiones = $dimensiones;
        } else {
            echo "no es un objeto de la instancia adecuada";
        }
    }



    public function __get($name)
    {
        if ($name == "area") {
            return $this->dimensiones->ancho * $this->dimensiones->alto;
        } else {
            $this->$name;
        }
    }


    public function __toString()
    {
        return " <p> ciudad <br> " . $this->ciudad . " </p> <p> calle <br>" . $this->calle . " </p> <p>plantas <br>" . $this->plantas . "</p> dimensiones <br> <p>" . $this->dimensiones;
    }

    public function __clone()
    {
        $this->dimensiones = clone $this->dimensiones;
    }
}
$dimensiones = new Dimensiones(1,1,1);
var_dump($dimensiones instanceof Dimensiones);

$dimensiones2 = clone $dimensiones;
echo $dimensiones2;

$local1=new Local("Dos Hermanas", "Reyes Catolicos" , "2",  $dimensiones);
echo $local1;
echo "<br>";
