@extends('template.app');

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-3 p-0 mb-3">
			<div class="nav flex-column nav-pills p-3 m-0 bg-white border">
				<p class="text-muted">Filtrar</p>
				@foreach($categories as $item)
                    <a href="{{ url('/categories/' . $item['id']) }}" class = "nav-link">{{ $item['name'] }}</a>
                @endforeach
    		</div>
		</div></div></div>
@endsection('content')
