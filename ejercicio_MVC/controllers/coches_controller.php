
<?php

function listar() {
    // Se incluye el modelo.
    require './models/coches_model.php';
    // En $libros tenemos un array con todos los libros gracias al modelo.
    $coches = getCoches();
    // La vista recibe un array para mostrarlo por pantalla.
    include './views/coches_listar.php';
}

function mostrar() {
    // Se incluye el modelo.
    require './models/coches_model.php';
    // En $libros tenemos un array con todos los libros gracias al modelo.
    $coche = getCoche($_GET['id']);
    // La vista recibe un array para mostrarlo por pantalla.
    include './views/coches_mostrar.php';
}

function actualizar() {
    // Se incluye el modelo.
    require './models/coches_model.php';
    // En $libros tenemos un array con todos los libros gracias al modelo.
    if(isset($_GET['id'])){
        $id=$_GET['id'];
    }else if (isset($_GET['id'])){
        $id = $_POST['id'];
    }
    $coche=getCoche($id);
    
  
    if (isset($_GET['actualizar'])) {
        $coche_editado = editarElemento( $_POST["id"], $_POST["Marca"],$_POST["Modelo"], $_POST["Cilindrada"],$_POST["victorias_carreras"],$_POST["TItulos"],
        $_POST["Fecha_debut"]);
    }
    include './views/coches_actualizar.php';
   
}

?>