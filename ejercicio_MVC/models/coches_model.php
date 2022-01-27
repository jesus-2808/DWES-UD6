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
        $updated = false;

        $sql = $db->prepare("UPDATE coches SET Marca=?, Modelo=?, Cilindrada=?, victorias_carreras=?, TItulos=?, Fecha=? WHERE Id=?");


        $sql->bindParam(1,  $id);
        $sql->bindParam(2,  $marca);
        $sql->bindParam(3,  $modelo);
        $sql->bindParam(4,  $cilindrada);
        $sql->bindParam(5,  $victorias_carreras);
        $sql->bindParam(6,  $titulos);
        $sql->bindParam(7,  $fecha_debut);


        $sql->execute();
        if ($sql->rowCount() > 0) {
            $updated = true;
        }
    } catch (PDOException $e) {
        echo "Connection fallida: " . $e->getMessage();
        echo "<br>";
    }
    $db = null;
    return $updated;
}

