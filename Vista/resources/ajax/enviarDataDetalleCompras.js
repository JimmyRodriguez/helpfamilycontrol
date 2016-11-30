
function nuevaCompra() {

    //declar variables que se necesitan
    var metodo = "nuevaCompra";

    var idEmpleado = document.getElementById("idEmpleado").value;
    var descripcionCompra = document.getElementById("descripcionCompra").value;
    var fechaCompra = document.getElementById("fechaCompra");

    if(descripcionCompra.length == 0){

        window.alert("Ingrese una compra");

    }else if(fechaCompra.length == 0){

        window.alert("Ingrese una fecha de compra");

    } else{

        //llamar la funcion crearXmlHttpRequest que me devuelva el objeto xmlhttp
        xmlhttp = crearXmlHttpRequest();

        xmlhttp.onreadystatechange = function () {

            console.log(xmlhttp.responseText);

            if(xmlhttp.readyState == 4){

                if(xmlhttp.responseText == true){

                    //document.document.href = "../../../Vista/DASHBOARD.html";
                    window.alert("Detalle registrado");

                }else{
                    window.alert("Destalle no registrado");
                }
            }
        }

        var dataForm = "seleccionarMetodo="+metodo+"&idEmpleado="+idEmpleado+"&descripcionCompra="+descripcionCompra+"&fechaCompra="+fechaCompra;

        xmlhttp.open("POST","../../Controlador/procesarData/procesarDataCompras.php",true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(dataForm);
    }

}//end nuevoCompra

function actualizarCompra(){

    var idCompra = $("#idCompraAct").val();

}

function consultarCompra(idCom) {

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

function eliminarCompra() {
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

function pasarIdCompra(idCompra) {

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

