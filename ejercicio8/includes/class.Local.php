<?php

class Local
{
    private string $ciudad;
    private string $calle;
    private int $plantas;
    private Dimensiones $dimensiones;

    function __construct($ciudad, $calle, $plantas, $dimensiones)
    {

        if ($dimensiones instanceof Dimensiones && is_string($calle) && is_string($ciudad) && is_int($plantas) && $plantas >= 1 && $plantas <= 10 )  {
            $this->dimensiones = $dimensiones;
            $this->calle = $calle;
            $this->ciudad = $ciudad;     
            $this->plantas = $plantas;
          
        } else {
            echo "ErrorLocal";
            die();
        }
    } 
    
    public function __get($name)
    {
        if ($name == "area") {
            return $this->dimensiones->ancho * $this->dimensiones->largo;
        } elseif ($name == "dimensiones") {
            return $this->$name;
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
/*
$dimensiones = new Dimensiones(1,1,1);
var_dump($dimensiones instanceof Dimensiones);

$dimensiones2 = clone $dimensiones;
echo $dimensiones2;

$local1=new Local("Dos Hermanas", "Reyes Catolicos" , "2",  $dimensiones);
echo $local1;
echo "<br>";
*/