
<?php

$fecha = $_REQUEST['mesIngresado'];
echo "<br>Fecha ingresada:$fecha";

$fechaParseada = strtotime($fecha);



//echo "La fecha es: $fecha";



if($fechaParseada>strtotime("2022-12-21") && $fechaParseada<strtotime("2023-03-21"))
{
    echo "<br> <h1>Es verano</h1>";
}
else
{
    if($fechaParseada>strtotime("2023-03-21") && $fechaParseada<strtotime("2023-06-21"))
    {
        echo "<br><h1> Es otoño</h1>";
    }
    else
    {
        if($fechaParseada>strtotime("2023-06-21") && $fechaParseada<strtotime("2023-09-21"))
        {
            echo "<br> <h1>Es Invierno</h1>";
        }
        else
        {
            if($fechaParseada>strtotime("2023-09-21") && $fechaParseada<strtotime("2024-12-21"))
            {
                echo "<br> <h1>Es Primavera</h1>";
            }
            else{echo "No entra a niniguna condicion";}
            
        }
        
    }
}



$fechaActual = strtotime(date("y-m-d"));

echo "<br><br>Fecha actual: $fechaActual";



if($fechaActual>strtotime("2022-12-21") && $fechaActual<strtotime("2023-03-21"))
{
    echo "<br> <h1>Es verano</h1>";
}
else
{
    if($fechaActual>strtotime("2023-03-21") && $fechaActual<strtotime("2023-06-21"))
    {
        echo "<br><h1> Es otoño</h1>";
    }
    else
    {
        if($fechaActual>strtotime("2023-06-21") && $fechaActual<strtotime("2023-09-21"))
        {
            echo "<br> <h1>Es Invierno</h1>";
        }
        else
        {
            if($fechaActual>strtotime("2023-09-21") && $fechaActual<strtotime("2024-12-21"))
            {
                echo "<br> <h1>Es Primavera</h1>";
            }
            else{echo "No entra a niniguna condicion";}
            
        }
        
    }
}