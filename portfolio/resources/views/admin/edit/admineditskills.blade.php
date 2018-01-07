@extends('adminlayout')

@section('contenu')
<!-- Body -->
	<!-- Main -->
	<main class="col-9">
		<h3>
			Compétences <button type="button" class="btn btn-success">Ajouter</button>
		</h3>
		<!-- Message -->
		
		<div>
			@foreach ($skills as $skill)
			<form class="md-form">

				<input type="text" id="diplome" class="form-control">
    			<label for="diplome" class="" placeholder="{{$skill->name}}">Nom de la compétence</label>

    			<input type="text" id="diplome" class="form-control">
    			<label for="diplome" class="" placeholder="{{$skill->level}}">Niveau</label>

    			<input type="text" id="diplome" class="form-control">
    			<label for="diplome" class="" placeholder="{{$skill->percentage}}">Pourcentage</label>
				
				<input type="text" id="diplome" class="form-control">
    			<label for="diplome" class="" placeholder="{{$skill->logo}}">Logo</label>
			
				<button type="submit" class="btn btn-info">Valider</button>
			</form>
			<hr>
			@endforeach
		</div>
		<!-- End Message -->
	</main>
	<!-- End Main -->
<!-- End Body -->
@endsection	