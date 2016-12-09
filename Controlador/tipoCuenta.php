<?php
/**
 * Created by PhpStorm.
 * User: jimmysidney
 * Date: 11/1/16
 * Time: 9:13 AM
 */

require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/helpfamilycontrol/Modelo/BASE_DE_DATOS.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/helpfamilycontrol/Modelo/TABLAS.php');



class tipoCuenta
{
    private $idTipoCuenta;
    private $nombreTipoCuenta;

    private $conexion;
    private $pdoConexion;
    private $stmQuery;
    private $bind;
    private $dataEmpleado;


    public function __construct()
    {
        $this->conexion = new BASE_DE_DATOS();
        $this->pdoConexion = null;
        $this->stmQuery = null;
        $this->bind = null;
        $this->dataEmpleado = null;

        $this->idTipoCuenta = null;
        $this->nombreTipoCuenta = null;
    }

    public function nuevoTipoCuenta($nombreTip){

        $this->nombreTipoCuenta = $nombreTip;

        try{
            $this->stmQuery = "INSERT INTO tipoCuenta(nombreTipoCuenta)
                               VALUES(:nombre)";

            $this->pdoConexion = $this->conexion->conectarBaseDeDatos();
            $this->bind = $this->pdoConexion->prepare($this->stmQuery);

            $this->bind->bindParam(":nombre",$this->nombreTipoCuenta);


            $this->dataTipo =  $this->bind->execute();

            if($this->dataTipo == true){
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

    public function actualizarTipoCuenta($idTipo,$nombreTip){

        $this->idTipoCuenta = $idTipo;
        $this->nombreTipoCuenta = $nombreTip;

        try{
            $this->stmQuery = "UPDATE tipoCuenta SET nombreTipoCuenta = :nombreCta
                               WHERE idTipoCuenta = :idTip";

            $this->pdoConexion = $this->conexion->conectarBaseDeDatos();
            $this->bind = $this->pdoConexion->prepare($this->stmQuery);

            $this->bind->bindParam(":idTip",$this->idTipoCuenta);
            $this->bind->bindParam(":nombreCta",$this->nombreTipoCuenta);


            $this->dataTipo =  $this->bind->execute();

            if($this->dataTipo == true){
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

    public function eliminarTipo($idTipoCta){

        $this->idTipoCuenta = $idTipoCta;

        try{
            $this->stmQuery = "DELETE FROM tipoCuenta WHERE idTipoCuenta = :idTipoCuenta";


            $this->pdoConexion = $this->conexion->conectarBaseDeDatos();
            $this->bind = $this->pdoConexion->prepare($this->stmQuery);

            $this->bind->bindParam(":idTipocuenta",$idEmpleado);

            $this->dataTipo =  $this->bind->execute();

            if($this->dataTipo == true){
                return true;
            }else{
                return false;
            }

        }catch (PDOException $ex){

            return $ex->getMessage();

        }finally{

            $this->pdoConexion = null;
        }

    }//end eliimarEmpleado

    public function consultarTipo($idTipo){

        $this->idTipoCuenta = $idTipo;

        try{
            $this->stmQuery = "SELECT * FROM tipoCuenta WHERE idTipocuenta = :idTipo";

            $this->pdoConexion = $this->conexion->conectarBaseDeDatos();
            $this->bind = $this->pdoConexion->prepare($this->stmQuery);
            $this->bind->bindParam(":idTipo",$idTipo);
            $this->bind->execute();

            $this->dataEmpleado = $this->bind->fetchAll();

            return json_encode($this->dataEmpleado);

        }catch (PDOException $ex){

            return $ex->getMessage();

        }finally{

            $this->pdoConexion = null;
        }

    }

    public function consultarTodosTipo()
    {
        try{

            $this->stmQuery = "SELECT * FROM tipoCuenta";


            $this->pdoConexion = $this->conexion->conectarBaseDeDatos();
            $this->bind = $this->pdoConexion->prepare($this->stmQuery);
            $this->bind->execute();

            $this->dataTipo = $this->bind->fetchAll();

            return $this->dataTipo;

        }catch (PDOException $ex){

            return $ex->getMessage();

        }finally{

            $this->pdoConexion = null;
        }
    }//end consultarTodosLosEmpleados

    public function buscarEmpleado($nombre){

        try{
            $this->stmQuery = "SELECT idEmpleado,nombreEstado,nombreSexo,
                                       nombreEmpleado,dpiEmpleado,telefonoEmpleado,
                                       emailEmpleado,direccionEmpleado,fechaNacEmpleado
                               FROM Empleado as E, Estado as ES, Sexo as S
                               WHERE E.idEstado = ES.idEstado
                               AND E.idSexo = S.idSexo
                               AND E.nombreEmpleado LIKE '%:nombre%'";


            $this->pdoConexion = $this->conexion->conectarBaseDeDatos();
            $this->bind = $this->pdoConexion->prepare($this->stmQuery);
            $this->bind->bindParam(":nombre",$nombre);
            $this->bind->execute();

            $this->dataEmpleado = $this->bind->fetchAll();

            return $this->dataEmpleado;

        }catch (PDOException $ex){

            return $ex->getMessage();

        }finally{

            $this->pdoConexion = null;
        }
    }// end buscarEmpleado
}//end Class Empleado
