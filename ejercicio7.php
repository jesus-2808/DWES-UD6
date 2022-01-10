<?php
abstract class FiguraGeometrica{
    private string $color;

    abstract protected function dibuja();
    abstract protected function area();
    
}

class Cuadrado extends FiguraGeometrica{
    private string $tipo;
    private string $area;

    protected function getTipo(){
        return $this->tipo;
    }
    protected function setTipo($tipo){
        return $this->tipo=$tipo;
    }
    protected function dibuja(){
        return $tipo;
    }

    protected function area(){
        return $area;
    }
}
?>