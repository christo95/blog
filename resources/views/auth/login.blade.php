@extends('template')
	@section('intranet')
		<h1>Login</h1>
		<form method="POST" class="form-inline" action="/login">
			{!! csrf_field() !!}
			<input type="email" name="email" placeholder="Correo" class="form-control">
			<input type="password" name="password" placeholder="Contraseña" class="form-control">
			<input type="submit" value="Registrar" class="btn btn-info">
		</form>
@stop