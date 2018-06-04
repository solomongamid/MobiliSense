@extends('/benevole/mainbenevole')

@section('title', 'Mon espace')



@section('content')

<main class="maincontent mainuserhp">

  <!-- Header -->
  <div class="row rowbottom">
    <div class="col-md-2">
    </div>
    <div class="col-md-6">
      <h1>Entre deux vagues</h1>
    </div>

  </div>

  <div class="row justify">
    <div class="col-md-2">
    </div>

    <div class="col-md-6">
      <hr class="hr">
      <h3>Merci de votre participations</h3>
      <p>
        Vos données ont bien été récoltées.<br>
        Nous reviendrons vers vous dès que ces dernières seront communicables.<br>
        En attendant, n'hésitez pas à aller répondre au <a href="{{ url('questionnaire') }}" target="_self">Questionnaire Géo</a> lorsque ce dernier
        sera prêt.
      </p>
    </div>
    <div class="col-md-2">
    </div>
    <div class="col-md-2 fleche">
      <img class="timev2" src="{{ asset('img/flecheright.png') }}" />
      <img class="align-right" src="{{ asset('img/fleche2.png') }}" />
    </div>
  </div>
  <div class="row remerciements">
      <p>
        Un grand MERCI ! <br class="showmobile"><strong>Si besoin, appelez 7 jours / 7</strong><br>
        au <strong>01 44 73 84 56</strong><br class="showmobile"> ou au <strong>06 17 99 21 73</strong>
      </p>
  </div>

</main>
@endsection
