
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



function actualizar()
{
    // Se incluye el modelo.
   require './models/coches_model.php';
    // En $coches tenemos un array con todos los libros gracias al modelo.
    $coche = getCoche($_GET['Id']);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        $coche = obtenerElemento($id);
        $marca = $_POST['Marca'];
        $modelo = $_POST['Modelo'];
        $descripcion =  $_POST['Cilindrada'];
        $precio = $_POST['Victorias_carreras'];
        $cantidad = $_POST['Titulos'];
        $fecha = $_POST['Fecha_debut'];
  
        
    if ($coche_editado == true) {
        header("Location: ./index.php");
        exit();
    } else {
        header("Location: ./views/coches_actualizar.php?Id=" . $id . "&error=si");
    }
}

function crear(){

}


?>