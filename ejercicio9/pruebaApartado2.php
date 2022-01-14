<?php
function __autoload ($name){
    include_once 'includes/class.' . $name . '.php';
}

$coche1=new Coche("rojo", 1200, 4, 0 );



$coche1->addPerson(50);
$coche1->addPerson(60);
$coche1->repintar("blanco");
echo $coche1;

?>
