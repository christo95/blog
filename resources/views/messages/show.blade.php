@extends('template')
	@section('intranet')
		<h1>Mensaje</h1>
		<p>Enviado Por {{ $mensaje->tNombre }} - {{ $mensaje->tCorreo }}</p>
		<p>{{ $mensaje->tMensaje }}</p>
@stop