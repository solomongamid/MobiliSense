@extends('/benevole/mainbenevole')

@section('title', 'Mon espace')



@section('content')

<main class="maincontent mainuserhp">

  <!-- Header -->
  <div class="row rowbottom">
    <div class="col-md-2">
    </div>
    <div class="col-md-6">
      <h1>La Vague 2 est terminée</h1>
    </div>

  </div>

  <div class="row">
    <div class="col-md-2">
    </div>

    <div class="col-md-6">
      <hr class="hr">
      <h3>L'enquête de mobilité</h3>
      <p class="aligncontentbenevole">
        Une fois le matériel récupéré, nous réaliserons un premier traitement des données collectées grâce à vous.
        Vous recevrez (soit par mail, soit par courier) un ensemble de cartes retraçant les déplacements que vous aurez effectués
        durant les 6 jours (à partir des données GPS). Nous fixerons ensemble un rendez-vous afin de valider avec
        vous et de compléter ces données de déplacements. L’entretien d’une heure environ se déroulera par téléphone.
      </p>
    </div>
    <div class="col-md-2">
    </div>
    <div class="col-md-2">
      <img class="timev3" src="{{ asset('img/flecheright.png') }}" />
      <img class="align-right" src="{{ asset('img/fleche2.png') }}" />
    </div>
  </div>
  <div class="row remerciements">
      <p>
        Un grand MERCI ! <strong>Si besoin, appelez 7 jours / 7</strong><br>
        au <strong>01 44 73 84 56</strong> ou au <strong>06 17 99 21 73</strong>
      </p>
  </div>

</main>
@endsection
