@extends('template.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-3 p-0 mb-3">
			<div class="nav flex-column nav-pills p-3 m-0 bg-white border">
                <p class="text-muted">Filtrar</p>
                <a href="{{ url('/jobs') }}" class = "nav-link">Todos</a>
				@foreach($categories as $item)
                    <a href="{{ url('/categories/' . $item['id']) }}" class = "nav-link">{{ $item['name'] }}</a>
                @endforeach
    		</div>
        </div>

        <div class="col-md-8 p-0 ml-3">
            <div class="list-group">
                @foreach($jobs as $job)

                    <a href="{{ url('/jobs/' . $job['id']) }}" class="list-group-item list-group-item-action mb-3">
                        <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1"><b>{{ $job['title'] }}</b></h5>
                        <small>Publicado em: {{ date_format(new DateTime($job['publication_date']), 'd-m-Y') }}</small>
                        </div>
                        <p class="mb-1">Empresa: {{ $job['company'] }}</p>
                        <small><i class="fa fa-map-marker"></i> Localização: <span>{{ $job['province'] }}</span></small>
                    </a>

                @endforeach
            </div>
            {{ $jobs->links() }}
        </div>

    </div>
</div>
@endsection('content')
