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

if(isset($coche)){
    $coche["Marca"];
    $coche["Modelo"];
    $coche["Cilindrada"];
    $coche["victorias_carreras"];
    $coche["TItulos"];
    $coche["Fecha"];
}


   




    // 
    ?>
        <h2 class="form-titulo">Características:</h2>
       
        <div class="contenedor-inputs">
        <input type="hidden" name="id" value="<?php echo $id;?>">
            <!--aquí va el id, es hidden por lo tanto no es visible en la web, pero si accesible desde PHP -->
            <input type="text" name="Marca" placeholder="nombre" class="input-100" value='<?php  ?>' required>
            <input type="text" name="Modelo" placeholder="Modelo" class="input-100" value='<?php $coche["Modelo"]; ?>' required>
            <input type="text" name="Cilindrada" placeholder="Texto 3" class="input-100" value='<?php $coche["Cilindrada"] ; ?>' required>
            <input type="number" name="Victorias_carreras" placeholder="Victorias_carreras" value='<?php $coche["victorias_carreras"] ; ?>' class="input-48" required>
            <input type="number" name="Titulos" placeholder="Títulos" class="input-48" value='<?php $coche["TItulos"]; ?>' required>
            <input type="date" name="Fecha_debut" placeholder="Fecha_debut" class="input-100" value='<?php $coche["Fecha"]; ?>' required>
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