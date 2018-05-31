@extends('layouts.appAdmin')

@section('content')


	<ul class="pager">
		<li class="previous"><a href="{{ url('addFaq') }}">Créer une nouvelle question pour la FAQ</a></li>
	</ul>
	<table class="table">
	<thead>
	  <tr>
	    <th>Titre</th>
	    <th>Description</th>
			<th>Position</th>
	  </tr>
	</thead>
	<tbody>
	@foreach($datas as $data)
	  <tr>
	    <th><a href="{{ url('faqHome/'.$data->id) }}" > {{ str_limit(strip_tags($data->title), 30) }}</a></th>
	    <th>{{ str_limit(strip_tags($data->description), 35) }}</th>
			<th>{{ $data->position }}</th>
	    <th>
	        <a href="{{ url('deleteFaq/'.$data->id) }}" class="btn btn-operation btn-danger">
	             Effacer
	        </a>
	    </th>
	  </tr>
	@endforeach
	</tbody>
	</table>


@endsection
