<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>MobiliSense - @yield('title')</title>

      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

      <!-- Style -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  </head>
  <body>
    <nav id="mainNav" class="navbar navbar-fixed-top navbar-custom">
      <div class="navbarborder">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header page-scroll">
              <a class="nav-logo" href="/">
                <img src="./img/logo-big.png" alt="Logo MobiliSense" class="logo-big">
                <img src="./img/logo-small.png" alt="Logo MobiliSense" class="logo-small">
              </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="navbar-navigation">
                  <li class="hidden">
                      <a href="#page-top"></a>
                  </li>
                  <li class="dropdown accueil">
                      <a href="/" class="dropbtn">Accueil</a>
                  </li>
                  <li class="dropdown news">
                    <a href="{{ url('benevole') }}" class="dropbtn">Mon espace</a>
                  </li>
                  <li class="dropdown infos">
                    <a href="{{ url('bilan') }}" class="dropbtn">Mon Bilan</a>
                  </li>
                  <li class="dropdown works">
                    <a href="{{ url('questionnaire') }}" class="dropbtn">Questionnaire Géo</a>
                  </li>
              </ul>

              <ul class="nav navbar-nav navbar-right navbar-right-bene">
                 <li>
                  @if (Auth::guest())
                      <a type="button" class="navbar-btn login" href="{{ route('login') }}">Se connecter</a>
                  @else
                      <a type="button" class="navbar-btn login" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Se déconnecter
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  @endif
                  </li>
              </ul>
          </div>
          <!-- /.navbar-collapse -->

        </div>
      </div>
      <!-- /.container-fluid -->
    </nav>

      @yield('content')

    <!-- Footer -->
    <footer class="text-center">
                <div class="row">
                    <div class="footer-col col-md-3">
                      <h2>MobiliSense</h2>
                      <p>
                          Inserm IPLESP Unité 1136 - Equipe 8 Nemesis<br>
                          Faculté de médecine - Hôpital St-Antoine<br>
                          27, rue Chaligny 75012 Paris
                      </p>
                    </div>
                    <div class="footer-col col-md-6">
                      <img class="footer-img" src="./img/iple.png" alt="Institut Pierre Louis">
                      <img class="footer-img" src="./img/logo_inserm.png" alt="Inserm"><br>
                      <img class="footer-img" src="./img/erc.jpg" alt="European Research Council">
                      <img class="footer-img" src="./img/sorbonne.png" alt="footerLogo">
                      <img class="footer-img" src="./img/france.jpg" alt="footerLogo">
                    </div>
                    <div class="footer-col col-md-3">
                      <h2>Remerciements</h2>
                      <p>
                        Merci à toutes les personnes volontaires qui, par leur participation, contribuent au succès de cette recherche en santé publique.
                      </p>
                    </div>
                </div>
        <div class="row ml">
          <p>Mentions légales</p>
          <p>Merci à Y. Qixin, S. Abul et R. Renout qui ont développé ce site</p>
        </div>
    </footer>
  </body>
</html>
