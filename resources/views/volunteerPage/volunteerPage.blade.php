@extends('main')

@section('title', 'Espace volontaires')

@section('content')

<!-- <header class="study-header">
  <div class="carousel-container">
    <div class="cover-bloc">
    </div>
    <h1 class="title">Qu'est ce qu'est MOBILISENSE ?</h1>
  </div>
</header> -->

<main class="volunteer-main-container">
  <a id="context" class="anchor"></a>
  <h1 class="main-title">Espaces Volontaires</h1>
  <a id="why" class="anchor"></a>
  <hr class="my-hr"/>


  <section class="main-text">
    <h2 class="title"><i class="fas fa-angle-right"></i><span>Pourquoi participer ?</span></h2>
    <div class="sub-text">
      <p>
        <strong>
          Nous vous proposons de vivre une expérience inédite avec nous !
        </strong>
      </p>

      <p>
        L’Étude MobiliSense a pour objectif d’étudier les expositions à la pollution de l’air et au bruit liées aux habitudes personnelles de transport
        et leurs effets sur la santé cardiovasculaire et respiratoire.
      </p>
      <p>
        Pour cela, notre équipe de recherche a recours à des capteurs de localisation, environnementaux,
        comportementaux et de santé qui permettent de fournir des données de grandes précisions sur notre environnement immédiat,
        conduisant les chercheurs à réaliser des évaluations des expositions personnelles à la pollution en fonction des lieux visités et des trajets effectués.
      </p>
      <p>
        Du point de vue des bénéfices collectifs, les résultats de cette étude pourront aider
        les pouvoirs publics à améliorer les politiques de lutte contre la pollution de l’air et la pollution sonore
        liées à la question de la mobilité et à remporter de nouvelles victoires dans le champ de la prévention des
        pathologies cardiovasculaires et respiratoires.
      </p>
      <p>
        Du point de vue des bénéfices individuels, les données collectées peuvent avoir un intérêt pour vous.
        Vous recevrez un bilan de vos expositions environnementales et sur certains aspects de votre santé cardiovasculaire et respiratoire.
      </p>
      <p>
        Si vous souhaitez avoir des informations complémentaires, vous pouvez nous contacter. Rendez-vous sur la page <a href="{{ url('contact') }}">Contact</a>.
      </p>
    </div>
    <a id="how" class="anchor"></a>
  </section>

  <section  class="main-text">
    <h2 class="title"><i class="fas fa-angle-right"></i><span>Comment participer ?</span></h2>
    <div class="sub-text">
      <p>
        En partenariat avec <a href="https://www.insee.fr/fr/accueil" target="_blank"> <i class="fas fa-external-link-alt"></i>l’Insee</a>
        et à partir des fichiers du Recensement de la Population de 2014, des logements ont été tirés de manière aléatoire (notre échantillon est stratifié à 3 degrés).
        Si c’est le cas de votre logements vous pouvez participez ! Inscrivez-vous directement sur le
        site dans la page <a href="{{ url('register') }}">S'inscrire</a> que vous trouverez en page d’accueil.
        Vous pouvez aussi nous contacter, rendez-vous sur la page <atarget="_blank" href="/contact">Contact</a>!
      </p>

      <p>
        Cette méthode a reçu le label d’intérêt général et de qualité statistique,
        elle permet d’obtenir des résultats représentatifs de la population, sur des critères de santé.
      </p>
      <p>
        Pour comprendre les liens entre pollution et sante, il est très important d’interroger des personnes dont les situations diffèrent.
         C’est pourquoi votre participation est essentielle. Vous apporterez des améliorations en faveur de l’aménagement urbain,
         des transports et de la santé.
      </p>
    </div>
    <a id="infoLetter" class="anchor"></a>
  </section>

  <section  class="main-text">
    <h2 class="title"><i class="fas fa-angle-right"></i><span>Lettre d'informations</span></h2>
    <p>
      @foreach ($information_letter as $information_letter)
        <h3><span>{{ $information_letter->title }}</span></h3>
        <p class="date">{{ date('d/m/Y', strtotime($information_letter->date)) }}</p>
          <p>{!! html_entity_decode($information_letter->description) !!}</p>
          @if ($information_letter->files != null)
            <a href="./{{ $information_letter->files }}" target="_blank">
            <i class="fas fa-external-link-alt"></i>
              Retrouvez l'événement complet ici
            </a>
          @endif
          <hr>
      @endforeach
    </p>
    <a id="moreinfo" class="anchor"></a>
  </section>

  <section class="main-text faq">
    <h2 class="title"><i class="fas fa-angle-right"></i><span>En savoir plus</span></h2>
    @foreach ($faq as $faq)
        <h3>
          <span class="faqtitle">{{ $faq->title }}</span>
          <i class="fas fa-chevron-circle-down"></i>
        </h3>
        <p>{!! html_entity_decode($faq->description) !!}</p>
        <hr>
    @endforeach
  </section>

</main>

@endsection
