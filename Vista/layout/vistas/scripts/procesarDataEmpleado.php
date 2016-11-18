<?php
/**
 * Created by PhpStorm.
 * User: jimmysidney
 * Date: 11/1/16
 * Time: 4:10 PM
 */

/*require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/SistemaDesastresNaturales/Controlador/EMPLEADO.php');


    if(empty($_POST['idEstado'])){

        return $mensaje = "Ingrese un Estado";

    }else if(empty($_POST['idSexo'])){

        return $mensaje = "Ingrese El sexo";

    }else if(is_numeric($_POST['idEstado']) && is_numeric($_POST['idSexo'])){

        return $mensaje = "los valores no son numericos";

    }else if (empty($_POST['nombreEmpleado'])){

        return $mensaje = "Ingrese el nombre";

    }else if(empty($_POST['dpiEmpleado'])){

        return $mensaje = "Ingrese el numero de dpi";

    }else if(empty($_POST['telefonoEmpleado'])){

        return $mensaje = "Ingrese el numero de telefono";

    }else if(empty($_POST['emailEmpleado'])){

        return $mensaje = "Ingrese el correo electronico";

    }else if(empty($_POST['direccionEmpleado'])){

        return $mensaje = "Ingrese la direccion";

    }else if(empty($_POST['fechaNacimiento'])){

        return $mensaje = "Ingrese la fecha de nacimiento";

    }else{

        $empleado = new EMPLEADO();
        $empleado->nuevoEmpleado($_POST['idEstado'],$_POST['idSexo'],$_POST['nombreEmpleado'],$_POST['dpiEmpleado'],
            $_POST['telefonoEmpleado'],$_POST['emailEmpleado'],$_POST['direccionEmpleado'],$_POST['fechaNacimiento']);

    }
*/

require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/helpfamilycontrol/Controlador/EMPLEADO.php');

    switch ($_POST['seleccionarMetodo']){

        case "nuevoEmpleado":

            $nuevoEmp = new EMPLEADO();
            $respuesta = $nuevoEmp->nuevoEmpleado($_POST['idEstado'],$_POST['idSexo'],$_POST['nombreEmpleado'],$_POST['dpiEmpleado'],
                $_POST['telefonoEmpleado'],$_POST['emailEmpleado'],$_POST['direccionEmpleado'],$_POST['fechaNacEmpleado']);

            echo $respuesta; //devuelve true o false

            break;

        case "eliminarEmpleado":
            $eliminarEmp = new EMPLEADO();
            $respuesta = $eliminarEmp->eliminarEmpleado($_POST['idEmpleado']);

            echo $respuesta;
            break;

        case "actualizarEmpleado":


            break;

        case "consultarEmpleado":
            $consultarEmp = new EMPLEADO();
            $respuesta = $consultarEmp->consultarEmpleado($_POST['idEmpleado']);

            echo $respuesta; //se devuelve un objeto json
            break;
    }



?>