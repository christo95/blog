@extends('template')
	@section('intranet')
		<h1>Editar Usuario</h1>
		@if(session()->has('info'))
			<div class="alert alert-success"> {{ session('info') }}</div>
		@endif
		<form method="POST" action="{{ route('usuarios.update',$user->id) }}">
			
			{!! method_field('PUT') !!}
			{!! csrf_field() !!}
			<p><label for="name">
				Nombre
				<input type="text" name="name" id="name" value="{{ $user->name }}" class="form-control">
				{!! $errors->first('name', '<span class="error">:message</span>') !!}
			</p>
			</label>
			<p><label for="email">
				Correo
				<input type="text" name="email" id="email" value="{{ $user->email }}" class="form-control">
				{!! $errors->first('email', '<span class="error">:message</span>') !!}
			</p>
			</label>	
			</label>
			<input type="submit" value="Enviar" class="btn btn-info">
		</form>			
@stop