//place
  
var idToUpdate; 
$(document).ready(function(){
    loadPlace();
    loadCategories();
    loadtypeactivities();
});

 $("#btnInsert").click(function(){
        var formData = new FormData(document.getElementById("PlaceForm")); 
        var route = "/place";
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
              document.getElementById("id").value = '';
              document.getElementById("name").value = '';
              document.getElementById("latitude").value = '';
              document.getElementById("longitude").value = '';
              document.getElementById("information").value = '';
              document.getElementById("idcategories").value = '';
              document.getElementById("idtypeactivity").value = '';
              document.getElementById("slogan").value = '';
              document.getElementById("value").value = '';
              document.getElementById("urlfacebook").value = '';
              document.getElementById("urlweb").value ='';
            loadPlace();
            
 });
  $("#btnUpdate").click(function(){
        alert(document.getElementById("id").value);
        var formData = new FormData(document.getElementById("PlaceForm")); 
        var route = "/place";
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

        document.getElementById("id").value = '';
        document.getElementById("name").value = '';
        document.getElementById("latitude").value = '';
        document.getElementById("longitude").value = '';
        document.getElementById("information").value = '';
        document.getElementById("idcategories").value = '';
        document.getElementById("idtypeactivity").value = '';
        document.getElementById("slogan").value = '';
        document.getElementById("value").value = '';
        document.getElementById("urlfacebook").value = '';
        document.getElementById("urlweb").value ='';
        loadPlace();
 });
  
    /*metodo para almacenar la informacion de la actividad*/
    function loadPlace(){
        var tdatos = $("#tDatos"); 
        var route = "/places";
        
     $.get(route, function(res){
        splitDataPlaces(res);
     });  
    
    }/*end of the method*/
    
    /*metodo para construir la informacion de la categoria*/
function splitDataPlaces(places){
        var name, idnodes, latitude, longitude,value;
        var innerHtml=" <tr><th>#</th><th>Nombre</th><th>latitud</th><th>Longitud</th><th>Costo</th><th>Actualizar</th><th>Eliminarar</th></tr>";
        /*se recorre el array de categorias*/
        for (var i = 0; i < places.length; i++) {
            innerHtml+="";
            /*se obtiene el id y nombre de la categoria en proceso*/
            name=places[i].name; 
            idnodes=places[i].idnodes;                   
            latitude=places[i].latitude;                   
            longitude=places[i].longitude;                   
            value=places[i].value;                   
            
            /*se construye el html*/
            innerHtml += "<tr >"+
                          "<td>"+idnodes+"</td>"+
                          "<td >"+name+"</td>"+
                          "<td >"+latitude+"</td>"+
                          "<td >"+longitude+"</td>"+
                          "<td >"+value+"</td>"+
                          "<td><button onclick='return alterHtmlPlace("+idnodes+")' class='edit-modal btn btn-info' data-id='"+idnodes+"'"+
                                  "data-name='"+name+"'>"+
                                  "<span class='glyphicon glyphicon-edit'></span> Editar"+
                          "</button> </td>"+                          
                          "<td><button id='"+idnodes+"' value='"+name+"' onclick='return deletePlace("+idnodes+")' class='delete-modal btn btn-danger' data-id='"+idnodes+"'"+
                                  "data-name='"+name+"'>"+
                                  "<span class='glyphicon glyphicon-trash'></span> Eliminar"+
                          "</button></td>"+                              
                          "</tr> ";
        }/*fin del for*/
        innerHtml+="";
        
        $("#tDatos").empty().html(innerHtml);
    }/*end of the method*/  
    
    
    /*metodo mostrar y ocultar informacion segun el boton a presionar*/
   function alterHtmlPlace(id){  
        var route = "/places";
        
        
     $.get(route, function(res){
         $(res).each(function(i,item){
            if(item.idnodes==id){              
              document.getElementById("id").value = item.idnodes;
              document.getElementById("name").value = item.name;
              document.getElementById("latitude").value = item.latitude;
              document.getElementById("longitude").value = item.longitude;
              document.getElementById("information").value = item.information;
              document.getElementById("idcategories").value = item.idcategories;
              document.getElementById("idtypeactivity").value = item.idtypeactivity;
              document.getElementById("slogan").value = item.slogan;
              document.getElementById("value").value = item.value;
              document.getElementById("urlfacebook").value = item.urlfacebook;
              document.getElementById("urlweb").value = item.urlweb;
            }
        });
     });   
          document.getElementById('btnUpdate').style.display = 'block';
          document.getElementById('btnInsert').style.display = 'none';
    }/*fin del metodo*/
     /*metodo para eliminar la informacion del provedor*/
    function deleteCategory(idcategories_){
        
        var route = "http://localhost:8000/dcategory/?id="+idcategories_+"";
        
     $.get(route, function(){
       
     });  
            loadCategory();    
    }/*fin del metodo*/
     /*metodo para eliminar la informacion del provedor*/
    function deletePlace(idnodes_){
        
        var route = "dplace/?id="+idnodes_+"";
        
     $.get(route, function(){
       
     });  
            loadPlace(); 
    }/*end of the method delete provedores*/
    /*metodo para almacenar la informacion de la actividad*/
    function loadCategories(){
       var route = "/categories";
        var innerHtml="";
     $.get(route, function(res){
         $(res).each(function(i,item){
            innerHtml+="";
            innerHtml += " <option value='"+item.idcategories+"'>"+item.name+"</option>";
            $("#idcategories").html(innerHtml);
     }); 
     }); 
   
    }/*end of the method*/
    /*metodo para almacenar la informacion de la actividad*/
    function loadtypeactivities(){
        var route = "/activities";
        var innerHtml="";
        $.get(route, function(res){
         $(res).each(function(i,item){
            innerHtml+="";
            innerHtml += " <option value='"+item.idtypeactivity+"'>"+item.name+"</option>";
            $("#idtypeactivity").html(innerHtml);
     });
     });  
    }/*end of the method*/

