//place
  
var idToUpdate; 
$(document).ready(function(){
    loadPlace();
    loadCategories();
    loadtypeactivities();
});

 $("#btnInsert").click(function(){
         alert($("#idtypeactivities").val());
        var name=document.getElementById("name").value;
        var latitude= document.getElementById("latitude").value ;
        var longitude= document.getElementById("longitude").value;
        var information=document.getElementById("information").value;
        var idcategories=document.getElementById("idcategories").value;
        var idtypeactivity=document.getElementById("idtypeactivities").value;
       
        var slogan=document.getElementById("slogan").value;
        var value=document.getElementById("value").value;
        var urlfacebook=document.getElementById("urlfacebook").value;
        var urlweb=document.getElementById("urlweb").value;
        var pathvideoimage=document.getElementById("pathvideoimage").value;
        var pathlogo=document.getElementById("pathlogo").value;
      

        var route = "insertplace/?name="+name+
        "&latitude="+latitude+"&longitude="+longitude+"&information="+information+
        "&idcategories="+idcategories+"&idtypeactivity="+idtypeactivity+
        "&slogan="+slogan+"&value="+value+"&urlfacebook="+urlfacebook+"&urlweb="+urlweb+
        "&pathvideoimage="+pathvideoimage+"&pathlogo="+pathlogo;
        
     $.get(route, function(){
       
     });  
   
       
          document.getElementById("name").value = '';
          document.getElementById("latitude").value = '';
          document.getElementById("longitude").value = '';
          document.getElementById("information").value = '';
          document.getElementById("idcategories").value = '';
          document.getElementById("idtypeactivities").value = '';
          document.getElementById("slogan").value = '';
          document.getElementById("value").value = '';
          document.getElementById("urlfacebook").value = '';
          document.getElementById("urlweb").value ='';
        loadPlace();
            
 });
  $("#btnUpdate").click(function(){
        var id=document.getElementById("id").value;
        alert(id);
        var name=document.getElementById("name").value;
        var latitude= document.getElementById("latitude").value ;
        var longitude= document.getElementById("longitude").value;
        var information=document.getElementById("information").value;
        var idcategories=document.getElementById("idcategories").value;
        var idtypeactivity=document.getElementById("idtypeactivities").value;
        var slogan=document.getElementById("slogan").value;
        var value=document.getElementById("value").value;
        var urlfacebook=document.getElementById("urlfacebook").value;
        var urlweb=document.getElementById("urlweb").value;
        var pathvideoimage=document.getElementById("pathvideoimage").value;
        var pathlogo=document.getElementById("pathlogo").value;
        var formData = new FormData(document.getElementById("PlaceForm")); 
        var route = "updateplace/?id="+id+"&name="+name+
        "&latitude="+latitude+"&longitude="+longitude+"&information="+information+
        "&idcategories="+idcategories+"&idtypeactivity="+idtypeactivity+
        "&slogan="+slogan+"&value="+value+"&urlfacebook="+urlfacebook+"&urlweb="+urlweb+
        "&pathvideoimage="+pathvideoimage+"&pathlogo="+pathlogo;
        
     $.get(route, function(){
       
     });  
   
       
          document.getElementById("name").value = '';
          document.getElementById("latitude").value = '';
          document.getElementById("longitude").value = '';
          document.getElementById("information").value = '';
          document.getElementById("idcategories").value = '';
          document.getElementById("idtypeactivities").value = '';
          document.getElementById("slogan").value = '';
          document.getElementById("value").value = '';
          document.getElementById("urlfacebook").value = '';
          document.getElementById("urlweb").value ='';
        loadPlace();
 });
  
    /*metodo para almacenar la informacion de la actividad*/
    function loadPlace(){
        var tdatos = $("#tDatos"); 
        var route = "/allplaces";
        
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
        var route = "/allplaces";
        
        
     $.get(route, function(res){
         $(res).each(function(i,item){
            if(item.idnodes==id){              
              document.getElementById("id").value = item.idnodes;
              document.getElementById("name").value = item.name;
              document.getElementById("latitude").value = item.latitude;
              document.getElementById("longitude").value = item.longitude;
              document.getElementById("information").value = item.information;
              document.getElementById("idcategories").value = item.idcategories;
              document.getElementById("idtypeactivities").value = item.idtypeactivity;
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
    function deletePlace(idnodes_){
        
        var route = "deleteplace/?id="+idnodes_+"";
        
     $.get(route, function(){
       
     });  
            loadPlace(); 
    }/*end of the method delete provedores*/
    /*metodo para almacenar la informacion de la actividad*/
    function loadCategories(){
       var route = "/allcategories";
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
        var route = "/allactivities";
        var innerHtml="";
        $.get(route, function(res){
         $(res).each(function(i,item){
            innerHtml+="";
            innerHtml += " <option value='"+item.idtypeactivity+"'>"+item.name+"</option>";
            $("#idtypeactivities").html(innerHtml);
     });
     });  
    }/*end of the method*/

