<?php

/**
 * Created by PhpStorm.
 * User: jimmysidney
 * Date: 12/1/16
 * Time: 11:20 PM
 */

require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/helpfamilycontrol/Controlador/DEPOSITO.php');

    switch ($_POST['seleccionarMetodo']){

        case "nuevoDeposito":

            $nuevoDep = new DEPOSITO();
            $respuesta = $nuevoDep->nuevoDeposito($_POST["idPatrocinador"],$_POST["idCuenta"],$_POST["idEmpleado"],
                $_POST["noDeposito"],$_POST["montoDeposito"],$_POST["fechaDeposito"],$_POST["descripcionDeposito"]);

            echo $respuesta; //devuelve true o false

            break;

        case "eliminarDeposito":
            $eliminarDep = new DEPOSITO();
            $respuesta = $eliminarDep->eliminarEmpleado($_POST['idDeposito']);

            echo $respuesta;
            break;

        case "actualizarDeposito":


            break;

        case "consultarDeposito":
            $consultarDep = new DEPOSITO();
            $respuesta = $consultarDep->consultarEmpleado($_POST['idDeposito']);

            echo $respuesta; //se devuelve un objeto json
            break;
    }



?>