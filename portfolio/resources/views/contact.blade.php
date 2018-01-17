@extends('layout')

@section('contenu')
<!-- Body -->
	<!-- Navbar -->
	<nav class="navbar fixed-top navbar-light bg-light">
  		<a class="navbar-brand" href="{{route('home')}}">
    		<img src="img/perso/cl.svg" width="40" height="40" alt="CL">
  		</a>
  		<ul class="nav">
		  <li class="nav-item">
		    <a class="nav-link" href="{{route('home')}}">Présentation</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="{{route('qualifskills')}}">Compétences</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="{{route('portfolio')}}">Portfolio</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link active navactive" href="{{route('contact')}}">Contact</a>
		  </li>
		</ul>
	</nav>
	<!-- End Navbar -->
	<main class="container">
		<div class="row align-items-center justify-content-center">
			<h4 class="text-center col-9">
				Si vous avez des questions, n'hésitez pas à me contacter en utilisant le formulaire ci-dessous. 
			</h3>
		</div>

		@if ($message = Session::get('success'))
        	<div class="alert alert-success">
            <p>{{ $message }}</p>
        	</div>
    	@endif

		<div class="row align-items-center justify-content-center">
			<div id="cardform" class="card col-6">

				<!-- Form -->
				<form method="POST" action="{{route('adsendmessages')}}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					    <div class="md-form">
					        <i class="fas fa-user prefix grey-text"></i>
					        <input type="text" name="name" class="form-control">
					        <label for="name">Votre nom</label>
					    </div>

					    <div class="md-form">
					        <i class="fas fa-envelope prefix grey-text"></i>
					        <input type="text" name="email" class="form-control">
					        <label for="email">Votre e-mail</label>
					    </div>

					    <div class="md-form">
					        <i class="fas fa-tag prefix grey-text"></i>
					        <input type="text" name="subject" class="form-control">
					        <label for="subject">Sujet</label>
					    </div>

					    <div class="md-form">
					        <i class="fas fa-pencil-alt prefix grey-text"></i>
					        <textarea type="text" name="message" class="md-textarea" style="height: 100px"></textarea>
					        <label for="message">Votre message</label>
					    </div>

				    <div class="text-center">
				        <button class="btn btn-custom sendmessage">Envoyer <i class="fas fa-paper-plane ml-1"></i></button>
				    </div>

				</form>
				<!-- End Form -->

			</div>
		</div>
	</main>
<!-- End Body -->
@endsection	