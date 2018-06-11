@extends('layouts.app')

@section('content')
	<div class="container">
			<h1>Nuevo Artista</h1>
			<form class="form"  enctype="multipart/form-data" action="{{ route('artists.store') }}" method="post">

				  {{ csrf_field() }}

				<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					<label for="name">Nombre:</label>
						<input class="form-control" type="text" name="name" placeholder="Nombre" value="{{ old('name') }}" required="true">
						@if ($errors->has('name'))
								<span class="help-block">
										<strong>{{ $errors->first('name') }}</strong>
								</span>
						@endif

				</div>

				<div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
					<label for="name">Foto:</label>
						<input class="form-control" type="file" name="photo" >
						@if ($errors->has('photo'))
								<span class="help-block">
										<strong>{{ $errors->first('photo') }}</strong>
								</span>
						@endif
				</div>

				<div class="form-group{{ $errors->has('bio') ? ' has-error' : '' }}">
					<label for="name">Bio:</label>
					<textarea class="form-control" name="bio" rows="8" cols="80" value="{{ old('bio') }}" required="true">

					</textarea>
					@if ($errors->has('bio'))
							<span class="help-block">
									<strong>{{ $errors->first('bio') }}</strong>
							</span>
					@endif
				</div>
				<div class="form-group">
					<input class="btn btn-primary" type="submit" value="Crear">
				</div>
			</form>
	</div>

@stop
