@extends('main')

@section('title', 'Actualités')

@section('content')
<main class="actu-main-container">
  <h1 class="main-title">Les dossiers de presse Mobilisense</h1>
  <hr class="my-hr"/>


  @foreach ($dossiers as $dossiers)
    <section class="main-text">
      <h2><i class="fas fa-angle-right"></i><span>{{ $dossiers->title }}</span></h2>
      <div class="sub-text">
        <p class="date">{{ date('d/m/Y', strtotime($dossiers->date)) }}</p>
        <br>
        <p>{!! html_entity_decode($dossiers->description) !!}</p>
        <br>
        @if ($dossiers->files != null)

          <a href="./{{ $dossiers->files }}" target="_blank">
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
