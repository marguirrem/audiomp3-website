@extends('layouts.app')
@section('content')
  <div class="container">
    @if (session('message'))
      <div class="alert alert-success">
        {{ session('message') }}
      </div>
    @endif
    <h2>{{ $user->first_name }}{{ $user->last_name }}</h2>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Actualizar Información</div>

          <div class="panel-body">
            <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ url('user',$user->id) }}">
              {{ csrf_field() }}
              <input type="hidden" name="_method" value="PUT">

              <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                <label for="photo" class="col-md-4 control-label">Foto</label>

                <div class="col-md-6">
                  <input id="photo" type="file" class="form-control" name="photo" value="{{ old('photo') }}" >

                  @if ($errors->has('photo'))
                    <span class="help-block">
                      <strong>{{ $errors->first('photo') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                <label for="first_name" class="col-md-4 control-label">Primer Nombre</label>

                <div class="col-md-6">
                  <input id="first_name" type="text" class="form-control" name="first_name" value="{{ $user->first_name }}{{ old('first_name') }}" required >

                  @if ($errors->has('first_name'))
                    <span class="help-block">
                      <strong>{{ $errors->first('first_name') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                <label for="last_name" class="col-md-4 control-label">Apellido</label>

                <div class="col-md-6">
                  <input id="last_name" type="text" class="form-control" name="last_name" value="{{ $user->last_name }}{{ old('last_name') }}" required>

                  @if ($errors->has('last_name'))
                    <span class="help-block">
                      <strong>{{ $errors->first('last_name') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">Correo Electronico</label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}{{ old('email') }}" required>

                  @if ($errors->has('email'))
                    <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-primary">
                    Actualizar
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
