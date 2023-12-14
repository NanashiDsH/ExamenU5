<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
        echo "La fecha de hoy es:";
        setlocale(LC_TIME, 'es_ES');
        $fecha=date("j/M/y");
        echo $fecha;
        echo "<br>";
        ?>
        <a href="fecha3.php">Siguiente problema</a>
    </body>
</html>