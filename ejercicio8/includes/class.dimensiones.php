<?php
class Dimensiones
{
    private float $largo;
    private float $alto;
    private float $ancho;

    function __construct($largo, $alto, $ancho)
    {

        if ($largo < 1 && !is_float($largo)) {
            echo "no se puede continuar";
            die();
        } else {
            $this->largo = $largo;
        }

        if ($alto < 1 && !is_float($alto)) {
            echo "no se puede continuar";
            die();
        } else {
            $this->alto = $alto;
        }

        if ($alto < 1 && !is_float($ancho)) {
            echo "no se puede continuar";
            die();
        } else {
            $this->ancho = $ancho;
        }
    }


    public function __get($nombre)
    {
        return "el valor del atributo es " . $this->$nombre;
    }


    function __toString()
    {
        return $this->largo . "largo <br>" . $this->alto . "alto <br>" . $this->ancho . "ancho";
    }
}

$d1 = new Dimensiones(3, 7, 2);

echo $d1;

