@extends('administrador.index')

@section('body')

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Inicio
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Inicio</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-desktop"></i> 
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Main jumbotron for a primary marketing message or call to action -->
                <div class="jumbotron">
                    <h1>Sistema de administración de Turri Tuor</h1>
                    <p>Este sistema de información tiene la  finalidad de apoyarle tanto en la integración como en la
                     moficacion y eliminación de datos para la pagina de turri tour</p>
                    
                    <p><a href="#" class="btn btn-primary btn-lg" role="button">Conocer más&raquo;</a>
                    </p>
                </div>

                <div class="page-header">
                    <h1>Contenidos</h1>
                </div>
                <p>
                    <a href="ModuleProduct/moduleproduct.php"><button type="button" class="btn btn-lg btn-primary">Productos</button></a>
                    <a href="ModuleProduct/modulecategory.php"><button type="button" class="btn btn-lg btn-success">Categorias</button></a>
                    <a href="ModuleProduct/moduleCharacteristic.php"><button type="button" class="btn btn-lg btn-info">Caracteristicas</button></a>
                    <a href="ModuleProduct/moduleUbication.php"><button type="button" class="btn btn-lg btn-warning">Ubicaciones</button></a>
                     <a href="ModuleProduct/moduleunit.php"> <button type="button" class="btn btn-lg btn-danger">Medidas</button></a>
                </p>
                <p>
                     <a href="ModuleEmployee/moduleemployee.php"> <button type="button" class="btn btn-primary">Empleados</button></a>
                     <a href="ModuleEmployee/moduleprofile.php"> <button type="button" class="btn btn-success">Perfile</button></a>
                     <a href="ModuleEmployee/modulerole.php"> <button type="button" class="btn btn-info">Roles</button></a>
                     <a href="ModuleEmployee/modulelicence.php"> <button type="button" class="btn btn-warning">Licencias</button></a>
                
                    
                </p>
                <p>
                   <a href="ModuleTransport/moduleTransport.php"><button type="button" class="btn btn-sm btn-primary">Transporte</button></a>
                   <a href="ModuleTransport/modulevehicle.php"><button type="button" class="btn btn-sm btn-success">Vehiculos</button></a>
                   <a href="ModuleTransport/moduleroad.php"><button type="button" class="btn btn-sm btn-info">Rutas</button></a>
                   <a href="ModuleActive/moduleActive.php"><button type="button" class="btn btn-sm btn-warning">Activos</button></a>
                </p>
               
               
        <!-- /#page-wrapper -->
        </div>

   @endsection