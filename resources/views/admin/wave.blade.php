@extends('layouts.appAdmin')

@section('content')


        <form method="POST" action="/wave1" enctype="multipart/form-data">

        {!! csrf_field() !!}

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Lancer la première vague</button>
          </div>

        </form>

        <form method="POST" action="/betweenwave" enctype="multipart/form-data">

        {!! csrf_field() !!}

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Entre 2 vagues / Questionnaire Géo</button>
          </div>

        </form>

        <form method="POST" action="/wave2" enctype="multipart/form-data">

        {!! csrf_field() !!}

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Lancer la seconde vague</button>
          </div>

        </form>

        <form method="POST" action="/stopwave" enctype="multipart/form-data">

        {!! csrf_field() !!}

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Arrêter la vague en cours</button>
          </div>

        </form>

@endsection
