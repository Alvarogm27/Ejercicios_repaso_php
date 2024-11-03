<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 13</h1>
    <p>Crea una función filtrarPalabras que tome una cadena y un array de palabras prohibidas y sustituya las palabras
    prohibidas en la cadena por asteriscos (***) y posteriormente devuelva la cadena modificada.</p>

    <?php
    function filtrarPalabras($cadena,$prohibidas) {
        foreach ($prohibidas as $palabra) {
            if ($palabra == $cadena) {
                return "***";
    }else{
        return $cadena;
        }
    }
}


    echo filtrarPalabras("tonto",["tonto","feo","caca"]);
?>
</body>
</html>