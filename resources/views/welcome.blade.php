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

        <script src="./js/app.js"></script>


    </head>
    <body>
      <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <a class="nav-logo" href="#page-top">
                  <img src="./img/logo-big.png" alt="">
                </a>
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
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
      </nav>

      <header>
        <div class="carousel-container">
            <div class="row">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner">
                        <div class="item active" style="background-image: url(./img/placeholder1.jpg)">
                        </div>

                        <div class="item" style="background-image: url(./img/placeholder2.png)">
                        </div>

                        <div class="item" style="background-image: url(./img/placeholder3.jpg)">
                        </div>
                      </div>

                      <!-- Left and right controls -->
                      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
            </div>
        </div>
    </header>

    <main class="home-container container-fluid">
      <section class="block-presentation row">
        <article class="presentation col-xs-12">
          <section>
            <h1> Qu’est-ce que l’Étude MobiliSense?</h1>
            <div class="main-text">
              <p>L’étude MobiliSense porte sur les thèmes de la <b>mobilité</b>, de la <b>santé</b> et de <b>l’environnement</b>.
              </p>

              <p>
                L’objectif est <b>d’étudier les effets sur la santé respiratoire et cardiovasculaire de l’exposition à la pollution de l’air et au bruit,
                liée aux habitudes personnelles de transport.</b>
              </p>
              <p>
                Cette étude s’adresse aux femmes et aux hommes âgés de 32 à 66 ans (au 1er janvier 2018),
                 résidant  dans les communes du Grand-Paris. Des logements ont été tirés de manière aléatoire à partir des fichiers
                du Recensement de la Population.
              </p>
              <p>
                MobiliSense a été lancée par l’équipe Nemesis (Neighborhood Environments and Mobility: Effects on Social health InequalitieS)
                de l’Institut Pierre Louis d'Epidémiologie et de Santé Publique (Inserm UMR-S 1136),
                suite à l’obtention d’un ERC auprès du Conseil Européen de la Recherche par Basile Chaix, DR2 Inserm.
              </p>
            </div>
          </section>

          <section>
            <h1> Qu’est-ce que l’Étude MobiliSense ?</h1>

          </section>

        </article>
      </section>
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
