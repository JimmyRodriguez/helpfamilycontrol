<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Umega App - Responsive web app kit</title>
    <!-- PACE-->
    <link rel="stylesheet" type="text/css" href="../../plugins/PACE/themes/blue/pace-theme-flash.css">
    <script type="text/javascript" src="../plugins/PACE/pace.min.js"></script>
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
<!-- Header start-->
<header>
    <div class="search-bar closed">
        <form>
            <div class="input-group input-group-lg">
                <input type="text" placeholder="Search for..." class="form-control"><span class="input-group-btn">
              <button type="button" class="btn btn-default search-bar-toggle"><i class="ti-close"></i></button></span>
            </div>
        </form>
    </div><a href="index.html" class="brand pull-left"><img src="../../build/images/logo/logo-light.png" alt="" width="100" class="logo"><img src="../build/images/logo/logo-sm-light.png" alt="" width="28" class="logo-sm"></a><a href="javascript:;" role="button" class="hamburger-menu pull-left"><span></span></a>
    <!--form class="mt-15 mb-15 pull-left hidden-xs">
      <div class="form-group has-feedback mb-0">
        <input type="text" aria-describedby="inputSearchFor" placeholder="Search for..." style="width: 200px" class="form-control rounded"><span aria-hidden="true" class="ti-search form-control-feedback"></span><span id="inputSearchFor" class="sr-only">(default)</span>
      </div>
    </form-->
    <ul class="notification-bar list-inline pull-right">
        <li class="visible-xs"><a href="javascript:;" role="button" class="header-icon search-bar-toggle"><i class="ti-search"></i></a></li>
        <li class="dropdown"><a id="dropdownMenu1" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle bubble header-icon"><i class="ti-world"></i><span class="badge bg-danger">6</span></a>
            <div aria-labelledby="dropdownMenu1" class="dropdown-menu dropdown-menu-right dm-medium fs-12 animated fadeInDown">
                <h5 class="dropdown-header">You have 6 notifications</h5>
                <ul data-mcs-theme="minimal-dark" class="media-list mCustomScrollbar">
                    <li class="media"><a href="javascript:;">
                        <div class="media-left avatar"><img src="../build/images/users/17.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                        <div class="media-body">
                            <h6 class="media-heading">William Carlson</h6>
                            <p class="text-muted mb-0">Commented on your post</p>
                        </div>
                        <div class="media-right text-nowrap">
                            <time datetime="2015-12-10T20:27:48+07:00" class="fs-11">5 mins</time>
                        </div></a></li>
                    <li class="media"><a href="javascript:;">
                        <div class="media-left avatar"><img src="../build/images/users/19.jpg" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
                        <div class="media-body">
                            <h6 class="media-heading">Barbara Ortega</h6>
                            <p class="text-muted mb-0">Sent you a new email</p>
                        </div>
                        <div class="media-right text-nowrap">
                            <time datetime="2015-12-10T20:42:40+07:00" class="fs-11">8 mins</time>
                        </div></a></li>
                    <li class="media"><a href="javascript:;">
                        <div class="media-left avatar"><img src="../build/images/users/02.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                        <div class="media-body">
                            <h6 class="media-heading">Mark Barnett</h6>
                            <p class="text-muted mb-0">Sent you a new message</p>
                        </div>
                        <div class="media-right text-nowrap">
                            <time datetime="2015-12-10T20:50:48+07:00" class="fs-11">9 mins</time>
                        </div></a></li>
                    <li class="media"><a href="javascript:;">
                        <div class="media-left avatar"><img src="../build/images/users/11.jpg" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
                        <div class="media-body">
                            <h6 class="media-heading">Alexander Gilbert</h6>
                            <p class="text-muted mb-0">Sent you a new email</p>
                        </div>
                        <div class="media-right text-nowrap">
                            <time datetime="2015-12-10T20:42:40+07:00" class="fs-11">15 mins</time>
                        </div></a></li>
                    <li class="media"><a href="javascript:;">
                        <div class="media-left avatar"><img src="../build/images/users/12.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                        <div class="media-body">
                            <h6 class="media-heading">Amanda Collins</h6>
                            <p class="text-muted mb-0">You have 8 unread messages</p>
                        </div>
                        <div class="media-right text-nowrap">
                            <time datetime="2015-12-10T20:35:35+07:00" class="fs-11">22 mins</time>
                        </div></a></li>
                    <li class="media"><a href="javascript:;">
                        <div class="media-left avatar"><img src="../build/images/users/13.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                        <div class="media-body">
                            <h6 class="media-heading">Christian Lane</h6>
                            <p class="text-muted mb-0">Commented on your post</p>
                        </div>
                        <div class="media-right text-nowrap">
                            <time datetime="2015-12-10T20:27:48+07:00" class="fs-11">30 mins</time>
                        </div></a></li>
                </ul>
                <div class="dropdown-footer text-center p-10"><a href="javascript:;" class="fw-500 text-muted">See all notifications</a></div>
            </div>
        </li>
        <li class="dropdown hidden-xs"><a id="dropdownMenu2" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle header-icon lh-1 pt-15 pb-15">
            <div class="media mt-0">
                <div class="media-left avatar"><img src="../build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                <div class="media-right media-middle pl-0">
                    <p class="fs-12 text-base mb-0">Hi, Matthew</p>
                </div>
            </div></a>
            <ul aria-labelledby="dropdownMenu2" class="dropdown-menu fs-12 animated fadeInDown">
                <li><a href="profile.html"><i class="ti-user mr-5"></i> Mi Perfil</a></li>
                <li><a href="profile.html"><i class="ti-settings mr-5"></i> Configuraciones</a></li>
                <li><a href="index.html"><i class="ti-power-off mr-5"></i> Salir</a></li>
            </ul>
        </li>
        <li><a href="javascript:;" role="button" class="right-sidebar-toggle bubble header-icon"><i class="ti-layout-sidebar-right"></i><span class="dot bg-danger"></span></a></li>
    </ul>
</header>
<!-- Header end-->
<div class="main-container">
    <!-- Main Sidebar start-->
    <aside class="main-sidebar">
        <div class="user">
            <div id="esp-user-profile" data-percent="65" style="height: 130px; width: 130px; line-height: 100px; padding: 15px;" class="easy-pie-chart"><img src="../../build/images/users/04.jpg" alt="" class="avatar img-circle"><span class="status bg-success"></span></div>
            <h4 class="fs-16 text-white mt-15 mb-5 fw-300">Matthew Gonzalez</h4>
            <p class="mb-0 text-muted">Designer</p>
        </div>
        <!-- ITEMS DEL MENU-->
        <ul class="list-unstyled navigation mb-0">
            <li class="sidebar-category">Main</li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse1" aria-expanded="false" aria-controls="collapse1" class="bubble active collapsed"><i class="ti-home"></i><span class="sidebar-title">Administracion</span><span class="badge bg-danger">2</span></a>
                <ul id="collapse1" class="list-unstyled collapse">
                    <li><a href="" class="active">Fondo Comun</a></li>
                    <li><a href="" class="active">Pagos</a></li>
                    <li><a href="" class="active">Compras</a></li>
                    <li><a href="views/Empleados.html" class="active">Empleados</a></li>
                    <li><a href="views/Patrocinador.html">Patrocinador</a></li>
                    <li><a href="#">Proveedor</a></li>

                </ul>
            </li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse2" aria-expanded="false" aria-controls="collapse3" class="collapsed"><i class="ti-shopping-cart"></i><span class="sidebar-title">Inventario</span></a>
                <ul id="collapse2" class="list-unstyled collapse">
                    <li><a href="views/Bodega.html">Bodega</a></li>
                    <li><a href="views/Beneficiario.html">Areas</a></li>
                    <li><a href="views/Insumos.html">Insumos</a></li>
                    <li><a href="views/EntradasYSalidas.html">Entradas y Salidas</a></li>

                </ul>
            </li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse3" aria-expanded="false" aria-controls="collapse3" class="collapsed"><i class="ti-shopping-cart"></i><span class="sidebar-title">Desastres Naturales</span></a>
                <ul id="collapse3" class="list-unstyled collapse">
                    <li><a href="views/Bodega.html">Desastres</a></li>
                </ul>
            </li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse4" aria-expanded="false" aria-controls="collapse4" class="collapsed"><i class="ti-paint-bucket"></i><span class="sidebar-title">Damnificados</span></a>
                <ul id="collapse4" class="list-unstyled collapse">
                    <li><a href="views/Beneficiario.html">Beneficiario</a></li>
                    <li><a href="views/Beneficiario.html">Albergue</a></li>
                    <li><a href="views/Beneficiario.html">Historial SocioEconomico</a></li>
                </ul>
            </li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse5" aria-expanded="false" aria-controls="collapse4" class="collapsed"><i class="ti-paint-bucket"></i><span class="sidebar-title">Reportes</span></a>
                <ul id="collapse5" class="list-unstyled collapse">
                    <li><a href="#">Beneficiario</a></li>
                    <li><a href="#">Albergue</a></li>
                    <li><a href="#">Historial SocioEconomico</a></li>
                </ul>
            </li>
        </ul>
    </aside>
    <!-- Main Sidebar end-->
    <div class="page-container">
        <div class="page-header container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="mt-0 mb-5">Welcome to Umega</h4>
                    <p class="text-muted mb-0">Responsive Web App Kit</p>
                </div>
                <div class="col-sm-6">
                    <div class="btn-group mt-5">
                        <button type="button" class="btn btn-default btn-outline"><i class="flag-icon flag-icon-us mr-5"></i> English</button>
                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-default btn-outline dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                        <ul class="dropdown-menu dropdown-menu-right animated fadeInDown">
                            <li><a href="#"><i class="flag-icon flag-icon-de mr-5"></i> German</a></li>
                            <li><a href="#"><i class="flag-icon flag-icon-fr mr-5"></i> French</a></li>
                            <li><a href="#"><i class="flag-icon flag-icon-es mr-5"></i> Spanish</a></li>
                            <li><a href="#"><i class="flag-icon flag-icon-it mr-5"></i> Italian</a></li>
                            <li><a href="#"><i class="flag-icon flag-icon-jp mr-5"></i> Japanese</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content container-fluid">
            <div class="row">
                <div class="col-lg-9">
                    <div id="world-map" style="height: 495px" class="mb-30"></div>
                </div>
                <div class="col-lg-3">
                    <div class="row">
                        <div class="col-lg-12 col-md-4">
                            <div class="mb-30">
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="media-heading">New Orders <span class="text-success"><i class="ti-arrow-up fs-13"></i> 5.28%</span></h5>
                                        <div class="fs-36 fw-600 counter">650</div>
                                    </div>
                                    <div class="media-right"><i class="fs-30 ti-receipt"></i></div>
                                </div>
                                <div id="flot-order" style="height: 74px"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-4">
                            <div class="mb-30">
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="media-heading">Total Revenue <span class="text-danger"><i class="ti-arrow-down fs-13"></i> 1.06%</span></h5>
                                        <div class="fs-36 fw-600">$<span class="counter">20,320</span></div>
                                    </div>
                                    <div class="media-right"><i class="fs-30 ti-money"></i></div>
                                </div>
                                <div id="flot-revenue" style="height: 74px"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-4">
                            <div class="mb-30">
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="media-heading">Task Completed <span class="text-danger"><i class="ti-arrow-down fs-13"></i> 3.76%</span></h5>
                                        <div class="fs-36 fw-600 counter">278</div>
                                    </div>
                                    <div class="media-right"><i class="fs-30 ti-check-box"></i></div>
                                </div>
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="block clearfix mb-5"><span class="pull-left fs-12">Today</span><span class="pull-right label label-outline label-primary">65%</span></div>
                                        <div class="progress progress-xs">
                                            <div role="progressbar" data-transitiongoal="65" class="progress-bar"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="block clearfix mb-5"><span class="pull-left fs-12">Yesterday</span><span class="pull-right label label-outline label-success">80%</span></div>
                                        <div class="progress progress-xs">
                                            <div role="progressbar" data-transitiongoal="80" class="progress-bar progress-bar-success"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="widget clear">
                        <div class="widget-heading clearfix">
                            <h3 class="widget-title pull-left">Site Traffic</h3>
                            <ul class="widget-tools pull-right list-inline">
                                <li><a href="javascript:;" class="widget-collapse"><i class="ti-angle-up"></i></a></li>
                                <li><a href="javascript:;" class="widget-reload"><i class="ti-reload"></i></a></li>
                                <li><a href="javascript:;" class="widget-remove"><i class="ti-close"></i></a></li>
                            </ul>
                        </div>
                        <div class="widget-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="clearfix">
                                        <div id="flot-visitor-legend" class="pull-left"></div>
                                        <div class="pull-right">
                                            <div class="btn-toolbar">
                                                <button id="daterangepicker" type="button" class="btn btn-raised btn-black"><i class="ti-calendar"> </i><span></span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="flot-visitor" style="height: 300px"></div>
                                    <div class="row row-0 mt-10 text-center">
                                        <div class="col-xs-4">
                                            <div class="fs-30 fw-600">45.87M</div>
                                            <h5 class="m-0">Overall Visitors <span class="text-danger"><i class="ti-arrow-down fs-13"></i> 2.43%</span></h5>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="fs-30 fw-600">15:32</div>
                                            <h5 class="m-0">Avg. Visit Duration <span class="text-success"><i class="ti-arrow-up fs-13"></i> 12.54%</span></h5>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="fs-30 fw-600">115.65</div>
                                            <h5 class="m-0">Pages/Visit <span class="text-success"><i class="ti-arrow-up fs-13"></i> 5.62%</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="morris-browser" style="height: 224px"></div>
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <thead>
                                            <tr>
                                                <th style="width:10%">#</th>
                                                <th style="width:40%">Browser</th>
                                                <th style="width:25%">Sessions</th>
                                                <th style="width:25%">Up/Down</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Chrome</td>
                                                <td>4325</td>
                                                <td class="text-success">+3.26% </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Firefox</td>
                                                <td>3257</td>
                                                <td class="text-danger">-2.14% </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>IE</td>
                                                <td>2314</td>
                                                <td class="text-success">+2.92% </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget text-center">
                        <div class="widget-body">
                            <div class="clearfix">
                                <div class="pull-left"><a href="javascript:;" class="widget-reload"><i class="ti-control-record text-muted"></i></a></div>
                                <div class="pull-right"><a href="javascript:;" class="widget-remove"><i class="ti-trash text-muted"></i></a></div>
                            </div>
                            <h5 class="mb-5">New Comments</h5>
                            <div class="fs-36 fw-600 mb-20 counter">1,206</div>
                            <div id="esp-comment" data-percent="75" style="height: 140px; width: 140px; line-height: 120px; padding: 10px;" class="easy-pie-chart fs-36"><i class="ti-comment-alt text-muted"></i></div>
                            <div class="clearfix mt-20">
                                <div class="pull-left">
                                    <div class="fs-12">Today</div>
                                    <div class="text-success">+2.43%</div>
                                </div>
                                <div class="pull-right">
                                    <div class="fs-12">Yesterday</div>
                                    <div class="text-danger">-1.02%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget text-center">
                        <div class="widget-body">
                            <div class="clearfix">
                                <div class="pull-left"><a href="javascript:;" class="widget-reload"><i class="ti-control-record text-muted"></i></a></div>
                                <div class="pull-right"><a href="javascript:;" class="widget-remove"><i class="ti-trash text-muted"></i></a></div>
                            </div>
                            <h5 class="mb-5">New Photos</h5>
                            <div class="fs-36 fw-600 mb-20 counter">350</div>
                            <div id="esp-photo" data-percent="55" style="height: 140px; width: 140px; line-height: 120px; padding: 10px;" class="easy-pie-chart fs-36"><i class="ti-image text-muted"></i></div>
                            <div class="clearfix mt-20">
                                <div class="pull-left">
                                    <div class="fs-12">Today</div>
                                    <div class="text-danger">-0.23%</div>
                                </div>
                                <div class="pull-right">
                                    <div class="fs-12">Yesterday</div>
                                    <div class="text-success">+1.02%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget text-center">
                        <div class="widget-body">
                            <div class="clearfix">
                                <div class="pull-left"><a href="javascript:;" class="widget-reload"><i class="ti-control-record text-muted"></i></a></div>
                                <div class="pull-right"><a href="javascript:;" class="widget-remove"><i class="ti-trash text-muted"></i></a></div>
                            </div>
                            <h5 class="mb-5">New Users</h5>
                            <div class="fs-36 fw-600 mb-20 counter">890</div>
                            <div id="esp-user" data-percent="30" style="height: 140px; width: 140px; line-height: 120px; padding: 10px;" class="easy-pie-chart fs-36"><i class="ti-user text-muted"></i></div>
                            <div class="clearfix mt-20">
                                <div class="pull-left">
                                    <div class="fs-12">Today</div>
                                    <div class="text-success">+0.09%</div>
                                </div>
                                <div class="pull-right">
                                    <div class="fs-12">Yesterday</div>
                                    <div class="text-danger">-0.02%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget text-center">
                        <div class="widget-body">
                            <div class="clearfix">
                                <div class="pull-left"><a href="javascript:;" class="widget-reload"><i class="ti-control-record text-muted"></i></a></div>
                                <div class="pull-right"><a href="javascript:;" class="widget-remove"><i class="ti-trash text-muted"></i></a></div>
                            </div>
                            <h5 class="mb-5">New Feedbacks</h5>
                            <div class="fs-36 fw-600 mb-20 counter">1,609</div>
                            <div id="esp-feedback" data-percent="20" style="height: 140px; width: 140px; line-height: 120px; padding: 10px;" class="easy-pie-chart fs-36"><i class="ti-receipt text-muted"></i></div>
                            <div class="clearfix mt-20">
                                <div class="pull-left">
                                    <div class="fs-12">Today</div>
                                    <div class="text-success">+3.29%</div>
                                </div>
                                <div class="pull-right">
                                    <div class="fs-12">Yesterday</div>
                                    <div class="text-success">+2.32%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="widget no-border">
                        <div style="height: 197px" class="overlay-container overlay-color"><img src="../build/images/backgrounds/34.jpg" alt="" class="overlay-bg img-responsive"></div>
                        <div style="position: relative"><a href="#" style="position: absolute; top: -70px; left: 50%; margin-left: -50px; border-radius: 50%; padding: 3px; background-color: #FFF"><img src="../build/images/users/11.jpg" width="100" alt="" class="img-circle"></a></div>
                        <div class="text-center p-20 bd-l bd-r">
                            <h4 class="text-primary mt-30 mb-5">Raymond Pierce</h4>
                            <p>Web Developer</p>
                            <p class="mb-0">I am a freelance graphic designer with 20 years experience working in the Graphic Design industry.</p>
                        </div>
                        <div class="row row-0 p-15 text-center bg-black">
                            <div class="col-xs-4">
                                <div class="fs-20 fw-500">208</div>
                                <div class="text-muted">Following</div>
                            </div>
                            <div class="col-xs-4">
                                <div class="fs-20 fw-500">560</div>
                                <div class="text-muted">Likes</div>
                            </div>
                            <div class="col-xs-4">
                                <div class="fs-20 fw-500">95</div>
                                <div class="text-muted">Photos</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="widget no-border">
                        <table id="order-table" style="width: 100%" class="table table-hover dt-responsive nowrap">
                            <thead>
                            <tr>
                                <th style="width:16%">Order ID</th>
                                <th style="width:37%">Customer</th>
                                <th style="width:20%">Date Added</th>
                                <th style="width:12%">Total</th>
                                <th style="width:15%">Completed</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>#6546</td>
                                <td>
                                    <div class="media">
                                        <div class="media-left avatar"><img src="../build/images/users/10.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                                        <div class="media-body">
                                            <h5 class="media-heading">Philip Fernandez</h5>
                                            <p class="text-muted mb-0">489 Rhapsody Street</p>
                                        </div>
                                    </div>
                                </td>
                                <td>20 Feb 2016</td>
                                <td>$140.00</td>
                                <td class="text-center text-success"><i class="ti-check"></i></td>
                            </tr>
                            <tr>
                                <td>#6941</td>
                                <td>
                                    <div class="media">
                                        <div class="media-left avatar"><img src="../build/images/users/20.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                                        <div class="media-body">
                                            <h5 class="media-heading">Mary Carr</h5>
                                            <p class="text-muted mb-0">3611 West Fork Drive</p>
                                        </div>
                                    </div>
                                </td>
                                <td>20 Feb 2016</td>
                                <td>$120.00</td>
                                <td class="text-center text-danger"><i class="ti-close"></i></td>
                            </tr>
                            <tr>
                                <td>#3202</td>
                                <td>
                                    <div class="media">
                                        <div class="media-left avatar"><img src="../build/images/users/11.jpg" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
                                        <div class="media-body">
                                            <h5 class="media-heading">Joseph Salazar</h5>
                                            <p class="text-muted mb-0">4489 Hart Ridge Road</p>
                                        </div>
                                    </div>
                                </td>
                                <td>20 Feb 2016</td>
                                <td>$590.00</td>
                                <td class="text-center text-success"><i class="ti-check"></i></td>
                            </tr>
                            <tr>
                                <td>#8302</td>
                                <td>
                                    <div class="media">
                                        <div class="media-left avatar"><img src="../build/images/users/06.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                                        <div class="media-body">
                                            <h5 class="media-heading">John Cruz</h5>
                                            <p class="text-muted mb-0">3274 Lyndon Street</p>
                                        </div>
                                    </div>
                                </td>
                                <td>20 Feb 2016</td>
                                <td>$940.00</td>
                                <td class="text-center text-danger"><i class="ti-close"></i></td>
                            </tr>
                            <tr>
                                <td>#8943</td>
                                <td>
                                    <div class="media">
                                        <div class="media-left avatar"><img src="../build/images/users/19.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                                        <div class="media-body">
                                            <h5 class="media-heading">Jacqueline Rios</h5>
                                            <p class="text-muted mb-0">559 Holly Street</p>
                                        </div>
                                    </div>
                                </td>
                                <td>20 Feb 2016</td>
                                <td>$490.00</td>
                                <td class="text-center text-success"><i class="ti-check"></i></td>
                            </tr>
                            <tr>
                                <td>#8943</td>
                                <td>
                                    <div class="media">
                                        <div class="media-left avatar"><img src="../build/images/users/01.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                                        <div class="media-body">
                                            <h5 class="media-heading">Samuel Hayes</h5>
                                            <p class="text-muted mb-0">716 Riverwood Drive</p>
                                        </div>
                                    </div>
                                </td>
                                <td>20 Feb 2016</td>
                                <td>$230.00</td>
                                <td class="text-center text-success"><i class="ti-check"></i></td>
                            </tr>
                            <tr>
                                <td>#2357</td>
                                <td>
                                    <div class="media">
                                        <div class="media-left avatar"><img src="../build/images/users/15.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                                        <div class="media-body">
                                            <h5 class="media-heading">Tyler Hamilton</h5>
                                            <p class="text-muted mb-0">1979 Monroe Street</p>
                                        </div>
                                    </div>
                                </td>
                                <td>20 Feb 2016</td>
                                <td>$319.00</td>
                                <td class="text-center text-success"><i class="ti-check"></i></td>
                            </tr>
                            <tr>
                                <td>#5784</td>
                                <td>
                                    <div class="media">
                                        <div class="media-left avatar"><img src="../build/images/users/16.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                                        <div class="media-body">
                                            <h5 class="media-heading">Lawrence Castillo</h5>
                                            <p class="text-muted mb-0">1704 Saints Alley</p>
                                        </div>
                                    </div>
                                </td>
                                <td>20 Feb 2016</td>
                                <td>$860.00</td>
                                <td class="text-center text-success"><i class="ti-check"></i></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="widget no-border overlay-container"><img src="../build/images/backgrounds/06.jpg" alt="" class="overlay-bg img-responsive">
                        <div class="overlay-content p-30">
                            <div class="clearfix">
                                <div class="pull-left"><i class="fs-60 wi wi-day-cloudy-gusts"></i>
                                    <div class="mt-15 mb-5 fw-500 fs-22">Mostly Cloudy</div>
                                    <div class="fs-18">New York</div>
                                </div>
                                <div class="pull-right text-right">
                                    <div class="fs-20">January 30, 2016</div>
                                    <div class="fs-100 fw-700"><span class="counter">76</span><sup>o</sup></div>
                                </div>
                            </div>
                            <div id="flot-weather" style="height: 107px"></div>
                            <div class="row row-0 text-center">
                                <div class="col-sm-2 col-xs-4 mt-10">
                                    <div class="fs-18 fw-500">77<sup>o</sup></div>
                                    <div class="fs-12">6 AM</div>
                                </div>
                                <div class="col-sm-2 col-xs-4 mt-10">
                                    <div class="fs-18 fw-500">62<sup>o</sup></div>
                                    <div class="fs-12">10 AM</div>
                                </div>
                                <div class="col-sm-2 col-xs-4 mt-10">
                                    <div class="fs-18 fw-500">74<sup>o</sup></div>
                                    <div class="fs-12">2 PM</div>
                                </div>
                                <div class="col-sm-2 col-xs-4 mt-10">
                                    <div class="fs-18 fw-500">76<sup>o</sup></div>
                                    <div class="fs-12">6 PM</div>
                                </div>
                                <div class="col-sm-2 col-xs-4 mt-10">
                                    <div class="fs-18 fw-500">78<sup>o</sup></div>
                                    <div class="fs-12">10 PM</div>
                                </div>
                                <div class="col-sm-2 col-xs-4 mt-10">
                                    <div class="fs-18 fw-500">60<sup>o</sup></div>
                                    <div class="fs-12">2 AM</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="widget no-border">
                        <ul class="activity-list list-unstyled mb-0">
                            <li class="activity-info">
                                <div class="media">
                                    <div class="media-left">
                                        <time datetime="2015-12-10T20:50:48+07:00" class="fs-30 fw-500">08:20<span class="fs-14 text-muted">PM</span></time>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="media-heading">Added</h5>
                                        <p class="text-muted">Morris charts page</p>
                                    </div>
                                </div>
                            </li>
                            <li class="activity-danger">
                                <div class="media">
                                    <div class="media-left">
                                        <time datetime="2015-12-10T20:50:48+07:00" class="fs-30 fw-500">07:30<span class="fs-14 text-muted">PM</span></time>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="media-heading">Fixed</h5>
                                        <p class="text-muted">White header version & example pages</p>
                                    </div>
                                </div>
                            </li>
                            <li class="activity-warning">
                                <div class="media">
                                    <div class="media-left">
                                        <time datetime="2015-12-10T20:50:48+07:00" class="fs-30 fw-500">03:15<span class="fs-14 text-muted">PM</span></time>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="media-heading">Updated</h5>
                                        <p class="text-muted">Visual composer 4.92 </p>
                                    </div>
                                </div>
                            </li>
                            <li class="activity-success">
                                <div class="media">
                                    <div class="media-left">
                                        <time datetime="2015-12-10T20:50:48+07:00" class="fs-30 fw-500">10:50<span class="fs-14 text-muted">AM</span></time>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="media-heading">Create workflow</h5>
                                        <p class="text-muted">Team member</p>
                                        <ul class="list-inline">
                                            <li>
                                                <div class="avatar"><img src="../build/images/users/02.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                                            </li>
                                            <li>
                                                <div class="avatar"><img src="../build/images/users/03.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                                            </li>
                                            <li>
                                                <div class="avatar"><img src="../build/images/users/07.jpg" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
                                            </li>
                                            <li>
                                                <div class="avatar"><img src="../build/images/users/05.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                                            </li>
                                            <li>
                                                <div class="avatar"><img src="../build/images/users/06.jpg" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="activity-primary">
                                <div class="media">
                                    <div class="media-left">
                                        <time datetime="2015-12-10T20:50:48+07:00" class="fs-30 fw-500">09:20<span class="fs-14 text-muted">AM</span></time>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="media-heading">Fixed</h5>
                                        <p class="text-muted">Performance improvement</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="widget clear">
                        <div class="widget-heading clearfix">
                            <h3 class="widget-title pull-left">Upcoming Events</h3>
                            <ul class="widget-tools pull-right list-inline">
                                <li><a href="javascript:;" class="widget-collapse"><i class="ti-angle-up"></i></a></li>
                                <li><a href="javascript:;" class="widget-reload"><i class="ti-reload"></i></a></li>
                                <li><a href="javascript:;" class="widget-remove"><i class="ti-close"></i></a></li>
                            </ul>
                        </div>
                        <div class="widget-body">
                            <div class="row row-0 bg-primary">
                                <div class="col-md-3">
                                    <div class="events-header"><i class="ti-move"></i> Draggable Events</div>
                                    <div class="p-20">
                                        <ul class="list-unstyled draggable">
                                            <li>Start with design project</li>
                                            <li>Lunch with family</li>
                                            <li>Birthday party</li>
                                            <li>Read a book</li>
                                            <li>Drink with Jessica</li>
                                            <li>Pay internet bills online</li>
                                            <li>Search for a job</li>
                                            <li>Meeting with dropbox</li>
                                        </ul>
                                        <div class="checkbox-custom">
                                            <input id="drop-remove" type="checkbox" value="remove" checked="">
                                            <label for="drop-remove">Remove after drop</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div id="fullcalendar"></div>
                                </div>
                            </div>
                            <div id="addNewEvent" tabindex="-1" role="dialog" aria-labelledby="ModalEventLabel" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-black">
                                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                            <h4 id="ModalEventLabel" class="modal-title">Add New Event</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <input id="inputTitleEvent" type="text" placeholder="Event Name" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <input id="inputBackgroundEvent" type="text" value="#0667D6" class="form-control">
                                                </div>
                                                <input id="start" type="hidden">
                                                <input id="end" type="hidden">
                                                <input id="allDay" type="hidden">
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" data-dismiss="modal" class="btn btn-raised btn-default">Cancel</button>
                                            <button id="btnAddNewEvent" type="submit" class="btn btn-raised btn-black">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">2016 &copy;  <a href="http://themeforest.net/item/umega-responsive-web-app-kit/15482080">Umega - Responsive Web App Kit</a> by <a href="http://themeforest.net/user/lethemes" target="_blank">Lethemes.</a></div>
    </div>
    <!-- Right Sidebar start-->
    <aside class="right-sidebar closed">
        <ul role="tablist" class="nav nav-tabs nav-justified nav-sidebar">
            <li role="presentation" class="active"><a href="#chat" aria-controls="chat" role="tab" data-toggle="tab"><i class="ti-comment-alt"></i></a></li>
            <li role="presentation"><a href="#announcement" aria-controls="announcement" role="tab" data-toggle="tab"><i class="ti-announcement"></i></a></li>
            <li role="presentation"><a href="#ticket" aria-controls="ticket" role="tab" data-toggle="tab"><i class="ti-bookmark-alt"></i></a></li>
            <li role="presentation"><a href="#setting" aria-controls="setting" role="tab" data-toggle="tab"><i class="ti-settings"></i></a></li>
        </ul>
        <div data-mcs-theme="minimal-dark" class="tab-content nav-sidebar-content mCustomScrollbar">
            <div id="chat" role="tabpanel" class="tab-pane fade in active">
                <form>
                    <div class="form-group has-feedback">
                        <input type="text" aria-describedby="inputChatSearch" placeholder="Chat with..." class="form-control rounded"><span aria-hidden="true" class="ti-search form-control-feedback"></span><span id="inputChatSearch" class="sr-only">(default)</span>
                    </div>
                </form>
                <ul class="chat-list mb-0 fs-12 media-list">
                    <li class="media"><a href="javascript:;" class="conversation-toggle">
                        <div class="media-left avatar"><img src="../build/images/users/20.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                        <div class="media-body">
                            <h6 class="media-heading">Jane Curtis</h6>
                            <p class="text-muted mb-0">Where are you from?</p>
                        </div>
                        <div class="media-right"><span class="badge bg-danger">2</span></div></a></li>
                    <li class="media"><a href="javascript:;" class="conversation-toggle">
                        <div class="media-left avatar"><img src="../build/images/users/01.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                        <div class="media-body">
                            <h6 class="media-heading">Edward Garcia</h6>
                            <p class="text-muted mb-0">Nice to meet you.</p>
                        </div></a></li>
                    <li class="media"><a href="javascript:;" class="conversation-toggle">
                        <div class="media-left avatar"><img src="../build/images/users/02.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                        <div class="media-body">
                            <h6 class="media-heading">Bruce Olson</h6>
                            <p class="text-muted mb-0">What do you want to do?</p>
                        </div></a></li>
                    <li class="media"><a href="javascript:;" class="conversation-toggle">
                        <div class="media-left avatar"><img src="../build/images/users/03.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                        <div class="media-body">
                            <h6 class="media-heading">Martha Rodriguez</h6>
                            <p class="text-muted mb-0">I'm hungry.</p>
                        </div>
                        <div class="media-right"><span class="badge bg-danger">1</span></div></a></li>
                    <li class="media"><a href="javascript:;" class="conversation-toggle">
                        <div class="media-left avatar"><img src="../build/images/users/05.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                        <div class="media-body">
                            <h6 class="media-heading">Hannah Williamson</h6>
                            <p class="text-muted mb-0">Do you know the address?</p>
                        </div></a></li>
                    <li class="media"><a href="javascript:;" class="conversation-toggle">
                        <div class="media-left avatar"><img src="../build/images/users/06.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                        <div class="media-body">
                            <h6 class="media-heading">Anthony Mills</h6>
                            <p class="text-muted mb-0">No problem.</p>
                        </div></a></li>
                    <li class="media"><a href="javascript:;" class="conversation-toggle">
                        <div class="media-left avatar"><img src="../build/images/users/07.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                        <div class="media-body">
                            <h6 class="media-heading">Ethan Stanley</h6>
                            <p class="text-muted mb-0">Hello?</p>
                        </div></a></li>
                    <li class="media"><a href="javascript:;" class="conversation-toggle">
                        <div class="media-left avatar"><img src="../build/images/users/08.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                        <div class="media-body">
                            <h6 class="media-heading">Jonathan Castro</h6>
                            <p class="text-muted mb-0">OK. Thanks.</p>
                        </div>
                        <div class="media-right"><span class="badge bg-danger">1</span></div></a></li>
                    <li class="media"><a href="javascript:;" class="conversation-toggle">
                        <div class="media-left avatar"><img src="../build/images/users/09.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                        <div class="media-body">
                            <h6 class="media-heading">Denise Rose</h6>
                            <p class="text-muted mb-0">Bye bye.</p>
                        </div></a></li>
                    <li class="media"><a href="javascript:;" class="conversation-toggle">
                        <div class="media-left avatar"><img src="../build/images/users/10.jpg" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
                        <div class="media-body">
                            <h6 class="media-heading">Eugene Meyer</h6>
                            <p class="text-muted mb-0">How are you?</p>
                        </div></a></li>
                </ul>
            </div>
            <div id="announcement" role="tabpanel" class="tab-pane fade">
                <ul class="media-list mb-0 fs-12">
                    <li class="media">
                        <div class="media-left"><i class="ti-bar-chart-alt media-object mo-xs img-circle bg-primary text-center"></i></div>
                        <div class="media-body">
                            <h6 class="media-heading">Market Trend Data</h6>
                            <p class="text-muted mb-0">Mattis nam fringilla dui nostra, ad fames fusce venenatis massa.</p>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-left"><i class="ti-package media-object mo-xs img-circle bg-success text-center"></i></div>
                        <div class="media-body">
                            <h6 class="media-heading">Change Your Password!</h6>
                            <p class="text-muted mb-0">Varius dolor condimentum hendrerit eleifend est urna neque fames faucibus?</p>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-left"><i class="ti-gift media-object mo-xs img-circle bg-warning text-center"></i></div>
                        <div class="media-body">
                            <h6 class="media-heading">We Apologize</h6>
                            <p class="text-muted mb-0">Justo at mauris ridiculus conubia penatibus dis varius proin porttitor!</p>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-left"><i class="ti-harddrives media-object mo-xs img-circle bg-info text-center"></i></div>
                        <div class="media-body">
                            <h6 class="media-heading">Content Policy Update</h6>
                            <p class="text-muted mb-0">Quis ante imperdiet a volutpat quam tellus condimentum blandit elementum.</p>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-left"><i class="ti-mobile media-object mo-xs img-circle bg-purple text-center"></i></div>
                        <div class="media-body">
                            <h6 class="media-heading">Mobile Apps</h6>
                            <p class="text-muted mb-0">Ad iaculis at feugiat integer lobortis vivamus hac egestas venenatis.</p>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-left"><i class="ti-alarm-clock media-object mo-xs img-circle bg-danger text-center"></i></div>
                        <div class="media-body">
                            <h6 class="media-heading">New Features</h6>
                            <p class="text-muted mb-0">Primis elementum facilisi tristique faucibus feugiat enim rutrum id himenaeos.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="ticket" role="tabpanel" class="tab-pane fade">
                <form>
                    <div class="form-group">
                        <input type="text" placeholder="Username" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Subject" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea rows="6" placeholder="Description" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-block btn-success">Create Ticket</button>
                </form>
            </div>
            <div id="setting" role="tabpanel" class="tab-pane fade">
                <form class="form-horizontal fs-12">
                    <div class="clearfix">
                        <h6 class="pull-left">Maintenance Mode</h6>
                        <div class="switch pull-right">
                            <input id="setting-1" type="checkbox" checked="">
                            <label for="setting-1" class="switch-success"></label>
                        </div>
                    </div>
                    <p class="text-muted">Ipsum non tempor non nullam nisi congue nisi amet enim.</p>
                    <div class="clearfix">
                        <h6 class="pull-left">Location Services</h6>
                        <div class="switch pull-right">
                            <input id="setting-2" type="checkbox" checked="">
                            <label for="setting-2" class="switch-success"></label>
                        </div>
                    </div>
                    <p class="text-muted">Eleifend suscipit erat cursus viverra commodo nostra sit commodo mollis.</p>
                    <div class="clearfix">
                        <h6 class="pull-left">Display Errors</h6>
                        <div class="switch pull-right">
                            <input id="setting-3" type="checkbox" checked="">
                            <label for="setting-3" class="switch-success"></label>
                        </div>
                    </div>
                    <p class="text-muted">Amet per tortor adipiscing risus dolor orci diam curabitur senectus.</p>
                    <div class="clearfix">
                        <h6 class="pull-left">Use SEO URLs</h6>
                        <div class="switch pull-right">
                            <input id="setting-4" type="checkbox" checked="">
                            <label for="setting-4" class="switch-success"></label>
                        </div>
                    </div>
                    <p class="text-muted">Ullamcorper dignissim facilisis fames proin a leo diam amet urna.</p>
                    <div class="clearfix">
                        <h6 class="pull-left">Enable History</h6>
                        <div class="switch pull-right">
                            <input id="setting-5" type="checkbox" checked="">
                            <label for="setting-5" class="switch-success"></label>
                        </div>
                    </div>
                    <p class="text-muted">Consectetur cubilia varius vulputate fermentum non dolor cubilia torquent risus.</p>
                </form>
            </div>
        </div>
    </aside>
    <aside class="conversation closed">
        <h5 class="text-center m-0 p-20">Edward Garcia<a href="javascript:;" class="conversation-toggle pull-left"><i class="ti-arrow-left text-muted"></i></a><a href="javascript:;" class="pull-right"><i class="ti-pencil text-muted"></i></a></h5>
        <ul data-mcs-theme="minimal-dark" class="media-list chat-content fs-12 pl-20 pr-20 mCustomScrollbar">
            <li class="media">
                <div class="media-left avatar"><img src="../build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                <div class="media-body">
                    <p>Hello.</p>
                    <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">09:45 PM <i class="ti-check text-success"></i></time>
                </div>
            </li>
            <li class="media other">
                <div class="media-body">
                    <p>Hi.</p>
                    <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">09:46 PM <i class="ti-check text-success"></i></time>
                </div>
                <div class="media-right avatar"><img src="../build/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            </li>
            <li class="media">
                <div class="media-left avatar"><img src="../build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                <div class="media-body">
                    <p>How are you?</p>
                    <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">09:47 PM <i class="ti-check text-success"></i></time>
                </div>
            </li>
            <li class="media other">
                <div class="media-body">
                    <p>I'm good. How are you?</p>
                    <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">09:50 PM <i class="ti-check text-success"></i></time>
                </div>
                <div class="media-right avatar"><img src="../build/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            </li>
            <li class="media">
                <div class="media-left avatar"><img src="../build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                <div class="media-body">
                    <p>Good. Do you speak English?</p>
                    <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">09:55 PM <i class="ti-check text-success"></i></time>
                </div>
            </li>
            <li class="media other">
                <div class="media-body">
                    <p>A little. Are you American?</p>
                    <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">09:56 PM <i class="ti-check text-success"></i></time>
                </div>
                <div class="media-right avatar"><img src="../build/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            </li>
            <li class="media">
                <div class="media-left avatar"><img src="../build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                <div class="media-body">
                    <p>Yes.</p>
                    <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">10:00 PM <i class="ti-check text-success"></i></time>
                </div>
            </li>
            <li class="media other">
                <div class="media-body">
                    <p>Where are you from?</p>
                    <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">10:01 PM <i class="ti-check text-success"></i></time>
                </div>
                <div class="media-right avatar"><img src="../build/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            </li>
            <li class="media">
                <div class="media-left avatar"><img src="../build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                <div class="media-body">
                    <p>I'm from California.</p>
                    <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">10:03 PM <i class="ti-check text-success"></i></time>
                </div>
            </li>
            <li class="media other">
                <div class="media-body">
                    <p>Nice to meet you.</p>
                    <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">10:04 PM <i class="ti-check text-success"></i></time>
                </div>
                <div class="media-right avatar"><img src="../build/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            </li>
            <li class="media">
                <div class="media-left avatar"><img src="../build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                <div class="media-body">
                    <p>Nice to meet you too.</p>
                    <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">10:05 PM <i class="ti-check text-success"></i></time>
                </div>
            </li>
        </ul>
        <form class="pl-20 pr-20">
            <div class="form-group has-feedback mb-0">
                <input type="text" aria-describedby="inputSendMessage" placeholder="Sent a message" class="form-control rounded"><span aria-hidden="true" class="ti-pencil-alt form-control-feedback"></span><span id="inputSendMessage" class="sr-only">(default)</span>
            </div>
        </form>
    </aside>
    <!-- Right Sidebar end-->
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
</body>
</html>