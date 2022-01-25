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

function editarElemento( $id)
{
 

    try {
        $db = getConnection();
        $updated = false;

        $sql = $db->prepare("UPDATE coches SET Marca=?, Modelo=?, Cilindrada=?, victorias_carreras=?, TItulos=?, Fecha=? WHERE id=?");

            
              $sql->bindParam(1,  $id);
       
        if ($updated = $sql->execute()) {
            $updated = true;
        } else {
            $updated = false;
        }
    } catch (PDOException $e) {
        echo "Connection fallida: " . $e->getMessage();
        echo "<br>";
    }
    $db = null;
    return $updated;
}
