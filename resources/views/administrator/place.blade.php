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
                                            <textarea class="form-control" rows="5"></textarea>
                                         </div> 
                                         <div class="form-group">
                                         
                                            <label>Categorias</label>
                                            <select class="form-control">
                                                <option>Categoria 1</option>
                                                <option>Categoria 2</option>
                                                <option>Categoria 3</option>
                                                <option>Categoria 4</option>
                                                <option>Categoria 5</option>
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

                                        <button type="submit" class="btn btn-primary">Guardar</button>                                     
                                    </form>                                    
                                </div>
                               <div class="col-md-6">
                                  <iframe width="100%" height="160" src="https://www.maps.ie/create-google-map/map.php?width=100%&amp;height=160&amp;hl=en&amp;q=turrialba+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=A&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/it/misura-distanza-area-google-maps.html">Misurare distanze google maps</a></iframe>
                                 <fieldset disabled="false">
                                  <div class="form-group">
                                    <label>Latitud</label>
                                    <input class="form-control">
                                    <label>Longitud</label>                                    
                                     <input class="form-control">
                                 </div> 
                                 </fieldset> 
                                  <div class="form-group">                                         
                                      <label>Video/Imagen</label>
                                        <img src='assets/img/log.png' border='0' width='40%' height='40%'>
                                       <input type="file">                                     
                                  </div>    
                                  <div class="form-group">
                                    <label>Link web</label>
                                    <input class="form-control">                                            
                                 </div>                      
                               </div>

                                 <!--   Basic Table  -->
                    <div class="panel panel-default" >
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Categoria</th>
                                            <th>Informacion</th>
                                            <th>Actualizar</th>
                                             <th>Eliminarar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Parque Nacional Guayabo</td>
                                            <td>Parque Nacional</td>
                                            <td>Recerva Forestal en Turrialba</td>
                                            <td><a href="#" class="btn btn-primary">Actualizar</a></td>
                                            <td><a href="#" class="btn btn-primary">Eliminar</a></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Volcan Turrialba</td>
                                            <td>Parque Nacional</td>
                                            <td>El volcan se encuentra actualmente activo</td>
                                            <td><a href="#" class="btn btn-primary">Actualizar</a></td>
                                            <td><a href="#" class="btn btn-primary">Eliminar</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>La Wagelia</td>
                                            <td>Hoteles</td>
                                            <td>La mejor opción para su permanencia</td>
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