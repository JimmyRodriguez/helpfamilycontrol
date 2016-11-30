<?php
/**
 * Created by PhpStorm.
 * User: jimmysidney
 * Date: 11/23/16
 * Time: 3:10 PM
 */

require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/helpfamilycontrol/Controlador/USUARIO.php');

switch ($_POST['seleccionarMetodo']){

    case "validar":

        $confirmar = new USUARIO();

        $resultado = $confirmar->validarUsuarioIngresar($_POST['nombreUsuario'],$_POST['passwordUsuario']);

        echo $resultado;

        break;

    case "registrar":

        $nuevoUsuario = new USUARIO();
        $resultado    = $nuevoUsuario->registrarUsuario($_POST['nombreUsuario'],$_POST['passwordUsuario']);

        echo $resultado;

        break;

    case "eliminar":

        break;

    case "actualizar":

        break;

}

?>