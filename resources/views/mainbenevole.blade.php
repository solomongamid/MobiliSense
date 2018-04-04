<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MobiliSense - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Style -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <link href="{{ asset('css/epe.css') }}" rel="stylesheet">

        <script src="./js/app.js"></script>

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
                        <a href="/"></a>
                    </li>
                    <li class="page-scroll dropdown">
                        <a href="/" class="dropbtn">Accueil</a>
                    </li>
                    <li class="page-scroll dropdown">
                        <a href="/benevole" class="dropbtn">Mon Espace</a>
                    </li>
                    <li class="page-scroll dropdown">
                      <a href="#bilan" class="dropbtn">Mon Bilan</a>
                    </li>
                    <li class="page-scroll dropdown">
                      <a href="#questionnaire" class="dropbtn">Questionnaire Géo</a>
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
          <p>Merci à R. Renout, Y. Qixin, S. Abul, C. Rabehi qui ont développé ce site</p>
        </div>
    </footer>
  </body>
</html>
