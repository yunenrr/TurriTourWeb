/**
Función que llena el filtro de categorías
*/
function fillFilterOptions()
{
	$.ajax
	(
		{
			type:'GET',
			url:'/api/allcategory',
			beforeSend: function () {},
			success:function(data)
			{
				var answer = '';

				//Recorremos los datos
				for(position in data)
				{
					current = data[position];
					answer += '<li>'+
						'<label for="checkCtaegory'+current.idcategories+'" class="custom-checkbox">'+
						'<input id="checkCtaegory'+current.idcategories+'" type="checkbox">'+
						'<span class="check-input"></span>'+
						'<span class="check-label">'+current.name+'</span>'+
						'</label>'+
						'</li>';
				}//Fin del for
				$("#ulFilterCategory").append(answer);
			}
		}
	);
}//Fin de la función