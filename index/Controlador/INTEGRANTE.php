<?php
/**
 * Created by PhpStorm.
 * User: jimmysidney
 * Date: 11/1/16
 * Time: 9:13 AM
 */

require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/helpfamilycontrol/index/Modelo/BASE_DE_DATOS.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/helpfamilycontrol/index/Modelo/TABLAS.php');



class INTEGRANTE
{
    private $idIntegrante;
    private $idSexo;
    private $idFamilia;
    private $idTipoIntegrante;
    private $nombreIntegrante;
    private $apellidoIntegrante;
    private $fechaNacIntegrante;
    private $telefonoIntegrante;
    private $emailIntegrante;
    private $edadIntegrante;

    //crear una Clase que se llame parentesco

    private $conexion;
    private $pdoConexion;
    private $stmQuery;
    private $bind;
    private $dataIntegrante;


    public function __construct()
    {
        $this->conexion = new BASE_DE_DATOS();
        $this->pdoConexion = null;
        $this->stmQuery = null;
        $this->bind = null;
        $this->dataFamilia = null;

        $this->idIntegrante = null;
        $this->idSexo = null;
        $this->idFamilia = null;
        $this->idTipoIntegrante = null;
        $this->nombreIntegrante = null;
        $this->apellidoIntegrante = null;
        $this->fechaNacIntegrante = null;
        $this->telefonoIntegrante = null;
        $this->emailIntegrante = null;
        $this->edadIntegrante = null;
    }

    public function nuevoIntegrante($idSe,$idFam,$idTipoInt,$nombreInt,$apellidoInt,$fechaNacInt,$telInt,$emailInt,$edadInt){

        $this->idSexo = $idSe;
        $this->idFamilia = $idFam;
        $this->idTipoIntegrante = $idTipoInt;
        $this->nombreIntegrante = $nombreInt;
        $this->apellidoIntegrante = $apellidoInt;
        $this->fechaNacIntegrante = $fechaNacInt;
        $this->telefonoIntegrante = $telInt;
        $this->emailIntegrante = $emailInt;
        $this->edadIntegrante = $edadInt;



        try{
            $this->stmQuery = "INSERT INTO Integrante(idSexo,idFamilia,idTipoIntegrante,nombreIntegrante,apellidoIntegrante,
                                                      fechaNacIntegrante,telefonoIntegrante,emailIntegrante,edadIntegante)
                               VALUES(:a,:b,:d,:e,:f,:g,:h,i:,:j)";


            $this->pdoConexion = $this->conexion->conectarBaseDeDatos();
            $this->bind = $this->pdoConexion->prepare($this->stmQuery);

            $this->bind->bindParam(":a",$this->idSexo);
            $this->bind->bindParam(":b",$this->idFamilia);
            $this->bind->bindParam(":d",$this->idTipoIntegrante);
            $this->bind->bindParam(":e",$this->nombreIntegrante);
            $this->bind->bindParam(":f",$this->apellidoIntegrante);
            $this->bind->bindParam(":g",$this->fechaNacIntegrante);
            $this->bind->bindParam(":h",$this->telefonoIntegrante);
            $this->bind->bindParam(":i",$this->emailIntegrante);
            $this->bind->bindParam(":j",$this->edadIntegrante);


            $this->dataIntegrante =  $this->bind->execute();

            if($this->dataIntegrante == true){
                return true;
            }else{
                return false;
            }

        }catch (PDOException $ex){

            return $ex->getMessage();

        }finally{

            $this->pdoConexion = null;
        }

    }//end nuevointegrante

    public function actualizarIntegrante($idInt,$idSe,$idFam,$idTipoInt,$nombreInt,$apellidoInt,$fechaNacInt,$telInt,$emailInt,$edadInt){

        $this->idIntegrante =$idInt;
        $this->idSexo = $idSe;
        $this->idFamilia = $idFam;
        $this->idTipoIntegrante = $idTipoInt;
        $this->nombreIntegrante = $nombreInt;
        $this->apellidoIntegrante = $apellidoInt;
        $this->fechaNacIntegrante = $fechaNacInt;
        $this->telefonoIntegrante = $telInt;
        $this->emailIntegrante = $emailInt;
        $this->edadIntegrante = $edadInt;

        try{
            $this->stmQuery = "UPDATE Familia SET idSexo = :a,
                                                  idFamilia = :b,
                                                  idTipoIntegrante = :e,
                                                  nombreIntegrante = :d,
                                                  apellidoIntegrante = :f,
                                                  fechaNacIntegrante = :g,
                                                  telefonoIntegrante = :h,
                                                  emailIntegrante = :i,
                                                  edadIntegrante = :j
                               WHERE idIntegrante = :idIntegrante";

            $this->pdoConexion = $this->conexion->conectarBaseDeDatos();
            $this->bind = $this->pdoConexion->prepare($this->stmQuery);

            $this->bind->bindParam(":idIntegrante",$this->idIntegrante);
            $this->bind->bindParam(":a",$this->idSexo);
            $this->bind->bindParam(":b",$this->idFamilia);
            $this->bind->bindParam(":e",$this->idTipoIntegrante);
            $this->bind->bindParam(":d",$this->nombreIntegrante);
            $this->bind->bindParam(":f",$this->apellidoIntegrante);
            $this->bind->bindParam(":g",$this->fechaNacIntegrante);
            $this->bind->bindParam(":h",$this->telefonoIntegrante);
            $this->bind->bindParam(":i",$this->direccionFamilia);
            $this->bind->bindParam(":j",$this->edadIntegrante);

            $this->dataIntegrante =  $this->bind->execute();

            if($this->dataIntegrante == true){
                return true;
            }else{
                return false;
            }

        }catch (PDOException $ex){

            return $ex->getMessage();

        }finally{

            $this->pdoConexion = null;
        }

    }//end actualizarIntegrante

    public function eliminarIntegrante($idInt){

        $this->idIntegrante = $idInt;

        try{
            $this->stmQuery = "DELETE FROM Integrante WHERE idIntegrante = :idIntegrante";


            $this->pdoConexion = $this->conexion->conectarBaseDeDatos();
            $this->bind = $this->pdoConexion->prepare($this->stmQuery);

            $this->bind->bindParam(":idIntegrante",$this->idIntegrante);

            $this->dataIntegrante =  $this->bind->execute();

            if($this->dataIntegrante == true){
                return true;
            }else{
                return false;
            }

        }catch (PDOException $ex){

            return $ex->getMessage();

        }finally{

            $this->pdoConexion = null;
        }

    }//end eliimarIntegrante

    public function consultarIntegrante($idInt){

        $this->idIntegrante = $idInt;

        try{
            $this->stmQuery = "SELECT * FROM Familia WHERE idIntegrante = :idIntegrante";

            $this->pdoConexion = $this->conexion->conectarBaseDeDatos();
            $this->bind = $this->pdoConexion->prepare($this->stmQuery);
            $this->bind->bindParam(":idIntegrante",$this->idIntegrante);
            $this->bind->execute();

            $this->dataIntegrante = $this->bind->fetchAll();

            return json_encode($this->dataIntegrante);

        }catch (PDOException $ex){

            return $ex->getMessage();

        }finally{

            $this->pdoConexion = null;
        }

    }//end Consultar todos los integrantes

    public function consultarTodosIntegrantes()
    {
        try{

            $this->stmQuery = "SELECT idIntegrante,nombreFamilia,concat(nombreIntegrante,apellidoIntegrante) as \"Nombre Integrante\",nombreTipoIntegrante,fechaNacIntegrante,telefonoIntegrante,emailIntegrante,edadIntegrante
                               FROM Integrante AS I, Familia AS F, TipoIntegrante AS TI
                               WHERE I.idFamilia = F.idFamilia
                               AND I.idTipoIntegrante = TI.idTipoIntegrante
                               ORDER BY I.idIntegrante ASC";

            $this->pdoConexion = $this->conexion->conectarBaseDeDatos();
            $this->bind = $this->pdoConexion->prepare($this->stmQuery);
            $this->bind->execute();

            $this->dataIntegrante = $this->bind->fetchAll();

            return $this->dataIntegrante;

        }catch (PDOException $ex){

            return $ex->getMessage();

        }finally{

            $this->pdoConexion = null;
        }
    }//end consultarTodosLosintegrantes

    public function buscarIntegrantes($nombre){

        try{
            $this->stmQuery = "";


            $this->pdoConexion = $this->conexion->conectarBaseDeDatos();
            $this->bind = $this->pdoConexion->prepare($this->stmQuery);
            $this->bind->bindParam(":nombre",$nombre);
            $this->bind->execute();

            $this->dataIntegrante = $this->bind->fetchAll();

            return $this->dataIntegrante;

        }catch (PDOException $ex){

            return $ex->getMessage();

        }finally{

            $this->pdoConexion = null;
        }
    }// end buscarIntegrante
}//end Class Integrante
