@extends('masterpage.app')
@section('body')
<section class="banner banner-inner parallax" data-stellar-background-ratio="0.5" id="activity-city-tour">
	<div class="banner-text">
		<div class="center-text text-center">
			<div class="container">
				<h1>El Ajonjoli</h1>
					<strong class="subtitle">“Las Mejores Hamburguesas de Turrialba”</strong>
					<nav class="breadcrumbs">
						<ul>
							<li><a href="/">Inicio</a></li>
							<li><a href="/Buscar Rutas">Buscar Rutas</a></li>
							<li><a href="/map-route/1">Mapas rutas</a></li>
							<li><span>Lugar</span></li>
						</ul>
					</nav>
			</div>
		</div>
	</div>
</section>

<main id="main">
	<div class="content-intro">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-9 text-holder">
					<h2 class="title-heading">El Ajonjoli</h2>
					<p>Cuenta con las mejores hamburguesas de Turrialba artesanales cuidan cada detalle para tener la combinación perfecta, ingredientes frescos</p>
					<div class="col-sm-2"></div>
				  	<div class="col-sm-8">
				  		<div class="embed-responsive embed-responsive-16by9">
				    		<iframe src="https://www.youtube.com/embed/hnV6A_4J3Tw?autoplay=1" frameborder="0" allowfullscreen></iframe>
				  		</div>
				  	</div>
				  	<br>
					<ul class="social-wrap">
						<li class="facebook">
							<a href="https://www.facebook.com/yarrblog/" target="_blank">
								<span class="icon-facebook"></span>
							</a>
						</li>
						<li class="dribble">
							<a href="https://yarr-blog.blogspot.com/" target="_blank">
								<span class="icon-asia"></span>
							</a>
						</li>
					</ul>
					<div class="btn-holder">
						<a href="/map-route/1" class="btn btn-info-sub btn-md btn-shadow radius">Regresar al mapa</a>
					</div>
				</div>
				<div class="col-sm-4 col-md-3 map-col">
					<div class="holder">
						<div class="map-holder">
							<img src="{{URL::asset('/img/logos/log.png')}}" height="300" width="200">
						</div>
						<div class="info">
							<div class="slot">
								<strong>Best Season:</strong>
								<span class="sub">May, June, July, August</span>
							</div>
							<div class="slot">
								<strong>Popular Location:</strong>
								<span class="sub">Madrid, Bhamas, Phuket, Sydney</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
@endsection