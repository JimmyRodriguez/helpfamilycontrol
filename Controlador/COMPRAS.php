<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/helpfamilycontrol/index/Modelo/BASE_DE_DATOS.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/helpfamilycontrol/index/Modelo/TABLAS.php');

/**
 * Created by PhpStorm.
 * User: jimmysidney
 * Date: 11/1/16
 * Time: 9:24 AM
 */

class COMPRAS
{
    private $idCompra;
    private $idEmpleado;
    private $fechaCompra;
    private $descripcionCompra;

    private $conexion;
    private $pdoConexion;
    private $stmQuery;
    private $bind;
    private $dataCompra;

    public function __construct()
    {
        $this->conexion = new BASE_DE_DATOS();
        $this->pdoConexion = null;
        $this->stmQuery = null;
        $this->bind = null;
        $this->dataCompra = null;

        $this->idCompra = null;
        $this->fechaCompra = null;
        $this->descripcionCompra = null;
    }

    public function nuevaCompra($idEmp,$descCompra,$fechaCom){

        $this->idEmpleado = $idEmp;
        $this->descripcionCompra = $descCompra;
        $this->fechaCompra = $fechaCom;


        try{
            $this->stmQuery = "INSERT INTO Compras(idEmpleado,descripcionCompra,fechaCompra)
                               VALUES(:idEmp,:descripcion,:fecha)";

            $this->pdoConexion = $this->conexion->conectarBaseDeDatos();
            $this->bind = $this->pdoConexion->prepare($this->stmQuery);

            $this->bind->bindParam(":idEmp",$this->idEmpleado);
            $this->bind->bindParam(":descripcion",$this->descripcionCompra);
            $this->bind->bindParam(":fecha",$this->fechaCompra);



            $this->dataCompra =  $this->bind->execute();

            if($this->dataCompra == true){
                return true;
            }else{
                return false;
            }

        }catch (PDOException $ex){

            return $ex->getMessage();

        }finally{

            $this->pdoConexion = null;
        }

    }//end nuevoEmpleado

    public function actualizarCompra($idComp,$fecCompra,$descCompra){

        $this->idCompra = $idComp;
        $this->fechaCompra = $fecCompra;
        $this->descripcionCompra = $descCompra;

        try{
            $this->stmQuery = "UPDATE Compras SET  fechaCompra = :fechaCom,
                                                    descripcionCompra = :descripcionCom
                               WHERE idCompra = :idCom";

            $this->pdoConexion = $this->conexion->conectarBaseDeDatos();
            $this->bind = $this->pdoConexion->prepare($this->stmQuery);

            $this->bind->bindParam(":idCom",$this->idCompra);
            $this->bind->bindParam(":fechaCom",$this->fechaCompra);
            $this->bind->bindParam(":descripcionCom",$this->descripcionCompra);

            $this->dataCompra =  $this->bind->execute();

            if($this->dataCompra == true){
                return true;
            }else{
                return false;
            }

        }catch (PDOException $ex){

            return $ex->getMessage();

        }finally{

            $this->pdoConexion = null;
        }

    }//end actualizarEmpleado

    public function eliminarCompra($idComp){

        $this->idCompra = $idComp;

        try{
            $this->stmQuery = "DELETE FROM Compras WHERE idCompra = :idCom";


            $this->pdoConexion = $this->conexion->conectarBaseDeDatos();
            $this->bind = $this->pdoConexion->prepare($this->stmQuery);

            $this->bind->bindParam(":idCom",$this->idCompra);

            $this->dataCompra =  $this->bind->execute();

            if($this->dataCompra == true){
                return true;
            }else{
                return false;
            }

        }catch (PDOException $ex){

            return $ex->getMessage();

        }finally{

            $this->pdoConexion = null;
        }

    }//end eliminar Compra

    public function consultarTodasCompras()
    {
        try{

            $this->stmQuery = "SELECT idCompra, fechaCompra, descripcionCompra,nombreEmpleado
                               FROM Compras AS C, Empleado AS E
                               WHERE C.idEmpleado = E.idEmpleado
                               ORDER BY nombreEmpleado";


            $this->pdoConexion = $this->conexion->conectarBaseDeDatos();
            $this->bind = $this->pdoConexion->prepare($this->stmQuery);
            $this->bind->execute();

            $this->dataCompra = $this->bind->fetchAll();

            return $this->dataCompra;

        }catch (PDOException $ex){

            return $ex->getMessage();

        }finally{

            $this->pdoConexion = null;
        }
    }//end consultarTodosLosCompras

    public function buscarCompra($noChequePago){


    }// end buscaCompra

}//end Class Compra
