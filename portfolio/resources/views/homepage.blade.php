<!DOCTYPE html>
<html>
<head>
	<title>Lucie Combrisson</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS Bootstrap & MD -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/mdb.min.css')}}">
	<!-- FontAwesome -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome/css/fontawesome-all.min.css')}}">
	<!-- MyCSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>

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
	<!-- Footer -->
	<footer class="container-fluid fixed-bottom text-center"">
CLucie 2017 - <a id="mentionleg" href="#">Mentions Légales</a>
	</footer>
	<!-- End Footer -->

	<!-- JS Bootstrap & MD -->
	<script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
	
</body>
</html>