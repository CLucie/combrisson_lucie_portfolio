@extends('layout')

@section('contenu')
<?php $page = "competences"; ?>
<!-- Body -->
	@include('inc.menu')
	<div class="container-fluid contenu">
		<div class="row justify-content-around">
			<!-- Aside Left -->
			<aside class="col-xs-13 col-sm-5 col-md-5 col-lg-3 text-center">
				<div class="card">
					{{-- <div class="text-center">
				    	<img id="banner" src="img/perso/lined_paper_diplome.png">
				    </div> --}}
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
			<main class="col-xs-13 col-sm-7 col-md-6 col-lg-8">
				<h2>
					Compétences
				</h2>
				<ul class="col-xs-13 col-sm-10 col-md-10 col-lg-8">
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