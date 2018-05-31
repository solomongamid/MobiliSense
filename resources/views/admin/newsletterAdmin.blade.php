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
    <li class="previous"><a href="{{ url('newsletter') }}">Créer un nouvel abonné à la Newsletter</a></li>
  </ul>
  <table class="table">
      <thead>
        <tr>
          <th>Prénom</th>
          <th>Nom</th>
          <th>Email</th>
          <th>Lieu de travail</th>
        </tr>
      </thead>
      <tbody>
      @foreach($newsletter as $newsletter)
        <tr>
          <th>{{ $newsletter->firstname }}</th>
          <th>{{ $newsletter->lastname }}</th>
          <th> {{ $newsletter->email }} </th>
          <th>{{ $newsletter->job }}</th>
          <th><a href="{{ url('deleteNewsletter/'.$newsletter->id) }}" class="btn btn-operation btn-danger" onclick="return confirmation();">
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
