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
        
    </head>
    <body>

        <div class="container">
            <div class="col-sm-8">
                <a href="#"><h1>MobiliSense</h1></a>
            </div>

            <div class="col-sm-4" id="app-navbar-collapse">
                <ul class="login_ul">
                @if (Route::has('login'))
                    <div >
                        @if (Auth::check())
                            <li><a href="{{ url('/home') }}">Home</a></li>
                        @else
                            <li><a href="{{ url('/login') }}">Login</a></li>
                        @endif
                    </div>
                @endif
                </ul>
            </div>
        </div>
        
        <div class="main_navbar">
            <div class="dropdown">
              <button class="dropbtn">Contexte et objectifs</button>
              <div class="dropdown-content">
                <a href="#">Contexte et objectifs</a>
                <a href="#">Méthodologie</a>
                <a href="#">Donnés collectées</a>
                <a href="#">Confidentialité</a>
                <a href="#">Calendrier</a>
                <a href="#">Collaborateurs</a>
              </div>
            </div> 
            <div class="dropdown">
              <button class="dropbtn">Actualité</button>
              <div class="dropdown-content">
                <a href="#">Actualité</a>
                <a href="#">Newsletter</a>
                <a href="#">Dossier de presse</a>
              </div>
            </div>
            <div class="dropdown">
              <button class="dropbtn">Pourquoi participer ?</button>
              <div class="dropdown-content">
                <a href="#">Pourquoi participer ?</a>
                <a href="#">Se connecter</a>
                <a href="#">Lettre d&#39;information</a>
                <a href="#">En savoir plus...</a>
              </div>
            </div>
            <div class="dropdown">
              <button class="dropbtn">Publications et communications</button>
              <div class="dropdown-content">
                <a href="#">Publications et communications</a>
                <a href="#">Travaux universitaires</a>
                <a href="#">Principaux résultats</a>
              </div>
            </div>
            <div class="dropdown">
              <button class="dropbtn">Contact</button>
            </div>
        </div>

        
    </body>
</html>
