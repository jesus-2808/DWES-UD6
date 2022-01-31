<?php
    function getConnection(){
        $servidor = "localhost";
        $baseDatos = "coches";
        $usuario = "developer";
        $pass = "developer";
    
        return new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $pass);
    }

    function getUser($username){
        try {
          $connection=getConnection();
          $sql = $connection->prepare("SELECT * from usuarios where username=?");
          $sql->bindParam(1, $username);
          $sql->execute();
          $user = $sql->fetch();
          $connection=null;
          return $user;
        } catch (PDOException $e) {
           echo $e;
        }
       
     
    }

    function login ($username, $password){
       
        $user=getUser($username);
        $result=false;
        if($user){
            $result=password_verify($password, $user['password']);
            var_dump($password);
         
         
        }
        return $result;
    }
   
?>