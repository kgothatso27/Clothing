@extends('master')

@section('content')
<div class="row">
	<div class="col-md-12">

		
		<a href="\home" ><button>Home Page</button></a><br></br>
		<a href="\men"><button>Men page</button></a><br><br>
		<a href="\women"><button>Women page</button></a>

		<h3 align="center">Kid's Wear</h3>
			<hr>
		@foreach($clothes as $cloth)
			<img src="{{$cloth->picture}}" style="width: 150px;"><br>
			R{{$cloth->price}}<br>
			{{$cloth->name}}<br>
			{{$cloth->Color}}<br>
			<hr>
		@endforeach
	</div>
	
</div>

@endsection
