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
                                 <form role="form" id="TypeActivityForm" >
                                       <div class="form-group">
                                            <label>Tipo de actividad</label>
                                            <input  class="form-control" id="id" type="hidden" >
                                            <input class="form-control" id="name" name="name">                                            
                                         </div>  
                                        <input  id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <a  id="btnInsert"><i  class="btn btn-primary" >Guardar</i></a>
                                        <a id="btnUpdate" style="display:none;"><i class="btn btn-primary" >Actualizar</i></a>
                                        
                                    </form>  
                                                                    
                                </div>
                                 <!--   Basic Table  -->
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table" id="tDatos" >
                                                                                                    
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
 @section('scripts')
   <script src="js/functionsTypeActivities.js"></script>
 @endsection