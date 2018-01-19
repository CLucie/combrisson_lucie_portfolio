<!DOCTYPE html>
<html>
<!-- Head -->
<head>
	<title>Admin Lucie Combrisson</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS Bootstrap & MD -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/mdb.min.css')}}">
	<!-- FontAwesome -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome/css/fontawesome-all.min.css')}}">
	<!-- MyCSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/adminstyle.css')}}">
</head>
<body>
<!-- End Head -->
<!-- Body -->
	<!-- Form login -->
	<div class="row justify-content-center">
		<div class="card-body vertical-center">
			<form method="POST" action="{{route('log')}}" id="cardlogin" class="col-4 ">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			    <p class="h5 text-center">Connexion</p>

			    <div class="md-form">
			        <i class="fa fa-envelope prefix grey-text"></i>
			        <input type="text" name="email" class="form-control">
			        <label for="defaultForm-email">E-mail</label>
			    </div>

			    <div class="md-form">
			        <i class="fa fa-lock prefix grey-text"></i>
			        <input type="password" name="password" class="form-control">
			        <label for="defaultForm-pass">Mot de passe</label>
			    </div>

			    <div class="text-center">
			        <button class="btn btn-default">Connexion</button>
			    </div>
			</form>
		</div>
	</div>
	<!-- Form login -->
<!-- End Body -->
</body>
<!-- Footer -->
<!-- End Footer -->

<!-- JS Bootstrap & MD -->
<script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>


</html>