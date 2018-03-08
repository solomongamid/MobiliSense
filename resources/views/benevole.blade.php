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

      <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="containerfluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <a class="navbar-brand" href="#page-top">MobiliSense</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll dropdown">
                        <a href="#portfolio" class="dropbtn">Accueil</a>
                    </li>
                    <li class="page-scroll dropdown">
                      <a href="#portfolio" class="dropbtn">Bilan</a>
                    </li>
                    <li class="page-scroll dropdown">
                      <a href="#portfolio" class="dropbtn">Véritas</a>
                    </li>
                </ul>
                @if (Auth::guest())
                    <a type="button" class="navbar-btn" href="{{ route('login') }}">Login</a>
                @else
                    <a type="button" class="navbar-btn" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @endif
            </div>
        </div>
      </nav>

      <main class="mainuserhp">

        <!-- Header -->
        <div class="row">
          <div class="col-xs-4 center-left">
            <h1>Vague 1</h1>
            <h3 >Jour 1</h3>
          </div>
          <div class="col-xs-6">
            <h1>Date</h1>
            <h3>Le 09 Mars 2018</h3>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-5">
            <hr>
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
          <div class="col-xs-4">
            <img class="moon" src="{{ asset('img/sun.png') }}">
            <ul class="infoepe">
              <li>Passez votre souris sur un des ronds pour voir le détail d'un des capteurs à porter aujourd'hui</li>
              <li>N'hésitez pas à cliquez sur le lien en savoir plus pour avoir plus de détails</li>
              <li>N'oubliez pas de mettre les capteurs demain à charger afin d'être le mieux équipé possible</li>
              <li>N'hésitez pas à nous contacter pour toute question / soucis technique</li>
            </ul>
          </div>
          <div class="col-xs-2">
            <img class="timev1" src="{{ asset('img/flecheright.png') }}" />
            <img class="align-right" src="{{ asset('img/fleche.png') }}" />
          </div>
        </div>

        <div class="row">
          <div class="col-xs-5">
            <hr>
            <h3 class="center-left">A recharger :</h3>
            <ul class="center-left">
              <li>Capteur 3</li>
              <li>Capteur 5</li>
              <li>Capteur 6</li>
            </ul>
          </div>
          <div class="col-xs-4">
            <img class="moon" src="{{ asset('img/moon.png') }}" />
          </div>
        </div>
      </main>
      <!-- Footer -->
      <footer class="text-center">
          <div class="footer-above">
              <div class="container">
                  <div class="row">
                      <div class="footer-col col-md-4">
                        <h2>Liens utiles</h2>
                        <ul class="list-footer">
                          <li>
                            <a href="#">Equipe</a>
                          </li>
                          <li>
                            <a href="#">Contact</a>
                          </li>
                        </ul>
                      </div>
                      <div class="footer-col col-md-4">
                        <img class="footer-img" src="./img/logo_inserm.png" alt="footerLogo">
                      </div>
                      <div class="footer-col col-md-4">
                        <h2>Remerciements</h2>
                        <ul class="thanks-footer">
                          <li>Raphael RENOIT</li>
                          <li>Suliman ABDELGADEIR</li>
                          <li>Qixin YING</li>
                        </ul>
                      </div>
                  </div>
              </div>
          </div>
      </footer>
    </body>
</html>
