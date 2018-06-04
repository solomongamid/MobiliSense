@extends('/benevole/mainbenevole')

@section('title', 'Mon espace - Questionnaire')



@section('content')

<main class="maincontent mainuserhp">

  <!-- Header -->
  <div class="row rowbottom">
    <div class="col-md-2">
    </div>
    <div class="col-md-6">
      <h1><i class="fas fa-angle-double-right"></i> Questionnaire Véritas :</h1>
    </div>

  </div>

  <div class="row justify">
    <div class="col-md-2">
    </div>

    <div class="col-md-6">
      <hr class="hr">
      <h3>Le questionnaire n'est pas encore en ligne</h3>
      <p>
        L'opération n'ayant pas encore débuté ou n'étant pas encore terminé, le questionnaire n'est pas encore en ligne et ne peut donc être rempli.<br>
        N'hésitez pas à revenir après la première vague, ce dernier apparaitra dès qu'il sera disponible.
      </p>
    </div>
  </div>

  <div class="row justify">
    <div class="col-md-2">
    </div>

    <div class="col-md-6">
      <hr class="hr">
      <h3>Explications</h3>
      <p>
        Ce questionnaire nous sert à récolter vos retours concernant l'opération, qu'ils soient positifs ou négatifs.<br>
        Ces informations nous permettront dans un second temps de pouvoir améliorer la façon de procéder quand à la récolte de données pour ainsi vous apporter une meilleure expérience utilisateur et bénévole quant à cette étude.
      </p>
    </div>
  </div>

  <div class="row justify">
    <div class="col-md-2">
    </div>

    <div class="col-md-6">
      <hr class="hr">
      <h3>Infos</h3>
      <p>
        Pour répondre simplement à ce questionnaire. Cliquez sur le bouton 'Accès Questionnaire', une nouvelle page apparaitra avec quelques questions à répondre.<br>
        Ce dernier ne prend pas plus de 5 minutes et il est très important pour nous, merci donc de le remplir.<br>
        N'hésitez pas à nous contacter si vous avez la moindre difficulté ou le moindre doute.
      </p>
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
