@extends('main')

@section('title', 'Actualités')

@section('content')
<main class="actu-main-container">
  <h1 class="main-title">Les actualités Mobilisense</h1>
  <hr class="my-hr"/>


  @foreach ($news as $news)
    <section class="main-text">
      <h2><i class="fas fa-angle-right"></i><span>{{ $news->title }}</span></h2>
      <div class="sub-text">
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
      </div>
    </section>
    <br>
    <br>
  @endforeach
</main>
@endsection
