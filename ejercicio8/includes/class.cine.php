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
            return " <p> Datos del local comercial <br> " .parent::__toString()  . " </p> <p> calle <br>" . $this->aforoSala ;
        }
        
    }



   
?>