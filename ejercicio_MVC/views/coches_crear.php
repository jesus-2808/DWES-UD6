<html>
    <head>
        <title>Recetas</title>
    </head>
    <body>
        <h1>Recetas</h1>
        <?php 
        
        if ($creado==true) {
            echo "<p>Creada con éxito.</p>";
        } else {
            echo "<p>La creación no se ha realizado.</p>";
        }
        
        ?>
        <a href="index.php">Volver al listado</a>
    </body>
</html>