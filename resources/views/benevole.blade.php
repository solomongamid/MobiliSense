<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MobiliSense</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Style -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <link href="{{ asset('css/epe.css') }}" rel="stylesheet">

    </head>
    <body>
      <div class="day">
        <h1>Vague 1</h1>
        <h3>Jour 1</h3>
      </div>
      <div class="content">
        <div id="content-left">
          <img class="imgbody" src="{{ asset('img/humanbody.png') }}"/>
          <a href="#">
            <img class="circle" src="{{ asset('img/circle-orange.png') }}" />
            <span>
              Nom : Capteur 1<br />
              Couleur : Jaune<br />
              But : Capter le son
            </span>
          </a>
          <a href="#">
            <img class="circle2" src="{{ asset('img/circle-orange.png') }}"/>
            <span>
              Nom : Capteur 2<br />
              Couleur : Rouge<br />
              But : Capter le bruit
            </span>
          </a>
        </div>
        <div id="content-right">
          <img src="{{ asset('img/sun.png') }}" />
        </div>
      </div>
      <div class="content">
        <div id="content-left">
          <h3 class="night">A recharger :</h3>
          <ul class="night">
            <li>Capteur 3</li>
            <li>Capteur 5</li>
            <li>Capteur 6</li>
          </ul>
        </div>
        <div id="content-right">
          <img class="moon" src="{{ asset('img/moon.png') }}" />
        </div>
      </div>
    </body>
</html>
