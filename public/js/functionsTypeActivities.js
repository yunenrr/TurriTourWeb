//activity
  
var idToUpdate; 
$(document).ready(function(){
    loadTypeActivity();
});

 $("#btnInsert").click(function(){
        var formData = new FormData(document.getElementById("TypeActivityForm")); 
        var route = "/activity";
        /*se agrega la accion a realizar*/
        formData.append("action", "store");
        
        $.ajax({
        url : route,
        type : "post",
        dataType : "json",
        data : formData,
        cache : false,
        contentType : false,
        processData : false,
        
        });            
            document.getElementById("name").value = '';
            loadTypeActivity();
            
 });
  $("#btnUpdate").click(function(){
       
        var formData = new FormData(document.getElementById("TypeActivityForm")); 
        var route = "/activity";
        /*se agrega la accion a realizar*/
        formData.append("action", "update");
        
        $.ajax({
        url : route,
        type : "post",
        dataType : "json",
        data : formData,
        cache : false,
        contentType : false,
        processData : false,
        
        });
        document.getElementById('btnUpdate').style.display = 'none';
          document.getElementById('btnInsert').style.display = 'block';
        document.getElementById("name").value = '';
        loadTypeActivity();
 });
  
    /*metodo para almacenar la informacion de la actividad*/
    function loadTypeActivity(){
        var tdatos = $("#tDatos"); 
        var route = "/activities";
        
     $.get(route, function(res){
        splitDataTypeActivities(res);
     });  
    
    }/*end of the method*/
    
    /*metodo para construir la informacion de la categoria*/
function splitDataTypeActivities(activities){
        var name, idtypeactivities;
        var innerHtml=" <tr><th>#</th><th>tipo de actividad</th><th>Actualizar</th><th>Eliminarar</th></tr>";
        /*se recorre el array de categorias*/
        for (var i = 0; i < activities.length; i++) {
            innerHtml+="";
            /*se obtiene el id y nombre de la categoria en proceso*/
            name=activities[i].name; 
            idtypeactivities=activities[i].idtypeactivities;                   
            
            /*se construye el html*/
            innerHtml += "<tr >"+
                          "<td>"+idtypeactivities+"</td>"+
                          "<td >"+name+"</td>"+
                          "<td><button onclick='return alterHtmlTypeActivity("+idtypeactivities+")' class='edit-modal btn btn-info' data-id='"+idtypeactivities+"'"+
                                  "data-name='"+name+"'>"+
                                  "<span class='glyphicon glyphicon-edit'></span> Editar"+
                          "</button> </td>"+                          
                          "<td><button id='"+idtypeactivities+"' value='"+name+"' onclick='return deleteTypeActivity("+idtypeactivities+")' class='delete-modal btn btn-danger' data-id='"+idtypeactivities+"'"+
                                  "data-name='"+name+"'>"+
                                  "<span class='glyphicon glyphicon-trash'></span> Eliminar"+
                          "</button></td>"+                              
                          "</tr> ";
        }/*fin del for*/
        innerHtml+="";
        
        $("#tDatos").empty().html(innerHtml);
    }/*end of the method*/  
    
    
    /*metodo mostrar y ocultar informacion segun el boton a presionar*/
   function alterHtmlTypeActivity(id){  
         var route = "/activities";
        
        
     $.get(route, function(res){
         $(res).each(function(i,item){
            if(item.idtypeactivities==id){
              document.getElementById("id").value = item.idtypeactivities;
              document.getElementById("name").value = item.name;
             
            }
        });
     });   
          document.getElementById('btnUpdate').style.display = 'block';
          document.getElementById('btnInsert').style.display = 'none';
   
    }/*fin del metodo*/
     /*metodo para eliminar la informacion del provedor*/
    function deleteTypeActivity(idtypeactivities_){
        
        var route = "dactivity/?id="+idtypeactivities_+"";
        
     $.get(route, function(){
       
     });  
            loadTypeActivity(); 
    }/*end of the method delete provedores*/
    
