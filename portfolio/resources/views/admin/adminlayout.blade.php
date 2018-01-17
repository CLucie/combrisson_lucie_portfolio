<!DOCTYPE html>
<html>
<!-- Head -->
<head>
	<title>Admin Lucie Combrisson</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="../img/perso/favicon.ico">
	<!-- CSS Bootstrap & MD -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/mdb.min.css')}}">
	<!-- FontAwesome -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome/css/fontawesome-all.min.css')}}">
	<!-- MyCSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/adminstyle.css')}}">
</head>
<!-- End Head -->
<body class="container-fluid">
	<div class="row justify-content-between">
		<!-- aside -->
		<aside col-5>
			<h3 id="titledashboard">
				Dashboard
			</h3>
			<ul>
				<li><a class="nav-link" href="{{route('admessages')}}">Messages</a></li><br>
				<li><a class="nav-link" href="{{route('adqualification')}}">Qualifications</a></li><br>
				<li><a class="nav-link" href="{{route('adskills')}}">Compétences</a></li><br>
				<li><a class="nav-link" href="{{route('adportfolio')}}">Projets</a></li><br>
			</ul>
			<button type="button" class="btn btn-elegant"><i class="fa fa-user-o pr-2" aria-hidden="true"></i>Déconnexion</button>
		</aside>
		<!-- End aside -->
		<!-- Contenu -->
		@yield('contenu')
		<!-- End contenu -->
	</div>
</body>
<!-- Footer -->
<!-- End Footer -->

<!-- JS Bootstrap & MD -->
<script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/adminscript.js')}}"></script>

</body>
</html>