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
			<form class="md-form">

				<input type="text" id="diplome" class="form-control">
    			<label for="diplome" class="">Nom de la compétence</label>

    			<input type="text" id="diplome" class="form-control">
    			<label for="diplome" class="">Niveau</label>

    			<input type="text" id="diplome" class="form-control">
    			<label for="diplome" class="">Pourcentage</label>
				
				<input type="text" id="diplome" class="form-control">
    			<label for="diplome" class="">Logo</label>
			
				<button type="submit" class="btn btn-info">Valider</button>
			</form>
			<hr>
		</div>
		<!-- End Message -->
	</main>
	<!-- End Main -->
<!-- End Body -->
@endsection	