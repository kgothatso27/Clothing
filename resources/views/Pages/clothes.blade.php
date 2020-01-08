@extends('master')

@section('content')
<div class="row">
	<div class="col-md-12">

		<h3 align="center">Clothes</h3>
			<hr>
		@foreach($clothes as $cloth)
		<img src="{{$cloth->picture}}" style="width: 150px;"><br>
			R{{$cloth->price}}<br>
			{{$cloth->name}}<br>
			{{$cloth->Color}}<br>
			
			<a href="/edit/{{$cloth->id}}"><button>Edit</button></a>
			<a href="/destroy/{{$cloth->id}}"><button>Delete</button></a>
			<hr>
		@endforeach
		
	</div>
	
</div>

@endsection