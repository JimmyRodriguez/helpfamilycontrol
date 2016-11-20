
function nuevaFamilia() {

    //declar variables que se necesitan
    var metodo = "nuevaFamilia";

    var idAlbergue = document.getElementById("idAlbergue").value;
    var idEstado = document.getElementById("idEstado").value;
    var idPatrocinador = document.getElementById("idPatrocinador").value;
    var idDesastre = document.getElementById("idDesastre").value;
    var nombreFamilia = document.getElementById("nombreFamilia").value;
    var direccionFamilia = document.getElementById("direccionFamilia").value;


    if(nombreFamilia.length == 0){

        window.alert("Ingrese los apellidos de la familia ");

    }else if(direccionFamilia.length == 0){

        window.alert("ingrese la direccion ");

    }else{

        //llamar la funcion crearXmlHttpRequest que me devuelva el objeto xmlhttp
        xmlhttp = crearXmlHttpRequest();

        xmlhttp.onreadystatechange = function () {

            console.log(xmlhttp.responseText);

            if(xmlhttp.readyState == 4){

                if(xmlhttp.responseText == true){

                    //document.document.href = "../../../Vista/DASHBOARD.html";
                    window.alert("El registro de la familia se ha guardado correctamente");

                }else{
                    window.alert("El registro de la familia no se guardo correctamente");
                }
            }
        }

        var dataForm = "seleccionarMetodo="+metodo+"&idAlbergue="+idAlbergue+"&idEstado="+idEstado+"&idPatrocinador="+
            idPatrocinador+"&idDesastre="+idDesastre+"&nombreFamilia="+nombreFamilia+"&direccionFamilia="+direccionFamilia;

        xmlhttp.open("POST","../scripts/procesarDataFamilia.php",true);
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

    var idFamilia = $("#idFamiliaDel").val();
    var metodo = "eliminarFamilia";

    console.log("valor de la variable " + idFamilia  );

    if (idFamilia > 0){
        //llamar la funcion crearXmlHttpRequest que me devuelva el objeto xmlhttp
        xmlhttp = crearXmlHttpRequest();

        xmlhttp.onreadystatechange = function () {

            console.log(xmlhttp.responseText);

            if (xmlhttp.readyState == 4) {

                if (xmlhttp.responseText == true) {

                    //document.document.href = "../../../Vista/DASHBOARD.html";
                    window.alert("El registro  se elimino correctamente");



                } else {

                    window.alert("El registro no fue eliminado : " + xmlhttp.responseText);

                }

            }
        }

        console.log("estoy en enviarDataFamilia.js : " + idFamilia);

        var dataForm = "seleccionarMetodo=" + metodo + "&idFamilia=" +idFamilia;

        xmlhttp.open("POST","../scripts/procesarDataFamilia.php",true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xmlhttp.send(dataForm);

    }else{

    }

}

function pasarIdFamilia(idFamilia) {

    $("#idFamiliaDel").val(idFamilia);


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

