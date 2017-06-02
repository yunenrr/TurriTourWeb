@extends('masterpage.app')

@section('body')
<section class="banner banner-inner parallax" data-stellar-background-ratio="0.5" id="list-view-normal">
<div class="banner-text">
<div class="center-text">
<div class="container">
<h1>Contáctanos</h1>
<strong class="subtitle">Realiza comentarios o evacua dudas sobre nuestro sistema </strong>
 
<nav class="breadcrumbs">
<ul>
<li><a href="/">HOME</a></li>
<li><span>CREDENTIALS</span></li>
</ul>
</nav>
</div>
</div>
</div>
</section>

<main id="main">
    <div class="content-block bg-white content-center">
        <div class="container">
            <header class="content-heading">
            <h2 class="main-heading">Equipo de desarrollo</h2>
            <strong class="main-subtitle">No importar si su duda es grande o pequeña, con mucho gusto lo vamos a atender</strong>
            <div class="seperator"></div>
            </header>
            <div class="row text-center">
                <div class="col-sm-4 article">
                    <div class="description">
                        <h3>Yunen Ramos R.</h3>
                        <p>Universidad de Costa Rica</p>
                        <p>Informática Empresarial</p>
                        <p>yunen.ramos@ucr.ac.cr</p>
                    </div>
                </div>
                <div class="col-sm-4 article">
                    <div class="description">
                        <h3>Víctor Salvatierra Mora</h3>
                        <p>Universidad de Costa Rica</p>
                        <p>Informática Empresarial</p>
                        <p>victor.salvatierra@ucr.ac.cr</p>
                    </div>
                </div>
                <div class="col-sm-4 article">
                    <div class="description">
                        <h3>Kevin</h3>
                        <p>Universidad de Costa Rica</p>
                        <p>Informática Empresarial</p>
                        <p>kevin@ucr.ac.cr</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection