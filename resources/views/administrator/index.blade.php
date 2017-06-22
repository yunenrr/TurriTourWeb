<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrador TURRI TOUR</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    
</head>

<body >
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="row">
                  <img src='img/gallery/logo.png' border='0' width='70%' height='50%' href="/administrator">
                </div>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="">  <img src="{{URL::asset('img/gallery/foto.jpg')}}" height="75" width="75" alt="image description">
                                <span class="text">Sophía</span></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">   
                        <li><a href="/"><i class="fa fa-sign-in fa-fw"></i> Principal</a></li>                     
                        <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Salir</a></li>
                    </ul>
                    <!-- -->
                </li>
                <!---->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="/administrator"><i class="fa fa-dashboard"></i> Inicio</a>
                    </li>
                    <li>
                        <a href="/user" onclick=""><i class="fa fa-desktop"></i>Usuarios</a>
                    </li>
                    <li>
                        <a href="/place" onclick=""><i class="fa fa-bar-chart-o"></i>Lugares</a>
                    </li>
                    <li>
                        <a href="/activity" onclick=""><i class="fa fa-table"></i>Tipos de actividad</a>
                    </li> 
                    <li>
                        <a href="/categoryPlaces" onclick=""><i class="fa fa-table"></i>Categoria de Lugar</a>
                    </li> 
                                                         
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">

                <!-- /. contenedor -->
                @yield('body')

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <script src="js/functionsAdmin.js"></script>
    <script src="js/functionsMapAdmin.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>