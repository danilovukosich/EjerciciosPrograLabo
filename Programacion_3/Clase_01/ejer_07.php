

<?php
// Aplicación No 7 (Mostrar fecha y estación)
// Obtenga la fecha actual del servidor (función date)
// y luego imprímala dentro de la página con
// distintos formatos (seleccione los formatos que más le guste). 
// Además indicar que estación del
// año es. Utilizar una estructura selectiva múltiple.

// echo date('l jS \of F Y h:i:s');
// echo "<br>";

echo "<h1>Ejer_07</h1>";
echo date('y-m-d') . "<br>";

$fecha = strtotime(date("y-m-d"));

// switch(true)
// {
//     case ($fecha>strtotime("21/09/23") && $fecha<strtotime("21/12/23")):
//         echo "primavera";
//         break;
//     case ($fecha>strtotime("21/12/23") && $fecha<strtotime("21/03/23")):
//         echo "verano";
//         break;
//     case ($fecha>strtotime("21/03/23") && $fecha<strtotime("21/06/23")):
//         echo "otoño";
//         break;
//     case ($fecha>strtotime("21/06/23") && $fecha<strtotime("21/09/23")):
//         echo "invierno";
//         break;
//         default:
//         echo "<br>no entra al case";

// }

if($fecha>strtotime("2022-12-21") && $fecha<strtotime("2023-03-21"))
{
    echo "<br> <h1>Es verano</h1>";
}
else
{
    if($fecha>strtotime("2023-03-21") && $fecha<strtotime("2023-06-21"))
    {
        echo "<br><h1> Es otoño</h1>";
    }
    else
    {
        if($fecha>strtotime("2023-06-21") && $fecha<strtotime("2023-09-21"))
        {
            echo "<br> <h1>Es Invierno</h1>";
        }
        else
        {
            if($fecha>strtotime("2023-09-21") && $fecha<strtotime("2024-12-21"))
            {
                echo "<br> <h1>Es Primavera</h1>";
            }
            else{echo "No entra a niniguna condicion";}
            
        }
        
    }
}



?>