@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Albumes</h1>
    <a class="btn btn-primary" href="{{ route('albumes.create')}}">Nuevo Album</a>

    @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
    @endif
    <table class="table table-striped">
      <thead class="primary">
        <tr>
          <td>Nombre</td>
          <td>Artista</td>
          <td>Año de lanzamiento</td>
        </tr>
      </thead>
      <tbody>
        @foreach ($albumes as $album)
          <tr>
            <td>{{ $album->name}}</td>
            <td>{{ $album->artist_id}}</td>
            <td>{{ $album->release_year}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection
