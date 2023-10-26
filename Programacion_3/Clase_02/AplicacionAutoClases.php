<?php

class Auto 
{
    private $color;
    private $precio;
    private $marca;
    private $fecha;


    public function __construct(string $marcax = "Sin marca", string $colorx = "Neutro", float $preciox = 0, DateTime $fechax = new DateTime())
    {
        $this->marca = $marcax;
        $this->color = $colorx;
        $this->precio =$preciox;
        $this->fecha = $fechax;
        
    }


    public function getColor()
    {
        return $this->color;
    }
    public function getPrecio()
    {
        return $this->precio;
    }
    public function getMarca()
    {
        return $this->marca;
    }
    public function getFecha()
    {
        return $this->fecha;
    }


    public function AgregarImpuestos(float $impuesto)
    {
        $this->precio += $impuesto;
    }   

    public function MostrarAuto()//mostar de INSTANCIA
    {
        echo ">Marca: " . $this->getMarca() . "<br>";
        echo ">Color: " . $this->getColor() . "<br>";
        echo ">Precio: " . $this->getPrecio() . "<br>";
        echo ">Fecha: " . $this->getFecha()->format("y-m-d") . "<br> <br>";
    }

    public static function MostrarAutoClase(Auto $auto)//mostar de CLASE
    {
        echo ">Marca: " . $auto->getMarca() . "<br>";
        echo ">Color: " . $auto->getColor() . "<br>";
        echo ">Precio: " . $auto->getPrecio() . "<br>";
        echo ">Fecha: " . $auto->getFecha()->format("y-m-d") . "<br> <br>";
    }


    // método de instancia “Equals” que permita comparar dos objetos de tipo “Auto”. Sólo
    // devolverá TRUE si ambos “Autos” son de la misma marca.
    public function Equals(Auto $autoDos)
    {
        if($this->marca == $autoDos->marca)
        {
            return true;
        }

        return false; 
    }
    
    public static function Add(Auto $autoUno, Auto $autoDos): float
    {
        if(($autoUno->marca == $autoDos->marca) && ($autoUno->color == $autoDos->color))
        {
            return $autoUno->precio + $autoDos->precio;
        }

        return 0;
    }

    



    /*



    -Crear el método de instancia “Equals” que permita comparar dos objetos de tipo “Auto”. Sólo
    devolverá TRUE si ambos “Autos” son de la misma marca.
    -Crear un método de clase, llamado “Add” que permita sumar dos objetos “Auto” (sólo si son de la
    misma marca, y del mismo color, de lo contrario informarlo) y que retorne un Double con la suma
    de los precios o cero si no se pudo realizar la operación.
    */
    
	
}