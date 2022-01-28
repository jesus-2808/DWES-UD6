
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

function form() {

    // Se incluye el modelo.
    require './models/coches_model.php';

    // En caso de que tengamos un id cargamos los datos de la receta.
    if (isset($_GET['Id'])) {
        $id = $_GET['Id'];
        $coche = getCoche($id);
    }
    
    include './views/coches_Form.php';
}

function formAction() {

    // Se incluye el modelo.
    require './models/coches_model.php';

    // Si tenemos un id en la url, significa que estamos modificando una receta.
    if (isset($_GET['Id'])) {
        $id = $_POST['Id'];

        $coche = getCoche($id);

        // Si no se ha añadido ninguna imagen nos quedaremos con la que tengamos en la base de datos, en caso contrario subimos la imagen nueva.

       editarElemento($id, $_POST['Marca'], $_POST['Modelo'], $_POST['Cilindrada'], $_POST['Victorias_carreras'], $_POST['Titulos'], $_POST['Fecha_debut']);
        header("Location: ?controller=coches&action=form&Id=$id");
    } else {
        // En $creada tenemos si se ha realizado la creación o no.
        $creado = crearCoche($_POST['Marca'], $_POST['Modelo'], $_POST['Cilindrada'], $_POST['Victorias_carreras'], $_POST['Titulos'], $_POST['Fecha_debut']);

        // La vista recibe un boolean.
        include './views/coches_crear.php';
    }
}


?>