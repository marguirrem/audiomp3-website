@extends('layouts.app')

@section('content')
  <div class="container">

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form class="form" action="{{route('albumes.store')}}" method="post">
      {{ csrf_field() }}

      <div class="form-group">
        <label for="name">Nombre</label>
        <input class="form-control" type="text" name="name" value="{{old('name')}}" placeholder="Name" required>
      </div>

      <div class="form-group">
        <label for="">Artista</label>
        <select class="form-control" name="artist_id">
          @foreach ($artists as $artist)
            <option value="{{ $artist->id }}">{{ $artist->name }}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="">Artista</label>
        <input type="date" name="release_year" value="{{old('release_year')}}" required>
      </div>
      <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Crear">
      </div>
    </form>
  </div>

@endsection
