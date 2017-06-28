//user
  
var idToUpdate; 
$(document).ready(function(){
    loadUser();
});

 $("#btnInsert").click(function(){
        var formData = new FormData(document.getElementById("UserForm")); 
        var route = "/user";
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
            document.getElementById("profilphoto").value = '';
            document.getElementById("name").value = '';
            document.getElementById("firstlastname").value = '';
            document.getElementById("secondlastname").value = '';
            document.getElementById("email").value = '';
            document.getElementById("password").value = '';
            loadUser();
            
 });
  $("#btnUpdate").click(function(){
       alert(document.getElementById("profilphoto").value);
        var formData = new FormData(document.getElementById("UserForm")); 
        var route = "/user";
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
            document.getElementById("profilphoto").value = '';
            document.getElementById("name").value = '';
            document.getElementById("firstlastname").value = '';
            document.getElementById("secondlastname").value = '';
            document.getElementById("email").value = '';
            document.getElementById("password").value = '';
        loadUser();
 });
  
    /*metodo para almacenar la informacion de la actividad*/
    function loadUser(){
        var tdatos = $("#tDatos"); 
        var route = "/users";
        
     $.get(route, function(res){
        splitDataUsers(res);
     });  
    
    }/*end of the method*/
    
    /*metodo para construir la informacion de la categoria*/
function splitDataUsers(users){
        var name, email,password,firstlastname,secondlastname, profilphoto;
        var innerHtml=" <tr><th>Email</th><th>Nombre</th><th>Primer Ap</th><th>Segundo Ap</th><th>Contrasena</th><th>Foto</th><th>Actualizar</th><th>Eliminarar</th></tr>";
        /*se recorre el array de categorias*/
        for (var i = 0; i < users.length; i++) {
            innerHtml+="";
            /*se obtiene el id y nombre de la categoria en proceso*/
            name=users[i].name; 
            email=users[i].email;                   
            password=users[i].password;                   
            firstlastname=users[i].firstlastname;                   
            secondlastname=users[i].secondlastname;                   
            profilphoto=users[i].profilphoto;                  
            
            /*se construye el html*/
            innerHtml += "<tr >"+
                          "<td>"+email+"</td>"+
                          "<td >"+name+"</td>"+
                          "<td >"+firstlastname+"</td>"+
                          "<td >"+secondlastname+"</td>"+
                          "<td >"+password+"</td>"+
                          "<td >"+profilphoto+"</td>"+
                          "<td><button id='"+email+"' onclick='return alterHtmlUser(this)' class='edit-modal btn btn-info' data-id='"+email+"'"+
                                  "data-name='"+name+"'>"+
                                  "<span class='glyphicon glyphicon-edit'></span> Editar"+
                          "</button> </td>"+                          
                          "<td><button id='"+email+"' value='"+name+"' onclick='return deleteUser(this)' class='delete-modal btn btn-danger' data-id='"+email+"'"+
                                  "data-name='"+name+"'>"+
                                  "<span class='glyphicon glyphicon-trash'></span> Eliminar"+
                          "</button></td>"+                              
                          "</tr> ";
        }/*fin del for*/
        innerHtml+="";
        
        $("#tDatos").empty().html(innerHtml);
    }/*end of the method*/  
    
    
    /*metodo mostrar y ocultar informacion segun el boton a presionar*/
   function alterHtmlUser(email_){  
         var route = "/users";
       
        
     $.get(route, function(res){
         $(res).each(function(i,item){
            if(item.email==email_.id){
              document.getElementById("email").value = item.email;
              document.getElementById("name").value = item.name;
              document.getElementById("firstlastname").value = item.firstlastname;
              document.getElementById("secondlastname").value = item.secondlastname;
              document.getElementById("password").value = item.password;
              document.getElementById("profilphoto").value = item.profilphoto;
             
            }
        });
     });   
          document.getElementById('btnUpdate').style.display = 'block';
          document.getElementById('btnInsert').style.display = 'none';
   
    }/*fin del metodo*/
     /*metodo para eliminar la informacion del provedor*/
    function deleteUser(email_){
        var route = "duser/?email="+email_.id+"";
        
     $.get(route, function(){
       
     });  
            loadUser(); 
    }/*end of the method delete provedores*/
    
