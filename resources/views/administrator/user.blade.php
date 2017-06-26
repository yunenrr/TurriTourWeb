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
                              <form method="POST" action="api/userstore">
                                <div class="col-lg-6">
                                    <div class="form-group">                                         
                                        <label>Foto</label>
                                          <img src='assets/img/log.png' border='0' width='40%' height='40%'>
                                         <input type="file" name="profilphoto">                                     
                                   </div> 
                                    <div class="form-group">                                       
                                            <label>Roll</label>
                                            <select class="form-control" id="idroles" name="idroles">
                                                <option value="1">Administrador</option>
                                                <option value="2">Cliente</option>                                                
                                            </select>                                            
                                        </div>  
                                         <input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" id="btnSaveUser" class="btn btn-primary" >Guardar</button> 
                                        <button type="submit" id="btnUpdateUser" class="btn btn-primary" onclick="return updateUser();" style="display:none;">Actualizar</button>                                     
                                                                     
                                    </div>
                                                                  
                                    <div class="col-lg-6">
                                     <form role="form"> 
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
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Apellido 1</th>
                                            <th>Apellido 2</th>
                                            <th>Correo</th>
                                            <th>Roll</th>
                                            <th>Actualizar</th>
                                             <th>Eliminarar</th>
                                        </tr>
                                    </thead>
                                  
                                  
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