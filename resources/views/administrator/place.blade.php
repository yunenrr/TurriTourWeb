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
                                <form role="form" id="TypeActivityForm" method="POST">
                                         <div class="form-group">
                                            <label>Nombre</label>
                                            <input  class="form-control" id="id" type="hidden" >
                                            <input class="form-control" id="name">                                            
                                         </div>
                                         <div class="form-group">
                                            <label>Información</label>
                                            <textarea class="form-control" rows="5" id="information"></textarea>
                                         </div> 
                                         <div class="form-group">
                                         
                                            <label>Categorias</label>
                                            <select class="form-control" id="idcategories">
                                            
                                                
                                            </select>                                            
                                        </div>  
                                        <div class="form-group">
                                         
                                            <label>Tipos de actividad</label>
                                            <select class="form-control" id="idtypeactivities">
                                               
                                            </select>                                            
                                        </div> 
                                        <div class="form-group">
                                            <label>Slogan</label>
                                            <input class="form-control" id="slogan"> 
                                         </div> 
                                        <div class="form-group">
                                            <label>Costo $</label>
                                            <input class="form-control" id="value"> 
                                         </div>  
                                        <div class="form-group">                                         
                                            <label>Logo</label>
                                              <img src='assets/img/log.png' border='0' width='40%' height='40%'>
                                             <input type="file" id="pathlogo">                                     
                                        </div> 
                                        <div class="form-group">
                                            <label>Link Facebook</label>
                                            <input class="form-control" id="urlfacebook">                                            
                                         </div>                                         
                                         <input  id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <a  id="btnInsert"><i  class="btn btn-primary" >Guardar</i></a>
                                        <a id="btnUpdate" style="display:none;"><i class="btn btn-primary" >Actualizar</i></a>
                                                                      
                                </div>
                               <div class="col-md-6">  
                                                                   
                                        <div id="map" style="max-height: 100%;height: 100%;min-height: 385px;width: auto;"></div>
                                 
                                
                                  <div class="form-group" method="post" > 
                                    <label>Latitud</label>
                                    <input type="text" disabled="true" class="form-control" id="latitude" name="" ="latitude">
                                    <label>Longitud</label>                                    
                                    <input class="form-control" disabled="true" id="longitude" name="longitude">
                                 </div> 
                                 
                                 
                                  <div class="form-group">                                         
                                      <label>Imagen</label>
                                        <img src='assets/img/log.png' border='0' width='40%' height='40%'>
                                       <input type="file" id="pathvideoimage">                                     
                                  </div>    
                                  <div class="form-group">
                                    <label>Link web</label>
                                    <input class="form-control" id="urlweb">                                            
                                 </div> 
                                                     
                               </div>
                               </form> 

                                 <!--   Basic Table  -->
                    <div class="panel panel-default" >
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table" id="tDatos">
                                  
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
                @section('scripts')
                   <script src="js/functionsPlaces.js"></script>
                 @endsection