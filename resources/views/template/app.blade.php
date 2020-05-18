<!doctype html>
<html lang="pt">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{env('APP_NAME')}}</title>
        <meta name="description" content="Encontre empregos no solo angolano." />
        <meta name="keywords" content="emprego, job, recrutamento, angola" />
        <meta name="autor" content="Name: Edivaldo Jorge" />


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"/>

        <!-- Styles -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" />
    </head>

    <body>
        <div id="app">
            <nav class="navbar navbar-expand-lg navbar-light bg-white shadow">
            <div class="container">
                <a class="navbar-band" href="{{ url('/') }}"><img src="{{ asset('assets/images/logo.png') }}"></a>
                <div class="navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class = "nav-link">INÍCIO</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/about') }}" class = "nav-link">SOBRE</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/jobs') }}" class = "nav-link">EMPREGOS</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/contact') }}" class = "nav-link">CONTACTOS</a>
                    </li>
                    </ul>
                </div>
            </div>
            </nav>

            @yield('content')

            <!-- Footer -->
            <footer class="page-footer navbar-dark bg-dark font-small mdb-color pt-4">
            <div class="container text-center text-md-left">
                <div class="row text-center text-md-left mt-3 pb-3">

                <div class="col-md-3 col-lg-6 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Empregos Yoyota</h6>
                    <p>Aqui você encontra o seu emprego ideal.</p>
                </div>

                <hr class="w-100 clearfix d-md-none">

                <div class="col-md-4 col-lg-6 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Contactar</h6>
                    <p>
                    <i class="fa fa-envelope mr-3"></i>geral@empregosyoyota.com</p>
                    <p>
                    <i class="fa fa-phone mr-3"></i>+ 244 997 123 456</p>
                    <p>
                    <i class="fa fa-facebook mr-3"></i> <a href="http://facebook.com/empregosyoyota">Empregos Yoyota</a></p>
                    <p>
                    <i class="fa fa-instagram mr-3"></i><a href="http://instagram.com/empregosyoyota">empregosyoyota</a></p>
                </div>
                </div> <!--row-->
            </div><!--container-->
            </footer>
        </div>
    </body>
</html>
