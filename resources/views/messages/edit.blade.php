@extends('template')

@section('intranet')
	<h1>Editar Mensaje</h1>
	<form method="POST" action="{{ route('mensajes.update',$mensaje->id) }}">
		
		{!! method_field('PUT') !!}
		@include('messages.form', ['btnText' =>  'Actualizar'])
	</form>	
@stop