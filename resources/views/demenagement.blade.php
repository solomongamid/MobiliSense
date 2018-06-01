@extends('main')

@section('title', 'Déménagement')

@section('content')
<main class="login">
  <h1 class="main-title">Déclarer un déméngament</h1>
  <hr class="my-hr"/>
  <p>Cette partie concernant les bénévoles de l'étude MobiliSense qui ont récemment procédé à un changement d'adresse.<br>
    Si vous êtes concerné, merci de remplir le formulaire ci-dessous.
  </p>

  <div class="container">

    @if (Auth::guest())
    @else
    <ul class="pager">
        <li class="previous"><a href="{{ url('demenagementAdmin') }}">Précédent</a></li>
    </ul>
    @endif


    <!-- Message de validation -->
    @if ($send == 'ok')
      <div class="alert alert-success" role="alert" id="success_message">
        Merci <i class="glyphicon glyphicon-thumbs-up"></i> Votre déménagement a bien été pris en compte.
      </div>
    @endif

      <form class="form-horizontal" action="/demenagementok" method="POST">
        {{ csrf_field() }}

        <fieldset>

          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="col-md-4 control-label">Nom</label>
              <div class="col-md-5 inputGroupContainer">
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

          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="firstname" class="col-md-4 control-label">Prénom</label>
              <div class="col-md-5 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="firstname" type="text" class="form-control" placeholder="Prénom" name="firstname" value="{{ old('firstname') }}" required>
                </div>
                @if ($errors->has('firstname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('firstname') }}</strong>
                    </span>
                @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="col-md-4 control-label">Email</label>
              <div class="col-md-5 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                  <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
                </div>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="adress" class="col-md-4 control-label">Adresse</label>
              <div class="col-md-5 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                  <input id="adress" type="text" class="form-control" placeholder="Adresse" name="adress" value="{{ old('adress') }}" required>
                </div>
                @if ($errors->has('adress'))
                    <span class="help-block">
                        <strong>{{ $errors->first('adress') }}</strong>
                    </span>
                @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="postalcode" class="col-md-4 control-label">Code postal</label>
              <div class="col-md-5 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                  <input id="postalcode" type="number" class="form-control" placeholder="Code postal" name="postalcode" value="{{ old('postalcode') }}" required>
                </div>
                @if ($errors->has('postalcode'))
                    <span class="help-block">
                        <strong>{{ $errors->first('postalcode') }}</strong>
                    </span>
                @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="city" class="col-md-4 control-label">Ville</label>
              <div class="col-md-5 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                  <input id="city" type="text" class="form-control" placeholder="Ville" name="city" value="{{ old('city') }}" required>
                </div>
                @if ($errors->has('city'))
                    <span class="help-block">
                        <strong>{{ $errors->first('city') }}</strong>
                    </span>
                @endif
              </div>
          </div>

          <!-- Bouton -->
          <div class="form-group submit">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4">
              <button type="submit" class="btn btn-valid" >Déclarer un déménagement  <span class="glyphicon glyphicon-send"></span></button>
            </div>
          </div>
        </fieldset>
      </form>
  </div>
</main>
@endsection
