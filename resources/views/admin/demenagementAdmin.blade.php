@extends('layouts.appAdmin')

@section('content')
<div class="row">
  @if($flash = session('message'))
    <div class="col-md-4 alert alert-info">
        {{$flash}}
    </div>
  @endif
</div>

<div class="row">

  <ul class="pager">
    <li class="previous"><a href="{{ url('demenagement') }}">Enregistrer un nouveau déménagement</a></li>
  </ul>
  <table class="table">
      <thead>
        <tr>
          <th>Prénom</th>
          <th>Nom</th>
          <th>Email</th>
          <th>Adresse</th>
          <th>Code postal</th>
          <th>Ville</th>
        </tr>
      </thead>
      <tbody>
      @foreach($demenagement as $demenagement)
        <tr>
          <th>{{ $demenagement->firstname }}</th>
          <th>{{ $demenagement->name }}</th>
          <th> {{ $demenagement->email }} </th>
          <th>{{ $demenagement->adress }}</th>
          <th> {{ $demenagement->postalcode }} </th>
          <th> {{ $demenagement->city }} </th>
          <th><a href="{{ url('deleteDemenagement/'.$demenagement->id) }}" class="btn btn-operation btn-danger" onclick="return confirmation();">
                  Supprimer
              </a>
          </th>
        </tr>
      @endforeach
      </tbody>
  </table>
</div>

<!-- <script>
  setTimeout(function() {
      $('.alert').fadeOut('fast');
      }, 3000);
</script> -->
@endsection
