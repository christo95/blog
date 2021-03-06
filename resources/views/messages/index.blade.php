@extends('template')
	@section('intranet')
		<h1>Todos los Mensajes</h1>
		<table class="table">
			<thead>
				<tr>
					<td>ID</td>
					<td>Nombre</td>
					<td>Correo</td>
					<td>Mensaje</td>
					<td>Acciones</td>
				</tr>
			</thead>
			<tbody>
				@foreach($con_mensajes as $mensaje)
					<tr>
						<td>{{ $mensaje->id }}</td>
						@if($mensaje->user_id)
							<td>
								<a href="{{ route('usuarios.show',$mensaje->user->id) }}">{{ $mensaje->user->name }}</a>
							</td>
							<td>{{ $mensaje->user->email }}</td>
						@else
							<td>{{ $mensaje->tNombre }}</td>
							<td>{{ $mensaje->tCorreo }}</td>
						@endif
						<td>
							<a href="{{ route('mensajes.show',$mensaje->id) }}">
								{{ $mensaje->tMensaje }}
							</a>
						</td>
						<td>
							<a href="{{ route('mensajes.edit',$mensaje->id) }}" class="btn btn-warning btn-sm">Editar</a>
							<form style="display: inline;" method="POST" action="{{ route('mensajes.destroy', $mensaje->id) }}">
								{!! method_field('DELETE') !!}
								{!! csrf_field() !!}
								<input type="submit" value="Eliminar" class="btn btn-danger btn-sm">
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
@stop