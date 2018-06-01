principleResults
@extends('main')

@section('title', 'Principaux Résultats')

@section('content')
<main class="scientist-main-container">
  <h1 class="main-title">Les principaux résultats de MobiliSense</h1>
  <hr class="my-hr"/>


  @foreach ($principleResults as $principleResults)
    <section class="main-text">
      <h2><i class="fas fa-angle-right"></i><span>{{ $principleResults->title }}</span></h2>
      <div class="sub-text">
        <p class="date">{{ date('d/m/Y', strtotime($principleResults->date)) }}</p>
        <br>
        <p>{!! html_entity_decode($principleResults->description) !!}</p>
        <br>
        @if ($principleResults->files != null)

          <a href="./{{ $principleResults->files }}" target="_blank">
            <i class="fas fa-external-link-alt"></i>
            Retrouvez l'article complet ici
          </a>
        @endif
        <br>
      </div>
    </section>
    <br>
    <br>
  @endforeach
</main>
@endsection
