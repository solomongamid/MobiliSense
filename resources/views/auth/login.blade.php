@extends('main')

@section('title', 'Connection')

@section('content')

<main class="login">
  <h1 class="main-title">Se connecter</h1>
  <hr class="my-hr"/>


  <div class="container">

      <form class="form-horizontal" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}

          @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
          @endif
          @if (session('warning'))
              <div class="alert alert-warning">
                  {{ session('warning') }}
              </div>
          @endif

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="col-md-4 control-label">Email</label>
              <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                  <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>

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
              <div class="col-md-6 col-md-offset-4">
                  <div class="checkbox">
                      <label>
                          <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Se souvenir de moi
                      </label>
                  </div>
              </div>
          </div>

          <div class="form-group">
              <div class="col-md-8 col-md-offset-4">
                  <button type="submit" class="btn btn-valid">
                      Se connecter  <span class="glyphicon glyphicon-send"></span>
                  </button>

                  <a class="btn btn-link" href="{{ route('password.request') }}">
                      Mot de passe oublié
                  </a>
              </div>
            </div>
        </form>
      </div>
</main>
@endsection
