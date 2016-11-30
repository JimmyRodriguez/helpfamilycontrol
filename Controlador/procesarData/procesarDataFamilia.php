<?php
/**
 * Created by PhpStorm.
 * User: jimmysidney
 * Date: 11/1/16
 * Time: 4:10 PM
 */

require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/helpfamilycontrol/Controlador/FAMILIA.php');

switch ($_POST['seleccionarMetodo']){

    case "nuevaFamilia":

        $nuevoFam = new FAMILIA();
        $respuesta = $nuevoFam->nuevaFamilia($_POST["idAlbergue"],$_POST["idEstado"],$_POST["idPatrocinador"],
                                             $_POST["idDesastre"],$_POST["nombreFamilia"],$_POST["direccionFamilia"]);

        echo $respuesta; //devuelve true o false

        break;

    case "eliminarFamilia":

        //echo $_POST["seleccionarMetodo"];
        //echo "Estoy en procesarDataFamilia.php : " .$_POST["idFamilia"];

        $eliminarFam = new FAMILIA();
        $respuesta = $eliminarFam->eliminarFamilia($_POST["idFamilia"]);

        echo "Respueta de base de datos".$respuesta;
        break;

    case "actualizarFamilia":


        break;

    case "consultarFamilia":
        $nuevoFam = new FAMILIA();
        $respuesta = $nuevoFam->consultarFamilia();

        echo $respuesta; //se devuelve un objeto json
        break;
}



?>