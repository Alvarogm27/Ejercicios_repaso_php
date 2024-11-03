<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 12</h1>
    <p>Escribe un script que cree un array con los primeros 10 números pares e imprima cada número en una nueva
    línea usando un bucle foreach.</p>

    <?php
        $num_par = [];
        for ($i = 0; $i < 10; $i++) {
            $num_par[] = $i * 2;
        }
        foreach ($num_par as $value) {
            echo $value."<br>";
        }
    ?>
</body>
</html>