<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/helpfamilycontrol/Modelo/BASE_DE_DATOS.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/helpfamilycontrol/Modelo/TABLAS.php');

/**
 * Created by PhpStorm.
 * User: jimmysidney
 * Date: 11/1/16
 * Time: 9:24 AM
 */

class COMPRAS
{
    //private $idCompra;
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

        $this->fechaCompra = null;
        $this->descripcionCompra = null;
    }

    public function nuevaCompra($fechaCompra,$descripcionCompra){

        try{
            $this->stmQuery = "INSERT INTO Pagos(fechaCompra,descripcionCompra)
                               VALUES(:fechaCom,:descripcionCom)";

            $this->pdoConexion = $this->conexion->conectarBaseDeDatos();
            $this->bind = $this->pdoConexion->prepare($this->stmQuery);

            $this->bind->bindParam(":fechaCom",$fechaCompra);
            $this->bind->bindParam(":descripcionCom",$descripcionCompra;


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

    public function actualizarCompra($idCompra,$fechaCompra,$descripcionCompra){

        try{
            $this->stmQuery = "UPDATE Compras SET  fechaCompra = :fechaCom,
                                                    descripcionCompra = :descripcionCom
                               WHERE idCompra = :idCom";

            $this->pdoConexion = $this->conexion->conectarBaseDeDatos();
            $this->bind = $this->pdoConexion->prepare($this->stmQuery);

            $this->bind->bindParam(":idCom",$idCompra);
            $this->bind->bindParam(":fechaCom",$fechaCompra);
            $this->bind->bindParam(":descripcionCom",$descripcionCompra);

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

    public function eliminarCompra($idCompra){

        try{
            $this->stmQuery = "DELETE FROM Compras WHERE idCompra = :idCom";


            $this->pdoConexion = $this->conexion->conectarBaseDeDatos();
            $this->bind = $this->pdoConexion->prepare($this->stmQuery);

            $this->bind->bindParam(":idCom",$idCompra);

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

    }//end elimarEmpleado

    public function consultarTodasCompras()
    {
        try{

            $this->stmQuery = "SELECT * FROM Compras";


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
    }//end consultarTodosLosEmpleados

    public function buscarCompra($noChequePago){


    }// end buscarPago

}//end Class Pago
