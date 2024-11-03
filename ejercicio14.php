<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 14</h1>
    <p>Escribe un script en el que declares una fecha futura en formato YYYY-MM-DD. Debe calcular el número de días
    entre la fecha actual y esa fecha futura, e imprimir el resultado.</p>

    <?php
    $futuro = new DateTime ("2024-11-28");
    $presente = new DateTime ();

    $resultado = $presente->diff ( $futuro );

    echo $resultado->format ("%R%a dias");
    ?>
</body>
</html>