@extends('template')

@section('intranet')
	<h1>Editar Mensaje</h1>
	<form method="POST" action="{{ route('mensajes.update',$mensaje->id) }}">
		
		{!! method_field('PUT') !!}
		{!! csrf_field() !!}
		<p><label for="tNombre">
			Nombre
			<input type="text" name="tNombre" id="tNombre" value="{{ $mensaje->tNombre }}" class="form-control">
			{!! $errors->first('tNombre', '<span class="error">:message</span>') !!}
		</p>
		</label>
		<p><label for="tCorreo">
			Correo
			<input type="text" name="tCorreo" id="tCorreo" value="{{ $mensaje->tCorreo }}" class="form-control">
			{!! $errors->first('tCorreo', '<span class="error">:message</span>') !!}
		</p>
		</label>	
		<p><label for="tMensaje">
			Mensaje
			<textarea name="tMensaje" id="tMensaje" class="form-control">{{ $mensaje->tMensaje }}</textarea>
			{!! $errors->first('tMensaje', '<span class="error">:message</span>') !!}
		</p>
		</label>
		<input type="submit" value="Enviar" class="btn btn-info">
	</form>	
@stop