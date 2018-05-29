@extends('layouts.appAdmin')

@section('content')


  <ul class="pager">
    <li class="previous"><a href="{{ url('dossierHome') }}">Précédent</a></li>
  </ul>

<h3>Mise à jour d'un dossier</h3>

  <form method="POST" action="/dossierHome/{{ $dossier->id }}">

  {!! csrf_field() !!}

    <div class="form-group">
      <label>Titre</label>
      <input type="text" name="title" class="form-control" value="{{ $dossier->title }}">
    </div>

    <div class="form-group">
      <label>Description</label>
      <textarea name="description" id="mytextarea" rows="10" cols="150"><?php echo $dossier->description; ?></textarea>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </div>

  </form>



@endsection
