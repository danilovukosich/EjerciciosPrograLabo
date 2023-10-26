<?php

if(isset($_POST['numeroIngresado']))
{
    $arrayNumeros = array();
    
    $count = 0;
    for($i = 1; $i<= $_POST['numeroIngresado']; $i++)
    {
        if($i%2!=0)
        {
            $count ++;
        }
    }
    echo "<h4>Numeros impares: {$count}<br></h4>";
}
else
{
    echo "Nada ingresado";
}