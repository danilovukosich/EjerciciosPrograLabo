<?php


 $arrayAsosc = array(array("color"=>"Azul", "marca"=>"Bic","trazo"=>"Fino","Precio"=>199),
                    array("color"=>"Negro", "marca"=>"Pinball","trazo"=>"Medio","Precio"=>240),
                    array("color"=>"Verde", "marca"=>"Brembo","trazo"=>"Grueso","Precio"=>87));

$numeroLapicera=1;

foreach($arrayAsosc as $item)
{
    echo "<br>";
    echo "<br>";
    echo "Lapicera $numeroLapicera";
    $numeroLapicera++;
    //var_dump($item); 
    foreach($item as $otroItem)
    {
        echo "<br>";
        echo $otroItem;
    }

}          




