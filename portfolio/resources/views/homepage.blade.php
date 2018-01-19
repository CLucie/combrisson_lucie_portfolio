@extends('layout')

@section('contenu')
<?php $page = "presentation"; ?>
<!-- Body -->
@include('inc.menu')
	<div class="container-fluid contenu">
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
					Bonjour, je suis <span class="highlight">{{$me->first_name}} {{$me->name}}</span>.
				</h1>
				<p>
					Étudiante stagiaire de la formation professionnelle dispensée par l'organisme AFORMAC, pour l'obtention du Titre Professionnel Developpeur Web.
				</p>
			</main>
			<!-- End Main -->
		</div>
	</div>
<!-- End Body -->
@endsection	