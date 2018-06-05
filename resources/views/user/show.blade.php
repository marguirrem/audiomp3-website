@extends('layouts.app')
@section('content')

  <div class="container">
    <img class="photo-medium" src="{{Storage::url($user->photo)  }}" alt="User">
    <hr>
    <h2>{{ $user->first_name }} {{ $user->last_name }}</h2>
    <p>{{ $user->email }}</p>
  </div>
@endsection
