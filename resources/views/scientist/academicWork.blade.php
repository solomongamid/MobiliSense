@extends('main')

@section('title', 'Travaux Universitaires')

@section('content')
<main class="scientist-main-container">
  <h1 class="main-title">Les Travaux Universitaires de MobiliSense</h1>
  <hr class="my-hr"/>


  @foreach ($academicWork as $academicWork)
    <section class="main-text">
      <h2><i class="fas fa-angle-right"></i><span>{{ $academicWork->title }}</span></h2>
      <h3><i class="fas fa-user"></i><span> {{ $academicWork->author_name }}</span></h3>
      <div class="sub-text">
        <p class="date">{{ date('d/m/Y', strtotime($academicWork->date)) }}</p>
        <br>
        <p>{!! html_entity_decode($academicWork->description) !!}</p>
        <br>
        @if ($academicWork->files != null)

          <a href="./{{ $academicWork->files }}" target="_blank">
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
