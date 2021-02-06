@extends('template.app')

@section('content')
    <section class="capa mb-5 pt-1">
        <div class="container">
            <div class="row">
                <div class="col-md-7 big-text">
                    <p class="text-black">A TUA CARREIRA</p>
                    <p class="text-black">COMEÇA AGORA</p>
                    <a href="{{ url('/jobs') }}" class = "btn btn-big btn-outline-dark">VER OPORTUNIDADES</a>
                </div>

                <div class="col-md-5 mt-4 p-4 big-text center-all">
                    <!-- Preview Image -->
                    <img class="img-fluid rounded" src="{{asset('storage/home/1.jpg')}}" alt="Emprego">
                </div>
            </div>
        </div>
    </section>


    <!--OPORTUNIDADES-->
    <section class="mt-5 mb-5">
        <div class="container">
            <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="section-heading text-uppercase">. . .</h1>
                <h2 class="section-heading text-uppercase">Oportunidades</h2>
                <p class="section-subheading text-muted">Vagas de emprego recentemente publicadas</p>
            </div>
            </div>
            <div class="row">
                <div class="col-md-12 p-0 ml-3">
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
                    <center><a href="{{ url('/jobs') }}" class = "btn btn-lg btn-block btn-dark">Ver Mais...</a></center>
                </div>
            </div>
        </div>
    </section>

    <!--SERVIÇOS-->
    <section id="services" class="mt-5 mb-5">
        <div class="container">
            <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="section-heading text-uppercase">. . .</h1>
                <h2 class="section-heading text-uppercase">Serviços</h2>
                <p class="section-subheading text-muted">Oferecemos diversos serviços, com soluções inteligentes.</p>
            </div>
            </div>
            <div class="row text-center">
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-dark"></i>
                    <i class="fa fa-asterisk fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="service-heading">Dicas</h4>
                <p class="text-muted">Encontre dicas útes de como ter uma boa entrevista</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-dark"></i>
                    <i class="fa fa-search fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="service-heading">Encontre Empregos</h4>
                <p class="text-muted">Aqui você encontra diversas oportunidades de emprego nas mais diversas categorias</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-dark"></i>
                    <i class="fa fa-feed fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="service-heading">Faça Publicidade</h4>
                <p class="text-muted">Este serviço é mais voltado para aqueles que desejam fazer marketing dos seus negócios, e outros no nosso site, temos planos bem baratos para qualquer um aderir</p>
            </div>
            </div>
        </div>
    </section>
@endsection('content')
