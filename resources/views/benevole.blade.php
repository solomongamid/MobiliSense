@extends('mainbenevole')

@section('title', 'Mon espace')



@section('content')

      <main class="mainuserhp">

        <!-- Header -->
        <div class="row rowbottom">
          <div class="col-md-4">
          </div>
          <div class="col-md-6">
            <h1>Vague 1</h1>
            <h3 >Jour 1 : Jeudi 05 avril 2018</h3>
          </div>

        </div>

        <div class="row rowbottom">
          <div class="col-md-1 day">
            <img class="moon" src="{{ asset('img/sun.png') }}">
          </div>
          <div class="col-md-3">
            <img height="500px;" src="{{ asset('img/humanbody.png') }}"/>
            <a href="#">
              <img class="circle1" src="{{ asset('img/circle.png') }}" />
              <span>
                Nom : Capteur 1<br />
                Couleur : Jaune<br />
                But : Pour la nuisance sonore
              </span>
            </a>
            <a href="#">
              <img class="circle2" src="{{ asset('img/circle.png') }}"/>
              <span>
                Nom : Capteur 4<br />
                Couleur : Rouge<br />
                But : Pollution de l'air
              </span>
            </a>
            <a href="#">
              <img class="circle3" src="{{ asset('img/circle.png') }}"/>
              <span>
                Nom : Capteur 6<br />
                Couleur : Marron<br />
                But : Rythme cardiaque
              </span>
            </a>
          </div>
          <div class="col-md-6">
            <hr class="hr">
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
            <p>Réalisez 3 mesures...</p>
          </div>
          <div class="col-md-2">
            <img class="timev1" src="{{ asset('img/flecheright.png') }}" />
            <img class="align-right" src="{{ asset('img/fleche.png') }}" />
          </div>
        </div>

        <div class="row night">
          <div class="col-md-1 day">
            <img class="moon" src="{{ asset('img/moon.png') }}" />
          </div>
          <div class="col-md-3">
          </div>
          <div class="col-md-6">
            <hr class="hr">
            <h3>Nuit :</h3>
            <p class="beflist">Rechargez dans n'importe quelle pièce...</p>
            <ul class="listinfoepe">
              <li>Capteur 4</li>
              <li>Capteur 6</li>
            </ul>
            <p class="beflist">Rechargez dans la pièce où vous dormez...</p>
            <ul class="listinfoepe">
              <li>Capteur 3</li>
            </ul>
          </div>
          <div class="col-md-2">
          </div>
        </div>
      </main>
@endsection
