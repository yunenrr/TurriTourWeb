@extends('masterpage.app')
@section('body')

<?php 
	if(!isset($nodes))
	{
		redirect()->to('/search-routes')->send();
	}
?>
<!-- Banner -->
<section class="banner banner-inner parallax" data-stellar-background-ratio="0.5" id="banner-layout-leftsidebar">
	<div class="banner-text">
		<div class="center-text">
			<div class="container">
				<h1>Mapa de ruta</h1>
				<strong class="subtitle">¡A continuación podrás ver los lugares que recomienda esta ruta!</strong>
				<nav class="breadcrumbs">
					<ul>
						<li><a href="/">Inicio</a></li>
						<li><span><a href="/search-routes">Parámetros</a></span></li>
						<li><span>Mapa rutas</span></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</section>

<!-- Resto de contenido -->
<main>
	<div class="content-with-sidebar common-spacing">
		<div class="container">
			<div id="two-columns" class="row">
				<!-- Contenido de la derecha -->
				<div id="content" class="col-sm-8 col-md-9">
					<h2 id="mapa">Mapa</h2>
					<div id="map" style="max-height: 500px;height: 500px;min-height: 200px;width: auto;"></div>
					<!-- Modal -->
					<div class="modal fade" id="myModal" role="dialog">
						<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
					          		<button type="button" class="close" data-dismiss="modal">&times;</button>
					          		<img class="responsive" style="max-width: 150px;margin-left:30%;" src="{{URL::asset('/img/logos/logo-la-marta.png')}}" />
				          		</div>
				          		<div class="modal-body">
				          			<div class="panel-group" id="accordion">
				          				<div class="panel panel-default">
				          					<div class="panel-heading">
				          						<h4 class="panel-title btn btn-default">
				          							<a data-toggle="collapse" data-parent="#accordion" href="#divInformationNode">Información</a>
			          							</h4>
		          							</div>
		          							<div id="divInformationNode" class="panel-collapse collapse in">
		          							<div class="panel-body" style="text-align: justify;">
												La Marta tiene una extensión de más de 1518 hectáreas de terreno. Forma parte de la reserva de la Biosfera de la Amistad, considerada por la UNESCO Patrimonio Mundial de la Humanidad, y es el primer refugio privado de vida silvestre del país. Aproximadamente un 60 % del territorio corresponde a bosque primario, y el 40 % restante está cubierto por bosque secundario en distintas etapas de regeneración natural.
												La topografía propia de la cordillera de Talamanca, unida a la presencia de dos ríos en la zona (ríos Gato y La Marta) y al rango altitudinal en el que se encuentra el Refugio, generan una amplia variedad de hábitats que permiten la presencia de gran cantidad de animales y plantas. El Refugio da albergue tanto a especies de animales residentes como a especies migratorias, es decir, a animales que se movilizan a veces cientos de kilómetros en una región buscando alimento y cobertura.
									      </div>
									    </div>
									  </div>
									  <div class="panel panel-default">
									    <div class="panel-heading">
									      <h4 class="panel-title btn btn-default">
									      	<a data-toggle="collapse" data-parent="#accordion" href="#divSocialNetwork">Redes Sociales</a>
									      </h4>
									    </div>
									    <div id="divSocialNetwork" class="panel-collapse collapse">
									    	<div class="panel-body">
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
									    	</div>
									    </div>
									  </div>
									</div> 
				          			<img src="{{ URL::asset('img/gallery/img-10-2.jpg') }}" />
			          			</div>
	          				</div>
					    </div>
					  </div>
				</div>
				<aside id="sidebar" class="col-sm-4 col-md-3 sidebar sidebar-list">
					<div class="sidebar-holder">
						<header class="heading"><h3>Filtros</h3></header>
						<div class="accordion">
							<div class="accordion-group">
								<!-- Encabezado del grupo -->
								<div class="panel-heading">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" href="#collapse1" aria-expanded="true" aria-controls="collapse1">Categorías</a>
									</h4>
								</div>
								<div id="collapse1" class="panel-collapse collapse in" role="tabpanel">
									<div class="panel-body">
										<ul class="side-list check-list" id="ulFilterCategory">
										</ul>
										<strong class="sub-link"><a href="#">Filtrar</a></strong>
									</div>
								</div>
							</div>
							<div class="accordion-group">
								<!-- Encabezado del grupo -->
								<div class="panel-heading">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" href="#collapse2" aria-expanded="true" aria-controls="collapse2">Rutas</a>
									</h4>
								</div>
								<div id="collapse2" class="panel-collapse collapse in" role="tabpanel">
									<div class="form-control" style="background-color: #474d4b;">
									  <select class="form-control" id="selRoutes">
									    <option>1</option>
									    <option>2</option>
									    <option>3</option>
									    <option>4</option>
									  </select>
									</div>
								</div>
							</div>
						</div>
					</div>
				</aside>
			</div>
		</div>
	</div>
</main>
<script type="text/javascript" >
	var map;
	var arrayObjects = [];
	var initialPosition = "";
	var endPosition = "";
	var waypts = [];

	//Funciones iniciales para obtener todos los necesarios
	fillFilterOptions(); //Llenamos las opciones para filtrar

	/**
	Función que inicializa el mapa
	*/
	function initMap() 
	{
		map = new google.maps.Map
		(
			document.getElementById('map'), 
			{
				center: {lat: 9.9060031, lng: -83.6905646},
				zoom: 13
			}
		);
		addMarkers("Usted está aquí",9.878132,-83.635680,"initial");
		initialPosition = 9.878132+","+-83.635680;
		getNodes();
	}//Fin de la función initMap

	/**
	Función que recupera del JSON la información de los nodos y los agrega en un String
	*/
	function getNodes()
	{
		var jsonString = '{{ $nodes }}';
		var arrayJSON = JSON.parse(jsonString.replace(/&quot;/g,'"'));
		
		for(position in arrayJSON)
		{
			addMarkers(arrayJSON[position].name,arrayJSON[position].latitude,arrayJSON[position].longitude,arrayJSON[position].name+position);

			if(position == arrayJSON.length-1)
			{
				endPosition = arrayJSON[position].latitude+","+arrayJSON[position].longitude;
			}
			else
			{
				waypts.push({ location: arrayJSON[position].latitude+","+arrayJSON[position].longitude, stopover: true });
			}
		}//Fin del for

		createRoute();
	}//Fin de la función

	/**
	Función que agrega los marcadores en el mapa.
	*/
	function addMarkers(nameNode,lat,long,nameVar)
	{
		var position = {lat: lat, lng: long};
		nameVar = new google.maps.Marker({position: position,map: map,title:nameNode});
		if(nameNode !== "Usted está aquí"){nameVar.addListener('click', msj);}
	}//Fin de la función

	/**
	Función que agrega las rutas al mapa
	*/
	function createRoute()
	{

		var directionsService = new google.maps.DirectionsService();
		var directionsDisplay = new google.maps.DirectionsRenderer({
			map: map,
			suppressMarkers: true
		});
		var request = 
		{
			origin: initialPosition,
			destination: endPosition,
			waypoints: waypts,
			optimizeWaypoints: true,
			provideRouteAlternatives: false,
			travelMode: 'DRIVING'
		};

		directionsService.route(request, function(result, status) 
		{
			if (status == 'OK') 
			{
				directionsDisplay.setDirections(result);
			}
		});
	}//Fin de la función

	function msj()
	{
		$('#myModal').modal('show');
	}//Fin de la función
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAJR9mkRkdrTsO5yjbBaGQxPjOzXuyfUQ&callback=initMap" async defer></script>
@endsection