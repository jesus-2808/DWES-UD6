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

function editarElemento($id, $brand, $model, $engine, $victories, $titles, $debut)
{


    try {
        $db = getConnection();
        $updated = false;

        $sql = $db->prepare("UPDATE coches SET Marca=?, Modelo=?, Cilindrada=?, victorias_carreras=?, TItulos=?, Fecha=? WHERE id=?");


        $sql->bindParam(1,  $id);
        $sql->bindParam(2,  $brand);
        $sql->bindParam(3,  $model);
        $sql->bindParam(4,  $engine);
        $sql->bindParam(5,  $victories);
        $sql->bindParam(6,  $titles);
        $sql->bindParam(7,  $debut);


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

function crearCoche($marca, $modelo, $cilindrada, $victorias_carreras, $titulos, $fecha_debut, $imagen)
{
    $db = getConnection();

    try {
        $sql = $db->prepare("INSERT into coches(Marca, Modelo, Cilindrada, Victorias_carreras, TItulos, Fecha, Imagen) values(?,?,?,?,?,?,?)");
        $sql->bindParam(1, $marca);
        $sql->bindParam(2, $modelo);
        $sql->bindParam(3, $cilindrada);
        $sql->bindParam(4, $victorias_carreras);
        $sql->bindParam(5, $titulos);
        $sql->bindParam(6, $fecha_debut);
        $sql->bindParam(7, $imagen);
        $sql->execute();
        $id = $db->lastInsertId();
        $db = null;
        return $id;
    } catch (\Throwable $e) {
        echo "Connection fallida: " . $e->getMessage();
        echo "<br>";
    }
}
