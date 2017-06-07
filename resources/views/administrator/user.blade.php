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
                                <div class="col-lg-6">
                                <form role="form">
                                    <div class="form-group">
                                         <div class="form-group">
                                            <label>Nombre</label>
                                            <input class="form-control" id="nameUser">                                            
                                         </div>
                                         <div class="form-group">
                                            <label>Primer Apellido</label>
                                            <input class="form-control" id="firstname1User">
                                         </div>
                                         <div class="form-group">
                                            <label>Seguntdo Apellido</label>
                                            <input class="form-control" id="firstname2User">
                                        </div>
                                    </div>
                                    </form>
                                    <button type="submit" id="btnSaveUser" class="btn btn-primary" onclick="return saveUser();">Guardar</button> 
                                    <button type="submit" id="btnUpdateUser" class="btn btn-primary" onclick="return updateUser();" style="display:none;">Actualizar</button>                                     
                                    
                                    </div>
                                    <div class="col-lg-6">
                                     <form role="form"> 
                                      <div class="form-group">
                                       <label>Correo</label>
                                        <div class="form-group input-group" >                                           
                                            <span class="input-group-addon">@</span>
                                            <input type="text" class="form-control" id="emailUser"  placeholder="ejemplo@dominio.com">
                                        </div>
                                        <div class="form-group">
                                            <label>Contraseña</label>
                                            <input class="form-control" placeholder="*************" id="passUser">
                                        </div>
                                            <label>Roll</label>
                                            <select class="form-control" id="rollUser">
                                                <option>Administrador</option>
                                                <option>Cliente</option>                                                
                                            </select>                                            
                                        </div>  
                                  </form>                                    
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
                                    <tbody>
                                         @foreach ($users as $user => $user)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->password }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->firstlastname }}</td>
                                            <td>{{ $user->secondlastname }}</td>
                                            <td>{{ $user->profilephoto }}</td>
                                            <td>{{ $user->idroles }}</td>
                                            <td>
                                               
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {!! $items->render() !!}
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