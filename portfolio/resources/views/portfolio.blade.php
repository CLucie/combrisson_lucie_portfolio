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
		    <a class="nav-link active navactive" href="{{route('portfolio')}}">Portfolio</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="{{route('contact')}}">Contact</a>
		  </li>
		</ul>
	</nav>
	<!-- End Navbar -->
	<div class="container">
		<div class="row justify-content-around vertical-center">
	
			<!-- Carousel Wrapper -->
			<div id="carousel-example-2" class="col-12 carousel slide carousel-fade" data-ride="carousel">
    			<!-- Indicators -->
			    <ol class="carousel-indicators">
			        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
			        <li data-target="#carousel-example-2" data-slide-to="1"></li>
			        <li data-target="#carousel-example-2" data-slide-to="2"></li>
			    </ol>
    			<!-- End Indicators -->
    			<!-- Slides -->
    			<div class="carousel-inner" role="listbox">
        			<div class="carousel-item active">
            			<div class="view hm-black-light">
                			<img class="d-block w-100" src="http://via.placeholder.com/960x540/789625" alt="{alt}">
                				<div class="mask"></div>
            			</div>
            			<div class="carousel-caption">
                			<h3 class="h3-responsive">{title}</h3>
                			<p>{description}</p>
            			</div>
        			</div>
			        <div class="carousel-item">
			            <!--Mask color-->
			            <div class="view hm-black-light">
			                <img class="d-block w-100" src="http://via.placeholder.com/960x540/129876" alt="{alt}">
			                <div class="mask"></div>
			            </div>
			            <div class="carousel-caption">
			                <h3 class="h3-responsive">{title}</h3>
			                <p>{description}</p>
			            </div>
			        </div>
			        <div class="carousel-item">
			            <!--Mask color-->
			            <div class="view hm-black-light">
			                <img class="d-block w-100" src="http://via.placeholder.com/960x540/851736" alt="{alt}">
			                <div class="mask"></div>
			            </div>
			            <div class="carousel-caption">
			                <h3 class="h3-responsive">{title}</h3>
			                <p>{description}</p>
			            </div>
			        </div>
    			</div>
    			<!-- End Slides -->
    			<!--Controls-->
			    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
			        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			        <span class="sr-only">Previous</span>
			    </a>
			    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
			        <span class="carousel-control-next-icon" aria-hidden="true"></span>
			        <span class="sr-only">Next</span>
			    </a>
			    <!-- End Controls -->
			</div>
			<!-- End Carousel Wrapper -->

		</div>
	</div>
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