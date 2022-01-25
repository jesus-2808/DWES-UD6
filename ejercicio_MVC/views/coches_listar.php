<html>

<head>
    <title>Coches del WRC</title>
</head>

<body>
    <h1>Coches del WRC en nuestras bases de datos</h1>
    <table border="1">
        <tr>
            <th>id</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Cilindrada</th>
            <th>victorias_carreras</th>
            <th>Titulos</th>
            <th>Fecha_debut</th>
        </tr>
        <?php

        foreach ($coches as $coche) { ?>
            <tr>
                <td><?php echo $coche['Id']; ?></td>
                <td><?php echo $coche['Marca']; ?></td>
                <td><?php echo $coche['Modelo']; ?></td>
                <td><?php echo $coche['Cilindrada']; ?></td>
                <td><?php echo $coche['victorias_carreras']; ?></td>
                <td><?php echo $coche['TItulos']; ?></td>
                <td><?php echo $coche['Fecha']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>