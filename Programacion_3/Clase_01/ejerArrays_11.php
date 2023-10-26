<?php


$vec = array(1=>90, 30=>7,"e"=>99,"hola"=>"mundo");

foreach($vec as $item)
{
    echo "<br>";
    echo $item;
}

//Ejercicio 12

$lapicera1 = array("color"=>"Azul", "marca"=>"Bic","trazo"=>"Fino","Precio"=>199);
$lapicera2 = array("color"=>"Negro", "marca"=>"Pinball","trazo"=>"Medio","Precio"=>240);
$lapicera3 = array("color"=>"Verde", "marca"=>"Brembo","trazo"=>"Grueso","Precio"=>87);

echo "<br>";
echo "<br>";
echo "Lapicera 1";
echo "<br>";
foreach($lapicera1  as $item)
{
    echo "<br>";
    echo $item;
}
echo "<br><br>";
echo "Lapicera 2";
echo "<br>";
foreach($lapicera2  as $item)
{
    echo "<br>";
    echo $item;
}
echo "<br><br>";
echo "Lapicera 3";
echo "<br>";
foreach($lapicera3  as $item)
{
    echo "<br>";
    echo $item;
}


