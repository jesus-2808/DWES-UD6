<?php
   session_start();
   if (isset($_SESSION['username'])) {
           
       header("Location: index.php?controller=coches&action=listar");
           
   }
function formLogin(){
    // Se incluye el modelo.
    require './models/usuarios_model.php';

     // Se incluye la vista para cargar el formulario
     include './views/usuarios_form.php';
}

function loginCheck(){
    require './models/usuarios_model.php';

    $username="";
    $password="";
 
  if($_SERVER["REQUEST_METHOD"]=="POST"){
      $username=$_POST["username"];
      $password=$_POST["password"];

      if(login($username,  $password)){ 
        session_start();
        $_SESSION['username'] = getUser($username)['username'];
               
        header("Location: index.php?controller=coches&action=listar");
      }else{
          echo "error al entrar";
      }
     
  }
  include './views/usuarios_form.php';
}

/*
function cerrarSesion(){
    session_start();
    if (isset($_SESSION['username'])){
        session_unset();
        session_destroy();
        header("Location: ?controller=usuarios&action=usuarios_form");
    }
}
*/
?>