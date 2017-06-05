@extends('administrator.index')

@section('body')
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Mantenimiento de tipos de actividades
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <form role="form">
                                       <div class="form-group">
                                         <div class="form-group">
                                            <label>Tipo de actividad</label>
                                            <input class="form-control" id="nameTypeActivity">                                            
                                         </div>
                                         <div class="form-group">
                                            <label>Descripción</label>
                                            <textarea class="form-control" rows="3" id="descriptionTypeActivity"></textarea>
                                         </div>                                                                                     
                                        </div>  
                                        <button type="submit" id="btnSaveTypeActivity" class="btn btn-primary" onclick="return saveTypeActivity();">Guardar</button> 
                                        <button type="submit" id="btnUpdateTypeActivity" class="btn btn-primary" onclick="return updateTypeActivity();" style="display:none;">Actualizar</button>                                     
                                    </form>                                    
                                </div>
                                 <!--   Basic Table  -->
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>tipo de actividad</th>
                                            <th>Descripcion</th>
                                            <th>Actualizar</th>
                                             <th>Eliminarar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Senderismo</td>                                           
                                            <td>Senderismo de montaña</td>
                                            <td><a href="#" class="btn btn-primary" onclick="return chargerTypeActivityDates();">Actualizar</a></td>
                                            <td><a href="#" class="btn btn-primary" onclick="return deleteTypeActivity();">Eliminar</a></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                           
                                            <td>Kayak</td>
                                            <td>Actividad de adrenalina pura</td>
                                            <td><a href="#" class="btn btn-primary" onclick="return chargerTypeActivityDates();">Actualizar</a></td>
                                            <td><a href="#" class="btn btn-primary" onclick="return deleteTypeActivity();">Eliminar</a></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                      <!-- End  Basic Table  -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
                @endsection