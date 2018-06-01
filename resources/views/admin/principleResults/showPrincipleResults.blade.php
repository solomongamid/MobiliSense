@extends('layouts.appAdmin')

@section('content')


  <ul class="pager">
    <li class="previous"><a href="{{ url('principleResultsHome') }}">Précédent</a></li>
  </ul>

<h3>Mise à jour d'un principaux résultats</h3>

  <form method="POST" action="/principleResultsHome/{{ $principleResults->id }}">

  {!! csrf_field() !!}

    <div class="form-group">
      <label>Titre</label>
      <input type="text" name="title" class="form-control" value="{{ $principleResults->title }}">
    </div>

    <div class="form-group">
        <label>Fichier PDF <br>S'il y en a un déjà enregistré et que vous ne souhaitez pas le modifier, ne touchez à rien ici.</label>
        <input type="file" name="principleResults_file" value="{{ $principleResults->files }}">
    </div>

    <div class="form-group">
      <label>Description</label>
      <textarea name="description" id="mytextarea" rows="10" cols="150"><?php echo $principleResults->description; ?></textarea>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </div>

  </form>



@endsection
