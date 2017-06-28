  /**
Función que llena el filtro de categorías
*/
function fillStartPoints()
{
  $.ajax
  (
    {
      type:'GET',
      url:'/api/getstartpoints',
      beforeSend: function () {},
      success:function(data)
      {
        var answer = '';

        //Recorremos los datos
        for(position in data)
        {
          current = data[position];
          answer += '<li>'+
            '<label for="checkStartPoint'+current.name+'" class="custom-checkbox">'+
            '<input id="checkCtaegory'+current.name+'" type="checkbox">'+
            '<span class="check-input"></span>'+
            '<span class="check-label">'+current.name+'</span>'+
            '</label>'+
            '</li>';
        }//Fin del for
        $("#ulStartPoint").append(answer);
      }
    }
  );
}//Fin de la función