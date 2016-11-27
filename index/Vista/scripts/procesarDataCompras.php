<?php
/**
 * Created by PhpStorm.
 * User: jimmysidney
 * Date: 11/18/16
 * Time: 7:51 PM
 */



require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/helpfamilycontrol/index/Controlador/COMPRAS.php');

switch ($_POST['seleccionarMetodo']){

    case "nuevaCompra":

        $nuevoCom = new COMPRAS();
        $respuesta = $nuevoCom->nuevaCompra($_POST["idEmpleado"],$_POST["descripcionCompra"],$_POST["fechaCompra"]);

        echo $respuesta; //devuelve true o false

        break;

    case "eliminarCompra":
        $eliminarCom = new COMPRAS();
        $respuesta = $eliminarCom->eliminarCompra($_POST["idCompra"]);

        echo $respuesta;
        break;

    case "actualizarCompra":


        break;

    case "consultarCompra":
        $consultarComp = new COMPRAS();
        $respuesta = $consultarComp->consultarTodasCompras();

        echo $respuesta; //se devuelve un objeto json
        break;
}


