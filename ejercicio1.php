<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
class Persona
{
    private $nombre;
    private $dni;
    private $sexo;
    private $peso;
    private $altura;

    function __construct($nombre, $dni, $sexo, $peso, $altura)
    {
        $this->nombre = $nombre;
        $this->dni = $dni;
        $this->sexo = $sexo;
        $this->peso = $peso;
        $this->altura = $altura;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setDni($dni)
    {
        $this->dni = $dni;
    }
    public function getDni($dni)
    {
        $this->dni = $dni;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }
    public function getSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
    }
    public function getPeso($peso)
    {
        $this->peso = $peso;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;
    }
    public function getAltura($altura)
    {
        $this->altura = $altura;
    }

    public function mostrar()
    {
        echo $this->nombre,  $this->dni, $this->sexo,  $this->peso, $this->altura;
    }

}

$p1=new Persona("Jesus", "00000P", "hombre", "85kg", "180cm");

$p1->mostrar();
echo "<br>";
$p1->setNombre("Pablo");
$p1->mostrar();