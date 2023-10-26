<?php

use vukosic\Alumno;

include "alumno.php";
// Tomando como punto de partida las funcionalidades anteriores, se pide:
// Crear la clase Alumno (en un namespace nombrado con su apellido) con los
// atributos y métodos necesarios para realizar el CRUD sobre el archivo
// ./archivos/alumnos.txt.
// Las peticiones realizarlas sobre la página ./nexo_poo.php.

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

$pathFoto = $_FILES['foto']['name'];

$legajoObtener = isset($_POST['LegajoObtener']) ? (int)$_POST['LegajoObtener'] : 0;
$legajoRedirigir = isset($_POST['LegajoRedirigir']) ? (int)$_POST['LegajoRedirigir'] : 0;
switch($accion)
{
    case "Agregar":
        $nuevoAlumno = new  Alumno($legajo, $nombre, $apellido, $pathFoto);

        $retorno = Alumno::Agregar($nuevoAlumno);

        if($retorno!=false)
        {
            echo "<h2> Alumno AGREGADO </h2><br/>";
        }
        
        break;
    
    case "Listar":
        echo "<h2>Lista alumnos</h2>";
        Alumno::Listar();
        break;

    case "Verificar":
        Alumno::Verificar($legajoVerificar);
        break;
    
    case "Modificar":
        $alumnoModificar = new Alumno($legajoModificar, $nombreModificar, $apellidoModificar, ""); 
        Alumno::Modificar($alumnoModificar);
        break;

    case "Eliminar":
        Alumno::Eliminar($legajoEliminar);
        break;

    case "Obtener":
        var_dump(Alumno::Obtener($legajoObtener));
        break;

    case "Redirigir":
        if(Alumno::Verificar($legajoRedirigir))
        {
            header("Location: ./principal.php");
        }
        else
        {
            echo "<br>El alumno con legajo {$legajoRedirigir} no se encuentra en el listado <br>";
        }
        break;
}


?>