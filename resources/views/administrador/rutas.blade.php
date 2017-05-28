@extends('administrador.index')

@section('body')
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Mantenimiento de rutas
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <form role="form">
                                       <div class="form-group">
                                         <label>Actividad</label>
                                            <select class="form-control">
                                                <option>actividad 1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                         <div class="form-group">
                                            <label>Duracion: minutos</label>
                                            <input class="form-control">                                            
                                         </div>
                                         <div class="form-group">
                                            <label>Distancia: Km</label>
                                            <input class="form-control">
                                         </div>
                                         <div class="form-group">
                                            <label>Valor: $</label>
                                            <input class="form-control">
                                        </div>
                                        <label>Información</label>
                                        <div class="form-group input-group">
                                             <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                                                                  
                                        </div>  
                                        <button type="submit" class="btn btn-primary">Button</button>                                     
                                    </form>                                    
                                </div>
                               <div class="col-md-6">
                     <!--   Basic Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Table
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                            <th>Actualizar</th>
                                             <th>Eliminarar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td><a href="#" class="btn btn-primary">Actualizar</a></td>
                                            <td><a href="#" class="btn btn-primary">Eliminar</a></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                            <td><a href="#" class="btn btn-primary">Actualizar</a></td>
                                            <td><a href="#" class="btn btn-primary">Eliminar</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                            <td><a href="#" class="btn btn-primary">Actualizar</a></td>
                                            <td><a href="#" class="btn btn-primary">Eliminar</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                      <!-- End  Basic Table  -->
                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
                @endsection