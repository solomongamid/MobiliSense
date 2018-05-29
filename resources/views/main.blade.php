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
      <link href="{{ asset('css/main.css') }}" rel="stylesheet">

      <script src="./js/app.js"></script>


  </head>
  <body>
    <nav id="mainNav" class="navbar navbar-fixed-top navbar-custom">
      <div class="navbarborder">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header page-scroll">
              <a class="nav-logo" href="/">
                <img src="./img/logo-big.png" alt="Logo MobiliSense">
              </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="navbar-navigation">
                  <li class="hidden">
                      <a href="#page-top"></a>
                  </li>
                  <li class="dropdown accueil">
                      <a href="/" class="dropbtn">Accueil</a>
                  </li>
                  <li class="dropdown presentation">
                      <a href="/study" class="dropbtn">L'ÉTUDE</a>
                      <div class="dropdown-content">
                        <a href="/study#context">Contexte et objectifs</a>
                        <a href="/study#methods">Méthodologie</a>
                        <a href="/study#data-collected">Donnés collectées</a>
                        <a href="/study#confidentiality">Confidentialité</a>
                        <a href="/study#">Calendrier</a>
                        <a href="/study#">Collaborateurs</a>
                      </div>
                  </li>
                  <li class="dropdown news">
                    <a href="/actu" class="dropbtn">Actualité</a>
                    <div class="dropdown-content">
                      <a href="/actu">Actualité</a>
                      <a href="/newsletter">Newsletter</a>
                      <a href="/dossier">Dossier de presse</a>
                    </div>
                  </li>
                  <li class="dropdown infos">
                    <a href="/volunteer" class="dropbtn">ESPACE VOLONTAIRES</a>
                    <div class="dropdown-content">
                      <a href="/volunteer">Pourquoi participer ?</a>
                      <a href="/volunteer">Comment participer ?</a>
                      @if (Auth::guest())
                          <a href="{{ route('login') }}">Se connecter</a>
                      @else
                          <a href="/benevole">
                            Mon espace
                          </a>
                      @endif
                      <a href="/volunteer">Lettre d'information</a>
                      <a href="/volunteer">En savoir plus...</a>
                    </div>
                  </li>
                  <li class="dropdown works">
                    <a href="#portfolio" class="dropbtn">ESPACE SCIENTIFIQUE</a>
                    <div class="dropdown-content">
                      <a href="#">Publications et communications</a>
                      <a href="#">Travaux universitaires</a>
                      <a href="#">Principaux résultats</a>
                    </div>
                  </li>
                  <li class="dropdown contact">
                    <a href="/contact" class="dropbtn">Contact</a>
                  </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a type="button" class="navbar-btn englishflag" href="#demenagement"><img src="./img/britishflag.png" alt=""></a>
                  </li>
                  <li>
                    <a type="button" class="navbar-btn login" href="#déménagement">Déménagement ?</a>
                    <!-- <a type="button" class="navbar-btn englishflag" href="#demenagement"><img src="./img/britishflag.png" alt=""></a> -->
                   </li>
                  <li>
                    @if (Auth::guest())
                      <a type="button" class="navbar-btn login" href="/register">S'inscrire</a>
                    @else
                     <a type="button" class="navbar-btn login" href="/benevole">Mon espace</a>
                   @endif
                   </li>
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
      <!-- /.container-fluid -->
    </nav>

    <a id="top-of-page" class="anchor"></a>

    @yield('content')

    <section class="nav-to-top">
      <a href="#top-of-page">
      <i class="arrow-icon fas fa-arrow-circle-up"></i>
      </a>
    </section>
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
          <p>Merci à Y. Qixin, S. Abdelgadeir et R. Renout qui ont développé ce site</p>
        </div>
    </footer>
    <script>
    $(function(){
        $('a[href^="#top-of-page"]').on('click', function(event) {
            var $target = $($(this).attr('href'));

            $('html, body').animate({
                scrolltop: $target.offset().top
            }, 400);

            event.preventDefault();
        });
    });
    </script>
  </body>
</html>
