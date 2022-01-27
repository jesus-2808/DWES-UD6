
<?php

function listar()
{
    // Se incluye el modelo.
    require './models/coches_model.php';
    // En $libros tenemos un array con todos los libros gracias al modelo.
    $coches = getCoches();
    // La vista recibe un array para mostrarlo por pantalla.
    include './views/coches_listar.php';
}

function mostrar()
{
    // Se incluye el modelo.
    require './models/coches_model.php';
    // En $libros tenemos un array con todos los libros gracias al modelo.
    $coche = getCoche($_GET['Id']);
    // La vista recibe un array para mostrarlo por pantalla.
    include './views/coches_mostrar.php';
}

function recoger()
{
    // Se incluye el modelo.
    require './models/coches_model.php';
    // En $libros tenemos un array con todos los libros gracias al modelo.

    if (isset($_GET['Id'])) {
        $id = $_GET['Id'];
        $coche = getCoche($_GET['Id']);
    }
    // La vista recibe un array para mostrarlo por pantalla.
    include './views/coches_actualizar.php';
}




function actualizar()
{
    require "./models/coches_model.php";
    $id = $_GET["Id"];
    if (isset($_POST) && count($_POST)) {
        $actualizado = editarElemento($id, $_POST['Marca'], $_POST['Modelo'], $_POST['Cilindrada'], $_POST['Victorias_carreras'], $_POST['Titulos'], $_POST['Fecha_debut']);
        if ($actualizado == true) {
            header("Location: ./index.php?controller=coches&action=listar");
            exit();
        } else {
            header("Location: ./views/coches_actualizar.php?id=" . $id . "&error=si");
        }
    } else {
        $car = getCoche($id);
        
    }
}




?>