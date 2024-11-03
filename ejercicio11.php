<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Ejercicio 11
    </h1>
    <p>Crea una función esPrimo que tome un número como parámetro y devuelva true si el número es primo y false
    en caso contrario. Prueba la función con varios números.</p>

    <?php
    function esPrimo($num1){
        if ($num1 % 2 == 0) {
            return "true";
    } else {
        return "false";
    }
}
    echo esPrimo(5);
    echo esPrimo(6);
    ?>

</body>
</html>