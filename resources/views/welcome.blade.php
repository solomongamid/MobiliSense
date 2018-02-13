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
                        <a href="#portfolio" class="dropbtn">Présentation</a>
                        <div class="dropdown-content">
                          <a href="#">Contexte et objectifs</a>
                          <a href="#">Méthodologie</a>
                          <a href="#">Donnés collectées</a>
                          <a href="#">Confidentialité</a>
                          <a href="#">Calendrier</a>
                          <a href="#">Collaborateurs</a>
                        </div>
                    </li>
                    <li class="page-scroll dropdown">
                      <a href="#portfolio" class="dropbtn">Actualité</a>
                      <div class="dropdown-content">
                        <a href="#">Actualité</a>
                        <a href="#">Newsletter</a>
                        <a href="#">Dossier de presse</a>
                      </div>
                    </li>
                    <li class="page-scroll dropdown">
                      <a href="#portfolio" class="dropbtn">En savoir plus</a>
                      <div class="dropdown-content">
                        <a href="#">Pourquoi participer ?</a>
                        <a href="#">Se connecter</a>
                        <a href="#">Lettre d'information</a>
                        <a href="#">En savoir plus...</a>
                      </div>
                    </li>
                    <li class="page-scroll dropdown">
                      <a href="#portfolio" class="dropbtn">Nos travaux</a>
                      <div class="dropdown-content">
                        <a href="#">Publications et communications</a>
                        <a href="#">Travaux universitaires</a>
                        <a href="#">Principaux résultats</a>
                      </div>
                    </li>
                    <li class="page-scroll">
                      <a href="#portfolio" class="dropbtn">Contact</a>
                    </li>
                </ul>

                <a type="button" class="navbar-btn">
                  Login
                </a>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
      </nav>
      
    </body>
</html>
