@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Home Page</h2>
                    @if(session("message"))
                        <p>{{session("message")}}</p>
                    @endif
					<a href="/category/create">
						<button class="btn btn-success">
							Create
						</button>
					</a>
					@foreach($data as $value)
						<a href="/category/{{ $value->id }}">
							<li>{{$value->name}}</li>
						</a>
						<hr>
					@endforeach
            
                </div>
        </div>

    </div>
</div>
@endsection


