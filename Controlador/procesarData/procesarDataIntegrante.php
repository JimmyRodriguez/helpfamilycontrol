<?php
/**
 * Created by PhpStorm.
 * User: jimmysidney
 * Date: 11/20/16
 * Time: 9:24 AM
 */

require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/helpfamilycontrol/Controlador/INTEGRANTE.php');

    switch ($_POST['seleccionarMetodo']){

        case "nuevoIntegrante":

            $nuevoInt = new INTEGRANTE();
            $respuesta =
                $nuevoInt->nuevoIntegrante($_POST["idSexo"],$_POST["idFamilia"],$_POST["idTipoIntegrante"],
                                           $_POST["nombreIntegrante"],$_POST["apellidoIntegrante"],$_POST["fechaNacIntegrante"],
                                           $_POST["telefonoIntegrante"],$_POST["emailIntegrante"],$_POST["edadIntegrante"]);

            echo $respuesta; //devuelve true o false

            break;

        case "eliminarIntegrante":
            $eliminarInt = new INTEGRANTE();
            $respuesta = $eliminarInt->eliminarIntegrante($_POST["idIntegrante"]);

            echo $respuesta;
            break;

        case "actualizarIntegrante":
            $actualizarInt = new INTEGRANTE();
            $respuesta = $actualizarInt->actualizarIntegrante();

            break;

        case "consultarIntegrante":
            $consultarInt = new INTEGRANTE();
            $respuesta = $consultarInt->consultarIntegrante();

            echo $respuesta; //se devuelve un objeto json
            break;
    }



?>