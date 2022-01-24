<?php

// La carpeta donde buscaremos los controladores.
define ('CONTROLLERS_FOLDER', "controllers/");
// Si no se indica un controlador, este es el controlador que se usará.
define ('DEFAULT_CONTROLLER', "libros");
// Si no se indica una acción, esta acción es la que se usará.
define ('DEFAULT_ACTION', "listar");

//Obtenemos el controlador
//Si el usuario no lo introduce, seleccionamos el de por defecto.
$controller = DEFAULT_CONTROLLER;
if (!empty($_GET['controller'])) {
    $controller = $_GET['controller'];
}

//Obtenemos la accion seleccionada.
//Si el usuario no lo introduce, seleccionamos el de por defecto.
$action = DEFAULT_ACTION;
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$controller = CONTROLLERS_FOLDER . $controller . "_controller.php";

try {
    if (is_file($controller)) {
        require_once($controller);
    } else {
        throw new Exception("El controlador no existe - 404 not found");
    }

    //Si la variable $action es una funcion la ejecutamos o detenemos el script.
    if (is_callable($action)) {
        $action();
    } else {
        throw new Exception("La acción no existe - 404 not found");
    }
} catch (Exception $e) {
    echo "Excepción capturada: " . $e->getMessage() . "\n";
}

?>