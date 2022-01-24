<?php
function listar() {
    // Se incluye el modelo.
    require './models/periodicos_model.php';
    // En $libros tenemos un array con todos los periodicos gracias al modelo.
    $periodicos = getPeriodicos();
    // La vista recibe un array para mostrarlo por pantalla.
    include './views/listarPeriodicos.php';
}

function mostrar() {
    // Se incluye el modelo.
    require './models/periodicos_model.php';
    // En $libros tenemos un array con todos los periodicos gracias al modelo.
    $periodico = getPeriodico($_GET['id']);
    // La vista recibe un array para mostrarlo por pantalla.
    include './views/periodicos_mostrar.php';
}
?>
