<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/public_html/Modelo/BASE_DE_DATOS.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/public_html/Modelo/TABLAS.php');

/**
 * Created by PhpStorm.
 * User: jimmysidney
 * Date: 11/1/16
 * Time: 9:24 AM
 */
class ALBERGUE
{

    private $idAlbergue;
    private $idTipoAlbergue;
    private $idEstado;
    private $nombreAlbergue;
    private $direccionAlbergue;
    private $telefonoAlbergue;

    private $conexion;
    private $pdoConexion;
    private $stmQuery;
    private $bind;
    private $dataAlbergue;

    public function __construct()
    {
        $this->conexion = new BASE_DE_DATOS();
        $this->pdoConexion = null;
        $this->stmQuery = null;
        $this->bind = null;
        $this->dataAlbergue = null;

        //$this->idAlbergue = null;
        $this->idTipoAlbergue = null;
        $this->idEstado = null;
        $this->nombreAlbergue = null;
        $this->direccionAlbergue = null;
        $this->telefonoAlbergue = null;
    }

    public function nuevoAlbergue($idTipo,$idEstado,$nombreAlbergue,$direccAlbergue,$telAlbergue){

        try{
            $this->stmQuery = "INSERT INTO Albergue(idTipoAlbergue,idEstado,nombreAlbergue,
                                         direccionAlbergue,telefonoAlbergue)
                               VALUES(:idTipo,:idEstado,:nombreAlb,:direccionAlb,:telAlb)";

            $this->pdoConexion = $this->conexion->conectarBaseDeDatos();
            $this->bind = $this->pdoConexion->prepare($this->stmQuery);

            $this->bind->bindParam(":idTipo",$idTipo);
            $this->bind->bindParam(":idEstado",$idEstado);
            $this->bind->bindParam(":nombreAlb",$nombreAlbergue);
            $this->bind->bindParam(":direccionAlb",$direccAlbergue);
            $this->bind->bindParam(":telAlb",$telAlbergue);


            $this->dataAlbergue =  $this->bind->execute();

            if($this->dataAlbergue == true){
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

    public function actualizarAlbergue($idAlbergue,$idTipo,$idEstado,$nombreAlbergue,$direccAlbergue,$telAlbergue){

        try{
            $this->stmQuery = "UPDATE Albergue SET  idTipoAlbergue = :idTipoAlb,
                                                    idEstado = :idEstado,
                                                    nombreAlbergue = :nombreAlb,
                                                    direccionAlbergue = :direccAlb,
                                                    telefonoAlbergue = :telAlb
                               WHERE idAlbergue = :idAlb";

            $this->pdoConexion = $this->conexion->conectarBaseDeDatos();
            $this->bind = $this->pdoConexion->prepare($this->stmQuery);

            $this->bind->bindParam(":idTipoAlb",$idTipo);
            $this->bind->bindParam(":idEstado",$idEstado);
            $this->bind->bindParam(":nombreAlb",$nombreAlbergue);
            $this->bind->bindParam(":direccAlb",$direccAlbergue);
            $this->bind->bindParam(":telAlb",$telAlbergue);
            $this->bind->bindParam(":idAlb",$idAlbergue);

            $this->dataAlbergue =  $this->bind->execute();

            if($this->dataAlbergue == true){
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

    public function eliminarAlbergue($idAlbergue){

        try{
            $this->stmQuery = "DELETE FROM Albergue WHERE idEmpleado = :idAlbergue";


            $this->pdoConexion = $this->conexion->conectarBaseDeDatos();
            $this->bind = $this->pdoConexion->prepare($this->stmQuery);

            $this->bind->bindParam(":idAlbergue",$idAlbergue);

            $this->dataAlbergue =  $this->bind->execute();

            if($this->dataAlbergue == true){
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

    public function consultarTodosAlbergue()
    {
        try{

            $this->stmQuery = "SELECT idAlbergue,nombreTipoAlbergue,nombreEstado,
                                      nombreAlbergue,direccionAlbergue,telefonoAlbergue
                               FROM Albergue as A, TipoAlbergue as TA, Estado as ES
                               WHERE A.idTipoAlbergue = TA.idTipoAlbergue
                               AND  A.idEstado = ES.idEstado";


            $this->pdoConexion = $this->conexion->conectarBaseDeDatos();
            $this->bind = $this->pdoConexion->prepare($this->stmQuery);
            $this->bind->execute();

            $this->dataAlbergue = $this->bind->fetchAll();

            return $this->dataAlbergue;

        }catch (PDOException $ex){

            return $ex->getMessage();

        }finally{

            $this->pdoConexion = null;
        }
    }//end consultarTodosLosEmpleados

    public function buscarAlbergue($nombre){

        try{
            $this->stmQuery = "SELECT idAlbergue,nombreTipoAlbergue,nombreEstado,
                                      nombreAlbergue,direccionAlbergue,telefonoAlbergue
                               FROM Albergue as A, TipoAlbergue as TA, Estado as ES
                                WHERE A.idTipoAlbergue = TA.idTipoAlbergue
                                AND  A.idEstado = ES.idEstado
                                AND A.nombreAlbergue  LIKE '%:nombre%'";


            $this->pdoConexion = $this->conexion->conectarBaseDeDatos();
            $this->bind = $this->pdoConexion->prepare($this->stmQuery);
            $this->bind->bindParam(":nombre",$nombre);
            $this->bind->execute();

            $this->dataAlbergue = $this->bind->fetchAll();

            return $this->dataAlbergue;

        }catch (PDOException $ex){

            return $ex->getMessage();

        }finally{

            $this->pdoConexion = null;
        }
    }// end buscarAlbergue
}//end Class Albergue
