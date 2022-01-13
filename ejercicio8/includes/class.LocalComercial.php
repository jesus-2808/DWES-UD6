<?php


class LocalComercial extends Local{
    private string $razonSocial;
    private string $nLicencia;

    function __construct($ciudad, $calle, $plantas, $dimensiones,$razonSocial, $nLicencia){
        parent::__construct($ciudad, $calle, $plantas, $dimensiones);
        if (is_string($razonSocial) && is_string($nLicencia)) {
           
            $this->nLicencia = $nLicencia;
            $this->razonSocial = $razonSocial;
           
        } else {
            echo "el numero de licencia y la r social no tiene el formato ni la longitud correcta";
            die();

        }
    }

    public function __toString()
    {
        return " <p>".parent::__toString()."</p> <p> razon social</p> <p> " . $this->razonSocial . " </p> <p> Nºde licencia <br>" . $this->nLicencia ;
    }

}
/*
$comercial1=new LocalComercial("Dos Hermanas", "Reyes Catolicos", 3, $dimensiones, "ferreteria", "45090741P");
echo $comercial1;
*/
?>