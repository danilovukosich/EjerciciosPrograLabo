<?php

// Aplicación No 4 (Sumar números)
// Confeccionar un programa que sume todos los números enteros desde 1
// mientras la suma no
// supere a 1000. Mostrar los números sumados y al finalizar el 
// proceso indicar cuantos números
// se sumaron.

$acumuladorNumeros = 0;

for($i=0 ; $acumuladorNumeros<=1000 ; $i++)
{
    $acumuladorNumeros+=$i;
    
    if($acumuladorNumeros>1000)
    {
        break;
    }
    
    echo $i . "-". $acumuladorNumeros . "<br>";
}

echo $i;
?>