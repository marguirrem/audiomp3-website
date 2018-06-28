@extends('layouts.app')

@section('content')
  <div class="container">
    @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
    @endif
      <a class="btn btn-primary" href="{{ route('albumes.create')}}">Nuevo Album</a><br>
    <br> <div class="panel panel-primary">
      <div class="panel-heading">
        Albumes
      </div>
      <div class="panel-body">
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
                <td>{{ $album->artist->name}}</td>
                <td>{{ $album->release_year}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection
