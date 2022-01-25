<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/botonera.css">
        <link rel="stylesheet" href="css/form.css">
        <title>Edita elemento</title>
    </head>
    <body>
    <?php 

    if(count($_GET)<=0){
    $id=$_POST["id"];
   }else{
    $id= $_GET["id"];
   }
   $coche=getCoche($id);
  

     if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $id=$_POST["id"];
        $brand= $_POST["Marca"];
        $model= $_POST["Modelo"];
        $engine= $_POST["Cilindrada"];
        $victories=$_POST["victorias_carreras"];
        $titles=$_POST["TItulos"];
        $debut=$_POST["Fecha_debut"];
      
        
        
        $coche_editado=editarElemento($id);

        if ($coche_editado) {
            echo "El coche $id se ha actualizado correctamente.";
            echo "<br>";
        } else {
            echo "Error al actualizar";
            echo "<br>";
        }
     }
     
    // 
    ?>
        <nav>
            <ul>
                <li><a href="index.php">Página principal</a></li>
                <li><a href="create.php">Nuevo elemento</a></li>
                <li><a class="active" href="list.php">Lista elementos</a></li>
                <li><a href="import.php">Importar elementos</a></li>
            </ul>
        </nav>
        
       <form class="form-register"    action="index.php?controller=coches&action=actualizar" method="POST">
            <h2 class="form-titulo">Características:</h2>
            <div class="contenedor-inputs">
                <input type="hidden" name="id"><!--aquí va el id, es hidden por lo tanto no es visible en la web, pero si accesible desde PHP -->
                <input type="text" name="Marca" placeholder="nombre" class="input-100" value='<?php echo $coche["Marca"]; ?>' required>
                <input type="text" name="Modelo" placeholder="Modelo" class="input-100" value='<?php echo $coche["Modelo"]; ?>' required>
                <input type="text" name="Cilindrada" placeholder="Texto 3" class="input-100" value='<?php echo $coche["Cilindrada"]; ?>'required>
                <input type="number" name="Victorias_carreras" placeholder="Victorias_carreras" value='<?php echo $coche["victorias_carreras"]; ?>' class="input-48" required>
                <input type="number" name="Titulos" placeholder="Títulos" class="input-48" value='<?php echo $coche["TItulos"]; ?>'required >
                <input type="date" name="Fecha_debut" placeholder="Fecha_debut" class="input-100" value='<?php echo $coche["Fecha"]; ?>' required>
                <img name="avatarActual" width=200px src=""><!-- Aquí tienes que cargar la imagen actual -->
                <input type="file" name="avatar" accept="image/png, image/jpeg" class="input-100" >
                <input type="submit" value="Editar" class="btn-enviar">
                <div id="errores"></div>
            </div>
        </form>
    </body>
</html>