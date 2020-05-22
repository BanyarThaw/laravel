@extends('layout')

@section("content")
	<div class="container">
		<h2>{{ $receipe->name }}</h2>
		<li>Ingredients - {{$receipe->ingredients}}</li>	
		<li>Category - {{ $receipe->categories->name}}</li>

		<button class="btn btn-default"><a href="/receipe/{{$receipe->id}}/edit">Edit</a></button>

		<form action="/receipe/{{ $receipe->id }}" method="POST">
			{{ method_field("DELETE")}}
			{{ csrf_field()}}
			<button type="submit" class="btn btn-primary">DELETE</button>
		</form>
	</div>
@endsection