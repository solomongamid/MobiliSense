@extends('layouts.appAdmin')

@section('content')


	<ul class="pager">
		<li class="previous"><a href="{{ url('addCalendar') }}">Créer un nouvel événement</a></li>
	</ul>
	<table class="table">
	<thead>
	  <tr>
	    <th>Date</th>
	    <th>Titre</th>
	    <th>Description</th>
			<th>Lien</th>
			<th>Fichier</th>
	  </tr>
	</thead>
	<tbody>
	@foreach($datas as $data)
	  <tr>
	    <th>{{ $data->date }}</th>
	    <th><a href="{{ url('calendarHome/'.$data->id) }}" > {{ str_limit(strip_tags($data->title), 30) }}</a></th>
	    <th>{{ str_limit(strip_tags($data->description), 35) }}</th>
			<th>{{ str_limit(strip_tags($data->link), 15) }}</th>
			<th>{{ str_limit(strip_tags($data->files), 15) }}</th>
	    <th>
	        <a href="{{ url('deleteCalendar/'.$data->id) }}" class="btn btn-operation btn-danger">
	             Effacer
	        </a>
	    </th>
	  </tr>
	@endforeach
	</tbody>
	</table>


@endsection
