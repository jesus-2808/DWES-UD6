<?php

interface IEquipoFutbol{
    public function getNumeroJugadores();
    public function juegaPartido();
}

interface ICampeonato{
    public function nombreCampeonato();
}

class EquipoFutbol implements IEquipoFutbol, ICampeonato{
    private String $nombreEquipo;
    private int $numeroJugadores;
    private string $nombreCampeonato;

    public function __construct($nombreEquipo, $numeroJugadores, $nombreCampeonato)
    {
        $this->nombreEquipo = $nombreEquipo;
        $this->numeroJugadores = $numeroJugadores;  
        $this->nombreCampeonato = $nombreCampeonato; 
    }

    public function setNumeroJugadores($numeroJugadores){
        $this->numeroJugadores=$numeroJugadores;
    }
    public function getNumeroJugadores()
    {
      return $this->numeroJugadores;
    }

    public function setNombreEquipo($nombreEquipo){
        $this->nombreEquipo=$nombreEquipo;
    }

    public function getNombreEquipo(){
        return $this->nombreEquipo;
    }
    public function juegaPartido()
    {
       return "victoria " .$this->nombreEquipo;
    }

    public function setNombreCampeonato($nombreCampeonato){
        $this->nombreCampeonato=$nombreCampeonato;
    }

    public function getNombreCampeonato(){
        return $this->nombreCampeonato;
    }

    public function nombreCampeonato()
    {
        return $this->nombreCampeonato;
    }
}

$datosEquipo= new EquipoFutbol("Sevilla", 20, "Champions");
echo $datosEquipo->juegaPartido();
echo "<br>";
echo $datosEquipo->getNumeroJugadores();
echo "<br>";
echo $datosEquipo->nombreCampeonato();

var_dump($datosEquipo instanceof EquipoFutbol);
echo "<br>";
var_dump($datosEquipo instanceof IEquipoFutbol);
echo "<br>";
var_dump($datosEquipo instanceof ICampeonato);
echo "<br>";
var_dump(!($datosEquipo instanceof IEquipoFutbol));