<?php

//Arrays indexados. Índices numéricos.

$vec = array();


for($i=0; $i<5; $i++)
{
    $vec[$i] = rand(1,100);
    echo "<br>";
    echo $vec[$i];
}

var_dump($vec);
