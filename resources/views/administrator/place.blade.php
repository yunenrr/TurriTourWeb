@extends('administrator.index')

@section('body')
                 <!-- /. ROW  hh-->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Mantenimiento de lugares
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <form role="form">
                                         <div class="form-group">
                                            <label>Nombre</label>
                                            <input class="form-control">                                            
                                         </div>
                                         <div class="form-group">
                                            <label>Información</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                         </div> 
                                         <div class="form-group">
                                         
                                            <label>Caracteristicas</label>
                                            <select class="form-control">
                                                <option>caracteristica 1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>                                            
                                        </div>  
                                        <div class="form-group">                                         
                                            <label>Logo</label>
                                              <img src='assets/img/log.png' border='0' width='40%' height='40%'>
                                             <input type="file">                                     
                                        </div> 
                                        <div class="form-group">
                                            <label>Link Facebook</label>
                                            <input class="form-control">                                            
                                         </div>
                                         <div class="form-group">
                                            <label>Link web</label>
                                            <input class="form-control">                                            
                                         </div> 
                                        <button type="submit" class="btn btn-primary">Button</button>                                     
                                    </form>                                    
                                </div>
                               <div class="col-md-6">
                               <!--   Basic Table  -->                                 
                                   <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d7889.40621095499!2d-70.23299216136742!3d8.624475075086659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d8.626995899999999!2d-70.2301559!5e0!3m2!1ses-419!2sve!4v1456756695234" style="border:0" allowfullscreen="" frameborder="0" height="100%" width="100%"></iframe>
                               <fieldset disabled="">
                                  <div class="form-group">
                                    <label>Latitud</label>
                                    <input class="form-control">
                                    <label>Longitud</label>                                    
                                     <input class="form-control">
                                 </div> 
                                 </fieldset>                         
                               </div>
                                 <!--   Basic Table  -->
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Caracteristicas</th>
                                            <th>Inormacion</th>
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