/**
 * Created by jimmysidney on 12/1/16.
 */

function nuevoDeposito() {

    //declar variables que se necesitan
    var metodo = "nuevoDeposito";

    //var idDeposito = document.getElementById("idDeposito").value;
    var idPatrocinador = document.getElementById("idPatrocinador").value;
    var idCuenta = document.getElementById("idCuenta").value;
    var idEmpleado = document.getElementById("idEmpleado").value;
    var noDeposito = document.getElementById("noDeposito").value;
    var montoDeposito = document.getElementById("montoDeposito").value;
    var fechaDeposito = document.getElementById("fechaDeposito").value;
    var descripcionDeposito = document.getElementById("descripcionDeposito").value;


    if(noDeposito.length == 0){

        window.alert("Ingrese el numero de deposito");

    }else if(montoDeposito.length == 0){

        window.alert("Ingrese el monto del deposito");

    }else if(fechaDeposito.length == 0){

        window.alert("Ingrese la fecha del deposito");

    } else if(descripcionDeposito.length == 0){

        window.alert("Ingrese un comentario para recordar el porque del deposito");

    }
    else{

        //llamar la funcion crearXmlHttpRequest que me devuelva el objeto xmlhttp
        xmlhttp = crearXmlHttpRequest();

        xmlhttp.onreadystatechange = function () {

            console.log(xmlhttp.responseText);

            if(xmlhttp.readyState == 4){

                if(xmlhttp.responseText == true){

                    //document.document.href = "../../../Vista/DASHBOARD.html";
                    window.alert("El Deposito se ha registrado Correctamente");

                }else{
                    window.alert("El Deposito no se ha registrado Correctamente");
                }
            }
        }

        var dataForm = "seleccionarMetodo="+metodo+"&idPatrocinador="+idPatrocinador+"&idCuenta="+idCuenta+
                        "&idEmpleado="+idEmpleado+"&noDeposito="+noDeposito+"&montoDeposito="+montoDeposito+
                        "&fechaDeposito="+fechaDeposito+"&descripcionDeposito="+descripcionDeposito;

        xmlhttp.open("POST","../../Controlador/procesarData/procesarDataDeposito.php",true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(dataForm);
    }

}//end nuevoDeposito

function actualizarDeposito(){

    var idCompra = $("#idCompraAct").val();

}

function consultarDeposito(idCom) {

    $("#idComprasAct").val(idCom); //este valor se le asigna al <input type="hidden" name="idEmpleadoDel
    //declar variables que se necesitan
    var metodo = "consultarCompra";
    var idCompras = idCom

    if (idCompras > 0){
        //llamar la funcion crearXmlHttpRequest que me devuelva el objeto xmlhttp
        xmlhttp = crearXmlHttpRequest();

        xmlhttp.onreadystatechange = function () {

            if (xmlhttp.readyState == 4) {

                //console.log(xmlhttp.responseText);
                /*foreach(xmlhttp.responseText in row){

                 }*/
            }
        }


        var dataForm = "seleccionarMetodo=" + metodo + "&idCompras=" +idCompras;

        xmlhttp.open("POST", "../../Controlador/procesarData/procesarDataCompras.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xmlhttp.send(dataForm);

    }else{

    }
}

function eliminarDeposito() {
    //declar variables que se necesitan

    var idCompra = $("#idCompraDel").val();
    var metodo = "eliminarCompra";


    if (idCompra > 0){
        //llamar la funcion crearXmlHttpRequest que me devuelva el objeto xmlhttp
        xmlhttp = crearXmlHttpRequest();

        xmlhttp.onreadystatechange = function () {

            console.log(xmlhttp.responseText);

            if (xmlhttp.readyState == 4) {

                if (xmlhttp.responseText == true) {

                    //document.document.href = "../../../Vista/DASHBOARD.html";
                    window.alert("El registro  se elimino correctamente");

                    $(".bd-example-modal-sm").dataset.collapse;

                } else {

                    window.alert("El registro no fue eliminado");

                }

            }
        }


        var dataForm = "seleccionarMetodo=" + metodo + "&idEmpleado=" +idEmpleado;

        xmlhttp.open("POST", "../../Controlador/procesarData/procesarDataCompras.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xmlhttp.send(dataForm);

    }else{

    }

}

function pasarIdDeposito(idCompra) {

    $("#idCompraDel").val(idCompra);


}

function crearXmlHttpRequest() {

    var xmlhttp;

    if (window.XMLHttpRequest){ //chrome, mozila, safari

        xmlhttp = new XMLHttpRequest();

        return xmlhttp;

    }else{

        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); //internet explorer o edge

        return xmlhttp;
    }


}//end crearXmlHttpRequest

