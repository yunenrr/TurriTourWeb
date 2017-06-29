//category
  
var idToUpdate; 
$(document).ready(function(){
    loadCategory();
});

 $("#btnInsert").click(function(){

        var formData = new FormData(document.getElementById("CategoryForm")); 
        var route = "/icategoryPlace";
        
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
           document.getElementById("img").value = '';
            loadCategory();
            
 });
  $("#btnUpdate").click(function(){
        
        var formData = new FormData(document.getElementById("CategoryForm")); 
        var route = "categoryPlace";
        
        $.ajax({
        url : route,
        type : "PUT",
        dataType : "json",
        data : formData,
        cache : false,
        contentType : false,
        processData : false,
        
        });
        document.getElementById('btnUpdate').style.display = 'none';
        document.getElementById('btnInsert').style.display = 'block'; 
        document.getElementById("name").value = '';
        document.getElementById("img").value = '';
        loadCategory();
 });
  
    /*metodo para almacenar la informacion de la actividad*/
    function loadCategory(){
        var tdatos = $("#tDatos"); 
        var route = "/categories";
        
     $.get(route, function(res){
        splitDatacategories(res);
     });  
    
    }/*end of the method*/
    
    /*metodo para construir la informacion de la categoria*/
function splitDatacategories(categories){
        var name, idcategories;
        var innerHtml=" <tr><th>#</th><th>Nombre</th><th>Imagen</th><th>Actualizar</th><th>Eliminarar</th></tr>";
        /*se recorre el array de categorias*/
        for (var i = 0; i < categories.length; i++) {
            innerHtml+="";
            /*se obtiene el id y nombre de la categoria en proceso*/
            name=categories[i].name; 
           pathimage=categories[i].pathimage; 
            idcategories=categories[i].idcategories;                   
            
            /*se construye el html*/
            innerHtml += "<tr >"+
                          "<td >"+idcategories+"</td>"+
                          "<td id='"+idcategories+"name' value='"+name+"'>"+name+"</td>"+
                          "<td><img src='"+pathimage+"' border='0' width='40m' height='40m' id='imageview'></td>"+
                         "<td><button   onclick='return alterHtmlCategory("+idcategories+")' class='edit-modal btn btn-info' data-id='"+idcategories+"'"+
                                  "data-name='"+name+"'>"+
                                  "<span class='glyphicon glyphicon-edit'></span> Editar"+
                          "</button> </td>"+                          
                          "<td><button i onclick='return deleteCategory("+idcategories+")' class='delete-modal btn btn-danger' data-id='"+idcategories+"'"+
                                  "data-name='"+name+"'>"+
                                  "<span class='glyphicon glyphicon-trash'></span> Eliminar"+
                          "</button></td>"+                              
                          "</tr> ";
        }/*fin del for*/
        innerHtml+="";
        
        $("#tDatos").empty().html(innerHtml);
    }/*end of the method*/  
    
    
    /*metodo mostrar y ocultar informacion segun el boton a presionar*/
   function alterHtmlCategory(id){  
     
        var route = "/categories";
        
        
     $.get(route, function(res){
         $(res).each(function(i,item){
            if(item.idcategories==id){              
              document.getElementById("id").value = item.idcategories;
              document.getElementById("name").value = item.name;
              document.getElementById("img").value = item.pathimage;
            }
        });
     });   
          document.getElementById('btnUpdate').style.display = 'block';
          document.getElementById('btnInsert').style.display = 'none';
    }/*fin del metodo*/
     /*metodo para eliminar la informacion del provedor*/
    function deleteCategory(idcategories_){
        
        var route = "dcategory/?id="+idcategories_+"";
        
     $.get(route, function(){
       
     });  
            loadCategory(); 
    }/*end of the method delete provedores*/
    

    $("#pathimage").change(function() {
        var rute="img/gallery/foto.jpg"
        document.getElementById("imageview").src=rute;
         document.getElementById("img").value= document.getElementById("pathimage").files[0].name;
    });