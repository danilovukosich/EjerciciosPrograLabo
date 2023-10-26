<?php
namespace vukosic;

class Alumno{

    public int $legajo;
    public string $nombre;
    public string $apellido;
    public string $foto;


    public function __construct(int $legajo = 0, string $nombre = "", string $apellido = "", string $foto = "") 
    {
        $this->legajo = $legajo;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->foto = Alumno::NombrarFoto($this,$foto);
    }

    public static function Agregar(Alumno $alumno) : bool
    {
        $retorno = false;

        $archivo = fopen("./archivos/alumnos_foto.txt", "a");
        $registro = fwrite($archivo, "{$alumno->legajo} - {$alumno->nombre} - {$alumno->apellido} - {$alumno->foto}\n");

        if($registro>0)
        {
            $retorno=true;
        }
        //foto
        $rutaFotoGuardar = "./fotos/" . $alumno->foto;
        move_uploaded_file($_FILES["foto"]["tmp_name"],$rutaFotoGuardar);

        fclose($archivo);

        return $retorno;

    }

    public static function Listar()
    {
        $archivo = fopen("./archivos/alumnos_foto.txt", "r");

        while(!feof($archivo))
        {
            $linea = fgets($archivo);
            echo $linea;
            echo "<br>";
        }

        fclose($archivo);

    }

    public static function Verificar($legajoVerificar) : bool
    {
        $retorno = false;
        $archivo = fopen("./archivos/alumnos_foto.txt", "r");

        while(!feof($archivo))
        {
            $linea = fgets($archivo);

            $array_linea = explode("-", $linea);

            //limpio la linea
            $array_linea[0]= trim($array_linea[0]);

            if($array_linea[0] != "")
            {
                //recupero campos
                $legajoArchivo = trim($array_linea[0]);
                $nombreArhivo = trim($array_linea[1]);
                $apellidoArchivo = trim($array_linea[2]);
            }

            $legajoEncontrado = "No se encontro el alumno con legajo {$legajoVerificar}";

            if($legajoVerificar == $legajoArchivo)
            {
                $retorno=true;
                $legajoEncontrado = "Se encontro el alumno con legajo {$legajoVerificar} <br> >{$nombreArhivo} {$apellidoArchivo}";
                break;
            }

        }

        echo $legajoEncontrado;

        
        fclose($archivo);

        return $retorno;
    }

    public static function Modificar(Alumno $alumno)//poner bool de retorno
    {
        $retorno = false;

        $elementos= array();


        $archivo = fopen("./archivos/alumnos_foto.txt", "r");

        while(!feof($archivo))
        {
            $linea = fgets($archivo);

            $array_linea = explode("-", $linea);

            $array_linea[0] = trim($array_linea[0]);

			if($array_linea[0] != ""){
				//RECUPERO LOS CAMPOS
				$legajoArchivo = trim($array_linea[0]);
				$nombreArhivo = trim($array_linea[1]);
				$apellidoArchivo = trim($array_linea[2]);
                $fotoArchivo = trim($array_linea[3]);

				if ($legajoArchivo == $alumno->legajo) {
					
					array_push($elementos, "{$legajoArchivo}-{$alumno->nombre}-{$alumno->apellido}-{$fotoArchivo}\r\n");
				}
				else{

					array_push($elementos, "{$legajoArchivo}-{$nombreArhivo}-{$apellidoArchivo}-{$fotoArchivo}\r\n");
				}
			}
        }

        fclose($archivo);

         //ABRO EL ARCHIVO
		$archivo = fopen("./archivos/alumnos_foto.txt", "w");

		$cant = 0;
		
		//ESCRIBO EN EL ARCHIVO
		foreach($elementos AS $item){

			$cant = fwrite($archivo, $item);
		}

		if($cant > 0)
		{
			echo "<h2> Alumno MODIFICADO </h2><br/>";			
		}

		//CIERRO EL ARCHIVO
		fclose($archivo);
    }


    public static function Eliminar($legajoEliminar) : bool 
    {
        $retorno = false;

		$elementos = array();

		//ABRO EL ARCHIVO
		$ar = fopen("./archivos/alumnos_foto.txt", "r");

		//LEO LINEA X LINEA DEL ARCHIVO 
		while(!feof($ar))
		{
			$linea = fgets($ar);
			//http://www.w3schools.com/php/func_string_explode.asp
			$array_linea = explode("-", $linea);

			$array_linea[0] = trim($array_linea[0]);

			if($array_linea[0] != ""){

				//RECUPERO LOS CAMPOS
				$legajoArchivo = trim($array_linea[0]);
				$nombreArhivo = trim($array_linea[1]);
				$apellidoArchivo = trim($array_linea[2]);
                $fotoArchivo = trim($array_linea[3]);

				if ($legajoArchivo == $legajoEliminar) {
					
					continue;
				}

				array_push($elementos, "{$legajoArchivo}-{$nombreArhivo}-{$apellidoArchivo}-{$fotoArchivo}\r\n");
			}
		}

		//CIERRO EL ARCHIVO
		fclose($ar);

		$cant = 0;

		//ABRO EL ARCHIVO
		$ar = fopen("./archivos/alumnos_foto.txt", "w");

		//ESCRIBO EN EL ARCHIVO
		foreach($elementos AS $item){

			$cant = fwrite($ar, $item);
		}

		if($cant > 0)
		{
            echo "<h2> Alumno Eliminado </h2><br/>";
			$retorno = true;			
		}

		//CIERRO EL ARCHIVO
		fclose($ar);

		return $retorno;
    }

    public static function  NombrarFoto(Alumno $alumno,string $path) : string
    {
        return "$alumno->legajo." . pathinfo($path, PATHINFO_EXTENSION);
    }



    public static function Obtener($legajoObtener) : Alumno
    {
        $alumno = new Alumno();

        $archivo=fopen("./archivos/alumnos_foto.txt", "r");

        while(!feof($archivo))
        {
            $linea = fgets($archivo);
			
			$array_linea = explode("-", $linea);

			$array_linea[0] = trim($array_linea[0]);

			if($array_linea[0] != ""){

				//RECUPERO LOS CAMPOS
				$legajoArchivo = trim($array_linea[0]);
				$nombreArhivo = trim($array_linea[1]);
				$apellidoArchivo = trim($array_linea[2]);
                $fotoArchivo = trim($array_linea[3]);

				if ($legajoArchivo == $legajoObtener) {
					
					$alumno = new Alumno($legajoArchivo, $nombreArhivo, $apellidoArchivo, $fotoArchivo);
				}

				
			}
        }

        return $alumno;

    }



}


?>