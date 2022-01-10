<?php


class Vivienda {
    private string $tipoVivienda;
    private float $valorMercado;
 
    public function __construct($tipoVivienda, $valorMercado)
    {
        $this->tipoVivienda = $tipoVivienda;
        $this->valorMercado = $valorMercado;  
    }

    public function __get($nombre){
        return "el valor del atributo es " .$this->$nombre;

    }

    public function __set($nombre,$valor){
        switch ($nombre){
            case "tipoVivienda":
             $this->$nombre = $valor;
            break;
            case "valorMercado":
                if ($valor>0)
                     $this->$nombre=$valor;
                else
                    echo "el valor no puede ser menor a 0";
                break;
            
        } 
       
    }
   
}

$miCasa=new Vivienda("casa", "118000");
echo $miCasa->tipoVivienda;
echo "<br>";
echo $miCasa->valorMercado;
echo "<br>";
$miCasa->tipoVivienda="piso";
echo $miCasa->tipoVivienda;
echo "<br>";
echo $miCasa->valorMercado = -3;
echo "<br>";
echo $miCasa->valorMercado;

?>