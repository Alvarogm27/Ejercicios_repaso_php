<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Ejercicio 19
    </h1>
    <p>
    Escribe un script que tenga un array de números desordenados. Usa la función sort() para ordenarlo de forma
    ascendente y rsort() para ordenarlo de forma descendente. Después imprime el array en ambos órdenes.
    </p>
    <?php
    $nums = [2,8,4,1,9,3,0,10];
    
    sort($nums);
        foreach ($nums as $k => $v) {
            echo $v,",";
        }
    echo "<br>";
    rsort($nums);
        foreach ($nums as $k => $v) {
            echo $v,",";
        }


    ?>
</body>
</html>