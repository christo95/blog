@extends('template')

@section('intranet')
	<h1>Contactos</h1>
	<p>Favor de llenar los siguientes datos</p>
	@if(session()->has('info'))
		<h3>{{ session('info') }}</h3>
	@else
		<form method="POST" action="{{ route('mensajes.store') }}">
			
			{!! csrf_field() !!}
			<p><label for="tNombre">
				Nombre
				<input type="text" class="form-control" name="tNombre" id="tNombre" value="{{ old('tNombre') }}">
				{!! $errors->first('tNombre', '<span class="error">:message</span>') !!}
			</p>
			</label>
			<p><label for="tCorreo">
				Correo
				<input type="text" class="form-control" name="tCorreo" id="tCorreo" value="{{ old('tCorreo') }}">
				{!! $errors->first('tCorreo', '<span class="error">:message</span>') !!}
			</p>
			</label>	
			<p><label for="tMensaje">
				Mensaje
				<textarea name="tMensaje" class="form-control" id="tMensaje">{{ old('tMensaje') }}</textarea>
				{!! $errors->first('tMensaje', '<span class="error">:message</span>') !!}
			</p>
			</label>
			<input type="submit" value="Enviar" class="btn btn-info">
		</form>
	@endif
@stop