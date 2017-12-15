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
		    <a class="nav-link active navactive" href="{{route('skills')}}">Compétences</a>
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
				    	<img id="banner" src="img/perso/lined_paper_diplome.png">
				    </div>
				    <div class="card-body">
				    	<h2 id="competencestitle">
						Qualifications
						</h2>
					    <hr>
				        <p>
						<span class="dates_diplome">{start-date} - {end_date}</span><br>
						{diploma}
						</p>
						<p>
						<span class="dates_diplome">{start-date} - {end_date}</span><br>
						{diploma}
						</p>
						<p>
						<span class="dates_diplome">{start-date} - {end_date}</span><br>
						{diploma}
						</p>
				    </div>
				</div>
			</aside>
			<!-- End Aside Left -->

			<!-- Main Skill -->
			<main class="col-8">
				<h2>
					Compétences
				</h2>
			</main>
			<!-- End Main Skill -->
		</div>
	</div>
<!-- End Body -->
@endsection	