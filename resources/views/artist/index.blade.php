@extends('layouts.app')

@section('content')
	<div class="container">

		<h1>Artistas</h1>
		<a  class="btn btn-primary" href="{{ route('artists.create') }}">Nuevo Artista</a>
		@if(Session::has('message'))
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				{{Session::get('message')}}
			</div>
		@endif
		<br><br>
		<table class="table table-striped">
			<thead bgcolor="black">
				<tr>
					<th scope="col">Nombre</th>
					<th scope="col">Foto</th>
					<th scope="col">Bio</th>
					<th scope="col">Acciones</th>
				</tr>
			</thead>
			<tbody>

				@foreach ($artists as $artist)
					<tr>
						<th>{{ $artist->name }}</th>
						<th><img class="photo-medium" src="{{ Storage::url($artist->photo) }}" alt="{{ $artist->photo }}"></th>
						<th>{{ $artist->bio }}</th>
						<th>
							<button class="btn btn-primary" type="button">+</button>
							<button class="btn btn-info" type="button">E</button>
							<button class="btn btn-danger" type="button">-</button>
						</th>
					</tr>
				@endforeach

			</tbody>
		</table>


	</div>
@stop
