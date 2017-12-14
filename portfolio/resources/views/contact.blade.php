<!DOCTYPE html>
<html>
<head>
	<title>Lucie Combrisson</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS Bootstrap & MD -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
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
		    <a class="nav-link" href="{{route('home')}}">Présentation</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="{{route('skills')}}">Compétences</a>
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
		<div class="row align-items-center justify-content-center">
			<div id="cardform" class="card col-6">

				<!-- Form -->
				<form>

				    <div class="md-form">
				        <i class="fas fa-user prefix grey-text"></i>
				        <input type="text" id="form3" class="form-control">
				        <label for="form3">Votre nom</label>
				    </div>

				    <div class="md-form">
				        <i class="fas fa-envelope prefix grey-text"></i>
				        <input type="text" id="form2" class="form-control">
				        <label for="form2">Votre e-mail</label>
				    </div>

				    <div class="md-form">
				        <i class="fas fa-tag prefix grey-text"></i>
				        <input type="text" id="form32" class="form-control">
				        <label for="form34">Sujet</label>
				    </div>

				    <div class="md-form">
				        <i class="fas fa-pencil-alt prefix grey-text"></i>
				        <textarea type="text" id="form8" class="md-textarea" style="height: 100px"></textarea>
				        <label for="form8">Votre message</label>
				    </div>

				    <div class="text-center">
				        <button class="btn btn-custom">Envoyer <i class="fas fa-paper-plane ml-1"></i></button>
				    </div>

				</form>
				<!-- End Form -->

			</div>
		</div>
	</main>
</body>

	
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