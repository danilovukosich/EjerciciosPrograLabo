<?php

CalcularPotencias(4);


function CalcularPotencias($numero)
{

    echo "Numero: $numero";
    echo "<br>";
    echo "Potencias:";
     echo "<br>";

    for($i=1; $i<=4;$i++)
    {
        echo pow($numero, $i);

        echo "<br>";
    }

    
}