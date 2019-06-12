<!DOCTYPE html>
<html>
<head>
	<!--meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--base href="https://radioinempopayan.herokuapp.com"-->
	<title>Radio Inem Popayan</title>

	<!-- Bootstrap & icomoon CSS -->
	<link rel="stylesheet" type="text/css" href="styles/bootstrap/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="styles/bootstrap/css/bootstrap-video.css" >
	<link rel="stylesheet" type="text/css" href="styles/icomoon/style.css" >
	<link rel="icon" type="image/jgp" href="styles/images/logo.jpg" >

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141928839-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-141928839-1');
	</script>
</head>
<body>
	<!--navegacion-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<a class="navbar-brand" href="{{ route('index') }}">
			<img src="styles/images/logo.jpg" width="30" height="30" alt=""> Radio Inem
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="{{ route('index') }}">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('galery') }}">Galeria</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('abouts') }}">About</a>
				</li>
			</ul>
			<form>
				<div class="form-row align-items-center">
					<div class="col-auto my-1">

						<!-- Facebook -->
						<a class="btn btn-outline-light" href="https://www.facebook.com/radioinempopayan/" role="button" target="_blank"><span class="icon-facebook"></span></a>

						<!-- twitter -->
						<a class="btn btn-outline-light" href="https://twitter.com/inempopayan?lang=es" role="button" target="_blank"><span class="icon-twitter"></span></a>

						<!-- instagram -->
						<a class="btn btn-outline-light" href="https://www.instagram.com/radioinem/?hl=es" role="button" target="_blank"><span class="icon-instagram"></span></a>

					</div>
					<div class="col-md-4">
						<input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
					</div>
					<div class="col-auto my-1">
						<button type="submit" class="btn btn-outline-primary"><span class="icon-search"></span></button>
					</div>
				</div>
			</form>
		</div>
	</nav>
<!-- section -->

@yield('seccion')

<!-- folder -->
	<dir>
		<footer class="pt-4 my-md-5 pt-md-5 border-top">
			<div class="row">
				<div class="col-12 col-md">
					<p><h5>La pagina en el momento esta en modo beta</h5></p>
					<img class="mb-2" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
					<small class="d-block mb-3 text-muted">© 2018-2019 <br> mago_jefry & producion</small>
				</div>
				<div class="col-6 col-md">
					<h5>Features</h5>
					<ul class="list-unstyled text-small">
						<li><a class="text-muted" href="#">Cool stuff</a></li>
						<li><a class="text-muted" href="#">Random feature</a></li>
						<li><a class="text-muted" href="#">Team feature</a></li>
						<li><a class="text-muted" href="#">Stuff for developers</a></li>
						<li><a class="text-muted" href="#">Another one</a></li>
						<li><a class="text-muted" href="#">Last time</a></li>
					</ul>
				</div>
				<div class="col-6 col-md">
					<h5>Resources</h5>
					<ul class="list-unstyled text-small">
						<li><a class="text-muted" href="#">Resource</a></li>
						<li><a class="text-muted" href="#">Resource name</a></li>
						<li><a class="text-muted" href="#">Another resource</a></li>
						<li><a class="text-muted" href="#">Final resource</a></li>
					</ul>
				</div>
				<div class="col-6 col-md">
					<h5>About</h5>
					<ul class="list-unstyled text-small">
						<li><a class="text-muted" href="#">Equipo</a></li>
						<li><a class="text-muted" href="#">Ubicacion</a></li>
						<li><a class="text-muted" href="#">Privacidad</a></li>
						<li><a class="text-muted" href="#">Terminos y condiciones</a></li>
					</ul>
				</div>
			</div>
		</footer>
	</div>
<!-- funcion script -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
