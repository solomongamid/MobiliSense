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

          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="col-md-4 control-label">Nom</label>

              <div class="col-md-6">
                  <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                  @if ($errors->has('name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="col-md-4 control-label">Email</label>

              <div class="col-md-6">
                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="col-md-4 control-label">Mot de passe</label>

              <div class="col-md-6">
                  <input id="password" type="password" class="form-control" name="password" required>

                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group">
              <label for="password-confirm" class="col-md-4 control-label">Confirmation du mot de passe</label>

              <div class="col-md-6">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
              </div>
          </div>

          <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-primary">
                      S'inscrire
                  </button>
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
