@extends('main')

@section('title', 'Actualités')

@section('content')
<header class="maincontent actuheader">
  <h1>Les actualités de MobiliSense</h1>
</header>

<main class="mainactu">
  @foreach ($news as $news)
      <hr>
      <h3>{{ $news->title }}</h3>
      <p class="date">{{ date('d/m/Y', strtotime($news->date)) }}</p>
      <br>
      <p>{!! html_entity_decode($news->description) !!}</p>
      <br>
      @if ($news->files != null)

        <a href="./{{ $news->files }}" target="_blank">
          <i class="fas fa-external-link-alt"></i>
          Retrouvez l'article complet ici
        </a>
      @endif
      <br>
  @endforeach
</main>
@endsection
