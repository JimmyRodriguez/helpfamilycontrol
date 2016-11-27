<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/helpfamilycontrol/Modelo/BASE_DE_DATOS.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/helpfamilycontrol/Modelo/TABLAS.php');
/**
 * Created by PhpStorm.
 * User: jimmysidney
 * Date: 11/1/16
 * Time: 9:17 AM
 */
class PATROCINADOR
{
    private $idPatrocinador;
    private $idTipoPatrocinador;
    private $idEstado;
    private $nombrePatrocinador;
    private $direccionPatrocinador;
    private $emailPatrocinador;
    private $telefonoPatrocinador;
    private $fechaInscripcionPatrocinador;

    private $conexion;
    private $pdoConexion;
    private $stmQuery;
    private $bind;
    private $dataPatrocinador;


    public function __construct()
    {
        $this->conexion = new BASE_DE_DATOS();
        $this->pdoConexion = null;
        $this->stmQuery = null;
        $this->bind = null;
        $this->dataPatrocinador = null;

        $this->idPatrocinador = null;
        $this->idTipoPatrocinador = null;
        $this->idEstado = null;
        $this->nombrePatrocinador = null;
        $this->direccionPatrocinador = null;
        $this->emailPatrocinador = null;
        $this->telefonoPatrocinador = null;
        $this->fechaInscripcionPatrocinador = null;
    }

    public function nuevoPatrocinador($idTipo,$idEst,$nombre,$direcc,$email,$tel,$fechaInsc){

        $this->idTipoPatrocinador = $idTipo;
        $this->idEstado = $idEst;
        $this->nombrePatrocinador = $nombre;
        $this->direccionPatrocinador = $direcc;
        $this->emailPatrocinador = $email;
        $this->telefonoPatrocinador = $tel;
        $this->fechaInscripcionPatrocinador = $fechaInsc;

        try{
            $this->stmQuery = "INSERT INTO Patrocinador(idTipoPatrocinador, idEstado, nombrePatrocinador, direccionPatrocinador,
                                                        emailPatrocinador, telefonoPatrocinador, fechaInscripcionPatrocinador)
                               VALUES(:idTipo,:idEstado,:nombrePat,:direccionPat,:emailPat,:telPat,:fechaInscripcionPat)";


            $this->pdoConexion = $this->conexion->conectarBaseDeDatos();
            $this->bind = $this->pdoConexion->prepare($this->stmQuery);

            $this->bind->bindParam(":idTipo",$this->idTipoPatrocinador);
            $this->bind->bindParam(":idEstado",$this->idEstado);
            $this->bind->bindParam(":nombrePat",$this->nombrePatrocinador);
            $this->bind->bindParam(":direccionPat",$this->direccionPatrocinador);
            $this->bind->bindParam(":emailPat",$this->emailPatrocinador);
            $this->bind->bindParam(":telPat",$this->telefonoPatrocinador);
            $this->bind->bindParam(":fechaInscripcionPat",$this->fechaInscripcionPatrocinador);

            $this->dataPatrocinador =  $this->bind->execute();

            if($this->dataPatrocinador == true){
                return true;
            }else{
                return false;
            }

        }catch (PDOException $ex){

            return $ex->getMessage();

        }finally{

            $this->pdoConexion = null;
        }


    }
    public function actualizarPatrocinador(){

    }
    public function eliminarPatrocinador(){

    }
    public function consultarPatrocindador(){

        try{
            $this->stmQuery = "SELECT idPatrocinador,nombreTipoPatrocinador,nombrePatrocinador,
                                      telefonoPatrocinador,emailPatrocinador,direccionPatrocinador
                                      FROM Patrocinador as P, TipoPatrocinador as TP, Estado as E
                                      WHERE P.idTipoPatrocinador = TP.idTipoPatrocinador
                                      AND P.idEstado = E.idEstado";


            $this->pdoConexion = $this->conexion->conectarBaseDeDatos();
            $this->bind = $this->pdoConexion->prepare($this->stmQuery);
            $this->bind->execute();

            $this->dataPatrocinador = $this->bind->fetchAll();

            return $this->dataPatrocinador;

        }catch (PDOException $ex){

            return $ex->getMessage();

        }finally{

            $this->pdoConexion = null;
        }

    }

    public function imprimirListadoPatrocinador(){

    }

}