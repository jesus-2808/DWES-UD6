<?php

function __autoload ($name){
    include_once 'includes/class.' . $name . '.php';
}

$cocheVerde = new Coche("Verde", 2100, 4, 2);

$cocheVerde->añadir_cadenas_nieve(2);

$cocheVerde->addPerson(80);

$cocheVerde->color="azul";

$cocheVerde->quitar_cadenas_nieve(4);

$cocheVerde->repintar("negro");


echo $cocheVerde;
?>