@extends('template')

@section('intranet')
	<h1>Saludos a {{ $tNombre }}</h1>
	
	<ul>
		@forelse($consolas as $consola)
			<li>{{ $consola }}</li>
		@empty
			<p>Sin consolas</p>
		@endforelse
	</ul>
@stop
