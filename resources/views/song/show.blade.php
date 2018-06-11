@extends('layouts.app')

@section('content')
	<center>
			<h1>Canción</h1>
		<img class="song-image" src="https://is3-ssl.mzstatic.com/image/thumb/Music/32/5b/3c/mzi.sbpcssad.jpg/1200x630bb.jpg"
		 alt="">
		<br>
		<audio src="{{ Storage::url('beggin.mp3') }}" controls="true">

		</audio>

	</center>
@stop
