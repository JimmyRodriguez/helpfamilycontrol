<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
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
    <!-- Morris Chart-->
    <link rel="stylesheet" type="text/css" href="../../plugins/morris.js/morris.css">
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
      </div><a href="../index.html" class="brand pull-left"><img src="../../build/images/logo/logo-light.png" alt="" width="100" class="logo">
      <img src="../../build/images/logo/logo-sm-light.png" alt="" width="28" class="logo-sm"></a>
      <a href="javascript:;" role="button" class="hamburger-menu pull-left"><span></span></a>
      <form class="mt-15 mb-15 pull-left hidden-xs">
        <div class="form-group has-feedback mb-0">
          <input type="text" aria-describedby="inputSearchFor" placeholder="Search for..." style="width: 200px" class="form-control rounded"><span aria-hidden="true" class="ti-search form-control-feedback"></span><span id="inputSearchFor" class="sr-only">(default)</span>
        </div>
      </form>
      <ul class="notification-bar list-inline pull-right">
        <li class="visible-xs"><a href="javascript:;" role="button" class="header-icon search-bar-toggle"><i class="ti-search"></i></a></li>

        <li class="dropdown hidden-xs"><a id="dropdownMenu2" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle header-icon lh-1 pt-15 pb-15">
            <div class="media mt-0">
              <div class="media-left avatar"><img src="../../build/images/users/21.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
              <div class="media-right media-middle pl-0">
                <p class="fs-12 text-base mb-0">Jimmy Rodriguez</p>
              </div>
            </div></a>
          <ul aria-labelledby="dropdownMenu2" class="dropdown-menu fs-12 animated fadeInDown">
            <li><a href="profile.html"><i class="ti-user mr-5"></i> Mi Perfil</a></li>
            <li><a href="profile.html"><i class="ti-settings mr-5"></i> Configuraciones</a></li>
            <li><a href="login-v2.html"><i class="ti-power-off mr-5"></i>Salir</a></li>
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
          <div id="esp-user-profile" data-percent="65" style="height: 130px; width: 130px; line-height: 100px; padding: 15px;" class="easy-pie-chart"><img src="../../build/images/users/21.jpg" alt="" class="avatar img-circle"><span class="status bg-success"></span></div>
          <h4 class="fs-16 text-white mt-15 mb-5 fw-300">Jimmy Rodriguez</h4>
          <p class="mb-0 text-muted">Analisis y Diseño de sistemas</p>
        </div>
        <!-- ITEMS DEL MENU-->
        <ul class="list-unstyled navigation mb-0">
          <li class="sidebar-category text-center"><h4>MENU PRINCIPAL</h4></li>
          <li class="panel">
            <a role="button" href="vistas/dashboard.html" class="bubble active collapse">
              <i class="ti-dashboard"></i>
              <span class="sidebar-title">Dashboard</span>
            </a>
          </li>
          <li class="panel">
            <a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse2" aria-expanded="false" aria-controls="collapse1" class="bubble active collapsed">
              <i class="ti-home"></i>
              <span class="sidebar-title">Administracion</span>
            </a>
            <ul id="collapse2" class="list-unstyled collapse">
              <li><a href="admon/iCompras.php" class="active">Compras</a></li>
              <li><a href="admon/iCuenta.php" class="active">Cuenta</a></li>
              <li><a href="admon/iEmpleados.php" class="active">Empleados</a></li>
              <li><a href="admon/iPagos.php" class="active">Pagos</a></li>
              <li><a href="admon/iPatrocinador.php" class="active">Patrocinador</a></li>
              <li><a href="admon/iProveedores.php" class="active">Proveedores</a></li>
              <li><a href="admon/itipoCuenta.php" class="active">Tipo Patrocinador</a></li>
              <li><a href="admon/itipoPatrocinador">Tipo Patrocinador</a></li>
            </ul>
          </li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse3" aria-expanded="false" aria-controls="collapse3" class="collapsed"><i class="ti-folder"></i><span class="sidebar-title">Inventario</span></a>
            <ul id="collapse3" class="list-unstyled collapse">
              <li><a href="inventario/iBodega.php">Bodega</a></li>
              <li><a href="inventario/iArea.php">Areas</a></li>
              <li><a href="inventario/iStock.php">Stock</a></li>
              <li><a href="inventario/iInsumos.php">Insumos</a></li>
              <li><a href="inventario/iInsumos.php">Entradas y Salidas</a></li>
              <li><a href="inventario/iInsumos.php">Tipo Entrada y Salida</a></li>
              <li><a href="inventario/iInsumos.php">Tipo Insumo</a></li>

            </ul>
          </li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse4" aria-expanded="false" aria-controls="collapse3" class="collapsed"><i class="ti-face-sad"></i><span class="sidebar-title">Desastres Naturales</span></a>
            <ul id="collapse4" class="list-unstyled collapse">
              <li><a href="vistas/Bodega.html">Desastres</a></li>
            </ul>
          </li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse5" aria-expanded="false" aria-controls="collapse4" class="collapsed"><i class="ti-user"></i><span class="sidebar-title">Damnificados</span></a>
            <ul id="collapse5" class="list-unstyled collapse">
              <li><a href="vistas/Beneficiario.html">Beneficiario</a></li>
              <li><a href="vistas/Beneficiario.html">Albergue</a></li>
              <li><a href="vistas/Beneficiario.html">Historial SocioEconomico</a></li>
            </ul>
          </li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse6" aria-expanded="false" aria-controls="collapse4" class="collapsed"><i class="ti-bar-chart-alt"></i><span class="sidebar-title">Reportes</span></a>
            <ul id="collapse6" class="list-unstyled collapse">
              <li><a href="vistas/reportes/cantidad-entregada-a-las-familias-apadrinadas-por-mes-incluyendo-viveres-que-se-han-entregado.html">Viveres Entregados a cada familia por mes</a></li>
              <li><a href="vistas/reportes">Albergue</a></li>
              <li><a href="vistas/reportes">Historial SocioEconomico</a></li>
            </ul>
          </li>
        </ul>
      </aside>
      <!-- Main Sidebar end-->
      <div class="page-container">
        <div class="page-header container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <h4 class="mt-0 mb-5">Morris Charts</h4>
              <ol class="breadcrumb mb-0">
                <li><a href="#">Umega</a></li>
                <li><a href="#">Charts</a></li>
                <li class="active">Morris Charts</li>
              </ol>
            </div>
          </div>
        </div>
        <div class="page-content container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="widget">
                <div class="widget-heading">
                  <h3 class="widget-title">Bar Chart</h3>
                </div>
                <div class="widget-body">
                  <div id="barchart"></div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="widget">
                <div class="widget-heading">
                  <h3 class="widget-title">Stacked Bar Chart</h3>
                </div>
                <div class="widget-body">
                  <div id="stackbarchart"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="widget">
                <div class="widget-heading">
                  <h3 class="widget-title">Donut Chart</h3>
                </div>
                <div class="widget-body">
                  <div id="donutchart"></div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="widget">
                <div class="widget-heading">
                  <h3 class="widget-title">Area Chart</h3>
                </div>
                <div class="widget-body">
                  <div id="areachart"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="widget">
                <div class="widget-heading">
                  <h3 class="widget-title">Line Chart</h3>
                </div>
                <div class="widget-body">
                  <div id="linechart"></div>
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
                  <div class="media-left avatar"><img src="../../build/images/users/20.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Jane Curtis</h6>
                    <p class="text-muted mb-0">Where are you from?</p>
                  </div>
                  <div class="media-right"><span class="badge bg-danger">2</span></div></a></li>
              <li class="media"><a href="javascript:;" class="conversation-toggle">
                  <div class="media-left avatar"><img src="../../build/images/users/01.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Edward Garcia</h6>
                    <p class="text-muted mb-0">Nice to meet you.</p>
                  </div></a></li>
              <li class="media"><a href="javascript:;" class="conversation-toggle">
                  <div class="media-left avatar"><img src="../../build/images/users/02.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Bruce Olson</h6>
                    <p class="text-muted mb-0">What do you want to do?</p>
                  </div></a></li>
              <li class="media"><a href="javascript:;" class="conversation-toggle">
                  <div class="media-left avatar"><img src="../../build/images/users/03.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Martha Rodriguez</h6>
                    <p class="text-muted mb-0">I'm hungry.</p>
                  </div>
                  <div class="media-right"><span class="badge bg-danger">1</span></div></a></li>
              <li class="media"><a href="javascript:;" class="conversation-toggle">
                  <div class="media-left avatar"><img src="../../build/images/users/05.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Hannah Williamson</h6>
                    <p class="text-muted mb-0">Do you know the address?</p>
                  </div></a></li>
              <li class="media"><a href="javascript:;" class="conversation-toggle">
                  <div class="media-left avatar"><img src="../../build/images/users/06.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Anthony Mills</h6>
                    <p class="text-muted mb-0">No problem.</p>
                  </div></a></li>
              <li class="media"><a href="javascript:;" class="conversation-toggle">
                  <div class="media-left avatar"><img src="../../build/images/users/07.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Ethan Stanley</h6>
                    <p class="text-muted mb-0">Hello?</p>
                  </div></a></li>
              <li class="media"><a href="javascript:;" class="conversation-toggle">
                  <div class="media-left avatar"><img src="../../build/images/users/08.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Jonathan Castro</h6>
                    <p class="text-muted mb-0">OK. Thanks.</p>
                  </div>
                  <div class="media-right"><span class="badge bg-danger">1</span></div></a></li>
              <li class="media"><a href="javascript:;" class="conversation-toggle">
                  <div class="media-left avatar"><img src="../../build/images/users/09.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Denise Rose</h6>
                    <p class="text-muted mb-0">Bye bye.</p>
                  </div></a></li>
              <li class="media"><a href="javascript:;" class="conversation-toggle">
                  <div class="media-left avatar"><img src="../../build/images/users/10.jpg" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
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
            <div class="media-left avatar"><img src="../../build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
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
            <div class="media-right avatar"><img src="../../build/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
          </li>
          <li class="media">
            <div class="media-left avatar"><img src="../../build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
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
            <div class="media-right avatar"><img src="../../build/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
          </li>
          <li class="media">
            <div class="media-left avatar"><img src="../../build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
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
            <div class="media-right avatar"><img src="../../build/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
          </li>
          <li class="media">
            <div class="media-left avatar"><img src="../../build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
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
            <div class="media-right avatar"><img src="../../build/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
          </li>
          <li class="media">
            <div class="media-left avatar"><img src="../../build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
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
            <div class="media-right avatar"><img src="../../build/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
          </li>
          <li class="media">
            <div class="media-left avatar"><img src="../../build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
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
    <!-- Morris Chart-->
    <script type="text/javascript" src="../../plugins/morris.js/morris.min.js"></script>
    <script type="text/javascript" src="../../plugins/raphael/raphael-min.js"></script>
    <!-- Custom JS-->
    <script type="text/javascript" src="../../build/js/layout/app.js"></script>
    <script type="text/javascript" src="../../build/js/layout/demo.js"></script>
    <script type="text/javascript" src="../../build/js/page-content/charts/morris-charts.js"></script>
  </body>
</html>