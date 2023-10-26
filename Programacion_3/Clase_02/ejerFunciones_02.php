
<?php


$palabra = "hola";


for($i = strlen($palabra)-1 ; $i>=0 ; $i--)
{
    echo $palabra[$i];
}



/*
function InvertirPalabra($palabra)
{
    $palabraCopiar = $palabra;
    $tam = strlen($palabra);
    $j = 0;
    for ($i=$tam - 1; $i >= 0; $i--) 
    {
        $palabraCopiar[$j] = $palabra[$i];
        $j++;
    }
    return $palabraCopiar;
}
*/