<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 8</h1>
    <p>Crea un script que que defina un array asociativo con nombres de tres personas como claves y sus edades
    como valores. Posteriormente, debe imprimir el nombre y la edad de cada persona en una línea.</p>

    <?php
    $personas = array("Alvaro"=>19,"Alex"=>14,"Eladio"=>52);
    foreach ($personas as $nombre => $k ) {
        echo "Mi nombre es ". $nombre ." y mi edad ". $k ."<br>";
    }
    ?>
</body>
</html>