@extends('template.app')

@section('content')
<!-- Page Content -->
<div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
      <h1 class="mt-4">{{$job['title']}}</h1>

        <!-- Date/Time -->
        <p>Publicado em: {{ date_format(new DateTime($job['publication_date']), 'd-m-Y') }}</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="{{asset('storage/jobs/' . $job['photo'])}}" alt="Emprego">

        <hr>

        <!-- Post Content -->
        <h3>Descrição:</h3>
        <p class="lead">{!!$job['description']!!}</p>

        <p>Empresa: {{$job['company']}}</p>
        <p>E-mail para a candidatura: {{$job['email']}} </p>
        <p>Oportunidade válida até: {{date_format(new DateTime($job['expiration_date']), 'd-m-Y')}}</p>
        <hr>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categorias</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12">
                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="{{ url('/jobs') }}" >Todos</a>
                    <li>
                    @foreach($categories as $item)
                        <li>
                            <a href="{{ url('/categories/' . $item['id']) }}">{{ $item['name'] }}</a>
                        </li>
                    @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection('content')
