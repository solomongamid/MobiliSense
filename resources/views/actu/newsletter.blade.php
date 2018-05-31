 @extends('main')

@section('title', 'Newsletter')

@section('content')
<main class="actu-main-container">
  <h1 class="main-title">Inscription à la Newsletter Mobilisense</h1>
  <hr class="my-hr"/>


  <div class="container">

    <form class="form-horizontal" action="/newsletterok" method="POST">
      {!! csrf_field() !!}

      <fieldset>

      @if (Auth::guest())
      @else
      <ul class="pager">
          <li class="previous"><a href="{{ url('newsletterAdmin') }}">Précédent</a></li>
      </ul>
      @endif

      <!-- Message de validation -->
      @if ($send == 'ok')
        <div class="alert alert-success" role="alert" id="success_message">
          Validé  <i class="glyphicon glyphicon-thumbs-up"></i> Merci pour votre inscription.
        </div>
      @endif


      <!-- Prénom -->
      <div class="form-group">
        <label class="col-md-4 control-label">Prénom</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input name="firstname" placeholder="Prénom" class="form-control" required type="text" autofocus>
          </div>
        </div>
      </div>

      <!-- Nom -->
      <div class="form-group">
        <label class="col-md-4 control-label" >Nom</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input name="lastname" placeholder="Nom" class="form-control" required type="text">
          </div>
        </div>
      </div>

      <!-- Email -->
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label class="col-md-4 control-label">Email</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">

            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input id="email" name="email" placeholder="Adresse email" class="form-control" required type="email">
          </div>
          @if ($errors->has('email'))
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
        </div>
      </div>

      <!-- Lieu de travail-->

      <div class="form-group">
        <label class="col-md-4 control-label">Lieu de travail</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
        <input name="job" placeholder="Lieu de travail (facultatif)" class="form-control" type="text">
          </div>
        </div>
      </div>


      <!-- Bouton -->
      <div class="form-group submit">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
          <button type="submit" class="btn btn-valid" >Envoyer  <span class="glyphicon glyphicon-send"></span></button>
        </div>
      </div>

      </fieldset>
    </form>
  </div>
</div><!-- /formulaire -->

</main>

@endsection
