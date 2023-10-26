<?php
$nombre =isset($_POST['Nombre']) ? $_POST['Nombre'] : NULL;
$apellido = isset($_POST['Apellido']) ? $_POST['Apellido'] : NULL;
$legajo = isset($_POST["Legajo"]) ? (int) $_POST['Legajo'] : 0;
$accion = $_POST['boton'];
//$accion = $_GET['boton'];
$legajoVerificar = isset($_POST['LegajoVerificar']) ? $_POST['LegajoVerificar'] : NULL;

$legajoModificar = isset($_POST['LegajoModificar']) ? (int)$_POST['LegajoModificar'] : 0;
$nombreModificar = $_POST['nombreModificar'];
$apellidoModificar = $_POST['apellidoModificar'];

$legajoEliminar= isset($_POST['LegajoEliminar']) ? $_POST['LegajoEliminar']:NULL;

//echo $nombre;
//echo $apellido;

/*Recuperar los valores enviados y agregarlos al archivo ./archivos/alumnos.txt.
El formato que deberá tener cada registro será el siguiente:
legajo - apellido - nombre
Indicar, a partir de un mensaje, si se pudo o no guardar al alumno. */
switch($accion)
{
    case "Agregar":

        $archivo = fopen("./archivos/alumnos.txt", "a");

        $registro = fwrite($archivo, "{$legajo} - {$nombre} - {$apellido}\n");

        if($registro>0)
        {
            echo "Registro exitoso!<br>";
        }

        fclose($archivo);

        break;
/*
Enviar (por GET) a la página ./nexo.php:
*-accion => 'listar'
Recuperar el valor enviado y mostrar el contenido completo del archivo
./archivos/alumnos.txt.
Cada registro se mostrará con el siguiente formato (un registro por fila):
legajo - apellido - nombre
*/

    case "Listar":

        $archivo = fopen("./archivos/alumnos.txt", "r");

        while(!feof($archivo))
        {
            $linea = fgets($archivo);
            echo $linea;
            echo "<br>";
        }

        fclose($archivo);

        break;

    /*
    Enviar (por POST) a la página ./nexo.php:
    *-accion => 'verificar'
    *-legajo => 'su legajo'
    Recuperar los valores enviados y buscar en el archivo ./archivos/alumnos.txt la
    existencia de un registro que coincida con el legajo recuperado.
    ● Si se encuentra, mostrar:
    'El alumno con legajo 'xxx' se encuentra en el listado'
    ● Si no se encuentra, mostrar el siguiente mensaje:
    'El alumno con legajo 'xxx' no se encuentra en el listado'
    Siendo 'xxx' el valor del legajo enviado por POST.
    */    
    case "Verificar":
        $archivo = fopen("./archivos/alumnos.txt", "r");

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

            $legajoEncontrado = "No se encontro elalumno con legajo {$legajoVerificar}";

            if($legajoVerificar == $legajoArchivo)
            {
                $legajoEncontrado = "Se encontro el alumno con legajo {$legajoVerificar}";
                break;
            }

        }

        echo $legajoEncontrado;

        
        fclose($archivo);


        break;

        /*
    Enviar (por POST) a la página ./nexo.php:
    *-accion => 'modificar'
    *-nombre => 'un nombre'
    *-apellido => 'un apellido'
    *-legajo => 'un legajo'
    Recuperar los valores enviados y buscar en el archivo ./archivos/alumnos.txt la
    existencia de un registro que coincida con el legajo recuperado.
    ● Si se encuentra, reemplazar el apellido y el nombre del archivo, por los
    valores recuperados por POST.
    Mostrar un mensaje que diga: 'El alumno con legajo 'xxx' se ha modificado'
    ● Si no se encuentra, mostrar el siguiente mensaje:
    'El alumno con legajo 'xxx' no se encuentra en el listado'
    Siendo 'xxx' el valor del legajo enviado por POST.
    */ 
    case "Modificar":

        $archivo = fopen("./archivos/alumnos.txt", "r");
        $elementos = array();

        while(!feof($archivo))
        {
            $linea = fgets($archivo);

            $array_linea = explode("-", $linea);

            //limpio la linea
            $array_linea[0]= trim($array_linea[0]);

            if($array_linea[0] != " ")
            {
                //recupero campos
                $legajoArchivo = trim($array_linea[0]);
                $nombreArhivo = trim($array_linea[1]);
                $apellidoArchivo = trim($array_linea[2]);
            }


            if($legajoModificar == $legajoArchivo)
            {
                array_push($elementos, "{$legajoArchivo} - {$nombreModificar} - {$apellidoModificar}\n");
            }
            else
            {
                array_push($elementos,"{$legajoArchivo} - {$nombreArhivo} - {$apellidoArchivo}\n");
            }

        }

        fclose($archivo);

        //ABRO EL ARCHIVO
		$archivo = fopen("./archivos/alumnos.txt", "w");

		$cant = 0;
		
		//ESCRIBO EN EL ARCHIVO
		foreach($elementos AS $item){

			$cant = fwrite($archivo, $item);
		}

		if($cant > 0)
		{
			echo "<h2> Registro MODIFICADO </h2><br/>";			
		}

		//CIERRO EL ARCHIVO
		fclose($archivo);

        break;


    case "Eliminar":
        $elementos = array();

        //ABRO EL ARCHIVO
        $archivo = fopen("./archivos/alumnos.txt", "r");

        //LEO LINEA X LINEA DEL ARCHIVO 
        while(!feof($archivo))
        {
            $linea = fgets($archivo);
            //http://www.w3schools.com/php/func_string_explode.asp
            $array_linea = explode("-", $linea);

            $array_linea[0] = trim($array_linea[0]);

            if($array_linea[0] != " "){

                //RECUPERO LOS CAMPOS
                $legajoArchivo = trim($array_linea[0]);
                $nombreArhivo = trim($array_linea[1]);
                $apellidoArchivo = trim($array_linea[2]);

                if ($legajoArchivo == $legajoEliminar) {
                    
                    continue;
                }

                array_push($elementos, "{$legajoArchivo}-{$nombreArhivo}-{$apellidoArchivo}\r\n");
            }
        }

        //CIERRO EL ARCHIVO
        fclose($archivo);

        $cant = 0;

        //ABRO EL ARCHIVO
        $archivo = fopen("./archivos/alumnos.txt", "w");

        //ESCRIBO EN EL ARCHIVO
        foreach($elementos AS $item){

            $cant = fwrite($archivo, $item);
        }

        if($cant > 0)
        {
            echo "<h2> Registro BORRADO </h2><br/>";			
        }

        //CIERRO EL ARCHIVO
        fclose($archivo);
        break;

}


?>