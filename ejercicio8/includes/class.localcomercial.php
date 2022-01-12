<?php
include "class.local.php";

class LocalComercial extends Local{
    private string $razonSocial;
    private string $nLicencia;

    function __construct($ciudad, $calle, $plantas, $dimensiones,$razonSocial, $nLicencia){
        parent::__construct($ciudad, $calle, $plantas, $dimensiones);
        if (!is_string($razonSocial)) {
            echo "la razon social no tiene el formato correcto";
            die();
        } else {
            $this->razonSocial = $razonSocial;
        }
        if (!is_string($nLicencia)&& strlen($nLicencia)>9) {
            echo "el numero de licencia no tiene el formato ni la longitud correcta";
            die();
        } else {
            $this->nLicencia = $nLicencia;
        }
    }

    public function __toString()
    {
        return " <p> datos del local</p> <p> " . $this->razonSocial . " </p> <p> Nºde licencia <br>" . $this->nLicencia ;
    }

}

$comercial1=new LocalComercial("Dos Hermanas", "Reyes Catolicos", 3, $dimensiones, "ferreteria", "45090741P");
echo $comercial1;
?>