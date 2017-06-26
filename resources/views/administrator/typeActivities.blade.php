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
                                <form role="form" id="TypeActivityForm" method="POST">
                                       <div class="form-group">
                                         <div class="form-group">
                                            <label>Tipo de actividad</label>
                                            <input class="form-control" id="name" name="name">                                            
                                         </div>                                                                                                                             
                                        </div>  
                                        <input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button id="btnInsert" class="btn btn-primary" onclick="return saveTypeActivity()" > Guardar</button>
                                        <button id="btnUpdate" style="display:none;" class="btn btn-primary"  onclick="return updateTypeActivity()" >Actualizar</button>
                                                     
                                    </form>                                    
                                </div>
                                 <!--   Basic Table  -->
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table" >
                                        <tr>
                                            <th>#</th>
                                            <th>tipo de actividad</th>
                                            <th>Actualizar</th>
                                             <th>Eliminarar</th>
                                        </tr>
                                        
                                           @foreach($activities as $activity)
                                          <tr class="activity{{$activity->idtypeasctivities}}">
                                              <td>{{$activity->idtypeactivities}}</td>
                                              <td>{{$activity->name}}</td>
                                              <td><button onclick="return alterHtmlTypeActivity({{$activity->idtypeactivities}})" class="edit-modal btn btn-info" data-id="{{$activity->id}}"
                                                      data-name="{{$activity->name}}">
                                                      <span class="glyphicon glyphicon-edit"></span> Edit
                                                  </button>
                                              </td>
                                              <td>
                                                  <button onclick="return deleteTypeActivity({{$activity->idtypeactivities}})" class="delete-modal btn btn-danger" data-id="{{$activity->id}}"
                                                      data-name="{{$activity->name}}">
                                                      <span class="glyphicon glyphicon-trash"></span> Delete
                                                  </button></td>
                                          </tr>
                                          @endforeach
                                            <!--ajax cotent here-->
                                                                          
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