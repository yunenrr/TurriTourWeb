@extends('masterpage.app')
@section('body')
<section class="banner banner-inner parallax" data-stellar-background-ratio="0.5" id="activity-city-tour">
	<div class="banner-text">
		<div class="center-text text-center">
			<div class="container">
				<h1>Refugio de Vida Silvestre La Marta</h1>
					<strong class="subtitle">Hiking * Trekking * Lodgin * BridWatching</strong>
					<nav class="breadcrumbs">
						<ul>
							<li><a href="/">Inicio</a></li>
							<li><a href="/search-routes">Buscar Rutas</a></li>
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
					<h2 class="title-heading">Refugio de Vida Silvestre La Marta</h2>
					<p style="text-align: justify;">La Marta tiene una extensión de más de 1518 hectáreas de terreno. Forma parte de la reserva de la Biosfera de la Amistad, considerada por la UNESCO Patrimonio Mundial de la Humanidad, y es el primer refugio privado de vida silvestre del país. Aproximadamente un 60 % del territorio corresponde a bosque primario, y el 40 % restante está cubierto por bosque secundario en distintas etapas de regeneración natural.
					<br />
					La topografía propia de la cordillera de Talamanca, unida a la presencia de dos ríos en la zona (ríos Gato y La Marta) y al rango altitudinal en el que se encuentra el Refugio, generan una amplia variedad de hábitats que permiten la presencia de gran cantidad de animales y plantas. El Refugio da albergue tanto a especies de animales residentes como a especies migratorias, es decir, a animales que se movilizan a veces cientos de kilómetros en una región buscando alimento y cobertura.</p>
					<div class="col-sm-2"></div>
				  	<div class="col-sm-8" style="margin-bottom: 2%">
				  		<div class="embed-responsive embed-responsive-16by9">
				    		<iframe src="https://www.youtube.com/embed/hnV6A_4J3Tw?autoplay=1" frameborder="0" allowfullscreen></iframe>
				  		</div>
				  	</div>
					<ul class="social-wrap">
						<li class="facebook">
							<a href="https://www.facebook.com/RefugioDeVidaSilvestreLaMarta" target="_blank">
								<span class="icon-facebook"></span>
							</a>
						</li>
						<li class="dribble">
							<a href="http://www.lamarta.org/es" target="_blank">
								<span class="icon-asia"></span>
							</a>
						</li>
					</ul>
					<div class="btn-holder">
						<a href="/map-route/1" class="btn btn-info-sub btn-md btn-shadow radius">Regresar al mapa</a>
						<a href="http://www.lamarta.org/lamarta360/index.html" class="btn btn-info-sub btn-md btn-shadow radius" target="_blank">Recorrido virtual</a>
					</div>
				</div>
				<div class="col-sm-4 col-md-3 map-col">
					<div class="holder">
						<div class="map-holder">
							<img src="{{URL::asset('/img/logos/logo-la-marta.png')}}" height="300" width="200">
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