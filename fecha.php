<html>
<head>
    <title>Problema</title>
</head>
<body>
    <?php
    setlocale(LC_TIME, 'es_ES');
    
    echo "La fecha de hoy es: ";
    $fecha = strftime("%d/%b/%Y");
    echo $fecha;
    echo "<br>";

    echo "La hora actual es: ";
    $hora = strftime("%H:%M:%S");
    echo $hora;
    echo "<br>";
    ?>
    <a href="fecha2.php">Siguiente problema</a>
</body>
</html>