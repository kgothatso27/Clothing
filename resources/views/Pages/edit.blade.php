@extends('master')

@section('content')
<div class="row">
	<div class="col-md-12">

		<h3 align="center">Edit</h3>
		<form method="post" action="/update/{{$clothes->id}}">
			{{csrf_field() }}
		<table>
			<tr>
			<td>Color</td>
			<td><input type="text" name= "color"
			value="{{ ($clothes) ? $clothes['Color'] : ''}}"></td>
			</tr>
			
			<tr>
			<td>price</td>
			<td><input type="text" name= "price"
			value="{{ ($clothes) ? $clothes['price'] : ''}}"></td>
			</tr>
			
			<tr>
			<td><input type="submit" name="submit" value="update"></td>
			</tr>
		</table>
		</form>		
		
	</div>
	
</div>

@endsection