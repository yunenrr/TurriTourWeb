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
                                <form role="form">
                                       <div class="form-group">
                                         <div class="form-group">
                                            <label>Nombre</label>
                                            <input class="form-control" id="nameCategoryPlace">                                            
                                         </div>
                                         <div class="form-group">
                                            <label>Descripción</label>
                                            <textarea class="form-control" rows="3" id="descriptionCategoryPlace"></textarea>
                                         </div>                                                                                     
                                        </div>  
                                        <button type="submit" id="btnSaveCategoryPlace" class="btn btn-primary" onclick="return saveCategoryPlace()">Guardar</button> 
                                        <button type="submit" id="btnUpdateCategoryPlace" class="btn btn-primary" onclick="return updateCategoryPlace()" style="display:none;">Actualizar</button>                                     
                                    </form>                                    
                                </div>
                                <div class="col-lg-6">
                                <form role="form">
                                       <div class="form-group">                                         
                                            <label>Imagen de Categoria</label>
                                              <img src='assets/img/log.png' border='0' width='40%' height='40%'>
                                             <input type="file">                                     
                                        </div>  
                                                                          
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
                                            <th>Nombre</th>
                                            <th>Descripcion</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Hoteles</td>
                                            <td>Los mejores lugares para hospedarse</td>
                                            
                                            <td><a href="#" class="btn btn-primary" onclick="return chargerCategoryPlaceDates();">Actualizar</a></td>
                                            <td><a href="#" class="btn btn-primary"onclick="return deleteCategoryPlace();">Eliminar</a></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Parque Nacional</td>
                                            <td>Lugares de reserver biologica y cultural</td>
                                            <td><a href="#" class="btn btn-primary" onclick="return chargerCategoryPlaceDates();">Actualizar</a></td>
                                            <td><a href="#" class="btn btn-primary" onclick="return deleteCategoryPlace();">Eliminar</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Restaurantes</td>
                                            <td>Todo tipo de deleites</td>
                                            <td><a href="#" class="btn btn-primary" onclick="return chargerCategoryPlaceDates();">Actualizar</a></td>
                                            <td><a href="#" class="btn btn-primary" onclick="return deleteCategoryPlace();">Eliminar</a></td>
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