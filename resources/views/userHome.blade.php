@extends('layouts.appAdmin')

@section('content')

@if($flash = session('message'))
  <div class="col-md-4 alert alert-info">
      {{$flash}}
  </div>
@endif

  <ul class="pager">
    <li class="previous"><a href="{{ url('register') }}">Create new user</a></li>
  </ul> 
  <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Role</th>
        </tr>
      </thead>
      <tbody>
      @foreach($users as $user)
        <tr>
          <th>{{ $user->name }}</th>
          <th> {{ $user->email }} </th>
          @if($user->role===1)
              <td>Admin</td>
          @elseif($user->role===0)
              <td>User</td>
          @endif
          <th><a href="{{ url('deleteUser/'.$user->id) }}" class="btn btn-operation btn-danger" onclick="return confirmation();">
                  Effacer 
              </a>
          </th>
        </tr>
      @endforeach
      </tbody>
  </table>

<!-- <script>
  setTimeout(function() {
      $('.alert').fadeOut('fast');
      }, 3000);
</script> -->
@endsection