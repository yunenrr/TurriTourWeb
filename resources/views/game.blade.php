@extends('masterpage.app')
@section('body')
<section class="banner banner-inner parallax" data-stellar-background-ratio="0.5" id="about-banner">
	<div class="banner-text">
		<div class="center-text">
			<div class="container">
				<h1>Juego parques nacionales</h1>
				<strong class="subtitle">¡Pon a prueba tus conocimientos sobre el país!</strong>
				<nav class="breadcrumbs">
					<ul>
						<li><a href="#">Inicio</a></li>
						<li><span>Juego</span></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</section>

<main id="main">
		<iframe class="content-center" src='http://www.educaplay.com/es/recursoseducativos/2314471/html5/napacori.htm' width='640' height='500' frameborder='0' style="margin-left: 25%;"></iframe>
</main>
@endsection