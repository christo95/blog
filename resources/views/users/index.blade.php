@extends('template')
	@section('intranet')
		<h1>Usuarios</h1>
		<table class="table">
			<thead>
				<tr>
					<td>ID</td>
					<td>Nombre</td>
					<td>Correo</td>
					<td>Tipo</td>
					<td>Acciones</td>
				</tr>
			</thead>
			<tbody>
				@foreach($con_usuarios as $usuario)
					<tr>
						<td>{{ $usuario->id }}</td>
						<td>{{ $usuario->name }}</td>
						<td>{{ $usuario->email }}</td>
						<td>
							{{ $usuario->roles->pluck('tNombre')->implode(' - ') }}
							{{-- @foreach($usuario->roles as $role)
								{{ $role->tNombre }}
							@endforeach --}}
						</td>
						<td>
							<a href="{{ route('usuarios.show',$usuario->id) }}" class="btn btn-primary btn-sm">Info</a>
							<a href="{{ route('usuarios.edit',$usuario->id) }}" class="btn btn-warning btn-sm">Editar</a>
							<form style="display: inline;" method="POST" action="{{ route('usuarios.destroy', $usuario->id) }}">
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