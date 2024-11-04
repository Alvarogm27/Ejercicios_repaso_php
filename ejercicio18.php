<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Ejercicio 18
    </h1>
    <p>Escribe una función generarIniciales que tome un nombre completo (e.g., "Juan Pérez López") y devuelva las
    iniciales del nombre (e.g., "JPL").
    </p>
    <?php
   function generarIniciales($nombre){
    $mayus = "";

    for ($i = 0; $i < strlen($nombre); $i++) {

        if (ctype_upper($nombre[$i])) {
            $mayus .= $nombre[$i];
    }
}
return $mayus;
}
echo generarIniciales("Juan Perez Lopez");
    ?>
</body>
</html>