<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 15</h1>
    <p>Crea una función calcularMedia que tome un array de números como parámetro y calcule y devuelva la media
    de los números.</p>
    
    <?php
function calcularMedia($nums = array()) {
    $suma = 0;
    $cantidad = count($nums); // Obtener la cantidad de elementos en el array

    // Sumar los números en el array
    for ($i = 0; $i < $cantidad; $i++) {
        $suma += $nums[$i]; // Acceder al elemento en el índice $i
    }

    // Evitar la división por cero
    if ($cantidad === 0) {
        return 0; // Retornar 0 si el array está vacío
    }

    return $suma / $cantidad; // Calcular la media
}

// Ejemplo de uso
$resultado = calcularMedia([1, 2, 3, 4, 5]);
echo "La media es: " . $resultado; // Salida: La media es: 3
?>

</body>
</html>