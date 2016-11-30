<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/helpfamilycontrol/Modelo/BASE_DE_DATOS.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/helpfamilycontrol/Modelo/TABLAS.php');

/**
 * Created by PhpStorm.
 * User: jimmysidney
 * Date: 11/1/16
 * Time: 9:13 AM
 */
class DETALLE_COMPRAS
{
    private $idDetalleCompras;
    private $idProveedor;
    private $idInsumo;
    private $idCompra;
    private $fechaDetalleCompras;
    private $descripcionDetalleCompras;
    private $costoDetalleCompras;
    private $cantidadDetalleCompras;

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
        $this->dataDetalle = null;

        $this->idDetalleCompras = null;
        $this->idProveedor;
        $this->idInsumo;
        $this->idCompra;
        $this->fechaDetalleCompras;
        $this->descripcionDetalleCompras;
        $this->costoDetalleCompras;
        $this->cantidadDetalleCompras;
    }

    public function nuevaDetalle($idProv,$idIns,$idCom,$fechaDet,$descDetalle,$costoDetalle,$cantidadDetalle){

        $this->idProveedor = $idProv;
        $this->idInsumo = $idIns;
        $this->idCompra = $idCom;
        $this->fechaDetalleCompras = $fechaDet;
        $this->descripcionDetalleCompras = $descDetalle;
        $this->costoDetalleCompras = $costoDetalle;
        $this->cantidadDetalleCompras = $cantidadDetalle;


        try{
            $this->stmQuery = "INSERT INTO detalleCompras(idProveedor,idInsumo,idCompra,fechaDetalleCompras,descripcionDetalleCompras,costoDetalleCompras,cantidadDetalleCompras)
                               VALUES(:idProvee,:idInsu,:idComp,:fechaDet,:descDet,:costoDet,:cantidadDet)";

            $this->pdoConexion = $this->conexion->conectarBaseDeDatos();
            $this->bind = $this->pdoConexion->prepare($this->stmQuery);

            $this->bind->bindParam(":idProvee",$this->idProveedor);
            $this->bind->bindParam(":idInsu",$this->idInsumo);
            $this->bind->bindParam(":idComp",$this->idCompra);
            $this->bind->bindParam(":fechaDet",$this->fechaDetalleCompras);
            $this->bind->bindParam(":descDet",$this->descripcionDetalleCompras);
            $this->bind->bindParam(":costoDet",$this->costoDetalleCompras);
            $this->bind->bindParam(":cantidadDet",$this->cantidadDetalleCompras);



            $this->dataDetalle =  $this->bind->execute();

            if($this->dataDetalle == true){

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

    public function actualizarDetalle($idDet,$idProv,$idIns,$idCom,$fechaDet,$descDetalle,$costoDetalle,$cantidadDetalle){

        $this->idDetalleCompras = $idDet;
        $this->idProveedor = $idProv;
        $this->idInsumo = $idIns;
        $this->idCompra = $idCom;
        $this->fechaDetalleCompras = $fechaDet;
        $this->descripcionDetalleCompras = $descDetalle;
        $this->costoDetalleCompras = $costoDetalle;
        $this->cantidadDetalleCompras = $cantidadDetalle;

        try{
            $this->stmQuery = "UPDATE DetalleCompras SET  fechaCompra = :fechaCom,
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

    public function eliminarDetalle($idComp){

        $this->idCompra = $idComp;

        try{
            $this->stmQuery = "DELETE FROM DetalleCompras WHERE idCompra = :idCom";


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

    public function consultarTodosDetalles()
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
