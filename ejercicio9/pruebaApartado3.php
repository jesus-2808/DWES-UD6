<?php
function __autoload ($name){
    include_once 'includes/class.' . $name . '.php';
}

$coche2=new Coche("azul", 650, 4, 0 );

echo " <p>datos del coche antes de montarse la bola de sebo de 700kg</p>";
echo $coche2;

$coche2->addPerson(700);
echo " <p>datos del coche antes de montarse el gordaco</p>";
echo $coche2;

echo $coche2->repintar("amarillo");
echo $coche2->añadir_cadenas_nieve(3);
$coche2->numeroPuertas +2;
echo " <p><b>coche repintado y cadenas añadidas</b></p>";
echo $coche2;

echo " <p><b>Objeto 2 ruedas</b></p>";
$obj2ruedas=new Dos_Ruedas("marron", 30, 1000);
$obj2ruedas->addPerson(2);
$obj2ruedas->poner_gasolina(2000);

echo $obj2ruedas;
?>
