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
						<li><span><a href="Buscar Rutas">Rutas</a></span></li>
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
					          		<h4 class="modal-title">Nombre del lugar</h4>
				          		</div>
				          		<div class="modal-body">
				          			<p>Texto texto texto</p>
				          			<img src="{{ URL::asset('img/gallery/img-10-2.jpg') }}" />
			          			</div>
			          			<div class="modal-footer">
			          				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
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
										<a role="button" data-toggle="collapse" href="#collapse6" aria-expanded="true" aria-controls="collapse6">Categorías</a>
									</h4>
								</div>
								<div id="collapse6" class="panel-collapse collapse in" role="tabpanel">
									<div class="panel-body">
										<ul class="side-list check-list" id="ulFilterCategory">
										</ul>
										<strong class="sub-link"><a href="#">Filtrar</a></strong>
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
	var lat = 9.9060031;
	var long = -83.6905646;
	fillFilterOptions(); //Llenamos las opciones para filtrar

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
		addMarkers();
	}//Fin de la función initMap

	function addMarkers()
	{
  		var inicial = {lat: 9.878056, lng: -83.635889};
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

	function createRoute()
	{
/*		$.ajax
		(
			{
				type:'GET',
				url:'https://maps.googleapis.com/maps/api/directions/json?origin=9.878132,-83.635680&destination=9.9727991,-83.6908688&waypoints=9.9013114,-83.672462&key=AIzaSyDAJR9mkRkdrTsO5yjbBaGQxPjOzXuyfUQ',
				beforeSend: function () {},
				success:function(data)
				{
					var routes = data[1];


					$("#mapa").text(routes);
				}
			}
		);*/
	}//Fin de la función

	function msj()
	{
		$('#myModal').modal('show');
	}//Fin de la función
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAJR9mkRkdrTsO5yjbBaGQxPjOzXuyfUQ&callback=initMap" async defer></script>
@endsection