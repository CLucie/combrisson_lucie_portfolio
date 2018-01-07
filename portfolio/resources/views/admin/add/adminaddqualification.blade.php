@extends('adminlayout')

@section('contenu')
<!-- Body -->
	<!-- Main -->
	<main class="col-9">
		<h3>
			Qualifications <button type="button" class="btn btn-success">Ajouter</button>
		</h3>
		<!-- Message -->
		
		<div>
			<form class="md-form">

				<input type="text" id="diplome" class="form-control">
    			<label for="diplome" class="">Titre de la qualification</label>

    			<input type="text" id="diplome" class="form-control">
    			<label for="diplome" class="">Année de début</label>

    			<input type="text" id="diplome" class="form-control">
    			<label for="diplome" class="">Année de fin</label>
				
				<input type="text" id="diplome" class="form-control">
    			<label for="diplome" class="">Etablissement</label>
				
				<input type="text" id="diplome" class="form-control">
    			<label for="diplome" class="">Ville</label>
				
				<input type="text" id="diplome" class="form-control">
    			<label for="diplome" class="">Code postal</label>
			
				<button type="submit" class="btn btn-info">Valider</button>
			</form>
			<hr>
		</div>
		<!-- End Message -->
	</main>
	<!-- End Main -->
<!-- End Body -->
@endsection	