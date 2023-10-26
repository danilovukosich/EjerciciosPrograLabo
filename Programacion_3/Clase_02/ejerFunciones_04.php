<?php


/* Aplicación No 18 (Par e impar)
Crear una función llamada EsPar que reciba un valor entero como parámetro y
 devuelva TRUE si
este número es par ó FALSE si es impar.
Reutilizando el código anterior, crear la función EsImpar.*/

$esParResultado = EsPar(4);


echo $esParResultado;

function EsPar(int $numero) : bool
{
    if($numero%2== 0)
    {
        return true;
    }

    return false;
}

