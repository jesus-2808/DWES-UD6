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

include "ejercicio1.php";
class Trabajador extends Persona {
   
    private $nombreEmpresa;

    function __construct($nombre, $dni, $sexo, $peso, $altura, $nombreEmpresa)
    {
        
        $this->$nombreEmpresa=$nombreEmpresa;
        Persona::__construct($nombre,$dni,$sexo,$peso,$altura);
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

    public function setNombreEmpresa($nombreEmpresa)
    {
        $this->nombreEmpresa = $nombreEmpresa;
    }
    public function getNombreEmpresa()
    {
        $this->nombreEmpresa ;
    }

    public function mostrarCompleto()
    {
        Persona::mostrar();
        echo " Empresa: " . $this->nombreEmpresa;
    }

      
}
$trabajador = new Trabajador("Antonio","231423x","Masculino",92.4,185,"deloitte");

$trabajador->mostrarCompleto();
$trabajador->setNombre("Manuel");
$trabajador->setPeso(90);
$trabajador->setSexo("Femenino");
$trabajador->setDNI("1111111111G");
$trabajador->setAltura(192);

