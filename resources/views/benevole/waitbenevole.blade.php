@extends('/benevole/mainbenevole')

@section('title', 'Mon espace')



@section('content')

<main class="maincontent mainuserhp">

  <!-- Header -->
  <div class="row rowbottom">
    <div class="col-md-2">
    </div>
    <div class="col-md-6">
      <h1>Un peu de patience</h1>
    </div>

  </div>

  <div class="row">
    <div class="col-md-2">
    </div>

    <div class="col-md-6">
      <hr class="hr">
      <h3>L'opétation n'a pas encore débuté</h3>
      <p>
        La mission MobiliSense n'a pas encore débuté pour le moment.<br>
        Nous vous indiquerons quand celle-ci sera disponible et vous pourrez retrouver toutes les informations relatives aux capteurs, comment et quand les mettre, ici.<br>
        En attendant, n'hésitez pas à aller visiter le reste du site afin d'en apprendre plus sur MobiliSense.
      </p>
    </div>
    <div class="col-md-2">
    </div>
    <div class="col-md-2">
      <img class="timev0" src="{{ asset('img/flecheright.png') }}" />
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
