<?php

/*
Realizar una clase llamada “Auto” que posea los siguientes atributos privados:

_color (String)
_precio (Double)
_marca (String).
_fecha (DateTime)

Realizar un constructor capaz de poder instanciar objetos pasándole como parámetros:

i. La marca y el color.
ii. La marca, color y el precio.
iii. La marca, color, precio y fecha.

Realizar un método de instancia llamado “AgregarImpuestos”, que recibirá un doble por
parámetro y que se sumará al precio del objeto.
Realizar un método de clase llamado “MostrarAuto”, que recibirá un objeto de tipo “Auto” por
parámetro y que mostrará todos los atributos de dicho objeto.
Crear el método de instancia “Equals” que permita comparar dos objetos de tipo “Auto”. Sólo
devolverá TRUE si ambos “Autos” son de la misma marca.
Crear un método de clase, llamado “Add” que permita sumar dos objetos “Auto” (sólo si son de la
misma marca, y del mismo color, de lo contrario informarlo) y que retorne un Double con la suma
de los precios o cero si no se pudo realizar la operación.
*/


include "AplicacionAutoGarage.php";

$auto1= new Auto("Porsche", "Girs");//marca y color
$auto2= new Auto("Nissan", "Azul", 285000);
$auto3= new Auto("Mitsubishi", "Rojo", 56000, new DateTime("2001-09-10"));

$auto3->MostrarAuto();

echo "<br> Auto 3 con impuestos <br>";

$auto3->AgregarImpuestos(4000);

$auto3->MostrarAuto();

Auto::MostrarAutoClase($auto2);

$auto1->MostrarAuto();

$garage=new Garage("pediloo", 500);

$garage->Add($auto3);

$garage->Add($auto2);

$garage->MostrarGarage();


$retornoRevisa = $garage->RevisarGarage($auto3);
if($retornoRevisa==true)
{
    echo "esta en el garage <br>";
}
else{ echo "no esta en el garage <br>";}


$garage->Remove($auto3);

$garage->MostrarGarage();


