<?php
include ("datosEmpresa.php");
include ("funciones.php");

$totalSalarioAnual = 0;
$cantidadEmpleados = count($empleados);
//Recorremos los empleados
foreach ($empleados as $empleado) {

    $totalSalarioAnual += calcularSalarioAnual($empleado["salario_mensual"]); //Sumamos los salarios anuales de cada empleado
}

$salarioPromedioAnual = $totalSalarioAnual / $cantidadEmpleados; //Lo dividimos entre tantos empleados haya

echo "El salario promedio anual es de: ".$salarioPromedioAnual."<br>";


$empleadosPorCiudad = [];

// Recorremos cada empleado
foreach ($empleados as $empleado) {
    $ciudad = $empleado["ciudad"];
    
    // Si la ciudad ya está en el array, incrementamos el contador
    if (isset($empleadosPorCiudad[$ciudad])) {
        $empleadosPorCiudad[$ciudad]++;
    } else {
        // Si no, inicializamos el contador en 1
        $empleadosPorCiudad[$ciudad] = 1;
    }
}

// Mostramos el número de empleados por ciudad
echo "Número de empleados por ciudad:<br>";
foreach ($empleadosPorCiudad as $ciudad => $cantidad) {
    echo "En " . $ciudad . " hay " . $cantidad . " empleado(s).<br>";
}