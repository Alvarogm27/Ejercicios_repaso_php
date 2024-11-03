<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 9</h1>
    <p>Escribe una función llamada saludo que reciba un nombre como parámetro y devuelva un saludo en el
    formato "Hola, [nombre]". Llama a la función con distintos nombres y muestra los saludos en el navegador.</p>

    <?php
    function saludo($nombre){
        return "Hola, $nombre";
    }

    echo saludo("Alvaro");
    ?>
</body>
</html>