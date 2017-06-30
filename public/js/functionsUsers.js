//User
  
var idToUpdate; 
$(document).ready(function(){
    loadUser();
});

 $("#btnInsert").click(function(){
        var email=document.getElementById("email").value;
        var password=document.getElementById("password").value;
        var name=document.getElementById("name").value;
        var firstlastname=document.getElementById("firstlastname").value;
        var secondlastname=document.getElementById("secondlastname").value;
        var profilphoto=document.getElementById("ruteimage").value;
        var idroles=document.getElementById("idroles").value;
        var route = "insertuser/?email="+email+"&password="+password+
        "&name="+name+"&firstlastname="+firstlastname+"&secondlastname="+secondlastname+
        "&profilphoto="+profilphoto+"&idroles="+idroles;
     $.get(route, function(){
       
     });  
                 
        document.getElementById("email").value="";
        document.getElementById("password").value="";
        document.getElementById("name").value="";
        document.getElementById("firstlastname").value="";
        document.getElementById("secondlastname").value="";
        document.getElementById("ruteimage").value="";
        document.getElementById("imageview").src='assets/img/log.png';
            loadUser();
            
 });
  $("#btnUpdate").click(function(){
       var email=document.getElementById("email").value;
        var password=document.getElementById("password").value;
        var name=document.getElementById("name").value;
        var firstlastname=document.getElementById("firstlastname").value;
        var secondlastname=document.getElementById("secondlastname").value;
        var profilphoto=document.getElementById("ruteimage").value;
        var idroles=document.getElementById("idroles").value;
        var route = "updateuser/?email="+email+"&password="+password+
        "&name="+name+"&firstlastname="+firstlastname+"&secondlastname="+secondlastname+
        "&profilphoto="+profilphoto+"&idroles="+idroles;
     $.get(route, function(){
       
     });  
                 
        document.getElementById("email").value="";
        document.getElementById("password").value="";
        document.getElementById("name").value="";
        document.getElementById("firstlastname").value="";
        document.getElementById("secondlastname").value="";
        document.getElementById("ruteimage").value="";
        document.getElementById("imageview").src='assets/img/log.png';
        document.getElementById('btnUpdate').style.display = 'none';
        document.getElementById('btnInsert').style.display = 'block'; 
            loadUser();
 });
  
    /*metodo para almacenar la informacion de la actividad*/
    function loadUser(){
        var tdatos = $("#tDatos"); 
        var route = "/allusers";
        
     $.get(route, function(res){
        splitDataUsers(res);
     });  
    
    }/*end of the method*/
    
    /*metodo para construir la informacion de la categoria*/
function splitDataUsers(users){
        var name, idusers;
        var innerHtml=" <tr><th>Nombre</th><th>Primer Ap</th><th>segundo Ap</th><th>Email</th><th>contrasena</th><th>Imagen</th><th>Roll</th><th>Actualizar</th><th>Eliminarar</th></tr>";
        /*se recorre el array de categorias*/
        for (var i = 0; i < users.length; i++) {
            innerHtml+="";
            /*se obtiene el id y nombre de la categoria en proceso*/
            email=users[i].email; 
            password=users[i].password; 
            name=users[i].name;                   
            firstlastname=users[i].firstlastname;                   
            secondlastname=users[i].secondlastname;                   
            idroles=users[i].idroles;                   
            profilphoto=users[i].profilphoto;                   
            
            /*se construye el html*/
            innerHtml += "<tr >"+
                          "<td >"+name+"</td>"+
                          "<td >"+firstlastname+"</td>"+
                          "<td >"+secondlastname+"</td>"+
                          "<td >"+email+"</td>"+
                          "<td >"+password+"</td>"+
                          "<td><img src='"+profilphoto+"' border='0' width='40m' height='40m' id='imageview'></td>"+
                          "<td >"+idroles+"</td>"+
                         "<td><button id='"+email+"'onclick='return alterHtmlUser(this)' class='edit-modal btn btn-info' data-id='"+email+"'"+
                                  "data-name='"+name+"'>"+
                                  "<span class='glyphicon glyphicon-edit'></span> Editar"+
                          "</button> </td>"+                          
                          "<td><button id='"+email+"' onclick='return deleteUser(this)' class='delete-modal btn btn-danger' data-id='"+email+"'"+
                                  "data-name='"+name+"'>"+
                                  "<span class='glyphicon glyphicon-trash'></span> Eliminar"+
                          "</button></td>"+                              
                          "</tr> ";
        }/*fin del for*/
        innerHtml+="";
        
        $("#tDatos").empty().html(innerHtml);
    }/*end of the method*/  
    
    
    /*metodo mostrar y ocultar informacion segun el boton a presionar*/
   function alterHtmlUser(id){  
     
        var route = "/allusers";      
        
     $.get(route, function(res){
         $(res).each(function(i,item){
            if(item.email==id.id){              
               document.getElementById("email").value=item.email;
              document.getElementById("password").value=item.password;
              document.getElementById("name").value=item.name;
              document.getElementById("firstlastname").value=item.firstlastname;
              document.getElementById("secondlastname").value=item.secondlastname;
              document.getElementById("idroles").value=item.idroles;
              document.getElementById("ruteimage").value=item.profilphoto;
              document.getElementById("imageview").src=item.profilphoto;
            }
        });
     });   
          document.getElementById('btnUpdate').style.display = 'block';
          document.getElementById('btnInsert').style.display = 'none';
    }/*fin del metodo*/
     /*metodo para eliminar la informacion del provedor*/
    function deleteUser(idusers_){
        var route = "deleteuser/?email="+idusers_.id+"";
        
     $.get(route, function(){
       
     });  
            loadUser(); 
    }/*end of the method delete provedores*/
    

    $("#file").change(function() {
      
        var formData = new FormData($("#UserForm")[0]);
           
            var ruta = "uploadImage.php";
            $.ajax({
                url: ruta,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(datos)
                {
                    document.getElementById("imageview").src=datos;
                    document.getElementById("ruteimage").value=datos;
                }
            });       
         
    });
    
