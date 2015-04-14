<!DOCTYPE html>
<html lang="es">
<head>
	<title>Classfy.me</title>
	<link href='http://fonts.googleapis.com/css?family=Lato|Raleway|Merriweather' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
	<header class="border">
		<h1>ClassfyMe</h1>
		<h2>El mejor lugar para publicar tu clasificado</h2>
		<nav>
			<ul>
				<li><a href="{{ route('home') }}" title="" class="icon-home3">Inicio</a></li>
				@if(Auth::user())
					<li><a href="" title="" class="icon-folder-plus">Crear anuncio</a></li>
				@else
					<li><a href="{{ route('register') }}" title="" class="icon-user-plus">Registrarte</a></li>
					<li><a href="{{ route('login') }}" title="" class="icon-user-plus">Iniciar sesión</a></li>
				@endif
				<li><a href="" title="" class="icon-wrench">Administrar</a></li>
			</ul>
		</nav>
	</header>
	@yield('content')
</body>
</html>