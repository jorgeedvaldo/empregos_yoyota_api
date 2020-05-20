@extends('template.app')

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
        </div>

        <div class="col-md-8 p-0 ml-3">

            @foreach($jobs as $job)

                <div class="media border p-3 mb-4 bg-white">
                    <div class="media-body">
                    <h5 class="mt-0 font-weight-normal">{{ $job['title'] }}</h5>
                        <span>Empresa: {{ $job['company'] }}</span><br />
                        <i class="fa fa-map-marker"></i> <span>{{ $job['province'] }}</span><br />
                        <span>Expira em: {{ $job['expiration_date'] }}</span>
                        <a href="{{ url('/jobs/' . $job['id']) }}" class = "btn btn-dark btn-block mt-3">Ver Detalhes</a>
                    </div>
                </div>

            @endforeach

        </div>

    </div>
</div>
@endsection('content')
