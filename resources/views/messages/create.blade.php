@extends('template')

@section('intranet')
	<h1>Contactos</h1>
	<p>Favor de llenar los siguientes datos</p>
	@if(session()->has('info'))
		<h3>{{ session('info') }}</h3>
	@else
		<form method="POST" action="{{ route('mensajes.store') }}">
			@include('messages.form', ['mensaje' => new App\Message])
		</form>
	@endif
@stop