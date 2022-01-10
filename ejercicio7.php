<?php

include_once "Cuadrado.php";
include "Triangulo.php";
include_once "Circulo.php";

$cir=new Circulo("rojo", 2);
$tri=new Triangulo( 4.0, 3.0, "azul");
$cir->dibuja();
echo $cir->area();
echo "<br>";

$tri->dibuja();
echo $tri->area();



?>