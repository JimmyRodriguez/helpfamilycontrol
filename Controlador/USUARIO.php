<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/helpfamilycontrol/index/Modelo/BASE_DE_DATOS.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/helpfamilycontrol/index/Controlador/USUARIO.php');

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




/**
 * Created by PhpStorm.
 * User: jimmysidney
 * Date: 10/20/16
 * Time: 4:25 PM
 */
class USUARIO
{

    private $idUsuario; // el ambito o alcance es global para la clase
    private $idEmpleado;
    private $nombreUsuario;
    private $passwordUsuario;
    private $fechaInicioSesion;

    private $conexion;
    private $query;

    public function __construct()//toda la vida se inicializa automaticamente y no depende de ninguna llamada explicita
    {

        $this->idUsuario = null;
        $this->idEmpleado = null;
        $this->nombreUsuario = null;
        $this->passwordUsuario = null;
        $this->fechaInicioSesion = null;
        $this->conexion = new BASE_DE_DATOS();

    }

    public function validarUsuarioIngresar($nombre,$pass){

        $this->nombreUsuario = $nombre;
        $this->passwordUsuario = $pass;

        try{

            if($this->verificarExistenciaUsuario($this->nombreUsuario)){

                $this->query = "SELECT passwordUsuario FROM Usuario WHERE nombreUsuario = :nombre";
                $pdoConexion = $this->conexion->conectarBaseDeDatos();

                $bind = $pdoConexion->prepare($this->query);
                $bind->bindParam(":nombre",$this->nombreUsuario);

                $bind->execute();

                $data = $bind->fetchAll();//PDO::FETCH_OBJ);

                foreach ($data as $row) {

                    $passHash = $row['passwordUsuario'];

                    if($this->verificarPassword($this->passwordUsuario,$passHash)){//aqui se envia la contrase ingresada por el usuario y la contraseaña encryptada como hash

                        return true;

                    }else{
                        return false;
                    }
                }

            }else{

                return false;
            }
        }catch (PDOException $ex){
            return $ex->getMessage();

        }finally{
            $pdoConexion = null;

        }
    }

    public function registrarUsuario($nombre,$pass){

        $this->nombreUsuario = $nombre;
        $this->passwordUsuario = $pass;

        try{

            $fecha = null;


            $existenciaUsuario = $this->verificarExistenciaUsuario($this->nombreUsuario);

            if($existenciaUsuario == true){

                return false;

            }else{

                //invocamos el metodo encryptarPAssword
                $passEncriptada = $this->encryptarPassword($this->passwordUsuario);

                $this->query = "INSERT INTO Usuario (idEmpleado,nombreUsuario,
                                                 passwordUsuario,
                                                 fechaInicioSesion) 
                                          VALUES(:idEmp,:nombre,:pass,:fecha)";

                $pdoConexion = $this->conexion->conectarBaseDeDatos();

                $bind = $pdoConexion->prepare($this->query);

                $bind->bindParam(":idEmp",$this->idEmpleado);
                $bind->bindParam(":nombre",$this->nombreUsuario);
                $bind->bindParam(":pass",$passEncriptada);
                $bind->bindParam(":fecha",$fecha);

                $resultado = $bind->execute();

                if($resultado == true){

                    return true;

                }else{
                    return false;
                }

            }//end else



        }catch (PDOException $ex){

            return $ex->getMessage();

        }finally{
            $pdoConexion = null;
        }
    }

    public function actualizarUsuario(){


    }

    public function eliminarUsuario(){

    }

    private function verificarExistenciaUsuario($nombre){


        try{

            //estoy en le metodo verificar existencia usuario

            $this->query = "SELECT nombreUsuario FROM Usuario WHERE nombreUsuario = :nombre";  //query
            $pdoConexion = $this->conexion->conectarBaseDeDatos();//conecta con la base de datos

            $bind = $pdoConexion->prepare($this->query); //

            $bind->bindParam(":nombre",$nombre);
            $bind->execute();

            $data = $bind->fetchAll();//PDO::FETCH_OBJ);

            foreach ($data as $row){

                if($row == $nombre){

                    return true;

                }else{

                    return true;
                }
            }//end foreach

        }catch(PDOException $ex){
            return $ex->getMessage();
        }finally{
            $pdoConexion = null;
        }

    }//end verificarExistenciaUsuario

    private function encryptarPassword($pass){

        $hash = password_hash($pass,CRYPT_BLOWFISH);

        return $hash;

    }//end encryptarPassword

    private function verificarPassword($pass,$hash){



        if (password_verify($pass, $hash)) {

            return true;

        } else {
            echo false."</br>";
            return false;
        }
    }//end verificarPassword


}//end class