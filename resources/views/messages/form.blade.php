			{!! csrf_field() !!}
			@unless($mensaje->user_id)
				<p><label for="tNombre">
					Nombre
					<input type="text" class="form-control" name="tNombre" id="tNombre" value="{{ $mensaje->tNombre or old('tNombre') }}">
					{!! $errors->first('tNombre', '<span class="error">:message</span>') !!}
				</p>
				</label>
				<p><label for="tCorreo">
					Correo
					<input type="text" class="form-control" name="tCorreo" id="tCorreo" value="{{ $mensaje->tCorreo or old('tCorreo') }}">
					{!! $errors->first('tCorreo', '<span class="error">:message</span>') !!}
				</p>
				</label>	
			@endunless
			<p><label for="tMensaje">
				Mensaje
				<textarea name="tMensaje" class="form-control" id="tMensaje">{{ $mensaje->tMensaje or old('tMensaje') }}</textarea>
				{!! $errors->first('tMensaje', '<span class="error">:message</span>') !!}
			</p>
			</label>
			<input type="submit" value="{{ $btnText or 'Guardar' }}" class="btn btn-info">
