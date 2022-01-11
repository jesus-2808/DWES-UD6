<?php
include_once "class.dimensiones.php";
class Local {
    private string $ciudad;
    private string $calle;
    private int $plantas;
    private float $area;
    private Dimensiones $dimensiones;

    function __construct($ciudad, $calle, $plantas, $area, $dimensiones)
    {
        $this->ciudad=$ciudad;
        $this->calle=$calle;
        $this->plantas=$plantas;
        $this->area=$area;
        $this->dimensiones=$dimensiones;
       
        
    }
   
}
$dimensiones=new Dimensiones(2.1, 2.5,2.3);
var_dump($dimensiones instanceof Dimensiones);
echo "<br>";
?>