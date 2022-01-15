<?php

function __autoload ($name){
    include_once 'includes/class.' . $name . '.php';
}

echo " <p><b>Objeto 2 ruedas</b></p>";
$moto2=new Dos_Ruedas("transparente", 1550, 1000);
$moto2->addPerson(70);

echo $moto2;

echo " <p><b>nuevo color</b></p>";
$moto2->color="verde";
echo $moto2;

$camion1=new Camion ("blanco", 6000, 4, 600);
$camion1->addPerson(84);
$camion1->añadirPuertas(2);

echo $camion1;

print_r($camion1->ver_atributo($camion1));

?>