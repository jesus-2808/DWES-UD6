<?php
class Vehiculo{
    private string $color;
    private string $peso;

   function __construct ($color, $peso){
       $this->color=$color;
       $this->peso=$peso;
   } 

    public function setCircula($circula){
    $this->circula=$circula;
    }

    public function getCircula(){
    return $this->circula;
    }

    public function circula()
    {
    return $this->circula;
    }
}
?>