@extends('base')

@section('seccion')
<p>
	<audio autoplay controls>
		<source src="http://198.7.59.204:16605/1;stream.nsv" type="audio/mpeg">
	</audio>
</p>

<!--About-->
	<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
		<h2>Acerca De Mi Radio</h2>
		<p class="lead">Como una radio institucional, somos una familia que les brinda un servicio publico y cultural, a todos nuestros radio escuchas tanto inemitas como en general. con el fin de brindarles una preogramacion juvenil y retro </p>
	</div>

	<div class="container">
		<div class="card-deck mb-3 text-center">
			<div class="card mb-4 shadow-sm">
				<div class="card-header">
					<h4 class="my-0 font-weight-normal">Mision</h4>
				</div>
				<div class="card-body">
					<!--h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1 -->
					<ul class="list-unstyled mt-3 mb-4">
						<li>
							<img src="styles/images/about/mision.jpg" class="rounded" style="align-items:center; width:100%; height:100%"><hr>
						</li>
						Radio Inem Popayan: es una radio de servicio público, con carácter cultural y educativo. Produce, transmite y promueve una programación de calidad que contribuye a la construcción de ciudadanía y a fomentar el diálogo intercultural. Se fundamenta en los valores de diversidad cultural, inclusión, convivencia democrática, libertad de expresión, responsabilidad y ética informativa para un mundo abierto
					</ul>
				<!-- button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button -->
				</div>
			</div>
			<div class="card mb-4 shadow-sm">
				<div class="card-header">
					<h4 class="my-0 font-weight-normal">Vision</h4>
				</div>
				<div class="card-body">
					<!--h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1 -->
					<ul class="list-unstyled mt-3 mb-4">
						<li><img src="styles/images/about/vision.jpg" class="rounded" style="align-items:center; width:94%; height:100%"><hr>
						</li>
						Radio Inem Popayan: busca ser un centro de producción cultural y educativa, pilar en la consolidación de un sistema de medios públicos al servicio de la ciudadanía, garante de los derechos de las audiencias. Que promueva y estimule la creatividad de los profesionales de la radio, la vitalidad y el cambio social, a través de una plataforma tecnológica al servicio de las necesidades sociales y acorde con un mundo abierto e interconectado
					</ul>
					<!-- button type="button" class="btn btn-lg btn-block btn-primary">Get started</button -->
				</div>
			</div>
			<div class="card mb-4 shadow-sm">
				<div class="card-header">
					<h4 class="my-0 font-weight-normal">Valores</h4>
				</div>
				<div class="card-body">
					<!--h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1 -->
					<ul class="list-unstyled mt-3 mb-4">
						<li><img src="styles/images/about/valores.jpg" class="rounded" style="align-items:center; width:95%; height:100%"><hr>
						</li>
						Diversidad, participación e inclusión.
						Independencia editorial.
						Compromiso, integridad y calidad profesional.
						Honestidad intelectual y responsabilidad ética.
						Sentido de servicio público.
						Convivencia democrática.
						Confianza y respeto.
						Transparencia, equidad y rendición de cuentas. 
					</ul>
					<!--button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button -->
				</div>
			</div>
		</div>

@endsection