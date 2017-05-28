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

<main id="main">
<section class="content-block bg-white">
<div class="container">
<header class="content-heading">
<h2 class="main-heading">Esencial Costa Rica</h2>
<span class="main-subtitle">LA ESENCIA SOS VOS, TODOS SOMOS.</span>
<div class="seperator"></div>
</header>
<div class="adventure-holder gallery-home-holder">
<div class="row">
<div class="row">
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
<input type="text" class="form-control" id="fname" name="fname" placeholder="Tú ubicación">
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
			  <select class="form-control" id="lname">

			    <option>Aventura </option>
			    <option>Senderismo </option>
			    <option>Gastronomía </option>
			    <option>Alojamiento </option>
			  </select>
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
			  <select class="form-control" id="lname">

			    <option>5 Kilómetros </option>
			    <option>10 Kilómetros </option>
			    <option>15 Kilómetros </option>
			    <option>20 Kilómetros </option>
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
			  <select class="form-control" id="lname">

			    <option>5 Minutos </option>
			    <option>>10 Minutos </option>
			    <option>>15 Minutos </option>
			    <option>>25 Minutos </option>
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
			  <select class="form-control" id="lname">

			    <option>Bajo </option>
			    <option>Medio </option>
			    <option>Alto </option>

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
<div class="col-md-6 text-block">
<div class="centered">
<h2 class="intro-heading">Parámetros de Búsqueda</h2>
<p class="intro">En la presente pantalla usted deberá ingresar una serie de parámetros que permitirán al sistema obtener rutas turísticas que se ajusten a sus deseos.</p>
</div>
</div>
</div>
</div>
</div>
</section>
</div>

<div class="row">
  <div class="col-sm-2"></div>

  <div class="col-sm-8">
      
    <video autoplay="autoplay" controls tabindex="0">
        <source src="videos/CampanaCR.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

  </div>

  <div class="col-sm-2"></div>
</div><br>

@endsection