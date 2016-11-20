
function nuevoFamilia() {

    //declar variables que se necesitan
    var metodo = "nuevoFamilia";

    var idFamilia = document.getElementById("idFamilia").value;
    var idAlbergue = document.getElementById("idAlbergue").value;
    var idEstado = document.getElementById("idEstado").value;
    var idPatrocinador = document.getElementById("idPatrocinador").value;
    var idDesastre = document.getElementById("idDesastre").value;
    var nombreFamilia = document.getElementById("nombreFamilia").value;
    var direccionFamilia = document.getElementById("direccionFamilia").value;

    console.log("data idFamilia : " + idFamilia );

    if(idFamilia.length == 0){

        window.alert("Ingrese un una breve descripcion ");

    }else if(fechaHistorial.length == 0){

        window.alert("Seleccione un fecha");

    }else{

        //llamar la funcion crearXmlHttpRequest que me devuelva el objeto xmlhttp
        xmlhttp = crearXmlHttpRequest();

        xmlhttp.onreadystatechange = function () {

            console.log(xmlhttp.responseText);

            if(xmlhttp.readyState == 4){

                if(xmlhttp.responseText == true){

                    //document.document.href = "../../../Vista/DASHBOARD.html";
                    window.alert("Historial SocioEconomico Guardado correctamente");

                }else{
                    window.alert("El Historial SocioEconomico no se Registro correctamente");
                }
            }
        }

        var dataForm = "seleccionarMetodo="+metodo+"&idFamilia="+idFamilia+"&descripcionHistorial="+descripcionHistorial+"&fechaHistorial="+
            fechaHistorial+"&casaHistorial="+casaHistorial+"&materialCasaHistorial="+materialCasaHistorial+"&trabajaHistorial="+
            trabajaHistorial+"&salarioHistorial="+salarioHistorial+"&empresaHistorial="+empresaHistorial+"&vehiculoHistorial="+vehiculoHistorial;

        xmlhttp.open("POST","../scripts/procesarDataHistorialSocioEconomico.php",true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(dataForm);
    }

}//end nuevoHistorial

function actualizarFamilia(){
    var idHistorial = $("#idHistorialAct").val();

}

function consultarFamilia(idFam) {

    $("#idHistorialAct").val(idHis); //este valor se le asigna al <input type="hidden" name="idEmpleadoDel
    //declar variables que se necesitan
    var metodo = "consultarHistorial";
    var idHistorial = idHis;

    if (idHistorial > 0){
        //llamar la funcion crearXmlHttpRequest que me devuelva el objeto xmlhttp
        xmlhttp = crearXmlHttpRequest();

        xmlhttp.onreadystatechange = function () {

            if (xmlhttp.readyState == 4) {

                //console.log(xmlhttp.responseText);
                /*foreach(xmlhttp.responseText in row){

                 }*/
            }
        }


        var dataForm = "seleccionarMetodo=" + metodo + "&idHistorial=" +idHistorial;

        xmlhttp.open("POST","../scripts/procesarDataHistorialSocioEconomico.php",true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xmlhttp.send(dataForm);

    }else{

    }
}

function eliminarFamilia() {
    //declar variables que se necesitan

    var idHistorial = $("#idHistorialDel").val();
    var metodo = "eliminarHistorial";


    if (idHistorial > 0){
        //llamar la funcion crearXmlHttpRequest que me devuelva el objeto xmlhttp
        xmlhttp = crearXmlHttpRequest();

        xmlhttp.onreadystatechange = function () {

            console.log(xmlhttp.responseText);

            if (xmlhttp.readyState == 4) {

                if (xmlhttp.responseText == true) {

                    //document.document.href = "../../../Vista/DASHBOARD.html";
                    //window.alert("El registro  se elimino correctamente");

                    $(".bd-example-modal-sm").dataset.collapse;

                } else {

                    //window.alert("El registro no fue eliminado");

                }

            }
        }


        var dataForm = "seleccionarMetodo=" + metodo + "&idHistorial=" +idHistorial;

        xmlhttp.open("POST","../scripts/procesarDataHistorialSocioEconomico.php",true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xmlhttp.send(dataForm);

    }else{

    }

}

function pasarIdFamilia(idFamilia) {

    $("#idHistorialDel").val(idHistorial);


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

