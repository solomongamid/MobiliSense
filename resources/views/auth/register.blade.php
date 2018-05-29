@extends('main')

@section('title', 'Inscription')

@section('content')
<main class="login">
  <h1 class="main-title">Inscription</h1>
  <hr class="my-hr"/>

  <div class="container">

      @if (Auth::guest())
      @else
      <ul class="pager">
          <li class="previous"><a href="{{ url('userHome') }}">Précédent</a></li>
      </ul>
      @endif

      <form class="form-horizontal" method="POST" action="{{ route('register') }}">
          {{ csrf_field() }}

          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="col-md-4 control-label">Nom</label>
              <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="name" type="text" class="form-control" placeholder="Nom" name="name" value="{{ old('name') }}" required autofocus>

                  @if ($errors->has('name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
                </div>
              </div>
          </div>

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="col-md-4 control-label">Email</label>
              <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                  <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>

                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>
              </div>
          </div>

          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="col-md-4 control-label">Mot de passe</label>
              <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-eye-close"></i></span>
                  <input id="password" type="password" placeholder="Mot de passe" class="form-control" name="password" required>

                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>
              </div>
          </div>

          <div class="form-group">
              <label for="password-confirm" class="col-md-4 control-label">Confirmation de mot de passe</label>
              <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-eye-close"></i></span>
                  <input id="password-confirm" type="password" placeholder="Confirmation de mot de passe" class="form-control" name="password_confirmation" required>
                </div>
              </div>
          </div>

          @if (Auth::guest())
          @else
          <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
              <label class="col-md-4 control-label">Type d'utilisateur</label>

              <div class="col-md-3">
                  <label for="user" class="radio-inline">Administrateur</label>
                      <input type="radio" name="role" value="1">
              </div>
              <div class="col-md-3">
                  <label for="user" class="radio-inline">Utilisateur</label>
                  <input type="radio" checked="checked"  name="role" value="0">
              </div>
          </div>
          @endif

          <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-valid">
                      S'inscrire  <span class="glyphicon glyphicon-send"></span>
                  </button>
              </div>
          </div>
      </form>
  </div>
</main>
@endsection
