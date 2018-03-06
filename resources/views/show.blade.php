@extends('layouts.appAdmin')

@section('content')


  <ul class="pager">
    <li class="previous"><a href="{{ url('newsHome') }}">Previous</a></li>
  </ul> 

<h3>Update The News </h3>

  <form method="POST" action="/newsHome/{{ $news->id }}">

  {!! csrf_field() !!}

    <div class="form-group">
      <label>The title </label>
      <input type="text" name="title" class="form-control" value="{{ $news->title }}">
    </div>

    <div class="form-group">
      <label>Description</label>
      <textarea name="description" id="mytextarea" rows="4" cols="150"><?php echo $news->description; ?></textarea>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>

  </form>



@endsection