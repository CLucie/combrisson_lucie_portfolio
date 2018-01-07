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
		    <a class="nav-link active navactive" href="{{route('qualifskills')}}">Compétences</a>
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
					    @foreach ($qualif as $qualification)			    
						<p>
						<span class="dates_diplome">{{$qualification->start_date}} - {{$qualification->end_date}}</span><br>
						{{$qualification->diploma}}
						</p>

						@endforeach
				    </div>
				</div>
			</aside>
			<!-- End Aside Left -->

			<!-- Main Skill -->
			<main class="col-8">
				<h2>
					Compétences
				</h2>
				<ul class="col-8">
					 @foreach ($skills as $skill)
					<li>
    					<span>{{$skill->name}}</span><div class="progress"><div class="progress-bar bg-warning progress-bar-striped active" role="progressbar" style="width: {{$skill->percentage}}%" aria-valuenow="{{$skill->level}}" aria-valuemin="0" aria-valuemax="4"></div></div>
					</li>
					@endforeach
				</ul>
			</main>
			<!-- End Main Skill -->
		</div>
	</div>
<!-- End Body -->
@endsection	