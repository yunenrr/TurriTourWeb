@extends('masterpage.app')
@section('body')
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
						<li><span><a href="/Buscar Rutas">Rutas</a></span></li>
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
					          		<!---<h4 class="modal-title">Nombre del lugar</h4>-->
				          		</div>
				          		<div class="modal-body">
				          			<p>Hiking * Trekking * Lodgin * BridWatching</p>
				          			<img src="{{ URL::asset('img/gallery/img-10-2.jpg') }}" />
			          			</div>
			          			<div class="modal-footer">
			          				<a href="/place/1" class="btn btn-default">Más información</a>
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
	var lat = 9.9060031;
	var long = -83.6905646;
	var strHref = window.location.href;
	var arrayTemp = strHref.split("/");
	var arrayIdNodes = [];

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
				center: {lat: lat, lng: long},
				zoom: 13
			}
		);
		getNodesByRoute(arrayTemp[arrayTemp.length-1]);
	}//Fin de la función initMap

	/**
	Función que obtiene un array de un JSOn que contiene la información de todos los nodos que componen a una ruta.
	*/
	function getNodesByRoute(idNode)
	{
		$.ajax
		(
			{
				type:'GET',
				url:'/api/getnodebyroute?idroute='+idNode,
				beforeSend: function () {},
				success:function(data)
				{
					//Recorremos el JSON
					for(position in data)
					{
						current = data[position];
						arrayIdNodes.push(current.idnodes);
					}//Fin del for
					getNodeInformation();
				}
			}
		);
	}//Fin de la función

	/**
	Función que se encarga de traer la información específica de un nodo
	*/
	function getNodeInformation()
	{
		//Recorremos el for con la información de los id de los nodos
		for(i = 0; i < arrayIdNodes.length;i++)
		{
			$.ajax
			(
				{
					type:'GET',
					url:'/api/getnode?id='+arrayIdNodes[i],
					beforeSend: function () {},
					success:function(data)
					{
						//Recorremos el JSON
						for(position in data)
						{
							current = data[position];
							alert(current.name);
						}//Fin del for
					}
				}
			);
		}//Fin del for
	}//Fin de la función

	/**
	Función que agrega los marcadores en el mapa.
	*/
	function addMarkers()
	{
  		var inicial = {lat: 9.878132, lng: -83.635680};
        var markerInitial = new google.maps.Marker({position: inicial,map: map,title:"Usted está aquí"});
        markerInitial.addListener('click', msj);


        //Otros marcadores
        var guayabo = {lat: 9.9727991, lng: -83.6908688};
        var museo = {lat: 9.9013114, lng:-83.672462};

        var markerGuayabo = new google.maps.Marker({position: guayabo,map: map,title:"Guayabo"});
        markerGuayabo.addListener('click', msj);
        var markerMuseo = new google.maps.Marker({position: museo,map: map,title:"Museo"});
        markerMuseo.addListener('click', msj);
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

		var start = "9.878132,-83.635680";
		var end = "9.9727991,-83.6908688";
		var points = [ { location: "9.9013114,-83.672462", stopover: false } ];
		var request = {
			origin: start,
			destination: end,
			waypoints: points,
			optimizeWaypoints: true,
			provideRouteAlternatives: false,
			travelMode: 'DRIVING'
		};

		directionsService.route(request, function(result, status) {
			if (status == 'OK') {
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