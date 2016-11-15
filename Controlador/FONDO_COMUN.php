<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/helpfamilycontrol/Modelo/BASE_DE_DATOS.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/helpfamilycontrol/Modelo/TABLAS.php');

/**
 * Created by PhpStorm.
 * User: jimmysidney
 * Date: 11/1/16
 * Time: 9:15 AM
 */
class FONDO_COMUN
{
    private $idFondo;
    private $idPatrocinador;
    private $noVoucherFondoComun;
    private $debitoFondo;
    private $creditoFondo;
    private $fechaTransaccionFondo;
    private $descripionTransaccionFondo;

    public function __construct()
    {

    }

    public function nuevoRegistroFondoComun(){

    }
    public function actualizarRegistroFondoComun(){

    }

    public function consultarRegistroFondoComun(){

    }

    public function eliminarRegistroFondoComun(){

    }

    public function imprimirEstadoCuentaFondoComun(){

    }

}