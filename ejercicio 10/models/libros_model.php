<?php

    function getConnection() {
        $user = 'developer';
        $pwd = 'developer';
        return new PDO('mysql:host=localhost;dbname=biblioteca', $user, $pwd);
    }

    function getLibros() {
        $db = getConnection();
        $result = $db->query('SELECT titulo, precio FROM libros');
        $libros = [];
        while ($libro = $result->fetch()) {
            $libros[] = $libro;
        }
        return $libros;
    }

    function getLibro($id) {
        $db = getConnection();
        $sqlQuery = "SELECT titulo, precio FROM libros WHERE id = ?";
        $stmt = $db->prepare($sqlQuery);
        $stmt->bindParam(1, $id);

        $stmt->execute();

        $libro = $stmt->fetch();

        return $libro;
    }

    
?>