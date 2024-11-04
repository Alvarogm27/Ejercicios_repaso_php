<?php
function calcularSalarioAnual($salario_mensual){
    
    $salarioAnual = $salario_mensual * 12;
    return $salarioAnual;
}

function generarIniciales($nombre){
    $mayus = "";

    for ($i = 0; $i < strlen($nombre); $i++) {

        if (ctype_upper($nombre[$i])) {
            $mayus .= $nombre[$i];
    }
}
return $mayus;
}
