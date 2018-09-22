@extends('template')
	@section('intranet')
		<h1>{{ $user->name }}</h1>
		<table class="table">
			<tr>
				<th>Nombre:</th>
				<td>{{ $user->name }}</td>
			</tr>
			<tr>
				<th>Correo:</th>
				<td>{{ $user->email }}</td>
			</tr>		
			<tr>
				<th>Roles:</th>
				<td>@foreach($user->roles as $role)
					{{ $role->tNombre }}
					@endforeach
				</td>
			</tr>					
		</table>
		@can('edit',$user)
			<a href="{{ route('usuarios.edit',$user->id) }}" class="btn btn-warning">Editar</a>
		@endcan
		@can('destroy',$user)
			<form style="display: inline;" method="POST" action="{{ route('usuarios.destroy', $user->id) }}">
				{!! method_field('DELETE') !!}
				{!! csrf_field() !!}
				<input type="submit" value="Eliminar" class="btn btn-danger">
			</form>
		@endcan
@stop