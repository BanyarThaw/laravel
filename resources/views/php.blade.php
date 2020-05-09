@extends("layout")

@section("content")
	<h2>PHP</h2>
	@foreach($data as $value)
		<li>{{$value}}</li>
	@endforeach
@endsection