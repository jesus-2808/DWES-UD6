<?php
include_once "class.localcomercial.php";

class Cine extends LocalComercial{
    private int $aforoSala;

    function __construct($ciudad, $calle, $plantas, $dimensiones,$razonSocial, $nLicencia, $aforoSala){
        parent::__construct($ciudad, $calle, $plantas, $dimensiones, $razonSocial,$nLicencia, $aforoSala);

        if (!is_int($aforoSala) && $aforoSala<0) {
            echo "valores incorrectos en el aforo de la sala";
            die();
        } else {
            $this->aforoSala = $aforoSala;
        }
        
        }
    
        public function __toString()
        {
            return " <p> Datos del local comercial <br> " .parent::__toString()  . " </p> <p> aforo <br>" . $this->aforoSala ;
        }
        
    }/*
$aforoSala=30;

$cine1=new Cine("Castilleja", "Calle Larga", 3, $dimensiones, "salon de ocio", "497397334W", $aforoSala);
$cine2=new Cine("Los Palacios", "Calle Sierpes", 2, $dimensiones, "establo", "11111111F", 90);
$cine3=new Cine("Coria del Rio", "Calle japon", 4, $dimensiones, "pub", "32392348P", 75);
*/
   
?>