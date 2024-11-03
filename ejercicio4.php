<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 4</h1>
    <p>Crea un script que tenga una variable $edad con un valor asignado y que:
• Imprima "Eres menor de edad" si $edad es menor que 18.
• Imprima "Eres adulto" si $edad es mayor o igual a 18 y menor que 60.
• Imprima "Eres adulto mayor" si $edad es 60 o mayor.</p>

    <?php
    $edad = 67;

    if ($edad < 18) {
        echo "Eres menor de edad";
        } elseif ($edad >= 18 && $edad < 60) {
            echo "Eres adulto";
            } else {
                echo "Eres aldulto mayor";
            }
    ?>
</body>
</html>