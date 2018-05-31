@extends('main')

@section('title', 'L\'étude')

@section('content')

<!-- <header class="study-header">
  <div class="carousel-container">
    <div class="cover-bloc">
    </div>
    <h1 class="title">Qu'est ce qu'est MOBILISENSE ?</h1>
  </div>
</header> -->

<main class="study-main-container">
  <a id="context" class="anchor"></a>
  <h1 class="main-title">L'étude Mobilisense</h1>
  <hr class="my-hr"/>

  <section class="main-text">
    <h2 class="title"><i class="fas fa-angle-right"></i><span>Contexte et Objectifs</span></h2>
    <div class="sub-text">
      <h3 class="title">Contexte sociétal et scientifique</h3>
      <p>
        <strong>L’étude MobiliSense vise à étudier les effets de la pollution de l’air et du bruit liés aux habitudes personnelles de transport sur la santé respiratoire et cardiovasculaire. </strong>
        Entièrement financée par le Conseil Européen de la Recherche (ERC Consolidator 2014), l’étude a pour objet d’alimenter le débat public. Elle est en phase avec des efforts réalisés, en matière de politiques publiques, au niveau Européen (i) dans le champ du Transport (Programme Paneuropéen sur les Transports, la Santé et l’Environnement, PPE-TSE), (ii) pour la régulation de la pollution de l’air (paquet législatif « Air pur pour l’Europe » de décembre 2013), et (iii) pour la régulation du bruit (directive européenne sur le bruit). Dans un contexte où la France a été sommée par la Commission Européenne de mettre en place des actions pour réduire les concentrations de certains polluants et l’exposition au bruit, l’étude MobiliSense est également pertinent pour des politiques nationales visant la réduction des nuisances liées au transport (par exemple, le Plan National Santé – Environnement 2014 – 2018).
      </p>
      <p>
        Afin d’élaborer les hypothèses et objectifs de l’étude MobiliSense et d’appréhender comment ce projet pouvait s’insérer dans les efforts des politiques en cours, nous avons conduit une revue de la littérature sur les relations entre la pollution de l’air et / ou le bruit et la santé respiratoire et la santé cardiovasculaire. Cette revue de littérature a révélé qu’un nombre considérable d’études ont investigué les effets à long terme et à court terme de la pollution de l’air sur les symptômes respiratoires, la fonction pulmonaire, la pression artérielle et la variabilité du rythme cardiaque, ainsi que les effets de l’exposition au bruit sur la pression artérielle et la variabilité du rythme cardiaque ;
        <strong> mais que seulement peu d’études ont établi un lien entre les habitudes personnelles de transport, les expositions environnementales associées et la santé.</strong>
      </p>
      <p>
        <strong>
          Afin de réduire les nuisances occasionnées par les transports sur la santé des populations, les pouvoirs publics ont besoin de construire leurs actions à partir de données plus fiables sur les expositions environnementales liées au transport et sur leurs effets sur la santé. Il est donc important de développer des stratégies de recherche innovantes permettant de combler les lacunes dans les connaissances disponibles.
        </strong>

        <p>Sans parler des petites tailles d’échantillon mobilisées dans les études, cette revue de la littérature a fait apparaître différentes <strong>limites et lacunes :</strong></p>
      </p>

      <section class="list-of-text">
        <ul class="first-list">
          <li>
              - <strong>Limites dans l’évaluation des variables de santé :</strong>
              <ul class="sub-list">
                  <li>Les symptômes respiratoires ont été appréhendés au moyen de questionnaires papiers se référant à des périodes de rappel relativement longues impliquant des biais de déclaration.</li>
                  <li>Les études ont eu recours à la spirométrie qui fournit une image momentanée de la fonction respiratoire dans un contexte artificiel mais aucune d’entre elles n’a évalué la fonction respiratoire à partir de la respiration courante dans la vie de tous les jours.</li>
                  <li>
                    Très peu d’études se sont appuyées sur un suivi ambulatoire de la pression artérielle, et aucune étude n’a examiné à la fois la pression artérielle au repos et la pression artérielle ambulatoire (chacune de ces mesures
                    ayant son intérêt).
                  </li>
                  <li>Un nombre très faible d’études a examiné la pression pulsée, la pression artérielle centrale plutôt que brachiale (qui est plus prédictive des atteintes aux organes cibles) et la vitesse de propagation de l’onde de pouls (qui constitue un marqueur de la rigidité artérielle) en relation aux polluants de l’air.</li>
                  <li>Et très peu d’études ont tenu compte d’indicateurs de la variabilité du rythme cardiaque issus des domaines dits temporels et fréquentiels.</li>
              </ul>

          </li>
          <li>
              - <strong>Limites dans l’évaluation des niveaux d’exposition individuelle à la pollution de l’air et au bruit : </strong>
                Une fraction importante des études a assigné aux participants des estimations des expositions en extérieur au niveau du lieu de résidence (à partir de stations de mesure, de modèles de dispersion atmosphérique, ou de cartes de bruit). La validité d’une telle approche est limitée : (i)

                <ul class="sub-list">
                  <li>
                     Parce que les données d’exposition utilisées ignorent ou tiennent imparfaitement compte des sources de proximité.
                  </li>
                  <li>
                    Parce que les personnes passent des fractions de leur temps différentes :
                    <ul>
                      <li>Sur leur lieu de résidence plutôt qu’à d’autres endroits visités au cours des activités quotidiennes</li>
                      <li>Et à l’intérieur plutôt qu’à l’extérieur des bâtiments.</li>
                    </ul>
                  </li>
                </ul>

                 Du fait de ces sources d’erreur de mesure, l’amplitude du biais dans les expositions individuelles liée à l’utilisation d’estimations résidentielles de l’exposition varie vraisemblablement en fonction des profils individuels. Il y a un large consensus sur le fait que l’utilisation de capteurs portatifs constitue une voie privilégiée pour chercher à résoudre ces problèmes et améliorer la mesure des expositions personnelles.
                 <div>
                   De plus, la plupart des études ont appréhendé les expositions agrégées pour des périodes de temps (par exemple 24 heures) sans distinguer entre les sous-périodes des budgets espace-temps telles que les épisodes de temps passés dans les transports. Des résultats préliminaires suggèrent que le temps passé dans le trafic routier contribue de façon importante aux expositions personnelles à certains polluants. Les rares études qui ont comparé les niveaux d’exposition entre les modes de transport (sur la question des polluants de l’air mais pas encore du bruit) se sont souvent appuyées sur de petits échantillons et ont souvent comparé deux itinéraires prédéfinis et un nombre limité de modes alternatifs (et étaient donc assez peu généralisables).
                   <strong>Globalement, quasiment aucune étude n’a appréhendé à la fois les comportements de mobilité des personnes (en considérant tout l’éventail des modes de transport), les expositions environnementales associées et les effets qui en résultent sur la santé.</strong>
                 </div>
          </li>
          <li>
              - Enfin :
                <ul class="sub-list">
                  <li>
                     Peu d’études ont réalisé un suivi de l’exposition personnelle au noir de carbone (pourtant un marqueur excellent de la pollution liée au trafic routier qui semble particulièrement associé aux variables sanitaires respiratoires et cardiovasculaires).
                  </li>
                  <li>
                    Peu d’études concernant les effets de la pollution de l’air conduites en vie réelle se sont appuyées sur des estimations des doses inhalées.
                  </li>
                  <li>
                    Peu d’études ont été capables de prendre en compte la gêne subjective comme un facteur modificateur des effets de la pression sonore objective.
                  </li>
                  <li>
                    Et très peu d’études cardiovasculaires ont pris en compte l’exposition à la fois à des polluants de l’air et au bruit, et encore moins à partir de moniteurs personnels (une limite majeure puisque le trafic routier constitue une source commune de pollution de l’air et de bruit, chacun de ces deux termes pouvant réciproquement intervenir comme facteur de confusion dans les relations de l’autre avec la santé).
                  </li>
                </ul>
          </li>
        </ul>
      </section>

      <h3 class="title">Objectifs de l’étude</h3>
      <p>L’étude vise à aboutir à une évaluation compréhensive des relations entre les expositions liées au transport et la santé dans un échantillon de 1000 participants suivis sur une période de 2 ans.</p>
      <p>L’étude MobiliSense a pour but de combler des vides en termes de connaissances :</p>

      <section class="list-of-text">
          <ul class="first-list">
            <li>- En s’intéressant aux effets à la fois à court terme et à long terme des comportements personnels de transport.</li>
            <li>- En considérant deux expositions environnementales distinctes (la pollution de l’air et le bruit) liées à l’activité de transport qui ont souvent été étudiées séparément.</li>
            <li>- En évaluant un certain nombre de variables liées à la santé respiratoire et cardiovasculaire.</li>
            <li>- En dérivant des mesures fiables des expositions, des facteurs de confusion et des variables réponse au moyen de capteurs passifs ou requérant une action du sujet ainsi qu’avec des méthodes électroniques d’enquête innovantes.</li>
            <li>
              - Et en recourant à des simulations pour évaluer les impacts sanitaires de scénarios de changement des comportements individuels de transport et de réduction des expositions subies lors des déplacements, dans le but de construire un outil pour les décideurs publics.
              Ainsi, les objectifs de l’étude MobiliSense sont les suivants :
              <ul class="sub-list">
                <li>
                  <strong>Quantifier la contribution des habitudes personnelles de transport à l’exposition des individus à la pollution de l’air et au bruit.</strong>
                  <div>
                  Nous déterminerons dans quelle mesure les habitudes personnelles de transport contribuent à l’exposition globale des individus à différents polluants de l’air [particules ayant un diamètre aérodynamique inférieur ou égal à 2,5 µm (PM2,5), noir de carbone, dioxyde d’azote (NO2) et ozone (O3)] et au bruit. Nous comparerons les expositions à la pollution de l’air et au bruit subies dans les différents modes de transport (marche, vélo, véhicule motorisé personnel à deux roues ou à quatre roues, transports en commun). Enfin, nous examinerons dans quelle mesure les expositions liées au transport contribuent aux différences d’expositions entre groupes socio-économiques.
                  </div>
                </li>
                <li>
                  <strong>Examiner si les expositions à des polluants de l’air et au bruit liées au transport sont associées à des changements sanitaires à court terme et sur deux ans.</strong>
                  <div>
                  Nous examinerons si les expositions personnelles à des polluants de l’air et au bruit, à la fois globales et liées au transport, sont associées aux réponses à court terme du système respiratoire et cardiovasculaire et à des changements sur deux ans de ces variables de santé (symptômes respiratoires, fonction pulmonaire appréhendée par spirométrie et impédancemétrie pneumographique, pression artérielle au repos et ambulatoire, et variabilité du rythme cardiaque).
                  </div>
                </li>
                <li>
                  <strong>Examiner si les comportements de mobilité et les expositions liées au transport contribuent aux disparités socio-économiques de santé.</strong>
                  <div>
                  Nous examinerons si les comportements de mobilité et de transport et l’exposition à la pollution de l’air et l’exposition au bruit expliquent une partie des disparités socio-économiques d’évolution à court terme et à long terme de l’état de santé respiratoire et cardiovasculaire.
                  </div>
                </li>
                <li>
                  <strong>Construire et livrer un outil d’aide à la décision pour les politiques publiques.</strong>
                  <div>
                  Nous réaliserons des simulations afin d’évaluer dans quelle mesure différents scénarios de changement dans les habitudes de transport des populations ou de modification des niveaux d’exposition au cours des déplacements affecteraient les durées et les niveaux d’exposition globaux de ces populations et leur santé respiratoire et cardiovasculaire. Nous chercherons à construire un outil de simulation utilisable par les décideurs publics.
                  </div>
                </li>
              </ul>
            </li>
          </ul>
      </section>
    </div>
    <a id="methods" class="anchor"></a>
  </section>

  <section  class="main-text">
    <h2 class="title"><i class="fas fa-angle-right"></i><span>Méthodologie</span></h2>
    <p>Circa hos dies Lollianus primae lanuginis adulescens, Lampadi filius ex praefecto, exploratius causam Maximino spectante, convictus codicem noxiarum artium nondum per aetatem firmato consilio descripsisse, exulque mittendus, ut sperabatur, patris inpulsu provocavit ad principem, et iussus ad eius comitatum duci, de fumo, ut aiunt, in flammam traditus Phalangio Baeticae consulari cecidit funesti carnificis manu.</p>

    <p>Et quia Mesopotamiae tractus omnes crebro inquietari sueti praetenturis et stationibus servabantur agrariis, laevorsum flexo itinere Osdroenae subsederat extimas partes, novum parumque aliquando temptatum commentum adgressus. quod si impetrasset, fulminis modo cuncta vastarat. erat autem quod cogitabat huius modi.</p>

    <p>Tu autem, Fanni, quod mihi tantum tribui dicis quantum ego nec adgnosco nec postulo, facis amice; sed, ut mihi videris, non recte iudicas de Catone; aut enim nemo, quod quidem magis credo, aut si quisquam, ille sapiens fuit. Quo modo, ut alia omittam, mortem filii tulit! memineram Paulum, videram Galum, sed hi in pueris, Cato in perfecto et spectato viro.</p>
    <a id="data-collected" class="anchor"></a>
  </section>

  <section  class="main-text">
    <h2 class="title"><i class="fas fa-angle-right"></i><span>Données collectées</span></h2>
    <p>Les données collectées sont conforment aux dispositions de la loi relative à l’informatique, aux fichiers et aux libertés ainsi qu’au Code de la Santé Publique.</p>
    <section class="list-of-text">
        <p>Cette recherche a obtenu les avis suivants d’organismes réglementaires :</p>
        <ul class="first-list">
          <li>- <a href="https://www.cnis.fr/" >Conseil National de l’Information Statistique </a> (CNIS) : avis de conformité du CNIS, avis favorable du Comité du secret statistique du CNIS et avis favorable attribuant le label d’intérêt général et de qualité statistique du Comité du label de la statistique publique du CNIS.</li>
          <li>- Avis favorable du Comité d’Évaluation d’Éthique (CEEI/IRB) de <a href="https://www.inserm.fr/" > l’Inserm</a> (IRB00003888). </li>
          <li>- Avis favorable du Comité Consultatif sur le Traitement de l'Information en matière de Recherche dans le domaine de la Santé (CTTIRS).</li>
          <li>- Autorisation de la  <a href="https://www.cnil.fr/"> Commission Nationale de l’Informatique et des Libertés </a> (CNIL).</li>
        </ul>
        <p>Vu l'avis favorable du Conseil National de l'Information Statistique, cette étude est reconnue d'intérêt général et de qualité statistique sans avoir de caractère obligatoire. Elle a reçu le Visa n°2018X705SA du Ministre des finances et des comptes publics et du Ministre de l’économie, de l’industrie et du numérique, valable pour l’année 2018. En application de la loi n° 51-711 du 7 juin 1951 modifiée, les réponses au questionnaire MobiliSense sont protégées par le secret statistique et destinées à l’Inserm.</p>
    </section>
    <a id="confidentiality" class="anchor"></a>
  </section>

  <section  class="main-text">
    <h2 class="title"><i class="fas fa-angle-right"></i><span>Confidentialité</span></h2>
    <p>Vous pouvez avoir l’assurance que les données personnelles recueillies seront traitées conformément à la loi relative à l’informatique, aux fichiers et aux libertés.</p>
    <p>Les analyses statistiques conduites à partir des données recueillies concernent l’ensemble des participants de l’étude. Soyez assuré que les chercheurs ne s’intéressent jamais aux données d’un participant en particulier. Les résultats publiés concernent toujours l’ensemble des participants, et en aucun cas tel ou tel cas individuel.</p>
    <p>Les données seront analysées en combinant l'ensemble des volontaires MobiliSense. Stockées de façon sécurisée, elles seront accessibles uniquement au responsable de l’étude et à son équipe de recherche et de terrain, ainsi qu’à des collaborateurs encadrés par une clause de protection et de confidentialité.</p>
    <p>Bien sûr, puisque nous avons envoyé et prévoyons d’envoyer régulièrement des courriers de résultats aux participants de l’étude, nous disposons de leurs noms, prénoms et adresses, ainsi que de leurs coordonnées téléphoniques. Mais il est important de préciser que toutes ces informations nominatives ne figurent pas dans la base de données globale que nous utilisons pour les analyses. Les données d’analyse ne contiennent aucune information directement nominative.</p>
    <a id="calendar" class="anchor"></a>
  </section>

  <section  class="main-text">
    <h2 class="title"><i class="fas fa-angle-right"></i><span>Calendrier</span></h2>
    <div class="sub-text">
      @foreach ($calendar as $calendar)
        <h3 class="title"><span>{{ $calendar->title }}</span></h3>
        <p class="date">{{ date('d/m/Y', strtotime($calendar->date)) }}</p>
          <p>{!! html_entity_decode($calendar->description) !!}</p>
          @if ($calendar->files != null)
            <a href="./{{ $calendar->files }}" target="_blank">
            <i class="fas fa-external-link-alt"></i>
              Retrouvez l'événement complet ici
            </a><br>
          @endif
          @if ($calendar->link != null)
            <a href="./{{ $calendar->link }}" target="_blank">
            <i class="fas fa-external-link-alt"></i>
              Retrouvez l'événement complet ici
            </a>
          @endif
          <hr>
      @endforeach
    </div>
  </section>

</main>

@endsection
