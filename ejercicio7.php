<?php

include_once "Cuadrado.php";
include "Triangulo.php";
include_once "Circulo.php";
$cir=new Circulo(4.0, "verde");
$tri=new Triangulo( 4.0, 3.0, "azul");
$square=new Cuadrado(3.0, "gris");

echo "<table border =2>";
echo "<th>", "color y figura", "</th>";
echo "<th>", "area", "</th>";
echo "<tr>";
        
echo "<td>";

$cir->dibuja();

echo "</td>";
echo "<td>";

echo $cir->area();


echo "</td>";

echo "</tr>";

echo "<td>";

$tri->dibuja();

echo "</td>";
echo "<td>";

echo $tri->area();


echo "</td>";


echo "</tr>";

echo "<td>";

$square->dibuja();

echo "</td>";
echo "<td>";

echo $square->area();


echo "</td>";

echo "</tr>";


echo "</table>";



?>