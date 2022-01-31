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
<a href="index.php">Volver</a>
    <?php

/*
    
if (isset($coche)) {
    $marca=$coche["Marca"];
    $modelo=$coche["Modelo"];
    $cilindrada=$coche["Cilindrada"];
    $victorias_carreras=$coche["victorias_carreras"];
    $titulos=$coche["TItulos"];
    $fecha_debut=$coche["Fecha"];
} else {
    $marca = "";
    $modelo = "";
    $cilindrada = "";
    $victorias_carreras = "";
    $titulos = "";
    $fecha_debut = "";
  
}
  */
  /*
if (isset($_GET['Id'])) {
    $id = $_GET['Id'];
    echo '<form class="form-register" action="?controller=coches&action=formAction&Id= ' . $id . '" method="POST" enctype="multipart/form-data">';
} else {
    $id = "";
    echo '<form class="form-register" action="?controller=coches&action=formAction" method="POST" enctype="multipart/form-data">';
}
 */
    ?>
    
    <form action="?controller=coches&action=formAction&Id= ' . $id . '" method="POST" enctype="multipart/form-data" class="form-register">
        <h2 class="form-titulo">Características:</h2>
        <div class="contenedor-inputs">
       
        <input type="hidden" name="Id" value="<?php echo $coche["Id"];?>">
            <!--aquí va el id, es hidden por lo tanto no es visible en la web, pero si accesible desde PHP -->
            <input type="text" name="Marca" placeholder="nombre" class="input-100" value='<?php echo $coche["Marca"]; ?>' required>
            <input type="text" name="Modelo" placeholder="Modelo" class="input-100" value='<?php echo $coche["Modelo"]; ?>' required>
            <input type="text" name="Cilindrada" placeholder="Texto 3" class="input-100" value='<?php echo $coche["Cilindrada"]; ?>' required>
            <input type="number" name="Victorias_carreras" placeholder="Victorias_carreras" value='<?php echo $coche["victorias_carreras"]; ?>' class="input-48" required>
            <input type="number" name="Titulos" placeholder="Titulos" class="input-48" value='<?php echo $coche["TItulos"] ; ?>' required>
            <input type="date" name="Fecha_debut" placeholder="Fecha_debut" class="input-100" value='<?php echo $coche["Fecha"]; ?>' required>
          
            <input type="submit" value="Editar" class="btn-enviar" name="submit">
            <?php
                if (isset($_GET['Id'])) {
                    $id = $_GET['Id'];
                    echo '<input type="submit" value="Editar" class="btn-enviar">';
                } else {
                    echo '<input type="submit" value="Crear" class="btn-enviar">';
                }
            ?>
        </div>
    </form>
</body>

</html>