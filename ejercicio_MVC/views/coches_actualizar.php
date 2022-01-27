<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/botonera.css">
    <link rel="stylesheet" href="css/form.css">
    <title>Edita elemento</title>
    <a href="index.php">Volver</a>
</head>

<body>
    <?php

if (isset($coche)) {
    $marca = $coche['Marca'];
    $modelo = $coche['Modelo'];
    $cilindrada = $coche['Cilindrada'];
    $victorias_carrera = $coche['victorias_carreras'];
    $titulos = $coche['TItulos'];
    $fecha_debut = $coche['Fecha'];
   
} else {
    $marca = "";
    $modelo = "";
    $cilindrada = "";
    $victorias_carrera = "";
    $titulos = "";
    $fecha_debut = "";
    
}

$error="Datos incorrectos o no se ha introducido nada";
   

if (isset($_GET['Id'])) {
    $id = $_GET['Id'];
    echo '<form class="form-register" action="?controller=coches&action=actualizar&Id= ' . $id . '" method="POST" enctype="multipart/form-data">';
} else {
    $id = "";
    echo '<form class="form-register" action="?controller=coches&action=formAction" method="POST" enctype="multipart/form-data">';
}
    // 
  
    ?>
    
    
        <h2 class="form-titulo">Características:</h2>
        <div class="contenedor-inputs">
       
        <input type="hidden" name="id" value="<?php echo $id;?>">
            <!--aquí va el id, es hidden por lo tanto no es visible en la web, pero si accesible desde PHP -->
            <input type="text" name="Marca" placeholder="nombre" class="input-100" value='<?php $marca; ?>' required>
            <input type="text" name="Modelo" placeholder="Modelo" class="input-100" value='<?php $modelo; ?>' required>
            <input type="text" name="Cilindrada" placeholder="Texto 3" class="input-100" value='<?php $cilindrada ; ?>' required>
            <input type="number" name="Victorias_carreras" placeholder="Victorias_carreras" value='<?php $victorias_carrera ; ?>' class="input-48" required>
            <input type="number" name="Titulos" placeholder="Títulos" class="input-48" value='<?php $titulos; ?>' required>
            <input type="date" name="Fecha_debut" placeholder="Fecha_debut" class="input-100" value='<?php $fecha_debut; ?>' required>
            <img name="avatarActual" width=200px src=""><!-- Aquí tienes que cargar la imagen actual -->
            <input type="file" name="avatar" accept="image/png, image/jpeg" class="input-100">
            <input type="submit" value="Editar" class="btn-enviar">
            
            <?php
            if(isset($_GET["error"])){
                echo "<div>".$error."</div>";
            }
            ?>
        </div>
    </form>
</body>

</html>