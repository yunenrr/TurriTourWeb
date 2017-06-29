@extends('administrator.index')

@section('body')
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Mantenimiento de categorias para determinados lugares
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <form role="form" id="CategoryForm" method="POST">
                                       <div class="form-group">
                                         
                                            <label>Nombre</label>
                                            <input  class="form-control" id="id" type="hidden" >
                                            <input class="form-control" id="name">                                        
                                                                              
                                                                               
                                            <label>Imagen de Categoria</label>
                                              <img src='assets/img/log.png' border='0' width='40%' height='40%' id="imageview">
                                             <input type="file" id="pathimage" >                                     
                                                                                                                           
                                        </div>  
                                        <input  id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <a  id="btnInsert"><i  class="btn btn-primary" >Guardar</i></a>
                                        <a id="btnUpdate" style="display:none;"><i class="btn btn-primary" >Actualizar</i></a>
                                        <input  class="form-control" id="img"  >
                                     </form>                                    
                                </div>
                               
                                <!--   Basic Table  -->
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table" id="tDatos">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Imagen</th>
                                            
                                        </tr>
                                    </thead>
                                   
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
                <script src="js/functionsCategories.js"></script>
                @endsection

            
                   
               