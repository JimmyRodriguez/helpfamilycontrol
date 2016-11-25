<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrar Usuarios</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../plugins/bootstrap/dist/css/bootstrap-theme.min.css">

</head>
<body>
<br/>
<div align="center">
    <br/>
    <div align="center"><h2>Registro de usuarios</h2></div>
    <form class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-6">
                <input type="text" placeholder="Usuario" class="form-control" id="usuario" name="nombreUsuario">
            </div>
            <span></span>
        </div>
        </br>
        <div class="form-group">
            <div class="col-sm-6">
                <input id="password" placeholder="Password" type="password" class="form-control" name="passwordUsuario">
            </div>
            <span></span>
        </div>
        </br>
        <div class="form-group">
            <div class="col-sm-6">
                <input id="cPassword" placeholder="Confirmar Password" type="password" class="form-control" name="cPasswordUsuario">
            </div>
            <span></span>
        </div>
        </br>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-8">
                <button type="submit" class="btn btn-primary btn-lg" onclick="registrarUsuario()">
                    Registrar Usuario
                </button>
            </div>
        </div>
        <div id="resultado"></div>
    </form>
</div>

</body>

<!--se agregan todos los scripts-->
<script type="text/javascript" src="../plugins/bootstrap/dist/js/bootstrap.js"></script>
<script type="text/javascript" src="../Controlador/ajax/enviarDataUsuario.js"></script>
</html>


