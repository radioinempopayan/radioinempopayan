@extends('base')

@section('seccion')
<!-- carrucel -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
		<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		<li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="styles/images/carrucel/foto01.jpg" class="d-block w-100" alt="Primero">
			<div class="carousel-caption d-none d-md-block">
				<h3>Radio Inem Popayán</h3>
				<p>Sonando una vez mas desde nuestro estudio para ustedes.</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="styles/images/carrucel/foto02.jpg" class="d-block w-100" alt="Segundo">
			<div class="carousel-caption d-none d-md-block">
				<h3>Radio Inem Popayán</h3>
				<p>Una radio juvenil para chicos y grandes, una radio para todos.</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="styles/images/carrucel/foto03.jpg" class="d-block w-100" alt="Tercero">
			<div class="carousel-caption d-none d-md-block">
				<h3>Radio Inem Popayán</h3>
				<p>Buscabas musica de todos los tiempos? pues aqui estamos una radio para ti.</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="styles/images/carrucel/foto04.jpg" class="d-block w-100" alt="Cuarto">
			<div class="carousel-caption d-none d-md-block">
				<h3>Radio Inem Popayán</h3>
				<p>Para todos nuestros inemitas y publico en general, esto es radio Inem popayan.</p>
			</div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

<!-- seccion -->

<section class="">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mx-auto">
				<hr>
					<h3>Noticias<br>Como van los colegios públicos y privados de Popayán?</h3>
				<hr>
				<p>
				Según  reciente estadística del Ministerio de Educación Nacional que midio a todas las instituciones públicas y privada del país, aparecen colegios de Popayán en diferentes posiciones.

				La única herramienta para tratar de hacer cualquier listado eran las pruebas Saber 11, conocidas antes como las pruebas del Icfes. Sin embargo, para muchos, era claro que esos resultados sólo mostraban el final de un proceso y no lo que ocurría a lo largo de los más de 11 años de educación que en promedio reciben millones de niños y jóvenes. Según funcionarios del ministerio, las pruebas Saber sólo arrojan información sobre qué es lo que han aprendido los alumnos, pero no dicen nada sobre la calidad de la educación que recoge muchos otros elementos más <a href="http://www.popayan.gov.co/ciudadanos/sala-de-prensa/noticias/Como-van-los-colegios-públicos-y-privados-de-Popayán%3F-" target="_blank">Leer mas</a>
				</p>
			</div>
		</div>
	</div>
</section>

<!-- p >
	<audio autoplay controls >
		<source src="http://198.7.59.204:16605/1;stream.nsv" type="audio/mpeg">
	</audio>
</p -->

@endsection
