@extends('main')

@section('title', 'Contact')

@section('content')
<main class="contact-main-container">
  <h1 class="main-title">Contact</h1>
  <hr class="my-hr"/>

  <section class="main-text">
    <h2 class="title"><i class="fas fa-angle-right"></i><span>Participants</span></h2>
    <div class="sub-text">
      <p>Si vous souhaitez vous inscrire, merci de remplir le formulaire ci-dessous :</p>
      <form class="form-horizontal" method="POST" action="{{ route('register') }}">
          {{ csrf_field() }}

          <!-- Nom -->
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label" >Nom</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="name" type="text" placeholder="Nom" class="form-control" name="name" value="{{ old('name') }}" required>

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

                  <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required>

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

          <!-- Bouton -->
          <div class="form-group submit">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4">
              <button type="submit" class="btn btn-valid" >S'inscrire  <span class="glyphicon glyphicon-send"></span></button>
            </div>
          </div>

        </form>
      <p> Pour toute autre demande, contactez l'équipe MobiliSense.</p>
      <ul>
        <li>Audrey Pelletier</li>
        <li>Jean Bon</li>
      </ul>
    </div>
  </section>

  <section class="main-text">
    <h2 class="title"><i class="fas fa-angle-right"></i><span>Presse & Partenaires</span></h2>
    <div class="sub-text">
      <p>Pour toute demande, contactez l'investigateur principal : Basile, Chaix, DR2, email.</p>
    </div>
  </section>

</main>
@endsection
