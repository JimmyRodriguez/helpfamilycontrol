<!DOCTYPE html>
<html lang="en" style="height: 100%">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="resources/plugins/PACE/themes/blue/pace-theme-flash.css">
  <script type="text/javascript" src="resources/plugins/PACE/pace.min.js"></script>
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" type="text/css" href="resources/plugins/bootstrap/dist/css/bootstrap.min.css">
  <!-- Fonts-->
  <link rel="stylesheet" type="text/css" href="resources/plugins/themify-icons/themify-icons.css">
  <!-- Malihu Scrollbar-->
  <link rel="stylesheet" type="text/css" href="resources/plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css">
  <!-- Animo.js-->
  <link rel="stylesheet" type="text/css" href="resources/plugins/animo.js/animate-animo.min.css">
  <!-- Flag Icons-->
  <link rel="stylesheet" type="text/css" href="resources/plugins/flag-icon-css/css/flag-icon.min.css">
  <!-- Bootstrap Progressbar-->
  <link rel="stylesheet" type="text/css" href="resources/plugins/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">
  <!-- Toastr-->
  <link rel="stylesheet" type="text/css" href="resources/plugins/toastr/toastr.min.css">
  <!-- SpinKit-->
  <link rel="stylesheet" type="text/css" href="resources/plugins/SpinKit/css/spinners/7-three-bounce.css">
  <!-- Jvector Map-->
  <link rel="stylesheet" type="text/css" href="resources/plugins/jvectormap/jquery-jvectormap-2.0.3.css">
  <!-- Morris Chart-->
  <link rel="stylesheet" type="text/css" href=resources/plugins/morris.js/morris.css">
  <!-- DataTables-->
  <link rel="stylesheet" type="text/css" href="resources/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="resources/plugins/datatables.net-buttons-bs/css/buttons.bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="resources/plugins/datatables.net-colreorder-bs/css/colReorder.bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="resources/plugins/datatables.net-responsive-bs/css/responsive.bootstrap.min.css">
  <!-- Weather Icons-->
  <link rel="stylesheet" type="text/css" href="resources/plugins/weather-icons/css/weather-icons-wind.min.css">
  <link rel="stylesheet" type="text/css" href="resources/plugins/weather-icons/css/weather-icons.min.css">
  <!-- FullCalendar-->
  <link rel="stylesheet" type="text/css" href="resources/plugins/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" type="text/css" href="resources/plugins/fullcalendar/dist/fullcalendar.print.css" media="print">
  <!-- jQuery MiniColors-->
  <link rel="stylesheet" type="text/css" href="resources/plugins/jquery-minicolors/jquery.minicolors.css">
  <!-- Bootstrap Date Range Picker-->
  <link rel="stylesheet" type="text/css" href="resources/plugins/bootstrap-daterangepicker/daterangepicker.css">
  <!-- Primary Style-->
  <link rel="stylesheet" type="text/css" href="resources/build/css/layout.css">


  <script type="text/javascript" src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script type="text/javascript" src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body style="background-image: url(resources/build/images/backgrounds/cambray.jpg)" class="body-bg-full">
<div class="text-center"><h2 class="info"></h2></div>
<div class="container page-container">
  <div class="page-content">
    <div>
      <table class="table table-responsive">
        <tbody class="body body-bg-full">
        <tr>
          <td>
            <img src="resources/build/images/logo/umg.png" alt="" width="130">
          </td>
          <td>
            <h3 class="text-white text-nowrap">UNIVERSIDAD MARIANO GALVEZ DE GUATEMALA</h3>
          </td>
        </tr>
        <tr>
          <h1 class="text-white" style="align-content: center">SISTEMA HELP FAMILY CONTROL</h1>
        </tr>
        </tbody>
      </table>

    </div>
    <!-- FORMULARIO DEL LOGIN -->
    <form method="get" action="dashboard.php" class="form-horizontal">
      <div class="form-group">
        <div class="col-xs-12">
          <input type="text" placeholder="Usuario" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <div class="col-xs-12">
          <input type="password" placeholder="Contraseña" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <div class="col-xs-12">
          <div class="checkbox-inline checkbox-custom pull-left">
            <input id="exampleCheckboxRemember" type="checkbox" value="remember">
            <label for="exampleCheckboxRemember" class="checkbox-muted text-muted">Recordar</label>
          </div>
          <!--div class="pull-right"><a href="forgot-password.html" class="inline-block form-control-static">Forgot a Passowrd?</a></div-->
        </div>
      </div>
      <button type="submit" class="btn-lg btn btn-primary btn-rounded btn-block">Ingresar</button>
    </form>

  </div>
</div>
<!-- jQuery-->
<script type="text/javascript" src="resources/plugins/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap JavaScript-->
<script type="text/javascript" src="resources/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Custom JS-->
<script type="text/javascript" src="resources/build/js/layout/extra-demo.js"></script>

<script type="text/javascript" src="../Controlador/ajax/enviarDataUsuario.js"></script>


<script type="text/javascript" src="js/cp_js.js"></script>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="resources/js/bootstrap.min.js"></script>
<script src="resources/js/ubf_js.1.3.js"></script>

</body>
</html>