@extends('template.app')

@section('content')
    <section class="capa-sobre mb-5" style="background-image: url('{{ asset('assets/images/bg_4.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-4 p-4 big-text center-all">
                    <p class="text-white">Contactos</p>
                </div>
            </div>
        </div>
    </section>

<!--Section: Contact v.2-->
<section class="container mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Fale conosco</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Você tem alguma pergunta? Por favor, não hesite em nos contatar diretamente. Nossa equipe entrará em contato com você em questão de horas para ajudá-lo.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
        <form id="contact-form" name="contact-form" action="{{url('contact/save')}}" method="POST">
            @csrf

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-4">
                            <label for="name" class="">Seu nome</label>
                            <input type="text" id="author" name="author" class="form-control" value="{{ old('author') }}" required>
                            @error('author')
                                <div class="alert alert-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-4">
                            <label for="email" class="">Email</label>
                            <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="alert alert-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-4">
                            <label for="subject" class="">Assunto</label>
                            <input type="text" id="subject" name="subject" class="form-control" value="{{old('subject')}}">
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form mb-4">
                            <label for="message">Sua mensagem</label>
                            <textarea type="text" id="content" name="content" rows="2" class="form-control md-textarea" required>{{old('content')}}</textarea>
                            @error('content')
                                <div class="alert alert-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                </div>
                <!--Grid row-->

                <div class="text-center text-md-left">
                    <input class="btn btn-dark btn-lg btn-block" type="submit" name="submit" value="Enviar">
                </div>
            </form>


            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fa fa-globe fa-2x"></i>
                    <p>Luanda, CA 94126, Angola</p>
                </li>

                <li><i class="fa fa-phone mt-4 fa-2x"></i>
                    <p>+ 244 997 123 456</p>
                </li>

                <li><i class="fa fa-envelope mt-4 fa-2x"></i>
                    <p>geral@empregosyoyota.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->



@endsection('content')
