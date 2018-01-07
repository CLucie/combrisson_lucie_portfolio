@extends('admin/adminlayout')

@section('contenu')
<!-- Body -->
	<!-- Main -->
	<main class="col-9">
		<h3>
			Compétences <button id="btnaddskills" type="button" class="btn btn-success">Ajouter</button>
		</h3>
		<!-- Message -->
		
		<div>
			@foreach ($skills as $skill)
			<h5 class="soustitre">
				{{$skill->name}}
			</h5>
			<p>
				<span class="intitulechamps">Niveau :</span> {{$skill->level}}
			</p>
			<p>
				<span class="intitulechamps">Pourcentage :</span> {{$skill->percentage}}
			</p>
			<p>
				<span class="intitulechamps">Logo :</span> {{$skill->logo}}
			</p>
			<button id="btneditskill" type="button" class="btn btn-info" onclick="javascript:window.location='{{route('adeditskills')}}'; return false;">Modifier</button><button id="btndeleteskill" type="button" class="btn btn-danger">Supprimer</button>
			<hr>
			@endforeach
		</div>
		<!-- End Message -->
	</main>
	<!-- End Main -->
<!-- End Body -->
@endsection	