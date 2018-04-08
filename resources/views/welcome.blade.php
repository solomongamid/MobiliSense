@extends('main')

@section('title', 'Accueil')

@section('content')

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
                        <div class="item active" style="background-image: url(./img/carrou1.png)">
                        </div>

                        <div class="item" style="background-image: url(./img/carrou2.png)">
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
            <h1>Qu’est-ce que l’Étude MobiliSense ?</h1>
            <div class="main-text">
              <p>L’étude MobiliSense porte sur les thèmes de la <strong>mobilité</strong>, de la <strong>santé</strong> et de <strong>l’environnement</strong>.
              </p>

              <p>
                L’objectif est <strong>d’étudier les effets sur la santé respiratoire et cardiovasculaire de l’exposition à la pollution de l’air et au bruit,
                liée aux habitudes personnelles de transport.</strong>
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
              <p>
                L’étude intervient dans le domaine de <strong>l’épidémiologie sociale et environnementale</strong>. Elle permet de répondre à de nombreuses questions telles que :
              </p>
              <ul class="listvert">
                <li>Quelles sont les façons de se déplacer chaque jour qui exposent le plus (et le moins) à la pollution de l’air et au bruit ?</li>
                <li>L’exposition à la pollution de l’air et au bruit, au cours des déplacements, contribue-t-elle aux disparités socio-économiques de santé ?</li>
                <li>Quels scénarios sont-ils envisageables afin de limiter les niveaux d’exposition à la pollution de l’air et au bruit subis lors des déplacements ?</li>
                <li>Quels sont les effets de ces pollutions sur la santé cardiovasculaire et respiratoire ?</li>
              </ul>
            </div>
          </section>

          <section>
            <h1>A quoi servira l'étude ?</h1>
            <div class="main-text">
              <p>
                La gestion des nuisances sonores et de la pollution de l’air est un enjeu majeur afin <strong>d’améliorer la ville de demain et de mieux protéger
                la santé cardiovasculaire et respiratoire des personnes</strong>. L’Étude MobiliSense procédera à une analyse approfondie des effets de ces pollutions sur la santé.
                L’étude permettra l’élaboration <strong>d’outils d’aide à la décision destinés aux politiques publiques</strong> tant au niveau national qu’au niveau international,
                alors qu’ils ont besoin de construire leurs actions à partir de données fiables.
              </p>
            </div>
          </section>

          <section>
            <h1>Une étude innovante d’intérêt général :</h1>
            <div class="main-text">
              <p>
                Le caractère précurseur de l’	Étude MobiliSense tient au fait que, à l’inverse de la plupart
                des études portant sur les effets d’une exposition environnementale sur la santé :
              </p>
              <ul class="listvert">
                <li>Les expositions à la pollution de l’air et au bruit sont étudiées conjointement, et non pas séparément.</li>
                <li>Les expositions en condition de vie réelle sont établies, et non pas estimatiées.</li>
                <li>Les expositions sont mesurées à l’aide de capteurs embarqués sur les personnes et non pas seulement à l’aide de capteurs fixes.</li>
                <li>Les expositions tiennent compte de la mobilité des personnes.
                  Elles sont appréhendées aux niveaux des lieux fréquentés comme des déplacements, et non pas simplement au domicile ou sur le lieu de travail.</li>
                </ul>
                <p>Très peu d’études similaires ont été mises en place dans le monde.</p>
            </div>
          </section>

          <section class="statspub">
            <img src="./img/statspub.png" alt="Statistique Publique" />
            <p>Vu l'avis favorable du Conseil national de l'information statistique, cette enquête est reconnue <b>d'intérêt général
              et de qualité statistique</b> sans avoir de caractère obligatoire. Visa n°2018X705SA du Ministère de l’économie et des finances,
              valable pour l’année 2018. En application de la loi n° 51-711 du 7 juin 1951 modifiée, les réponses à ce questionnaire sont
              protégées par le secret statistique et destinées à l’Inserm. La loi n° 78-17 du 6 janvier 1978 modifiée relative à
              l'informatique, aux fichiers et aux libertés, s'applique aux réponses faites à la présente enquête.
              Elle garantit aux personnes concernées un droit d'accès, d’opposition et de rectification pour les données les concernant.
              Ce droit peut être exercé auprès de <a href="mailto:mobilisense@inserm.fr">mobilisense@inserm.fr</a>.
          </section>

        </article>
      </section>
    </main>

@endsection
