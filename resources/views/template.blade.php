<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	<?php
	function activeMenu($tUrl){
		return request()->is($tUrl) ? 'active' : '';
	}
	?>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light container">
		  <a class="navbar-brand" href="/">Blog</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
 			<li class="nav-item {{ activeMenu('home') }}">
 				<a class="nav-link" href="{{ route('home') }}">Home</a>
 			</li>
			<li class="nav-item {{ activeMenu('saludos*') }}">
				<a class="nav-link" href="{{ route('saludos', 'Christopher') }}">Saludos</a>
			</li>
			<li class="nav-item {{ activeMenu('mensajes/create') }}">
				<a class="nav-link" href="{{ route('mensajes.create') }}">Contactos</a>
			</li>
			@if(auth()->check())
				<li class="nav-item {{ activeMenu('mensajes*') }}">
					<a class="nav-link" href="{{ route('mensajes.index') }}">Mensajes</a>
				</li>
				@if(auth()->user()->hasRoles(['admin']))
					<li class="nav-item {{ activeMenu('usuarios*') }}">
						<a class="nav-link" href="{{ route('usuarios.index') }}">Usuarios</a>
					</li>
				@endif
			@endif
		    </ul>
		    <ul class="navbar-nav ml-auto">
			    @if(auth()->check())
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          {{ auth()->user()->name }}
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="/usuarios/{{ auth()->id() }}/edit">Mi Perfil</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item" href="/logout">Cerrar Sesion</a>
			        </div>
			      </li>
			    @else
					<li class="nav-item {{ activeMenu('login') }}">
						<a class="nav-link" href="/login">Login</a>
					</li>
			    @endif
			</ul>
		    {{-- <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form> --}}
		  </div>
		</nav>
	</header>
	<div class="container">
		@yield('intranet')

		<footer>Derechos reservados - {{ date('Y') }}</footer>
	</div>
	<script src="/js/app.js"></script>
</body>
</html>