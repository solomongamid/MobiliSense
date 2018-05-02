@extends('main')

@section('title', 'Actualités')

@section('content')
  @foreach ($news as $news)
      <h6>{{ $news->title }}</h6>
      <br>
      <p>{{ date('d/m/Y', strtotime($news->date)) }}</p>
      <br>
      <p>{!! html_entity_decode($news->description) !!}</p>
      <br>
  @endforeach
@endsection
