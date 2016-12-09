<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/helpfamilycontrol/index/Modelo/BASE_DE_DATOS.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/helpfamilycontrol/index/Controlador/ESTADO.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/helpfamilycontrol/index/Controlador/INSUMO.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/helpfamilycontrol/index/Controlador/BODEGA.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/helpfamilycontrol/index/Controlador/AREA.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/helpfamilycontrol/index/Controlador/STOCK.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/helpfamilycontrol/index/Controlador/tipoInsumo.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INSUMOS</title>
    <!-- PACE-->
    <link rel="stylesheet" type="text/css" href="../resources/plugins/PACE/themes/blue/pace-theme-flash.css">
    <script type="text/javascript" src="../resources/plugins/PACE/pace.min.js"></script>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="../resources/plugins/bootstrap/dist/css/bootstrap.min.css">
    <!-- Fonts-->
    <link rel="stylesheet" type="text/css" href="../resources/plugins/themify-icons/themify-icons.css">
    <!-- Malihu Scrollbar-->
    <link rel="stylesheet" type="text/css" href="../resources/plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css">
    <!-- Animo.js-->
    <link rel="stylesheet" type="text/css" href="../resources/plugins/animo.js/animate-animo.min.css">
    <!-- Flag Icons-->
    <link rel="stylesheet" type="text/css" href="../resources/plugins/flag-icon-css/css/flag-icon.min.css">
    <!-- Bootstrap Progressbar-->
    <link rel="stylesheet" type="text/css" href="../resources/plugins/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">
    <!-- Toastr-->
    <link rel="stylesheet" type="text/css" href="../resources/plugins/toastr/toastr.min.css">
    <!-- SpinKit-->
    <link rel="stylesheet" type="text/css" href="../resources/plugins/SpinKit/css/spinners/7-three-bounce.css">
    <!-- Jvector Map-->
    <link rel="stylesheet" type="text/css" href="../resources/plugins/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- Morris Chart-->
    <link rel="stylesheet" type="text/css" href="../resources/plugins/morris.js/morris.css">
    <!-- DataTables-->
    <link rel="stylesheet" type="text/css" href="../resources/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../resources/plugins/datatables.net-buttons-bs/css/buttons.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../resources/plugins/datatables.net-colreorder-bs/css/colReorder.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../resources/plugins/datatables.net-responsive-bs/css/responsive.bootstrap.min.css">
    <!-- Weather Icons-->
    <link rel="stylesheet" type="text/css" href="../resources/plugins/weather-icons/css/weather-icons-wind.min.css">
    <link rel="stylesheet" type="text/css" href="../resources/plugins/weather-icons/css/weather-icons.min.css">
    <!-- FullCalendar-->
    <link rel="stylesheet" type="text/css" href="../resources/plugins/fullcalendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="../resources/plugins/fullcalendar/dist/fullcalendar.print.css" media="print">
    <!-- jQuery MiniColors-->
    <link rel="stylesheet" type="text/css" href="../resources/plugins/jquery-minicolors/jquery.minicolors.css">
    <!-- Bootstrap Date Range Picker-->
    <link rel="stylesheet" type="text/css" href="../resources/plugins/bootstrap-daterangepicker/daterangepicker.css">
    <!-- Primary Style-->
    <link rel="stylesheet" type="text/css" href="../resources/build/css/layout.css">
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
                <input type="text" placeholder="..........." class="form-control"><span class="input-group-btn">
              <button type="button" class="btn btn-default search-bar-toggle"><i class="ti-close"></i></button>
                </span>
            </div>
        </form>
    </div>
    <a href="../dashboard.php" class="brand pull-left">
        <img src="../resources/build/images/logo/umg.png" alt="" width="50" class="logo">
        <img src="../resources/build/images/logo/umg.png" alt="" width="28" class="logo-sm">
    </a>
    <a href="javascript:;" role="button" class="hamburger-menu pull-left"><span></span></a>
    <ul class="notification-bar list-inline pull-right">
        <!--li class="visible-xs"><a href="javascript:;" role="button" class="header-icon search-bar-toggle"><i class="ti-search"></i></a></li>
        <li class="dropdown"><a id="dropdownMenu1" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle bubble header-icon"><i class="ti-world"></i><span class="badge bg-danger">6</span></a>
        </li-->
        <li class="dropdown hidden-xs"><a id="dropdownMenu2" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle header-icon lh-1 pt-15 pb-15">
                <div class="media mt-0">
                    <div class="media-left avatar"><img src="../resources/build/images/users/21.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
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
                <img src="../resources/build/images/users/21.jpg" alt="" class="avatar img-circle"><span class="status bg-success"></span></div>
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
                    <li><a href="../admon/itipoPatrocinador.php">Tipo Patrocinador</a></li>
                </ul>
            </li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse3"
                                 aria-expanded="false" aria-controls="collapse3" class="collapsed"><i class="ti-folder">
                    </i><span class="sidebar-title">Inventario</span></a>
                <ul id="collapse3" class="list-unstyled collapse">
                    <li><a href="iBodega.php">Bodega</a></li>
                    <li><a href="iAreas.php">Areas</a></li>
                    <li><a href="iStock.php">Stock</a></li>
                    <li><a href="iInsumos.php">Insumos</a></li>
                    <li><a href="iEntradasYSalidas.php">Entradas y Salidas</a></li>
                    <li><a href="itipoEntradaSalida.php">Tipo Entrada y Salida</a></li>
                    <li><a href="itipoInsumo.php">Tipo Insumo</a></li>

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
                    <li><a href="../damnificados/iAlbergues.php">Albergues</a></li>
                    <li><a href="../damnificados/iFamilia.php">Familias</a></li>
                    <li><a href="../damnificados/iIntegrante.php">Integrantes</a></li>
                    <li><a href="../damnificados/iHistorialSocioEconomico.php">Historial SocioEconomico</a></li>
                    <li><a href="../damnificados/itipoAlbergue.php">Tipo Albergues</a></li>
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
                    <h4 class="mt-0 mb-5" align="center">INSUMOS</h4>
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
                            <h3 class="widget-title">Formulario de insumos</h3>
                        </div>
                        <div class="widget-body">
                            <!--FORMULARO PARA GUARDAR, ELIMINAR Y ACTUALIZAR DATOS DEL EMPLEADO-->
                            <form id="formInsumo">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="idTipoInsumo">TIPO INSUMO</label>
                                                <select id="idTipoInsumo" class="form-control">
                                                    <option value="">Seleccionar Tipo</option>
                                                    <?php
                                                    $tipo = new tipoInsumo();
                                                    $dataTipoInsumo = $tipo->consultarTodosTipoInsumos();

                                                    foreach($dataTipoInsumo as $row){
                                                        echo "<option value=".$row["idTipoInsumo"].">".$row["nombreTipoInsumo"]."</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="idEstado">ESTADO</label>
                                            <select id="idEstado" class="form-control">
                                                <option value="">Seleccionar Estado</option>
                                                <?php
                                                $estado = new ESTADO();
                                                $dataEstado = $estado->consultarEstado();

                                                foreach($dataEstado as $row){
                                                    echo "<option value=".$row["idEstado"].">".$row["nombreEstado"]."</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="idBodega">BODEGA</label>
                                                <select id="idBodega" class="form-control">
                                                    <option value="">Seleccionar Bodega</option>
                                                    <?php
                                                    $bodega = new BODEGA();
                                                    $dataBodega = $bodega->consultarTodasBodega();

                                                    foreach($dataBodega as $row){
                                                        echo "<option value=".$row["idBodega"].">".$row["nombreBodega"]."</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="idArea">AREA</label>
                                            <select id="idArea" class="form-control">
                                                <option value="">Seleccionar Area</option>
                                                <?php
                                                $area = new AREAS();
                                                $dataArea = $area->consultarTodasArea();

                                                foreach($dataArea as $row){
                                                    echo "<option value=".$row["idArea"].">".$row["nombreArea"]."</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="idStock">STOCK</label>
                                            <select id="idStock" class="form-control">
                                                <option value="">Seleccionar Stock</option>
                                                <?php
                                                $stock = new STOCK();
                                                $dataStock = $stock->consultarTodosStock();

                                                foreach($dataStock as $row){
                                                    echo "<option value=".$row["idStock"].">".$row["numeroStock"]."</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nombreInsumo">Nombre Insumo</label>
                                            <input id="nombreInsumo"  type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cantidadProductos">Cantidad de Insumos</label>
                                            <input id="cantidadProductos" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="costoInsumo">Costo o precio</label>
                                            <input id="costoInsumo" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="descripcionInsumo">Descripcion</label>
                                            <input id="descripcionInsumo" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fechaVencimientoInsumo">Fecha Vencimiento</label>
                                            <input id="fechaVencimientoInsumo" type="date" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-outline btn-success" onclick="nuevoEmpleado()">NUEVO</button>
                            </form>
                            <!-- finaliza el form -->
                        </div>
                    </div>
                </div>
                <div class="row" align="center"><h3>INFORMACION DE INSUMOS</h3></div>
                <div class="row">

                    <table class="table table-striped col-lg-6" align="center">

                        <tr>
                            <th>Codigo</th>
                            <!--th>Estado</th-->
                            <th>Bodega</th>
                            <th>Area</th>
                            <th>Stock</th>
                            <th>Nombre</th>
                            <th>Cantidad</th>
                            <th>c/u</th>
                            <th>Desc</th>
                            <th>Venc</th>
                            <th></th>
                            <th></th>
                        </tr>

                        <?php
                        $insumos = new INSUMO();
                        $dataInsumos = $insumos->consultarTodosInsumo();
                        $idInsumo ="";
                        foreach($dataInsumos as $row)
                        {
                            $idInsumo=$row['idInsumo'];
                            echo "<tr>";
                            echo "<td aling='center' value=".$row["idInsumo"].">".$row["idInsumo"]."</td>";
                            /*echo "<td>".$row["nombreEstado"]."</td>";
                            echo "<td>".$row["nombreSexo"]."</td>";*/
                            //echo "<td>".$row["nombreEstado"]."</td>";
                            echo "<td>".$row["nombreBodega"]."</td>";
                            echo "<td>".$row["nombreArea"]."</td>";
                            echo "<td>".$row["numeroStock"]."</td>";
                            echo "<td>".$row["nombreInsumo"]."</td>";
                            echo "<td>".$row["cantidadProductos"]."</td>";
                            echo "<td>".$row["costoInsumo"]."</td>";
                            echo "<td>".$row["descripcionInsumo"]."</td>";
                            echo "<td>".$row["fechaVencimientoInsumo"]."</td>";
                            echo "<td>";
                            echo "<button type='button' class='btn btn-outline btn-success ti-pencil-alt'  data-toggle='modal' data-target='#myModal' onclick='javascript:consultarEmpleado($idInsumo);' ></button>"; //jr='edita' id='$idEmpleado'
                            echo "</td>";
                            echo "<td>";
                            echo "<button type='button' class='btn btn-outline btn-danger ti-trash' data-toggle='modal' data-target='.bd-example-modal-sm' onclick='javascript:pasarIdEmpleado($idInsumo);'></button>";  // id='$idEmpleado'
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
                                    <h4 class="modal-title" id="myModalLabel">Actualizar Informacion de Empleado</h4>
                                </div>
                                <div class="modal-body">
                                    <form id="formEmpleado">
                                        <input type="hidden" name="idEmpleadoAct" id="idEmpleadoAct" value=""><!-- aqui se define el valor del idEmpleado -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="nombreEmpleado">Nombres</label>
                                                    <input id="nombreEmpleado" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="idSexo">Sexo</label>
                                                    <select id="idSexo" class="form-control">
                                                        <option value="">Seleccionar el sexo</option>
                                                        <?php
                                                        $sexo = new SEXO();
                                                        $dataSexo = $sexo->consultarSexo();

                                                        foreach($dataSexo as $row){
                                                            echo "<option value=".$row["idSexo"].">".$row["nombreSexo"]."</option>";
                                                        }
                                                        ?>
                                                    </select>
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
                                                    <label for="idEstado">Estado</label>
                                                    <select id="idEstado" class="form-control" name="idEstado">
                                                        <option value="">Seleccionar el Estado</option>
                                                        <?php
                                                        $consultar = new ESTADO();
                                                        $dataEmp = $consultar->consultarEstado();

                                                        foreach($dataEmp as $row){
                                                            echo "<option value=".$row["idEstado"].">".$row["nombreEstado"]."</option>";
                                                        }
                                                        ?>
                                                    </select>
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
                                    <button type="button" class="btn btn-primary" onclick="javascript:actualizarEmpleado()">Guardar</button>
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
                                <input type="hidden" name="idEmpleadoDel" id="idEmpleadoDel" value=""><!-- aqui se establece el valor del idEmpleado -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="btnEliminar" class="btn btn-primary" onclick="javascript:eliminarEmpleado();"> SI </button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

    </div>
    <div class="footer" align="center"><a>2016 &copy; UNIVERSIDAD MARIANO GALVEZ</a> </div>
    <!-- jQuery-->
    <script type="text/javascript" src="../resources/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap JavaScript-->
    <script type="text/javascript" src="../resources/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Malihu Scrollbar-->
    <script type="text/javascript" src="../resources/plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Animo.js-->
    <!--script type="text/javascript" src="../../plugins/animo.js/animo.min.js"></script-->
    <!-- Bootstrap Progressbar-->
    <script type="text/javascript" src="../resources/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- jQuery Easy Pie Chart-->
    <script type="text/javascript" src="../resources/plugins/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <!-- Toastr-->
    <script type="text/javascript" src="../resources/plugins/toastr/toastr.min.js"></script>
    <!-- MomentJS-->
    <script type="text/javascript" src="../resources/plugins/moment/min/moment.min.js"></script>
    <!-- jQuery BlockUI-->
    <script type="text/javascript" src="../resources/plugins/blockUI/jquery.blockUI.js"></script>
    <!-- jQuery Counter Up-->
    <script type="text/javascript" src="../resources/plugins/jquery-waypoints/waypoints.min.js"></script>
    <script type="text/javascript" src="../resources/plugins/Counter-Up/jquery.counterup.min.js"></script>
    <!-- Jvector Map-->
    <script type="text/javascript" src="../resources/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script type="text/javascript" src="../resources/plugins/jvectormap/maps/jquery-jvectormap-world-mill.js"></script>
    <!-- Flot Charts-->
    <script type="text/javascript" src="../resources/plugins/flot/jquery.flot.js"></script>
    <script type="text/javascript" src="../resources/plugins/flot/jquery.flot.resize.js"></script>
    <script type="text/javascript" src="../resources/plugins/flot.curvedlines/curvedLines.js"></script>
    <script type="text/javascript" src="../resources/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <!-- Morris Chart-->
    <script type="text/javascript" src="../resources/plugins/raphael/raphael-min.js"></script>
    <script type="text/javascript" src="../resources/plugins/morris.js/morris.min.js"></script>
    <!-- DataTables-->
    <script type="text/javascript" src="../resources/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../resources/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="../resources/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="../resources/plugins/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script type="text/javascript" src="../resources/plugins/jszip/dist/jszip.min.js"></script>
    <script type="text/javascript" src="../resources/plugins/pdfmake/build/pdfmake.min.js"></script>
    <script type="text/javascript" src="../resources/plugins/pdfmake/build/vfs_fonts.js"></script>
    <script type="text/javascript" src="../resources/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="../resources/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="../resources/plugins/datatables.net-colreorder/js/dataTables.colReorder.min.js"></script>
    <script type="text/javascript" src="../resources/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="../resources/plugins/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <!-- jQuery UI-->
    <script type="text/javascript" src="../resources/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- FullCalendar-->
    <script type="text/javascript" src="../resources/plugins/fullcalendar/dist/fullcalendar.min.js"></script>
    <!-- jQuery MiniColors-->
    <script type="text/javascript" src="../resources/plugins/jquery-minicolors/jquery.minicolors.min.js"></script>
    <!-- Bootstrap Date Range Picker-->
    <script type="text/javascript" src="../resources/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Custom JS-->
    <script type="text/javascript" src="../resources/build/js/layout/app.js"></script>
    <script type="text/javascript" src="../resources/build/js/layout/demo.js"></script>
    <script type="text/javascript" src="../resources/build/js/page-content/dashboard/index.js"></script>
</body>
</html>
