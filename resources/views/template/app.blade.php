<!doctype html>
<html lang="pt">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{env('APP_NAME')}}</title>
        <meta name="description" content="@yield('description')" />
        <meta name="keywords" content="emprego, job, recrutamento, angola" />

        <!-- Open Graph / Facebook -->
		<meta property="og:title" content="@yield('description')">
		<meta property="og:description" content="@yield('description')">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"/>

        <!-- Styles -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" />
    </head>

    <body>
        <div id="app">
            <!-- ======= Navbar Section ======= -->
            <nav class="navbar navbar-expand-lg bg-white">
                <div class="container">
                    <a class="navbar-band" href="{{ url('/') }}"><img src="{{ asset('assets/images/logo.png') }}"></a>
                    <div class="navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="nav nav-pills nav-fill">
                            <li class="nav-item">
                                <a href="{{ url('/') }}" class = "nav-link"><i class="fa fa-home"></i> Início</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/about') }}" class = "nav-link"><i class="fa fa-info-circle"></i> Sobre</a>
                            </li>
                        <li class="nav-item">
                            <a class="nav-link active rounded-pill" href="{{ url('/jobs') }}">Oportunidades</a>
                        </li>
                        </ul>
                    </div>
                </div>
            </nav><!-- End Navbar -->

            @yield('content')

            <!-- Footer -->
            <footer class="page-footer navbar-dark bg-dark font-small mdb-color pt-4">
            <div class="container text-center text-md-left">
                <div class="row text-center text-md-left mt-3 pb-3">

                <div class="col-md-3 col-lg-6 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Empregos Yoyota</h6>
                    <p>Aqui você encontra o seu emprego ideal.</p>
                    <p>Não recrutamos ninguém, as vagas aqui anunciadas pertencem aos anunciantes.</p>
                </div>

                <hr class="w-100 clearfix d-md-none">

                <div class="col-md-4 col-lg-6 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Redes Sociais</h6>
                    <p>
                    <i class="fa fa-facebook mr-3"></i> <a href="http://facebook.com/empregosyoyota">Empregos Yoyota</a></p>
                    <p>
                    <i class="fa fa-instagram mr-3"></i><a href="http://instagram.com/empregosyoyota">empregosyoyota</a></p>
                    <p>
                    <i class="fa fa-linkedin mr-3"></i><a href="http://linkedin.com/company/empregosyoyota">Empregos Yoyota</a></p>
                </div>
                </div> <!--row-->
            </div><!--container-->
            </footer>
        </div>
    </body>
</html>
