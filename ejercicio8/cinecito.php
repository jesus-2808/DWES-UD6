<?php
function __autoload ($name){
    include_once 'includes/class.' . $name . '.php';
}
$cines[0]=new Cine("Dos Hermanas", "Real,1", 4, new Dimensiones(1.9,2.4,1.7), "cine", "49090637D", 500);
$cines[1]=new Cine("Cádiz", "Nuevo Mirandilla,3", 3, new Dimensiones(1.3,2.3,1.9), "cine", "49092337D", 300);
$cines[2]=new Cine("Chipiona", "Sierpes,4", 4, new Dimensiones(2.3,3.3,2.3), "cine", "19092337D", 400);
var_dump($cines[1]);
$copia= clone $cines[1];
$copia->dimensiones->largo=3.2;
$copia->dimensiones->alto=3.2;
$copia->dimensiones->ancho=5.5;

foreach ($cines as $cine)
   echo $cine . '<br>';
echo $copia;


?>