<?php
abstract class Vehiculo{
    private string $color;
    private float $peso;
    static protected int $numero_cambio_color=0;

   function __construct ($color, $peso){
       $this->color=$color;
       $this->peso=$peso;
   } 

   public static function ver_atributo($obj){
    return get_object_vars($obj);
   }
   

    public function circula(){
        echo "el vehiculo circula";
    }

    abstract function addPerson($peso_persona);

    abstract function añadirPuertas($puertas_nuevas);
        
    

    public function setPeso($peso) {
        if($this->peso>2100){
            echo "el peso supera el maximo";
            die();
        }else{
            $this->peso = $peso;
        }
       
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function __get($name){
        return $this->$name;
    }
    
    public function __set($name, $value){ 
        $this->$name=$value;
    }

  
    function __toString()
    {
        return "color del vehiculo <br>" . $this->color . " <p> peso <br>" . $this->peso ;
    }
}
?>