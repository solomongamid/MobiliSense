@extends('layouts.appAdmin')

@section('content')


  <ul class="pager">
    <li class="previous"><a href="{{ url('faqHome') }}">Précédent</a></li>
  </ul>

<h3>Mise à jour d'une question</h3>

  <form method="POST" action="/faqHome/{{ $faq->id }}">

  {!! csrf_field() !!}

    <div class="form-group">
      <label>Titre</label>
      <input type="text" name="title" class="form-control" value="{{ $faq->title }}">
    </div>

    <div class="form-group">
      <label>Description</label>
      <textarea name="description" id="mytextarea" rows="10" cols="150"><?php echo $faq->description; ?></textarea>
    </div>

    <div class="form-group">
      <label>Position</label>
      <input type="text" name="position" class="form-control" value="{{ $faq->position }}">
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </div>

  </form>

@endsection
