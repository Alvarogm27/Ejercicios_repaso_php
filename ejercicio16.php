<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 16

    </h1>
    <p>Crea una función elementoMayor que tome un array de números como parámetro y devuelva el elemento más
    grande del array.</p>
    <?php
    
    function elementoMayor($nums){
        $num = 0;
        foreach($nums as $num){
            if($num > $nums){
                $num = $nums;
            }
    }
    return $num;
    }
    echo elementoMayor([1,2,5,50]);
    
    ?>
</body>
</html>