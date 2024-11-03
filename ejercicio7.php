<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Ejercicio 7
    </h1>
<p>Escribe un script que defina un array con los nombres de cinco frutas e imprima cada fruta en una nueva
línea</p>

    <?php
    $frutas = ["manzana","pera","melon","sandia","platano"];
    foreach ($frutas as $fruta) {
        echo $fruta."<br>";
    }
    ?>
</body>
</html>