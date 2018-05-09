@extends('layouts.appAdmin')

@section('content')


	<ul class="pager">
		<li class="previous"><a href="{{ url('addNews') }}">Create new news</a></li>
	</ul> 
	<table class="table">
	<thead>
	  <tr>
	    <th>date</th>
	    <th>title</th>
	    <th>description</th>
	  </tr>
	</thead>
	<tbody>
	@foreach($datas as $data)
	  <tr>
	    <th>{{ $data->date }}</th>
	    <th><a href="{{ url('newsHome/'.$data->id) }}" > {{ $data->title }} </a></th>
	    <th>{{ str_limit(strip_tags($data->description), 15) }}</th>
	    <th><a href="{{ asset( '../storage/app/' .$data->files )  }}"> Download </a></th>
	    <th>
	        <a href="{{ url('delete/'.$data->id) }}" class="btn btn-operation btn-danger">
	             Effacer 
	        </a>
	    </th>
	  </tr>
	@endforeach
	</tbody>
	</table>


@endsection