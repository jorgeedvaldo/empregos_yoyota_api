@extends('template.app')

@section('content')
<section class="capa-sobre mb-5" style="background-image: url(' {{ asset('assets/images/bg_2.jpg') }} ');">
	<div class="container">
		<div class="row">
		    <div class="col-md-12 mt-4 p-4 big-text center-all">
				<p class="text-white">SOBRE</p>
		    </div>
		</div>
	</div>
</section>

<section id="sobre" class="mt-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12 p-3">
				<div class="container">
					<h3 class="text-muted">SOBRE A PLATAFORMA</h3>
					<h4>O que é a Empregos Yoyota?</h4>
					<p>É uma plataforma que reúne oportunidades de emprego no solo angolano, tendo como fonte principal o "Jornal de Angola", criada aos 5 de Dezembro de 2018, a Empregos Yoyota tem ajudado muita gente a encontrar empregos no solo angolano.</p>

					<h4>Faça sua candidatura num clique</h4>
					<p>Neste portal, além de você encontrar informações sobre vagas de emprego, também é possível candidatar-se às vagas via e-mail. Com um clique nós enviamos a sua candidatura ao e-mail do empregador.</p>

					<h4>Peça-nos um curriculum moderno</h4>
					<p>Sabemos a importância de ter um curriculum moderno e actualizado, nós ajudamos você a ter um curriculum que se destacará dos demais candidatos, e assim, tendo muita chance para ser escolhido/a na a vaga</p>

					<h4>Publicite aqui o seu negócio ou serviço</h4>
					<p>Nós também ajudamos a divulgar o seu negócio ou serviço na nossa plataforma, fale connosco!</p>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection('content')
