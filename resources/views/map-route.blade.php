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
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius animi ipsa delectus dignissimos, suscipit praesentium dolore blanditiis quo voluptatibus placeat itaque vel. Dicta itaque provident accusantium possimus nemo fugiat ducimus.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius animi ipsa delectus dignissimos, suscipit praesentium dolore blanditiis quo voluptatibus placeat itaque vel. Dicta itaque provident accusantium possimus nemo fugiat ducimus.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius animi ipsa delectus dignissimos, suscipit praesentium dolore blanditiis quo voluptatibus placeat itaque vel. Dicta itaque provident accusantium possimus nemo fugiat ducimus.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius animi ipsa delectus dignissimos, suscipit praesentium dolore blanditiis quo voluptatibus placeat itaque vel. Dicta itaque provident accusantium possimus nemo fugiat ducimus.</p>
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
											<li>
												<label for="check1" class="custom-checkbox">
													<input id="check1" type="checkbox">
													<span class="check-input"></span>
													<span class="check-label">Hiking Boots</span>
												</label>
											</li>
											<li>
												<label for="check2" class="custom-checkbox">
													<input id="check2" type="checkbox">
													<span class="check-input"></span>
													<span class="check-label">Hiking Boots</span>
												</label>
											</li>
											<li>
												<label for="check3" class="custom-checkbox">
													<input id="check3" type="checkbox">
													<span class="check-input"></span>
													<span class="check-label">Hiking Boots</span>
												</label>
											</li>
											<li>
												<label for="check4" class="custom-checkbox">
													<input id="check4" type="checkbox">
													<span class="check-input"></span>
													<span class="check-label">Hiking Boots</span>
												</label>
											</li>
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
<script type="text/javascript">
	$(document).ready
	(
		function()
		{
			//Variables
			var idRoute = 0;
			fillFilterOptions();
			getParam();

			/**
			Función que nos permite obtener el identificador de la ruta de la URL.
			*/
			function getParam()
			{
				var strHref = window.location.href;
				var arrayTemp = strHref.split("/");
				idRoute = arrayTemp[arrayTemp.length-1]; //Se obtiene la última posición
			}//Fin del método

			/**
			Función que llena el filtro de categorías
			*/
			function fillFilterOptions()
			{
				$.ajax
				(
					{
						type:'GET',
						url:'http://turritour.000webhostapp.com/api/allcategory',
						beforeSend: function () {},
						success:function(data)
						{
							JSON.stringify(data);
						}
					}
				);
			}//Fin de la función
		}//Fin de la función
	);
</script>
@endsection