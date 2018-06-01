@extends('layouts.appAdmin')

@section('content')


  <ul class="pager">
    <li class="previous"><a href="{{ url('academicWorkHome') }}">Précédent</a></li>
  </ul>

<h3>Mise à jour d'un travail universitaire</h3>

  <form method="POST" action="/academicWorkHome/{{ $academicWork->id }}">

  {!! csrf_field() !!}

    <div class="form-group">
      <label>Titre</label>
      <input type="text" name="title" class="form-control" value="{{ $academicWork->title }}">
    </div>

    <div class="form-group">
      <label>Nom / prénom</label>
      <input type="text" name="author_name" class="form-control" value="{{ $academicWork->author_name }}">
    </div>

<!--     <div class="form-group">
        <label>Fichier PDF <br>S'il y en a un déjà enregistré et que vous ne souhaitez pas le modifier, ne touchez à rien ici.</label>
        <input type="file" name="academicWork_file" value="{{ $academicWork->files }}">
    </div> -->

    <div class="form-group">
      <label>Description</label>
      <textarea name="description" id="mytextarea" rows="10" cols="150"><?php echo $academicWork->description; ?></textarea>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </div>

  </form>



@endsection
