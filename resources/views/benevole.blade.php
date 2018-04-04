@extends('mainbenevole')

@section('title', 'Mon espace')



@section('content')

      <main class="mainuserhp">

        <!-- Header -->
        <div class="row">
          <div class="col-xs-2">
          </div>
          <div class="col-xs-5 center-left">
            <h1>Vague 1</h1>
            <h3 >Jour 1</h3>
          </div>
          <div class="col-xs-3">
            <h1>Date</h1>
            <h3>Le 09 Mars 2018</h3>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-2 day">
            <img class="moon" src="{{ asset('img/sun.png') }}">
          </div>
          <div class="col-xs-3">
            <hr class="hrday">
            <img height="500px;" src="{{ asset('img/humanbody.png') }}"/>
            <a href="#">
              <img class="circle1" src="{{ asset('img/circle.png') }}" />
              <span>
                Nom : Capteur 1<br />
                Couleur : Jaune<br />
                But : Capter le son
              </span>
            </a>
            <a href="#">
              <img class="circle2" src="{{ asset('img/circle.png') }}"/>
              <span>
                Nom : Capteur 2<br />
                Couleur : Rouge<br />
                But : Capter le bruit
              </span>
            </a>
          </div>
          <div class="col-xs-5 infoepe">
            <h3>Matin :</h3>
            <p>Réalisez 3 mesures...</p>
            <h3>Journée :</h3>
            <p>Portez du lever au coucher...</p>
            <ul class="listinfoepe">
              <li>Capteur 1</li>
              <li>Capteur 4</li>
              <li>Capteur 6</li>
            </ul>
            <p>Remplissez votre carnet de déplacement</p>
            <p>Répondez au questionnaire sur l'Iphone</p>
            <h3>Soir :</h3>
            <p>Réaliser 3 mesures...</p>
          </div>
          <div class="col-xs-2">
            <img class="timev1" src="{{ asset('img/flecheright.png') }}" />
            <img class="align-right" src="{{ asset('img/fleche.png') }}" />
          </div>
        </div>

        <div class="row night">
          <div class="col-xs-2 day">
            <img class="moon" src="{{ asset('img/moon.png') }}" />
          </div>
          <div class="col-xs-5">
            <hr class="hrnight">
            <h3 class="center-left">A recharger :</h3>
            <ul class="center-left">
              <li>Capteur 3</li>
              <li>Capteur 5</li>
              <li>Capteur 6</li>
            </ul>
          </div>

        </div>
      </main>
@endsection
