@extends('layouts.appAdmin')

@section('content')


        <form method="POST" action="/addNews">

        {!! csrf_field() !!}

          <div class="form-group">
            <label>The title </label>
            <input type="text" name="title" class="form-control">
          </div>

          <div class="form-group">
            <label>Description</label>
            <textarea name="description" id="mytextarea" rows="4" cols="150">Hello, World!</textarea>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Add news</button>
          </div>

        </form>

@endsection