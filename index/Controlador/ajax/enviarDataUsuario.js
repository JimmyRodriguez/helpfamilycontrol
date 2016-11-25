

function validarUsuario() {

    //declar variables que se necesitan
    var metodo = "validar";

    var usuario = document.getElementById("usuario").value;
    var password = document.getElementById("password").value;


    if(usuario.length == 0){

        window.alert("Ingrese Usuario");


    }else if(password.length == 0){

        window.alert("Ingrese Password");


    }else{


        //llamar la funcion crearXmlHttpRequest que me devuelva el objeto xmlhttp
        xmlhttp = crearXmlHttpRequest();

        xmlhttp.onreadystatechange = function () {

            if(xmlhttp.readyState == 4){

                if(xmlhttp.responseText == true){

                    window.alert("Credenciales son correctas");

                    document.documentURI = "Vista/DASHBOARD.html";

                }else{

                    window.alert("Las credenciales no son correctas" + xmlhttp.responseText);

                }
            }
        }//

        var dataForm = "seleccionarMetodo="+metodo+"&nombreUsuario="+usuario+"&passwordUsuario="+password;

        xmlhttp.open("POST","Controlador/USUARIO.php");//"Vista/scripts/procesarDataUsuario.php",true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(dataForm);

    }

}//end validarUsuario

function registrarUsuario() {

    //declar variables que se necesitan
    var metodo = "registrar";

    var usuario = document.getElementById("usuario").value;
    var password = document.getElementById("password").value;
    var cPassword = document.getElementById("cPassword").value;

    if(usuario.length == 0){

        window.alert("Ingrese un usuario");

    }else if(password.length == 0){

        window.alert("Ingrese contraseña");

    }else if(cPassword.length == 0){

        window.alert("confirme contraseña");

    }else if(password != cPassword){

       window.alert("Las contraseñas no son iguales");

    }else{

        //llamar la funcion crearXmlHttpRequest que me devuelva el objeto xmlhttp
        xmlhttp = crearXmlHttpRequest();

        xmlhttp.onreadystatechange = function () {

            if(xmlhttp.readyState == 4){

                if(xmlhttp.responseText == false){

                    //document.document.href = "../../../Vista/DASHBOARD.html";
                    window.alert("Usuario Resgistrado Correctamente");

                }else{

                    window.alert("El Usuario que quiere Registrar ya existe");


                }
            }

        }

        var dataForm = "seleccionarMetodo="+metodo+"&nombreUsuario="+usuario+"&passwordUsuario="+password+"&cPasswordUsuario="+cPassword;

        xmlhttp.open("POST","../Vista/scripts/procesarDataUsuario.php",true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(dataForm);
    }

}//end registrarUsuario


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



