<?php
/**
 * Created by PhpStorm.
 * User: jimmysidney
 * Date: 11/1/16
 * Time: 4:10 PM
 */

require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/helpfamilycontrol/Controlador/DETALLE_COMPRAS.php');

switch ($_POST['seleccionarMetodo']){

    case "nuevoDetalle":

        $nuevoDet = new DETALLE_COMPRAS();
        $respuesta = $nuevoDet->nuevaDetalle();

        echo $respuesta; //devuelve true o false

        break;

    case "eliminarDetalle":
        $eliminarDet = new DETALLE_COMPRAS();
        $respuesta = $eliminarDeT->eliminarDetalle();

        echo $respuesta;
        break;

    case "actualizarDetalle":


        break;

    case "consultarDetalle":
        $consultarDet = new DETALLE_COMPRAS();
        $respuesta = $consultarDet->actualizarDetalle();

        echo $respuesta; //se devuelve un objeto json
        break;
}



?>