<?php


function getConnection()
{
    $servidor = "localhost";
    $baseDatos = "coches";
    $usuario = "developer";
    $pass = "developer";

    return new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $pass);
}

function getCoches()
{
    $db = getConnection();
    $result = $db->query('SELECT * FROM coches');
    $coches = [];
    while ($coche = $result->fetch()) {
        $coches[] = $coche;
    }
    return $coches;
}

function getCoche($id)
{
    $db = getConnection();
    $sqlQuery = "SELECT * FROM coches WHERE Id = ?";
    $stmt = $db->prepare($sqlQuery);
    $stmt->bindParam(1, $id);

    $stmt->execute();

    $coche = $stmt->fetch();

    return $coche;
}

function editarElemento($id, $marca, $modelo, $cilindrada, $victorias_carreras, $titulos, $fecha_debut)
{
    try {
        $db = getConnection();
        $sqlQuery = $db->prepare("UPDATE coches SET Marca=?,Modelo=?,Cilindrada=?,victorias_carreras=?,TItulos=?,Fecha=? WHERE Id=?");
        $sqlQuery->bindParam(1, $marca);
        $sqlQuery->bindParam(2, $modelo);
        $sqlQuery->bindParam(3, $cilindrada);
        $sqlQuery->bindParam(4, $victorias_carreras);
        $sqlQuery->bindParam(5, $titulos);
        $sqlQuery->bindParam(6, $fecha_debut);
        $sqlQuery->bindParam(7, $id);
        $sqlQuery->execute();
        $retorno = $sqlQuery->execute();
        $db = null;
        return $retorno;
    } catch (\Throwable $e) {
        echo $e;
        return false;
    }
}

function crearCoche($marca, $modelo, $cilindrada, $victorias_carreras, $titulos, $fecha_debut) {

    $exito = false;

    $db = getConnection();
    $sqlQuery = "INSERT INTO coches (Marca, Modelo, Cilindrada, victorias_carreras, TItulos, Fecha) VALUE (?,?,?,?,?,?)";
    $stmt = $db->prepare($sqlQuery);
    $stmt->bindParam(1, $marca);
    $stmt->bindParam(2, $modelo);
    $stmt->bindParam(3, $cilindrada);
    $stmt->bindParam(4, $victorias_carreras);
    $stmt->bindParam(5, $titulos);
    $stmt->bindParam(6, $fecha_debut);

   

    $exito = $stmt->execute();

    return $exito;
}
