@extends('layouts.appAdmin')

@section('content')


        <form method="POST" action="/addCalendar" enctype="multipart/form-data">

        {!! csrf_field() !!}

          <div class="form-group">
            <label>Titre</label>
            <input type="text" name="title" class="form-control">
          </div>

          <div class="form-group">
              <label>Sélectionner un fichier PDF</label>
              <input type="file" name="calendar_file">
          </div>

          <div class="form-group">
              <label>Insérer un lien</label>
              <input type="text" name="link" class="form-control">
          </div>

          <div class="form-group">
            <label>Description</label>
            <textarea name="description" id="mytextarea" rows="10" cols="150">Bonjour, ceci est un exemple d'événement !</textarea>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Ajouter une événement</button>
          </div>

        </form>

@endsection
