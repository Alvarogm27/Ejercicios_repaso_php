<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 3</h1>
    <p>Escribe un script que defina tres variables: nombre, apellido y edad e imprima una frase como "Hola, mi
    nombre es [nombre] [apellido] y tengo [edad] años".</p>
    <?php
    $nombre = "Alvaro";
    $apellido = "Garcia";
    $edad = "19";

    $frase = "Hola, mi nombres es ".$nombre." ".$apellido." y tengo ".$edad." años";
    echo $frase;

    ?>
</body>
</html>