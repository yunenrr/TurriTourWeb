

//activity
var idToUpdate;      
    /*metodo para almacenar la informacion de la actividad*/
    function saveTypeActivity(){
        
        var formData = new FormData(document.getElementById("TypeActivityForm"));  
        /*se agrega la accion a realizar*/
        formData.append("action", "store");
        
        $.ajax({
        url : "/activity",
        type : "post",
        data : formData,        
        })   
       
        return false;
        
    }/*end of the method*/
    
    /*metodo mostrar y ocultar informacion segun el boton a presionar*/
   function alterHtmlTypeActivity(name_){   
        document.getElementById('btnInsert').style.display = 'none';
        
        document.getElementById('name').value = name_;
       
        document.getElementById('btnUpdate').style.display = 'block';
        return false;
    }/*fin del metodo*/
     /*metodo para eliminar la informacion del provedor*/
    function deleteTypeActivity(id){
         if (confirm("¿Esta apunto de eliminar este provedor = " + id + "?")) {
            $.post("/activity", 
            {
                action: "destroy", 
                id : id
            },
            function(data)
            {             
                
            });
            return false;
    }/*end of the method delete provedores*/
   