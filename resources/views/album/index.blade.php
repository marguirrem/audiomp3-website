@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Albumes</h1>
    <a class="btn btn-primary" href="{{ route('albumes.create')}}">Nuevo Album</a>

  </div>

@endsection
