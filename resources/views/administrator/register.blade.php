@extends('administrator.index')

@section('body')
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Registro de usuario
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <form role="form">
                                       <div class="form-group">
                                         <div class="form-group">
                                            <label>Nombre</label>
                                            <input class="form-control">                                            
                                         </div>
                                         <div class="form-group">
                                            <label>Primer Apellido</label>
                                            <input class="form-control">
                                         </div>
                                         <div class="form-group">
                                            <label>Seguntdo Apellido</label>
                                            <input class="form-control">
                                        </div>
                                        <label>Correo</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="text" class="form-control" placeholder="ejemplo@dominio.com">
                                        </div>
                                        <div class="form-group">
                                            <label>Contraseña</label>
                                            <input class="form-control" placeholder="*************">
                                        </div>
                                                                                 
                                        </div>  
                                        <button type="submit" class="btn btn-primary">Button</button>                                     
                                    </form>                                    
                                </div>
                               <div class="col-md-6">
                     
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