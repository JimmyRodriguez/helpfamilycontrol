<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/helpfamilycontrol/index/Modelo/BASE_DE_DATOS.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/helpfamilycontrol/index/Controlador/HISTORIAL_SOCIO_ECONOMICO.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/helpfamilycontrol/index/Controlador/FAMILIA.php');



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SOCIOECONOMICO</title>
    <!-- PACE-->
    <link rel="stylesheet" type="text/css" href="../../plugins/PACE/themes/blue/pace-theme-flash.css">
    <script type="text/javascript" src="../../plugins/PACE/pace.min.js"></script>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="../../plugins/bootstrap/dist/css/bootstrap.min.css">
    <!-- Fonts-->
    <link rel="stylesheet" type="text/css" href="../../plugins/themify-icons/themify-icons.css">
    <!-- Malihu Scrollbar-->
    <link rel="stylesheet" type="text/css" href="../../plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css">
    <!-- Animo.js-->
    <link rel="stylesheet" type="text/css" href="../../plugins/animo.js/animate-animo.min.css">
    <!-- Flag Icons-->
    <link rel="stylesheet" type="text/css" href="../../plugins/flag-icon-css/css/flag-icon.min.css">
    <!-- Bootstrap Progressbar-->
    <link rel="stylesheet" type="text/css" href="../../plugins/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">
    <!-- Toastr-->
    <link rel="stylesheet" type="text/css" href="../../plugins/toastr/toastr.min.css">
    <!-- SpinKit-->
    <link rel="stylesheet" type="text/css" href="../../plugins/SpinKit/css/spinners/7-three-bounce.css">
    <!-- Jvector Map-->
    <link rel="stylesheet" type="text/css" href="../../plugins/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- Morris Chart-->
    <link rel="stylesheet" type="text/css" href="../../plugins/morris.js/morris.css">
    <!-- DataTables-->
    <link rel="stylesheet" type="text/css" href="../../plugins/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../plugins/datatables.net-buttons-bs/css/buttons.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../plugins/datatables.net-colreorder-bs/css/colReorder.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../plugins/datatables.net-responsive-bs/css/responsive.bootstrap.min.css">
    <!-- Weather Icons-->
    <link rel="stylesheet" type="text/css" href="../../plugins/weather-icons/css/weather-icons-wind.min.css">
    <link rel="stylesheet" type="text/css" href="../../plugins/weather-icons/css/weather-icons.min.css">
    <!-- FullCalendar-->
    <link rel="stylesheet" type="text/css" href="../../plugins/fullcalendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="../../plugins/fullcalendar/dist/fullcalendar.print.css" media="print">
    <!-- jQuery MiniColors-->
    <link rel="stylesheet" type="text/css" href="../../plugins/jquery-minicolors/jquery.minicolors.css">
    <!-- Bootstrap Date Range Picker-->
    <link rel="stylesheet" type="text/css" href="../../plugins/bootstrap-daterangepicker/daterangepicker.css">
    <!-- Primary Style-->
    <link rel="stylesheet" type="text/css" href="../../build/css/layout.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script type="text/javascript" src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- inicia Header-->
<header>
    <div class="search-bar closed">
        <form>
            <div class="input-group input-group-lg">
                <input type="text" placeholder="Search for..." class="form-control"><span class="input-group-btn">
              <button type="button" class="btn btn-default search-bar-toggle"><i class="ti-close"></i></button></span>
            </div>
        </form>
    </div>
    <a href="../dashboard.php" class="brand pull-left">
        <img src="../../build/images/logo/umg.png" alt="" width="50" class="logo">
        <img src="../../build/images/logo/umg.png" alt="" width="28" class="logo-sm">
    </a>
    <a href="javascript:;" role="button" class="hamburger-menu pull-left"><span></span></a>
    <ul class="notification-bar list-inline pull-right">
        <!--li class="visible-xs"><a href="javascript:;" role="button" class="header-icon search-bar-toggle"><i class="ti-search"></i></a></li>
        <li class="dropdown"><a id="dropdownMenu1" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle bubble header-icon"><i class="ti-world"></i><span class="badge bg-danger">6</span></a>
        </li-->
        <li class="dropdown hidden-xs"><a id="dropdownMenu2" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle header-icon lh-1 pt-15 pb-15">
                <div class="media mt-0">
                    <div class="media-left avatar"><img src="../../build/images/users/21.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                    <div class="media-right media-middle pl-0">
                        <p class="fs-12 text-base mb-0">Hola, Jimmy</p>
                    </div>
                </div></a>
            <ul aria-labelledby="dropdownMenu2" class="dropdown-menu fs-12 animated fadeInDown">
                <li><a href="#"><i class="ti-user mr-5"></i> Mi Perfil</a></li>
                <li><a href="#"><i class="ti-settings mr-5"></i> Configuraciones</a></li>
                <li><a href="../login.php"><i class="ti-power-off mr-5"></i> Salir</a></li>
            </ul>
        </li>
        <!--li>
            <a href="javascript:;" role="button" class="right-sidebar-toggle bubble header-icon">
                <i class="ti-layout-sidebar-right"></i>
                <span class="dot bg-danger"></span>
            </a>
        </li-->
    </ul>
</header>
<!-- Header end-->

<div class="main-container">
    <!-- Main Sidebar start-->
    <aside class="main-sidebar">
        <div class="user">
            <div id="esp-user-profile" data-percent="65" style="height: 130px; width: 130px; line-height: 100px; padding: 15px;" class="easy-pie-chart">
                <img src="../../build/images/users/21.jpg" alt="" class="avatar img-circle"><span class="status bg-success"></span></div>
            <h4 class="fs-16 text-white mt-15 mb-5 fw-300">Jimmy Rodriguez</h4>
            <p class="mb-0 text-muted">Analisis y Diseño de sistemas</p>
        </div>
        <!-- ITEMS DEL MENU-->
        <ul class="list-unstyled navigation mb-0">
            <li class="sidebar-category text-center"><h4>MENU PRINCIPAL</h4></li>
            <li class="panel">
                <a role="button" href=../dashboard.php" class="bubble active collapse">
                    <i class="ti-dashboard"></i>
                    <span class="sidebar-title">Dashboard</span>
                </a>
            </li>
            <li class="panel">
                <a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse2" aria-expanded="false"
                   aria-controls="collapse1" class="bubble active collapsed">
                    <i class="ti-home"></i>
                    <span class="sidebar-title">Administracion</span>
                </a>
                <ul id="collapse2" class="list-unstyled collapse">
                    <li><a href="../admon/iDeposito.php" class="active">Depositos</a></li>
                    <li><a href="../admon/iCompras.php" class="active">Compras</a></li>
                    <li><a href="../admon/iCuenta.php" class="active">Cuenta</a></li>
                    <li><a href="../admon/iEmpleados.php" class="active">Empleados</a></li>
                    <li><a href="../admon/iPagos.php" class="active">Pagos</a></li>
                    <li><a href="../admon/iPatrocinador.php" class="active">Patrocinador</a></li>
                    <li><a href="../admon/iProveedores.php" class="active">Proveedores</a></li>
                    <li><a href="../admon/itipoCuenta.php" class="active">Tipo Cuenta</a></li>
                    <li><a href="../admon/itipoPatrocinador">Tipo Patrocinador</a></li>
                </ul>
            </li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse3"
                                 aria-expanded="false" aria-controls="collapse3" class="collapsed"><i class="ti-folder">
                    </i><span class="sidebar-title">Inventario</span></a>
                <ul id="collapse3" class="list-unstyled collapse">
                    <li><a href="../inventario/iBodega.php">Bodega</a></li>
                    <li><a href="../inventario/iAreas.php">Areas</a></li>
                    <li><a href="../inventario/iStock.php">Stock</a></li>
                    <li><a href="../inventario/iInsumos.php">Insumos</a></li>
                    <li><a href="../inventario/iEntradasYSalidas.php">Entradas y Salidas</a></li>
                    <li><a href="../inventario/itipoEntradaSalida.php">Tipo Entrada y Salida</a></li>
                    <li><a href="../inventario/itipoInsumo.php">Tipo Insumo</a></li>

                </ul>
            </li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse4"
                                 aria-expanded="false" aria-controls="collapse3" class="collapsed"><i class="ti-face-sad">
                    </i><span class="sidebar-title">Desastres Naturales</span></a>
                <ul id="collapse4" class="list-unstyled collapse">
                    <li><a href="../desastres/iDesastres.php">Desastres</a></li>
                    <li><a href="../desastres/itipoDesastre.php">Desastres</a></li>
                </ul>
            </li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse5"
                                 aria-expanded="false" aria-controls="collapse4" class="collapsed"><i class="ti-user">
                    </i><span class="sidebar-title">Damnificados</span></a>
                <ul id="collapse5" class="list-unstyled collapse">
                    <li><a href="iAlbergues.php">Albergues</a></li>
                    <li><a href="iFamilia.php">Familias</a></li>
                    <li><a href="iIntegrante.php">Integrantes</a></li>
                    <li><a href="iHistorialSocioEconomico.php">Historial SocioEconomico</a></li>
                    <li><a href="itipoAlbergue.php">Tipo Albergues</a></li>
                </ul>
            </li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse6"
                                 aria-expanded="false" aria-controls="collapse4" class="collapsed"><i class="ti-bar-chart-alt">
                    </i><span class="sidebar-title">Reportes</span></a>
                <ul id="collapse6" class="list-unstyled collapse">
                    <li><a href="#"</a></li>

                </ul>
            </li>
        </ul>
    </aside>
    <!-- Main Sidebar end-->
    <div class="page-container">
        <div class="page-header container-fluid">
            <div class="row">
                <div class="col-sm-12 ">
                    <h4 class="mt-0 mb-5" align="center">HISTORIAL SOCIOECONOMICO</h4>
                </div>
            </div>
        </div>
        <div-- class="page-content container-fluid">

            <!---------->
            <div class="row">

            </div>
            <!----------->
            <did class="row">
                <div class="col-lg-12">
                    <div class="widget">
                        <div class="widget-heading">
                            <h3 class="widget-title">Formulario para Ingresar Historial Socieconomico</h3>
                        </div>
                        <div class="widget-body">
                            <!--FORMULARO PARA GUARDAR, ELIMINAR Y ACTUALIZAR DATOS DEL EMPLEADO-->
                            <form id="formHistorialSocioEconomico">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="idFamilia2">Id Familia</label>
                                            <input id="idFamilia2" value="" disabled type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="idFamilia">Nombre Familia</label>
                                            <select id="idFamilia" class="form-control">
                                                <option value="">Seleccione la Familia</option>
                                                <?php
                                                $familia = new FAMILIA();
                                                $dataFam = $familia->consultarTodosFamilia();

                                                $idFamilia ="";
                                                foreach($dataFam as $row){
                                                    $idFamilia = $row["idFamilia"];
                                                    echo "<option value=".$row["idFamilia"].">".$row["nombreFamilia"]."</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="descripcionHistorial">Descripcion</label>
                                            <input id="descripcionHistorial" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="fechaHistorial">Fecha Historial</label>
                                            <input id="fechaHistorial" type="date" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="casaHistorial">¿Tiene Casa?</label>
                                            <select id="casaHistorial" class="form-control">
                                                <option value="">Selecione respuesta</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="materialCasaHistorial">¿De que material es?</label>
                                            <select id="materialCasaHistorial" class="form-control">
                                                <option value="">Seleccionar Material</option>
                                                <option value="Madera">Madera</option>
                                                <option value="Lamina">Lamina</option>
                                                <option value="Concreto">Concreto</option>
                                                <option value="Ninguno">Ninguno</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="trabajaHistorial">¿Trabaja?</label>
                                            <select id="trabajaHistorial" class="form-control">
                                                <option value="">Seleccione Respuesta</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="salarioHistorial">¿Cual es su salario?</label>
                                            <select id="salarioHistorial" class="form-control">
                                                <option value="">Seleccione salario</option>
                                                <option value="500-1000">500-1000</option>
                                                <option value="1001-1500">1001-1500</option>
                                                <option value="1501-2000">1501-2000</option>
                                                <option value="2001-3000">2001-3000</option>
                                                <option value="3001-4000">3001-4000</option>
                                                <option value="4001-5000">4001-5000</option>
                                                <option value="5001- Hacia arriba">5001- Hacia Arriba</option>
                                                <option value="5001- Hacia arriba">Ninguno</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="empresaHistorial">¿En que Empresa Trabaja?</label>
                                            <input id="empresaHistorial" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="vehiculoHistorial">¿Tiene Vehiculo?</label>
                                            <select id="vehiculoHistorial" class="form-control">
                                                <option value="">Seleccione respuesta</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-outline btn-success" onclick="nuevoHistorial()" >NUEVO HISTORIAL</button>
                                <a href="iFamilia.php" class="btn btn-outline btn-success" onclick="nuevoEmpleado()">AGREGAR FAMILIA</a>
                            </form>
                            <!-- finaliza el form -->
                        </div>
                    </div>
                </div>
                <div class="row" align="center"><h3>INFORMACION DEL HISTORIAL SOCIOECONOMICO</h3></div>
                <div class="row">

                    <table id="tableEmpleado" class="table table-striped col-lg-6" align="center">

                        <tr>
                            <th>id</th>
                            <th>Familia</th>
                            <th>Descripcion</th>
                            <th>Fecha</th>
                            <th>Casa</th>
                            <th>Trabaja</th>
                            <th>Salario</th>
                            <th>Nombre Empresa</th>
                            <th>Vehiculo</th>
                            <th></th>
                            <th></th>
                        </tr>

                        <?php
                        $historial = new HISTORIAL_SOCIO_ECONOMICO();
                        $dataHis = $historial->consultarTodosHistorialSocioEconomico();
                        $idHistorial ="";

                        foreach($dataHis as $row) {

                            $idHistorial = $row['idHistorial'];
                            echo "<tr>";
                            echo "<td aling='center' value=".$row["idHistorial"].">".$row["idHistorial"]."</td>";
                            echo "<td>".$row["fechaHistorial"]."</td>";
                            echo "<td>".$row["nombreFamilia"]."</td>";
                            echo "<td>".$row["descripcionHistorial"]."</td>";
                            echo "<td>".$row["casaHistorial"]."</td>";
                            echo "<td>".$row["materialCasaHistorial"]."</td>";
                            echo "<td>".$row["trabajaHistorial"]."</td>";
                            echo "<td>".$row["salarioHistorial"]."</td>";
                            echo "<td>".$row["empresaHistorial"]."</td>";
                            echo "<td>".$row["vehiculoHistorial"]."</td>";
                            echo "<td>";
                            echo "<button type='button' class='btn btn-outline btn-success ti-pencil-alt' data-toggle='modal' data-target='#myModal' onclick='javascript:consultarHistorial($idHistorial);' ></button>"; //jr='edita' id='$idEmpleado'
                            echo "</td>";
                            echo "<td>";
                            echo "<button type='button' class='btn btn-outline btn-danger ti-trash' data-toggle='modal' data-target='.bd-example-modal-sm' onclick='javascript:pasarIdHistorial($idHistorial);'></button>";  // id='$idEmpleado'
                            echo "</td>";
                            echo "</tr>";
                        }//end foreach
                        ?>
                    </table>

                </div>
                <div class="row">
                    <!--Modal for update-->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">Actualizar Informacion del Historial SocioEconomico</h4>
                                </div>
                                <div class="modal-body">
                                    <form id="formEmpleado">
                                        <input type="hidden" name="idHistorialAct" id="idHistorialAct" value=""><!-- aqui se define el valor del idEmpleado -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="nombreEmpleado">Nombres</label>
                                                    <input id="nombreEmpleado" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">






                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="dpiEmpleado">No. DPI</label>
                                                    <input id="dpiEmpleado" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="telefonoEmpleado">Telefono</label>
                                                    <input id="telefonoEmpleado" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">





                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="fechaNacEmpleado">Fecha Nacimiento</label>
                                                    <input id="fechaNacEmpleado" type="date" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="emailEmpleado">Email</label>
                                                    <input id="emailEmpleado"  type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="direccionEmpleado">Direccion</label>
                                                    <input id="direccionEmpleado" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" onclick='javascript:actualizarHistorial()'>Guardar</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </did>
            <div class="row">
                <!-- Small modal for Delete-->
                <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-body">
                                ¿Quiere eliminar este registro?
                                <input type="hidden" name="idHistorialDel" id="idHistorialDel" value=""><!-- aqui se establece el valor del idEmpleado -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="btnEliminar" class="btn btn-primary" onclick="javascript:eliminarHistorial();" data-dismiss="modal"> SI </button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

    </div>
    <div class="footer" align="center"><a>2016 &copy; UNIVERSIDAD MARIANO GALVEZ</a> </div>
</div>
<!-- jQuery-->
<script type="text/javascript" src="../../plugins/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap JavaScript-->
<script type="text/javascript" src="../../plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Malihu Scrollbar-->
<script type="text/javascript" src="../../plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- Animo.js-->
<script type="text/javascript" src="../../plugins/animo.js/animo.min.js"></script>
<!-- Bootstrap Progressbar-->
<script type="text/javascript" src="../../plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- jQuery Easy Pie Chart-->
<script type="text/javascript" src="../../plugins/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
<!-- Toastr-->
<script type="text/javascript" src="../../plugins/toastr/toastr.min.js"></script>
<!-- MomentJS-->
<script type="text/javascript" src="../../plugins/moment/min/moment.min.js"></script>
<!-- jQuery BlockUI-->
<script type="text/javascript" src="../../plugins/blockUI/jquery.blockUI.js"></script>
<!-- jQuery Counter Up-->
<script type="text/javascript" src="../../plugins/jquery-waypoints/waypoints.min.js"></script>
<script type="text/javascript" src="../../plugins/Counter-Up/jquery.counterup.min.js"></script>
<!-- Jvector Map-->
<script type="text/javascript" src="../../plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script type="text/javascript" src="../../plugins/jvectormap/maps/jquery-jvectormap-world-mill.js"></script>
<!-- Flot Charts-->
<script type="text/javascript" src="../../plugins/flot/jquery.flot.js"></script>
<script type="text/javascript" src="../../plugins/flot/jquery.flot.resize.js"></script>
<script type="text/javascript" src="../../plugins/flot.curvedlines/curvedLines.js"></script>
<script type="text/javascript" src="../../plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<!-- Morris Chart-->
<script type="text/javascript" src="../../plugins/raphael/raphael-min.js"></script>
<script type="text/javascript" src="../../plugins/morris.js/morris.min.js"></script>
<!-- DataTables-->
<script type="text/javascript" src="../../plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../../plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="../../plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="../../plugins/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script type="text/javascript" src="../../plugins/jszip/dist/jszip.min.js"></script>
<script type="text/javascript" src="../../plugins/pdfmake/build/pdfmake.min.js"></script>
<script type="text/javascript" src="../../plugins/pdfmake/build/vfs_fonts.js"></script>
<script type="text/javascript" src="../../plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
<script type="text/javascript" src="../../plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="../../plugins/datatables.net-colreorder/js/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="../../plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="../../plugins/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<!-- jQuery UI-->
<script type="text/javascript" src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- FullCalendar-->
<script type="text/javascript" src="../../plugins/fullcalendar/dist/fullcalendar.min.js"></script>
<!-- jQuery MiniColors-->
<script type="text/javascript" src="../../plugins/jquery-minicolors/jquery.minicolors.min.js"></script>
<!-- Bootstrap Date Range Picker-->
<script type="text/javascript" src="../../plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- Custom JS-->
<script type="text/javascript" src="../../build/js/layout/app.js"></script>
<script type="text/javascript" src="../../build/js/layout/demo.js"></script>
<script type="text/javascript" src="../../build/js/page-content/dashboard/index.js"></script>

<script type="text/javascript" src="../../Controlador/ajax/enviarDataHistorial.js"></script>
<script>

    //para cargar la tabla
    $(document).ready(function() {
        $('#tableEmpleado').DataTable();
    } );

</script>


</body>
</html>
