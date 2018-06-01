@extends('main')

@section('title', 'Publications & Communications')

@section('content')
<main class="scientist-main-container">
  <h1 class="main-title">Les publications et communications de MobiliSense</h1>
  <hr class="my-hr"/>


  @foreach ($communication as $communication)
    <section class="main-text">
      <h2><i class="fas fa-angle-right"></i><span>{{ $communication->title }}</span></h2>
      <div class="sub-text">
        <p class="date">{{ date('d/m/Y', strtotime($communication->date)) }}</p>
        <br>
        <p>{!! html_entity_decode($communication->description) !!}</p>
        <br>
        @if ($communication->files != null)

          <a href="./{{ $communication->files }}" target="_blank">
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
