@extends('masterpage.app')

@section('body')
<section class="banner banner-inner parallax" data-stellar-background-ratio="0.5" id="list-view-normal">
<div class="banner-text">
<div class="center-text">
<div class="container">
<h1>Aventuras en Turrialba</h1>
<strong class="subtitle">El Mejor Lugar para Hacer Turismo!</strong>
 
<nav class="breadcrumbs">
<ul>
<li><a href="/">HOME</a></li>
<li><span>Buscar Rutas</span></li>
</ul>
</nav>
</div>
</div>
</div>
</section>

<section class="content-block bg-white">
<div class="container">
<header class="content-heading">
<h2 class="main-heading">Esencial Costa Rica</h2>
<span class="main-subtitle">LA ESENCIA SOS VOS, TODOS SOMOS.</span>
<div class="seperator"></div>
</header>
<div class="adventure-holder gallery-home-holder">
<div class="row">

<div class="col-md-6 text-block">
<div class="centered">
<h2 class="intro-heading">Parámetros de Búsqueda</h2>
<p class="intro">En la presente pantalla usted deberá ingresar una serie de parámetros que permitirán al sistema obtener rutas turísticas que se ajusten a sus deseos.</p>
</div>
</div>

<div class="col-md-6 wow fadeInLeft">
 
<form method="post" class="contact-form has-border" id="contact_form">

{{ csrf_field() }}

<fieldset>
<div class="form-group">
	<div class="col-sm-6">
		<strong class="form-title"><label for="fname">Punto de Partida: </label></strong>
	</div>
	<div class="col-sm-6">
		<div class="input-wrap">
			<div class="form-control" style="background-color: rgb(207, 207, 207);">
				<select class="form-control" id="slStartPoint" name="slStartPoint"></select>
			</div>
		</div>
	</div>
</div>

<div class="form-group">
	<div class="col-sm-6">
	<strong class="form-title"><label for="lname">Tipo de Actividad: </label></strong>
	</div>
	<div class="col-sm-6">
		<div class="input-wrap">
			<div class="form-control" style="background-color: rgb(207, 207, 207);">
			  <select class="form-control" id="slTypeActivity"></select>
			</div>
		</div>
	</div>
</div>


<div class="form-group">
	<div class="col-sm-6">
	<strong class="form-title"><label for="lname">Distancia Máxima: </label></strong>
	</div>
	<div class="col-sm-6">
		<div class="input-wrap">
			<div class="form-control" style="background-color: rgb(207, 207, 207);">
				<select class="form-control" id="slMaxDistance" name="slMaxDistance">
		            <option value="5">10  Kilómetros </option>
		            <option value="10">17 Kilómetros </option>
		            <option value="15">27 Kilómetros </option>
		            <option value="20">34 Kilómetros </option>
	            </select>
			</div>
		</div>
	</div>
</div>

<div class="form-group">
	<div class="col-sm-6">
	<strong class="form-title"><label for="lname">Duración Máxima: </label></strong>
	</div>
	<div class="col-sm-6">
		<div class="input-wrap">
			<div class="form-control" style="background-color: rgb(207, 207, 207);">
			  <select class="form-control" id="slMaxDuration" name="slMaxDuration">
	            <option value="15">15 Minutos </option>
	            <option value="25">25 Minutos </option>
	            <option value="40">40 Minutos </option>
	            <option value="50">50 Minutos </option>
          	  </select>
			</div>
		</div>
	</div>
</div>

<div class="form-group">
	<div class="col-sm-6">
	<strong class="form-title"><label for="lname">Costo Promedio: </label></strong>
	</div>
	<div class="col-sm-6">
		<div class="input-wrap">
			<div class="form-control" style="background-color: rgb(207, 207, 207);">
			  <select class="form-control" id="slCost" name="slCost">
	            <option value="1">Bajo </option>
	            <option value="2">Medio </option>
	            <option value="3">Alto </option>
	          </select>
			</div>
		</div>
	</div>
</div>

<div class="form-group btn-holder">
<div class="col-sm-4">&nbsp;</div>
<div class="col-sm-8">
<div class="input-wrap">
<input type="submit" id="btn_sent" value="Obtener Rutas" class="btn btn-white">
<p id="error_message"> </p>
</div>
</div>
</div>
</fieldset>
</form>
</div>
</div>
</div>
</div>
</section>

<div class="row">
  <div class="col-sm-2"></div>

  <div class="col-sm-8">
      
    <div class="embed-responsive embed-responsive-16by9">
      
    <iframe src="https://www.youtube.com/embed/hnV6A_4J3Tw?autoplay=1" frameborder="0" allowfullscreen></iframe>

  </div>

  </div>

  <div class="col-sm-2"></div>
</div><br>
<script type="text/javascript" >

navigator.geolocation.getCurrentPosition(fillStartPoints);

var nodes = new Array();

fillTypesActivity();

/*
*The next two methods it are responsible for load the group of the types activities
* and start points respectively.
*/
function fillStartPoints(position)
{
  var currentPosition = (position.coords.latitude+","+position.coords.longitude);

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

          if("Tú ubicación".localeCompare(current.name)==0){
              answer = '<option value='+currentPosition+'>'+current.name+'</option';
            }
            else
              {
                answer = '<option>'+current.name+'</option';
              }

            $("#slStartPoint").append(answer);
        }//Fin del for
      }
    }
  );
}//Fin de la función
function fillTypesActivity()
{
  $.ajax
  (
    {
      type:'GET',
      url:'/api/allactivity',
      beforeSend: function () {},
      success:function(data)
      {
        var answer = '';

        //Recorremos los datos
        for(position in data)
        {
          current = data[position];
            answer = '<option value='+current.idtypeactivities+'>'+current.name+'</option';
            $("#slTypeActivity").append(answer);
        }//Fin del for
      }
    }
  );
}//Fin de la función

</script>
@endsection