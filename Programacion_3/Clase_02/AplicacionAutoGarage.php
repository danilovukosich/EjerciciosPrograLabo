<?php

include "AplicacionAutoClases.php";


class Garage
{
    private $razonSocial;
    private $precioPorHora;
    private $autos;

    public function __construct(string $_razonSocial, float $_precioPorHora = 0, array $_autos = [])
    {
        $this->razonSocial=$_razonSocial;
        $this->precioPorHora=$_precioPorHora;
        $this->autos=$_autos;
    }

    public function GetRazon()
    {
        return $this->razonSocial;
    }

    public function GetPrecioHora()
    {
        return $this->precioPorHora;
    }

    public function GetAutos()
    {
        return $this->autos;
    }

    public function MostrarGarage()
    {
        echo "      GARAGE       <br>";
        foreach($this->autos as $auto)
        {
           Auto::MostrarAutoClase($auto);
           //$auto->MostrarAuto();
        }
    }

    public function RevisarGarage(Auto $autox)
    {
        foreach($this->autos as $auto)
        {
            if($auto==$autox)
            {
                return true;
                break;
            }
        }

        return false;

    }

    public function Add(Auto $auto)
    {
        $this->autos[] = $auto;//utilizo array[] para no llamar a la funcion array push
    }


    public function Remove(Auto $auto)
    {
        if($this->RevisarGarage($auto))
        {
            $clave = array_search($auto, $this->autos);
            unset($this->autos[$clave]);
        }
        else
        {
            echo "No esta el auto en el garage.";
        }
    }

}


?>