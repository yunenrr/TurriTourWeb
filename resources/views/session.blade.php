@extends('masterpage.master-without-sophi')

@section('body')
<section class="banner banner-inner parallax" data-stellar-background-ratio="0.5" id="list-view-normal">
<div class="banner-text">
<div class="center-text">
<div class="container">
<h1>Inicio de sesión</h1>
<strong class="subtitle">Ser un usuario registrado te proporsiona más opciones de navegación</strong>
 
<nav class="breadcrumbs">
<ul>
<li><a href="/logout">HOME</a></li>
<li><span>Session</span></li>
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


<div class="col-md-6 wow fadeInCenter">
 
<form method="get" action="/" class="contact-form has-border " id="Sesion_form">

{{ csrf_field() }}

<fieldset>
 <div class="top-box">
<span class="holder height">Inicio de Sesión</span>
</div>
 <div class="form-group">
        <label class="control-label" for="Nombre">Nombres</label>
        <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Introduzca su nombre" required autofocus />
    </div>            
    
    <div class="form-group">
        <label class="control-label" for="pass">Contraseña</label>
        <input type="password" class="form-control" id="pass" name="pass" placeholder="Introduzca contraseña" required />
    </div>    
    <div class="form-group">                
        <input type="submit" class="btn btn-primary" value="Enviar" >                
    </div>
    <div id="respuesta" style="display: none;"></div>
</fieldset>
</form>
</div>

<div class="col-md-6 wow fadeInCenter ">
 
<form method="post" class="contact-form has-border  " id="register_form">

{{ csrf_field() }}

<fieldset>

<div class="top-box">
<span class="holder height">Registro</span>
</div>

 <div class="form-group">
        <label class="control-label" for="Nombre">Nombres</label>
        <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Introduzca su nombre" required autofocus />
    </div>    
    <div class="form-group">
        <label class="control-label" for="Apellido1">Primer Apellido</label>
        <input type="text" class="form-control" id="Apellido1" name="Apellido1" placeholder="Introduzca su primer Apellido" required />
    </div>
    <div class="form-group">
        <label class="control-label" for="Apellido2">Segundo Apellido</label>
        <input type="text" class="form-control" id="Apellido2" name="Apellido2" placeholder="Introduzca su segundo Apellido" required />
    </div>
    <div class="form-group">
        <label class="control-label" for="Correo">Dirección de Correo Electrónico</label>
        <input type="email" class="form-control" id="Correo" name="Correo" placeholder="Introduzca su correo electrónico" required />
    </div>
    <div class="form-group">
        <label class="control-label" for="pass">Conteaseña</label>
        <input type="password" class="form-control" id="pass" name="pass" placeholder="Introduzca contraseña" required />
    </div>
    <div class="form-group">                
        <input type="submit" class="btn btn-primary" value="Enviar">                
    </div>
    <div id="respuesta" style="display: none;"></div>
</fieldset>
</form>
</div>
</div>

</div>
</div>
</section>
</div>



@endsection