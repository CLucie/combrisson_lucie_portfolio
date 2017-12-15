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
		    <a class="nav-link active navactive" href="{{route('home')}}">Présentation</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="{{route('skills')}}">Compétences</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="{{route('portfolio')}}">Portfolio</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="{{route('contact')}}">Contact</a>
		  </li>
		</ul>
	</nav>
	<!-- End Navbar -->
	<div class="container-fluid">
		<div class="row justify-content-around">
			<!-- Aside Left -->
			<aside class="col-3 text-center">
				<div class="card">
				    <div class="text-center">
				    	<img id="avatar" src="img/perso/avatar.png">
				    </div>
				    <div class="card-body">
					    <hr>
				        <div id="socialnet" class="row align-content-between justify-content-center">
							<a class="linksocialnet col-3" href="https://www.linkedin.com/in/clucie/" target="_blank"><i class="fab fa-linkedin fa-4x"></i></a>
							<a class="linksocialnet col-3" href="https://twitter.com/MissLu6_" target="_blank"><i class="fab fa-twitter-square fa-4x"></i></a>
							<a class="linksocialnet col-3" href="https://github.com/CLucie" target="_blank"><i class="fab fa-github-square fa-4x"></i></a>
						</div>
				    </div>
				</div>
			</aside>
			<!-- End Aside Left -->

			<!-- Main -->
			<main class="col-8">
				<h1>
					Bonjour, je suis <span class="highlight">{Lucie Combrisson}</span>.
				</h1>
				<p>
					Étudiante stagiaire de la formation professionnelle dispensée par l'organisme AFORMAC, pour l'obtension du Titre Professionnel Developpeur Web.
				</p>
			</main>
			<!-- End Main -->
		</div>
	</div>
<!-- End Body -->
@endsection	