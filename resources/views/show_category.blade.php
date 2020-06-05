@extends('layouts.app')

@section("content")
	<div class="container">
		<h2>{{ $category->name }}</h2>
		<li>Description - {{$category->description}}</li>	

		<button class="btn btn-default"><a href="/category/{{$category->id}}/edit">Edit</a></button>

		<form action="/category/{{ $category->id }}" method="POST">
			{{ method_field("DELETE")}}
			{{ csrf_field()}}
			<button type="submit" class="btn btn-primary">DELETE</button>
		</form>
	</div>
@endsection