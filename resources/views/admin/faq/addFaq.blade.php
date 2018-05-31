@extends('layouts.appAdmin')

@section('content')


        <form method="POST" action="/addFaq" enctype="multipart/form-data">

        {!! csrf_field() !!}

          <div class="form-group">
            <label>Question</label>
            <input type="text" name="title" class="form-control">
          </div>

          <div class="form-group">
            <label>Réponse</label>
            <textarea name="description" id="mytextarea" rows="10" cols="150">Un exemple de réponse.</textarea>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Ajouter une question à la FAQ</button>
          </div>

        </form>

@endsection
