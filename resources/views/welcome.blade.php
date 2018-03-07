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
          <h1> What is MobiliSense ? </h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
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
                      <img class="footer-img" src="./img/placeholderLogo.jpg" alt="footerLogo">
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
