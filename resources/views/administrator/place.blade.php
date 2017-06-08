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
                                            <input class="form-control" id="namePlace">                                            
                                         </div>
                                         <div class="form-group">
                                            <label>Información</label>
                                            <textarea class="form-control" rows="5" id="informationPlace"></textarea>
                                         </div> 
                                         <div class="form-group">
                                         
                                            <label>Categorias</label>
                                            <select class="form-control" id="categoryPlace">
                                                <option>Categoria 1</option>
                                                <option>Categoria 2</option>
                                                <option>Categoria 3</option>
                                                <option>Categoria 4</option>
                                                <option>Categoria 5</option>
                                            </select>                                            
                                        </div>  
                                        <div class="form-group">
                                         
                                            <label>Tipos de actividad</label>
                                            <select class="form-control" id="typeActivityPlace">
                                                <option>Actividad 1</option>
                                                <option>Actividad 2</option>
                                                <option>Actividad 3</option>
                                                <option>Actividad 4</option>
                                                <option>Actividad 5</option>
                                            </select>                                            
                                        </div> 
                                        <div class="form-group">
                                            <label>Slogan</label>
                                            <input class="form-control" id="sloganPlace"> 
                                         </div> 
                                        <div class="form-group">
                                            <label>Costo $</label>
                                            <input class="form-control" id="valuePlace"> 
                                         </div>  
                                        <div class="form-group">                                         
                                            <label>Logo</label>
                                              <img src='assets/img/log.png' border='0' width='40%' height='40%'>
                                             <input type="file">                                     
                                        </div> 
                                        <div class="form-group">
                                            <label>Link Facebook</label>
                                            <input class="form-control" id="linkFacebookPlace">                                            
                                         </div>                                         

                                        <button type="submit" id="btnSavePlace" class="btn btn-primary" onclick="return savePlace();">Guardar</button>
                                        <button type="submit" id="btnUpdatePlace" style="display:none;" onclick="return updatePlace();" class="btn btn-primary">Actualizar</button>                                     
                                    </form>                                    
                                </div>
                               <div class="col-md-6">  
                                                                   
                                        <div id="map" style="max-height: 100%;height: 100%;min-height: 385px;width: auto;"></div>
                                 
                                
                                  <div class="form-group" method="post" action="cargar();"> 
                                    <label>Latitud</label>
                                    <input type="text" disabled="true" class="form-control" id="latitudePlace" name="" ="latitude">
                                    <label>Longitud</label>                                    
                                    <input class="form-control" disabled="true" id="longitudePlace" name="longitude">
                                 </div> 
                                 
                                 
                                  <div class="form-group">                                         
                                      <label>Video/Imagen</label>
                                        <img src='assets/img/log.png' border='0' width='40%' height='40%'>
                                       <input type="file">                                     
                                  </div>    
                                  <div class="form-group">
                                    <label>Link web</label>
                                    <input class="form-control" id="linkWebPlace">                                            
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
                                            <td><a href="#" class="btn btn-primary" onclick="return chargerPlaceDates();">Actualizar</a></td>
                                            <td><a href="#" class="btn btn-primary" onclick="return deletePlace();">Eliminar</a></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Volcan Turrialba</td>
                                            <td>Parque Nacional</td>
                                            <td>El volcan se encuentra actualmente activo</td>
                                            <td><a href="#" class="btn btn-primary" onclick="return chargerPlaceDates();">Actualizar</a></td>
                                            <td><a href="#" class="btn btn-primary" onclick="return deletePlace();">Eliminar</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>La Wagelia</td>
                                            <td>Hoteles</td>
                                            <td>La mejor opción para su permanencia</td>
                                            <td><a href="#" class="btn btn-primary" onclick="return chargerPlaceDates();">Actualizar</a></td>
                                            <td><a href="#" class="btn btn-primary" onclick="return deletePlace();">Eliminar</a></td>
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