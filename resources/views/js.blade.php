@extends("layout")

@section("content")
	<h2>JS</h2>
	@foreach($data as $value)
		<li>{{$value}}</li>
	@endforeach
@endsection