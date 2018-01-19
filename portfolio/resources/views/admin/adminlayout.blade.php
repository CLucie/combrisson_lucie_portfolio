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
	<div class="row justify-content-start">
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
				<hr>
				<li><a class="nav-link" href="{{route('accueil')}}">Site</a></li><br>
				<hr>
				<li>
                    <!-- Authentication Links -->
                    @guest
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">Connectée sous : 
                                {{ Auth::user()->first_name }}<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a class="deconnexion" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Déconnexion
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </li>
            </ul>
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
</html>