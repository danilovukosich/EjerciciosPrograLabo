<?php



$animales = array();
$anios = array();
$lenguajes = array();

array_push($animales, "Perro", "Gato", "Ratón", "Araña", "Mosca");
array_push($anios, "1986", "1996", "2015", "78", "86");
array_push($lenguajes, "php", "mysql", "html5", "typescript", "ajax");

$arraysCombinados = array_merge($animales, $anios, $lenguajes);

foreach($arraysCombinados as $item)
{
    echo "<br>";
    echo $item;
}



