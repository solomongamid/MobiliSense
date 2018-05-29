@extends('layouts.appAdmin')

@section('content')


        <form method="POST" action="/addNews" enctype="multipart/form-data">

        {!! csrf_field() !!}

          <div class="form-group">
            <label>Titre</label>
            <input type="text" name="title" class="form-control">
          </div>

          <div class="form-group">
              <label>Sélectionner un fichier PDF</label>
              <input type="file" name="news_file">
          </div>

          <div class="form-group">
            <label>Description</label>
            <textarea name="description" id="mytextarea" rows="10" cols="150">Bonjour, ceci est un exemple !</textarea>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Ajouter une actu</button>
          </div>

        </form>

@endsection
