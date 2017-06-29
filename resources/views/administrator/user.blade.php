@extends('administrator.index')

@section('body')
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Mantenimiento de usuarios
                        </div>
                        <div class="panel-body">
                            <div class="row">
                              <form role="form" id="UserForm" method="POST">
                                <div class="col-lg-6">
                                    <div class="form-group">                                         
                                        <label>Foto</label>
                                          <img src='assets/img/log.png' border='0' width='40%' height='40%'>
                                         <input type="file" id="profilphoto" >                                     
                                   </div> 
                                    <div class="form-group">                                       
                                            <label>Roll</label>
                                            <select class="form-control" id="idroles" name="idroles">
                                                <option value="1">Administrador</option>
                                                <option value="2">Cliente</option>                                                
                                            </select>                                            
                                        </div>  
                                        <input  id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <a  id="btnInsert"><i  class="btn btn-primary" >Guardar</i></a>
                                        <a id="btnUpdate" style="display:none;"><i class="btn btn-primary" >Actualizar</i></a>
                                                                 
                                    </div>
                                                                  
                                    <div class="col-lg-6">
                                    
                                      <div class="form-group">
                                         <div class="form-group">
                                            <label>Nombre</label>
                                            <input class="form-control" id="name" name="name">                                            
                                         </div>
                                         <div class="form-group">
                                            <label>Primer Apellido</label>
                                            <input class="form-control" id="firstlastname" name="firstlastname">
                                         </div>
                                         <div class="form-group">
                                            <label>Seguntdo Apellido</label>
                                            <input class="form-control" id="secondlastname" name="secondlastname">
                                        </div>  
                                            <label>Correo</label>
                                        <div class="form-group input-group" >                                           
                                            <span class="input-group-addon">@</span>
                                            <input type="text" class="form-control" id="email" name="email"  placeholder="ejemplo@dominio.com">
                                        </div>
                                        <div class="form-group">
                                            <label>Contraseña</label>
                                            <input class="form-control" placeholder="*************" id="password" name="password">
                                        </div>
                                      
                                       </form> 
                                </div>
                                </div>                                     
                                
                               <div class="col-md-12">
                     <!--   Basic Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Registro de usuarios
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table" id="tDatos">
                                    
                                  
                                  
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
                   @section('scripts')
                     <script src="js/functionsUsers.js"></script>
                   @endsection
                  